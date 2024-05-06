<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si le champ "review" est défini et non vide
    if (isset($_POST["review"]) && !empty($_POST["review"])) {
        // Récupère la critique soumise
        $review = $_POST["review"];
        
        // Enregistre la critique dans une base de données ou un autre système de stockage
        // Exemple : connexion à une base de données MySQL et insertion de la critique
        // $servername = "localhost";
        // $username = "username";
        // $password = "password";
        // $dbname = "database";
        
        // // Crée une connexion
        // $conn = new mysqli($servername, $username, $password, $dbname);
        
        // // Vérifie la connexion
        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        // }
        
        // // Prépare et exécute la requête SQL
        // $sql = "INSERT INTO reviews (review_text) VALUES ('$review')";
        // if ($conn->query($sql) === TRUE) {
        //     echo "Review submitted successfully";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }
        
        // // Ferme la connexion
        // $conn->close();

        // Dans cet exemple, nous affichons simplement la critique soumise
        echo "Review submitted successfully: " . $review;
    } else {
        // Si le champ "review" est vide, affiche un message d'erreur
        echo "Review field is empty";
    }
} else {
    // Si la méthode de requête n'est pas POST, redirige l'utilisateur vers une page d'erreur
    header("Location: error.php");
    exit();
}
?>
