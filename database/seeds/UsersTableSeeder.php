<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'admin@gmail.com',
            'admin' => 1,
            'avatar' => 'http://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png'
        ]);
        User::create([
            'name' => 'Loka',
            'password' => bcrypt('alaa'),
            'email' => 'loka@gmail.com',
            'avatar' => "http://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png"
        ]);
    }
}
