<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Objetos</title>
</head>
<body>
    <h1>Trabalhando com objetos genéricos</h1>
    <hr>
<?php
/* Criando uma instância de uma classe genérica chamada stdClass (Standar Class) */
$usuario = new stdClass(); // instância ou objeto

// Adicionando propriedades/atributos ao objeto
$usuario->nome = "Chapolin Colorado";
$usuario->idade = 25;
$usuario->email = "chapolin@gmail.com";
$usuario->telefones = ["11-2135-0300", "11-98888-7777"];

echo $usuario->nome;

// Pode ser usado {} ao redor do objeto/propriedade na interpolação
echo "<p><mark>{$usuario->nome}</mark><p>"; // interpolação
?>
    <h2>Analisando a estrutura do objeto</h2>
    <pre><?=var_dump($usuario)?></pre>
    <hr>

    <h2>Saída de dados</h2>
    <p>Nome: <?=$usuario->nome?></p>
    <p>Idade: <?=$usuario->idade?> anos</p>
    <p>Celular: <?=$usuario->telefones[1] ?></p>

    <hr>

    <h2>Convertendo (fazendo um casting) objeto em array associativo</h2>

<?php $arrayUsuario = (array) $usuario; ?>

    <h3>Analisando o array gerado a partir de um objeto</h3>
    <pre><?=var_dump($arrayUsuario)?></pre>

    <h2>Convertendo (fazendo um casting) array associativo em objeto</h2>

<?php
// Array associativo com duas chaves (nome e sobrenome)
$aluno = ["nome" => "Fulano", "sobrenome" => "dos Santos"];

// Convertendo array para objeto
$objAluno = (object) $aluno;
?>
    <h3>Analisando o objeto gerado a partir de um array</h3>
    <pre><?=var_dump($objAluno)?></pre>


</body>
</html>