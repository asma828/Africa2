<?php
include './conexion-data.php';
require '../classes/Continent.php';
$database = new Database();
$continent = new Continent($database);

if (isset($_GET['id_continent'])) {
    $id_continent = $_GET['id_continent'];

    $continent->id_continent = $id_continent;

    if ($continent->delete()) {
        header("Location: continentadmin.php");
        exit;
    } else {
        echo "Échec de la suppression.";
    }
} else {
    echo "ID du continent manquant.";
}
?>
