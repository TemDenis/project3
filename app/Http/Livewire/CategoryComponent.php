<?php

namespace App\Http\Livewire;

use App\Models\OurServices;
use App\Models\OurTeam;
use App\Models\Events;
use App\Models\Product;
use App\Models\Category;
use Livewire\Component;
 use Livewire\WithPagination;

use Illuminate\Support\Facades\Auth;


class CategoryComponent extends Component
{
    public $category_slug;

    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
    }
    use WithPagination;
    public function render()
    {

        $ourteams = OurTeam::paginate(3);
        $ourservices = OurServices::paginate(3);
        $events = Events::paginate(2);
       
        $categories = Category::all();
        $category = Category::where('slug', $this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;
        $products = Product::where('category_id', $category_id)->paginate(12);
        return view('livewire.category-component', ['ourteams' => $ourteams, 'ourservices' => $ourservices, 'events' => $events, 'products' => $products, 'categories' => $categories, 'category_name' => $category_name])->layout('layouts.base');
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