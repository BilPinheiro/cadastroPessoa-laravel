## Requisitos

* PHP 8.2 ou superior
* Composer

## Como rodar o projeto baixado
Instalar as dependências
```
composer install
```

Duplicar o arquivo ".env.example" e renomear para ".env"
Alterar no arquivo .env o nome da base de dados para "pessoaCadastro". Ex.: DB_DATABASE=pessoaCadastro

Gerar a chave
```
php artisan key:generate
```

Executar as migration
```
php artisan migrate
```

Iniciar o projeto criado com Laravel
```
php artisan serve
```

Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000/
```