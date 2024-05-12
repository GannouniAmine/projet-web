<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "main";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $sizes = !empty($_POST["size"]) ? implode(",", $_POST["size"]) : "";
        $description = $_POST["description"];

        if (!empty($username) && !empty($email) && !empty($description)) {
            $sql = "INSERT INTO custom (username, email, sizes, description) VALUES (?, ?, ?, ?)";
            $statement = $conn->prepare($sql);
            $statement->execute([$username, $email, $sizes, $description]);

            echo "Form data submitted successfully.";
        } else {
            echo "Please fill in all required fields.";
        }
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>

