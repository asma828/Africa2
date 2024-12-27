<?php
include './conexion-data.php';
require '../classes/Continent.php'; 

$database = new Database();
$continent = new Continent($database);

if (isset($_GET['id_continent'])) {
    $id_continent = $_GET['id_continent'];

    // Récupérer les données du continent
    $query = "SELECT * FROM continent WHERE id_continent = :id_continent";
    $stmt = $database->connect->prepare($query); 
    $stmt->execute(['id_continent' => $id_continent]);
    $continentData = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$continentData) {
        echo "Aucun continent trouvé avec cet ID.";
        exit;
    }
} else {
    echo "ID de continent manquant.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $continent->id_continent = $id_continent;
    $continent->nom = $nom;

    // Appel de la méthode update()
    if ($continent->update()) {
        header("Location: continentadmin.php");
        exit;
    } else {
        echo "Échec de la mise à jour.";
    }
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
        <h1 class="flex justify-center font-bold text-white text-4xl">Modifier Continent</h1>

        <h3 class="text-white">Nom :</h3>
        <input type="text" id="nom" name="nom" class="w-full p-2 mb-4 rounded-md bg-gray-200" value="<?php echo ($continentData['nom']); ?>" required>

        <div class="flex justify-end mt-6">
            <button type="submit" class="text-white font-bold bg-amber-900 w-36 rounded-2xl py-2 hover:bg-amber-900 cursor-pointer">Modifier</button>
            <a href="continentadmin.php" class="text-white font-bold bg-amber-900 w-36 rounded-2xl py-2 hover:bg-amber-900 cursor-pointer flex justify-center">Annuler</a>
        </div>
    </form>
</body>
</html>
