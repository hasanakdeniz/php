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
    <!-- Tailwind CDN kaldırıldı, tüm stiller buraya taşındı -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        
        :root {
            --bg-start: #ffffff;
            --bg-end: #f0f0f0;
            --text-color: #333;
            --card-bg: #fff;
            --shadow-color: rgba(0, 0, 0, 0.08);
            --secondary-text: #777;
        }

        @media (prefers-color-scheme: dark) {
            :root {
                --bg-start: #1c1c1c;
                --bg-end: #0f0f0f;
                --text-color: #e5e5e5;
                --card-bg: #2d2d2d;
                --shadow-color: rgba(255, 255, 255, 0.05);
                --secondary-text: #a0a0a0;
            }
            .site-name-style { color: #e5e7eb; }
        }

        /* Simge dönüş animasyonu */
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .icon-spin {
            animation: rotate 8s linear infinite;
            display: inline-block;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            background: linear-gradient(135deg, var(--bg-start) 0%, var(--bg-end) 100%);
            color: var(--text-color);
            transition: background 0.5s ease-in-out, color 0.5s ease-in-out;
            padding: 2vw;
            box-sizing: border-box;
            overflow: hidden;
        }
        
        /* Tailwind classes converted to semantic/utility classes */
        .icon-style {
            font-size: 3.75rem; /* text-6xl */
            margin-bottom: 1rem; /* mb-4 */
        }
        
        .site-name-style {
            font-size: 1.125rem; /* text-lg */
            font-weight: 800; /* font-extrabold */
            margin-bottom: 0.5rem; /* mb-2 */
            text-transform: uppercase; /* uppercase */
            letter-spacing: 0.1em; /* tracking-widest */
            color: #1f2937; /* text-gray-800 */
        }

        .maintenance-box {
            width: 90vw;
            max-width: 550px;
            padding: 3vw;
            background-color: var(--card-bg);
            border-radius: 1rem;
            text-align: center;
            box-shadow: 0 10px 30px var(--shadow-color);
            transition: all 0.5s ease;
            box-sizing: border-box;
        }

        .title-text {
            font-size: clamp(2rem, 5vw, 3.5rem); 
            line-height: 1.1;
            font-weight: 800;
        }

        .subtitle-text {
            font-size: clamp(1rem, 2.5vw, 1.25rem);
            margin-top: clamp(1rem, 2vw, 1.5rem);
            color: var(--secondary-text);
        }

        .copyright-bar {
            position: fixed;
            bottom: 0;
            margin-bottom: 1rem; /* mb-4 */
            padding: 0.5rem; /* p-2 */
            text-align: center; /* text-center */
            width: 100%; /* w-full */

            font-size: clamp(0.75rem, 1.5vw, 0.9rem);
            color: var(--secondary-text);
        }
        .copyright-bar a {
            text-decoration: underline;
            cursor: pointer;
        }


        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-content {
            background-color: var(--card-bg);
            padding: 1.5rem;
            border-radius: 0.75rem;
            width: 90%;
            max-width: 600px;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
            animation: fadeIn 0.3s ease-out;
            color: var(--text-color);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .popup-h3 {
            font-size: 1.5rem; /* text-2xl */
            font-weight: 700; /* font-bold */
            margin-bottom: 1rem; /* mb-4 */
        }

        .modal-content p {
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .modal-content a {
            cursor: pointer;
            color: var(--secondary-text);
            text-decoration: none;
            font-weight: 600;
            display: block;
            text-align: center;
            margin-top: 1.5rem;
        }

        .modal-content a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Ana Bakım Kutusu -->
    <div class="maintenance-box">
        <div id="icon-container" class="icon-style icon-spin">⚙️</div>
        <p id="site-name-top" class="site-name-style"></p>
        <h1 id="main-title" class="title-text">Bakımdayız</h1>
        <p id="sub-text" class="subtitle-text">Planlı güncellemeler yapıyoruz. Kısa süre içinde tekrar yayında olacağız.</p>
    </div>

    <!-- Pop-up Modal Kaplaması -->
    <div id="popup-overlay" class="modal-overlay">
        <div id="popup-modal" class="modal-content">

            <!-- Gizlilik Politikası İçeriği (Başlangıçta Gizli) -->
            <div id="privacy-content" style="display: none;">
                <h3 class="popup-h3" id="pp-title">Gizlilik Politikası</h3>
                <p id="pp-p1">Bu web sitesi şu anda bakım aşamasında olduğu için sizden hiçbir kişisel veri toplamamaktadır. Erişime açıldığında, güncel gizlilik politikamız geçerli olacaktır.</p>
                <p id="pp-p2">Bakım durumu boyunca IP adresiniz, tarayıcı türünüz ve ziyaret saatiniz gibi standart sunucu günlükleri kaydedilebilir. Bu veriler yalnızca güvenlik ve site sağlığı analizi amacıyla kullanılır ve üçüncü taraflarla paylaşılmaz.</p>
                <a onclick="closePopup()">- kapat -</a>
            </div>

            <!-- Kullanıcı Sözleşmesi İçeriği (Başlangıçta Gizli) -->
            <div id="terms-content" style="display: none;">
                <h3 class="popup-h3" id="tos-title">Kullanıcı Sözleşmesi</h3>
                <p id="tos-p1">Bu web sitesi şu anda bakım aşamasında olduğundan, bu süre zarfında herhangi bir hizmet veya işlevsellik sunulmamaktadır. Bu nedenle, aktif bir kullanıcı sözleşmesi bu süre için geçerli değildir.</p>
                <p id="tos-p2">Site tekrar yayına girdiğinde, sitemizi kullanmaya devam etmeniz, o tarihte yayımlanan Kullanıcı Sözleşmesinin hüküm ve koşullarını kabul ettiğiniz anlamına gelecektir.</p>
                <a onclick="closePopup()">- kapat -</a>
            </div>
            
        </div>
    </div>
    
    <!-- Copyright Kısmı (Sayfanın Altında) -->
    <div class="copyright-bar">
        &copy; <span id="current-year"></span> <span id="site-name-copyright">YourCompany</span>. 
        <a onclick="openPopup('privacy-content')">Gizlilik Politikası</a> | 
        <a onclick="openPopup('terms-content')">Kullanıcı Sözleşmesi</a>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            
            const SUPPORTED_LANGUAGES = {
                'tr': ['Bakımdayız', 'Planlı güncellemeler yapıyoruz. Kısa süre içinde tekrar yayında olacağız.'],
                'en': ['Under Maintenance', 'We are performing scheduled updates. We will be back online shortly.'],
                'zh': ['系统维护中', '我们正在进行计划内的更新。我们将很快重新上线。'],
                'es': ['En Mantenimiento', 'Estamos realizando actualizaciones programadas. Volveremos a estar en línea pronto.'],
                'hi': ['रखरखाव में', 'हम निर्धारित अपडेट कर रहे हैं। हम जल्द ही वापस ऑनलाइन होंगे।'],
                'ar': ['تحت الصيانة', 'نقوم بتحديثات مجدولة. سنعود للعمل قريباً.'],
                'pt': ['Em Manutenção', 'Estamos realizando atualizações programadas. Voltaremos em breve.'],
                'ru': ['На обслуживании', 'Мы проводим плановые обновления. Скоро вернемся в сеть.'],
                'ja': ['メンテナンス中', '予定されたアップデートを実施しています。まもなく再開します。'],
                'de': ['Wartungsarbeiten', 'Wir führen geplante Updates durch. Wir sind in Kürze wieder online.'],
                'fr': ['En Maintenance', 'Nous effectuons des mises à jour planifiées. Nous serons bientôt de retour en ligne.'],
            };

            const browserLang = navigator.language.split('-')[0].toLowerCase();
            const content = SUPPORTED_LANGUAGES[browserLang] || SUPPORTED_LANGUAGES['en'];

            document.getElementById('main-title').textContent = content[0];
            document.getElementById('sub-text').textContent = content[1];
            
            document.getElementById('current-year').textContent = new Date().getFullYear();

            function getSiteName() {
                let hostname = window.location.hostname;
                
                if (hostname.startsWith('www.')) {
                    hostname = hostname.substring(4);
                }

                const firstDotIndex = hostname.indexOf('.');

                if (firstDotIndex === -1) {
                    return hostname;
                }
                
                return hostname.substring(0, firstDotIndex);
            }

            const siteName = getSiteName().toUpperCase();
            document.getElementById('site-name-top').textContent = siteName;
            document.getElementById('site-name-copyright').textContent = siteName;


            const popupOverlay = document.getElementById('popup-overlay');
            const privacyContent = document.getElementById('privacy-content');
            const termsContent = document.getElementById('terms-content');

            function playClickSound() {
                try {
                    const audioContext = new (window.AudioContext || window.webkitAudioContext)();
                    const oscillator = audioContext.createOscillator();
                    const gainNode = audioContext.createGain();

                    oscillator.connect(gainNode);
                    gainNode.connect(audioContext.destination);

                    oscillator.type = 'sine';
                    oscillator.frequency.setValueAtTime(440, audioContext.currentTime);
                    gainNode.gain.setValueAtTime(0.3, audioContext.currentTime);

                    gainNode.gain.exponentialRampToValueAtTime(0.0001, audioContext.currentTime + 0.5);
                    
                    oscillator.start();
                    oscillator.stop(audioContext.currentTime + 0.5);
                } catch (e) {
                    console.error("Audio API desteklenmiyor veya başlatılamadı:", e);
                }
            }

            function playCloseSound() {
                try {
                    const audioContext = new (window.AudioContext || window.webkitAudioContext)();
                    const oscillator = audioContext.createOscillator();
                    const gainNode = audioContext.createGain();

                    oscillator.connect(gainNode);
                    gainNode.connect(audioContext.destination);

                    oscillator.type = 'sawtooth';
                    oscillator.frequency.setValueAtTime(150, audioContext.currentTime);
                    gainNode.gain.setValueAtTime(0.2, audioContext.currentTime);

                    gainNode.gain.exponentialRampToValueAtTime(0.0001, audioContext.currentTime + 0.3); 
                    
                    oscillator.start();
                    oscillator.stop(audioContext.currentTime + 0.3);
                } catch (e) {
                    console.error("Audio API desteklenmiyor veya başlatılamadı:", e);
                }
            }


            window.openPopup = function(contentId) {
                privacyContent.style.display = 'none';
                termsContent.style.display = 'none';

                if (contentId === 'privacy-content') {
                    privacyContent.style.display = 'block';
                } else if (contentId === 'terms-content') {
                    termsContent.style.display = 'block';
                }

                popupOverlay.style.display = 'flex';
                document.body.style.overflow = 'hidden';
                playClickSound();
            };

            window.closePopup = function() {
                popupOverlay.style.display = 'none';
                document.body.style.overflow = '';
                playCloseSound();
            };
        });
    </script>

</body>
</html>
