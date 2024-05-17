<title>TeleConect | Novo plano</title>
<x-app-layout>
    <div class="center-screen">
        <div class="form-container">
            <div class="card-header">
                <h2>Adicionar plano</h2>
            </div>

            <form action="{{ route('planos.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nome">Nome do Plano</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>

                <div class="form-group">
                    <label for="preco">Preço do Plano</label>
                    <input type="text" class="form-control" id="preco" name="preco" required>
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição do Plano</label>
                    <textarea class="form-control" id="descricao" name="descricao"></textarea>
                </div>
                <button type="submit" class="btn btn-submit mt-3">Adicionar Plano</button>
                <a href="{{ route('dashboard') }}" class="btn btn-voltar float-end mt-3">Voltar</a>
            </form>
            
        </div>
    </div>

</x-app-layout>
<style>

.center-screen {
    padding-top: 70px;
}
.form-container {
    max-width: 600px; 
    margin: 0 auto; 
    padding: 20px; 
    background-color: #f9f9f9;
    border-radius: 8px; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}
.card-header {
    font-size: 20px;
    background-color: #f0f0f0;
    padding: 10px;
    border-radius: 8px;
    border-bottom: 1px solid #ccc;
}
.form-group {
    margin-bottom: 20px; 
}
.form-group label {
    font-weight: bold; 
}
.form-control {
    width: 100%; 
    padding: 10px; 
    border: 1px solid #ccc; 
    border-radius: 5px; 
}
.btn-submit {
    background-color: #1d6bd0; 
    color: #fff; 
    padding: 10px 20px; 
    border: none; 
    border-radius: 5px; 
    cursor: pointer; 
    transition: background-color 0.3s ease; 
}
.btn-submit:hover,
.btn-voltar:hover {
    background-color: #fff; 
    color: #1d6bd0;
    box-shadow: 1px 2px 2px black;
}
.btn-voltar {
    background-color: #1d6bd0; 
    color: #fff; 
    padding: 10px 20px; 
    border: none; 
    border-radius: 5px; 
    cursor: pointer; 
    transition: background-color 0.3s ease; 
}

</style>