@extends('layout.app', ["current" => "categorias"])

@section('body')
<div class="card border">
    <div class="card-body">

        <form action="/{{$action}}" method="POST">

            <div class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <label for="nome{{$name}}">Nome {{$name}}</label>
                <input type="text" class="form-control" name="nome{{$name}}" id="nome{{$name}}" placeholder="{{$name}}">
                @if($name == 'Produto')
                    <label for="estoque{{$name}}">Estoque {{$name}}</label>
                    <input type="number" class="form-control" name="estoque{{$name}}" id="estoque{{$name}}" placeholder="Estoque">

                    <label for="preco{{$name}}">Preço do {{$name}}</label>
                    <input type="money" class="form-control" name="preco{{$name}}" id="preco{{$name}}" placeholder="Preço">

                    <label for="idCategoria">Categoria {{$name}}</label>
                    <select name="idCategoria" id="idCategoria">

                        @foreach($idCategorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                            {{$categoria}}
                        @endforeach
                    </select>
                @endif
            </div>
            <button type="submit" class="btn btn-primary btn-sm"> Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>

</div>
@endsection
