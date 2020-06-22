<?php

use Illuminate\Database\Seeder;

class CidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cidade = \App\Cidade::where('id', '1')->first();
        $cidade->cod_ibge ='3550308';
        $cidade->nm_cidade="São Paulo";
        $cidade->id_estado='25';
        $cidade->save();

        
    }
}
