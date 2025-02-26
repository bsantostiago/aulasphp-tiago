<?php
session_start();

// Simulação de armazenamento de senha (substitua isso por um banco de dados na prática)
if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = [];
}

$mensagem = "";

// Processa o cadastro
if (isset($_POST['cadastro'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    // Hash seguro da senha
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    
    // Armazena o usuário (simulação de banco de dados)
    $_SESSION['usuarios'][$usuario] = $hash;
    $mensagem = "Usuário cadastrado com sucesso!";
}

// Processa o login
if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    if (isset($_SESSION['usuarios'][$usuario])) {
        $hash_salvo = $_SESSION['usuarios'][$usuario];
        
        // Verifica a senha
        if (password_verify($senha, $hash_salvo)) {
            $_SESSION['logado'] = $usuario;
        } else {
            $mensagem = "Senha incorreta!";
        }
    } else {
        $mensagem = "Usuário não encontrado!";
    }
}

// Processa logout
if (isset($_POST['logout'])) {
    unset($_SESSION['logado']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simulador de Login</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        form { margin: 20px auto; width: 300px; padding: 20px; border: 1px solid #ccc; border-radius: 10px; background: #f9f9f9; }
        input { width: 100%; padding: 8px; margin: 10px 0; }
        button { width: 100%; padding: 10px; background: #28a745; color: #fff; border: none; cursor: pointer; }
        button:hover { background: #218838; }
        .mensagem { color: red; }
    </style>
</head>
<body>
    <?php if (isset($_SESSION['logado'])): ?>
        <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['logado']); ?>!</h2>
        <form method="post">
            <button type="submit" name="logout" style="background: #dc3545;">Sair</button>
        </form>
    <?php else: ?>
        <h2>Cadastro</h2>
        <form method="post">
            <input type="text" name="usuario" placeholder="Usuário" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit" name="cadastro">Cadastrar</button>
        </form>

        <h2>Login</h2>
        <form method="post">
            <input type="text" name="usuario" placeholder="Usuário" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit" name="login">Entrar</button>
        </form>
    <?php endif; ?>
    
    <p class="mensagem"><?php echo $mensagem; ?></p>
</body>
</html>
