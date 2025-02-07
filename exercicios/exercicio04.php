<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 (ok)</title>
</head>
<body>
    <h1>Exercício 04 (ok)</h1>
    <hr>
<?php
$linguagens = [
    "HTML" => "Estruturação",
    "CSS" => "Estilos",
    "JS" => "Comportamentos",
    "PHP" => "Back-End",
    "SQL" => "Manipulação de dados",
    "Java" => "Softwares"
];
?>
    <table border="1">
        <caption>Linguagens</caption>
        <thead>
            <tr>
                <th>Linguagem</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>

<?php foreach($linguagens as $linguagem => $descricao){ ?>
            <tr>
                <td><?=$linguagem?></td>
                <td><?=$descricao?></td>
            </tr>
<?php } ?>   

        </tbody>
    </table>

</body>
</html>