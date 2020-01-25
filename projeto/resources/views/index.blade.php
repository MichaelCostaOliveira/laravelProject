@extends('layout.app')

@section('body')
    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="col-sm-6">
                    <div class="card-body">
                        <h5 class="card-title">
                            Produtos Mc Gorila
                        </h5>
                        <p class="card=text">
                            Aqui você cadastra todos os produtos Gorila
                        </p>
                        <a href="/produtos" class="btn btn-primary">Cadastre os produtos</a>
                    </div>
                    </div>
                    <div class="card border border-primary">
                        <div class="col-sm-6">
                        <div class="card-body">
                            <h5 class="card-title">
                                Categorias Mc Gorila
                            </h5>
                            <p class="card-text">
                                Aqui você cadastra todos as categorias dos Gorilas
                            </p>
                            <a href="/produtos" class="btn btn-primary">Cadastre as categorias</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
