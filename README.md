## Requisitos

* PHP 8.2 ou superior
* Composer

## Como rodar o projeto baixado

## Sequencia para criar o projeto
Criar o projeto com Laravel
```
composer create-project laravel/laravel .
```

Iniciar o projeto criado com Laravel
```
php artisan serve
```

Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000
```

Criar Controller
```
php artisan make:controller NomeController
```
```
php artisan make:controller CourseController
```

Criar View
```
php artisan make:view nome
```
```
php artisan make:view courses/view
```

Executar as migration
```
php artisan migrate
```

Criar Models
```
php artisan make:model NomeDaModel
```
```
php artisan make:model Course
```

Criar um arquivo de Request com validações
```
php artisan make:request NomeDoRequest
```
```
php artisan make:request UserRequest
```