<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ChannelsTabelSeeder::class);
        $this->call(DisucssionTableSeeder::class);
        $this->call(RepliesTableSeeder::class);


    }
}
