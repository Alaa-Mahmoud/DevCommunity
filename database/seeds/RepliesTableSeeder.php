<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Replay::create([
            'user_id' => 1,
            'discussion_id' =>2,
            'content' => 'industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make'
        ]);
        \App\Replay::create([
            'user_id' => 2,
            'discussion_id' =>2,
            'content' => 'industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make'
        ]);
        \App\Replay::create([
            'user_id' => 1,
            'discussion_id' =>3,
            'content' => 'industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make'
        ]);
        \App\Replay::create([
            'user_id' => 2,
            'discussion_id' =>4,
            'content' => 'industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make'
        ]);
    }
}
