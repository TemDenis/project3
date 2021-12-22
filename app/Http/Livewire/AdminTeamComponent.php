<?php

namespace App\Http\Livewire;

use App\Models\OurTeam;
use Livewire\Component;

class AdminTeamComponent extends Component
{
    public function render()
    {
        $teams  = OurTeam::orderBy('created_at', 'DESC')->paginate(3);
        return view('livewire.admin-team-component', ['teams' => $teams]);
    }
}
