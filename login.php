<?php
$user = 'bootcamp';
$pass = 'Passwd';

if(isset($_POST['username'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if($username == $user && $password == $pass) {
    header('Location: panel.php');
    exit(); // Dikkat! header'dan sonra exit() kullanmak önemlidir.
  } else {
    header('Location: admin.php?error=hataligiris');
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
