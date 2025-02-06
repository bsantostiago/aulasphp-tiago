<?php
/* 1️⃣ Operador && (E)
👉 Retorna true apenas se ambas as condições forem verdadeiras.

Exemplo: Só aprova se a nota for maior ou igual a 7 e a frequência for maior ou igual a 75%. */
$nota = 8;
$frequencia = 80;

if ($nota >= 7 && $frequencia >= 75) {
    echo "Aluno aprovado!";
} else {
    echo "Aluno reprovado.";
}

echo "<br><br>";

/* 2️⃣ Operador || (OU)
👉 Retorna true se pelo menos uma das condições for verdadeira.

Exemplo: Concede desconto se for cliente VIP ou tiver cupom de desconto. */
$clienteVIP = false;
$temCupom = true;

if ($clienteVIP || $temCupom) {
    echo "Desconto aplicado!";
} else {
    echo "Sem desconto.";
}

echo "<br><br>";

/* 3️⃣ Operador ! (NÃO)
👉 Inverte o valor lógico de uma variável ou condição.

Exemplo: Verifica se o usuário não está logado para exibir o botão de login. */
$usuarioLogado = true;

if (!$usuarioLogado) {
    echo "Exibir botão de login.";
    echo '<a href="">Login</a>';
} else {
    echo "Bem-vindo de volta!";
    echo '<a href="">Logout</a>';
}

echo "<br><br>";

/* 4️⃣ Exemplo combinando &&, || e !
📌 Enunciado:
Para entrar em um evento, a pessoa precisa ser maior de 18 anos ou estar acompanhada dos pais.
Não pode estar bêbada. */
$idade = 19;
$acompanhadoDosPais = true;
$estaBebado = true;

if (($idade >= 18 || $acompanhadoDosPais) && !$estaBebado) {
    echo "Entrada permitida!";
} else {
    echo "Entrada negada.";
}
