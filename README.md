## Descrição

Cria, Visualiza, Atualiza e Remove Contatos com Laravel 8 e MySQL com Paginação utilizando Bootstrap 4.5

## Instalação

```bash
$ git clone https://github.com/adevecchi/laravel-contatos.git

$ cd laravel-contatos

$ composer install
```

Renomear ou copiar o arquivo **.env.example** para **.env**

Criar um bando de dados no MySQL, exemplo: **CREATE DATABASE contatos_laravel;**

Configurar o arquivo **.env** conforme mostrado abaixo:

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=contatos_laravel
DB_USERNAME=<seu_nome_de_usuario>
DB_PASSWORD=<sua_senha_de_acesso>
```

Gerar a **key** do laravel:

```bash
$ php artisan key:generate
```

Executar os comandos para criar as tabelas:

```bash
$ php artisan migrate

$ php artisan db:seed
```

Iniciar o servidor:

```bash
$ php artisan serve
```

## Captura de tela

![Home](https://github.com/adevecchi/laravel-contatos/blob/main/public/images/home.png)

---

![Contatos home](https://github.com/adevecchi/laravel-contatos/blob/main/public/images/contatos-home.png)

---

![Contatos novo](https://github.com/adevecchi/laravel-contatos/blob/main/public/images/contatos-novo.png)

---

![Contatos editar](https://github.com/adevecchi/laravel-contatos/blob/main/public/images/contatos-editar.png)

---

![Contatos detalhes](https://github.com/adevecchi/laravel-contatos/blob/main/public/images/contatos-detalhes.png)

---

![Contatos excluir](https://github.com/adevecchi/laravel-contatos/blob/main/public/images/contatos-excluir.png)
