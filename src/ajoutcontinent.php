<?php 

include './conexion-data.php';
require '../classes/Continent.php'; 
$databaseConnection = new Database();

$continent = new Continent($databaseConnection->connect); 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sub'])) {
    if (!empty($_POST['nom'])) {
        $continent->nom = $_POST['nom'];
        if ($continent->create()) {
            header("Location: ajoutadmin.php");
        } 
    } 
}



?> 