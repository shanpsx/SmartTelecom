<x-app-layout>

    <div class="container">
        <h1>Lista de Planos</h1>
        <ul>
            @foreach ($planos as $plano)
                <li>{{ $plano->nome }}</li>
            @endforeach
        </ul>
    </div>

</x-app-layout>

