<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base_de_donnees = "main";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur, $motdepasse);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"]) && !empty($_POST["name"]) && !empty($_POST["phone"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["message"])) {
        $names = $_POST["name"];
        $phones = $_POST["phone"];
        $emails = $_POST["email"];
        $subjects = $_POST["subject"];
        $messages = $_POST["message"];

        $stmt = $connexion->prepare("INSERT INTO client_contact (name, phone, email, subject, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$names, $phones, $emails, $subjects, $messages]);

        echo "Data inserted successfully.";
    } else {
        echo "Erreur : Tous les champs du formulaire doivent être remplis.";
    }
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

$connexion = null;
?>

