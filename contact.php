<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    
    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
</head>

<body>

    <header>
        <div class="container">
            <div class="header-wrapper mt-5">
                <div class="row header-content">
                    <div class="header-title col-md-8">
                        <a href="index.php">Blog Title</a>
                    </div>
                    <div class="header-menu col-md-4">
                        <ul>
                            <li>
                                <a href="index.php">Ev</a>
                            </li>
                            <li>
                                <a href="blog.php">Blog</a>
                            </li>
                            <li>
                                <a href="about.php">hakkında</a>
                            </li>
                            <li>
                                <a href="contact.html" style="opacity: 100%;">İletişim</a>
                            </li>
                            <li>
                                <a href="login.php">Admin Giriş</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="contact-wrapper">
        <div class="container mt-4">
            <div class="contact-container">
                <div class="contact-top-title">
                    Bizimle iletişime geçin 
                </div>
                <div class="contact-form">
                    <?php
                   
                    if(isset($_POST['send'])){



                    $db = new PDO("sqlite:database/blog.db");
                    $name = $_POST['fullname-surname'];
                    $email = $_POST['email'];
                    $description = $_POST['message'];
                    
                    $db->exec("INSERT INTO contact (name, email, description) VALUES ('$name', '$email', '$description');");
                    

                    }

                  
                    ?>
                    <form action="contact.php" method="post">
                                <div class="fullname-input">
                                    <input type="text" name="fullname-surname" id="" placeholder="Full Name" >
                                </div>
                                <div class="email-input">
                                    <input type="email" name="email" id="" placeholder="Email Address">
                                </div> 
                                <div class="message-input">
                                    <textarea name="message" id="" cols="60" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div class="button-input">
                                    <button name="send" type="submit">Mesajı Gönder</button>
                                </div>           
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid mt-5"></div>
        <hr>
        </div>
        <div class="container text-center mt-5 mb-5">
            <div class="copyright">
                © 2023 All rights reserved.
            </div>
        </div>

    </footer>

</body>

</html>