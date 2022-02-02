<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Product;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('product-data');
        foreach ($products as $product) {
            $new_product = new Product();

            $new_product->name = $product['name'];
            $new_product->price = $product['price'];
            $new_product->description = $product['description'];
            $new_product->available = $product['available'];

            $new_product->save();
        }
    }
}
