@extends('master')
@section('titulo','Automóveis')
@section('conteudo')
<header>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Lista de Todos os veiculos</h1>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-4">
            <a href="/automovel/create" class="btn btn-primary">Cadastrar Veiculo</a>
        </div>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Modelo</th>
                <th scope="col">Placa</th>
                <th scope="col">Valor</th>
                <th scope="col">Data</th>
                <th scope="col" colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($automoveis as $automovel)
            <tr>
                <th scope="row">{{$automovel->id}}</th>
                <td>{{$automovel->nome}}</td>
                <td>{{$automovel->modelo}}</td>
                <td>{{$automovel->placa}}</td>
                <td>{{$automovel->vl_venda}}</td>
                <td>{{$automovel->dt_fabricacao}}</td>
                <td>
                    <a href="/automovel/{{$automovel->id}}" class="btn btn-secondary">Visualizar</a>
                </td>
                <td>
                    <a href="/automovel/{{$automovel->id}}/edit" class="btn btn-warning">Editar</a>
                </td>
                <td>
                    <form action="{{ route('automovel.destroy', $automovel->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
