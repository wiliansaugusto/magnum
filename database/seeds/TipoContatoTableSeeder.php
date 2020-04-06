<?php

use Illuminate\Database\Seeder;

class TipoContatoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\TipoContato::create([
            'nm_tipo_contato' => "Celular",
        ]);
        \App\TipoContato::create([
            'nm_tipo_contato' => "E-mail",
        ]);
        \App\TipoContato::create([
            'nm_tipo_contato' => "Telefone",
        ]);
        \App\TipoContato::create([
            'nm_tipo_contato' => "Skype",
        ]);
        \App\TipoContato::create([
            'nm_tipo_contato' => "WhatsApp",
        ]);
    }
}
