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

        /* Modal Stilleri */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(8px);
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
            transform: translate(-50%, -50%) scale(0.7);
            background: linear-gradient(135deg, #ffffff, #f8fafc);
            padding: 35px;
            border-radius: 25px;
            text-align: center;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.25);
            max-width: 380px;
            width: 90%;
            animation: modalPop 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        @keyframes modalPop {
            to { transform: translate(-50%, -50%) scale(1); }
        }

        .modal-emoji {
            font-size: 3.5rem;
            margin-bottom: 20px;
            animation: spin 1s ease;
            filter: drop-shadow(0 3px 10px rgba(0, 0, 0, 0.2));
        }

        @keyframes spin {
            from { transform: rotate(0deg) scale(0.5); }
            to { transform: rotate(360deg) scale(1); }
        }

        .modal-title {
            font-size: 1.6rem;
            margin-bottom: 15px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }

        .modal-message {
            margin-bottom: 25px;
            opacity: 0.8;
            line-height: 1.5;
            font-size: 1.05rem;
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
            © <span id="currentYear">2025</span> • <span class="site-name" id="copyrightSiteName">SITEMIZ</span> • Tüm hakları saklıdır.
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="settingsModal">
        <div class="modal-content">
            <div class="modal-emoji">🎨</div>
            <h3 class="modal-title" id="modalTitle">Tema Seçildi! ✨</h3>
            <p class="modal-message" id="modalMessage">Yeni renkler harika görünüyor! Tercihiniz kaydedildi. 🌈</p>
            <button class="modal-close" id="modalClose">Harika! 🚀</button>
        </div>
    </div>

    <script>
        const translations = {
            tr: {
                title: "Bakım Modu",
                message: "Sitemiz şu anda bakım çalışmaları nedeniyle geçici olarak kullanılamıyor. Anlayışınız için teşekkür ederiz!",
                themes: ["🎨 Mavi Tema", "💖 Pembe Tema", "🌿 Yeşil Tema", "🍇 Mor Tema", "🍊 Turuncu Tema", "❤️ Kırmızı Tema", "🔷 Teal Tema", "⭐ Sarı Tema", "🌀 Indigo Tema", "💎 Camgöbeği"],
                modalTitle: "Tema Seçildi! ✨",
                modalMessage: "Yeni renkler harika görünüyor! Tercihiniz kaydedildi. 🌈",
                modalClose: "Harika! 🚀",
                copyright: "Tüm hakları saklıdır."
            },
            en: {
                title: "Maintenance Mode",
                message: "Our site is temporarily unavailable due to maintenance work. Thank you for your understanding!",
                themes: ["🎨 Blue Theme", "💖 Pink Theme", "🌿 Green Theme", "🍇 Purple Theme", "🍊 Orange Theme", "❤️ Red Theme", "🔷 Teal Theme", "⭐ Yellow Theme", "🌀 Indigo Theme", "💎 Cyan Theme"],
                modalTitle: "Theme Selected! ✨",
                modalMessage: "The new colors look amazing! Your preference has been saved. 🌈",
                modalClose: "Awesome! 🚀",
                copyright: "All rights reserved."
            },
            de: {
                title: "Wartungsmodus",
                message: "Unsere Seite ist vorübergehend aufgrund von Wartungsarbeiten nicht verfügbar. Vielen Dank für Ihr Verständnis!",
                themes: ["🎨 Blaues Thema", "💖 Rosa Thema", "🌿 Grünes Thema", "🍇 Lila Thema", "🍊 Oranges Thema", "❤️ Rotes Thema", "🔷 Blaugrünes Thema", "⭐ Gelbes Thema", "🌀 Indigo Thema", "💎 Cyan Thema"],
                modalTitle: "Thema Ausgewählt! ✨",
                modalMessage: "Die neuen Farben sehen toll aus! Ihre Einstellung wurde gespeichert. 🌈",
                modalClose: "Super! 🚀",
                copyright: "Alle Rechte vorbehalten."
            },
            fr: {
                title: "Mode Maintenance",
                message: "Notre site est temporairement indisponible en raison de travaux de maintenance. Merci de votre compréhension!",
                themes: ["🎨 Thème Bleu", "💖 Thème Rose", "🌿 Thème Vert", "🍇 Thème Violet", "🍊 Thème Orange", "❤️ Thème Rouge", "🔷 Thème Sarcelle", "⭐ Thème Jaune", "🌀 Thème Indigo", "💎 Thème Cyan"],
                modalTitle: "Thème Sélectionné! ✨",
                modalMessage: "Les nouvelles couleurs sont magnifiques! Votre préférence a été sauvegardée. 🌈",
                modalClose: "Génial! 🚀",
                copyright: "Tous droits réservés."
            },
            es: {
                title: "Modo Mantenimiento",
                message: "Nuestro sitio no está disponible temporalmente debido a trabajos de mantenimiento. ¡Gracias por su comprensión!",
                themes: ["🎨 Tema Azul", "💖 Tema Rosa", "🌿 Tema Verde", "🍇 Tema Púrpura", "🍊 Tema Naranja", "❤️ Tema Rojo", "🔷 Tema Verde Azulado", "⭐ Tema Amarillo", "🌀 Tema Índigo", "💎 Tema Cian"],
                modalTitle: "¡Tema Seleccionado! ✨",
                modalMessage: "¡Los nuevos colores se ven increíbles! Tu preferencia ha sido guardada. 🌈",
                modalClose: "¡Increíble! 🚀",
                copyright: "Todos los derechos reservados."
            },
            it: {
                title: "Modalità Manutenzione",
                message: "Il nostro sito è temporaneamente non disponibile a causa di lavori di manutenzione. Grazie per la tua comprensione!",
                themes: ["🎨 Tema Blu", "💖 Tema Rosa", "🌿 Tema Verde", "🍇 Tema Viola", "🍊 Tema Arancione", "❤️ Tema Rosso", "🔷 Tema Verde Acqua", "⭐ Tema Giallo", "🌀 Tema Indaco", "💎 Tema Ciano"],
                modalTitle: "Tema Selezionato! ✨",
                modalMessage: "I nuovi colori sono fantastici! La tua preferenza è stata salvata. 🌈",
                modalClose: "Fantastico! 🚀",
                copyright: "Tutti i diritti riservati."
            },
            ja: {
                title: "メンテナンスモード",
                message: "メンテナンス作業のため、当サイトは一時的にご利用いただけません。ご理解いただきありがとうございます！",
                themes: ["🎨 青テーマ", "💖 ピンクテーマ", "🌿 緑テーマ", "🍇 紫テーマ", "🍊 オレンジテーマ", "❤️ 赤テーマ", "🔷 青緑テーマ", "⭐ 黄テーマ", "🌀 藍テーマ", "💎 シアンテーマ"],
                modalTitle: "テーマが選択されました！✨",
                modalMessage: "新しい色が素敵です！設定が保存されました。🌈",
                modalClose: "すごい！🚀",
                copyright: "無断複写・転載を禁じます。"
            },
            ko: {
                title: "점검 모드",
                message: "현재 사이트 점검으로 인해 일시적으로 이용이 불가능합니다. 양해 부탁드립니다!",
                themes: ["🎨 파란 테마", "💖 분홍 테마", "🌿 초록 테마", "🍇 보라 테마", "🍊 주황 테마", "❤️ 빨간 테마", "🔷 청록 테마", "⭐ 노란 테마", "🌀 인디고 테마", "💎 시안 테마"],
                modalTitle: "테마가 선택되었습니다! ✨",
                modalMessage: "새로운 색상이 멋져요! 설정이 저장되었습니다. 🌈",
                modalClose: "좋아요! 🚀",
                copyright: "모든 권리 보유."
            },
            ar: {
                title: "وضع الصيانة",
                message: "موقعنا غير متاح مؤقتًا due لأعمال الصيانة. شكرا لتفهمك!",
                themes: ["🎨 سمة زرقاء", "💖 سمة وردية", "🌿 سمة خضراء", "🍇 سمة أرجوانية", "🍊 سمة برتقالية", "❤️ سمة حمراء", "🔷 سمة زرقاء مخضرة", "⭐ سمة صفراء", "🌀 سمة نيلي", "💎 سمة سيان"],
                modalTitle: "تم اختيار السمة! ✨",
                modalMessage: "الألوان الجديدة رائعة! تم حفظ تفضيلاتك. 🌈",
                modalClose: "رائع! 🚀",
                copyright: "جميع الحقوق محفوظة."
            },
            ru: {
                title: "Режим Обслуживания",
                message: "Наш сайт временно недоступен due к работам по техническому обслуживанию. Спасибо за понимание!",
                themes: ["🎨 Синяя тема", "💖 Розовая тема", "🌿 Зеленая тема", "🍇 Фиолетовая тема", "🍊 Оранжевая тема", "❤️ Красная тема", "🔷 Бирюзовая тема", "⭐ Желтая тема", "🌀 Индиго тема", "💎 Бирюзовая тема"],
                modalTitle: "Тема Выбрана! ✨",
                modalMessage: "Новые цвета выглядят потрясающе! Ваши настройки сохранены. 🌈",
                modalClose: "Отлично! 🚀",
                copyright: "Все права защищены."
            }
        };

        // Site adını URL'den al ve BÜYÜK harf yap
        function getSiteNameFromURL() {
            const hostname = window.location.hostname;
            // www'yi kaldır ve domaini al
            let siteName = hostname.replace(/^www\./, '');
            // Uzantıyı kaldır (.com, .net, vb.)
            siteName = siteName.split('.')[0];
            // Tüm harfleri BÜYÜK yap
            return siteName.toUpperCase();
        }

        const siteName = getSiteNameFromURL();
        const languageSelect = document.getElementById('languageSelect');
        const themeSelect = document.getElementById('themeSelect');
        const modal = document.getElementById('settingsModal');
        const modalTitle = document.getElementById('modalTitle');
        const modalMessage = document.getElementById('modalMessage');
        const modalClose = document.getElementById('modalClose');
        const title = document.getElementById('title');
        const message = document.getElementById('message');
        const siteNameDisplay = document.getElementById('siteNameDisplay');
        const copyrightSiteName = document.getElementById('copyrightSiteName');
        const currentYear = document.getElementById('currentYear');
        const body = document.body;

        // Yıl otomatik güncelle
        currentYear.textContent = new Date().getFullYear();

        // Site adını ayarla (BÜYÜK HARF)
        siteNameDisplay.textContent = siteName;
        copyrightSiteName.textContent = siteName;

        // Sayfa yüklendiğinde kayıtlı ayarları yükle
        window.addEventListener('DOMContentLoaded', () => {
            const savedLang = localStorage.getItem('preferredLanguage') || 'tr';
            const savedTheme = localStorage.getItem('preferredTheme') || 'blue';
            
            languageSelect.value = savedLang;
            themeSelect.value = savedTheme;
            
            updateLanguage(savedLang);
            body.setAttribute('data-theme', savedTheme);
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

        // Modal kapatma
        modalClose.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        // Modal dışına tıklayınca kapat
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });

        function updateLanguage(lang) {
            const translation = translations[lang];
            title.textContent = translation.title;
            message.textContent = translation.message;
            modalTitle.textContent = translation.modalTitle;
            modalMessage.textContent = translation.modalMessage;
            modalClose.textContent = translation.modalClose;
            
            // Tema seçeneklerini güncelle
            themeSelect.querySelectorAll('option').forEach((option, index) => {
                option.textContent = translation.themes[index];
            });

            // Copyright metnini güncelle
            document.querySelector('.copyright').innerHTML = 
                `© <span id="currentYear">${new Date().getFullYear()}</span> • <span class="site-name">${siteName}</span> • ${translation.copyright}`;
        }

        function savePreferences(lang, theme) {
            localStorage.setItem('preferredLanguage', lang);
            localStorage.setItem('preferredTheme', theme);
        }

        function showModal() {
            modal.style.display = 'block';
            
            // 2.5 saniye sonra otomatik kapat
            setTimeout(() => {
                if (modal.style.display === 'block') {
                    modal.style.display = 'none';
                }
            }, 2500);
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
