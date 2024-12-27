<?php
require '../classes/ville.php';
include './conexion-data.php';

$database = new Database();
$ville= new ville($database);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ville->id_ville = $_POST['id_ville'];
    $ville->nom_ville = $_POST['nom_ville'];
    $ville->type = $_POST['type'];
    $ville->description = $_POST['description'];
    $ville->id_pays = $_POST['id_pays'];

    if ($ville->update()) {
        header("Location: villeadmin.php?success=updated");
        exit();
    }
}

// Fetch the data for the selected country
if (isset($_GET['id_ville'])) {
    $ville->id_ville = $_GET['id_ville'];
    $data = $ville->readById();
    if ($data) {
        $data = $data[0]; 
    } else {
        echo "No data found!";
        exit();
    }
} else {
    header("Location: villeadmin.php");
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
        <h1 class="flex justify-center font-bold text-white text-4xl">Modifier ville</h1>

        
        <input type="hidden" id="id_ville" name="id_ville" class="w-full p-2 mb-4 rounded-md bg-gray-200" value="<?php echo ($data['id_ville']); ?>" required>
        
        <h3 class="text-white">Nom ville :</h3>
        <input type="text" id="nom_ville" name="nom_ville" class="w-full p-2 mb-4 rounded-md bg-gray-200" value="<?php echo ($data['nom_ville']); ?>" required>

        <h3 class="text-white">type:</h3>
        <input type="text" id="type" name="type" class="w-full p-2 mb-4 rounded-md bg-gray-200" value="<?php echo ($data['type']); ?>" required>
        
        <h3 class="text-white">description:</h3>
        <input type="text" id="description" name="description" class="w-full p-2 mb-4 rounded-md bg-gray-200" value="<?php echo ($data['description']); ?>"  required>

        <input type="hidden" id="id_pays" name="id_pays" class="w-full p-2 mb-4 rounded-md bg-gray-200" value="<?php echo ($data['id_pays']); ?>" required>

        <div class="flex justify-end mt-6">
            <button type="submit" class="text-white font-bold bg-amber-900 w-36 rounded-2xl py-2 hover:bg-amber-900 cursor-pointer">Modifier</button>
            <a href="villeadmin.php" class="text-white font-bold bg-amber-900 w-36 rounded-2xl py-2 hover:bg-amber-900 cursor-pointer flex justify-center">Annuler</a>
        </div>
    </form>
</body>
</html>