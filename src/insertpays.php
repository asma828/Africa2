<?php 

include './conexion-data.php';
require '../classes/Pays.php'; 
$databaseConnection = new Database();

$pays = new Pays($databaseConnection->connect); 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sub'])) {
    if (!empty($_POST['nom_pays']) && !empty($_POST['population']) && !empty($_POST['langues']) && !empty($_POST['id_continent'])) {
        // Assign POST data to object properties
        $pays->nom_pays = $_POST['nom_pays'];
        $pays->population = $_POST['population'];
        $pays->langues = $_POST['langues'];
        $pays->id_continent = $_POST['id_continent'];
        
        // Create the country in the database
        if ($pays->create()) {
            echo "<p style='color: green; text-align: center;'>Pays ajouté avec succès !</p>";
        } else {
            echo "<p style='color: red; text-align: center;'>Erreur lors de l'ajout du pays.</p>";
        }
    } else {
        echo "<p style='color: red; text-align: center;'>Veuillez remplir tous les champs.</p>";
    }
}

?>


