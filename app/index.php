<!DOCTYPE html>
<html lang="auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🚀 Bakım Modu</title>
    <style>
        :root {
            --primary: #667eea;
            --secondary: #764ba2;
            --accent: #f093fb;
            --text: #2d3748;
            --bg: #f7fafc;
        }

        [data-theme="blue"] { --primary: #667eea; --secondary: #764ba2; }
        [data-theme="pink"] { --primary: #f093fb; --secondary: #f5576c; }
        [data-theme="green"] { --primary: #4fd1c5; --secondary: #38b2ac; }
        [data-theme="purple"] { --primary: #9f7aea; --secondary: #6b46c1; }
        [data-theme="orange"] { --primary: #ed8936; --secondary: #dd6b20; }
        [data-theme="red"] { --primary: #fc8181; --secondary: #e53e3e; }
        [data-theme="teal"] { --primary: #38b2ac; --secondary: #319795; }
        [data-theme="yellow"] { --primary: #ecc94b; --secondary: #d69e2e; }
        [data-theme="indigo"] { --primary: #5a67d8; --secondary: #4c51bf; }
        [data-theme="cyan"] { --primary: #0bc5ea; --secondary: #00b5d8; }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: var(--text);
            transition: all 0.3s ease;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 25px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            max-width: 500px;
            width: 100%;
            animation: float 6s ease-in-out infinite;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
        }

        .emoji {
            font-size: 4.5rem;
            margin-bottom: 20px;
            animation: bounce 2s infinite;
            filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.1));
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-15px); }
            60% { transform: translateY(-7px); }
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }

        .site-name {
            font-size: 1.4rem;
            margin-bottom: 20px;
            opacity: 0.9;
            font-weight: 700;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            line-height: 1.6;
            opacity: 0.8;
        }

        .progress-container {
            background: #e2e8f0;
            border-radius: 15px;
            height: 10px;
            margin: 30px 0;
            overflow: hidden;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            border-radius: 15px;
            animation: progress 2.5s ease-in-out infinite;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        @keyframes progress {
            0% { transform: translateX(-100%); }
            50% { transform: translateX(0%); }
            100% { transform: translateX(100%); }
        }

        .controls {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        select {
            padding: 14px 20px;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            background: white;
            border: 2px solid rgba(0, 0, 0, 0.1);
            min-width: 160px;
            font-weight: 500;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23666' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 20px center;
            background-size: 12px;
        }

        select:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            border-color: var(--primary);
        }

        select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .copyright {
            margin-top: 25px;
            font-size: 0.9rem;
            opacity: 0.7;
            color: var(--text);
            line-height: 1.5;
        }

        .copyright .site-name {
            font-size: 0.9rem;
            margin: 0;
            display: inline;
            color: var(--primary);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .legal-links {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .legal-links a {
            color: var(--primary);
            text-decoration: none;
            font-size: 0.85rem;
            padding: 5px 10px;
            border-radius: 15px;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }

        .legal-links a:hover {
            background: rgba(102, 126, 234, 0.1);
            border-color: var(--primary);
            transform: translateY(-2px);
        }

        /* Modal Stilleri */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(10px);
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
            transform: translate(-50%, -50%) scale(0.8);
            background: linear-gradient(135deg, #ffffff, #f8fafc);
            padding: 40px;
            border-radius: 25px;
            text-align: left;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            animation: modalPop 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        @keyframes modalPop {
            to { transform: translate(-50%, -50%) scale(1); }
        }

        .modal-header {
            text-align: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid rgba(0, 0, 0, 0.1);
        }

        .modal-emoji {
            font-size: 3rem;
            margin-bottom: 15px;
            animation: spin 1s ease;
            filter: drop-shadow(0 3px 10px rgba(0, 0, 0, 0.2));
        }

        @keyframes spin {
            from { transform: rotate(0deg) scale(0.5); }
            to { transform: rotate(360deg) scale(1); }
        }

        .modal-title {
            font-size: 1.8rem;
            margin-bottom: 10px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }

        .modal-subtitle {
            font-size: 1rem;
            opacity: 0.7;
            margin-bottom: 20px;
        }

        .modal-body {
            margin-bottom: 30px;
            line-height: 1.7;
        }

        .modal-body h3 {
            color: var(--primary);
            margin: 20px 0 10px 0;
            font-size: 1.2rem;
        }

        .modal-body p {
            margin-bottom: 15px;
            font-size: 0.95rem;
        }

        .modal-body ul {
            margin: 10px 0 15px 20px;
        }

        .modal-body li {
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .modal-close {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 1rem;
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
            display: block;
            margin: 20px auto 0 auto;
            text-align: center;
        }

        .modal-close:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.6);
        }

        @media (max-width: 768px) {
            .container {
                padding: 30px 20px;
                margin: 10px;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .site-name {
                font-size: 1.2rem;
            }
            
            .controls {
                flex-direction: column;
                align-items: center;
            }
            
            select {
                width: 100%;
                max-width: 250px;
            }

            .modal-content {
                padding: 25px 20px;
            }

            .legal-links {
                flex-direction: column;
                gap: 8px;
            }
        }

        @media (max-width: 480px) {
            .emoji {
                font-size: 3.5rem;
            }
            
            h1 {
                font-size: 1.8rem;
            }
            
            .modal-title {
                font-size: 1.4rem;
            }
        }
    </style>
</head>
<body data-theme="blue">
    <div class="container">
        <div class="emoji">🚧</div>
        <h1 id="title">Bakım Modu</h1>
        <div class="site-name" id="siteNameDisplay">SITEMIZ</div>
        <p id="message">Sitemiz şu anda bakım çalışmaları nedeniyle geçici olarak kullanılamıyor. Anlayışınız için teşekkür ederiz!</p>
        
        <div class="progress-container">
            <div class="progress-bar"></div>
        </div>

        <div class="controls">
            <select id="languageSelect">
                <option value="tr">🌍 Türkçe</option>
                <option value="en">🌎 English</option>
                <option value="de">🌍 Deutsch</option>
                <option value="fr">🌍 Français</option>
                <option value="es">🌍 Español</option>
                <option value="it">🌍 Italiano</option>
                <option value="ja">🌏 日本語</option>
                <option value="ko">🌏 한국어</option>
                <option value="ar">🌍 العربية</option>
                <option value="ru">🌍 Русский</option>
            </select>

            <select id="themeSelect">
                <option value="blue">🎨 Mavi Tema</option>
                <option value="pink">💖 Pembe Tema</option>
                <option value="green">🌿 Yeşil Tema</option>
                <option value="purple">🍇 Mor Tema</option>
                <option value="orange">🍊 Turuncu Tema</option>
                <option value="red">❤️ Kırmızı Tema</option>
                <option value="teal">🔷 Teal Tema</option>
                <option value="yellow">⭐ Sarı Tema</option>
                <option value="indigo">🌀 Indigo Tema</option>
                <option value="cyan">💎 Camgöbeği</option>
            </select>
        </div>

        <div class="copyright">
            © <span id="currentYear">2025</span> • <span class="site-name" id="copyrightSiteName">SITEMIZ</span> • <span id="copyrightText">Tüm hakları saklıdır.</span>
        </div>

        <div class="legal-links">
            <a href="#" id="privacyPolicyLink">🔒 Gizlilik Politikası</a>
            <a href="#" id="termsOfUseLink">📝 Kullanım Koşulları</a>
        </div>
    </div>

    <!-- Ayarlar Modal -->
    <div class="modal" id="settingsModal">
        <div class="modal-content">
            <div class="modal-emoji">🎨</div>
            <h3 class="modal-title" id="modalTitle">Tema Seçildi! ✨</h3>
            <p class="modal-message" id="modalMessage">Yeni renkler harika görünüyor! Tercihiniz kaydedildi. 🌈</p>
            <button class="modal-close" id="modalClose">Harika! 🚀</button>
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
                <div class="modal-emoji">📝</div>
                <h3 class="modal-title" id="termsModalTitle">Kullanım Koşulları</h3>
                <div class="modal-subtitle">Son güncelleme: <span id="termsDate"></span></div>
            </div>
            <div class="modal-body" id="termsModalBody">
                <!-- İçerik JavaScript ile eklenecek -->
            </div>
            <button class="modal-close" onclick="closeModal('termsModal')">- KAPAT -</button>
        </div>
    </div>

    <!-- Ses Elementleri -->
    <audio id="openSound" preload="auto">
        <source src="data:audio/wav;base64,UklGRigAAABXQVZFZm10IBAAAAABAAEARKwAAIhYAQACABAAZGF0YQQAAAAAAA==" type="audio/wav">
    </audio>
    <audio id="closeSound" preload="auto">
        <source src="data:audio/wav;base64,UklGRigAAABXQVZFZm10IBAAAAABAAEARKwAAIhYAQACABAAZGF0YQQAAAAAAA==" type="audio/wav">
    </audio>

    <script>
        // Basit ses efektleri oluştur
        function createOpenSound() {
            const audioContext = new (window.AudioContext || window.webkitAudioContext)();
            const oscillator = audioContext.createOscillator();
            const gainNode = audioContext.createGain();
            
            oscillator.connect(gainNode);
            gainNode.connect(audioContext.destination);
            
            oscillator.frequency.setValueAtTime(800, audioContext.currentTime);
            oscillator.frequency.exponentialRampToValueAtTime(1200, audioContext.currentTime + 0.2);
            
            gainNode.gain.setValueAtTime(0.1, audioContext.currentTime);
            gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.3);
            
            oscillator.start(audioContext.currentTime);
            oscillator.stop(audioContext.currentTime + 0.3);
        }

        function createCloseSound() {
            const audioContext = new (window.AudioContext || window.webkitAudioContext)();
            const oscillator = audioContext.createOscillator();
            const gainNode = audioContext.createGain();
            
            oscillator.connect(gainNode);
            gainNode.connect(audioContext.destination);
            
            oscillator.frequency.setValueAtTime(1200, audioContext.currentTime);
            oscillator.frequency.exponentialRampToValueAtTime(600, audioContext.currentTime + 0.2);
            
            gainNode.gain.setValueAtTime(0.1, audioContext.currentTime);
            gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.3);
            
            oscillator.start(audioContext.currentTime);
            oscillator.stop(audioContext.currentTime + 0.3);
        }

        const translations = {
            tr: {
                title: "Bakım Modu",
                message: "Sitemiz şu anda bakım çalışmaları nedeniyle geçici olarak kullanılamıyor. Anlayışınız için teşekkür ederiz!",
                themes: ["🎨 Mavi Tema", "💖 Pembe Tema", "🌿 Yeşil Tema", "🍇 Mor Tema", "🍊 Turuncu Tema", "❤️ Kırmızı Tema", "🔷 Teal Tema", "⭐ Sarı Tema", "🌀 Indigo Tema", "💎 Camgöbeği"],
                modalTitle: "Tema Seçildi! ✨",
                modalMessage: "Yeni renkler harika görünüyor! Tercihiniz kaydedildi. 🌈",
                modalClose: "Harika! 🚀",
                copyright: "Tüm hakları saklıdır.",
                privacyPolicy: "Gizlilik Politikası",
                termsOfUse: "Kullanım Koşulları",
                closeButton: "- KAPAT -"
            },
            en: {
                title: "Maintenance Mode",
                message: "Our site is temporarily unavailable due to maintenance work. Thank you for your understanding!",
                themes: ["🎨 Blue Theme", "💖 Pink Theme", "🌿 Green Theme", "🍇 Purple Theme", "🍊 Orange Theme", "❤️ Red Theme", "🔷 Teal Theme", "⭐ Yellow Theme", "🌀 Indigo Theme", "💎 Cyan Theme"],
                modalTitle: "Theme Selected! ✨",
                modalMessage: "The new colors look amazing! Your preference has been saved. 🌈",
                modalClose: "Awesome! 🚀",
                copyright: "All rights reserved.",
                privacyPolicy: "Privacy Policy",
                termsOfUse: "Terms of Use",
                closeButton: "- CLOSE -"
            }
            // Diğer diller için benzer çeviriler...
        };

        // Site adını URL'den al ve BÜYÜK harf yap
        function getSiteNameFromURL() {
            const hostname = window.location.hostname;
            let siteName = hostname.replace(/^www\./, '');
            siteName = siteName.split('.')[0];
            return siteName.toUpperCase();
        }

        const siteName = getSiteNameFromURL();
        const languageSelect = document.getElementById('languageSelect');
        const themeSelect = document.getElementById('themeSelect');
        const modal = document.getElementById('settingsModal');
        const privacyModal = document.getElementById('privacyModal');
        const termsModal = document.getElementById('termsModal');
        const privacyPolicyLink = document.getElementById('privacyPolicyLink');
        const termsOfUseLink = document.getElementById('termsOfUseLink');
        const modalTitle = document.getElementById('modalTitle');
        const modalMessage = document.getElementById('modalMessage');
        const modalClose = document.getElementById('modalClose');
        const title = document.getElementById('title');
        const message = document.getElementById('message');
        const siteNameDisplay = document.getElementById('siteNameDisplay');
        const copyrightSiteName = document.getElementById('copyrightSiteName');
        const currentYear = document.getElementById('currentYear');
        const copyrightText = document.getElementById('copyrightText');
        const body = document.body;

        // Yıl otomatik güncelle
        currentYear.textContent = new Date().getFullYear();

        // Site adını ayarla (BÜYÜK HARF)
        siteNameDisplay.textContent = siteName;
        copyrightSiteName.textContent = siteName;

        // Gizlilik politikası ve kullanım koşulları içerikleri
        const privacyContent = {
            tr: `
                <h3>Veri Toplama</h3>
                <p>${siteName} olarak, ziyaretçilerimizin gizliliğine önem veriyoruz. Bakım sayfası sırasında aşağıdaki verileri topluyoruz:</p>
                <ul>
                    <li>IP adresi (anonimleştirilmiş)</li>
                    <li>Tarayıcı türü ve versiyonu</li>
                    <li>Ziyaret saati ve tarihi</li>
                    <li>Tercih ettiğiniz dil ve tema ayarları (yerel depolamada)</li>
                </ul>

                <h3>Çerezler (Cookies)</h3>
                <p>Web sitemiz, kullanıcı tercihlerinizi (dil ve tema seçimleri) hatırlamak için yerel depolama (localStorage) kullanır. Bu veriler sadece sizin tarayıcınızda saklanır ve sunucularımıza gönderilmez.</p>

                <h3>Üçüncü Taraf Hizmetleri</h3>
                <p>Şu anda herhangi bir üçüncü taraf analiz veya izleme aracı kullanmıyoruz.</p>

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
                    <li>Your preferred language and theme settings (in local storage)</li>
                </ul>

                <h3>Cookies</h3>
                <p>Our website uses local storage to remember your preferences (language and theme choices). This data is stored only in your browser and is not sent to our servers.</p>

                <h3>Third-Party Services</h3>
                <p>We currently do not use any third-party analytics or tracking tools.</p>

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
                <p>${siteName} şu anda planlı bakım çalışmaları nedeniyle geçici olarak kullanılamamaktadır. Bu kesinti sırasında:</p>
                <ul>
                    <li>Normal site işlevselliği devre dışıdır</li>
                    <li>Bakım sayfası dışındaki sayfalara erişilemez</li>
                    <li>Bakım süresi önceden belirtilmemiş olabilir</li>
                </ul>

                <h3>Kullanıcı Sorumlulukları</h3>
                <p>Bu sayfayı kullanırken:</p>
                <ul>
                    <li>Sayfayı kötüye kullanmamayı kabul edersiniz</li>
                    <li>Otomatik botlar veya script'ler kullanmayacaksınız</li>
                    <li>Diğer kullanıcıların deneyimini etkileyecek eylemlerde bulunmayacaksınız</li>
                </ul>

                <h3>Fikri Mülkiyet</h3>
                <p>Bu bakım sayfasının tüm içeriği ${siteName}'a aittir ve telif hakkı yasalarıyla korunmaktadır.</p>

                <h3>Değişiklik Hakkı</h3>
                <p>${siteName}, bu kullanım koşullarını herhangi bir zamanda değiştirme hakkını saklı tutar.</p>
            `,
            en: `
                <h3>Acceptance</h3>
                <p>By using this maintenance page, you accept the following terms of use.</p>

                <h3>Service Interruption</h3>
                <p>${siteName} is currently temporarily unavailable due to planned maintenance work. During this outage:</p>
                <ul>
                    <li>Normal site functionality is disabled</li>
                    <li>Pages other than the maintenance page are inaccessible</li>
                    <li>Maintenance duration may not be specified in advance</li>
                </ul>

                <h3>User Responsibilities</h3>
                <p>When using this page, you agree to:</p>
                <ul>
                    <li>Not misuse the page</li>
                    <li>Not use automated bots or scripts</li>
                    <li>Not engage in actions that affect other users' experience</li>
                </ul>

                <h3>Intellectual Property</h3>
                <p>All content of this maintenance page belongs to ${siteName} and is protected by copyright laws.</p>

                <h3>Right to Modify</h3>
                <p>${siteName} reserves the right to modify these terms of use at any time.</p>
            `
        };

        // Sayfa yüklendiğinde kayıtlı ayarları yükle
        window.addEventListener('DOMContentLoaded', () => {
            const savedLang = localStorage.getItem('preferredLanguage') || 'tr';
            const savedTheme = localStorage.getItem('preferredTheme') || 'blue';
            
            languageSelect.value = savedLang;
            themeSelect.value = savedTheme;
            
            updateLanguage(savedLang);
            body.setAttribute('data-theme', savedTheme);
            
            // Tarihleri ayarla
            document.getElementById('privacyDate').textContent = new Date().toLocaleDateString('tr-TR');
            document.getElementById('termsDate').textContent = new Date().toLocaleDateString('tr-TR');
        });

        // Dil değiştirme
        languageSelect.addEventListener('change', (e) => {
            const lang = e.target.value;
            updateLanguage(lang);
            savePreferences(lang, themeSelect.value);
            showModal();
        });

        // Tema değiştirme
        themeSelect.addEventListener('change', (e) => {
            const theme = e.target.value;
            body.setAttribute('data-theme', theme);
            savePreferences(languageSelect.value, theme);
            showModal();
        });

        // Gizlilik politikası link
        privacyPolicyLink.addEventListener('click', (e) => {
            e.preventDefault();
            openModal('privacyModal');
        });

        // Kullanım koşulları link
        termsOfUseLink.addEventListener('click', (e) => {
            e.preventDefault();
            openModal('termsModal');
        });

        // Modal kapatma
        modalClose.addEventListener('click', () => {
            closeModal('settingsModal');
        });

        // Modal dışına tıklayınca kapat
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('modal')) {
                closeModal(e.target.id);
            }
        });

        function updateLanguage(lang) {
            const translation = translations[lang];
            if (!translation) return;

            title.textContent = translation.title;
            message.textContent = translation.message;
            modalTitle.textContent = translation.modalTitle;
            modalMessage.textContent = translation.modalMessage;
            modalClose.textContent = translation.modalClose;
            copyrightText.textContent = translation.copyright;
            privacyPolicyLink.textContent = translation.privacyPolicy;
            termsOfUseLink.textContent = translation.termsOfUse;
            
            // Tema seçeneklerini güncelle
            themeSelect.querySelectorAll('option').forEach((option, index) => {
                option.textContent = translation.themes[index];
            });

            // Modal içeriklerini güncelle
            document.getElementById('privacyModalTitle').textContent = translation.privacyPolicy;
            document.getElementById('termsModalTitle').textContent = translation.termsOfUse;
            document.getElementById('privacyModalBody').innerHTML = privacyContent[lang] || privacyContent.tr;
            document.getElementById('termsModalBody').innerHTML = termsContent[lang] || termsContent.tr;
        }

        function savePreferences(lang, theme) {
            localStorage.setItem('preferredLanguage', lang);
            localStorage.setItem('preferredTheme', theme);
        }

        function showModal() {
            openModal('settingsModal');
        }

        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = 'block';
            createOpenSound();
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = 'none';
            createCloseSound();
        }

        // Tarayıcı dilini algıla
        const browserLang = navigator.language.slice(0, 2);
        if (translations[browserLang] && !localStorage.getItem('preferredLanguage')) {
            languageSelect.value = browserLang;
            updateLanguage(browserLang);
        }

        // Rastgele emoji
        const emojis = ['🚧', '🔧', '⚡', '🎨', '✨', '🔨', '🛠️', '💫', '🌟', '📱', '🎯', '🌈'];
        document.querySelector('.emoji').textContent = emojis[Math.floor(Math.random() * emojis.length)];
    </script>
</body>
</html>
