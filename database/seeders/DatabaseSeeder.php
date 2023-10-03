<?php

namespace Database\Seeders;

use Database\Factories\CategoryFactory;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Category;
use App\Models\Product;
use Symfony\Component\Process\Process;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // App\Models\User::factory()->count(10)->create();

        // App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $categories = Category::factory()->count(20)->create();
        
        // Product::factory()->count(50)->make()->each(function ($product) use ($categories) {
        //     $product->category_id = Arr::random($categories)['id'];
        //     $product->save();
        // });
        

        Category::factory()->count(10)->make()->each(function ($category) {
            Product::factory()->count(10)->make()->each(function ($product) use ($category) {
                dd($category);
                $product->category_id = $category->category_id;
                $product->img_url = 'https://cdn.leroymerlin.ru/lmru/image/upload/dpr_2.0,f_auto,q_auto,w_240,h_240,c_pad,b_white,d_photoiscoming.png/v1693922575/lmcode/9QX0BwMK0kOIvojWNDCpFw/18482108.png';
                $product->save();
            });
        });
    }
}
