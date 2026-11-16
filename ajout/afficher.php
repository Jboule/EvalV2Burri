<?php
include '../conf_server.php';

if (isset($_POST['titre'], $_POST['realisateur'], $_POST['genre'], $_POST['proprio'])) {
    $titre = $_POST['titre'];
    $realisateur = $_POST['realisateur'];
    $genre = $_POST['genre'];
    $proprio = $_POST['proprio'];
    $conn = new mysqli($servername = "localhost", $username = "root", $password = "", $dbname = "cinema");
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }
    $conn->set_charset("utf8mb4");
    $stmt = $conn->prepare("INSERT INTO films (titre, realisateur, genre, proprio) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $titre, $realisateur, $genre, $proprio);

    if ($stmt->execute()) {
        echo "Nouvel enregistrement réussi.<br><br>";
        echo '<a href="../index.php">Retour à l\'accueil</a>';
    } else {
        echo "Erreur : " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Non autorisé.";
}
?>
