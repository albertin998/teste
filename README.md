#requisitos

composer
php 8.2 ou >
GIT
xampp

#config do projeto

startar o apache do xampp e o Mysql

Duplicar o arquivo ".env.exemple" e renomear para ".env"
alterar os dados do da conexão com o banco de dados no arquivo .env

gerar a chave key que sera inserida no seguinte campo no arquivo ".env"-> APP_KEY=.
comando para gerar a chave: php artisan key:generate

instalar as dependências do php: composer install --> isso ira instalar o diretorio VENDOR

executar as migrations: php artisan migrate

caso ao  baixar o projeto não tenha criado a diretorio api.php dentro da pasta routes, executar esse comando: php artisan install:api

#executar o projeto

php artisan serve


