<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="input.css">
        <link rel="stylesheet" href="output.css">
    </head>
    <body>
        
            <div class="bg-amber-900 bg-contain  w-full   flex flex-wrap items-center justify-between mt-0 py-2 ">

                <div class="pl-4 flex items-center ">
        
                    <img src="../img/icon-africa-.png"> 
                    <span class="text-white font-bold text-lg">Africa Géo-Junior</span>
        
        
                </div>

                <div class="block lg:hidden pr-4">
                        <li class="mr-3 w-12" >
                            <a  href="login.php"> <img src="../img/logout.png"></a>
                           
                        </li>
                </div>

                <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 lg:bg-transparent text-black p-4 lg:p-0 z-20 bg-amber-900 " id="nav-content">
                    <ul class="list-reset lg:flex justify-end flex-1 items-center">
                        <li class="mr-3">
                            <a class="inline-block py-2 px-4 text-white font-bold no-underline" href="ajoutadmin.php">ajout</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block py-2 px-4 text-white font-bold no-underline" href="continentadmin.php">continent</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block py-2 px-4 text-white font-bold no-underline" href="paysadmin.php">pays</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block py-2 px-4 text-white font-bold no-underline" href="villeadmin.php">ville</a>
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
        
        <div class="flex flex-col sm:flex-row">


    
             
            <form action="ajoutcontinent.php" method="POST" class="bg-cover p-4 rounded-2xl sm:w-[700px] w-[300px] flex flex-col justify-center sm:m-5 m-3" style="background-image: url('../img/bg.jpg');">
                <h1 class="flex justify-center font-bold text-white text-4xl">Continent</h1>

                <h3 class="text-white">Nom :</h3>
                <input type="text" id="nom" name="nom" class="w-full p-2 mb-4 rounded-md bg-gray-200"required>

                
                <div class="flex justify-end mt-6">
                    <button type="submit" name="sub" id="sub" class="text-white font-bold bg-amber-900 w-36 rounded-2xl py-2 hover:bg-amber-900 cursor-pointer">Ajouter</button>
                </div>
            </form>
        <!--pays Ajout-->
            <form action="insertpays.php" method="POST" class="bg-cover p-4 rounded-2xl sm:w-[700px] w-[300px] sm:m-5 m-3" style="background-image: url('../img/bg.jpg');">
                <h1 class="flex justify-center font-bold text-white text-4xl"> Pays</h1>
            
                <label class="text-white" for="nom">Nom :</label>
                <input type="text" id="nom" name="nom_pays" class="w-full p-2 mb-4 rounded-md bg-gray-200" required>
            
                <label class="text-white" for="population">Population :</label>
                <input type="number" id="population" name="population" class="w-full p-2 mb-4 rounded-md bg-gray-200" required>
            
                <label class="text-white" for="langues">Langues :</label>
                <input type="text" id="langues" name="langues" class="w-full p-2 mb-4 rounded-md bg-gray-200" required>
            
                <label class="text-white" for="id_continent">Continent :</label>
                <select id="id_continent" name="id_continent" class="w-full p-2 mb-4 rounded-md bg-gray-200" required>
                 <option value="">Sélectionner un continent</option>
    <?php 
    include './insertpays.php';
    foreach ($continents as $continent) {
        echo "<option value='" . $continent['id_continent'] . "'>" . $continent['nom'] . "</option>";
    }
    ?>
</select>

            
                <div class="flex justify-end mt-6">
                    <button type="submit" name="submit" class="text-white font-bold bg-amber-900 w-36 rounded-2xl py-2 hover:bg-amber-800 cursor-pointer">
                        Ajouter
                    </button>
                </div>
            </form>
<!--Ville Ajout-->

            <form action="" method="POST" class="bg-cover p-4 rounded-2xl sm:w-[700px] w-[300px] flex flex-col justify-center sm:m-5 m-3" style="background-image: url('../img/bg.jpg');">
                <h1 class="flex justify-center font-bold text-white text-4xl">Villes</h1>

                <h3 class="text-white">Nom :</h3>
                <input type="text" id="nom" name="nom" class="w-full p-2 mb-4 rounded-md bg-gray-200"required>

                <h3 class="text-white">Pays :</h3>
                <select id="id_pays" name="id_pays" class="w-full p-2 mb-4 rounded-md bg-gray-200">
                
                    <?php
                        // $query = "SELECT id_pays, nom FROM pays";
                        // $result = mysqli_query($connect, $query);
                        // while ($row = mysqli_fetch_assoc($result)) {
                        //     echo "<option value='" . $row['id_pays'] . "'>" . $row['nom'] . "</option>";
                        // }
                    ?>
                </select>

                <h3 class="text-white">Type :</h3>
                <select id="type" name="type" class="w-full p-2 mb-4 rounded-md bg-gray-200">
                    <option value="capitale" id="capitale">Capitale</option>
                    <option value="autre" id="autre">Autre</option>
                </select>
                <h3 class="text-white">Description :</h3>
                <input type="text" id="description" name="description" class="w-full p-2 mb-4 rounded-md bg-gray-200"required>

                <div class="flex justify-end mt-6">
                    <button type="submit" name="subb" id="subb" class="text-white font-bold bg-amber-900 w-36 rounded-2xl py-2 hover:bg-amber-900 cursor-pointer">Ajouter</button>
                </div>
            </form>



            



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