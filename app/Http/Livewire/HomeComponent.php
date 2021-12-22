<?php

namespace App\Http\Livewire;

use App\Models\OurServices;
use App\Models\Services;
use App\Models\OurTeam;
use App\Models\Events;
use App\Models\Product;
use App\Models\Category;
use App\Models\HomeCategory;
use Livewire\Component;
 use Livewire\WithPagination;

use Illuminate\Support\Facades\Auth;


class HomeComponent extends Component
{
    use WithPagination;
    public function render()
    {

        $ourteams = OurTeam::paginate(3);
        $services = Services::paginate(3);
        $events = Events::paginate(2);
         $products = Product::paginate(6);
         $ourservices = OurServices::orderBy('created_at', 'DESC')->paginate(3);
        $category = HomeCategory::find(1);
        $cats = explode(',',$category->sel_categories);
        $categories = Category::whereIn('id', $cats)->get();
        $no_of_products = $category->no_of_products;
        return view('livewire.home-component', ['ourteams' => $ourteams, 'services' => $services, 'events' => $events, 'products' => $products, 'categories' => $categories, 'no_of_products' => $no_of_products, 'ourservices' => $ourservices])->layout('layouts.base');
    }

    public function redirects()
    {
       $usertype= Auth::user()->usertype;

       if($usertype=='1')
       {
           return view('admin.adminhome');
        
       }

       else{
           return view('/');
       }
    }
}
 



























