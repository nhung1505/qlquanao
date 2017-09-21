<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->id = 1;
        $category->name = 'Asus';
        $category->save();

        $category = new Category();
        $category->id = 2;
        $category->name = 'SamSung';
        $category->save();

        $category = new Category();
        $category->id = 3;
        $category->name = 'Iphone';
        $category->save();

        $category = new Category();
        $category->id = 4;
        $category->name = 'NoKia';
        $category->save();

        $category = new Category();
        $category->id = 5;
        $category->name = 'Oppo';
        $category->save();

        $category = new Category();
        $category->id = 6;
        $category->name = 'Lumia';
        $category->save();

        $category = new Category();
        $category->id = 7;
        $category->name = 'Sony';
        $category->save();
    }
}
