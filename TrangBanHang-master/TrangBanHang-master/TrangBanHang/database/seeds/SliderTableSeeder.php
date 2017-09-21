<?php

use Illuminate\Database\Seeder;
use App\Slide;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slide = new Slide();
        $slide->id = '1';
        $slide->link = 'ok';
        $slide->image = 'home-slider-1.jpg';
        $slide->save();

        $slide = new Slide();
        $slide->id = '2';
        $slide->link = 'ok';
        $slide->image = 'home-slider-2.jpg';
        $slide->save();

    }
}
