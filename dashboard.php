<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require 'config.php';

$sql = "SELECT * FROM records";
$stmt = $pdo->query($sql);
$records = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Yönetim Paneli</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
         body {
            background: linear-gradient(to right, #f0f0f0, #dcdcdc);
           height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
            font-family: Arial, sans-serif;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
        .container {
            margin-top: 50px;
        }
        .table thead th {
            background-color: #f8f9fa;
        }
        .btn {
            margin-right: 5px;
        }
        .bottom-right {
            position: fixed;
            bottom: 10px;
            right: 10px;
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Yönetim Paneli</h1>
        <div class="mb-3">
            <a href="add_record.php" class="btn btn-success">Yeni Kayıt Ekle</a>
            <a href="logout.php" class="btn btn-secondary">Çıkış Yap</a>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Başlık</th>
                    <th>Açıklama</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($records as $record): ?>
                    <tr>
                        <td><?= htmlspecialchars($record['id']) ?></td>
                        <td><?= htmlspecialchars($record['title']) ?></td>
                        <td><?= htmlspecialchars($record['description']) ?></td>
                        <td>
                            <a href="edit_record.php?id=<?= $record['id'] ?>" class="btn btn-warning btn-sm">Düzenle</a>
                            <a href="delete_record.php?id=<?= $record['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bu kaydı silmek istediğinize emin misiniz?')">Sil</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
   <a href="https://github.com/LatifLatiff/Tarim-Yonetim-Sistemi.git" class="bottom-right">Github</a>
</body>
</html>
