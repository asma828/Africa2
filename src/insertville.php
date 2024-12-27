<?php
include './conexion-data.php';
require '../classes/ville.php';
require '../classes/paysclass.php'; 

// Connexion à la base de données
$dataConnection = new Database();
$ville = new ville($dataConnection->connect); 
$pays = new pays($dataConnection->connect);

// Récupérer les pays depuis la base de données
$pay = $pays->read();

// Vérification et traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['subb'])) {
    var_dump($_POST['nom_ville']);
    var_dump($_POST['type']);
    var_dump($_POST['description']);
    var_dump($_POST['id_pays']);

    if (!empty($_POST['nom_ville']) && !empty($_POST['type']) && !empty($_POST['description']) && !empty($_POST['id_pays'])) {
        echo "Formulaire soumis";

        // Assigner les données à l'objet ville
        $ville->nom_ville = $_POST['nom_ville'];
        $ville->type = $_POST['type'];
        $ville->description = $_POST['description'];
        $ville->id_pays = $_POST['id_pays'];
        
        var_dump($ville);

        // Ajouter la ville à la base de données
        if ($ville->create()) {
            echo "Ville ajoutée avec succès";
            header("Location: ajoutadmin.php");
            exit();
        }
    }
}
?>