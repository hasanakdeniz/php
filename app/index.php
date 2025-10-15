<!DOCTYPE html>
<html lang="auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakım Modu - SITEMIZ</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 50%, #2a2a2a 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: #e0e0e0;
            line-height: 1.6;
        }

        .container {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 50px 40px;
            text-align: center;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.25),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            max-width: 480px;
            width: 100%;
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        }

        .emoji {
            font-size: 4rem;
            margin-bottom: 25px;
            animation: float 3s ease-in-out infinite;
            filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.3));
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(5deg); }
        }

        h1 {
            font-size: 2.2rem;
            margin-bottom: 15px;
            background: linear-gradient(135deg, #ffffff, #a0a0a0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 300;
            letter-spacing: -0.5px;
        }

        .site-name {
            font-size: 1.1rem;
            margin-bottom: 25px;
            color: #b0b0b0;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 3px;
            position: relative;
            display: inline-block;
        }

        .site-name::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 1px;
            background: linear-gradient(90deg, transparent, #808080, transparent);
        }

        p {
            font-size: 1.05rem;
            margin-bottom: 35px;
            color: #c0c0c0;
            font-weight: 300;
            line-height: 1.7;
        }

        .progress-container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            height: 6px;
            margin: 40px 0;
            overflow: hidden;
            position: relative;
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, #808080, #ffffff, #808080);
            border-radius: 12px;
            animation: progress 2s ease-in-out infinite;
            position: relative;
        }

        .progress-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            animation: shine 2s ease-in-out infinite;
        }

        @keyframes progress {
            0% { transform: translateX(-100%); }
            50% { transform: translateX(0%); }
            100% { transform: translateX(100%); }
        }

        @keyframes shine {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .status-info {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 30px 0;
            flex-wrap: wrap;
        }

        .status-item {
            text-align: center;
        }

        .status-value {
            font-size: 1.8rem;
            font-weight: 200;
            color: #ffffff;
            margin-bottom: 5px;
        }

        .status-label {
            font-size: 0.85rem;
            color: #a0a0a0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .social-links {
            margin-top: 35px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-links a {
            color: #b0b0b0;
            font-size: 1.4rem;
            transition: all 0.3s ease;
            text-decoration: none;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        .social-links a:hover {
            color: #ffffff;
            transform: translateY(-2px);
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .copyright {
            margin-top: 30px;
            font-size: 0.8rem;
            color: #808080;
            line-height: 1.5;
        }

        .copyright .site-name {
            font-size: 0.8rem;
            margin: 0;
            display: inline;
            color: #a0a0a0;
            font-weight: 400;
            letter-spacing: 1px;
        }

        .legal-links {
            margin-top: 15px;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .legal-links a {
            color: #909090;
            text-decoration: none;
            font-size: 0.75rem;
            padding: 6px 12px;
            border-radius: 15px;
            transition: all 0.3s ease;
            border: 1px solid transparent;
            background: rgba(255, 255, 255, 0.03);
        }

        .legal-links a:hover {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(255, 255, 255, 0.2);
        }

        /* Modal Stilleri */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(15px);
            z-index: 1000;
            animation: fadeIn 0.4s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.9);
            background: rgba(30, 30, 30, 0.95);
            padding: 40px;
            border-radius: 20px;
            text-align: left;
            box-shadow: 
                0 30px 60px rgba(0, 0, 0, 0.4),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            max-width: 550px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            animation: modalPop 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        @keyframes modalPop {
            to { transform: translate(-50%, -50%) scale(1); }
        }

        .modal-header {
            text-align: center;
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .modal-emoji {
            font-size: 2.5rem;
            margin-bottom: 15px;
            animation: spin 1s ease;
        }

        @keyframes spin {
            from { transform: rotate(0deg) scale(0.8); }
            to { transform: rotate(360deg) scale(1); }
        }

        .modal-title {
            font-size: 1.5rem;
            margin-bottom: 8px;
            background: linear-gradient(135deg, #ffffff, #a0a0a0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 300;
        }

        .modal-subtitle {
            font-size: 0.9rem;
            color: #a0a0a0;
            margin-bottom: 20px;
        }

        .modal-body {
            margin-bottom: 30px;
            line-height: 1.7;
            color: #c0c0c0;
        }

        .modal-body h3 {
            color: #ffffff;
            margin: 20px 0 12px 0;
            font-size: 1.1rem;
            font-weight: 400;
        }

        .modal-body p {
            margin-bottom: 15px;
            font-size: 0.9rem;
            color: #b0b0b0;
        }

        .modal-body ul {
            margin: 12px 0 18px 20px;
        }

        .modal-body li {
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: #b0b0b0;
        }

        .modal-close {
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 12px 30px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 400;
            transition: all 0.3s ease;
            font-size: 0.9rem;
            display: block;
            margin: 25px auto 0 auto;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .modal-close:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .container {
                padding: 40px 25px;
                margin: 10px;
            }
            
            h1 {
                font-size: 1.8rem;
            }
            
            .site-name {
                font-size: 1rem;
            }
            
            .status-info {
                gap: 20px;
            }

            .modal-content {
                padding: 30px 20px;
            }

            .social-links a {
                width: 40px;
                height: 40px;
                font-size: 1.2rem;
            }

            .legal-links {
                flex-direction: column;
                gap: 8px;
            }
        }

        @media (max-width: 480px) {
            .emoji {
                font-size: 3.2rem;
            }
            
            h1 {
                font-size: 1.6rem;
            }
            
            .modal-title {
                font-size: 1.3rem;
            }
            
            .status-value {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="emoji">⚙️</div>
        <h1 id="title">Sistem Bakımda</h1>
        <div class="site-name" id="siteNameDisplay">SITEMIZ</div>
        <p id="message">Web sitemiz şu anda planlı bakım çalışmaları nedeniyle geçici olarak kullanılamıyor. Hizmetinize en kısa sürede dönmek için çalışıyoruz.</p>
        
        <div class="progress-container">
            <div class="progress-bar"></div>
        </div>

        <div class="status-info">
            <div class="status-item">
                <div class="status-value" id="completionPercent">%85</div>
                <div class="status-label" id="completionLabel">Tamamlanma</div>
            </div>
            <div class="status-item">
                <div class="status-value" id="timeRemaining">2s 15dk</div>
                <div class="status-label" id="timeLabel">Tahmini Süre</div>
            </div>
        </div>

        <div class="social-links">
            <a href="#" title="Twitter">📱</a>
            <a href="#" title="Instagram">💼</a>
            <a href="#" title="LinkedIn">🔗</a>
            <a href="#" title="Email">📧</a>
        </div>

        <div class="copyright">
            © <span id="currentYear">2025</span> • <span class="site-name" id="copyrightSiteName">SITEMIZ</span> • <span id="copyrightText">Tüm hakları saklıdır.</span>
        </div>

        <div class="legal-links">
            <a href="#" id="privacyPolicyLink">Gizlilik Politikası</a>
            <a href="#" id="termsOfUseLink">Kullanım Koşulları</a>
        </div>
    </div>

    <!-- Gizlilik Politikası Modal -->
    <div class="modal" id="privacyModal">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-emoji">🔒</div>
                <h3 class="modal-title" id="privacyModalTitle">Gizlilik Politikası</h3>
                <div class="modal-subtitle">Son güncelleme: <span id="privacyDate"></span></div>
            </div>
            <div class="modal-body" id="privacyModalBody">
                <!-- İçerik JavaScript ile eklenecek -->
            </div>
            <button class="modal-close" onclick="closeModal('privacyModal')">- KAPAT -</button>
        </div>
    </div>

    <!-- Kullanım Koşulları Modal -->
    <div class="modal" id="termsModal">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-emoji">📄</div>
                <h3 class="modal-title" id="termsModalTitle">Kullanım Koşulları</h3>
                <div class="modal-subtitle">Son güncelleme: <span id="termsDate"></span></div>
            </div>
            <div class="modal-body" id="termsModalBody">
                <!-- İçerik JavaScript ile eklenecek -->
            </div>
            <button class="modal-close" onclick="closeModal('termsModal')">- KAPAT -</button>
        </div>
    </div>

    <script>
        // Site adını URL'den al ve BÜYÜK harf yap
        function getSiteNameFromURL() {
            const hostname = window.location.hostname;
            let siteName = hostname.replace(/^www\./, '');
            siteName = siteName.split('.')[0];
            return siteName.toUpperCase();
        }

        // Dil otomatik algılama
        function getBrowserLanguage() {
            const browserLang = navigator.language || navigator.userLanguage;
            return browserLang.startsWith('tr') ? 'tr' : 'en';
        }

        const siteName = getSiteNameFromURL();
        const currentLang = getBrowserLanguage();

        const translations = {
            tr: {
                title: "Sistem Bakımda",
                message: "Web sitemiz şu anda planlı bakım çalışmaları nedeniyle geçici olarak kullanılamıyor. Hizmetinize en kısa sürede dönmek için çalışıyoruz.",
                completionLabel: "Tamamlanma",
                timeLabel: "Tahmini Süre",
                copyright: "Tüm hakları saklıdır.",
                privacyPolicy: "Gizlilik Politikası",
                termsOfUse: "Kullanım Koşulları"
            },
            en: {
                title: "System Maintenance",
                message: "Our website is currently unavailable due to planned maintenance work. We are working to return to service as soon as possible.",
                completionLabel: "Completion",
                timeLabel: "Estimated Time",
                copyright: "All rights reserved.",
                privacyPolicy: "Privacy Policy",
                termsOfUse: "Terms of Use"
            }
        };

        // Gizlilik politikası içerikleri
        const privacyContent = {
            tr: `
                <h3>Veri Toplama</h3>
                <p>${siteName} olarak, ziyaretçilerimizin gizliliğine önem veriyoruz. Bakım sayfası sırasında aşağıdaki verileri topluyoruz:</p>
                <ul>
                    <li>IP adresi (anonimleştirilmiş)</li>
                    <li>Tarayıcı türü ve versiyonu</li>
                    <li>Ziyaret saati ve tarihi</li>
                </ul>

                <h3>Veri Güvenliği</h3>
                <p>Topladığımız sınırlı veriler uygun güvenlik önlemleriyle korunmaktadır.</p>

                <h3>Değişiklikler</h3>
                <p>Bu gizlilik politikasını güncelleme hakkını saklı tutarız. Değişiklikler bu sayfada yayınlanacaktır.</p>
            `,
            en: `
                <h3>Data Collection</h3>
                <p>At ${siteName}, we value our visitors' privacy. During maintenance, we collect the following data:</p>
                <ul>
                    <li>IP address (anonymized)</li>
                    <li>Browser type and version</li>
                    <li>Visit time and date</li>
                </ul>

                <h3>Data Security</h3>
                <p>The limited data we collect is protected with appropriate security measures.</p>

                <h3>Changes</h3>
                <p>We reserve the right to update this privacy policy. Changes will be posted on this page.</p>
            `
        };

        const termsContent = {
            tr: `
                <h3>Kabul</h3>
                <p>Bu bakım sayfasını kullanarak, aşağıdaki kullanım koşullarını kabul etmiş olursunuz.</p>

                <h3>Hizmet Kesintisi</h3>
                <p>${siteName} şu anda planlı bakım çalışmaları nedeniyle geçici olarak kullanılamamaktadır.</p>

                <h3>Kullanıcı Sorumlulukları</h3>
                <p>Bu sayfayı kullanırken:</p>
                <ul>
                    <li>Sayfayı kötüye kullanmamayı kabul edersiniz</li>
                    <li>Otomatik botlar veya script'ler kullanmayacaksınız</li>
                </ul>

                <h3>Değişiklik Hakkı</h3>
                <p>${siteName}, bu kullanım koşullarını herhangi bir zamanda değiştirme hakkını saklı tutar.</p>
            `,
            en: `
                <h3>Acceptance</h3>
                <p>By using this maintenance page, you accept the following terms of use.</p>

                <h3>Service Interruption</h3>
                <p>${siteName} is currently temporarily unavailable due to planned maintenance work.</p>

                <h3>User Responsibilities</h3>
                <p>When using this page, you agree to:</p>
                <ul>
                    <li>Not misuse the page</li>
                    <li>Not use automated bots or scripts</li>
                </ul>

                <h3>Right to Modify</h3>
                <p>${siteName} reserves the right to modify these terms of use at any time.</p>
            `
        };

        // Sayfa yüklendiğinde
        document.addEventListener('DOMContentLoaded', function() {
            const translation = translations[currentLang];
            
            // Temel içerikleri güncelle
            document.getElementById('title').textContent = translation.title;
            document.getElementById('message').textContent = translation.message;
            document.getElementById('completionLabel').textContent = translation.completionLabel;
            document.getElementById('timeLabel').textContent = translation.timeLabel;
            document.getElementById('copyrightText').textContent = translation.copyright;
            document.getElementById('privacyPolicyLink').textContent = translation.privacyPolicy;
            document.getElementById('termsOfUseLink').textContent = translation.termsOfUse;
            
            // Site adını ayarla
            document.getElementById('siteNameDisplay').textContent = siteName;
            document.getElementById('copyrightSiteName').textContent = siteName;
            
            // Yılı güncelle
            document.getElementById('currentYear').textContent = new Date().getFullYear();
            
            // Modal içeriklerini güncelle
            document.getElementById('privacyModalTitle').textContent = translation.privacyPolicy;
            document.getElementById('termsModalTitle').textContent = translation.termsOfUse;
            document.getElementById('privacyModalBody').innerHTML = privacyContent[currentLang] || privacyContent.tr;
            document.getElementById('termsModalBody').innerHTML = termsContent[currentLang] || termsContent.tr;
            
            // Tarihleri güncelle
            const now = new Date();
            document.getElementById('privacyDate').textContent = now.toLocaleDateString(currentLang);
            document.getElementById('termsDate').textContent = now.toLocaleDateString(currentLang);
            
            // Rastgele ilerleme yüzdesi ve süre
            updateProgressInfo();
            
            // Emoji değiştirme
            rotateEmoji();
        });

        // İlerleme bilgilerini güncelle
        function updateProgressInfo() {
            const completion = 75 + Math.floor(Math.random() * 20); // %75-95 arası
            const hours = Math.floor(Math.random() * 3); // 0-2 saat
            const minutes = 15 + Math.floor(Math.random() * 45); // 15-59 dakika
            
            document.getElementById('completionPercent').textContent = `%${completion}`;
            
            if (hours > 0) {
                document.getElementById('timeRemaining').textContent = `${hours}s ${minutes}dk`;
            } else {
                document.getElementById('timeRemaining').textContent = `${minutes}dk`;
            }
            
            // Her 30 saniyede bir güncelle
            setTimeout(updateProgressInfo, 30000);
        }

        // Emoji değiştirme
        function rotateEmoji() {
            const emojis = ['⚙️', '🔧', '🛠️', '⏳', '📱', '💻', '🔨', '🎯'];
            const emojiElement = document.querySelector('.emoji');
            let currentIndex = 0;
            
            setInterval(() => {
                currentIndex = (currentIndex + 1) % emojis.length;
                emojiElement.textContent = emojis[currentIndex];
            }, 5000);
        }

        // Modal işlemleri
        document.getElementById('privacyPolicyLink').addEventListener('click', function(e) {
            e.preventDefault();
            openModal('privacyModal');
        });

        document.getElementById('termsOfUseLink').addEventListener('click', function(e) {
            e.preventDefault();
            openModal('termsModal');
        });

        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'block';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        // Modal dışına tıklayınca kapat
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('modal')) {
                closeModal(e.target.id);
            }
        });
    </script>
</body>
</html>
