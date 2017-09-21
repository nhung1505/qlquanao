<?php

use Illuminate\Database\Seeder;
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
        $product = new Product();
        $product->id = 1;
        $product->name = 'Inphone 7 32GB';
        $product->category_id = '3';
        $product->description = 'fefefef';
        $product->price = 10000000;
        $product->image = 'iphone-78-400x460.png';
        $product->unit = 'hop';
        $product->new = '1';
        $product->save();


        $product = new Product();
        $product->id = 2;
        $product->name = 'Inphone 7 64GB';
        $product->category_id = '3';
        $product->description = 'fefefef';
        $product->price = 10000000;
        $product->image = 'Iphone7-64GB.jpg';
        $product->unit = 'hop';
        $product->new = '1';
        $product->save();

        $product = new Product();
        $product->id = 3;
        $product->name = 'Nokia X68';
        $product->category_id = '4';
        $product->description = 'fefefef';
        $product->price = 10000000;
        $product->image = 'nokiax68gb1.png';
        $product->unit = 'hop';
        $product->new = '1';
        $product->save();



        $product = new Product();
        $product->id = 4;
        $product->name = 'sony-xperia-x1';
        $product->category_id = '7';
        $product->description = 'fefefef';
        $product->price = 10000000;
        $product->image = 'sony-xperia-x-1-400x460.png';
        $product->unit = 'hop';
        $product->new = '1';
        $product->save();

        $product = new Product();
        $product->id = 5;
        $product->name = 'sony-xperia-z5';
        $product->category_id = '7';
        $product->description = 'fefefef';
        $product->price = 10000000;
        $product->image = 'sony-xperia-z5-dual-400x460.png';
        $product->unit = 'hop';
        $product->new = '2';
        $product->save();

        $product = new Product();
        $product->id = 7;
        $product->name = 'sony-xperia-x1';
        $product->category_id = '7';
        $product->description = 'fefefef';
        $product->price = 10000000;
        $product->image = 'sony-xperia-x-1-400x460.png';
        $product->unit = 'hop';
        $product->new = '2';
        $product->save();

        $product = new Product();
        $product->id = 8;
        $product->name = 'HTC ONE M9';
        $product->category_id = '2';
        $product->description = 'fefefef';
        $product->price = 10000000;
        $product->image = 'htc-one-m9.jpg';
        $product->unit = 'hop';
        $product->new = '2';
        $product->save();

        $product = new Product();
        $product->id = 9;
        $product->name = 'IPhone 4S';
        $product->category_id = '3';
        $product->description = 'fefefef';
        $product->price = 10000000;
        $product->image = 'appleiphone4s2.png';
        $product->unit = 'hop';
        $product->new = '2';
        $product->save();

        $product = new Product();
        $product->id = 10;
        $product->name = 'Samsung Galaxy J7 Pro (Super Combo 4G)';
        $product->category_id = '2';
        $product->description = 'fefefef';
        $product->price = 6990000;
        $product->image = 'samsungJ7.jpeg';
        $product->unit = 'hop';
        $product->new = '2';
        $product->save();

        $product = new Product();
        $product->id = 11;
        $product->name = 'Samsung Galaxy J3 Pro';
        $product->category_id = '2';
        $product->description = 'fefefef';
        $product->price = 4490000;
        $product->image = 'samsungJ3.jpeg';
        $product->unit = 'hop';
        $product->new = '2';
        $product->save();

        $product = new Product();
        $product->id = 12;
        $product->name = 'Samsung Galaxy S8';
        $product->category_id = '2';
        $product->description = 'fefefef';
        $product->price = 18000000;
        $product->image = 'samsungS8.jpeg';
        $product->unit = 'hop';
        $product->new = '2';
        $product->save();

        $product = new Product();
        $product->id = 13;
        $product->name = 'Nokia 8';
        $product->category_id = '4';
        $product->description = 'fefefef';
        $product->price = 14990000;
        $product->image = 'Nokia8.jpeg';
        $product->unit = 'hop';
        $product->new = '2';
        $product->save();

        $product = new Product();
        $product->id = 14;
        $product->name = 'Asus ZenFone 3 Max';
        $product->category_id = '1';
        $product->description = 'fefefef';
        $product->price = 4490000;
        $product->image = 'asus3.jpeg';
        $product->unit = 'hop';
        $product->new = '2';
        $product->save();







    }
}
