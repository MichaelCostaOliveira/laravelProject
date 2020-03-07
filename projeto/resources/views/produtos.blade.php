@extends('layout.app', ["current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Produtos</h5>
            @if(count($prods)>0)
                <table class="table table-ordered table-hover">
                    <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome Produto</th>
                        <th>Estoque</th>
                        <th>Nome Categoria</th>
                        <th>Ações</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prods as $prod)
                        <tr>
                            <td>{{$prod->id}}</td>
                            <td>{{$prod->nome}}</td>
                            <td>{{$prod->estoque}}</td>
                            <td>{{$prod->nomeCategoria}}</td>
                            <td><a href="/produtos/editar/{{$prod->id}}" class="btn btn-primary"></a> Editar</td>
                            <td><a href="/produtos/apagar/{{$prod->id}}" class="btn btn-danger"></a> Apagar</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="card-footer">
            <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Novo Produto</a></div>
    </div>
    </div>
@endsection
