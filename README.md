<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


Após clonar o projeto

Dentro do diretório

Instalar as dependencias

    composer install

Criar o Banco de dados, usuário e senha no Mysql, depois ajustar as configurações em 
/config/database.php

    'database' => env('DB_DATABASE', 'BASE DE DADOS AQUI'),
    'username' => env('DB_USERNAME', 'USUARIO'),
    'password' => env('DB_PASSWORD', 'SENHA'),

Incluir as tabelas

    php artisan migrate
    digite "yes" para continuar

Incluir os dados para teste

    php db:seed
    digite "yes" para continuar

Iniciar servidor para teste de GraphQL

    php artisan serve

Acessar a pagina para teste ou usar o GraphQL Playground

    http://localhost:8000/graphql-playground

