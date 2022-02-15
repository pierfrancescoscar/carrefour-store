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
        $categories =  [
            'carne', 'pesce', 'prodotti biologici', 'stili alimentari', 'enoteca', 'mascherine e igenizzanti', 'frutta', 'verdura', 'uova latte e latticini', 'salumi e formaggi', 'gastronomia', 'pane farina e preparati', 'dispensa', 'acqua e analcolici', 'gelati e surgelati', 'bambini e baby',
            'cura della persona', 'repellenti e insetticidi', 'bucato', 'cura della casa', 'animali', 'intimo', 'limited edition', 'casalinghi', 'cartoleria e lampadine'
        ];

        foreach ($categories as $category) {
            $c = new Category();
            $c->name = $category;
            $c->slug = Str::slug($c->name, '-');

            $c->save();
        }
    }
}
