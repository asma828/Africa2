<?php
require '../classes/ville.php';
include './conexion-data.php';

$database = new Database();
$ville = new ville($database);

if (isset($_GET['id_ville'])) {
    $ville->id_ville = $_GET['id_ville'];
    if ($ville->delete()) {
        header("Location: villeadmin.php?success=deleted");
        exit();
    } else {
        echo "Failed to delete.";
    }
} else {
    header("Location: villeadmin.php");
    exit();
}
?>