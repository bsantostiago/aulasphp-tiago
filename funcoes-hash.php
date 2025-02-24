<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funções de Hash</title>
</head>
<body>
    <h1>Usando funções de hash no PHP</h1>
    <hr>

    <h2><code>md5()</code></h2>
    <p>Gera um hash de 128 bits (32 caracteres hexadecimais).</p>
<?php
$senha = "minha_senha";
$hashMd5 = md5($senha);
?>
    <pre><?=var_dump($hashMd5)?></pre>

    <hr>

    <h2><code>sha1()</code></h2>
    <p>Gera um hash de 160 bits (40 caracteres hexadecimais).</p>
<?php
$hashSha1 = sha1($senha);
?>
    <pre><?=var_dump($hashSha1)?></pre>

    <hr>

    <h2><code>hash('sha256')</code></h2>
    <p>Gera um hash de 256 bits usando o algoritmo SHA-256.</p>
<?php
$hashSha256 = hash('sha256', $senha);
?>
    <pre><?=var_dump($hashSha256)?></pre>

    <hr>

    <h2><code>password_hash()</code></h2>
    <p>Gera um hash seguro para armazenar senhas, com salt automático.</p>
<?php
$hashPassword = password_hash($senha, PASSWORD_DEFAULT);
?>
    <pre><?=var_dump($hashPassword)?></pre>

    <hr>

    <h2><code>password_verify()</code></h2>
    <p>Verifica se uma senha corresponde ao hash gerado pelo <code>password_hash()</code>.</p>
<?php
$senhaCorreta = "minha_senha";
$senhaErrada = "senha_errada";
$verificacaoCorreta = password_verify($senhaCorreta, $hashPassword);
$verificacaoErrada = password_verify($senhaErrada, $hashPassword);
?>
    <p>Senha correta: <?= var_dump($verificacaoCorreta) ?></p>
    <p>Senha errada: <?= var_dump($verificacaoErrada) ?></p>
</body>
</html>
