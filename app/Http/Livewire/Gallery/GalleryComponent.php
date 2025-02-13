<?php

namespace App\Http\Livewire\Gallery;

use App\Models\Gallery;
use Livewire\Attributes\On;
use Livewire\Component;

class GalleryComponent extends Component
{
    #[On('refreshTable')]
    public function render()
    {
        $galleries = Gallery::all();
        return view('livewire.gallery.gallery-component', compact('galleries'));
    }
}
