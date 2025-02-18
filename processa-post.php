<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Processamento com POST</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Processamento usando POST</h1>
    <hr>
<?php
// Capturando os dados transmitidos
$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];
$mensagem = $_POST["mensagem"];

// Capturando os options

// Solução 1: aplicar um if/else ternário checando se existe (isset) algum interesse
// $interesses = isset($_POST["interesses"]) ? $_POST["interesses"] : [];

// Solução 2: usando o operador de coalescência nula ??
/* Se houver interesses, os armazene. Caso contrário, guarde array vazio. */
$interesses = $_POST["interesses"] ?? [];

// Capturando o radio
$informativos = $_POST["informativos"];
?>
    <!-- Exibindo -->
    <h2>Dados:</h2>
    <ul>
        <li>Nome: <?=$nome?> </li>
        <li>E-mail: <?=$email?> </li>
        <li>Idade: <?=$idade?> anos </li>
        <li>Receber informativos: <?=$informativos?> </li>
        
<!-- Usamos o empty com inversão de lógica (operador ! de negação).
Portanto, se NÃO ESTÁ vazio, mostre os interesses. -->        
<?php if( !empty($interesses) ) { ?>
        <li>Interesses - usando <code>implode()</code>: 
            <?=implode(", ", $interesses)?> 
        </li>

        <li>Interesse - usando <code>foreach()</code>:
            <ul>
                <?php foreach($interesses as $interesse) { ?>
                    <li><?=$interesse?></li>
                <?php } ?>
            </ul>
        </li>
<?php } ?>        

        <li>Mensagem: <?=$mensagem?> </li>
    </ul>
        
</div>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>