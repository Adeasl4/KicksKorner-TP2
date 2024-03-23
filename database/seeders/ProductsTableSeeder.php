<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $files = ['productsm.json', 'productsk.json', 'productsw.json'];

        foreach ($files as $file) {
            $json = File::get("database/data/{$file}"); // Adjust path as necessary
            $products = json_decode($json);

            foreach ($products as $key => $value) {
                DB::table('products')->insert([
                    'name' => $value->name,
                    'price' => $value->price,
                    'image_url' => $value->image,
                    'description' => $value->description,
                    'stock' => $value->stock,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
