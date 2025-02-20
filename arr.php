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
    var_dump($carrinho);
    $total = array_sum($carrinho);
    echo "Total da compra: R$ $total\n";
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
    
    <h2>array_filter(): Filtrando produtos mais caros que R$100</h2>
    <pre>
    <?php
    $filtrados = array_filter($catalogo, function($preco) {
        return $preco > 100;
    });
    print_r($filtrados);
    ?>
    </pre>
    
    <h2>array_map(): Aplicando desconto de 10% em todos os produtos</h2>
    <pre>
    <?php
    $comDesconto = array_map(function($preco) {
        return $preco - $preco * 0.1;
    }, $catalogo);
    print_r($comDesconto);
    ?>
    </pre>
    
    <h2>array_search(): Encontrando o preço de um produto específico</h2>
    <pre>
    <?php
    $produtoBuscado = "Teclado";
    $temProdutoNesteValor = array_search(100, $catalogo);
    if ($temProdutoNesteValor) {
        echo "$produtoBuscado custa R$ {$catalogo[$produtoBuscado]}\n";
    } else {
        echo "$produtoBuscado não encontrado.\n";
    }
    ?>
    </pre>
</body>
</html>
