<?php

namespace App\Http\Livewire\Video;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Livewire\Attributes\On;
use Masmerise\Toaster\Toaster as ToasterToaster;

class Form extends Component
{
    use WithFileUploads;

    public $title;
    public $url;
    public $image;
    public $is_edit;
    protected $listeners = ['videoModal' => 'videoModal'];
    public $openModal = false;
    public $id;

    public function videoModal()
    {
        $this->openModal = true;
    }

    protected $rules = [
        'title' => 'required|string|max:255',
        'url' => 'required|url',
        'image' => 'nullable|image|max:10240',  // Image validation (max size 10MB)
    ];

    public function save()
    {
        $validated = $this->validate();

        $video = $this->is_edit ? Video::find($this->id) : new Video();

        $video->title = $this->title;
        $video->url = $this->url;

        if ($this->image instanceof UploadedFile) {
            // Delete old image if editing
            if ($this->is_edit && $video->image) {
                Storage::delete($video->image);
            }
        // dd($this->image);
            // Store new image
            $path = $this->image->store('videos', 'public');
            $video->image = $path;
        } elseif ($this->is_edit) {
            $video->image = $this->image;
        }

        $video->save();
        $message = $this->is_edit ? "Edited Successfully!" : "Created Successfully!";

        ToasterToaster::success($message);
        $this->openModal = false;
        $this->is_edit = false;
        $this->reset();
        $this->dispatch('refreshTable');
    }
    #[On('edit-video')]
    public function edit(Video $video)
    {
        $this->openModal = true;

        $this->title = $video->title;
        $this->url = $video->url;
        $this->image = $video->image;
        $this->is_edit = true;
        $this->id = $video->id;
    }

    public function render()
    {
        return view('livewire.video.form');
    }
}
