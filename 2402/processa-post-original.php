<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Processamento com POST</title>
</head>
<body>

    <h1>Processamento usando POST</h1>
    <hr>
<?php
if( empty($_POST["nome"]) || empty($_POST["email"]) ){
?>
    <p>Por favor preencha <b>nome</b> e <b>e-mail</b>.</p>
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
    $interesses = filter_var($_POST["interesses"] ?? [], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Capturando o radio
    $informativos = filter_var(
        $_POST["informativos"] ?? '', 
        FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
    ?>
        <!-- Exibindo -->
        <h2>Dados:</h2>
        <ul>
            <li>Nome: <?=$nome?> </li>
            <li>E-mail: <?=$email?> </li>
            <?php if( !empty($idade) ) { ?>        
            <li>Idade: <?=$idade?> anos </li>
            <?php } ?>

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

            <?php if( !empty($mensagem) ) { ?>        
            <li>Mensagem: <?=$mensagem?> </li>
            <?php } ?>
        </ul>
<?php
}
?>        
        

</body>
</html>