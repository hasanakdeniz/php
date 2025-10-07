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
    <title>Tam Ekran Bakım</title>
    <style>
        /* CSS Reset ve Tam Ekran Tanımları */
        html, body {
            margin: 0;
            padding: 0;
            /* Bu iki özellik, sayfanın tarayıcının TAM yüksekliğini almasını sağlar */
            height: 100%; 
            min-height: 100%; 
        }

        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            /* Sayfa içeriği az olsa bile, kapsayıcı tam yüksekliği kullanır */
            min-height: 100vh; 
            transition: background-color 0.4s, color 0.4s;
            text-align: center;
            /* Mobil kenar boşluğu */
            padding: 0 20px; 
            box-sizing: border-box; 
        }

        /* --- TEMA VE İÇERİK STİLLERİ --- */

        .content {
            padding: 40px;
            max-width: 600px; 
            width: 100%; 
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: background 0.4s, box-shadow 0.4s;
            box-sizing: border-box;
        }

        .icon {
            font-size: 3.5em;
            margin-bottom: 25px;
            color: #007bff; 
        }

        h1 {
            font-size: 2.2em;
            font-weight: 600;
            margin-bottom: 15px;
        }

        p {
            font-size: 1.1em;
            line-height: 1.6;
            margin-top: 5px;
        }
        
        /* AÇIK TEMA */
        body {
            background-color: #f8f9fa;
            color: #212529;
        }

        .content {
            background: #ffffff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        /* KOYU TEMA */
        @media (prefers-color-scheme: dark) {
            body {
                background-color: #1e1e1e;
                color: #f1f1f1;
            }

            .content {
                background: #2d2d30;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            }

            .icon {
                color: #66b3ff;
            }
            h1 {
                color: #f1f1f1;
            }
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="icon">🚧</div>
        <h1 id="main-title"></h1>
        <p id="main-message"></p>
        <p id="sub-message"></p>
    </div>

    <script>
        // ... (Dil kodları aynı kaldı, burada kısaltılmıştır) ...
        const messages = {
            'tr': { title: "Güncelleniyoruz!", msg1: "Sizlere daha iyi hizmet sunmak adına sitemizde kısa bir bakım çalışması yürütülmektedir.", msg2: "Çok yakında, yeni ve geliştirilmiş özelliklerle geri döneceğiz." },
            'en': { title: "Under Maintenance", msg1: "We are performing a brief maintenance update to provide you with a better experience.", msg2: "We will be back shortly with new and improved features." },
            'de': { title: "Wartungsarbeiten", msg1: "Wir führen gerade eine kurze Wartung durch, um Ihnen ein besseres Erlebnis zu bieten.", msg2: "Wir sind bald mit neuen und verbesserten Funktionen zurück." },
            'fr': { title: "Maintenance en cours", msg1: "Nous effectuons une courte maintenance pour vous offrir une meilleure expérience.", msg2: "Nous reviendrons bientôt avec de nouvelles fonctionnalités améliorées." },
            'es': { title: "Mantenimiento", msg1: "Estamos realizando una breve actualización de mantenimiento para brindarle una mejor experiencia.", msg2: "Volveremos pronto con funciones nuevas y mejoradas." },
            'it': { title: "Manutenzione in corso", msg1: "Stiamo eseguendo un breve aggiornamento di manutenzione per offrirti un'esperienza migliore.", msg2: "Torneremo presto con funzionalità nuove e migliorate." },
            'ru': { title: "Ведутся работы", msg1: "Мы проводим краткое техническое обслуживание для улучшения нашего сервиса.", msg2: "Скоро мы вернемся с новыми и улучшенными функциями." },
            'pt': { title: "Em Manutenção", msg1: "Estamos realizando uma breve atualização de manutenção para lhe proporcionar uma experiência melhor.", msg2: "Voltaremos em breve com recursos novos e aprimorados." },
            'ar': { title: "تحت الصيانة", msg1: "نقوم بإجراء تحديث صيانة قصير لتوفير تجربة أفضل لك.", msg2: "سنعود قريباً بميزات جديدة ومحسّنة." },
            'zh': { title: "系统维护中", msg1: "我们正在进行短暂的维护更新，以提供更好的体验。", msg2: "很快，我们将带着全新和改进的功能回来。" }
        };

        function loadContent() {
            const userLang = navigator.language.split('-')[0]; 
            const lang = messages[userLang] ? userLang : 'tr';
            const content = messages[lang];
            
            document.getElementById('main-title').textContent = content.title;
            document.getElementById('main-message').textContent = content.msg1;
            document.getElementById('sub-message').textContent = content.msg2;

            document.documentElement.lang = lang;
        }

        window.onload = loadContent;
    </script>
</body>
</html>
