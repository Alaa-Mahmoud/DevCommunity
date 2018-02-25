<?php

use Illuminate\Database\Seeder;

class ChannelsTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel1= ['title' => 'Laravel Spark', 'slug'=> str_slug('Laravel Spark')];
        $channel2= ['title' => 'Vuejs', 'slug'=> str_slug('Vuejs')];
        $channel3= ['title' => 'Angular', 'slug'=> str_slug('Angular')];
        $channel4= ['title' => 'Lumen', 'slug' =>str_slug('Lumen')];
        $channel5= ['title' => 'Forge' , 'slug'=> str_slug('Forge')];
        \App\Channel::create($channel1);
        \App\Channel::create($channel2);
        \App\Channel::create($channel3);
        \App\Channel::create($channel4);
        \App\Channel::create($channel5);



    }
}
