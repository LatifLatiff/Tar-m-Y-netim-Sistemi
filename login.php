<?php
session_start();
require 'config.php';
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Geçersiz kullanıcı adı veya şifre.";
    }
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .login-form {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .login-form h1 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h1 class="text-center">Giriş Yap</h1>
        <?php if ($error): ?>
         <div class="alert alert-danger" role="alert">
        <?= $error ?>
    </div>
        <?php endif; ?>
        <form method="POST">
            <div class="form-group">
                <label>Kullanıcı Adı</label>
                <input type="text" name="username" class="form-control" required placeholder="Kullanıcı Adı">
            </div>
            <div class="form-group">
                <label>Şifre</label>
                <input type="password" name="password" class="form-control" required placeholder="Şifre">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
        </form>
        <div class="text-center mt-3">
            <a href="register.php" class="btn btn-secondary">Kayıt Ol</a>
            <a href="https://github.com/LatifLatiff/Tarim-Yonetim-Sistemi.git" class="btn btn-dark ml-2">GitHub</a>
        </div>
    </div>
</body>
</html>
