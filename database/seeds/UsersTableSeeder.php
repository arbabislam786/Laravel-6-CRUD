<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app\User::Create([
            'name' =>'abc',
            'email' =>'abc@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
