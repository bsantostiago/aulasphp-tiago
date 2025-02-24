<?php
$erros = [];
$dados = [];

// Verifica se houve um envio via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura e sanitização dos dados
    $dados['nome'] = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $dados['email'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $dados['idade'] = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    $dados['mensagem'] = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Captura dos interesses (checkbox) como array
    $dados['interesses'] = filter_input(INPUT_POST, 'interesses', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
    $dados['informativos'] = filter_input(INPUT_POST, 'informativos', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Validações
    if (empty($dados['nome'])) {
        $erros[] = "O campo Nome é obrigatório.";
    }

    if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
        $erros[] = "O e-mail informado não é válido.";
    }

    if (!filter_var($dados['idade'], FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range" => 120]])) {
        $erros[] = "Idade inválida. A idade deve estar entre 1 e 120.";
    }

    if (empty($dados['mensagem'])) {
        $erros[] = "O campo Mensagem não pode estar vazio.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Formulário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            max-width: 600px;
            margin: auto;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .erro {
            color: red;
            font-weight: bold;
        }
        .sucesso {
            color: green;
            font-weight: bold;
        }
        ul {
            color: red;
        }
        .dados {
            background: #eef;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Resultado do Formulário</h1>

    <?php if (!empty($erros)): ?>
        <div class="erro">
            <h2>Erros encontrados:</h2>
            <ul>
                <?php foreach ($erros as $erro): ?>
                    <li><?= htmlspecialchars($erro) ?></li>
                <?php endforeach; ?>
            </ul>
            <p><a href="javascript:history.back()">Voltar ao formulário</a></p>
        </div>
    <?php else: ?>
        <div class="sucesso">
            <h2>Dados Recebidos com Sucesso!</h2>
        </div>

        <div class="dados">
            <p><strong>Nome:</strong> <?= htmlspecialchars($dados['nome']) ?></p>
            <p><strong>E-mail:</strong> <?= htmlspecialchars($dados['email']) ?></p>
            <p><strong>Idade:</strong> <?= htmlspecialchars($dados['idade']) ?></p>
            <p><strong>Mensagem:</strong> <?= nl2br(htmlspecialchars($dados['mensagem'])) ?></p>

            <p><strong>Interesses:</strong> 
                <?= !empty($dados['interesses']) ? htmlspecialchars(implode(", ", $dados['interesses'])) : "Nenhum selecionado" ?>
            </p>

            <p><strong>Deseja receber informativos?</strong> 
                <?= $dados['informativos'] === "sim" ? "Sim" : "Não" ?>
            </p>
        </div>
    <?php endif; ?>

</div>

</body>
</html>
