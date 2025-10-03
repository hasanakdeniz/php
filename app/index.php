<?php
// HTTP yanıt kodu 503 (Service Unavailable) olarak ayarlanır
http_response_code(503);

// Sayfanın yenilenmesini önlemek için önbellekleme başlıkları gönderilir
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakımdayız</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f4f4f9; /* Açık arka plan */
            color: #333; /* Koyu metin */
            text-align: center;
        }
        .container {
            padding: 40px;
            border-radius: 8px;
            background-color: #fff; /* Beyaz içerik kutusu */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Hafif gölge */
            max-width: 600px;
            width: 90%;
        }
        h1 {
            color: #007bff; /* Mavi başlık rengi */
            font-size: 2.5em;
            margin-bottom: 0.5em;
        }
        p {
            font-size: 1.1em;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .icon {
            font-size: 3em;
            color: #ffc107; /* Sarı uyarı rengi */
            margin-bottom: 15px;
        }
        /* İsteğe bağlı: Bir süre sonra otomatik yenileme (örneğin 1 saat sonra) */
        /* meta http-equiv="refresh" content="3600" */
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">🛠️</div>
        <h1>Bakımdayız</h1>
        <p>Şu anda sitemizde planlı bir bakım çalışması yapıyoruz. Daha iyi bir deneyim sunmak için çalışıyoruz.</p>
        <p>Kısa süre içinde geri döneceğiz. Anlayışınız için teşekkür ederiz!</p>
        </div>
</body>
</html>
