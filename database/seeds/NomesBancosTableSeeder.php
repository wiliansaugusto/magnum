<?php

use Illuminate\Database\Seeder;

class NomesBancosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\NomeBanco::create([
            'nm_banco'=> "Banco do Brasil S.A.",
            'cd_banco'=> "001",
        ]);
        \App\NomeBanco::create([
            'nm_banco'=> "Banco Itaú S.A.",
            'cd_banco'=> "341",
        ]);
        \App\NomeBanco::create([
            'nm_banco'=> "Banco Santander (Brasil) S.A.",
            'cd_banco'=> "033",
        ]);
        \App\NomeBanco::create([
            'nm_banco'=> "Itaú Unibanco Holding S.A.",
            'cd_banco'=> "652",
        ]);
        \App\NomeBanco::create([
            'nm_banco'=> "Banco Bradesco S.A.",
            'cd_banco'=> "237",
        ]);
        \App\NomeBanco::create([
            'nm_banco'=> "Banco Citibank S.A.",
            'cd_banco'=> "745",
        ]);
        \App\NomeBanco::create([
            'nm_banco'=> "Caixa Econômica Federal",
            'cd_banco'=> "104",
        ]);
        \App\NomeBanco::create([
            'nm_banco'=> "Banco Mercantil do Brasil S.A.",
            'cd_banco'=> "389",
        ]);
        \App\NomeBanco::create([
            'nm_banco'=> "Banco Rural S.A.",
            'cd_banco'=> "453",
        ]);
        \App\NomeBanco::create([
            'nm_banco'=> "Banco Safra S.A.",
            'cd_banco'=> "422",
        ]);
        \App\NomeBanco::create([
            'nm_banco'=> "Banco Rendimento S.A.",
            'cd_banco'=> "633",
        ]);
    }
}
