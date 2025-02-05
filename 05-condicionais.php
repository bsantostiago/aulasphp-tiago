<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condicionais</title>
</head>
<body>
    <h1>Estruturas condicionais</h1>
    <hr>

    <h2>Simples usando <code>if</code></h2>    
<?php
$numero = 5;

if($numero > 1){
    echo "<p>$numero é maior que 1</p>";
}

// Sintaxe omitindo as chaves
if($numero > 1) echo "<p>$numero é maior que 1</p>";
?>
    <hr>
    <h2>Composta</h2>
<?php
$produto = "Ultrabook Asus";
$qtdEmEstoque = 0; // o que temos
$qtdCritica = 5; // mínimo necessário

echo "<h3>$produto</h3>";
echo "<h4>Quantidade em estoque: $qtdEmEstoque</h4>";

if ($qtdEmEstoque < $qtdCritica) {
    echo "<p>É necessário comprar!</p>";

    // Condicional ANINHADA
    if($qtdEmEstoque === 0){
        echo "<p><strong>🚨URGENTE🚨</strong></p>";
    }
} else {
    echo "<p>Estoque normal</p>";
}
?>
    <hr>
    <h2>Encadeada</h2>

</body>
</html>