@extends('layout.app', ["current" => "categorias"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/categorias/{{$cat->id}}" method="POST">

                <div class="form-group">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <label for="nomeCategoria">Nome da Categoria</label>
                    <input type="text" class="form-control" name="nomeCategoria" id="nomeCategoria" value="{{$cat->nome}}" placeholder="Cadegoria">
                </div>
                <button type="submit" class="btn btn-primary btn-sm"> Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection