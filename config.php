<?php
$host = 'localhost';
$db = 'dbstorage22360859306';
$user = 'dbusr22360859306';
$pass = 'eHV0ZfJlRts7';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}
?>
