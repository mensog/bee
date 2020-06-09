<?php

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
        factory(App\Category::class, 50)->create()->each(function (\App\Category $category) {
            $category->products()->saveMany(factory(App\Product::class, rand(20, 100))->make());
        });
    }
}
