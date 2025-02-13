<?php

namespace App\Http\Livewire\Gallery;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Masmerise\Toaster\Toaster;

class Form extends Component
{
    use WithFileUploads;
    public $title;
    public $image;
    public $is_edit;
    public $id;
    public $openModal = false;
    protected $listeners = ['galleryModal'=>'galleryModal'];
    public function galleryModal()
    {
        // dd('here it is');
        $this->openModal = true;
    }
    
    public function save()
    {
        $this->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $gallery = $this->is_edit ? Gallery::find($this->id) : new Gallery();

        if ($this->image instanceof \Illuminate\Http\UploadedFile) {
            if ($this->is_edit && $gallery->image) {
                // Delete the old image if editing
                Storage::delete($gallery->image);

            }
            // Store the new image

            $path = $this->image->store('galleries', 'public');

            $gallery->image = $path;
        } elseif ($this->is_edit) {
            $gallery->image = $this->image;
        }
        $gallery->save();
        $message = $this->is_edit ? "Edited Successfully!" : "Created Successfully!";

        Toaster::success($message);
        $this->openModal = false;
        $this->is_edit = false;
        $this->reset();
        $this->dispatch('refreshTable');    }

    public function render()
    {
        return view('livewire.gallery.form');
    }
}
