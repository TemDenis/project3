<?php

namespace App\Http\Livewire;

use App\Models\About;
use App\Models\Events;
use Livewire\Component;
use Livewire\WithPagination;

class AboutComponent extends Component
{

    use WithPagination;
    public function render()
    {
        
        $abouts = About::paginate(2);
        $events = Events::paginate(2);
        return view('livewire.about-component', ['abouts' => $abouts, 'events' => $events])->layout('layouts.base');
    }
}
