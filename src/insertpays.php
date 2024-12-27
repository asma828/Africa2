<?php 

include './conexion-data.php';
require '../classes/paysclass.php'; 
require '../classes/Continent.php'; 

$databaseConnection = new Database();

$pays = new Pays($databaseConnection->connect); 

$continent = new Continent($databaseConnection->connect);
$continents = $continent->read();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
var_dump($_POST['nom_pays']);
var_dump($_POST['population']);
var_dump($_POST['langues']);
var_dump($_POST['id_continent']);

    if (!empty($_POST['nom_pays']) && !empty($_POST['population']) && !empty($_POST['langues']) && !empty($_POST['id_continent'])) {
    echo "kjjjjjjjk";
        
        $pays->nom_pays = $_POST['nom_pays'];
        $pays->population = $_POST['population'];
        $pays->langues = $_POST['langues'];
        $pays->id_continent = $_POST['id_continent'];
        var_dump($pays);
        
        // Create the country in the database
        if ($pays->create()) {
            echo "hhhhhhhhhhhhhh";
            header("Location: ajoutadmin.php");
}
    }
}
?>


