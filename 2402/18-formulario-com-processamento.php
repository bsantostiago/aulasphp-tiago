<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Formulário COM Processamento</title>
    <link rel="stylesheet" href="style-form-processa.css">
</head>
<body>
    <div class="container">
        <h1>Formulário e processamento combinados</h1>
        
        <?php
/* Detectando quando o formulário é acionado */
 if( isset($_POST['enviar']) ){
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    if(empty($nome) || empty($email)):
?>
        <div class="erro">
            <h2>Ops!</h2>
            <p>Você precisa preencher todos os campos!</p>
            <p><a href="javascript:history.back()">Voltar ao formulário</a></p>
        </div>

    <?php else : ?>

        <section class="dados">
            <h2>Dados</h2>
            <p>Nome: <?=$nome?></p>
            <p>E-mail: <?=$email?></p>
        </section>
<?php
    endif;
} else {
?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="mb-3">
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email">
            </div>
            <button type="submit" name="enviar">Enviar</button>
        </form>
<?php } ?>        
    </div>


</body>
</html>