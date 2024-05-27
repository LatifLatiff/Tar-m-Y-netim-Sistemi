<?php
require 'config.php';
$error_kayit='';
$success_kayit='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$username, $password])) {
        $success_kayit="Kullanıcı kaydı başarılı!";
    } else {
        $error_kayit="Kullanıcı kaydı başarısız.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kullanıcı Kaydı</title>
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
        .register-form {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .register-form h1 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="register-form">
    <h1 class="text-center">Kayıt Ol</h1>
    <?php if ($error_kayit): ?>
    <div class="alert alert-danger" role="alert">
        <?= $error_kayit ?>
    </div>
<?php endif; ?>
<?php if ($success_kayit): ?>
    <div class="alert alert-success" role="alert">
        <?= $success_kayit ?>
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
        <button type="submit" class="btn btn-primary btn-block">Kayıt Ol</button>
    </form>
    <div class="text-center mt-3">
            <a href="login.php" class="btn btn-secondary">Giriş Yap</a>
        </div>
    </div>
   
</body>
</html>
