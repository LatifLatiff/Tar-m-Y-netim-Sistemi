<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "INSERT INTO records (title, description) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$title, $description])) {
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Kayıt ekleme başarısız.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Yeni Kayıt Ekle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #f0f0f0, #dcdcdc); /* Hafif gri tonlarla geçişli arka plan */
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #343a40; /* Metin rengini koyu gri tonu olarak ayarlar */
            font-family: Arial, sans-serif;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
        .container {
            margin-top: 50px;
            background-color: #fff; /* Formun arka plan rengini beyaz yapar */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Hafif bir gölge ekler */
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Yeni Kayıt Ekle</h1>
        <form method="POST">
            <div class="form-group">
                <label for="title">Başlık</label>
                <input type="text" class="form-control" name="title" placeholder="Başlık">
            </div>
            <div class="form-group">
                <label for="description">Açıklama</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Açıklama"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kaydet</button>
            <a href="dashboard.php" class="btn btn-secondary">Geri</a>
        </form>
    </div>
</body>
</html>
