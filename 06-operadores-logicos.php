<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Operadores Lógicos</title>
</head>
<body>
    <h1>Relembrando Operadores Lógicos</h1>
    <hr>

    <h2>&& (E/AND)</h2>
    <p><i>Todas as condições precisam ser <b>VERDADEIRAS/TRUE</b></i></p>
<?php
/* Avaliar um aluno mediante média e faltas */
$media = 9.5;
$faltas = 10;

if ($media >= 7 && $faltas <= 10) {
?>
    <p>Aprovado!</p>
<?php    
} else {
?>
    <p>Reprovado!</p>
<?php
}
?>
    <hr>

    <!-- o símbolo | é chamado de pipe -->
    <h2>|| (OU/OR)</h2>
    <p><i>Basta que apenas uma condição seja <b>VERDADEIRA/TRUE</b></i></p>
<?php
/* Dar um desconto a um cliente que seja VIP ou que tenha cupom */
$clienteVIP = true; // valor/tipo lógico/boolean
$temCupom = false;

if ($clienteVIP || $temCupom) {
?>
    <p>Desconto aplicado!</p>
<?php    
} else {
?>
    <p>Sem desconto!</p>
<?php
}
?>
    
    <hr>
    
    <h2>! (NÃO/NOT)</h2>
    <p><i>É uma inversão de lógica: VERDADEIRO vira <b>FALSO</b>, FALSO vira <b>VERDADEIRO</b></i></p>
<?php
/* Se o usuário NÃO ESTIVER logado, exibir o link/botão de LOGIN.
Caso contrário, exibir uma saudação. */
$usuarioLogado = false;

if (!$usuarioLogado) {
?>    
    <a href="login.php">Login</a>
<?php    
} else {
?>
    <span>Bem-vindo ao sistema!</span>
<?php
}
?>

    <hr>
    <h2>Usando os 3 operadores combinados para uma lógica mais elaborada</h2>
<?php
/* Para entrar em uma festa é necessário atender os seguintes critérios:

- Idade mínima de 18 anos 
- Ou estar acompanhado dos pais
- E não estar bêbado */

// Variáveis
$idade = 20;
$acompanhadoDosPais = true;
$estaBebado = true;

if( ($idade >= 18 || $acompanhadoDosPais) && !$estaBebado ){
?>
    <p>Entrada permitida!</p>   
<?php    
} else {
?>
    <p>Entrada negada!</p>
<?php 
}
?>


</body>
</html>