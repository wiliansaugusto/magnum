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
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
=======
        $this->call(NomesBancosTableSeeder::class);
        $this->call(TipoContatoTableSeeder::class);
        $this->call(TipoEnderecoTableSeeder::class);
        $this->call(IdiomasTableSeeder::class);
        $this->call(CidadeTableSeeder::class);
        $this->call(PerfilTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
    }
}
