<?php
require '../classes/paysclass.php';
include './conexion-data.php';

$database = new Database();
$pays = new Pays($database);

if (isset($_GET['id_pays'])) {
    $pays->id_pays = $_GET['id_pays'];
    if ($pays->delete()) {
        header("Location: paysadmin.php?success=deleted");
        exit();
    } else {
        echo "Failed to delete.";
    }
} else {
    header("Location: paysadmin.php");
    exit();
}
?>
