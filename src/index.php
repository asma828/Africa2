<?php
session_start();

// Vérifier si l'utilisateur est connecté
if(!isset($_SESSION['id_user'])) {
    header("Location: login.php");
    exit();
}

// Vérifier si c'est un utilisateur normal
if($_SESSION['role'] == 1) {
    header("Location: dashboard.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="input.css">
      <link rel="stylesheet" href="output.css">
      <link rel="stylesheet" href="">
  </head>
  <body>
    
    <div class="bg-amber-900 bg-contain  w-full   flex flex-wrap items-center justify-between mt-0 py-2 ">

      <div class="pl-4 flex items-center ">
     
        <img src="../img/icon-africa-.png"> 
        <span class="text-white font-bold text-lg">Africa Géo-Junior</span>
     
      </div>

      <div class="block lg:hidden pr-4">
        <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
          <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
          </svg>
        </button>
      </div>

        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 lg:bg-transparent text-black p-4 lg:p-0 z-20 bg-amber-900  " id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-white font-bold no-underline" href="index.php">Home</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-white no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="continent.php">Continent</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-white no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="pays.php">Pays</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-white no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="ville.php">Villes</a>
            </li>
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-white font-bold no-underline" href="logout.php">log-out</a>
            </li>
                       
            <li class="mr-3 w-12" >
              <a class="" href="logout.php"> <img src="../img/logout.png"></a>
                           
            </li>
          </ul>
        </div>
      </div>






     
      <h1 class="font-bold text-6xl flex justify-center m-6 text-amber-900 ">Afrique</h1>
      <div class="flex flex-col sm:flex-row justify-evenly">
        <div class="sm:m-5 sm:w-[400px] sm:h-[600px] m-3 w-[300px] h[200px]"> 
          <img src="../img/carte.webp" alt="">
        </div> 
        <div class="sm:m-5 sm:w-[700px] sm:h-[600px] m-3 w-[300px] h[200px]">
          <p>
            L'Afrique est un continent qui couvre 6 % de la surface de la Terre et 20 % de la surface des terres émergées. Sa superficie est de 30 415 873 km2 avec les îles, ce qui en fait la troisième mondiale si l'on compte l'Amérique comme un seul continent. Sa population de 1,3 milliard d'habitants classe l'Afrique deuxième continent du monde après l'Asie et représente en 2020 17,2 % de la population mondiale.

            Le continent est bordé par la mer Méditerranée au nord, par le golfe de Suez, la mer Rouge et le golfe d'Aden au nord-est, par l’océan Indien et le canal du Mozambique au sud-est et par l’océan Atlantique et le golfe de Guinée à l’ouest.

            L'Afrique est traversée presque en son milieu par l'équateur et présente plusieurs climats : chaud et humide au plus près de l'équateur, tropical dans les régions comprises entre l'équateur et les tropiques, chaud et aride autour des tropiques, tempéré dans les zones d'altitude. Le continent est caractérisé par le manque de précipitations régulières. En l'absence de glaciers ou de systèmes montagneux aquifères, il n'existe pas de moyen de régulation naturelle du climat à l’exception de la flore (forêts notamment) et de la proximité de la mer. Les terres arides représentent 60 % du continent, dont l'environnement est néanmoins très riche — on l'a appelé le « paradis de la biodiversité » —. Le continent abrite le second massif forestier continu de la planète : la forêt du bassin du Congo, mais qui est menacé par la surexploitation, la déforestation la fragmentation forestière et la baisse de la biodiversité, conséquences de la pression anthropique, exacerbée par le changement climatique.
          </p>
        </div>
      </div>
           

    </div>

    <div class="bg-amber-900 p-6">
      <div class="w-full flex flex-col md:flex-row py-6 items-center">
      <div class="flex-1 mb-6">
      <div class="flex items-center">
        <img src="../img/icon-africa-.png" alt="Logo Africa Géo-Junior" class="mr-2"> 
        <span class="text-white font-bold text-lg">Africa Géo-Junior</span>
      </div>
    </div>

    
    <div class="flex-1">
      <p class="uppercase text-white md:mb-6 text-lg font-bold">Links</p>
      <ul class="list-none mb-6">
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">FAQ</a>
        </li>
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Help</a>
        </li>
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Support</a>
        </li>
      </ul>
    </div>

    
    <div class="flex-1">
      <p class="uppercase text-white md:mb-6 text-lg font-bold">Legal</p>
      <ul class="list-none mb-6">
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Terms</a>
        </li>
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Privacy</a>
        </li>
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Cookies</a>
        </li>
      </ul>
    </div>

   
    <div class="flex-1">
      <p class="uppercase text-white md:mb-6 text-lg font-bold">Social</p>
      <ul class="list-none mb-6">
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Facebook</a>
        </li>
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">LinkedIn</a>
        </li>
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Twitter</a>
        </li>
      </ul>
    </div>

    
    <div class="flex-1">
      <p class="uppercase text-white md:mb-6 text-lg font-bold">Company</p>
      <ul class="list-none mb-6">
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Official Blog</a>
        </li>
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">About Us</a>
        </li>
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Contact</a>
        </li>
      </ul>
    </div>
  </div>

  
  <div class="pt-4 mt-10 text-center text-black  ">
    © 2020 Africa Géo-Junior. All rights reserved.
  </div>
  <div class="pt-2 mt-2 text-center text-black">
    Distributed by
    <a href="https://themewagon.com/" class="hover:text-orange-500">Themewagon</a>
  </div>
</div>

</body>
<script src="script.js"></script>
</html>