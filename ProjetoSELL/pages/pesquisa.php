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


    <div class="flex p-5">
        <!-- Sidebar para Filtros e Pesquisa -->
        <div class="w-1/4 p-4 bg-white shadow-lg rounded">
            <!-- Barra de Pesquisa -->
            <div class="mb-4">
                <input type="text" class="form-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Buscar produtos...">
            </div>
            <h2 class="font-bold text-lg mb-4">Filtros</h2>
            <!-- Filtro de Tamanho com Checkboxes -->
            <div class="mb-4">
                <h3 class="font-semibold mb-2">Tamanho</h3>
                <div class="flex items-center space-x-2">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox text-blue-600" name="size" value="small">
                        <span class="ml-2">Pequeno</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox text-blue-600" name="size" value="medium">
                        <span class="ml-2">Médio</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox text-blue-600" name="size" value="large">
                        <span class="ml-2">Grande</span>
                    </label>
                </div>
            </div>
            <!-- Repetir estrutura para cor, marca e material -->
            <!-- Filtro de Cor -->
            <div class="mb-4">
                <h3 class="font-semibold mb-2">Cor</h3>
                <div class="flex items-center space-x-2">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox" name="color" value="red">
                        <span class="ml-2">Vermelho</span>
                    </label>
                    <!-- Adicionar mais cores conforme necessário -->
                </div>
            </div>
            <!-- Filtro de Marca -->
            <div class="mb-4">
                <h3 class="font-semibold mb-2">Marca</h3>
                <div class="flex items-center space-x-2">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox" name="brand" value="nike">
                        <span class="ml-2">Nike</span>
                    </label>
                    <!-- Adicionar mais marcas conforme necessário -->
                </div>
            </div>
            <!-- Filtro de Material -->
            <div class="mb-4">
                <h3 class="font-semibold mb-2">Material</h3>
                <div class="flex items-center space-x-2">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox" name="material" value="cotton">
                        <span class="ml-2">Algodão</span>
                    </label>
                    <!-- Adicionar mais materiais conforme necessário -->
                </div>
            </div>
        </div>


        <div class="w-3/4 pl-5">
            <div class="grid grid-cols-4 gap-4">
                <?php if (!empty($produtos)): ?>
                    <?php foreach ($produtos as $produto): ?>
                        <!-- Card de produto -->
                        <a href="produto.php?id=<?php echo $produto['id']; ?>" class="mt-5 text-white font-bold py-2 px-4 rounded transform transition-transform duration-300 hover:scale-105">Ver Produto>
                            <div class=" p-4 shadow rounded-lg ">
                                <img src="https://picsum.photos/300/200" alt="<?php echo $produto['nome']; ?>" class="rounded mb-3 w-full" />
                                <h3 class="text-lg font-bold my-5 text-myprimary"><?php echo $produto['nome']; ?></h3>
                                <p class="text-black my-5">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>

                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Nenhum produto disponível no momento.</p>
                <?php endif; ?>
            </div>
        </div>



    </div>
    <div class="mt-6">
        <nav class="flex justify-center">
            <div class="join">
                <!-- Botão de página anterior -->
                <?php if ($paginaAtual > 1): ?>
                    <a href="?pagina=<?php echo $paginaAtual - 1; ?>" class="join-item btn bg-white text-black">«</a>
                <?php else: ?>
                    <span class="join-item btn disabled bg-white text-black hover:text-white">«</span>
                <?php endif; ?>

                <!-- Botão com a página atual e dropdown para escolher uma página -->
                <div class="relative inline-block">
                    <button class="join-item btn bg-white text-black hover:text-white">Page <?php echo $paginaAtual; ?></button>
                    <div class="absolute left-0 mt-2 w-40 bg-white border rounded shadow hidden group-hover:block z-10">
                        <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                            <a href="?pagina=<?php echo $i; ?>" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                                Page <?php echo $i; ?>
                            </a>
                        <?php endfor; ?>
                    </div>
                </div>

                <!-- Botão de próxima página -->
                <?php if ($paginaAtual < $totalPaginas): ?>
                    <a href="?pagina=<?php echo $paginaAtual + 1; ?>" class="join-item btn bg-white text-black hover:text-white">»</a>
                <?php else: ?>
                    <span class="join-item btn disabled bg-white text-black">»</span>
                <?php endif; ?>
            </div>
        </nav>
    </div>






    <?php require_once '../utils/footer.php' ?>

</body>

</html>