<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = config('categories');

        foreach ($categories as $category) {
            $c = new Category();
            $c->name = $category['name'];
            $c->image = $category['image'];
            $c->slug = Str::slug($c->name, '-');

            $c->save();
        }
    }
}
