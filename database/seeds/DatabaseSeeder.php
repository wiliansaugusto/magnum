<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NomesBancosTableSeeder::class);
        $this->call(TipoContatoTableSeeder::class);
        $this->call(TipoEnderecoTableSeeder::class);
        $this->call(IdiomasTableSeeder::class);
        $this->call(CidadeTableSeeder::class);
        $this->call(PerfilTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
    }
}
