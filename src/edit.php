<?php
require '../classes/paysclass.php';
include './conexion-data.php';

$database = new Database();
$pays = new Pays($database);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pays->id_pays = $_POST['id_pays'];
    $pays->nom_pays = $_POST['nom_pays'];
    $pays->population = $_POST['population'];
    $pays->langues = $_POST['langues'];
    $pays->id_continent = $_POST['id_continent'];

    if ($pays->update()) {
        header("Location: paysadmin.php?success=updated");
        exit();
    } else {
        echo "Failed to update.";
    }
}

// Fetch the data for the selected country
if (isset($_GET['id_pays'])) {
    $pays->id_pays = $_GET['id_pays'];
    $data = $pays->readById();
    if ($data) {
        $data = $data[0]; // Get the first (and only) row
    } else {
        echo "No data found!";
        exit();
    }
} else {
    header("Location: paysadmin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Continent</title>
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="output.css">
</head>
<body>
    <form action="" method="POST" class="bg-cover p-4 rounded-2xl sm:w-[700px] w-[300px] flex flex-col justify-center sm:m-5 m-3" style="background-image: url('../img/bg.jpg');">
        <h1 class="flex justify-center font-bold text-white text-4xl">Modifier pays</h1>

        
        <input type="hidden" id="id_pays" name="id_pays" class="w-full p-2 mb-4 rounded-md bg-gray-200" value="<?php echo htmlspecialchars($data['id_pays']); ?>" required>
        
        <h3 class="text-white">Nom Pays :</h3>
        <input type="text" id="nom_pays" name="nom_pays" class="w-full p-2 mb-4 rounded-md bg-gray-200" value="<?php echo htmlspecialchars($data['nom_pays']); ?>" required>

        <h3 class="text-white">Population:</h3>
        <input type="text" id="population" name="population" class="w-full p-2 mb-4 rounded-md bg-gray-200" value="<?php echo htmlspecialchars($data['population']); ?>" required>
        
        <h3 class="text-white">langue:</h3>
        <input type="text" id="langues" name="langues" class="w-full p-2 mb-4 rounded-md bg-gray-200" value="<?php echo htmlspecialchars($data['langues']); ?>"  required>

        <input type="hidden" id="id_continent" name="id_continent" class="w-full p-2 mb-4 rounded-md bg-gray-200" value="<?php echo htmlspecialchars($data['id_continent']); ?>" required>

        <div class="flex justify-end mt-6">
            <button type="submit" class="text-white font-bold bg-amber-900 w-36 rounded-2xl py-2 hover:bg-amber-900 cursor-pointer">Modifier</button>
            <a href="continentadmin.php" class="text-white font-bold bg-amber-900 w-36 rounded-2xl py-2 hover:bg-amber-900 cursor-pointer flex justify-center">Annuler</a>
        </div>
    </form>
</body>
</html>