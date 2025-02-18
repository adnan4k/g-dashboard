<?php

namespace App\Http\Livewire\Video;

use App\Models\Video;
use Livewire\Attributes\On;
use Livewire\Component;

class VideoComponent extends Component
{   
    
    #[On('refreshTable')]
    public function render()
    {
      $videos = Video::all();
        return view('livewire.video.video-component',
        ['videos'=>$videos]
        );
    }
}
