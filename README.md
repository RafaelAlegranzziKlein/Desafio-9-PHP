# CRUD de Usuários em PHP

Sistema simples de cadastro, login e gerenciamento de usuários (CRUD) desenvolvido em **PHP** com **MySQL**, utilizando PDO para acesso ao banco de dados.

## 📋 Funcionalidades

- Cadastro de novos usuários
- Login com autenticação por sessão
- Listagem de usuários cadastrados
- Edição de dados de usuário
- Exclusão de usuário
- Senhas armazenadas com hash (bcrypt)

## 🛠️ Tecnologias utilizadas

- PHP
- MySQL
- PDO (PHP Data Objects)
- HTML5
- CSS3

## 📁 Estrutura do projeto

```
projeto-crud/
├── classes/
│   ├── Database.php      # Conexão com o banco de dados
│   └── Usuario.php        # Regras de negócio (CRUD de usuários)
├── config/
│   └── config.php         # Inicializa a conexão com o banco
├── style/
│   └── style.css          # Estilização das páginas
├── index.php               # Página de login
├── portal.php               # Painel principal (lista de usuários)
├── registrar.php           # Cadastro de novo usuário
├── editar.php                # Edição de usuário
├── deletar.php               # Exclusão de usuário
├── logout.php                # Encerra a sessão
└── dump.sql                  # Script de criação do banco de dados
```

## ⚙️ Como executar o projeto

### Pré-requisitos

- [XAMPP](https://www.apachefriends.org/) (ou outro ambiente com PHP + MySQL, como WAMP/MAMP/Laragon)
- Navegador web

### Passo a passo

1. Clone este repositório dentro da pasta `htdocs` do XAMPP (ou equivalente):
   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   ```

2. Inicie o **Apache** e o **MySQL** no painel de controle do XAMPP.

3. Crie o banco de dados importando o arquivo `dump.sql`:
   - Acesse o [phpMyAdmin](http://localhost/phpmyadmin)
   - Crie uma aba SQL e cole o conteúdo do arquivo `dump.sql`, **ou**
   - Importe o arquivo diretamente pela aba "Importar"

4. Verifique as credenciais do banco em `classes/Database.php` e ajuste se necessário:
   ```php
   private $host = "localhost";
   private $db_name = "bdcrud123";
   private $username = "root";
   private $password = "";
   ```

5. Acesse o projeto pelo navegador:
   ```
   http://localhost/seu-repositorio/index.php
   ```

## 🗄️ Banco de dados

A tabela `usuarios` possui os seguintes campos:

| Campo  | Tipo         | Descrição                  |
|--------|--------------|-----------------------------|
| id     | INT          | Identificador único (PK)    |
| nome   | VARCHAR(255) | Nome do usuário              |
| sexo   | CHAR(1)      | M (Masculino) ou F (Feminino)|
| fone   | VARCHAR(15)  | Telefone de contato          |
| email  | VARCHAR(100) | Email (único)                 |
| senha  | VARCHAR(255) | Senha (armazenada com hash)  |


## 🖼️ Imagens do  site

 -Tela de Login
  -<img width="799" height="582" alt="image" src="https://github.com/user-attachments/assets/6084fcad-25e8-4428-8cfc-7552b85ab713" />

 -Tela de Cadastro
  -<img width="893" height="606" alt="image" src="https://github.com/user-attachments/assets/8bd674f0-cbbf-4e11-8003-f79959a0d38d" />

 -Tela do Portal
  -<img width="1002" height="511" alt="image" src="https://github.com/user-attachments/assets/aacfbfb5-2532-4d40-88ea-db3cc00014c1" />
