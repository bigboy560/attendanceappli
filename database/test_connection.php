<?php
$servername = "localhost";
$username = "root";
$password = "password"; // Update with your root password

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";

    // List databases
    $result = $conn->query("SHOW DATABASES");

    echo "Databases:<br>";
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo $row['Database'] . "<br>";
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
