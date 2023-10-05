# Documentação do Projeto Sistema de Login

## Visão Geral

O Sistema de Login é uma aplicação web que permite aos usuários fazer login, registrar-se, acessar um painel de controle após a autenticação e fazer logout. O projeto utiliza PHP e MySQL para implementar a funcionalidade de autenticação de usuário.

## Estrutura do Projeto

A estrutura do projeto foi ampliada com os arquivos adicionais que você forneceu:

```php
|-- index.php
|-- dblogin.php
|-- config.php
|-- signup.php
|-- dbsignup.php
|-- dashboard.php
|-- logout.php
|-- users.sql
|-- README.md
```

Aqui está uma descrição geral de cada arquivo e diretório no projeto:

- `index.php`: A página inicial do sistema de login, onde os usuários podem fazer login.
- `dblogin.php`: Processa o formulário de login e realiza a autenticação no banco de dados.
- `config.php`: Contém as configurações de conexão com o banco de dados MySQL.
- `signup.php`: Página de registro que permite aos usuários criar uma conta.
- `dbsignup.php`: Processa o formulário de registro e insere os dados do usuário no banco de dados.
- `dashboard.php`: Página de painel de controle acessível após o login bem-sucedido.
- `logout.php`: Permite ao usuário fazer logout do sistema.
- `users.sql/`: Diretório contendo o arquivo SQL para criar a estrutura da tabela do banco de dados.
- `README.md`: Documentação geral do projeto (este documento).

## Funcionalidades

As funcionalidades do projeto incluem:

### Página Inicial (`index.php`)

A página inicial contém um formulário de login onde os usuários podem inserir seu nome de usuário e senha para fazer login no sistema.

### Processamento de Login (`dblogin.php`)

O arquivo `dblogin.php` processa o formulário de login e realiza a autenticação no banco de dados. Ele inicia uma sessão se o login for bem-sucedido e redireciona o usuário para a página de painel de controle.

### Registro de Usuário (`signup.php` e `dbsignup.php`)

- `signup.php`: A página de registro onde os usuários podem fornecer seu nome, nome de usuário, email e senha para criar uma conta.
- `dbsignup.php`: Processa o formulário de registro e insere os dados do usuário no banco de dados. Exibe mensagens de sucesso ou erro.

### Página de Painel de Controle (`dashboard.php`)

Após o login bem-sucedido, os usuários são redirecionados para a página de painel de controle, onde podem visualizar informações ou realizar ações específicas do usuário.

### Logout (`logout.php`)

O arquivo `logout.php` permite que os usuários façam logout do sistema, encerrando sua sessão atual.

## Configuração

Para configurar o projeto em seu ambiente local, siga as etapas abaixo:

1. Crie um banco de dados MySQL e execute o script SQL fornecido em `sql/users.sql` para criar a estrutura da tabela do banco de dados.

2. Configure as constantes de conexão com o banco de dados em `config.php`:

   ```php
   define('HOST', 'localhost');
   define('USER', 'laravel');
   define('PASS', 'password');
   define('BASE', 'syslogin');
   ```

3. Certifique-se de que o servidor web (por exemplo, Apache) esteja configurado para servir os arquivos do projeto a partir do diretório raiz.

4. Inicie o servidor web e acesse a página inicial em seu navegador.

## Conclusão

O Sistema de Login é um projeto web que demonstra a implementação de autenticação de usuários em PHP e MySQL. Você pode expandir e personalizar este projeto de acordo com suas necessidades específicas. Esta documentação fornece uma visão geral do projeto e suas funcionalidades, bem como os passos para configurar o projeto em seu ambiente local.
