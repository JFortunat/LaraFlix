@extends("adminlte::page")

@section("content")
    <h1>Atores</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Data de Nascimento</th>
        </thead>

        <tbody>
            @foreach($atores as $ator)
                <li>{{ $ator->nome }}</li>
                <li>{{ $ator->dt_nascimento }}</li>
                <br>
            @endforeach
        </tbody>
    </table>
@stop