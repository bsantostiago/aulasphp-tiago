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
$valorCompra = 8000;

if($valorCompra > 5000){
    $valorFinal = $valorCompra - $valorCompra * 0.15;
} elseif($valorCompra > 3000) {
    $valorFinal = $valorCompra - $valorCompra * 0.10;
} elseif($valorCompra > 1000) {
    $valorFinal = $valorCompra - $valorCompra * 0.05;
} else {
    $valorFinal = $valorCompra;
}
?>
<p>Valor final da compra é: <?=$valorFinal?></p>
</body>
</html>