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

// Récupérer le nombre de pièces de l'utilisateur "Lazare" depuis la base de données
$query = "SELECT pieces FROM utilisateurs WHERE nom='Lazare'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$nombreDePiecesLazare = $row['pieces'];

// Afficher les boutons de l'utilisateur "Lazare"
echo "<h2>Lazare</h2>";
echo "<p>Nombre de pièces : $nombreDePiecesLazare</p>";

// Boucle pour afficher les boutons (20 boutons ici, à personnaliser)
for ($i = 1; $i <= 20; $i++) {
    echo "<button onclick=\"addPiece('Lazare', $i)\">Ajouter 1 pièce</button>";
}

if (!$result) {
    die("Erreur dans la requête SQL : " . mysqli_error($conn));
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
