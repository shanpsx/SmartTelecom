<title>TeleConect</title>
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach (\App\Models\Plano::all() as $plano)
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">{{ $plano->nome }}</h5>
                                    <p class="card-text"><strong>Preço:</strong> R$ {{ $plano->preco }}</p>
                                    <p class="card-text"><strong>Descrição:</strong> {{ $plano->descricao }}</p>
                                </div>
                                <div class="card-footer bg-transparent border-top-0 d-flex justify-content-between">
                                    <a href="{{ route('planos.editar', $plano->id) }}" class="btn btn-primary btn-sm btn-editar mr-2">Editar</a>
                                    <form action="{{ route('planos.destroy', $plano->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-excluir">Excluir</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach  
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('planos.create') }}" class="btn btn-adicionar">Adicionar Plano</a>
</x-app-layout>

<style>
.btn-adicionar {
    margin: 110px;
    background-color: #1d6bd0; 
    color: #fff; 
    padding: 10px 20px; 
    border: none; 
    border-radius: 5px; 
    cursor: pointer; 
    text-decoration: none; 
}
.btn-adicionar:hover {
    background-color: #fff;
    color: #1d6bd0;
}
.btn-editar {
    background-color: #007bff;
    color: #fff;
    padding: 8px 16px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
}

.btn-editar:hover {
    background-color: #0056b3;
}
.card {
    padding-bottom: 10px;
    padding-left: 10px;
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
}
.card:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}
.card-title {
    font-size: 1.25rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 0.5rem;
}
.card-text {
    font-size: 1rem;
    color: #666;
    margin-bottom: 0.2rem;
}
.card-footer {
    display: flex;
    gap: 10px;
    align-items: center;
    padding-top: 0.75rem;
    padding-bottom: 10px;
    padding-left: 2px;
    border-top: none;
    background-color: transparent;
    }
.btn-editar,
.btn-excluir {
    background-color: #007bff;
    color: #fff;
    padding: 0.375rem 0.75rem;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}
.btn-excluir {
    background-color: #dc3545;
    color: #fff;
}
.btn-excluir:hover {
    background-color: #c82333;
}
.btn-editar:hover {
    background-color: #0056b3;
}
</style>




    