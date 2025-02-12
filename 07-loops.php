<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Trabalhando com comandos/laços de repetição</h1>
    <hr>

    <h2>WHILE (ENQUANTO)</h2>
    <p>Executa ações <b>enquanto a condição for verdadeira</b>. Se a condição inicialmente não é verdadeira, o loop não funciona nenhuma vez.</p>
<?php
$i = 1;
while ($i <= 3) {
?>
    <p> <?=$i?> </p>
<?php
    $i++;
}
?>
    
    <hr>

    <h2>DO/WHILE (parecido com REPITA)</h2>
    <p>Repete <b>pelo menos uma vez</b> as ações e, caso a condição continue verdadeira, segue fazendo outros ciclos de repetição até a condição se tornar falsa.</p>
<?php
$j = 1;
do {
?>
    <div>
        <h3>Título....</h3>
        <p>Texto qualquer...</p>
    </div>
<?php
    $j++;
} while($j <= 3);
?>

    <hr>

    <h2>FOR (PARA)</h2>
    <p>Executa ações por uma <b>quantidade determinada</b> de vezes.</p>
<?php
for( $i = 1; $i <= 10; $i++ ){
?>
    <p><code>i</code> vale: <b><?=$i?></b></p>
<?php
}
?>

    <hr>
    <h2>Mini-exercício</h2>
    <p>Crie um array contendo os 12 meses do ano e usando um dos loops que vimos, mostre os nomes dos meses em uma lista ordenada HTML.</p>
    <hr>
<?php
$meses = array(
    "Janeiro", 
    "Fevereiro", 
    "Março", 
    "Abril", 
    "Maio", 
    "Junho", 
    "Julho", 
    "Agosto", 
    "Setembro", 
    "Outubro", 
    "Novembro", 
    "Dezembro"
);
?>


<ol>
<?php for( $i = 0; $i < count($meses); $i++ ){ ?>
    <li> <?=$meses[$i]?> </li>
<?php } ?>    
</ol>

    <hr>

    <h2>FOREACH (PARA CADA)</h2>
    <p>Versão simplificada do loop for e bem mais fácil de usar com arrays 
    e objetos.</p>

    <h3>Acessando array indexado/numérico</h3>
<?php
$alunos = ["Denis", "Paulo", "Heloisa"];

//      (nomeDoArray as nomeDeVariavelDeAcesso)
foreach( $alunos as $aluno ) {
?>
    <p>Nome: <?=$aluno?></p>
<?php
}
?>

    <h3>Acessando array associativo</h3>
<?php
$clubes = [
    "Corinthians" => "Timão",
    "Palmeiras" => "Porco",
    "São Paulo" => "Tricolor",
    "Santos" => "Peixe"
];

foreach($clubes as $clube => $apelido) {
?>
    <p>O clube <?=$clube?> é conhecido como <?=$apelido?></p>
<?php
}
?>

    <h3>Acessando objeto/instância</h3>
<?php
$livro = new stdClass();
$livro->titulo = "Senhor dos Anéis: A Sociedade do Anél";
$livro->autor = "J.R.R. Tolkien";
$livro->ano = 1954;

foreach($livro as $propriedade => $valor){
?>
    <p> <?=$propriedade?>: <b><?=$valor?></b> </p>
<?php
}
?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>