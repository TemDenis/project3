<?php

namespace App\Http\Livewire;

use App\Models\Services;
use Livewire\Component;
use Livewire\WithPagination;



class AdminServiceComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $services = Services::paginate(4);
        return view('livewire.admin-service-component', ['services' => $services]);
    }
}
