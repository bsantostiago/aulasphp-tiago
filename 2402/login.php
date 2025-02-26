<?php
session_start();

// Simulação de armazenamento de senha (substitua isso por um banco de dados na prática)
$usuarios = [];

// Processa o cadastro
if (isset($_POST['cadastro'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    // Hash seguro da senha
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    
    // Armazena o usuário (simulação de banco de dados)
    $_SESSION['usuarios'][$usuario] = $hash;
    echo "Usuário cadastrado com sucesso!";
}

// Processa o login
if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    if (isset($_SESSION['usuarios'][$usuario])) {
        $hash_salvo = $_SESSION['usuarios'][$usuario];
        
        // Verifica a senha
        if (password_verify($senha, $hash_salvo)) {
            echo "Login bem-sucedido!";
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simulador de Login</title>
</head>
<body>
    <h2>Cadastro</h2>
    <form method="post">
        Usuário: <input type="text" name="usuario" required><br>
        Senha: <input type="password" name="senha" required><br>
        <button type="submit" name="cadastro">Cadastrar</button>
    </form>

    <h2>Login</h2>
    <form method="post">
        Usuário: <input type="text" name="usuario" required><br>
        Senha: <input type="password" name="senha" required><br>
        <button type="submit" name="login">Entrar</button>
    </form>
</body>
</html>
