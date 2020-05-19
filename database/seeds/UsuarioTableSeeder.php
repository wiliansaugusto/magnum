<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Usuario::create([
            'nm_usuario' => 'Master',
            'email' => "master@master.com",
            'password' => Hash::make('123456'),
            'ds_nickname' => 'Master',
            'id_perfil' => 1,
        ]);
    }
}
