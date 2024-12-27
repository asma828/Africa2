<?php 

include './conexion-data.php';
require '../classes/paysclass.php'; 
$databaseConnection = new Database();

$pays = new Pays($databaseConnection->connect); 

$continent = new Continent($databaseConnection->connect);
$continents = $continent->read();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    if (!empty($_POST['nom_pays']) && !empty($_POST['population']) && !empty($_POST['langues']) && !empty($_POST['id_continent'])) {
        // Assign POST data to object properties
        $pays->nom_pays = $_POST['nom_pays'];
        $pays->population = $_POST['population'];
        $pays->langues = $_POST['langues'];
        $pays->id_continent = $_POST['id_continent'];
        
        // Create the country in the database
        if ($pays->create()) {
            header("Location: ajoutadmin.php");
}
    }
}
?>


