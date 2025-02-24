<?php require "recursos.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Modularização e Inclusão de Recursos</title>
</head>
<body>
    
        <h1>Modularização e Inclusão de Recursos</h1>
        <hr>
        <!-- Acessando a constante -->
        <h2> <?=ESCOLA?> </h2>

        <!-- Acessando a variável -->
        <p>Estamos fazendo o curso de <?=$curso?> </p>
        <ul>
            <!-- Acessando o array -->
            <?php foreach($tecnologias as $tecnologia) { ?>
                <li><?=$tecnologia?></li>
            <?php } ?>
        </ul>

        <hr>

        <p>O aluno Fulano de Tal tem 20 anos e é <?=verificarIdade(20)?> de idade</p>

        <hr>

        <article>
            <h2>Título qualquer...</h2>

            <!-- Incluindo fragmento de HTML -->
            <?php include "textos.html"; ?>
        </article>

    </div>    

    <!-- pra exemplificar o once -->
    <?php require_once "recursos.php"; ?>
    <p>O aluno Fulano de Tal tem 10 anos e é <?=verificarIdade(10)?> de idade</p>


</body>
</html>