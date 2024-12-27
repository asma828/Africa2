<?php

require_once 'conexion-data.php';
require_once 'Utilisateur.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $db = new Database();
    $utilisateur = new Utilisateur($db);
    $resultat = $utilisateur->signup($nom, $email, $password);

    if($resultat == "Inscription réussie") {
        header("Location: login.php?success=1");
    } else {
        header("Location: signup.php?error=" . urlencode($resultat));
    }
}
?>
