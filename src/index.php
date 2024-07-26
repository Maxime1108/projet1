<?php

// require_once "../vendor/autoload.php";
// charger l'ensemble des bibliothèques qu'on a installer

// connecter à la base de donnée
// $db = new MongoDB\Client("mongodb://localhost:27017");

// nom db  nom table
// $db = $db->dbpoles->employer

// clé : valeur
// $datas = [
//     "nom" => "LOIR",
//     "prenom" => "Maxime",
//     "salaire" => 1300
// ];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    // Affichage des données
    echo "<h3>Informations soumises :</h3>";
    echo "Nom : " . $name . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Sujet : " . $sujet . "<br>";
    echo "Message : " . nl2br($message) . "<br>";
}
?>