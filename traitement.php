<?php

require('connecDB.php');

// indique la méthode HTTP utilisée par le client pour accéder à la page actuelle.

// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     $nom = $_POST['nom'];
//     $prenom = $_POST['prenom'];
//     $pseudo = $_POST['pseudo'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
// }
$nom = $prenom = $pseudo = $email = $password = ""; // Déclaration des variables avec des valeurs par défaut vides

if (isset($_POST['ok'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insérer dans la base de données
    $req = $db->prepare("INSERT INTO datauser (nom, prenom, pseudo, email, password) VALUES (?, ?, ?, ?, ?)");
    $req->execute([$nom, $prenom, $pseudo, $email, $password]);
} else {
    // Gérer le cas où $_POST['ok'] n'est pas défini
    echo "Le formulaire n'a pas été soumis correctement.";
}