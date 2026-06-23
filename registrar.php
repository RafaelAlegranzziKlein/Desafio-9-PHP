<?php
include_once './config/config.php';
include_once './classes/Usuario.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = new Usuario($db);
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $usuario->criar($nome, $sexo, $fone, $email, $senha);
    header('Location: portal.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Usuário</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Adicionar Usuário</h1>
            <form method="POST">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" required>

                <label>Sexo:</label>
                <label for="masculino">
                    <input type="radio" id="masculino" name="sexo" value="M" required> Masculino
                </label>
                <label for="feminino">
                    <input type="radio" id="feminino" name="sexo" value="F" required> Feminino
                </label>

                <label for="fone">Fone:</label>
                <input type="text" name="fone" required>

                <label for="email">Email:</label>
                <input type="email" name="email" required>

                <label for="senha">Senha:</label>
                <input type="password" name="senha" required>

                <input type="submit" value="Adicionar">
            </form>
            <p><a href="portal.php">Voltar ao portal</a></p>
        </div>
    </div>
</body>
</html>