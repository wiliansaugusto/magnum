<?php

use Illuminate\Database\Seeder;

class IdiomasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Idiomas::create([
            'ds_idioma' => "Português",
        ]);

        \App\Idiomas::create([
            'ds_idioma' => "Inglês",
        ]);
        \App\Idiomas::create([
            'ds_idioma' => "Espanhol",
        ]);
        \App\Idiomas::create([
            'ds_idioma' => "Francês",
        ]);
        \App\Idiomas::create([
            'ds_idioma' => "Mandarim",
        ]);
        \App\Idiomas::create([
            'ds_idioma' => "Alemão",
        ]);
        \App\Idiomas::create([
            'ds_idioma' => "Árabe",
        ]);
        \App\Idiomas::create([
            'ds_idioma' => "Japonês",
        ]);    }
}
