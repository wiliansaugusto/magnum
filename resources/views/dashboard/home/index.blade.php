@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-info">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2 class="text-light text-center">Gerenciamento Magnum</h2>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h5 class="card-title text-center">Olá seja bem vindo!</h5>
                    <p class="card-text text-justify">Estamos trabalhando para desenvolver a ferramenta que
                        atenda os requisitos importantes para o seu negocio, agradecemos a sua paciência e
                        desejamos que a nossa parceria seja duradoura e a sua ferramenta seja eficiênte e eficaz no
                        seu dia a dia</p>
                    <p class="card-text text-justify"> Muito Obrigado!</p>
                    <p class="card-text text-justify">Equipe SDWeb</p><br>
                </div>
            </div>
            <div class="bg-info">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h2 class="text-light text-center">Informações importantes</h2>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <p class="card-text text-justify">No menu ao lado você encontrará 2 links
                            conforme
                            imagem abaixo
                            neles será possivel, você cadastrar os palestrantes e as categorias e
                            sub-categorias.</p>
                        <p class="card-text text-justify">É importante lembrar que as categorias e
                            sub-categorias
                            devem ser cadastradas primeiro</p>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <h5><i class="fa fa-users"></i> Palestrantes</h5>
                                    </button>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="card-text text-justify">Os dados estão organizados de forma
                                            que
                                            facilite o preenchimento do cadastro de palestrantes.</p>
                                        <p class="card-text text-justify">Para facilitar o preenchimento do
                                            cadastro,
                                            dividimos o mesmo em abas, que seguem uma prioridade de dados
                                            pré-definida.
                                        </p>
                                        <p class="card-text text-justify">Após inserir o nome do palestrante que
                                            sera
                                            cadastrado, abrirão as
                                            sequintes abas.</p>
                                        <p class="card-text text-justify">Dados do Palestrantes,Dados do
                                            Assesor, Dados
                                            Contratuais,Valor,Videos... </p>
                                        <p class="card-text text-justify">Observe que os dados de contato são
                                            cadastrado
                                            através de um
                                            botão, (Adicionar Contato),
                                            lá será possivel cadastrar o tipo e valor(numero de telefone, email,
                                            skype) dependendo do seu tipo.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            <h5><i class="fa fa-list"></i> Categorias</h5>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="card-text text-justify">As categorias e sub-categorias devem
                                            ser
                                            cadastradas antes dos
                                            palestrantes.</p>
                                        <p class="card-text text-justify">Na topo da aplicação, está situado o
                                            botão
                                            para
                                            cadastrar
                                            Categoria Principal.</p>
                                        <p class="card-text text-justify">Aonde será informada o nome da
                                            Categoria
                                            Principal.</p>
                                        <p class="card-text text-justify">Após cadastrada o Categoria Principal,
                                            estará
                                            habilitado um botão
                                            para incluir uma
                                            sub-categoria, alterar a categoria principal e remover a mesma</p>
                                        <p class="card-text text-justify">Ao incluir a Sub - Categoria a mesma
                                            estará
                                            vinculada a principal.
                                        </p>
                                        <p class="card-text text-justify">Fique atendo ao Alterar ou Excluir a
                                            Categoria
                                            -
                                            Principal, pois a
                                            mesma funcionara em efeito cascata.</p>
                                        <p class="card-text text-justify">Após realizada a Exclusão da Categoria
                                            principal,
                                            todas as suas
                                            Sub - Categorias também serão excluidas.</p>
                                        <p class="card-text text-justify">Será possivel também Alterar ou
                                            Excluir uma
                                            Sub -
                                            Categoria, porém
                                            o mesmo só apresenta efeito somente na Sub - Categoria desejada,
                                            não afetando outras Sub - Categorias, ou a sua própia Categoria
                                            Principal
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-footer text-light text-center bg-info">
    <i class="fa fa-copyright"></i> SDWeb - 2020
</div>


@endsection
