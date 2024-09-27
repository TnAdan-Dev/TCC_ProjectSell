<?php
session_start();
include '../backend/conexao.php';

$conn = novaConexao();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['idcliente'])) {
        header('Location: login.php');
    }
}

// Verifica se o ID do produto está na URL
if (isset($_GET['id'])) {
    $idProduto = $_GET['id'];

    // Prepara a consulta para pegar o produto do banco de dados
    $query = "SELECT * FROM tbl_produto WHERE id_produto = :idproduto";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':idproduto', $idProduto, PDO::PARAM_INT);
    $stmt->execute();

    // Busca o produto do banco de dados
    $produto = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica se o produto foi encontrado
    if ($produto) {
        // Armazena cada campo da tabela em uma variável
        $nomeProduto = $produto['pro_nome'];
        $precoProduto = $produto['pro_preco'];
        $corProduto = $produto['pro_id_cor'];
        $qtdDisponivelProduto = $produto['pro_qtd_disponivel'];
        $categoriaProduto = $produto['pro_id_categoria'];
    } else {
        echo "Produto não encontrado.";
    }
} else {
    echo "<script> alert(Nenhum ID de produto foi fornecido.) window.location.href='pesquisa.php';</script>";
}



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nomeProduto ?></title>
    <link rel="stylesheet" href="../css/output.css">
    <link rel="icon" href="../img/iconJGM.png">
</head>

<body class="bg-white">

    <?php require_once '../utils/navbar.php' ?>
    <div class="bg-white">
        <div class="pt-6">
            <nav aria-label="Breadcrumb">
                <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="mr-2 text-sm font-medium text-gray-900">Feminino</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="mr-2 text-sm font-medium text-gray-900">Roupas</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>

                    <li class="text-sm">
                        <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600"><?= $nomeProduto ?></a>
                    </li>
                </ol>
            </nav>


            <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
                <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Two each of gray, white, and black shirts laying flat." class="h-full w-full object-cover object-center">
                </div>
                <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-01.jpg" alt="Model wearing plain black basic tee." class="h-full w-full object-cover object-center">
                    </div>
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-02.jpg" alt="Model wearing plain gray basic tee." class="h-full w-full object-cover object-center">
                    </div>
                </div>
                <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-featured-product-shot.jpg" alt="Model wearing plain white basic tee." class="h-full w-full object-cover object-center">
                </div>
            </div>


            <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-myprimary sm:text-3xl"><?= $nomeProduto ?></h1>
                </div>


                <div class="mt-4 lg:row-span-3 lg:mt-0">
                    <h2 class="sr-only">Preço:</h2>
                    <p class="text-3xl tracking-tight text-gray-900"> R$<?= $precoProduto ?></p>


                    <div class="mt-6">
                        <h3 class="sr-only">Avaliação</h3>
                        <div class="flex items-center">
                            <div class="flex items-center">

                                <svg class="h-5 w-5 flex-shrink-0 text-myprimary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="h-5 w-5 flex-shrink-0 text-myprimary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="h-5 w-5 flex-shrink-0 text-myprimary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="h-5 w-5 flex-shrink-0 text-myprimary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="sr-only">4 de 5 estrelas</p>
                            <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 avaliações</a>
                        </div>
                    </div>

                    <form class="mt-10" method="post">
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Cores Disponiveis</h3>
                            <fieldset aria-label="Choose a color" class="mt-4">
                                <div class="flex items-center space-x-3">

                                    <label aria-label="White" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                                        <input type="radio" name="color-choice" value="White" class="sr-only">
                                        <span aria-hidden="true" class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-white"></span>
                                    </label>
                                    <label aria-label="Gray" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                                        <input type="radio" name="color-choice" value="Gray" class="sr-only">
                                        <span aria-hidden="true" class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-gray-200"></span>
                                    </label>
                                    <label aria-label="Black" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-900 focus:outline-none">
                                        <input type="radio" name="color-choice" value="Black" class="sr-only">
                                        <span aria-hidden="true" class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-gray-900"></span>
                                    </label>
                                </div>
                            </fieldset>
                        </div>

                        <div class="mt-10">
                            <div class="flex items-center justify-between">
                                <h3 class="text-sm font-medium text-myprimary">Tamanhos</h3>
                            </div>

                            <fieldset aria-label="Choose a size" class="mt-4">
                                <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                                    <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="XS" class="sr-only">
                                        <span>P</span>
                                        <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                    </label>
                                    <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="S" class="sr-only">
                                        <span>M</span>
                                        <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                    </label>
                                    <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="M" class="sr-only">
                                        <span>G</span>
                                        <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                    </label>
                                    <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="L" class="sr-only">
                                        <span>GG</span>
                                        <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                    </label>

                                </div>
                            </fieldset>
                        </div>

                        <button class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-myprimary px-8 py-3 text-base font-medium text-white hover:text- hover:bg-mysecondary focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all duration-300">Adicionar ao Carrinho</button>
                    </form>
                </div>

                <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                    <div>
                        <h3 class="sr-only">Descrição</h3>
                        <div class="space-y-6">
                            <p class="text-base text-gray-900">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae voluptatibus cupiditate nesciunt. Beatae omnis dolor, fugiat fuga reprehenderit pariatur. Ad, magni quos? Recusandae repellat eaque, modi cum neque laboriosam optio vitae maiores veniam perferendis architecto minus ab iusto officiis ipsam ipsa repellendus, magnam non perspiciatis aperiam? Est iste cum amet.</p>
                        </div>
                    </div>
                    <div class="mt-10">
                        <h2 class="text-sm font-medium text-gray-900">Detalhes</h2>
                        <div class="mt-4 space-y-6">
                            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores cupiditate officiis nam culpa qui, repellendus aliquid ratione placeat. Ea obcaecati eveniet iure ad minus reprehenderit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once '../utils/footer.php' ?>

</body>

</html>