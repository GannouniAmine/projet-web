<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "main";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $brand = $_POST["Brand"];

        $sql = "SELECT * FROM products WHERE Brand = ?";
        $statement = $conn->prepare($sql);
        $statement->execute([$brand]);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            echo "<h2>Products with Brand: $brand</h2>";
            echo "<ul>";
            foreach ($result as $row) {
                echo "<li>{$row['Brand']}: Available sizes - {$row['Taille']}, Price - {$row['prix']}</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No products found with the brand: $brand</p>";
        }
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
