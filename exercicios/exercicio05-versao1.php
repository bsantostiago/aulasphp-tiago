<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 (versão 1 OK)</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Exercício 05 (versão 1 OK)</h1>
        <hr>
<?php
$aluno = "Marcio";
$nota1 = 0.5;
$nota2 = 5;
$nota3 = 7.94;

$media = ($nota1 + $nota2 + $nota3) / 3;

if($media >= 7){
    $situacao = "aprovado";
} else {
    $situacao = "reprovado";
}
?>
        <h2><?=$aluno?></h2>
        <p>Média: <b><?=$media?></b></p>
        <p>Situação: <b><?=$situacao?></b></p>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>