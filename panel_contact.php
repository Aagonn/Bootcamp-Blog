<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
}

.message {
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px;
}

.message .name {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #333;
}

.message .email {
    color: #555;
    font-style: italic;
    margin-bottom: 10px;
}

.message .description {
    border: 1px solid #ccc;
    padding: 10px;
    background-color: #f9f9f9;
    font-size: 14px;
    line-height: 1.5;
}

    </style>
</head>
<body>
    <?php
$db = new PDO("sqlite:database/blog.db");
$mesajlar = $db->query("SELECT * FROM contact");

foreach($mesajlar as $mesaj){
?>
    <div>
        <div class="name"><?php echo $mesaj['name']; ?></div>
        <div class="email"><?php echo $mesaj['email']; ?></div>
        <div class="description"><?php echo $mesaj['description']; ?></div>
<br>
    </div>
    <?php } ?>
</body>
</html>