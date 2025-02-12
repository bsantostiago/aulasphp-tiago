<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 (versão 2 OK)</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Exercício 05 (versão 2 OK)</h1>
        <hr>
<?php
$aluno = "Marcio";
$nota1 = 8.5;
$nota2 = 5;
$nota3 = .94;

function calcularMedia(float $valorNota1, float $valorNota2, float $valorNota3):float {
    $resultadoDaMedia = ($valorNota1 + $valorNota2 + $valorNota3) / 3;
    return $resultadoDaMedia;
}

function verificarSituacao(float $valorMedia):string {
    if($valorMedia >= 7){
        return "aprovado";
    } else {
        return "reprovado";
    }
}

/* Chamamos a função e PASSAMOS OS VALORES das variáveis para ela */
$media = calcularMedia($nota1, $nota2, $nota3);
$situacao = verificarSituacao($media);

?>
        <h2><?=$aluno?></h2>
        <p>Média: <b><?=$media?></b></p>
        <p>Situação: <b><?=$situacao?></b></p>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>