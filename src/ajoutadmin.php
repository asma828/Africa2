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
        <form action="ajoutcontinent.php" method="POST" class="bg-cover p-4 rounded-2xl sm:w-[700px] w-[300px] flex flex-col justify-center sm:m-5 m-3" style="background-image: url('../img/bg.jpg');">
            <h1 class="text-center font-bold text-white text-4xl mb-4">Continent</h1>
            <label for="nom" class="text-white">Nom :</label>
            <input type="text" id="nom" name="nom" class="w-full p-2 mb-4 rounded-md bg-gray-200" required>
            <div class="flex justify-end mt-6">
                <button type="submit" name="sub" id="sub" class="bg-amber-900 text-white font-bold w-36 rounded-2xl py-2 hover:bg-amber-800">
                    Ajouter
                </button>
            </div>
        </form>
        
        <!-- Formulaire Pays -->
        <form action="insertpays.php" method="POST" class="bg-cover p-4 rounded-2xl sm:w-[700px] w-[300px] sm:m-5 m-3" style="background-image: url('../img/bg.jpg');">
            <h1 class="text-center font-bold text-white text-4xl mb-4">Pays</h1>
            <label for="nom_pays" class="text-white">Nom :</label>
            <input type="text" id="nom_pays" name="nom_pays" class="w-full p-2 mb-4 rounded-md bg-gray-200" required>
            <label for="population" class="text-white">Population :</label>
            <input type="number" id="population" name="population" class="w-full p-2 mb-4 rounded-md bg-gray-200" required>
            <label for="langues" class="text-white">Langues :</label>
            <input type="text" id="langues" name="langues" class="w-full p-2 mb-4 rounded-md bg-gray-200" required>
            <label for="id_continent" class="text-white">Continent :</label>
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
                <button type="submit" name="submit" class="bg-amber-900 text-white font-bold w-36 rounded-2xl py-2 hover:bg-amber-800">
                    Ajouter
                </button>
            </div>
        </form>
        
        <!-- Formulaire Ville -->
        <form action="insertville.php" method="POST" class="bg-cover p-4 rounded-2xl sm:w-[700px] w-[300px] sm:m-5 m-3" style="background-image: url('../img/bg.jpg');">
            <h1 class="text-center font-bold text-white text-4xl mb-4">Ville</h1>
            <label for="nom_ville" class="text-white">Nom :</label>
            <input type="text" id="nom_ville" name="nom" class="w-full p-2 mb-4 rounded-md bg-gray-200" required>
            <label for="id_pays" class="text-white">Pays :</label>
            <select id="id_pays" name="id_pays" class="w-full p-2 mb-4 rounded-md bg-gray-200">
                <option value="">Sélectionner un pays</option>
                <?php 
                include './insertville.php';
                foreach ($pay as $pays) {
                    echo "<option value='" . $pays['id_pays'] . "'>" . $pays['nom_pays'] . "</option>";
                }
                ?>
            </select>
            <label for="type" class="text-white">Type :</label>
            <select id="type" name="type" class="w-full p-2 mb-4 rounded-md bg-gray-200">
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
    
    <footer class="bg-amber-900 p-6">
        <div class="text-center text-white">
            <p>© 2020 Africa Géo-Junior. All rights reserved.</p>
            <p>Distributed by <a href="https://themewagon.com/" class="hover:text-orange-500">Themewagon</a></p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>
