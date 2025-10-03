<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merhaba <?php echo htmlspecialchars(explode('.', $_SERVER['HTTP_HOST'])[0]); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        .link {
            color: #3b82f6;
            transition: color 0.2s;
        }
        .link:hover {
            color: #1d4ed8;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="container mx-auto text-center py-8">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
            Merhaba Dünya, Merhaba <?php echo htmlspecialchars(explode('.', $_SERVER['HTTP_HOST'])[0]); ?>!
        </h1>
        <p class="text-lg md:text-xl text-gray-600 mb-6">
            <a href="/info.php" class="link font-semibold">Buradan</a>, 
            <a href="https://dokploy.com/" target="_blank" rel="noopener noreferrer" class="link font-semibold">Dokploy</a>'da 
            deploy etmek üzere <?php echo htmlspecialchars(explode('.', $_SERVER['HTTP_HOST'])[0]); ?> için oluşturulmuş PHP versiyonunu inceleyebilirsin.
        </p>
        <p class="text-lg md:text-xl text-gray-600 mb-6">
            <a href="https://sudosu.tr/" target="_blank" rel="noopener noreferrer" class="link font-semibold">Sudosu!</a>
        </p>
        <p class="text-lg md:text-xl text-gray-600">
            <?php echo htmlspecialchars("PHP :)"); ?> <a href="https://github.com/hasanakdeniz/php">github</a>
        </p>
    </div>
</body>
</html>
