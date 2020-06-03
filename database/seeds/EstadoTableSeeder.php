<?php

use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Estado::create([
            'nm_estado'=>'Acre',
            'id_pais' =>'31',
            'ds_sg_estado'=>'AC',
			'cod_ibge'=>'12'
        ]);
        App\Estado::create([
            'nm_estado'=>'Alagoas',
            'id_pais' =>'31',
            'ds_sg_estado'=>'AL',
			'cod_ibge'=>'27'
        ]);
        App\Estado::create([
            'nm_estado'=>'Amapá',
            'id_pais' =>'31',
            'ds_sg_estado'=>'AP',
			'cod_ibge'=>'16',
        ]);
        App\Estado::create([
            'nm_estado'=>'Amazonas',
            'id_pais' =>'31',
            'ds_sg_estado'=>'AM',
			'cod_ibge'=>'13'
        ]);
        App\Estado::create([
            'nm_estado'=>'Bahia',
            'id_pais' =>'31',
            'ds_sg_estado'=>'BA',
			'cod_ibge'=>'29'
        ]);
        App\Estado::create([
            'nm_estado'=>'Ceará',
            'id_pais' =>'31',
            'ds_sg_estado'=>'CE',
			'cod_ibge'=>'23'
        ]);
        App\Estado::create([
            'nm_estado'=>'Distrito Federal',
            'id_pais' =>'31',
            'ds_sg_estado'=>'DF',
			'cod_ibge'=>'53'
        ]);
        App\Estado::create([
            'nm_estado'=>'Espírito Santo',
            'id_pais' =>'31',
            'ds_sg_estado'=>'ES',
			'cod_ibge'=>'32'
        ]);
        App\Estado::create([
            'nm_estado'=>'Goiás',
            'id_pais' =>'31',
            'ds_sg_estado'=>'GO',
			'cod_ibge'=>'52'
        ]);
        App\Estado::create([
            'nm_estado'=>'Maranhão',
            'id_pais' =>'31',
            'ds_sg_estado'=>'MA',
			'cod_ibge'=>'21'
        ]);
        App\Estado::create([
            'nm_estado'=>'Mato Grosso',
            'id_pais' =>'31',
            'ds_sg_estado'=>'MT',
			'cod_ibge'=>'51'
        ]);
        App\Estado::create([
            'nm_estado'=>'Mato Grosso do Sul',
            'id_pais' =>'31',
            'ds_sg_estado'=>'MS',
			'cod_ibge'=>'50'
        ]);
        App\Estado::create([
            'nm_estado'=>'Minas Gerais',
            'id_pais' =>'31',
            'ds_sg_estado'=>'MG',
			'cod_ibge'=>'31'
        ]);
        App\Estado::create([
            'nm_estado'=>'Pará',
            'id_pais' =>'31',
            'ds_sg_estado'=>'PA',
			'cod_ibge'=>'15'
        ]);
        App\Estado::create([
            'nm_estado'=>'Paraíba',
            'id_pais' =>'31',
            'ds_sg_estado'=>'PB',
			'cod_ibge'=>'25'
        ]);
        App\Estado::create([
            'nm_estado'=>'Paraná',
            'id_pais' =>'31',
            'ds_sg_estado'=>'PR',
			'cod_ibge'=>'41'
        ]);
        App\Estado::create([
            'nm_estado'=>'Pernanbuco',
            'id_pais' =>'31',
            'ds_sg_estado'=>'PE',
			'cod_ibge'=>'26'
        ]);
        App\Estado::create([
            'nm_estado'=>'Piauí',
            'id_pais' =>'31',
            'ds_sg_estado'=>'PI',
			'cod_ibge'=>'22'
        ]);
        App\Estado::create([
            'nm_estado'=>'Rio de Janeiro',
            'id_pais' =>'31',
            'ds_sg_estado'=>'RJ',
			'cod_ibge'=>'33'
        ]);
        App\Estado::create([
            'nm_estado'=>'Rio Grande do Norte',
            'id_pais' =>'31',
            'ds_sg_estado'=>'RN',
			'cod_ibge'=>'24'
        ]);
        App\Estado::create([
            'nm_estado'=>'Rio Grande do Sul',
            'id_pais' =>'31',
            'ds_sg_estado'=>'RS',
			'cod_ibge'=>'43'
        ]);
        App\Estado::create([
            'nm_estado'=>'Rondônia',
            'id_pais' =>'31',
            'ds_sg_estado'=>'RO',
			'cod_ibge'=>'11'
        ]);
        App\Estado::create([
            'nm_estado'=>'Roraima',
            'id_pais' =>'31',
            'ds_sg_estado'=>'RR',
			'cod_ibge'=>'14'
        ]);
        App\Estado::create([
            'nm_estado'=>'Santa Catarina',
            'id_pais' =>'31',
            'ds_sg_estado'=>'SC',
			'cod_ibge'=>'42'
        ]);
        App\Estado::create([
            'nm_estado'=>'São Paulo',
            'id_pais' =>'31',
            'ds_sg_estado'=>'SP',
			'cod_ibge'=>'35'
        ]);
        App\Estado::create([
            'nm_estado'=>'Sergipe',
            'id_pais' =>'31',
            'ds_sg_estado'=>'SE',
			'cod_ibge'=>'28'
        ]);
        App\Estado::create([
            'nm_estado'=>'Tocantins',
            'id_pais' =>'31',
            'ds_sg_estado'=>'TO',
			'cod_ibge'=>'17'
        ]);

    }
};