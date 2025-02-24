<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Validação e Sanitização</title>
</head>
<body>
    <h1>Usando funções de validação e sanitização no PHP</h1>
    <hr>

    <h2><code>filter_var()</code> - Validação</h2>
    <p>Valida valores com filtros específicos.</p>
<?php
$email = "usuario@example.com";
$emailValido = filter_var($email, FILTER_VALIDATE_EMAIL);
$url = "https//www.exemplo.com";
$urlValida = filter_var($url, FILTER_VALIDATE_URL);
?>
    <p>Email válido: <?= var_dump($emailValido) ?></p>
    <p>URL válida: <?= var_dump($urlValida) ?></p>

    <hr>

    <h2><code>filter_var()</code> - Sanitização</h2>
    <p>Remove ou escapa caracteres indesejados.</p>
<?php
$inputTexto = "<script>alert('Ataque!');</script> Olá!";
$textoSanitizado = filter_var($inputTexto, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$numero = "100abc";
$numeroSanitizado = filter_var($numero, FILTER_SANITIZE_NUMBER_INT);
?>
    <p>Texto sanitizado: <?= var_dump($textoSanitizado) ?></p>
    <p>Número sanitizado: <?= var_dump($numeroSanitizado) ?></p>

    <hr>

    <h2><code>filter_input()</code></h2>
    <p>Obtém e filtra entradas de <code>GET</code> e <code>POST</code>.</p>
<?php
// Supondo um formulário enviado via GET
$nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$idade = filter_input(INPUT_GET, "idade", FILTER_VALIDATE_INT);
?>
    <p>Nome sanitizado: <?= var_dump($nome) ?></p>
    <p>Idade válida: <?= var_dump($idade) ?></p>
</body>
</html>
