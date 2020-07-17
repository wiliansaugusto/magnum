<?php

use Illuminate\Database\Seeder;

class TipoAcessorTableSeeder extends Seeder
{
    public function run()
    {
        App\TipoAcessor::create([
            'nm_tp_acessor' => "Pessoal",
        ]);
        App\TipoAcessor::create([
            'nm_tp_acessor' => "Profissional",
        ]);
        App\TipoAcessor::create([
            'nm_tp_acessor' => "Marketing",
        ]);
        App\TipoAcessor::create([
            'nm_tp_acessor' => "De Imagem",
        ]);
        
    }
}
