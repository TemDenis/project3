<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class BlogComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->paginate(5);
        $centerblogs = Blog::orderBy('created_at', 'DESC')->paginate(4);
        return view('livewire.blog-component', ['blogs'=>$blogs, 'centerblogs' => $centerblogs])->layout('layouts.base');
    }
}
