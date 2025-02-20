<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$servicos = [
    ["codigo" => 1, "tipo" => "Limpeza", "status" => "Concluído"],
    ["codigo" => 2, "tipo" => "Manutenção", "status" => "Pendente"],
    ["codigo" => 3, "tipo" => "Reparo", "status" => "Concluído"],
    ["codigo" => 4, "tipo" => "Consultoria", "status" => "Concluído"],
    ["codigo" => 5, "tipo" => "Instalação", "status" => "Concluído"],
];

$servicosConcluidos = array_filter($servicos, function($servico) {
    return $servico["status"] === "Concluído";
});
?>
<pre><?=print_r($servicosConcluidos)?></pre>

<hr>

<?php $tipos = array_column($servicos, "tipo"); ?>

<pre><?=print_r($tipos)?></pre>

<hr>

<?php
$formatado = array_map(function($servico) {
    return "Código {$servico['codigo']}: {$servico['tipo']} ({$servico['status']})";
}, $servicos);
?>
<pre><?=print_r($formatado)?></pre>

<hr>

<?php
$codigoBuscado = 3;
$indice = array_search($codigoBuscado, array_column($servicos, "codigo"));
if ($indice !== false) {
    echo "Serviço encontrado: " . $servicos[$indice]["tipo"] . "\n";
}
?>



</body>
</html>