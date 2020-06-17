<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Categoria::create(['nm_categoria'=>'Educacional']);
        App\Categoria::create(['nm_categoria'=>'Motivacional']);
        App\Categoria::create(['nm_categoria'=>'Finanças']);
        App\Categoria::create(['nm_categoria'=>'Tecnológica']);
    }
}
