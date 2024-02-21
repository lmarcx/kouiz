<?php
// Ouvrir la connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kouiz";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
