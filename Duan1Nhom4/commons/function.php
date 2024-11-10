<?php
<<<<<<< HEAD
function concectDB()
=======
function connectDB()
>>>>>>> main
{
    $host = 'localhost';
    $dbname = 'duanmau1';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        error_log("Connection failed: " . $e->getMessage());
    }
}
?>