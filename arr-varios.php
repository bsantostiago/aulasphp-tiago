<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos de Funções PHP</title>
</head>
<body>
    <h1>Exemplos de Funções PHP com Arrays</h1>
    
    <h2>array_sum(): Somando valores de um carrinho de compras</h2>
    <pre>
    <?php
    $carrinho = [
        "produto1" => 50,
        "produto2" => 30,
        "produto3" => 20,
    ];
    $total = array_sum($carrinho);
    echo "Total da compra: R$ $total\n";
    
    $media = array_sum($carrinho) / count($carrinho);
    echo "Valor médio pago: R$ $media\n";
    ?>
    </pre>
    
    <h2>array_unique(): Removendo categorias duplicadas de uma lista de produtos</h2>
    <pre>
    <?php
    $categorias = ["Eletrônicos", "Livros", "Roupas", "Eletrônicos", "Roupas"];
    $categoriasUnicas = array_unique($categorias);
    print_r($categoriasUnicas);
    ?>
    </pre>
    
    <h2>array_merge(): Juntando listas de produtos de diferentes fornecedores</h2>
    <pre>
    <?php
    $fornecedor1 = ["Mouse", "Teclado"];
    $fornecedor2 = ["Monitor", "Teclado", "Webcam"];
    $estoqueTotal = array_merge($fornecedor1, $fornecedor2);
    print_r($estoqueTotal);
    ?>
    </pre>
    
    <h2>array_combine(): Criando um dicionário de produtos com preços</h2>
    <pre>
    <?php
    $produtos = ["Mouse", "Teclado", "Monitor"];
    $precos = [50, 100, 700];
    $catalogo = array_combine($produtos, $precos);
    print_r($catalogo);
    ?>
    </pre>
        
    
    <h2>array_map(): Aplicando desconto de 10% em todos os produtos</h2>
    <pre>
    <?php
    $comDesconto = array_map(function($preco) {
        return $preco - $preco * 0.10;
    }, $catalogo);
    print_r($comDesconto);
    ?>
    </pre>
    
  

<hr>
<hr>

    <h2>array_column(): Obtendo apenas os tipos de serviços</h2>
    <pre>
    <?php
    $servicos = [
        ["codigo" => 1, "tipo" => "Limpeza", "status" => "Concluído"],
        ["codigo" => 2, "tipo" => "Manutenção", "status" => "Pendente"],
        ["codigo" => 3, "tipo" => "Reparo", "status" => "Concluído"],
        ["codigo" => 4, "tipo" => "Consultoria", "status" => "Pendente"],
        ["codigo" => 5, "tipo" => "Instalação", "status" => "Concluído"],
    ];
    $tipos = array_column($servicos, "tipo");
    print_r($tipos);
    ?>
    </pre>
    
    <h2>array_filter(): Filtrando serviços com status Concluído</h2>
    <pre>
    <?php
    /* $servicosConcluidos = array_filter($servicos, function($servico) {
        return $servico["status"] === "Concluído";
    }); */
    $servicosConcluidos = array_filter($servicos, fn(array $servico):bool => $servico["status"] === "Concluído");
    print_r($servicosConcluidos);
    ?>
    </pre>
    
    
    <h2>array_reduce(): Contando quantos serviços estão pendentes</h2>
    <pre>
    <?php
    $pendentes = array_reduce($servicos, function($acumulador, $servico) {
        return $acumulador + ($servico["status"] === "Pendente" ? 1 : 0);
    }, 0);
    echo "Total de serviços pendentes: $pendentes\n";
    ?>
    </pre>
</body>
</html>
