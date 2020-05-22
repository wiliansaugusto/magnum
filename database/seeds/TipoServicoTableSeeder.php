<?php

use Illuminate\Database\Seeder;

class TipoServicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tipoServico=[
            'Mestre de Cerimônia',
            'Moderador de Debates',
            'Palestra',
            'Presença Vip',
            'Talkshow',
            'Show',
            'Stand-up',
            'Peça de teatro',
            'Media training',
            'aula show',
        ];
        foreach ($tipoServico as $servico){
            App\TiposDeServico::create([
                'nm_tipo_servico'=>$servico
            ]);
        }
    }
}


