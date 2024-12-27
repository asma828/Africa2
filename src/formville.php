<?php
 require '../classes/ville.php';
 require '../classes/paysclass.php';

 include './conexion-data.php';
 $database = new Database();
 $pays = new Pays($database);
 $data = $pays->read();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa Géo-Junior</title>
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="output.css">
</head>
<body>
    <header class="bg-amber-900 w-full flex items-center justify-between py-2">
        <div class="pl-4 flex items-center">
            <img src="../img/icon-africa-.png" alt="Logo Africa Géo-Junior" class="mr-2">
            <span class="text-white font-bold text-lg">Africa Géo-Junior</span>
        </div>
        <div class="block lg:hidden pr-4">
            <a href="login.php">
                <img src="../img/logout.png" alt="Logout" class="w-12">
            </a>
        </div>
        <nav class="hidden lg:block w-auto mt-2 lg:mt-0 text-white">
            <ul class="flex space-x-4">
                <li><a href="ajoutadmin.php" class="py-2 px-4 font-bold hover:underline">Ajout</a></li>
                <li><a href="continentadmin.php" class="py-2 px-4 font-bold hover:underline">Continent</a></li>
                <li><a href="paysadmin.php" class="py-2 px-4 font-bold hover:underline">Pays</a></li>
                <li><a href="villeadmin.php" class="py-2 px-4 font-bold hover:underline">Ville</a></li>
                <li><a href="logout.php" class="py-2 px-4 font-bold hover:underline">Log-out</a></li>
            </ul>
        </nav>
    </header>

    <main class="flex flex-col sm:flex-row">
        
        <!-- Formulaire Ville -->
        
        <form action="insertville.php" method="POST" class="bg-cover p-4 rounded-2xl sm:w-[700px] w-[300px] sm:m-5 m-3" style="background-image: url('../img/bg.jpg');">
            <h1 class="text-center font-bold text-white text-4xl mb-4">Ville</h1>
            
            <label for="nom_ville" class="text-white">Nom :</label>
            <input type="text" id="nom_ville" name="nom_ville" class="w-full p-2 mb-4 rounded-md bg-gray-200" required>
            
            <label for="id_pays" class="text-white">Pays :</label>
            <select id="id_pays" name="id_pays" class="w-full p-2 mb-4 rounded-md bg-gray-200" required>
                <option value="">Sélectionner un pays</option>
                <?php 
                if ($data) {
                        foreach ($data as $row) {
                            echo "<option value='" . $row['id_pays'] . "'>" . $row['nom_pays'] . "</option>";
                        }}
                    ?>

            </select>
            
            <label for="type" class="text-white">Type :</label>
            <select id="type" name="type" class="w-full p-2 mb-4 rounded-md bg-gray-200" required>
                <option value="capitale">Capitale</option>
                <option value="autre">Autre</option>
            </select>
            
            <label for="description" class="text-white">Description :</label>
            <input type="text" id="description" name="description" class="w-full p-2 mb-4 rounded-md bg-gray-200" required>
            
            <div class="flex justify-end mt-6">
                <button type="submit" name="subb" class="bg-amber-900 text-white font-bold w-36 rounded-2xl py-2 hover:bg-amber-800">
                    Ajouter
                </button>
            </div>
        </form>
    </main>
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
    <script src="script.js"></script>
</body>
</html>
