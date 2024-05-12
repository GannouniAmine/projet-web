<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "main";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "DELETE FROM user WHERE username = ? AND password = ?";
        $statement = $conn->prepare($sql);
        $statement->execute([$username, $password]);

        if ($statement->rowCount() > 0) {
            echo "User account deleted successfully.";
        } else {
            echo "No user account found matching the provided username and password.";
        }
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
