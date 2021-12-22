<?php


namespace App\Http\Livewire;


use App\Models\Services;
use Livewire\Component;
use Livewire\WithPagination;

use Illuminate\Support\Facades\Auth;

class ServicesComponent extends Component
{


    public function render()
    {
    

        $services = Services::paginate(6);
        return view('livewire.services-component', ['services' => $services])->layout('layouts.base');
    }

   


    // public function redirects()
    // {
    //    $usertype= Auth::user()->usertype;

    //    if($usertype=='1')
    //    {
    //        return view('admin.adminhome');
        
    //    }

     

    //    else{
    //        return view('/');
    //    }
    // }

    
}
