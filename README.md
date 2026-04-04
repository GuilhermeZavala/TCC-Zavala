# Projeto <nome do projeto>
###  Projeto criado na aula de introdução ao Framework Laravel

<p align="center">
 <a href="#-sobre-o-projeto">Sobre</a> •
 <a href="#-funcionalidades">Funcionalidades</a> •
 <a href="#-como-executar-o-projeto">Como executar</a> • 
 <a href="#-tecnologias">Tecnologias</a> •  
 <a href="#user-content--licença">Licença</a>
</p>

## 💻 Sobre o projeto

Este é um projeto base feito em Laravel com o Voyager para painel administrativo.
### Laravel ele utiliza a arquitetura MVC
- Model => [app\Models](./app/Models) (Tabelas banco)
- Controllers => [app\Http\Controllers](./app/Http/Controllers) (Gerenciar Models e Views)
- Views => [resources\views](./resources/views/) (Telas do app)
- Routes (Rotas) => [routes\wep.php](./routes/web.php)

---

## ⚙️ Funcionalidades

- [ ] Os usuários com perfil Administrador tem acesso ao menu administrativo, onde podem:
  - [X] gerenciar os usuários, perfis e permissões
  - [X] gerenciar as páginas
  - [X] gerenciar as postagens
  - [X] gerenciar as categorias

- [ ] Os usuários tem acesso a parte pública da aplicação web, onde podem:
  - [ ] Registrar-se como usuário comum
  - [ ] Logar-se para ter acesso ao menu administrativo

---
## 🚀 Como executar o projeto

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas: [Git](https://git-scm.com), [PHP ^7.3|^8.0](https://www.php.net/downloads), [Composer](https://getcomposer.org/download/), [Laravel](https://laravel.com/docs/10.x/installation).

Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

### 🎲 Rodando o Projeto 

#### Instalando as dependências
```bash
# Clone este repositório
$ git clone https://github.com/aurelio-ramos/projeto-voyager-1.7.git

# Acesse a pasta do projeto no terminal/cmd
$ cd projeto-voyager-1.7

# Instale as dependências composer
$ composer install


```
#### Configurando o projeto
1. Faça uma cópia do arquivo `.env.example` e renomeie para `.env`:
2. Crie um banco de dados
> Sugestão MariaDB ou MySQL: definição de collation: **utf8mb4_general_ci**

3. Configure a conexão com os dados do banco de dados no arquivo `.env`:
```php  
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=NOMEDOBANCO
    DB_USERNAME=USUARIO
    DB_PASSWORD=SENHA
```
#### Rodando o servidor
```bash    
# Criação de nova chave de criptografia da aplicação:
php artisan key:generate

#Criação do link simbólico:
php artisan storage:link
    
# Criação das tabelas e inserção dos dados no banco de dados:
php artisan migrate:fresh --force --seed

# Adicionar assets do voyager
php artisan vendor:publish --tag voyager_avatar
php artisan vendor:publish --tag dummy_content

# Execute a aplicação em modo de desenvolvimento
php artisan serve

# O servidor iniciará na porta:8000 - acesse <http://localhost:8000>
```

### 🎲 Acesso ao Projeto (servidor)
Acesso à área pública da aplicação:
> **URL:** http://domínio/

Acesso à área privada da aplicação:
> **URL:** http://domínio/admin <br/> 

Usuários criados:
- **Admin** ➠ login: ```admin@admin.com``` senha: ```password```
- **Publisher** ➠ login: ```publisher@publisher.com``` senha: ```password```
- **User** ➠ login: ```user@user.com``` senha: ```password```

**Criar usuário pelo terminal usando tinker:**
```bash
# Executar o tinker
php artisan tinker

# No tinker: 
>>> $user = new \App\Models\User;
>>> $user->email = 'admin@admin.com';
>>> $user->password = Hash::make('senha'); # altere 'senha' para uma senha forte
>>> $user->name = 'Nome do Administrator';
>>> $user->save();
>>> exit() # sair do tinker
```
---

### Criar Migrations e Seeder a partir do banco

***criar migrations***
```bash   
php artisan migrate:generate minha_tabela
```

***criar seeders***
```bash   
php artisan iseed data_types,data_rows,menus,menu_items,roles,permissions,permission_role,settings --classnameprefix=Iseed
php artisan iseed data_types,data_rows,menus,menu_items,roles,permissions,permission_role,settings --classnameprefix=Iseed --force
```

***Criação das tabelas e inserção dos dados no banco de dados:***
php artisan migrate:fresh --force --seed

## 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [Laravel 10](https://laravel.com/docs)
- [Bootstrap 5](https://getbootstrap.com/)
- [Font Awesome](https://fontawesome.com/search?o=r&m=free)

As seguintes dependências foram incluidas no projeto:
- [Módulo de linguagem Português do Brasil (pt_BR) para Laravel](https://github.com/lucascudo/laravel-pt-BR-localization)
- [Laravel Migrations Generator](https://github.com/kitloong/laravel-migrations-generator)
- [Iseed](https://github.com/orangehill/iseed)
- [Laravel Fortify](https://github.com/laravel/fortify)
- [Laravel Permission](https://github.com/spatie/laravel-permission)
- [Laravel UI](https://github.com/laravel/ui)
---
## 💪 Como contribuir para o projeto

1. Faça um **fork** do projeto.
2. Crie uma nova branch com as suas alterações: `git checkout -b my-feature`
3. Salve as alterações e crie uma mensagem de commit contando o que você fez: `git commit -m "feature: My new feature"`
4. Envie as suas alterações: `git push origin my-feature`

## 📝 Licença

Este projeto é um software de código aberto licenciado sob a licença [gnu general public license version 3.0 (gplv3)](./LICENSE).