<?php

use Illuminate\Database\Seeder;

class SubCategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        App\SubCategoria::create([
            'id_categoria'=>'1',
            'nm_sub_cat'=>'Aprendendo a aprender'
        ]);
        App\SubCategoria::create([
            'id_categoria'=>'1',
            'nm_sub_cat'=>'Matemática Simples'
        ]);
        App\SubCategoria::create([
            'id_categoria'=>'2',
            'nm_sub_cat'=>'Seja a Águia dos negócios '
        ]);
        App\SubCategoria::create([
            'id_categoria'=>'2',
            'nm_sub_cat'=>'Vencendo um dia por vez'
        ]);
        App\SubCategoria::create([
            'id_categoria'=>'3',
            'nm_sub_cat'=>'Saúde nas Finanças'
        ]);
        App\SubCategoria::create([
            'id_categoria'=>'3',
            'nm_sub_cat'=>'Poupar liberta'
        ]);
        App\SubCategoria::create([
            'id_categoria'=>'4',
            'nm_sub_cat'=>'Banco de Dados de A à Z'
        ]);
        App\SubCategoria::create([
            'id_categoria'=>'4',
            'nm_sub_cat'=>'Desenvolva em JavaScript'
        ]);
    }
}
