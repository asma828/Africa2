<?php
 include './conexion-data.php';
 
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
        <!-- Formulaire Continent -->
        <form action="formacontinent.php" method="POST" class="bg-cover p-4 rounded-2xl sm:w-[700px] w-[300px] flex flex-col justify-center sm:m-5 m-3">
            <div class="flex justify-end mt-6 h-36">
            <a href="formacontinent.php" class="w-full">
                <button type="submit" name="sub" id="sub" class="bg-amber-900 text-white font-bold w-36 rounded-2xl py-2 hover:bg-amber-800">
                    Ajouter continent
                </button>
</a>
            </div>
        </form>
        
        <!-- Formulaire Pays -->
        <form action="formapays.php" method="POST" class="bg-cover p-4 rounded-2xl sm:w-[700px] w-[300px] sm:m-5 m-3" style="">
            </select>
            <div class="flex justify-end mt-6 h-36">
            <a href="formapays.php" class="w-full">
                <button type="submit" name="submit" class="bg-amber-900 text-white font-bold w-36 rounded-2xl py-2 hover:bg-amber-800">
                    Ajouter pays
                </button>
</a>
            </div>
        </form>
        
        <!-- Formulaire Ville -->
        
        <form action="formville.php" method="POST" class="bg-cover p-4 rounded-2xl sm:w-[700px] w-[300px] sm:m-5 m-3" style="">
            
            
           <div class="flex justify-end mt-6 h-36">
           <a href="formville.php" class="w-full">
                <button type="submit" name="subb" class="bg-amber-900 text-white font-bold w-36 rounded-2xl py-2 hover:bg-amber-800">
                    Ajouter ville
                </button>
</a>
            </div>
        </form>
    </main>
       

            
            
            

            
            

        
            

          
    

    <script src="script.js"></script>
</body>
</html>
