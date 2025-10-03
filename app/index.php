<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merhaba <?php echo explode('.', $_SERVER['HTTP_HOST'])[0]; ?></title>
</head>
<body>
    <h1>Merhaba Dünya, Merhaba <?php echo explode('.', $_SERVER['HTTP_HOST'])[0]; ?>!</h1>
    <p><a href="/info.php">Buradan</a>, <a href="https://dokploy.com/" target="_new">dokploy</a>'da deploy etmek üzere <?php echo explode('.', $_SERVER['HTTP_HOST'])[0]; ?> için oluşturulmuş php versiyonunu inceleyebilirsin.</p>
    <p><a href="https://sudosu.tr/" target="_new">sudosu!</a></p>
    <p><?php echo"php :)"; ?></p>
</body>
</html>
