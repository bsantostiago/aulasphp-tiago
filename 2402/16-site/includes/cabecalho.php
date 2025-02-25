<?php
// Capturamos o nome do arquivo atualmente aberto
$pagina = basename($_SERVER["PHP_SELF"]);

// Analisamos o valor de $pagina pra determinar um título personalizado
/* switch ($pagina) {
    case 'index.php':
        $titulo = "Página Inicial";
        break;
    case 'cursos.php':
        $titulo = "Treinamentos";
        break;
    case 'duvidas.php':
        $titulo = "Dúvidas";
        break;    
    default:
        $titulo = "Contato";
        break;
} */
$titulo = match ($pagina) {
    'index.php' => "Página Inicial",
    'cursos.php' => "Treinamentos",
    'duvidas.php' => "Dúvidas",
    default => "Contato",
};


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$titulo?> - Site com PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Site com PHP</h1>
            <nav>
                <a href="index.php">Home</a>
                <a href="cursos.php">Cursos</a>
                <a href="duvidas.php">Dúvidas</a>
                <a href="contato.php">Contato</a>
            </nav>
        </header>

        <main>