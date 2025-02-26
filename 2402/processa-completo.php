<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Formulário</title>
    
   
    <link rel="stylesheet" href="style-form-processa.css">
</head>
<body>

<div class="container">
    <h1>Resultado do Formulário</h1>

    <?php
$erros = [];

// Verifica se houve um envio via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura e sanitização dos dados
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Captura dos interesses (checkbox) como array    
    $interessesValidos = ['HTML', 'CSS', 'JavaScript']; 
    $interesses = filter_input(INPUT_POST, 'interesses', FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY) ?? [];
    $interessesFiltrados = array_intersect($interesses, $interessesValidos);
    
    // Captura da opção sim ou não
    $opcoesValidas = ['sim', 'nao'];
    $respostaInformativos = filter_input(INPUT_POST, 'informativos', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Valor padrão caso o input seja inválido
    $respostaInformativos = in_array($respostaInformativos, $opcoesValidas) ? $respostaInformativos : 'nao';
    
    // Validações
    if (empty($nome)) {
        $erros[] = "O campo Nome é obrigatório.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "O e-mail informado não é válido.";
    }

    if (!filter_var($idade, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range" => 120]])) {
        $erros[] = "Idade inválida. A idade deve estar entre 1 e 120.";
    }

    if (empty($mensagem)) {
        $erros[] = "O campo Mensagem não pode estar vazio.";
    }

?>

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
            <p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
            <p><strong>E-mail:</strong> <?= htmlspecialchars($email) ?></p>
            <p><strong>Idade:</strong> <?= htmlspecialchars($idade) ?></p>
            <p><strong>Mensagem:</strong> <?= nl2br(htmlspecialchars($mensagem)) ?></p>

            <p><strong>Interesses:</strong> 
                <?= !empty($interessesFiltrados) ? implode(", ", $interessesFiltrados) : "Nenhum selecionado" ?>
            </p>

            <p><strong>Deseja receber informativos?</strong> 
                <?= $respostaInformativos === "sim" ? "Sim" : "Não" ?>
            </p>
        </div>
    <?php endif; 
} else {
    ?>
        <div class="erro">
            <p>Acesso inválido ao script.</p>
            <p>Você deve usar o formulário para enviar os dados.</p>
        </div>
        <p><a href="17-formulario.html">Ir para o formulário</a></p>
<?php
}
?>
</div>

</body>
</html>
