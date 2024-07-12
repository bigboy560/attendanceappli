<?php
$servername = "localhost";
$username = "root";
$password = "password"; 
$dbname = "attendance_db"; 

try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    echo "Connected successfully<br>";
    
    
    $cmd = "CREATE TABLE IF NOT EXISTS tab2 (
        id INT AUTO_INCREMENT PRIMARY KEY,
        col2 VARCHAR(20)
    )";
    
    
    $st = $conn->prepare($cmd);
    $st->execute();
    
    
    echo "Table 'tab2' created successfully<br>";

} catch(PDOException $e) {
    
    echo "Connection failed: " . $e->getMessage();
}
?>
