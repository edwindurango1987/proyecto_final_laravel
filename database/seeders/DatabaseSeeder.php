<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Image;
use App\Models\Product;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $categories=Category::factory(5)->create();
        $users=User::factory(5)->create();

        $products=Product::factory(10)
        ->create()
        ->each (function($product) use ($categories){

            $images = Image::factory(mt_rand(2, 4))->make();
            $product->images()->saveMany($images);
        }
    );
    }
}
