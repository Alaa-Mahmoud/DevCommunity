<?php

use Illuminate\Database\Seeder;

class DisucssionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Discussion::create([
           'user_id' =>1,
           'channel_id' => 2,
           'title' => 'Rest API',
            'content' => 'industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make',
            'slug' => str_slug('Rest Api')
        ]);

        \App\Discussion::create([
            'user_id' =>1,
            'channel_id' => 3,
            'title' => 'angular 5 http',
            'content' => 'industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make',
            'slug' => str_slug('angular 5 http')
        ]);
        \App\Discussion::create([
            'user_id' =>2,
            'channel_id' => 4,
            'title' => 'some issues',
            'content' => 'industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make',
            'slug' => str_slug('some issues')
        ]);
        \App\Discussion::create([
            'user_id' =>2,
            'channel_id' => 3,
            'title' => 'Veujs industry',
            'content' => 'industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make',
            'slug' => str_slug('Veujs industry')
        ]);
    }
}
