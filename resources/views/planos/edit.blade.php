<title>TeleConect | Editar plano</title>
<x-app-layout>
    <div class="center-screen">
        <div class="card">
            <div class="card-header">
                <h2>Editar plano</h2>
            </div>
            <div class="card-body">
                    <form action="{{ route('planos.editar', $plano->id) }}" method="PUT">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $plano->id }}">

                    <div class="form-group">
                        <label for="nome">Nome do Plano</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{ $plano->nome }}" required>
                    </div>

                    <div class="form-group">
                        <label for="preco">Preço do Plano</label>
                        <input type="text" class="form-control" id="preco" name="preco" value="{{ $plano->preco }}" required>
                    </div>

                    <div class="form-group">
                        <label for="descricao">Descrição do Plano</label>
                        <textarea class="form-control" id="descricao" name="descricao">{{ $plano->descricao }}</textarea>
                    </div>

                    <div class="form-group">
                        <a href="{{ route('planos.edit', $plano->id) }}" class="btn btn-primary btn-sm btn-editar mr-2">Editar</a>
                        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
body {
    font-family: Arial, sans-serif;
}
.center-screen {
    padding-top: 70px;
}
.card {
    max-width: 600px; 
    margin: 0 auto; 
    padding: 20px; 
    background-color: #f9f9f9;
    border-radius: 8px; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}

.card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.card-header {
    font-size: 20px;
    background-color: #f0f0f0;
    padding: 10px;
    border-radius: 8px;
    border-bottom: 1px solid #ccc;
}

.form-group label {
    font-weight: bold; 
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.btn {
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-secondary {
    background-color: #007bff;
    color: #fff;
    border: none;
}

.btn-secondary:hover {
    background-color: #0056b3;
}

</style>

