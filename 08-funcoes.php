<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funções</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Trabalhando com funções</h1>
        <hr>

        <h2>Função como procedimento (ou sub-rotina)</h2>
        <p><i>Procedimentos <b>não retornam</b> nada.</i></p>
<?php
function exibirDadosDoAutor(){
    echo "<h4>Fulano de Tal</h4>";
    echo "<p><time>".date("d/m/Y")."</time></p>";
}
?>
        <h3>Chamada do procedimento</h3>
        <?=exibirDadosDoAutor()?>

        <hr>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>