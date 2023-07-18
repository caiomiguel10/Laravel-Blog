
# Blog Laravel

Projeto laravel Blog
# Deploy
- http://blog-laravel.cmfrj.com.br/login

## Configuracoes de projeto

Rodar os seguintes comandos na raiz

```bash
  npm install
```
```bash
  composer install
```


## habilitar envio de emails

```bash
 php artisan queue:work --tries=2 --delay=10
```


## rodar teste (unitarios e de feature)

```bash
 php artisan test
```


# API

rotas para teste de api


## Referência API Post

- http://127.0.0.1:8000/api/posts  (GET) - buscar todos os post
- http://127.0.0.1:8000/api/posts  (POST) - criar posts
- http://127.0.0.1:8000/api/posts/id_post  (delete) - deletar post
- http://127.0.0.1:8000/api/posts/id_post  (GET) - filtrar post
- http://127.0.0.1:8000/api/posts/id_post  (PUT) - atualizar post


## Referência Api Categorias

- http://127.0.0.1:8000/api/categorias  (GET) - buscar todos os categoria
- http://127.0.0.1:8000/api/categorias  (POST) - criar categorias
- http://127.0.0.1:8000/api/categorias/id_categoria  (GET) - filtrar categoria
- http://127.0.0.1:8000/api/categorias/id_categoria  (PUT) - atualizar categoria


## Referência Api Login

- http://127.0.0.1:8000/api/login  (POST) - Login
