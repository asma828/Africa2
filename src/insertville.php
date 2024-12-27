<?php 

include './conexion-data.php';
require '../classes/paysclass.php'; 
require '../classes/ville.php'; 

$dataConnection = new Database();

$ville= new ville($dataConnection->connect); 

$pays = new pays($dataConnection->connect);
$pay = $pays->read();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
var_dump($_POST['nom_ville']);
var_dump($_POST['type']);
var_dump($_POST['description']);
var_dump($_POST['id_pays']);

    if (!empty($_POST['nom_ville']) && !empty($_POST['type']) && !empty($_POST['description']) && !empty($_POST['id_pays'])) {
    echo "kjjjjjjjk";
        
        $ville->nom_ville = $_POST['nom_ville'];
        $ville->type = $_POST['type'];
        $ville->description = $_POST['description'];
        $ville->id_pays = $_POST['id_pays'];
        var_dump($ville);
        
        // Create the country in the database
        if ($pays->create()) {
            echo "hhhhhhhhhhhhhh";
            header("Location: ajoutadmin.php");
}
    }
}
?>


