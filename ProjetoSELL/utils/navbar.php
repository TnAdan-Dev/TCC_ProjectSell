<?php

$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$base_url .= "://" . $_SERVER['HTTP_HOST'];
$base_url .= "/TCC_ProjectSell/ProjetoSELL/";  // Ajuste para incluir o caminho até a pasta do projeto




$clienteLogado = isset($_SESSION['idcliente']);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../img/iconJGM.png">
</head>

<body class="">

  <div class="bg-white font-ubuntu">
    <!-- parte responsiva (mudar depois)-->
    <div class="relative z-40 hidden" role="dialog" aria-modal="true" id="item3">

      <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

      <div class="fixed inset-0 z-40 flex">
        <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
          <div class="flex px-4 pb-2 pt-5">
            <button type="button" class="relative -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400" id="item3-btn2">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Close menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>

          <div class="mt-2">
            <div class="border-b border-gray-200">
              <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                <button id="tabs-1-tab-1" class="flex-1 whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-base font-medium text-gray-900 " aria-controls="tabs-1-panel-1" role="tab" type="button">Feminina</button>
                <button id="tabs-1-tab-2" class="flex-1 whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-base font-medium text-gray-900" aria-controls="tabs-1-panel-2" role="tab" type="button">Infantil</button>
              </div>
            </div>

            <div id="tabs-1-panel-1" class="space-y-10 px-4 pb-8 pt-10" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
              <div class="grid grid-cols-2 gap-x-4">
                <div class="group relative text-sm">
                  <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                  </div>
                  <a href="#" class="mt-6 block font-medium text-gray-900">
                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                    New Arrivals
                  </a>
                  <p aria-hidden="true" class="mt-1">Shop now</p>
                </div>
                <div class="group relative text-sm">
                  <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center">
                  </div>
                  <a href="#" class="mt-6 block font-medium text-gray-900">
                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                    Basic Tees
                  </a>
                  <p aria-hidden="true" class="mt-1">Shop now</p>
                </div>
              </div>
              <div>
                <p id="women-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                <ul role="list" aria-labelledby="women-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Dresses</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Denim</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                  </li>
                </ul>
              </div>
              <div>
                <p id="women-accessories-heading-mobile" class="font-medium text-gray-900">Accessories</p>
                <ul role="list" aria-labelledby="women-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                  </li>
                </ul>
              </div>
              <div>
                <p id="women-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                <ul role="list" aria-labelledby="women-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Significant Other</a>
                  </li>
                </ul>
              </div>
            </div>
            <div id="tabs-1-panel-2" class="space-y-10 px-4 pb-8 pt-10" aria-labelledby="tabs-1-tab-2" role="tabpanel" tabindex="0">
              <div class="grid grid-cols-2 gap-x-4">
                <div class="group relative text-sm">
                  <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" alt="Drawstring top with elastic loop closure and textured interior padding." class="object-cover object-center">
                  </div>
                  <a href="#" class="mt-6 block font-medium text-gray-900">
                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                    New Arrivals
                  </a>
                  <p aria-hidden="true" class="mt-1">Shop now</p>
                </div>
                <div class="group relative text-sm">
                  <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt." class="object-cover object-center">
                  </div>
                  <a href="#" class="mt-6 block font-medium text-gray-900">
                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                    Artwork Tees
                  </a>
                  <p aria-hidden="true" class="mt-1">Shop now</p>
                </div>
              </div>
              <div>
                <p id="men-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                <ul role="list" aria-labelledby="men-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                  </li>
                </ul>
              </div>
              <div>
                <p id="men-accessories-heading-mobile" class="font-medium text-gray-900">Accessories</p>
                <ul role="list" aria-labelledby="men-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                  </li>
                </ul>
              </div>
              <div>
                <p id="men-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                <ul role="list" aria-labelledby="men-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                  </li>
                  <li class="flow-root">
                    <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Alianças</a>
            </div>
          </div>

          <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
            </div>
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create account</a>
            </div>
          </div>


        </div>
      </div>
    </div>

    <!-- parte normal(pc) -->
    <header class="relative bg-white z-10 border-b-2">

      <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="border-b border-gray-200">
          <div class="flex h-16 items-center">
            <button type="button" class="relative rounded-md bg-white p-2 text-gray-400 lg:hidden" id="item3-btn">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>

            <div class="ml-4 flex lg:ml-0">
              <a href="<?php echo $base_url; ?>/index.php">
                <span class="sr-only">Joyce Galvão Modas</span>
                <img class="h-8 w-auto hover:scale-105 hover:drop-shadow-2xl transition-all duration-300" src="<?php echo $base_url; ?>/img/iconJGM.png" alt="">
              </a>
            </div>

            <div class="hidden lg:ml-8 lg:block lg:self-stretch">
              <div class="flex h-full space-x-8">
                <div class="flex">
                  <div class="relative flex">
                    <button type="button" class="relative z-10 -mb-px flex items-center border-b-2 border-transparent pt-px text-sm font-medium text-gray-700 ease-out hover:scale-105 transition-all duration-300 hover:text-myprimary" aria-expanded="false" id="item1-btn">Feminino</button>
                  </div>
                  <div class="absolute inset-x-0 top-full text-sm text-gray-500 hidden" id="item1">
                    <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                    <div class="relative bg-white">
                      <div class="mx-auto max-w-7xl px-8">
                        <div class="grid grid-cols-2 gap-x-8 gap-y-10 py-16">
                          <div class="col-start-2 grid grid-cols-2 gap-x-8">
                            <div class="group relative text-base sm:text-sm">
                              <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                              </div>
                              <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                Chegadas
                              </a>
                              <p aria-hidden="true" class="mt-1">Comprar Agora</p>
                            </div>
                            <div class="group relative text-base sm:text-sm">
                              <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center">
                              </div>
                              <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                Camisetas Basicas
                              </a>
                              <p aria-hidden="true" class="mt-1">Comprar Agora</p>
                            </div>
                          </div>
                          <div class="row-start-1 grid grid-cols-3 gap-x-8 gap-y-10 text-sm">
                            <div>
                              <p id="Clothing-heading" class="font-medium text-gray-900">Roupas</p>
                              <ul role="list" aria-labelledby="Clothing-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Tops</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Vestidos</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Calças</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Jeans</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Suéteres</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Camisetas</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Jaquetas</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Academia</a>
                                </li>
                              </ul>
                            </div>
                            <div>
                              <p id="Accessories-heading" class="font-medium text-gray-900">Acessorios</p>
                              <ul role="list" aria-labelledby="Accessories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Relogios</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Carteiras</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Bolsas</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Oculos de Sol</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Chapéus</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Cintos</a>
                                </li>
                              </ul>
                            </div>
                            <div>
                              <p id="Brands-heading" class="font-medium text-gray-900">Marcas</p>
                              <ul role="list" aria-labelledby="Brands-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Marca X</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Marca Y</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Marca Z</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Marca A</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Marca B</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex">
                  <div class="relative flex">
                    <button type="button" class="relative z-10 -mb-px flex items-center border-b-2 border-transparent pt-px text-sm font-medium text-gray-700 ease-out hover:scale-105 transition-all duration-300 hover:text-myprimary" aria-expanded="false" id="item2-btn">Infantil</button>
                  </div>

                  <div class="absolute inset-x-0 top-full text-sm text-gray-500 hidden" id="item2">
                    <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                    <div class="relative bg-white">
                      <div class="mx-auto max-w-7xl px-8">
                        <div class="grid grid-cols-2 gap-x-8 gap-y-10 py-16">
                          <div class="col-start-2 grid grid-cols-2 gap-x-8">
                            <div class="group relative text-base sm:text-sm">
                              <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" alt="Drawstring top with elastic loop closure and textured interior padding." class="object-cover object-center">
                              </div>
                              <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                Novas Chegadas
                              </a>
                              <p aria-hidden="true" class="mt-1">Comprar Agora</p>
                            </div>
                            <div class="group relative text-base sm:text-sm">
                              <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt." class="object-cover object-center">
                              </div>
                              <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                Camisetas Infantis
                              </a>
                              <p aria-hidden="true" class="mt-1">Comprar Agora</p>
                            </div>
                          </div>
                          <div class="row-start-1 grid grid-cols-3 gap-x-8 gap-y-10 text-sm">
                            <div>
                              <p id="Clothing-heading" class="font-medium text-gray-900">Roupas</p>
                              <ul role="list" aria-labelledby="Clothing-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Camisetas</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Calças</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Moletons</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Jaquetas</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Roupas de Banho</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">pijamas</a>
                                </li>
                              </ul>
                            </div>
                            <div>
                              <p id="Accessories-heading" class="font-medium text-gray-900">Accessories</p>
                              <ul role="list" aria-labelledby="Accessories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Chapéus</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Suspensorios</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Cintos</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Oculos Escuros</a>
                                </li>
                              </ul>
                            </div>
                            <div>
                              <p id="Brands-heading" class="font-medium text-gray-900">Marcas</p>
                              <ul role="list" aria-labelledby="Brands-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Marca X</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Marca Y</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Marca Z</a>
                                </li>
                                <li class="flex">
                                  <a href="#" class="hover:text-gray-800">Marca A</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="#" class="relative z-10 -mb-px flex items-center border-b-2 border-transparent pt-px text-sm font-medium text-gray-700 ease-out hover:scale-105 transition-all duration-300 hover:text-myprimary">Alianças</a>
              </div>
            </div>

            <div class="ml-auto flex items-center">
              <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                <?php if ($clienteLogado): ?>
                  <div class="relative z-10 -mb-px flex items-center border-b-2 border-transparent pt-px text-sm font-medium ease-out  hover:text-black">
                    <div class="dropdown">
                      <div tabindex="0" role="button" class="hover:scale-105 transition-all duration-300"><img src="<?php echo $base_url; ?>/img/do-utilizador.png" alt=""></div>
                      <ul tabindex="0" class="dropdown-content menu bg-white rounded-box z-[1] w-52 p-2 shadow">
                        <li><a >Perfil</a></li>
                        <hr>
                        <li><a href="<?php echo $base_url; ?>/backend/sessionclear.php" class=" text-red-600">Sair</a></li>
                      </ul>
                    </div>

                  </div>
                <?php else: ?>
                  <a href="<?php echo $base_url; ?>/pages/login.php" class="text-black hover:text-myprimary hover:scale-105 transition-all duration-300">Login</a>
                  <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                  <a href="<?php echo $base_url; ?>/pages/cadastro.php" class="text-black hover:text-myprimary hover:scale-105 transition-all duration-300">Cadastro</a>
                <?php endif; ?>


              </div>



              <!-- Search -->
              <div class="flex lg:ml-6">
                <a href="<?php echo $base_url; ?>/pages/pesquisa.php" class="relative z-10 -mb-px flex items-center border-b-2 border-transparent pt-px text-sm font-medium text-gray-700 ease-out hover:scale-105 transition-all duration-300 hover:text-myprimary">
                  <span class="sr-only">Search</span>
                  <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                  </svg>
                </a>
              </div>

              <!-- Cart -->
              <div class="ml-4 flow-root lg:ml-6">
                <a href="<?php echo $base_url; ?>/pages/carrinho.php" class="relative z-10 -mb-px flex items-center border-b-2 border-transparent pt-px text-sm font-medium text-gray-700 ease-out hover:scale-105 transition-all duration-300 hover:text-myprimary">
                  <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                  </svg>
                  <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                  <span class="sr-only">items in cart, view bag</span>
                </a>
              </div>
              <div class="ml-4 flow-root lg:ml-6 mt-2">
                <label class="swap swap-rotate">
                  <!-- não tirar o hidden -->
                  <input type="checkbox" class="theme-controller hidden" value="dark" />
                  <!-- sol -->
                  <svg
                    class="swap-off h-7 w-7 fill-current text-myprimary"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                      d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                  </svg>
                  <!-- lua -->
                  <svg
                    class="swap-on h-7 w-7 fill-current text-mysecondary"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                      d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                  </svg>
                </label>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
  </div>


  <script src="<?= $base_url ?>/js/inicio.js"></script>
</body>

</html>