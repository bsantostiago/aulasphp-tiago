<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condicionais</title>
    <style>
        .comprar{color: red;}
        .urgente{ color: red; background-color: yellow;}
        .normal{ color: darkgreen;}
    </style>
</head>
<body>
    <h1>Estruturas condicionais</h1>
    <hr>

    <h2>Simples usando <code>if</code></h2>    
<?php if($numero = 5) : ?>
    <?php if($numero > 1): ?>
        <p><?= $numero ?> é maior que 1</p>
    <?php endif; ?>
<?php endif; ?>

    <hr>
    <h2>Composta usando <code>if/else</code></h2>
<?php
$produto = "Ultrabook Asus";
$qtdEmEstoque = 4; // o que temos
$qtdCritica = 5; // mínimo necessário
?>
    <h3><?= $produto ?></h3>
    <h4>Quantidade em estoque: <?= $qtdEmEstoque ?></h4>

<?php if ($qtdEmEstoque < $qtdCritica): ?>
    <p class="comprar">É necessário comprar!</p>

    <?php if($qtdEmEstoque === 0): ?>
        <p class="urgente"><strong>🚨URGENTE🚨</strong></p>
    <?php endif; ?>
    
<?php else: ?>
    <p class="normal">Estoque normal</p>
<?php endif; ?>

    <hr>
    <h2>Encadeada usando <code>if/elseif/else</code></h2>
<?php
$idade = 65;
?>

<?php if ($idade <= 12): ?>
    <p>Criança 👼</p>
<?php elseif($idade <= 17): ?>
    <p>Adolescente 😠</p>
<?php elseif($idade <= 59): ?>
    <p>Adulto 🫨</p>
<?php else: ?>
    <p>Idoso 👴</p>
<?php endif; ?>

</body>
</html>
