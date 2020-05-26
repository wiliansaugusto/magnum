<?php

use Illuminate\Database\Seeder;

class TipoEnderecoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\TipoEndereco::create([
            'nm_tipo_endereco' => "Endereço da Empresa",
        ]);
        \App\TipoEndereco::create([
            'nm_tipo_endereco' => "Endereço de Correspondência",
        ]);
    }
}
