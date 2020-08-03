@php

    @endphp
    <!doctype html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>PDF - Magnun</title>
    <style>
        @page {
            margin: 0cm 0cm;
        }

        body {
            margin-top: 4cm;
            margin-bottom: 1cm;
            margin-left: 1cm;
            margin-right: 1cm;
            padding-top: 15px;

        }
        .page-break {
            page-break-after: always;
        }
        #watermark {
            position: fixed;
            bottom: 15px;
            left: -10px;
            /** The width and height may change
                according to the dimensions of your letterhead
            **/
            width: 21.8cm;
            height: 29cm;

            /** Your watermark should be behind every content**/
            z-index: -1000;
        }

        #foto {
            margin-left: auto;
            margin-right: auto;
            width: 10em;
            position: absolute;
            left: 40%;

        }
        #fotoAssinatura {
             margin-left: auto;
             margin-right: auto;
             width: 180px;
             position: absolute;
             left: 40%;

         }

    </style>

</head>
<body>

<div id="watermark">
    <img src="../public/img/templateMagnum.jpg" alt="" height="100%" width="100%">
</div>
<main>
    <br>
    <img id="foto" src="../public/storage/{{$palestrante->ds_foto ?? 'imagemPalestrante/no-image.png' }}" alt="">
    <br><br><br><br><br><br><br><br>
    <h2 style="text-align: center"> {{$palestrante->nm_palestrante}}  </h2>
    <div id='mydiv1' style='width: auto;height:auto; text-align: justify'>
        <?php
        echo($palestrante->ds_curriculo);
        ?>
    </div>

    <div id='mydiv1' style='width: auto;height:auto; text-align: justify'>
        <p>Idiomas do Palestrante: </p>
        <ul>
            @foreach($idiomas as $idioma)
                <li>{{($idioma)}}</li>
            @endforeach

        </ul>
    </div>

    <div id='mydiv1' style='width: auto;height:auto; text-align: justify'>
        <h3>Tipos de Serviços:</h3>
        <ul>
            @foreach($tiposServico as $tipo)
                <li>{{($tipo->nm_tipo_servico)}}</li>
            @endforeach

        </ul>
    </div>
    <div >
        <p>Obs: Caso esta negociação venha a se concretizar, haverá necessidade de um contato por
            telefone ou videoconferência com os organizadores e responsáveis pelo evento, ajustando-se uma linguagem
            ideal e conveniente, portanto, desprezar tópicos acima que não venha a ser de interesse, ou necessitem de
            mais
            detalhes.
        </p>
        <h3>Investimento : <u><strong>{{$investimento}}</strong></u> - {{$impostos}}</h3>
        <ul>
            <li>• Passagem aérea, hospedagem, traslado e alimentação do Palestrante e acompanhante, se houver, ficam a
                cargo do contratante.
            </li>
        </ul>
        <p style="text-align: justify">Não estão inclusos os valores de INSS e ISS. Caso sejam retidos
            pelo cliente, deverão ser acrescidos ao valor dos honorários informados.</p>
    </div>
    <div>
        <h3>Equipamentos Padrões</h3>

             <p> • {!! $equipamentos !!}</p>
    </div>
    <div class="page-break" >
        <h3>FORMA DE PAGAMENTO</h3>
        <p>• {!! $formapgto !!}</p>
    </div>
    <div>
        <h3>VALIDADE DESTA PROPOSTA</h3>
        <p>A Esta proposta tem validade de 10 dias</p>
        <p>A data só é reservada mediante assinatura do contrato, logística e estrutura.
            Os detalhes de logística serão acertados em conjunto com a <strong>Magnum Palestras</strong>.</p>
        <p>Na expectativa de realizarmos, em conjunto, um trabalho de qualidade e agradecendo o privilégio de sua
            consulta aguardamos seu retorno.</p>
        <p>Cordiais Saudações,</p>
        <div style="text-align: center">
        <p><strong>Equipe Magnum Palestras</strong></p>
        {{$data}}
        </div>
    </div>
    <div style="text-align: center">
        <br>
        <img  id="fotoAssinatura" src="../public/storage/{{$imagemAssinatura}}" alt="">
    </div>
    <div style="width: 100%; margin-top: 200px; text-align: center">
        <p>{{$usuario['nmUsuario']}}</p>
        <p>{{$usuario['email']}}</p>
        <input type="tel" readonly value="{{ $usuario['telefone'] }}">
        <a style="text-decoration: none; color: black" target="_blank" href="https://api.whatsapp.com/send?phone=+55{!! str_replace(array('-',' ','.'), '', $usuario['telefone']) !!}">
            {{ ($usuario['telefone']) }}</a>
        <p></p>


    </div>
</main>
</body>
</html>

