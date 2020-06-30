<?php

use Illuminate\Database\Seeder;

class PerfilPublicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\PerfilPublico::create([
            'nm_perfil_publico'=>'Infantil I',
             'obs'=>'Crianças de 0 até 8 anos em idade de aprendizado e consome muito conteúdo audiovisual. Um público que segue uma orientação rigorosa do pais, sendo assim o conteúdo tem que achar a atenção dos dois públicos.'
             ]);
        App\PerfilPublico::create([
            'nm_perfil_publico'=>'Infantil II',
            'obs'=>'Crianças de 9 até 13 anos em idade de amadurecimento de conhecimento e expansão do mesmo adquirindo muito conteúdo de diversas formas e locais, o conteúdo oferecido a esse público tem que ser mais direto uma vez que esse público perde o interesse com mais facilidade. Um público que ainda é muito vigiado pelos pais porem nessa idade começam a demostrar identidade própria.'
            ]);
        App\PerfilPublico::create([
            'nm_perfil_publico'=>'Adolescente', 
            'obs'=>'Indivíduos de 14 até 19 anos vivendo em um mundo de descobertas sobre a vida e o próprio corpo nessa idade acontece e é definida a formação de caráter, a busca por conhecimento está mais forte e evidente do que nunca, também fica latente a busca por aventuras e romances. Assim como o início da vida capitalista com a conquista do primeiro emprego o direcionamento e o foco nos estudos para a formação profissional.'
            ]);
        App\PerfilPublico::create([
            'nm_perfil_publico'=>'Jovem', 
            'obs'=>'Indivíduos de 19 até 30 anos que busca se firmar na carreira profissional e amorosa, constituir família, um público mais rigoroso e que não gosta de perder tempo. '
            ]);
    }
}
