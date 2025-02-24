<?php
// Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Inicializa um array para armazenar mensagens de erro
    $erros = [];

    // Captura e sanitiza os dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT, [
        'options' => ['min_range' => 1, 'max_range' => 120]
    ]);
    $interesses = isset($_POST['interesses']) ?? [];
    $informativos = filter_input(INPUT_POST, 'informativos', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Validação básica dos campos
    if (empty($nome)) {
        $erros[] = "O campo Nome é obrigatório.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "O campo E-mail deve conter um endereço de e-mail válido.";
    }

    if ($idade === false || $idade === null) {
        $erros[] = "A Idade deve ser um número entre 1 e 120.";
    }

    if (empty($interesses)) {
        $erros[] = "Selecione pelo menos um interesse.";
    }

    if ($informativos !== 'sim' && $informativos !== 'nao') {
        $erros[] = "Você deve escolher uma opção para receber informativos.";
    }

    if (empty($mensagem)) {
        $erros[] = "O campo Mensagem é obrigatório.";
    }

    // Se não houver erros, processa os dados
    if (empty($erros)) {
        // Aqui você pode salvar os dados em um banco de dados, enviar por e-mail, etc.
        echo "<h2>Dados recebidos com sucesso:</h2>";
        echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
        echo "<p><strong>E-mail:</strong> " . htmlspecialchars($email) . "</p>";
        echo "<p><strong>Idade:</strong> " . htmlspecialchars($idade) . "</p>";
        echo "<p><strong>Interesses:</strong> " . htmlspecialchars(implode(", ", $interesses)) . "</p>";
        echo "<p><strong>Informativos:</strong> " . htmlspecialchars($informativos) . "</p>";
        echo "<p><strong>Mensagem:</strong> " . nl2br(htmlspecialchars($mensagem)) . "</p>";
    } else {
        // Exibe mensagens de erro
        echo "<h2>Erros no formulário:</h2>";
        echo "<ul>";
        foreach ($erros as $erro) {
            echo "<li>" . htmlspecialchars($erro) . "</li>";
        }
        echo "</ul>";
    }
} else {
    // Se o formulário não foi enviado via POST, redireciona ou exibe uma mensagem
    echo "<p>Acesso inválido ao script.</p>";
}
?>