
<?php 


  /*include './conexion-data.php';

if (isset($_POST["submit"])) {
    
    if (!empty($_POST['nom']) && !empty($_POST['population']) && !empty($_POST['langues']) && !empty($_POST['id_continent'])) {
        $nom = $_POST['nom'];
        $population = $_POST['population'];
        $langues = $_POST['langues'];
        $id_continent = $_POST['id_continent'];

      
        $sql = "INSERT INTO `Pays` (`langues`, `population`, `nom`, `id_continent`) 
                VALUES ('$langues', '$population', '$nom', '$id_continent')";

       
        $result = mysqli_query($connect, $sql);

        if ($result) {
            header("Location: ajout.php?msg=ajouter");
            exit();
        } else {
            echo "Échec : " . mysqli_error($connect);
        }
    } else {
        echo "Veuillez remplir tous les champs obligatoires.";
    }
}



if (isset($_POST["sub"])) {

    if (!empty($_POST['nom']) && !empty($_POST['type']) && !empty($_POST['id_pays'])) {
        $nom = $_POST['nom'];
        $type = $_POST['type'];
        $id_pays = $_POST['id_pays'];

        $sql = "INSERT INTO `ville` (`nom`, `type`, `id_pays`) 
                VALUES ('$nom', '$type', '$id_pays')";

        $resulta = mysqli_query($connect, $sql);

        if ($resulta) {
            header("Location: ajout.php?msg=ajouter");
            exit();
        } else {
            echo "Échec : " . mysqli_error($connect);
        }
    } else {
        echo "Veuillez remplir tous les champs obligatoires.";
    }
} */



session_start();

// Vérifier si l'utilisateur est connecté
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
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
                            <a class="inline-block py-2 px-4 text-white font-bold no-underline" href="logout.php">log-out</a>
                        </li>
                       
                        <li class="mr-3 w-12" >
                            <a class="" href="logout.php"> <img src="../img/logout.png"></a>
                           
                        </li>

                    </ul>
                </div>
            </div>
        
        <div class="flex flex-col sm:flex-row">


    
             
            <form action="" method="POST" class="bg-cover p-4 rounded-2xl sm:w-[700px] w-[300px] flex flex-col justify-center sm:m-5 m-3" style="background-image: url('../img/bg.jpg');">
                <h1 class="flex justify-center font-bold text-white text-4xl">Continent</h1>

                <h3 class="text-white">Nom :</h3>
                <input type="text" id="nom" name="nom" class="w-full p-2 mb-4 rounded-md bg-gray-200"required>

                
                <div class="flex justify-end mt-6">
                    <button type="submit" name="sub" id="sub" class="text-white font-bold bg-amber-900 w-36 rounded-2xl py-2 hover:bg-amber-900 cursor-pointer">Ajouter</button>
                </div>
            </form>
        
            <form action="" method="POST" class="bg-cover p-4 rounded-2xl sm:w-[700px] w-[300px] sm:m-5 m-3" style="background-image: url('../img/bg.jpg');">
                <h1 class="flex justify-center font-bold text-white text-4xl"> Pays</h1>
            
                <label class="text-white" for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" class="w-full p-2 mb-4 rounded-md bg-gray-200" required>
            
                <label class="text-white" for="population">Population :</label>
                <input type="number" id="population" name="population" class="w-full p-2 mb-4 rounded-md bg-gray-200" required>
            
                <label class="text-white" for="langues">Langues :</label>
                <input type="text" id="langues" name="langues" class="w-full p-2 mb-4 rounded-md bg-gray-200" required>
            
                <label class="text-white" for="id_continent">Continent :</label>
                <select id="id_continent" name="id_continent" class="w-full p-2 mb-4 rounded-md bg-gray-200">
                    <option value="1">Afrique</option>
                </select>
            
                <div class="flex justify-end mt-6">
                    <button type="submit" name="submit" class="text-white font-bold bg-amber-900 w-36 rounded-2xl py-2 hover:bg-amber-800 cursor-pointer">
                        Ajouter
                    </button>
                </div>
            </form>

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
                    <button type="submit" name="sub" id="sub" class="text-white font-bold bg-amber-900 w-36 rounded-2xl py-2 hover:bg-amber-900 cursor-pointer">Ajouter</button>
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