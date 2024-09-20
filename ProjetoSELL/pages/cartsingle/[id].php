<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho - </title>
    <link rel="stylesheet" href="../../css/output.css">
    <link rel="icon" href="../../img/iconJGM.png">

</head>

<body>

<?php require_once '../../utils/navbar.php'; ?>

    <div class="flex justify-center my-10">
        <div class="flex flex-col w-3/5">
            <!-- Cart title -->
            <h1 class="text-2xl font-bold mb-8">Shopping Cart</h1>

            <!-- Product List -->
            <div class="flex flex-col gap-6">
                <!-- Item 1 -->
                <div class="flex justify-between items-center p-6 bg-white shadow-md">
                    <div class="flex items-center gap-4">
                        <img src="https://picsum.photos/200/300?random=3" alt="Sienna T-Shirt" class="h-24 w-24 object-cover">
                        <div>
                            <p class="font-bold">Basic Tee</p>
                            <p>Sienna | Large</p>
                            <p>$32.00</p>
                            <p class="text-green-500">In stock</p>
                        </div>
                    </div>
                    <div>
                        <button class="text-gray-500 hover:text-gray-700">X</button>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex justify-between items-center p-6 bg-white shadow-md">
                    <div class="flex items-center gap-4">
                        <img src="https://picsum.photos/200/300?random=2" alt="Black T-Shirt" class="h-24 w-24 object-cover">
                        <div>
                            <p class="font-bold">Basic Tee</p>
                            <p>Black | Large</p>
                            <p>$32.00</p>
                            <p>Ships in 3–4 weeks</p>
                        </div>
                    </div>
                    <div>
                        <button class="text-gray-500 hover:text-gray-700">X</button>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex justify-between items-center p-6 bg-white shadow-md">
                    <div class="flex items-center gap-4">
                        <img src="https://picsum.photos/200/300?random=1" alt="White Tumbler" class="h-24 w-24 object-cover">
                        <div>
                            <p class="font-bold">Nomad Tumbler</p>
                            <p>White</p>
                            <p>$35.00</p>
                            <p class="text-green-500">In stock</p>
                        </div>
                    </div>
                    <div>
                        <button class="text-gray-500 hover:text-gray-700">X</button>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="mt-10 p-6 bg-white shadow-md">
                <h2 class="text-xl font-bold mb-6">Order Summary</h2>
                <div class="flex justify-between mb-4">
                    <p>Subtotal</p>
                    <p>$99.00</p>
                </div>
                <div class="flex justify-between mb-4">
                    <p>Shipping estimate</p>
                    <p>$5.00</p>
                </div>
                <div class="flex justify-between mb-4">
                    <p>Tax estimate</p>
                    <p>$8.32</p>
                </div>
                <div class="flex justify-between font-bold mb-6">
                    <p>Order total</p>
                    <p>$112.32</p>
                </div>
                <button class="w-full bg-blue-600 text-white p-4 rounded hover:bg-blue-700">Checkout</button>
            </div>
        </div>
    </div>




</body>

</html>