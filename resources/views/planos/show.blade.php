
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalhes do Plano</div>

                    <div class="card-body">
                        <p>Nome: {{ $plano->nome }}</p>
                        <p>Preço: {{ $plano->preco }}</p>
                        <p>Descrição: {{ $plano->descricao }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
