<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 (OK)</title>
</head>
<body>
    <h1>Exercício 03 (OK)</h1>
<?php
// Entrada (simulada)
$valorCompra = 1000;
if($valorCompra > 5000){
    $desconto = 0.15;
} elseif($valorCompra > 3000) {
    $desconto = 0.10;
} elseif($valorCompra > 1000) {
    $desconto = 0.05;
} else {
    $desconto = 0;
}

$valorFinal = $valorCompra - $valorCompra * $desconto;
?>

<p>Valor da compra (sem desconto): R$
    <?=number_format($valorCompra, 2, ",", ".")?>
</p>

<p>Valor com desconto ficou em: R$
    <?=number_format($valorFinal, 2, ",", ".")?>
</p>

<p>Foi dado um desconto de:
    <?=$desconto * 100?>% (<?=$valorCompra - $valorFinal?>)
</p>



</body>
</html>