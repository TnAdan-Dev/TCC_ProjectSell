<?php
session_start();
// include '../backend/conexao.php';

// $conn = novaConexao();


// Verifica se o ID do produto está na URL
// if (isset($_GET['id'])) {
//     $idProduto = $_GET['id'];

// Exibe o ID para fins de depuração
//     echo "O ID do produto é: " . $idProduto;

//     // Prepara a consulta para pegar o produto do banco de dados
//     $query = "SELECT * FROM tbl_produto WHERE id_produto = :idproduto";
//     $stmt = $conn->prepare($query);
//     $stmt->bindValue(':idproduto', $idProduto, PDO::PARAM_INT);
//     $stmt->execute();

//     // Busca o produto do banco de dados
//     $produto = $stmt->fetch(PDO::FETCH_ASSOC);

//     // Verifica se o produto foi encontrado
//     if ($produto) {
//         // Armazena cada campo da tabela em uma variável
//         $nomeProduto = $produto['pro_nome'];
//         $precoProduto = $produto['pro_preco'];
//         $descricaoProduto = $produto['pro_descricao'];
//         $estoqueProduto = $produto['pro_estoque'];
//         $categoriaProduto = $produto['pro_categoria'];

//         // Exemplo de exibição das variáveis (ou use conforme necessário no código)
//         echo "<h1>Nome: $nomeProduto</h1>";
//         echo "<p>Preço: R$ " . number_format($precoProduto, 2, ',', '.') . "</p>";
//         echo "<p>Descrição: $descricaoProduto</p>";
//         echo "<p>Estoque disponível: $estoqueProduto unidades</p>";
//         echo "<p>Categoria: $categoriaProduto</p>";
//     } else {
//         echo "Produto não encontrado.";
//     }
// } else {
//     echo "Nenhum ID de produto foi fornecido.";
// }




?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu carrinho</title>
    <link rel="stylesheet" href="../../css/output.css">
    <link rel="icon" href="../../img/iconJGM.png">

</head>

<body>

    <?php require_once '../utils/navbar.php'; ?>

    <div class="container mx-auto mt-10">
        <div class="flex flex-wrap md:flex-nowrap">
            <div class="w-full md:w-2/3 p-4">
                <h2 class="text-2xl font-bold mb-5">Shopping Cart</h2>
                <!-- Product Card -->
                <div class="flex items-start mb-4">
                    <img src="" alt="Basic Tee Sienna" class="w-24 h-24 mr-4">
                    <div class="flex flex-col justify-between">
                        <div>
                            <h3 class="text-lg font-bold">Basic Tee</h3>
                            <p class="text-gray-700">Sienna | Large</p>
                            <p class="text-gray-900 font-semibold">$32.00</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <select class="border p-1 rounded">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <span class="text-sm text-green-500">In stock</span>
                        </div>
                    </div>
                    <button class="ml-auto text-gray-700 font-bold text-xl">×</button>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-4 bg-gray-100">
                <h2 class="text-xl font-bold mb-3">Order summary</h2>
                <div class="flex justify-between mb-2">
                    <span>Subtotal</span>
                    <span>$99.00</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span>Shipping estimate</span>
                    <span>$5.00</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span>Tax estimate</span>
                    <span>$8.32</span>
                </div>
                <div class="flex justify-between font-bold text-lg mb-5">
                    <span>Order total</span>
                    <span>$112.32</span>
                </div>
                <button class="w-full bg-blue-500 text-white p-3 rounded hover:bg-blue-600">Checkout</button>
            </div>
        </div>
    </div>

    <?php require_once '../utils/footer.php' ?>

</body>

</html>