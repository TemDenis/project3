<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ServicesComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\AdminServiceComponent;
use App\Http\Livewire\AdminTeamComponent;
use App\Http\Livewire\AdminEventComponent;
use App\Http\Livewire\AdminAboutComponent;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class);
Route::get('/redirects', [HomeComponent::class,'redirects']);

Route::get('/about', AboutComponent::class);

Route::get('/services', ServicesComponent::class);

Route::get('/blog', Blogcomponent::class);
 
Route::get('/contact', ContactComponent::class);

 Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');


 Route::get('/services', AdminServiceComponent::class, "services");

 Route::get('/team', AdminTeamComponent::class, "team");

 Route::get('/event', AdminEventComponent::class, "event");

 Route::get('/about', AdminAboutComponent::class, "about");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


