<?php
session_start();
include '../backend/conexao.php';

$conn = novaConexao();

// Número de produtos por página
$produtosPorPagina = 8;

// Página atual (verifica se foi passado um número de página na URL, se não, usa a página 1)
$paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$inicio = ($paginaAtual - 1) * $produtosPorPagina;

// Consulta para buscar os produtos com limite
$query = "SELECT * FROM tbl_produto LIMIT :inicio, :quantidade";
$stmt = $conn->prepare($query);
$stmt->bindValue(':inicio', $inicio, PDO::PARAM_INT);
$stmt->bindValue(':quantidade', $produtosPorPagina, PDO::PARAM_INT);
$stmt->execute();

$produtos = [];

if ($stmt->rowCount() > 0) {
    while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $produtos[] = [
            'id' => $produto['id_produto'],
            'nome' => $produto['pro_nome'],
            'preco' => $produto['pro_preco']
        ];
    }
} else {
    echo "<p>Nenhum produto disponível.</p>";
}

// Conta o total de produtos
$queryTotal = "SELECT COUNT(*) AS total FROM tbl_produto";
$totalProdutos = $conn->query($queryTotal)->fetch(PDO::FETCH_ASSOC)['total'];

// Calcula o número total de páginas
$totalPaginas = ceil($totalProdutos / $produtosPorPagina);

// Fecha a conexão
$conn = null;
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
    <link rel="stylesheet" href="../css/output.css">
    <link rel="icon" href="../img/iconJGM.png">

</head>

<body class="bg-white">
    <?php require_once '../utils/navbar.php' ?>


    <div class="container mx-auto p-5">
        <!-- Flex container para layout responsivo -->
        <div class="flex flex-col lg:flex-row gap-5">
            <!-- Sidebar para Filtros e Pesquisa -->
            <div class="w-full lg:w-1/4 p-4 bg-white shadow-lg rounded mb-5 lg:mb-0">
                <!-- Barra de Pesquisa -->
                <div class="mb-4">
                    <input type="text" class="form-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Buscar produtos...">
                </div>

                <!-- Filtros -->
                <h2 class="font-bold text-lg mb-4">Filtros</h2>
                <div class="space-y-4">
                    <!-- Filtro de Tamanho -->
                    <div class="mb-4">
                        <h3 class="font-semibold text-myprimary mb-2">Tamanho</h3>
                        <div class="flex flex-wrap gap-2">
                            <!-- Checkbox Pequeno -->
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" class="checkbox checkbox-primary bg-myprimary" name="size" value="small">
                                <span class="text-black">Pequeno</span>
                            </label>

                            <!-- Checkbox Médio -->
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" class="checkbox checkbox-primary bg-myprimary" name="size" value="medium">
                                <span class="text-black">Médio</span>
                            </label>

                            <!-- Checkbox Grande -->
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" class="checkbox checkbox-primary bg-myprimary" name="size" value="large">
                                <span class="text-black">Grande</span>
                            </label>
                        </div>
                    </div>

                    <!-- Filtro de Cor -->
                    <div>
                        <h3 class="font-semibold text-myprimary mb-2">Cor</h3>
                        <div class="flex flex-wrap gap-2">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="checkbox" name="color" value="red">
                                <span class="ml-2 text-black">Vermelho</span>
                            </label>
                            <!-- Adicionar mais opções conforme necessário -->
                        </div>
                    </div>

                    <!-- Filtro de Marca -->
                    <div>
                        <h3 class="font-semibold text-myprimary mb-2">Marca</h3>
                        <div class="flex flex-wrap gap-2">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="checkbox" name="brand" value="nike">
                                <span class="ml-2 text-black">Marca X</span>
                            </label>
                        </div>
                    </div>

                    <!-- Filtro de Material -->
                    <div>
                        <h3 class="font-semibold text-myprimary mb-2">Material</h3>
                        <div class="flex flex-wrap gap-2">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="checkbox" name="material" value="cotton">
                                <span class="ml-2 text-black">Algodão</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Listagem de Produtos -->
            <div class="w-full lg:w-3/4">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <?php if (!empty($produtos)): ?>
                        <?php foreach ($produtos as $produto): ?>
                            <!-- Card de produto -->
                            <a href="produto.php?id=<?php echo $produto['id']; ?>" class="block bg-white shadow rounded-lg transform transition-transform duration-300 hover:scale-105">
                                <img src="https://picsum.photos/300/200" alt="<?php echo $produto['nome']; ?>" class="rounded-t-lg w-full" />
                                <div class="p-4">
                                    <h3 class="text-lg font-bold text-myprimary mb-2"><?php echo $produto['nome']; ?></h3>
                                    <p class="text-black mb-4">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Nenhum produto disponível no momento.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Paginação -->
        <div class="mt-6">
            <nav class="flex justify-center">
                <div class="join">
                    <!-- Botão de página anterior -->
                    <?php if ($paginaAtual > 1): ?>
                        <a href="?pagina=<?php echo $paginaAtual - 1; ?>" class="join-item btn bg-white text-black">«</a>
                    <?php else: ?>
                        <span class="join-item btn disabled bg-white text-black">«</span>
                    <?php endif; ?>

                    <!-- Botão de página atual -->
                    <div class="relative inline-block">
                        <button class="join-item btn bg-white text-black">Page <?php echo $paginaAtual; ?></button>
                    </div>

                    <!-- Botão de próxima página -->
                    <?php if ($paginaAtual < $totalPaginas): ?>
                        <a href="?pagina=<?php echo $paginaAtual + 1; ?>" class="join-item btn bg-white text-black">»</a>
                    <?php else: ?>
                        <span class="join-item btn disabled bg-white text-black">»</span>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </div>






    <?php require_once '../utils/footer.php' ?>

</body>

</html>