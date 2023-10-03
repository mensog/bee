<?php

namespace Database\Seeders;

use Database\Factories\CategoryFactory;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory()->count(10)->create();

        $categories->each(function ($category) {
            Product::factory()->count(5)->create([
                'category_id' => $category->id,
                'img_url' => 'https://cdn.leroymerlin.ru/lmru/image/upload/dpr_2.0,f_auto,q_auto,w_240,h_240,c_pad,b_white,d_photoiscoming.png/v1693922575/lmcode/9QX0BwMK0kOIvojWNDCpFw/18482108.png',
            ]);
        });
    }
}
