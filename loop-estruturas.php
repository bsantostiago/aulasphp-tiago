<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$planoDeEstudos = [
    ["JS Avançado", "Node.js", "Next.js"],
    ["PHP", "Orientação a Objetos"],
    ["Teoria das Cores", "Photoshop", "UX/UI", "Motion Design"]
];
?>
<h2>for</h2>
<?php
for ($i = 0; $i < count($planoDeEstudos); $i++) {
    for ($j = 0; $j < count($planoDeEstudos[$i]); $j++) {
        echo $planoDeEstudos[$i][$j] . "<br>";
    }
}
?>

<h2>foreach</h2>

<?php
foreach ($planoDeEstudos as $categoria) {
    foreach ($categoria as $curso) {
        echo $curso . "<br>"; // Exibe cada curso
    }
}
?>

<hr>

<?php
foreach ($planoDeEstudos as $indice => $categoria) {
?>
    <h2>Grupo <?=$indice + 1?></h2>
    <ul>
    <?php
    foreach ($categoria as $curso) {
    ?>
        <li><?=$curso?></li>
    <?php
    }
    ?>
    </ul>
<?php    
}
?>

</body>
</html>