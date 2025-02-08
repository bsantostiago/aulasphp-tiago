<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 (ok)</title>
    <style>
       table {
  width: 70%;
  border-collapse: collapse;
  margin: 20px auto;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Cabeçalho da tabela */
th {
  background-color: #4CAF50;
  color: white;
  padding: 12px 15px;
  text-align: left;
  font-size: 1.1em;
}

/* Estilo das células */
td {
  background-color: #fff;
  padding: 12px 15px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

/* Efeito de alternância de cores nas linhas */
tbody tr:nth-child(odd) {
  background-color: #f9f9f9;
}

tbody tr:hover {
  background-color: #f1f1f1;  /* Altera o fundo quando passar o mouse sobre a linha */
  cursor: pointer;
}

/* Borda da tabela */
table, th, td {
  border: 1px solid #ddd;
  border-radius: 5px;
}

/* Estilo para a última linha (sem borda inferior) */
tr:last-child td {
  border-bottom: none;
}
    </style>
</head>
<body>
    <h1>Exercício 04 (ok)</h1>
    <hr>
<?php
$linguagens = [
    [
        "id" => 1,
        "nome" => "HTML",
        "descricao" => "Estruturação"
    ],
    [
        "id" => 2,
        "nome" => "CSS",
        "descricao" => "Estilos"
    ],
    [
        "id" => 3,
        "nome" => "JS",
        "descricao" => "Comportamentos"
    ],
    [
        "id" => 4,
        "nome" => "PHP",
        "descricao" => "Back-End"
    ],
    [
        "id" => 5,
        "nome" => "SQL",
        "descricao" => "Manipulação de dados"
    ],
    [
        "id" => 6,
        "nome" => "Java",
        "descricao" => "Softwares"
    ],
];
?>
    <table class="tabela-estilizada">
        <caption>Linguagens</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Linguagem</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>

<?php foreach($linguagens as $linguagem){ ?>
            <tr>
                <td><?=$linguagem["id"]?></td>
                <td><?=$linguagem["nome"]?></td>
                <td><?=$linguagem["descricao"]?></td>                
            </tr>
<?php } ?>   

        </tbody>
    </table>

</body>
</html>