<?php
define("ESCOLA", "TiagoHub");  // constante
$curso = "Desenvolvimento Web"; // variável
$tecnologias = ["PHP", "SQL", "Node.js", "HTML/CSS"]; // array

// função
function verificarIdade(int $valorDaIdade):string {
    return $valorDaIdade >= 18 ? "maior" : "menor";
}