<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM records WHERE id = ?";
$stmt = $pdo->prepare($sql);
if ($stmt->execute([$id])) {
    header("Location: dashboard.php");
    exit;
} else {
    echo "Kayıt silme başarısız.";
}
?>
