<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(VERSÃO 2) PHP - Condicionais</title>
    <style>
        .comprar{color: red;}
        .urgente{ color: red; background-color: yellow;}
        .normal{ color: darkgreen; }
    </style>
</head>
<body>
    <h1>(VERSÃO 2) Estruturas condicionais</h1>
    <hr>

    <h2>Simples usando <code>if</code></h2> 

<?php
$numero = 5;
if($numero > 1){
?>
    <p><?=$numero?> é maior que 1</p>
<?php
}
?>
    <hr>
    <h2>Composta usando <code>if/else</code></h2>
<?php
$produto = "Ultrabook Asus";
$qtdEmEstoque = 4; // o que temos
$qtdCritica = 5; // mínimo necessário
?>

<h3><?=$produto?></h3>
<h4>Quantidade em estoque: <?=$qtdEmEstoque?></h4>

<?php
if ($qtdEmEstoque < $qtdCritica) {
?>
    <p class="comprar">É necessário comprar!</p>

    <?php // Condicional ANINHADA
    if($qtdEmEstoque === 0):
    ?>
        <p class="urgente"><strong>🚨URGENTE🚨</strong></p>
<?php
    endif;
} else {
?>
    <p class="normal">Estoque normal</p>
<?php
}
?>
    <hr>
    <h2>Encadeada usando <code>if/elseif/else</code></h2>
<!-- Verificar a idade de uma pessoa e determinar
 se ela é criança, adolescente, adulta ou idosa. -->

<?php
$idade = 65;
if ($idade <= 12) {
    echo "<p>Criança 👼</p>";
} elseif($idade <= 17) {
    echo "<p>Adolescente 😠</p>";
} elseif($idade <= 59){
    echo "<p>Adulto 🫨</p>";
} else {
    echo "<p>Idoso 👴</p>";
}

?>


</body>
</html>