<?php
define("ESCOLA", "Senac");  // constante
$curso = "Téc. Informática para Internet"; // variável
$tecnologias = ["HTML", "CSS", "JS"]; // array

// função
function verificarIdade(int $valorDaIdade):string {
    return $valorDaIdade >= 18 ? "maior" : "menor";
}