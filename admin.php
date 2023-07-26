<?php
session_start();

$user = 'bootcamp';
$pass = 'Passwd';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $user && $password === $pass) {
        $_SESSION['logged_in'] = true;
        header('Location: admin.php');
        exit();
    } else {
        $error_message = 'Hatalı Giriş';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sayfası</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Hoş Geldiniz!</h2>
        <?php if (isset($error_message)): ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form class="login-form" method="post" action="login.php">
            <label for="username">Kullanıcı Adı / E-posta:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Giriş</button>
        </form>
    </div>
</body>
</html>
