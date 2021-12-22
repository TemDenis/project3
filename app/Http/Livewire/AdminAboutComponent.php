<?php

namespace App\Http\Livewire;


use App\Models\About;
use Livewire\Component;

class AdminAboutComponent extends Component
{
    public function render()
    {

        $abouts = About::orderBy('created_at', 'DESC')->paginate();
        return view('livewire.admin-about-component', ['abouts' => $abouts]);
    }
}
