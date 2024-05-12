<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "main";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["review"]) && isset($_POST["username"])) {
        $review = $_POST["review"];
        $username = $_POST["username"];
    
        $check_sql = "SELECT * FROM user WHERE username = ?";
        $statement = $conn->prepare($check_sql);
        $statement->execute([$username]);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            $insert_sql = "INSERT INTO review (username, review_text) VALUES (?, ?)";
            $statement = $conn->prepare($insert_sql);
            $statement->execute([$username, $review]);

            echo "Review submitted successfully.";
        } else {
            echo "Username does not exist.";
        }
    } else {
        echo "Review parameter or username is not set.";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>