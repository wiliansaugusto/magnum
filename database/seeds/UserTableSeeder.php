<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => "Master",
            'email' => "master@master.com.br",
            'password' => Hash::make('123456'),
        ]);
    }
}
