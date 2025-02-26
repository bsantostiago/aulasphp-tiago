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

<?php
// Verifica se houve um envio via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura e sanitização dos dados
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $mensagem = $_POST['mensagem'];

    // Captura dos interesses (checkbox) como array    
    $interesses = $_POST['interesses'] ?? [];
    
    // Captura da opção sim ou não
    $respostaInformativos = $_POST['informativos'] ?? "";    
?>

    <!-- tinha if/else aqui dos erros -->
        <div class="sucesso">
            <h2>Dados Recebidos com Sucesso!</h2>
        </div>

        <div class="dados">
            <p><strong>Nome:</strong> <?= $nome ?></p>
            <p><strong>E-mail:</strong> <?= $email ?></p>
            <p><strong>Idade:</strong> <?= $idade ?></p>
            <p><strong>Mensagem:</strong> <?= nl2br($mensagem) ?></p>

            <p><strong>Interesses:</strong> 
                <?= !empty($interesses) ? implode(", ", $interesses) : "Nenhum selecionado" ?>
            </p>

            <p><strong>Deseja receber informativos?</strong> 
                <?= $respostaInformativos === "sim" ? "Sim" : "Não" ?>
            </p>
        </div>
        <!-- e aqui era o fim -->
<?php
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
