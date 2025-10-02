<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo explode('.', $_SERVER['HTTP_HOST'])[0]; ?> örnek php</title>
</head>
<body>
    <h1>Merhaba Dünya, Ben Dost! Merhaba <?php echo explode('.', $_SERVER['HTTP_HOST'])[0]; ?>!</h1>
    <p><a href="/info.php">Buradan</a>, dokploy'da deploy etmek üzere <?php echo explode('.', $_SERVER['HTTP_HOST'])[0]; ?> için oluşturulmuş php versiyonunu inceleyebilirsin.</p>
    <p><?php echo"php :)"; ?></p>
</body>
</html>