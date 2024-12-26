<?php
include './conexion-data.php';


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

    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 lg:bg-transparent text-black p-4 lg:p-0 z-20 bg-amber-900 " id="nav-content">
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

      </ul>
    </div>
  </div>

  <div class="container mx-auto px-4 py-6 border-amber-900">
   <div class="overflow-x-auto">
        <table class="min-w-full table-auto text-center border-collapse">
            <thead class="bg-amber-900 text-white">
                <tr>
                    
                    <th class="px-4 py-2 border-b">Name</th>
                    <th class="px-4 py-2 border-b">Population</th>
                    <th class="px-4 py-2 border-b">Langues</th>
                    <th class="px-4 py-2 border-b">Nom Continent</th>
                    
                    
                </tr>
            </thead>
            <tbody>

                    <?php

                       $database = new Database();
                       $sql = "SELECT * FROM pays";
                       $result = $database->query($sql);
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 border-b"><?php echo $row["nom_pays"] ?></td>
                        <td class="px-4 py-2 border-b"><?php echo $row["population"] ?></td>
                        <td class="px-4 py-2 border-b"><?php echo $row["langues"] ?></td>
                        <td class="px-4 py-2 border-b"><?php echo $row["id_continent"] ?></td>
                        
                        
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
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