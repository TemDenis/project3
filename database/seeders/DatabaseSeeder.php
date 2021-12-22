<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Blog::factory(9)->create();
        \App\Models\Services::factory(4)->create();
        \App\Models\OurTeam::factory(3)->create();
        \App\Models\OurServices::factory(3)->create();
        // \App\Models\Events::factory(2)->create();
        \App\Models\About::factory(2)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\Product::factory(12)->create();
        
    }
}
