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

Tela de Login
<img width="778" height="609" alt="image" src="https://github.com/user-attachments/assets/3c51c543-2610-4619-b1da-7a4f1b143158" />

Tela de Cadastro
<img width="494" height="631" alt="image" src="https://github.com/user-attachments/assets/9885f840-1b4c-4f91-88d3-0e985040b4f8" />

Tela do Portal
<img width="1002" height="511" alt="image" src="https://github.com/user-attachments/assets/aacfbfb5-2532-4d40-88ea-db3cc00014c1" />
