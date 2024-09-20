<?php
session_start();

$base_url = dirname($_SERVER["PHP_SELF"]);
$base_url = rtrim($base_url, '/pages/aliancas');


$clienteLogado = isset($_SESSION['idcliente']);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina Inicial</title>
  <link rel="stylesheet" href="css/output.css">
  <link rel="icon" href="img/iconJGM.png">
</head>

<body class="bg-white darl:bg-dark">
  <?php
  require_once 'utils/navbar.php';
  ?>

  <div class="carousel w-full bg-white">
    <div id="slide1" class="carousel-item relative w-full">
      <img
        src="img/Teste dahora.png"
        class="w-full" />
      <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
        <a href="#slide4" class="btn btn-circle btn-outline bg-myprimary">❮</a>
        <a href="#slide2" class="btn btn-circle btn-outline bg-myprimary">❯</a>
      </div>
    </div>
    <div id="slide2" class="carousel-item relative w-full">
      <img
        src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp"
        class="w-full" />
      <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
        <a href="#slide1" class="btn btn-circle">❮</a>
        <a href="#slide3" class="btn btn-circle">❯</a>
      </div>
    </div>
    <div id="slide3" class="carousel-item relative w-full">
      <img
        src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp"
        class="w-full" />
      <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
        <a href="#slide2" class="btn btn-circle">❮</a>
        <a href="#slide4" class="btn btn-circle">❯</a>
      </div>
    </div>
    <div id="slide4" class="carousel-item relative w-full">
      <img
        src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp"
        class="w-full" />
      <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
        <a href="#slide3" class="btn btn-circle">❮</a>
        <a href="#slide1" class="btn btn-circle">❯</a>
      </div>
    </div>
  </div>

  <div class="bg-white border-b-2">
    <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
      <div>
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Joyce Galvão Modas</h2>
        <p class="mt-4 text-gray-500">Estilo e sofisticação entregues na sua porta em Aparecida e região. Descubra as últimas tendências e transforme seu guarda-roupa com nossa seleção!</p>

        <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
          <div class="border-t border-gray-200 pt-4">
            <dt class="font-medium text-gray-900">Lorem</dt>
            <dd class="mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, atque!</dd>
          </div>
          <div class="border-t border-gray-200 pt-4">
            <dt class="font-medium text-gray-900">Lorem</dt>
            <dd class="mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, atque!</dd>
          </div>
          <div class="border-t border-gray-200 pt-4">
            <dt class="font-medium text-gray-900">Lorem</dt>
            <dd class="mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, atque!</dd>
          </div>
          <div class="border-t border-gray-200 pt-4">
            <dt class="font-medium text-gray-900">Lorem</dt>
            <dd class="mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, atque!</dd>
          </div>
          <div class="border-t border-gray-200 pt-4">
            <dt class="font-medium text-gray-900">Lorem</dt>
            <dd class="mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, atque!</dd>
          </div>
          <div class="border-t border-gray-200 pt-4">
            <dt class="font-medium text-gray-900">Lorem</dt>
            <dd class="mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, atque!</dd>
          </div>
        </dl>
      </div>
      <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
        <img src="https://picsum.photos/200/300?random=1" class="rounded-lg bg-gray-100">
        <img src="https://picsum.photos/300/300?random=2" class="rounded-lg bg-gray-100">
        <img src="https://picsum.photos/300/300?random=3" class="rounded-lg bg-gray-100">
        <img src="https://picsum.photos/200/300?random=4" class="rounded-lg bg-gray-100">
      </div>
    </div>
  </div>

  <div class="container mx-auto px-4 py-6">

    <div class="overflow-x-auto p-10">
      <div class="flex space-x-16 min-w-max">
        <div class="card w-64 bg-white shadow-lg rounded-lg transform transition-transform duration-300 hover:scale-105 border">
          <figure>
            <img src="https://via.placeholder.com/256" alt="Imagem do Card" class="w-full h-32 object-cover rounded-t-lg">
          </figure>
          <div class="card-body text-black">
            <h2 class="card-title text-black">Item</h2>
            <p>Descrição/preço do item</p>
            <div class="card-actions justify-end">
              <button class="btn bg-myprimary hover:bg-myprimary hover:opacity-90 hover:text-black border-none w-full rounded-3xl p-1 m-1">Ação</button>
            </div>
          </div>
        </div>
        <div class="card w-64 bg-white shadow-lg rounded-lg transform transition-transform duration-300 hover:scale-105">
          <figure>
            <img src="https://via.placeholder.com/256" alt="Imagem do Card" class="w-full h-32 object-cover rounded-t-lg">
          </figure>
          <div class="card-body text-black">
            <h2 class="card-title text-black">Item</h2>
            <p>Descrição/preço do item</p>
            <div class="card-actions justify-end">
              <button class="btn bg-myprimary hover:bg-myprimary hover:opacity-90 hover:text-black border-none w-full rounded-3xl p-1 m-1">Ação</button>
            </div>
          </div>
        </div>
        <div class="card w-64 bg-white shadow-lg rounded-lg transform transition-transform duration-300 hover:scale-105">
          <figure>
            <img src="https://via.placeholder.com/256" alt="Imagem do Card" class="w-full h-32 object-cover rounded-t-lg">
          </figure>
          <div class="card-body text-black">
            <h2 class="card-title text-black">Item</h2>
            <p>Descrição/preço do item</p>
            <div class="card-actions justify-end">
              <button class="btn bg-myprimary hover:bg-myprimary hover:opacity-90 hover:text-black border-none w-full rounded-3xl p-1 m-1">Ação</button>
            </div>
          </div>
        </div>
        <div class="card w-64 bg-white shadow-lg rounded-lg transform transition-transform duration-300 hover:scale-105">
          <figure>
            <img src="https://via.placeholder.com/256" alt="Imagem do Card" class="w-full h-32 object-cover rounded-t-lg">
          </figure>
          <div class="card-body text-black">
            <h2 class="card-title text-black">Item</h2>
            <p>Descrição/preço do item</p>
            <div class="card-actions justify-end">
              <button class="btn bg-myprimary hover:bg-myprimary hover:opacity-90 hover:text-black border-none w-full rounded-3xl p-1 m-1">Ação</button>
            </div>
          </div>
        </div>
        <div class="card w-64 bg-white shadow-lg rounded-lg transform transition-transform duration-300 hover:scale-105">
          <figure>
            <img src="https://via.placeholder.com/256" alt="Imagem do Card" class="w-full h-32 object-cover rounded-t-lg">
          </figure>
          <div class="card-body text-black">
            <h2 class="card-title text-black">Item</h2>
            <p>Descrição/preço do item</p>
            <div class="card-actions justify-end">
              <button class="btn bg-myprimary hover:bg-myprimary hover:opacity-90 hover:text-black border-none w-full rounded-3xl p-1 m-1">Ação</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php

  require_once 'utils/footer.php';
  ?>

  
</body>

</html>