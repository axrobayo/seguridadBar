<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bar ESPEL</title>
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
                   
                </div>

                <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
                    <span class="relative w-full">
                        
                    </span>
                </div>

                <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
                    <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                        <li class="flex-1 md:flex-none md:mr-3">
                            <div class="relative inline-block">
                                <button onclick="toggleDD('myDropdown')" class="drop-button text-white py-2 px-2"> <span
                                        class="pr-2"><i class="em em-robot_face"></i></span> Hi, Usuario <svg
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
                                            class="fa fa-user fa-fw"></i> Perfil</a>
                                    <a href="#"
                                        class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i
                                            class="fa fa-cog fa-fw"></i> Configuraciones</a>
                                    <div class="border border-gray-800"></div>
                                    <!-- -->
                                    
                                    <!-- -->
                                    <a href="logout.php"
                                        class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i
                                            class="fas fa-sign-out-alt fa-fw"></i> Salir</a>
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
                            <h1 class="font-bold pl-2">Bar estudiantil</h1>
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
                                            <form class="mt-4">
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
                                                    class="fas fa-beer fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md:text-center">
                                            <p class="font-bold text-3xl">SNACKS <span class="text-pink-500"><i
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
                                                                <?php echo "$ ".$row['sna_precio'] ?></td>
                                                            <td class="px-6 py-4 text-center">
                                                            </td>
                                                            <td class="px-6 py-4 text-center">
                                                                <?php echo $row['sna_disponible'] ?>
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
                                                class="fas fa-list fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md:text-center">
                                            <p class="font-bold text-3xl">MENÚ <span class="text-yellow-600"><i
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
                                                                <?php echo "$ ".$row['men_precio'] ?></td>
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
                                                class="fas fa-envelope fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md:text-center">
                                            <p class="font-bold text-3xl">BUZÓN <span class="text-blue-500"><i
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
                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-gray-200">
                                                        <?php 
                                                        foreach($query as $row){?>
                                                        <tr>
                                                            <td class="px-6 py-4">
                                                                <div class="flex items-center space-x-3">
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
                                                                <?php echo $row['buz_descripcion'] ?>
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
                            <!--Modal open-->
                            <?php require '../ConexionSQL/preferenciasConsulta.php';?>
                            <div x-data="{ modelOpen: false }">
                                <button @click="modelOpen =!modelOpen"
                                    class="bg-gradient-to-b from-indigo-200 to-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="rounded-full p-5 bg-indigo-600"><i
                                                class="fas fa-tasks fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md:text-center">
                                            <p class="font-bold text-3xl">PREFERENCIAS <span class="text-indigo-500"><i
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
                                                <h1 class="text-xl font-medium text-gray-800 ">Preferencias</h1>

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
                                                Preferencias del día
                                            </p>

                                            <form class="mt-4">
                                                <table
                                                    class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                                                    <thead class="bg-gray-900">
                                                        <tr class="text-white text-left">
                                                            <th class="font-semibold text-sm uppercase px-4 py-3"> Id
                                                            </th>
                                                            <th class="font-semibold text-sm uppercase px-5 py-4">
                                                                Menu</th>
                                                            <th
                                                                class="font-semibold text-sm uppercase px-5 py-4 ">
                                                                Fecha  </th>
                                                            <th
                                                                class="font-semibold text-sm uppercase px-5 py-4 ">
                                                                Observación </th>
                                                            <th class="font-semibold text-sm uppercase px-1 py-4"> </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-gray-200">
                                                        <?php 
                                                        foreach($query as $row){?>
                                                        <tr>
                                                            <td class="px-6 py-4">
                                                                <div class="flex items-center space-x-3">
                                                                    <div>

                                                                        <p class=""> <?php echo $row['pre_id'] ?> </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                <p> <?php echo $row['men_nombre'] ?></p>
                                                            </td>
                                                            <td class="px-6 py-4 text-center"> <span
                                                                    class="text-white text-sm w-1/3 pb-1 bg-green-600 font-semibold px-2 rounded-full">
                                                                    <?php echo $row['pre_fecha'] ?> </span> </td>
                                                            <td class="px-6 py-4 text-center">
                                                                <?php echo $row['pre_observacion'] ?></td>
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
                    </div>
                    <!--Carousel open-->                                            
                    <div align="center", class="imagen" >
                        <img src="https://blog.megashoptv.tv/wp-content/uploads/2019/09/Consecuencias-del-consumo-de-comida-chatarra.jpg"
                            width="800"
                            height="600"
                        >
                    </div>                                           
                    <!--Carousel close-->

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