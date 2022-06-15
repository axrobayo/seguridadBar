<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Admin Starter Template : Tailwind Toolbox</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"
        integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

    <header>
        <!--Nav-->
        <nav aria-label="menu nav" class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

            <div class="flex flex-wrap items-center">
                <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                    <a href="#" aria-label="Home">
                        <span class="text-xl pl-2"><i class="em em-grinning"></i></span>
                    </a>
                </div>

                <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
                    <span class="relative w-full">
                        <input aria-label="search" type="search" id="search" placeholder="Search"
                            class="w-full bg-gray-900 text-white transition border border-transparent focus:outline-none focus:border-gray-400 rounded py-3 px-2 pl-10 appearance-none leading-normal">
                        <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                            <svg class="fill-current pointer-events-none text-white w-4 h-4"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                </path>
                            </svg>
                        </div>
                    </span>
                </div>

                <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
                    <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                        <li class="flex-1 md:flex-none md:mr-3">
                            <a class="inline-block py-2 px-4 text-white no-underline" href="#">Active</a>
                        </li>
                        <li class="flex-1 md:flex-none md:mr-3">
                            <a class="inline-block text-gray-400 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                                href="#">link</a>
                        </li>
                        <li class="flex-1 md:flex-none md:mr-3">
                            <div class="relative inline-block">
                                <button onclick="toggleDD('myDropdown')" class="drop-button text-white py-2 px-2"> <span
                                        class="pr-2"><i class="em em-robot_face"></i></span> Hi, User <svg
                                        class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg></button>
                                <div id="myDropdown"
                                    class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                    <input type="text" class="drop-search p-2 text-gray-600" placeholder="Search.."
                                        id="myInput" onkeyup="filterDD('myDropdown','myInput')">
                                    <a href="#"
                                        class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i
                                            class="fa fa-user fa-fw"></i> Profile</a>
                                    <a href="#"
                                        class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i
                                            class="fa fa-cog fa-fw"></i> Settings</a>
                                    <div class="border border-gray-800"></div>
                                    <a href="#"
                                        class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i
                                            class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </header>


    <main>

        <div class="flex flex-col md:flex-row">
            <section>
                <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

                    <div class="bg-gray-800 pt-3">
                        <div
                            class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                            <h1 class="font-bold pl-2">Analytics</h1>
                        </div>
                    </div>

                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <?php require '../ConexionSQL/barConsulta.php'; ?>
                            <!--Modal -->
                            <div x-data="{ modelOpen: false }">
                                <button @click="modelOpen =!modelOpen"
                                    class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="rounded-full p-5 bg-green-600"><i
                                                    class="fa fa-home fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md:text-center">
                                            <p class="font-bold text-3xl">BARES <span class="text-green-500"><i
                                                        class="fas fa-caret-up"></i></span></p>
                                        </div>
                                    </div>

                                </button>
                                <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div
                                        class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                        <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                            class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40"
                                            aria-hidden="true"></div>

                                        <div x-cloak x-show="modelOpen"
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                            <div class="flex items-center justify-between space-x-4">
                                                <h1 class="text-xl font-medium text-gray-800 ">Lista de Bares</h1>

                                                <button @click="modelOpen = false"
                                                    class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <p class="mt-2 text-sm text-gray-500 ">
                                                Bares con su nombre respectivo y campus
                                            </p>

                                            <form class="mt-5">
                                                <table
                                                    class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                                                    <thead class="bg-gray-900">
                                                        <tr class="text-white text-left">
                                                            <th class="font-semibold text-sm uppercase px-6 py-4"> Id
                                                            </th>
                                                            <th class="font-semibold text-sm uppercase px-6 py-4">
                                                                CAMPUS</th>
                                                            <th
                                                                class="font-semibold text-sm uppercase px-6 py-4 text-center">
                                                                Nombre del bar </th>
                                                            <th
                                                                class="font-semibold text-sm uppercase px-6 py-4 text-center">
                                                                Estado </th>
                                                            <th class="font-semibold text-sm uppercase px-6 py-4"> </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-gray-200">
                                                        <?php 
                                                        foreach($query as $row){?>
                                                        <tr>
                                                            <td class="px-6 py-4">
                                                                <div class="flex items-center space-x-3">
                                                                    <div class="inline-flex w-10 h-10"> <img
                                                                            class='w-10 h-10 object-cover rounded-full'
                                                                            alt='User avatar'
                                                                            src='https://i.imgur.com/siKnZP2.jpg' />
                                                                    </div>
                                                                    <div>

                                                                        <p class=""> <?php echo $row['bar_id'] ?> </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                <p> <?php echo $row['cam_nombre'] ?></p>
                                                            </td>
                                                            <td class="px-6 py-4 text-center"> <span
                                                                    class="text-white text-sm w-1/3 pb-1 bg-green-600 font-semibold px-2 rounded-full">
                                                                    <?php echo $row['bar_nombre'] ?> </span> </td>
                                                            <td class="px-6 py-4 text-center">
                                                                <?php echo $row['bar_abierto'] ?></td>
                                                        </tr>
                                                        <?php }?>
                                                    </tbody>
                                                </table>
                                                <div class="flex justify-end mt-6">
                                                    <button type="button"
                                                        class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                        Invite Member
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <!-- MODAL 2-->
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <?php require '../ConexionSQL/snacksConsulta.php';?>
                            <!--Modal -->
                            <div x-data="{ modelOpen: false }">
                                <button @click="modelOpen =!modelOpen"
                                    class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="rounded-full p-5 bg-pink-600"><i
                                                    class="fas fa-users fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md:text-center">
                                            <p class="font-bold text-3xl">Snacks <span class="text-pink-500"><i
                                                        class="fas fa-caret-up"></i></span></p>
                                        </div>
                                    </div>

                                </button>
                                <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div
                                        class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                        <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                            class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40"
                                            aria-hidden="true"></div>

                                        <div x-cloak x-show="modelOpen"
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                            <div class="flex items-center justify-between space-x-4">
                                                <h1 class="text-xl font-medium text-gray-800 ">Lista de Snacks</h1>

                                                <button @click="modelOpen = false"
                                                    class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <p class="mt-2 text-sm text-gray-500 ">
                                                Snacks con su nombre respectivo y el Bar que lo tienen
                                            </p>

                                            <form class="mt-4">
                                                <table
                                                    class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                                                    <thead class="bg-gray-900">
                                                        <tr class="text-white text-left">
                                                            <th class="font-semibold text-sm uppercase px-6 py-4"> Id
                                                            </th>
                                                            <th class="font-semibold text-sm uppercase px-6 py-4">
                                                                BAR</th>
                                                            <th
                                                                class="font-semibold text-sm uppercase px-6 py-4 ">
                                                                Nombre  </th>
                                                            <th
                                                                class="font-semibold text-sm uppercase px-6 py-4 ">
                                                                Precio </th>
                                                            <th class="font-semibold text-sm uppercase px-6 py-4"> </th>
                                                            <th
                                                                class="font-semibold text-sm uppercase px-6 py-4 text-center">
                                                                Estado </th>
                                                            <th class="font-semibold text-sm uppercase px-6 py-4"> </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-gray-200">
                                                        <?php 
                                                        foreach($query as $row){?>
                                                        <tr>
                                                            <td class="px-6 py-4">
                                                                <div class="flex items-center space-x-3">
                                                                    <div class="inline-flex w-10 h-10"> <img
                                                                            class='w-10 h-10 object-cover rounded-full'
                                                                            alt='User avatar'
                                                                            src='https://i.imgur.com/siKnZP2.jpg' />
                                                                    </div>
                                                                    <div>

                                                                        <p class=""> <?php echo $row['sna_id'] ?> </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                <p> <?php echo $row['bar_nombre'] ?></p>
                                                            </td>
                                                            <td class="px-6 py-4 text-center"> <span
                                                                    class="text-white text-sm w-1/3 pb-1 bg-green-600 font-semibold px-2 rounded-full">
                                                                    <?php echo $row['sna_nombre'] ?> </span> </td>
                                                            <td class="px-6 py-4 text-center">
                                                                <?php echo $row['sna_precio'] ?></td>
                                                            <td class="px-6 py-4 text-center">
                                                            </td>
                                                            <td class="px-6 py-4 text-center">
                                                                <?php echo $row['sna_disponible'] ?>
                                                            </td>
                                                        </tr>
                                                        <?php }?>
                                                    </tbody>
                                                </table>
                                                <div class="flex justify-end mt-6">
                                                    <button type="button"
                                                        class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                        Invite Member
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <!-- FIN DE MODAL 3-->
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <?php require '../ConexionSQL/menuConsulta.php';?>
                            <!--Modal open-->
                            <div x-data="{ modelOpen: false }">
                                <button @click="modelOpen =!modelOpen"
                                    class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="rounded-full p-5 bg-yellow-600"><i
                                                class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md:text-center">
                                            <p class="font-bold text-3xl">Menú <span class="text-yellow-600"><i
                                                    class="fas fa-caret-up"></i></span></p>
                                        </div>
                                    </div>
                            

                                </button>
                                <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div
                                        class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                        <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                            class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40"
                                            aria-hidden="true"></div>

                                        <div x-cloak x-show="modelOpen"
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                            <div class="flex items-center justify-between space-x-4">
                                                <h1 class="text-xl font-medium text-gray-800 ">Menú del dia</h1>

                                                <button @click="modelOpen = false"
                                                    class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <p class="mt-2 text-sm text-gray-500 ">
                                                Comida con su descripcion y el precio
                                            </p>

                                            <form class="mt-4">
                                                <table
                                                    class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                                                    <thead class="bg-gray-900">
                                                        <tr class="text-white text-left">
                                                            <th class="font-semibold text-sm uppercase px-4 py-3"> Id
                                                            </th>
                                                            <th class="font-semibold text-sm uppercase px-5 py-4">
                                                                BAR</th>
                                                            <th
                                                                class="font-semibold text-sm uppercase px-5 py-4 ">
                                                                Nombre  </th>
                                                            <th
                                                                class="font-semibold text-sm uppercase px-5 py-4 ">
                                                                Precio </th>
                                                            <th
                                                                class="font-semibold text-sm uppercase px-5 py-4 text-center">
                                                                Estado </th>
                                                            <th
                                                                class="font-semibold text-sm uppercase px-5 py-4 text-center">
                                                                Descripción </th>
                                                            <th class="font-semibold text-sm uppercase px-1 py-4"> </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-gray-200">
                                                        <?php 
                                                        foreach($query as $row){?>
                                                        <tr>
                                                            <td class="px-6 py-4">
                                                                <div class="flex items-center space-x-3">
                                                                    <div class="inline-flex w-10 h-10"> <img
                                                                            class='w-10 h-10 object-cover rounded-full'
                                                                            alt='User avatar'
                                                                            src='https://i.imgur.com/siKnZP2.jpg' />
                                                                    </div>
                                                                    <div>

                                                                        <p class=""> <?php echo $row['men_id'] ?> </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                <p> <?php echo $row['bar_nombre'] ?></p>
                                                            </td>
                                                            <td class="px-6 py-4 text-center"> <span
                                                                    class="text-white text-sm w-1/3 pb-1 bg-green-600 font-semibold px-2 rounded-full">
                                                                    <?php echo $row['men_nombre'] ?> </span> </td>
                                                            <td class="px-6 py-4 text-center">
                                                                <?php echo $row['men_precio'] ?></td>
                                                            <td class="px-6 py-4 text-center">
                                                                <?php echo $row['men_disponible'] ?>
                                                            </td>
                                                            <td class="px-6 py-4 text-center">
                                                                <?php echo $row['men_descripcion'] ?>
                                                            </td>
                                                            
                                                        </tr>
                                                        <?php }?>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Modal close-->
                            
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <?php require '../ConexionSQL/buzonConsulta.php';?>
                            <!--Modal open-->
                            <div x-data="{ modelOpen: false }">
                                <button @click="modelOpen =!modelOpen"
                                    class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="rounded-full p-5 bg-blue-600"><i
                                                class="fas fa-server fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md:text-center">
                                            <p class="font-bold text-3xl">Buzon</p>
                                        </div>
                                    </div>
                                </button>
                                <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div
                                        class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                        <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                            class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40"
                                            aria-hidden="true"></div>

                                        <div x-cloak x-show="modelOpen"
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                            <div class="flex items-center justify-between space-x-4">
                                                <h1 class="text-xl font-medium text-gray-800 ">Buzón</h1>

                                                <button @click="modelOpen = false"
                                                    class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <p class="mt-2 text-sm text-gray-500 ">
                                                Buzon de mensajes
                                            </p>

                                            <form class="mt-4">
                                                <table
                                                    class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                                                    <thead class="bg-gray-900">
                                                        <tr class="text-white text-left">
                                                            <th class="font-semibold text-sm uppercase px-4 py-3"> Id
                                                            </th>
                                                            <th class="font-semibold text-sm uppercase px-5 py-4">
                                                                BAR</th>
                                                            <th
                                                                class="font-semibold text-sm uppercase px-5 py-4 ">
                                                                FECHA  </th>
                                                            <th
                                                                class="font-semibold text-sm uppercase px-5 py-4 ">
                                                                DESCRIPCIÓN </th>
                                                            <th class="font-semibold text-sm uppercase px-1 py-4"> </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-gray-200">
                                                        <?php 
                                                        foreach($query as $row){?>
                                                        <tr>
                                                            <td class="px-6 py-4">
                                                                <div class="flex items-center space-x-3">
                                                                    <div class="inline-flex w-10 h-10"> <img
                                                                            class='w-10 h-10 object-cover rounded-full'
                                                                            alt='User avatar'
                                                                            src='https://i.imgur.com/siKnZP2.jpg' />
                                                                    </div>
                                                                    <div>

                                                                        <p class=""> <?php echo $row['buz_id'] ?> </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                <p> <?php echo $row['bar_nombre'] ?></p>
                                                            </td>
                                                            <td class="px-6 py-4 text-center"> <span
                                                                    class="text-white text-sm w-1/3 pb-1 bg-green-600 font-semibold px-2 rounded-full">
                                                                    <?php echo $row['buz_fecha'] ?> </span> </td>
                                                            <td class="px-6 py-4 text-center">
                                                                <?php echo $row['men_descripcion'] ?>
                                                            </td>
                                                            
                                                        </tr>
                                                        <?php }?>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Modal close-->
                            
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div
                                class="bg-gradient-to-b from-indigo-200 to-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-indigo-600"><i
                                                class="fas fa-tasks fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h2 class="font-bold uppercase text-gray-600">To Do List</h2>
                                        <p class="font-bold text-3xl">7 tasks</p>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div
                                class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-red-600"><i
                                                class="fas fa-inbox fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h2 class="font-bold uppercase text-gray-600">Issues</h2>
                                        <p class="font-bold text-3xl">3 <span class="text-red-500"><i
                                                    class="fas fa-caret-up"></i></span></p>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                    </div>


                    <div class="flex flex-row flex-wrap flex-grow mt-2">

                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Graph Card-->
                            <div class="bg-white border-transparent rounded-lg shadow-xl">
                                <div
                                    class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                                    <h class="font-bold uppercase text-gray-600">Graph</h>
                                </div>
                                <div class="p-5">
                                    <canvas id="chartjs-7" class="chartjs" width="undefined"
                                        height="undefined"></canvas>
                                    <script>
                                    new Chart(document.getElementById("chartjs-7"), {
                                        "type": "bar",
                                        "data": {
                                            "labels": ["January", "February", "March", "April"],
                                            "datasets": [{
                                                "label": "Page Impressions",
                                                "data": [10, 20, 30, 40],
                                                "borderColor": "rgb(255, 99, 132)",
                                                "backgroundColor": "rgba(255, 99, 132, 0.2)"
                                            }, {
                                                "label": "Adsense Clicks",
                                                "data": [5, 15, 10, 30],
                                                "type": "line",
                                                "fill": false,
                                                "borderColor": "rgb(54, 162, 235)"
                                            }]
                                        },
                                        "options": {
                                            "scales": {
                                                "yAxes": [{
                                                    "ticks": {
                                                        "beginAtZero": true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                    </script>
                                </div>
                            </div>
                            <!--/Graph Card-->
                        </div>

                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Graph Card-->
                            <div class="bg-white border-transparent rounded-lg shadow-xl">
                                <div
                                    class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                                    <h2 class="font-bold uppercase text-gray-600">Graph</h2>
                                </div>
                                <div class="p-5">
                                    <canvas id="chartjs-0" class="chartjs" width="undefined"
                                        height="undefined"></canvas>
                                    <script>
                                    new Chart(document.getElementById("chartjs-0"), {
                                        "type": "line",
                                        "data": {
                                            "labels": ["January", "February", "March", "April", "May", "June",
                                                "July"
                                            ],
                                            "datasets": [{
                                                "label": "Views",
                                                "data": [65, 59, 80, 81, 56, 55, 40],
                                                "fill": false,
                                                "borderColor": "rgb(75, 192, 192)",
                                                "lineTension": 0.1
                                            }]
                                        },
                                        "options": {}
                                    });
                                    </script>
                                </div>
                            </div>
                            <!--/Graph Card-->
                        </div>

                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Graph Card-->
                            <div class="bg-white border-transparent rounded-lg shadow-xl">
                                <div
                                    class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                                    <h2 class="font-bold uppercase text-gray-600">Graph</h2>
                                </div>
                                <div class="p-5">
                                    <canvas id="chartjs-1" class="chartjs" width="undefined"
                                        height="undefined"></canvas>
                                    <script>
                                    new Chart(document.getElementById("chartjs-1"), {
                                        "type": "bar",
                                        "data": {
                                            "labels": ["January", "February", "March", "April", "May", "June",
                                                "July"
                                            ],
                                            "datasets": [{
                                                "label": "Likes",
                                                "data": [65, 59, 80, 81, 56, 55, 40],
                                                "fill": false,
                                                "backgroundColor": ["rgba(255, 99, 132, 0.2)",
                                                    "rgba(255, 159, 64, 0.2)",
                                                    "rgba(255, 205, 86, 0.2)",
                                                    "rgba(75, 192, 192, 0.2)",
                                                    "rgba(54, 162, 235, 0.2)",
                                                    "rgba(153, 102, 255, 0.2)",
                                                    "rgba(201, 203, 207, 0.2)"
                                                ],
                                                "borderColor": ["rgb(255, 99, 132)",
                                                    "rgb(255, 159, 64)", "rgb(255, 205, 86)",
                                                    "rgb(75, 192, 192)", "rgb(54, 162, 235)",
                                                    "rgb(153, 102, 255)", "rgb(201, 203, 207)"
                                                ],
                                                "borderWidth": 1
                                            }]
                                        },
                                        "options": {
                                            "scales": {
                                                "yAxes": [{
                                                    "ticks": {
                                                        "beginAtZero": true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                    </script>
                                </div>
                            </div>
                            <!--/Graph Card-->
                        </div>

                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Graph Card-->
                            <div class="bg-white border-transparent rounded-lg shadow-xl">
                                <div
                                    class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                                    <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                                </div>
                                <div class="p-5"><canvas id="chartjs-4" class="chartjs" width="undefined"
                                        height="undefined"></canvas>
                                    <script>
                                    new Chart(document.getElementById("chartjs-4"), {
                                        "type": "doughnut",
                                        "data": {
                                            "labels": ["P1", "P2", "P3"],
                                            "datasets": [{
                                                "label": "Issues",
                                                "data": [300, 50, 100],
                                                "backgroundColor": ["rgb(255, 99, 132)",
                                                    "rgb(54, 162, 235)", "rgb(255, 205, 86)"
                                                ]
                                            }]
                                        }
                                    });
                                    </script>
                                </div>
                            </div>
                            <!--/Graph Card-->
                        </div>

                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Table Card-->
                            <div class="bg-white border-transparent rounded-lg shadow-xl">
                                <div
                                    class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                                    <h2 class="font-bold uppercase text-gray-600">Graph</h2>
                                </div>
                                <div class="p-5">
                                    <table class="w-full p-5 text-gray-700">
                                        <thead>
                                            <tr>
                                                <th class="text-left text-blue-900">Name</th>
                                                <th class="text-left text-blue-900">Side</th>
                                                <th class="text-left text-blue-900">Role</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Obi Wan Kenobi</td>
                                                <td>Light</td>
                                                <td>Jedi</td>
                                            </tr>
                                            <tr>
                                                <td>Greedo</td>
                                                <td>South</td>
                                                <td>Scumbag</td>
                                            </tr>
                                            <tr>
                                                <td>Darth Vader</td>
                                                <td>Dark</td>
                                                <td>Sith</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <p class="py-2"><a href="#">See More issues...</a></p>

                                </div>
                            </div>
                            <!--/table Card-->
                        </div>

                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Advert Card-->
                            <div class="bg-white border-transparent rounded-lg shadow-xl">
                                <div
                                    class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                                    <h2 class="font-bold uppercase text-gray-600">Advert</h2>
                                </div>
                                <div class="p-5 text-center">


                                    <script async type="text/javascript"
                                        src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom"
                                        id="_carbonads_js"></script>


                                </div>
                            </div>
                            <!--/Advert Card-->
                        </div>


                    </div>
                </div>
            </section>
        </div>
    </main>




    <script>
    /*Toggle dropdown list*/
    function toggleDD(myDropMenu) {
        document.getElementById(myDropMenu).classList.toggle("invisible");
    }
    /*Filter dropdown options*/
    function filterDD(myDropMenu, myDropMenuSearch) {
        var input, filter, ul, li, a, i;
        input = document.getElementById(myDropMenuSearch);
        filter = input.value.toUpperCase();
        div = document.getElementById(myDropMenu);
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
            var dropdowns = document.getElementsByClassName("dropdownlist");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (!openDropdown.classList.contains('invisible')) {
                    openDropdown.classList.add('invisible');
                }
            }
        }
    }
    </script>


</body>

</html>