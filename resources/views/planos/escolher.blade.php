@foreach($planos as $plano)
    <div>
        <h3>{{ $plano->nome }}</h3>
        <p>{{ $plano->descricao }}</p>
        <a href="{{ route('planos.editar', $plano->id) }}" class="btn btn-primary">Editar</a>
    </div>
@endforeach