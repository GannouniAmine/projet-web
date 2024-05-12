<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "main";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $gender = $_POST["gender"];
        $city = $_POST["city"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "INSERT INTO user (first_name, last_name, gender, city, username, email, password) VALUES (?, ?, ?, ?, ?, ?, ?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$firstName, $lastName, $gender, $city, $username, $email, $password]);

        echo "Registration successful.";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
