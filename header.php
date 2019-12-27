<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/228c18b014.js" crossorigin="anonymous"></script>
    <title>Seempy Demo</title>
</head>
<body class="bg-gray-100">
   
    <nav class="shadow-md">
        <div class="container mx-auto px-6 py-2 flex justify-between items-center">
            <a class="text-blue-900 text-2xl lg:text-4xl" href="#">
                <img src="img/logo.png" alt="">
            </a>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:block">
                <ul class="inline-flex">
                    <li><a class="px-4 font-bold" href="/">Inicio</a></li>
                    <li><a class="px-4 hover:text-gray-800" href="#">Nosotros</a></li>
                    <li><a class="px-4 hover:text-gray-800" href="#">Tienda</a></li>
                    <li><a class="px-4 hover:text-gray-800" href="#">Contacto</a></li>
                    <li><a class="px-4 hover:text-gray-800" href="#"><i class="fas fa-shopping-basket"></i></a></li>
                    <li><a class="px-4 hover:text-gray-800" href="#"><i class="fas fa-user-circle"></i></a></li>
                    <li><a class="px-4 hover:text-gray-800" href="#"><i class="fas fa-search"></i></a></li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Image -->
    <div class="md:py-40" style="background: url(img/main-slider-img-1.jpg)no-repeat center; background-size: 100%;">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold mb-2 text-black">
                Homelife
            </h2>
            <h3 class="text-2xl mb-8 text-white">
                Lorem ipsum dolor sit amet consectetut.
            </h3>

            <a href="#" class="bg-transparent text-gray-900 font-semibold py-2 px-4 mt-3 border border-gray-900">
                Comprar
            </a>
        </div>
    </div>
