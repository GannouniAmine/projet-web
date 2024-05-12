<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "main";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM user WHERE username = ?";
        $statement = $conn->prepare($sql);
        $statement->execute([$username]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            if (password_verify($password, $result['password'])) {
                echo "Login successful. Welcome, " . $result['username'] . "!";
            } else {
                echo "Invalid username or password.";
            }
        } else {
            echo "Invalid username or password.";
        }
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
