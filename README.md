Desafio Smart Telecom
Colocar o projeto na máquina.


Pré-requisitos
Certifique-se de que o PHP está instalado (versão 7.3 ou superior).
Instale o Composer, que é o gerenciador de dependências do PHP.
Um servidor web como Apache.
Passo a Passo
1. Preparar o Ambiente
Copie a pasta do projeto: Se você recebeu a pasta do projeto, copie para o diretório onde você deseja trabalhar, por exemplo: C:\xampp\htdocs\ (no Windows) ou /var/www/html/ (no Linux).
2. Configurar o Projeto
Acesse a pasta do projeto:
cd caminho/para/a/pasta/do/projeto
Instale as dependências do Composer:	
composer install

Criar Banco de dados
Crie um banco de dados Mysql Workbench com o nome smarttelecom1
Depois abra o arquivo .env no Vs Code e configure as variáveis de ambiente, especialmente as configurações de banco de dados: 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=smarttelecom
DB_USERNAME=usuario_do_banco_do_ seu_bd (creio que seja root)
DB_PASSWORD=senha_do_banco (você quem definiu a senha)


Agora no terminal do Vs Code selecione a pasta SmartTelecom:

cd SmartTelecom

Depois crie uma chave de aplicação:

php artisan key:generate

Ainda no terminal execute as Migrações:

php artisan migrate

Depois é só iniciar o servidor:

php artisan serve
O comando acima iniciará o servidor em http://localhost:8000.

Abra seu navegador e acesse:

http://localhost:8000




Erro de Dependências: 
Se você encontrar erros relacionados a versões de pacotes, tente atualizar o Composer:
(No terminal)

composer update
