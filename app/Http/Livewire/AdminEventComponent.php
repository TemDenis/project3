<?php

namespace App\Http\Livewire;

use App\Models\Events;
use Livewire\Component;

class AdminEventComponent extends Component
{
    public function render()
    {
        $events = Events::orderBy('created_at', 'DESC')->paginate(4);
        return view('livewire.admin-event-component', ['events' => $events]);
    }
}
