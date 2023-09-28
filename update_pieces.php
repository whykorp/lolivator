<?php
// Se connecter à la base de données (à adapter en fonction de vos informations)
$host = "localhost";
$username = "root";
$password = "";
$database = "lolivator";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}

// Récupérer les données du formulaire (nom de l'utilisateur et quantité)
$nomUtilisateur = $_POST['nom'];
$quantite = $_POST['quantite'];

// Mettre à jour le nombre de pièces de l'utilisateur
$query = "UPDATE utilisateurs SET nombre_de_pièce = nombre_de_pièce + $quantite WHERE nom='$nomUtilisateur'";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "success"; // Indiquer que la mise à jour s'est bien déroulée
} else {
    echo "error"; // Indiquer une erreur en cas d'échec
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
