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
if( empty($_POST["nome"]) || empty($_POST["email"]) ){
?>
    <p class="alert alert-danger">Por favor preencha <b>nome</b> e <b>e-mail</b>.</p>
<?php
} else {

    // Capturando os dados transmitidos e sanitizá-los
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
    $mensagem = filter_input(
        INPUT_POST, "mensagem", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Capturando os options

    // Solução 1: aplicar um if/else ternário checando se existe (isset) algum interesse
    // $interesses = isset($_POST["interesses"]) ? $_POST["interesses"] : [];

    // Solução 2: usando o operador de coalescência nula ??
    /* Se houver interesses, os armazene. Caso contrário, guarde array vazio. */
    $interesses = filter_var_array(
        $_POST["interesses"] ?? [], 
        FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );

    // Capturando o radio
    $informativos = filter_var_array(
        $_POST["informativos"] ?? [], 
        FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
    ?>
        <!-- Exibindo -->
        <h2>Dados:</h2>
        <ul>
            <li>Nome: <?=$nome?> </li>
            <li>E-mail: <?=$email?> </li>
            <li>Idade: <?=$idade?> anos </li>
            
            <?php if( !empty($informativos) ) { ?>        
            <li>Receber informativos: <?=$informativos?> </li>
            <?php } ?>
            
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
<?php
}
?>        
        
</div>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>