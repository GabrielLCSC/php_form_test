<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Récupérer le pseudo du formulaire
$pseudo = $_POST['pseudo'];

// Insertion des données dans la table "user"
$sql = "INSERT INTO user (pseudo) VALUES ('$pseudo')";

if ($conn->query($sql) === TRUE) {
    echo "Le pseudo a été enregistré avec succès.";
} else {
    echo "Une erreur s'est produite : " . $conn->error;
}

// Fermeture de la connexion
$conn->close();
?>
