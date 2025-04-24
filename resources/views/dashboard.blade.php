<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetGallery - Cãos e Gatos & Adoráveis</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <style>
        .pet-card {
            transition: transform 0.3s ease;
        }
        .pet-card:hover {
            transform: scale(1.03);
        }
        .hero {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                              url('https://images.unsplash.com/photo-1517849845537-4d257902454a');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white border-b border-gray-200 dark:bg-gray-900 fixed w-full z-10">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png" class="h-8" alt="PetGallery Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">PetGallery</span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button">
                    <span class="sr-only">Abrir menu de usuário</span>
                    <img class="w-8 h-8 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">John Doe</span>
                        <span class="block text-sm text-gray-500 truncate dark:text-gray-400">john@example.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Favorites</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#dogs" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Cachorros</a>
                    </li>
                    <li>
                        <a href="#cats" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Gatos</a>
                    </li>
                    <li>
                        <a href="#about" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sobre nós</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero text-white pt-32 pb-20">
        <div class="container mx-auto text-center px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Descubra Pets</h1>
            <p class="text-xl md:text-2xl mb-8">Veja nossa coleção de gatos e cachorros</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#dogs" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg">Ver cachorros</a>
                <a href="#cats" class="bg-white hover:bg-gray-100 text-blue-600 font-bold py-3 px-6 rounded-lg border border-white">Ver gatos</a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8 mt-8">
        <!-- Dogs Section -->
        <section id="dogs" class="mb-16">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Cachorros</h2>
                <a href="#" class="text-blue-600 hover:underline">Ver todos os cachorros</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Dog Card 1 -->
                <div class="pet-card bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1561037404-61cd46aa615b" alt="Golden Retriever">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">Golden Retriever</h3>
                        <p class="text-gray-700">Amigável e inteligente</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-sm text-gray-600">Idade: 2 anos</span>
                            <button class="text-blue-600 hover:text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Dog Card 2 -->
                <div class="pet-card bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1586671267731-da2cf3ceeb80" alt="French Bulldog">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">Bulldog Francês</h3>
                        <p class="text-gray-700">Brincalhão e inteligente.</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-sm text-gray-600">Idade: 1.5 anos</span>
                            <button class="text-blue-600 hover:text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Dog Card 3 -->
                <div class="pet-card bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1530281700549-e82e7bf110d6" alt="Siberian Husky">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">Husky Siberiano</h3>
                        <p class="text-gray-700">Leal e calmo.</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-sm text-gray-600">Idade: 3 anos</span>
                            <button class="text-blue-600 hover:text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Dog Card 4 -->
                <div class="pet-card bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1517849845537-4d257902454a" alt="Beagle">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">Beagle</h3>
                        <p class="text-gray-700">Gentil e curioso.</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-sm text-gray-600">Idade: 2.5 anos</span>
                            <button class="text-blue-600 hover:text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cats Section -->
        <section id="cats" class="mb-16">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Gatos</h2>
                <a href="#" class="text-blue-600 hover:underline">Ver todos os gatos</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Cat Card 1 -->
                <div class="pet-card bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba" alt="British Shorthair">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">British Shorthair</h3>
                        <p class="text-gray-700">Calmo e afeiçoado.</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-sm text-gray-600">Idade: 1 ano</span>
                            <button class="text-blue-600 hover:text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Cat Card 2 -->
                <div class="pet-card bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1533738363-b7f9aef128ce" alt="Siamese Cat">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">Siamese Cat</h3>
                        <p class="text-gray-700">Social e inteligente.</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-sm text-gray-600">Idade: 8 meses</span>
                            <button class="text-blue-600 hover:text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Cat Card 3 -->
                <div class="pet-card bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1573865526739-10659fec78a5" alt="Maine Coon">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">Maine Coon</h3>
                        <p class="text-gray-700">Amigável e brincalhão.</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-sm text-gray-600">Idade: 2 anos</span>
                            <button class="text-blue-600 hover:text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Cat Card 4 -->
                <div class="pet-card bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1592194996308-7b43878e84a6" alt="Persian Cat">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">Persian Cat</h3>
                        <p class="text-gray-700">Quieto e calmo.</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-sm text-gray-600">Idade: 3 anos</span>
                            <button class="text-blue-600 hover:text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Login Section (Hidden by default) -->
        <section id="login-section" class="hidden bg-gray-50 dark:bg-gray-900 py-12">
            <div class="flex flex-col items-center justify-center px-6 mx-auto lg:py-0">
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Sign in to your account
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="#">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-pr