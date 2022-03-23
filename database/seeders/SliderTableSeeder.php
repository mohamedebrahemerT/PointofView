<?php

namespace Database\Seeders;

use Hash;
use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          /////////////// Slider  
            $add=new Slider;
            $add->title='';
            $add->desc='';
            $add->img='Slider/banner.jpg';
            $add->url='';
            $add->save();


            $add=new Slider;
            $add->title='';
            $add->desc='';
            $add->img='Slider/banner2.jpg';
            $add->url='';
            $add->save();

            $add=new Slider;
            $add->title='';
            $add->desc='';
            $add->img='Slider/banner3.jpg';
            $add->url='';
            $add->save();

            






    }
}
