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
        },
        de: {
            title: "Wartungsmodus",
            message: "Unsere Seite ist vorübergehend aufgrund von Wartungsarbeiten nicht verfügbar. Vielen Dank für Ihr Verständnis!",
            themes: ["🎨 Blaues Thema", "💖 Rosa Thema", "🌿 Grünes Thema", "🍇 Lila Thema", "🍊 Oranges Thema", "❤️ Rotes Thema", "🔷 Blaugrünes Thema", "⭐ Gelbes Thema", "🌀 Indigo Thema", "💎 Cyan Thema"],
            modalTitle: "Thema Ausgewählt! ✨",
            modalMessage: "Die neuen Farben sehen toll aus! Ihre Einstellung wurde gespeichert. 🌈",
            modalClose: "Super! 🚀",
            copyright: "Alle Rechte vorbehalten.",
            privacyPolicy: "Datenschutzerklärung",
            termsOfUse: "Nutzungsbedingungen",
            closeButton: "- SCHLIEßEN -"
        },
        fr: {
            title: "Mode Maintenance",
            message: "Notre site est temporairement indisponible en raison de travaux de maintenance. Merci de votre compréhension!",
            themes: ["🎨 Thème Bleu", "💖 Thème Rose", "🌿 Thème Vert", "🍇 Thème Violet", "🍊 Thème Orange", "❤️ Thème Rouge", "🔷 Thème Sarcelle", "⭐ Thème Jaune", "🌀 Thème Indigo", "💎 Thème Cyan"],
            modalTitle: "Thème Sélectionné! ✨",
            modalMessage: "Les nouvelles couleurs sont magnifiques! Votre préférence a été sauvegardée. 🌈",
            modalClose: "Génial! 🚀",
            copyright: "Tous droits réservés.",
            privacyPolicy: "Politique de Confidentialité",
            termsOfUse: "Conditions d'Utilisation",
            closeButton: "- FERMER -"
        },
        es: {
            title: "Modo Mantenimiento",
            message: "Nuestro sitio no está disponible temporalmente debido a trabajos de mantenimiento. ¡Gracias por su comprensión!",
            themes: ["🎨 Tema Azul", "💖 Tema Rosa", "🌿 Tema Verde", "🍇 Tema Púrpura", "🍊 Tema Naranja", "❤️ Tema Rojo", "🔷 Tema Verde Azulado", "⭐ Tema Amarillo", "🌀 Tema Índigo", "💎 Tema Cian"],
            modalTitle: "¡Tema Seleccionado! ✨",
            modalMessage: "¡Los nuevos colores se ven increíbles! Tu preferencia ha sido guardada. 🌈",
            modalClose: "¡Increíble! 🚀",
            copyright: "Todos los derechos reservados.",
            privacyPolicy: "Política de Privacidad",
            termsOfUse: "Términos de Uso",
            closeButton: "- CERRAR -"
        },
        it: {
            title: "Modalità Manutenzione",
            message: "Il nostro sito è temporaneamente non disponibile a causa di lavori di manutenzione. Grazie per la tua comprensione!",
            themes: ["🎨 Tema Blu", "💖 Tema Rosa", "🌿 Tema Verde", "🍇 Tema Viola", "🍊 Tema Arancione", "❤️ Tema Rosso", "🔷 Tema Verde Acqua", "⭐ Tema Giallo", "🌀 Tema Indaco", "💎 Tema Ciano"],
            modalTitle: "Tema Selezionato! ✨",
            modalMessage: "I nuovi colori sono fantastici! La tua preferenza è stata salvata. 🌈",
            modalClose: "Fantastico! 🚀",
            copyright: "Tutti i diritti riservati.",
            privacyPolicy: "Privacy Policy",
            termsOfUse: "Termini di Utilizzo",
            closeButton: "- CHIUDI -"
        },
        ja: {
            title: "メンテナンスモード",
            message: "メンテナンス作業のため、当サイトは一時的にご利用いただけません。ご理解いただきありがとうございます！",
            themes: ["🎨 青テーマ", "💖 ピンクテーマ", "🌿 緑テーマ", "🍇 紫テーマ", "🍊 オレンジテーマ", "❤️ 赤テーマ", "🔷 青緑テーマ", "⭐ 黄テーマ", "🌀 藍テーマ", "💎 シアンテーマ"],
            modalTitle: "テーマが選択されました！✨",
            modalMessage: "新しい色が素敵です！設定が保存されました。🌈",
            modalClose: "すごい！🚀",
            copyright: "無断複写・転載を禁じます。",
            privacyPolicy: "プライバシーポリシー",
            termsOfUse: "利用規約",
            closeButton: "- 閉じる -"
        },
        ko: {
            title: "점검 모드",
            message: "현재 사이트 점검으로 인해 일시적으로 이용이 불가능합니다. 양해 부탁드립니다!",
            themes: ["🎨 파란 테마", "💖 분홍 테마", "🌿 초록 테마", "🍇 보라 테마", "🍊 주황 테마", "❤️ 빨간 테마", "🔷 청록 테마", "⭐ 노란 테마", "🌀 인디고 테마", "💎 시안 테마"],
            modalTitle: "테마가 선택되었습니다! ✨",
            modalMessage: "새로운 색상이 멋져요! 설정이 저장되었습니다. 🌈",
            modalClose: "좋아요! 🚀",
            copyright: "모든 권리 보유.",
            privacyPolicy: "개인정보 처리방침",
            termsOfUse: "이용약관",
            closeButton: "- 닫기 -"
        },
        ar: {
            title: "وضع الصيانة",
            message: "موقعنا غير متاح مؤقتًا due لأعمال الصيانة. شكرا لتفهمك!",
            themes: ["🎨 سمة زرقاء", "💖 سمة وردية", "🌿 سمة خضراء", "🍇 سمة أرجوانية", "🍊 سمة برتقالية", "❤️ سمة حمراء", "🔷 سمة زرقاء مخضرة", "⭐ سمة صفراء", "🌀 سمة نيلي", "💎 سمة سيان"],
            modalTitle: "تم اختيار السمة! ✨",
            modalMessage: "الألوان الجديدة رائعة! تم حفظ تفضيلاتك. 🌈",
            modalClose: "رائع! 🚀",
            copyright: "جميع الحقوق محفوظة.",
            privacyPolicy: "سياسة الخصوصية",
            termsOfUse: "شروط الاستخدام",
            closeButton: "- إغلاق -"
        },
        ru: {
            title: "Режим Обслуживания",
            message: "Наш сайт временно недоступен due к работам по техническому обслуживанию. Спасибо за понимание!",
            themes: ["🎨 Синяя тема", "💖 Розовая тема", "🌿 Зеленая тема", "🍇 Фиолетовая тема", "🍊 Оранжевая тема", "❤️ Красная тема", "🔷 Бирюзовая тема", "⭐ Желтая тема", "🌀 Индиго тема", "💎 Бирюзовая тема"],
            modalTitle: "Тема Выбрана! ✨",
            modalMessage: "Новые цвета выглядят потрясающе! Ваши настройки сохранены. 🌈",
            modalClose: "Отлично! 🚀",
            copyright: "Все права защищены.",
            privacyPolicy: "Политика Конфиденциальности",
            termsOfUse: "Условия Использования",
            closeButton: "- ЗАКРЫТЬ -"
        }
    };

    // Gizlilik politikası ve kullanım koşulları içerikleri - Tüm diller için
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
        `,
        de: `
            <h3>Datenerfassung</h3>
            <p>Bei ${siteName} schätzen wir die Privatsphäre unserer Besucher. Während der Wartung erfassen wir folgende Daten:</p>
            <ul>
                <li>IP-Adresse (anonymisiert)</li>
                <li>Browsertyp und Version</li>
                <li>Besuchszeit und Datum</li>
                <li>Ihre bevorzugten Sprach- und Theme-Einstellungen (im lokalen Speicher)</li>
            </ul>

            <h3>Cookies</h3>
            <p>Unsere Website verwendet lokalen Speicher, um Ihre Präferenzen (Sprach- und Theme-Auswahl) zu speichern. Diese Daten werden nur in Ihrem Browser gespeichert und nicht an unsere Server gesendet.</p>

            <h3>Drittanbieter-Dienste</h3>
            <p>Derzeit verwenden wir keine Analyse- oder Tracking-Tools von Drittanbietern.</p>

            <h3>Datensicherheit</h3>
            <p>Die begrenzten Daten, die wir sammeln, werden mit angemessenen Sicherheitsmaßnahmen geschützt.</p>

            <h3>Änderungen</h3>
            <p>Wir behalten uns das Recht vor, diese Datenschutzerklärung zu aktualisieren. Änderungen werden auf dieser Seite veröffentlicht.</p>
        `,
        fr: `
            <h3>Collecte de Données</h3>
            <p>Chez ${siteName}, nous valorisons la vie privée de nos visiteurs. Pendant la maintenance, nous collectons les données suivantes :</p>
            <ul>
                <li>Adresse IP (anonymisée)</li>
                <li>Type et version du navigateur</li>
                <li>Heure et date de visite</li>
                <li>Vos préférences de langue et de thème (dans le stockage local)</li>
            </ul>

            <h3>Cookies</h3>
            <p>Notre site utilise le stockage local pour mémoriser vos préférences (choix de langue et de thème). Ces données sont stockées uniquement dans votre navigateur et ne sont pas envoyées à nos serveurs.</p>

            <h3>Services Tiers</h3>
            <p>Nous n'utilisons actuellement aucun outil d'analyse ou de suivi tiers.</p>

            <h3>Sécurité des Données</h3>
            <p>Les données limitées que nous collectons sont protégées par des mesures de sécurité appropriées.</p>

            <h3>Modifications</h3>
            <p>Nous nous réservons le droit de mettre à jour cette politique de confidentialité. Les modifications seront publiées sur cette page.</p>
        `,
        es: `
            <h3>Recopilación de Datos</h3>
            <p>En ${siteName}, valoramos la privacidad de nuestros visitantes. Durante el mantenimiento, recopilamos los siguientes datos:</p>
            <ul>
                <li>Dirección IP (anonimizada)</li>
                <li>Tipo y versión del navegador</li>
                <li>Hora y fecha de visita</li>
                <li>Sus preferencias de idioma y tema (en almacenamiento local)</li>
            </ul>

            <h3>Cookies</h3>
            <p>Nuestro sitio web utiliza almacenamiento local para recordar sus preferencias (elecciones de idioma y tema). Estos datos se almacenan solo en su navegador y no se envían a nuestros servidores.</p>

            <h3>Servicios de Terceros</h3>
            <p>Actualmente no utilizamos herramientas de análisis o seguimiento de terceros.</p>

            <h3>Seguridad de Datos</h3>
            <p>Los datos limitados que recopilamos están protegidos con medidas de seguridad apropiadas.</p>

            <h3>Cambios</h3>
            <p>Nos reservamos el derecho de actualizar esta política de privacidad. Los cambios se publicarán en esta página.</p>
        `,
        it: `
            <h3>Raccolta Dati</h3>
            <p>In ${siteName}, apprezziamo la privacy dei nostri visitatori. Durante la manutenzione, raccogliamo i seguenti dati:</p>
            <ul>
                <li>Indirizzo IP (anonimizzato)</li>
                <li>Tipo e versione del browser</li>
                <li>Ora e data della visita</li>
                <li>Le tue preferenze di lingua e tema (in archiviazione locale)</li>
            </ul>

            <h3>Cookie</h3>
            <p>Il nostro sito web utilizza l'archiviazione locale per ricordare le tue preferenze (scelte di lingua e tema). Questi dati sono memorizzati solo nel tuo browser e non vengono inviati ai nostri server.</p>

            <h3>Servizi di Terze Parti</h3>
            <p>Attualmente non utilizziamo strumenti di analisi o tracciamento di terze parti.</p>

            <h3>Sicurezza dei Dati</h3>
            <p>I dati limitati che raccogliamo sono protetti con appropriate misure di sicurezza.</p>

            <h3>Modifiche</h3>
            <p>Ci riserviamo il diritto di aggiornare questa privacy policy. Le modifiche saranno pubblicate su questa pagina.</p>
        `,
        ja: `
            <h3>データ収集</h3>
            <p>${siteName}では、訪問者のプライバシーを尊重しています。メンテナンス中に以下のデータを収集します：</p>
            <ul>
                <li>IPアドレス（匿名化）</li>
                <li>ブラウザの種類とバージョン</li>
                <li>訪問時刻と日付</li>
                <li>お好みの言語とテーマ設定（ローカルストレージ内）</li>
            </ul>

            <h3>クッキー</h3>
            <p>当サイトは、お客様の設定（言語とテーマの選択）を記憶するためにローカルストレージを使用します。このデータはお客様のブラウザにのみ保存され、当社のサーバーには送信されません。</p>

            <h3>第三者サービス</h3>
            <p>現在、第三者の分析や追跡ツールは使用しておりません。</p>

            <h3>データセキュリティ</h3>
            <p>収集する限定的なデータは、適切なセキュリティ対策で保護されています。</p>

            <h3>変更</h3>
            <p>本プライバシーポリシーを更新する権利を留保します。変更はこのページで公表されます。</p>
        `,
        ko: `
            <h3>데이터 수집</h3>
            <p>${siteName}에서는 방문자의 개인정보를 소중히 여깁니다. 점검 중 다음 데이터를 수집합니다:</p>
            <ul>
                <li>IP 주소 (익명화)</li>
                <li>브라우저 유형 및 버전</li>
                <li>방문 시간 및 날짜</li>
                <li>선호하는 언어 및 테마 설정 (로컬 스토리지)</li>
            </ul>

            <h3>쿠키</h3>
            <p>당사 웹사이트는 사용자 선호도(언어 및 테마 선택)를 기억하기 위해 로컬 스토리지를 사용합니다. 이 데이터는 귀하의 브라우저에만 저장되며 당사 서버로 전송되지 않습니다.</p>

            <h3>제3자 서비스</h3>
            <p>현재 제3자 분석 또는 추적 도구를 사용하지 않습니다.</p>

            <h3>데이터 보안</h3>
            <p>수집하는 제한된 데이터는 적절한 보안 조치로 보호됩니다.</p>

            <h3>변경</h3>
            <p>당사는 본 개인정보 처리방침을 업데이트할 권리를 보유합니다. 변경 사항은 이 페이지에 게시됩니다.</p>
        `,
        ar: `
            <h3>جمع البيانات</h3>
            <p>في ${siteName}، نحن نقدر خصوصية زوارنا. أثناء الصيانة، نقوم بجمع البيانات التالية:</p>
            <ul>
                <li>عنوان IP (مجهول)</li>
                <li>نوع المتصفح وإصداره</li>
                <li>وقت وتاريخ الزيارة</li>
                <li>إعدادات اللغة والسمة المفضلة لديك (في التخزين المحلي)</li>
            </ul>

            <h3>الكوكيز</h3>
            <p>يستخدم موقعنا التخزين المحلي لتذكر تفضيلاتك (اختيارات اللغة والسمة). يتم تخزين هذه البيانات فقط في متصفحك ولا يتم إرسالها إلى خوادمنا.</p>

            <h3>خدمات الطرف الثالث</h3>
            <p>حاليًا لا نستخدم أي أدوات تحليلات أو تتبع من طرف ثالث.</p>

            <h3>أمان البيانات</h3>
            <p>البيانات المحدودة التي نجمعها محمية بإجراءات أمنية مناسبة.</p>

            <h3>التغييرات</h3>
            <p>نحتفظ بالحق في تحديث سياسة الخصوصية هذه. سيتم نشر التغييرات على هذه الصفحة.</p>
        `,
        ru: `
            <h3>Сбор Данных</h3>
            <p>В ${siteName} мы ценим конфиденциальность наших посетителей. Во время обслуживания мы собираем следующие данные:</p>
            <ul>
                <li>IP-адрес (анонимизированный)</li>
                <li>Тип и версия браузера</li>
                <li>Время и дата посещения</li>
                <li>Ваши предпочтения языка и темы (в локальном хранилище)</li>
            </ul>

            <h3>Куки</h3>
            <p>Наш сайт использует локальное хранилище для запоминания ваших предпочтений (выбор языка и темы). Эти данные хранятся только в вашем браузере и не отправляются на наши серверы.</p>

            <h3>Сторонние Сервисы</h3>
            <p>В настоящее время мы не используем инструменты аналитики или отслеживания третьих сторон.</p>

            <h3>Безопасность Данных</h3>
            <p>Ограниченные данные, которые мы собираем, защищены соответствующими мерами безопасности.</p>

            <h3>Изменения</h3>
            <p>Мы оставляем за собой право обновлять эту политику конфиденциальности. Изменения будут опубликованы на этой странице.</p>
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
        `,
        de: `
            <h3>Annahme</h3>
            <p>Durch die Nutzung dieser Wartungsseite akzeptieren Sie die folgenden Nutzungsbedingungen.</p>

            <h3>Serviceunterbrechung</h3>
            <p>${siteName} ist derzeit aufgrund geplanter Wartungsarbeiten vorübergehend nicht verfügbar. Während dieser Unterbrechung:</p>
            <ul>
                <li>Normale Seitenfunktionalität ist deaktiviert</li>
                <li>Seiten außer der Wartungsseite sind nicht zugänglich</li>
                <li>Die Wartungsdauer kann im Voraus nicht angegeben werden</li>
            </ul>

            <h3>Benutzerverantwortlichkeiten</h3>
            <p>Bei der Nutzung dieser Seite erklären Sie sich damit einverstanden:</p>
            <ul>
                <li>Die Seite nicht zu missbrauchen</li>
                <li>Keine automatisierten Bots oder Skripte zu verwenden</li>
                <li>Keine Handlungen vorzunehmen, die die Erfahrung anderer Benutzer beeinträchtigen</li>
            </ul>

            <h3>Geistiges Eigentum</h3>
            <p>Der gesamte Inhalt dieser Wartungsseite gehört ${siteName} und ist urheberrechtlich geschützt.</p>

            <h3>Änderungsrecht</h3>
            <p>${siteName} behält sich das Recht vor, diese Nutzungsbedingungen jederzeit zu ändern.</p>
        `,
        fr: `
            <h3>Acceptation</h3>
            <p>En utilisant cette page de maintenance, vous acceptez les conditions d'utilisation suivantes.</p>

            <h3>Interruption de Service</h3>
            <p>${siteName} est actuellement temporairement indisponible en raison de travaux de maintenance planifiés. Pendant cette interruption :</p>
            <ul>
                <li>La fonctionnalité normale du site est désactivée</li>
                <li>Les pages autres que la page de maintenance sont inaccessibles</li>
                <li>La durée de maintenance peut ne pas être spécifiée à l'avance</li>
            </ul>

            <h3>Responsabilités de l'Utilisateur</h3>
            <p>En utilisant cette page, vous acceptez de :</p>
            <ul>
                <li>Ne pas utiliser abusivement la page</li>
                <li>Ne pas utiliser de bots ou scripts automatisés</li>
                <li>Ne pas engager d'actions affectant l'expérience d'autres utilisateurs</li>
            </ul>

            <h3>Propriété Intellectuelle</h3>
            <p>Tout le contenu de cette page de maintenance appartient à ${siteName} et est protégé par les lois sur le droit d'auteur.</p>

            <h3>Droit de Modification</h3>
            <p>${siteName} se réserve le droit de modifier ces conditions d'utilisation à tout moment.</p>
        `,
        es: `
            <h3>Aceptación</h3>
            <p>Al utilizar esta página de mantenimiento, acepta los siguientes términos de uso.</p>

            <h3>Interrupción del Servicio</h3>
            <p>${siteName} está actualmente temporalmente no disponible debido a trabajos de mantenimiento planificados. Durante esta interrupción:</p>
            <ul>
                <li>La funcionalidad normal del sitio está deshabilitada</li>
                <li>Las páginas distintas a la página de mantenimiento son inaccesibles</li>
                <li>La duración del mantenimiento puede no especificarse por adelantado</li>
            </ul>

            <h3>Responsabilidades del Usuario</h3>
            <p>Al usar esta página, acepta:</p>
            <ul>
                <li>No hacer un uso indebido de la página</li>
                <li>No utilizar bots o scripts automatizados</li>
                <li>No realizar acciones que afecten la experiencia de otros usuarios</li>
            </ul>

            <h3>Propiedad Intelectual</h3>
            <p>Todo el contenido de esta página de mantenimiento pertenece a ${siteName} y está protegido por las leyes de derechos de autor.</p>

            <h3>Derecho a Modificar</h3>
            <p>${siteName} se reserva el derecho de modificar estos términos de uso en cualquier momento.</p>
        `,
        it: `
            <h3>Accettazione</h3>
            <p>Utilizzando questa pagina di manutenzione, accetti i seguenti termini di utilizzo.</p>

            <h3>Interruzione del Servizio</h3>
            <p>${siteName} è attualmente temporaneamente non disponibile a causa di lavori di manutenzione programmati. Durante questa interruzione:</p>
            <ul>
                <li>La funzionalità normale del sito è disabilitata</li>
                <li>Le pagine diverse dalla pagina di manutenzione sono inaccessibili</li>
                <li>La durata della manutenzione potrebbe non essere specificata in anticipo</li>
            </ul>

            <h3>Responsabilità dell'Utente</h3>
            <p>Utilizzando questa pagina, accetti di:</p>
            <ul>
                <li>Non abusare della pagina</li>
                <li>Non utilizzare bot o script automatizzati</li>
                <li>Non intraprendere azioni che influenzino l'esperienza di altri utenti</li>
            </ul>

            <h3>Proprietà Intellettuale</h3>
            <p>Tutto il contenuto di questa pagina di manutenzione appartiene a ${siteName} ed è protetto dalle leggi sul copyright.</p>

            <h3>Diritto di Modifica</h3>
            <p>${siteName} si riserva il diritto di modificare questi termini di utilizzo in qualsiasi momento.</p>
        `,
        ja: `
            <h3>承諾</h3>
            <p>このメンテナンスページを使用することで、以下の利用規約に同意したものとみなされます。</p>

            <h3>サービス中断</h3>
            <p>${siteName}は現在、計画的なメンテナンス作業のため一時的に利用できません。この中断中：</p>
            <ul>
                <li>通常のサイト機能は無効です</li>
                <li>メンテナンスページ以外のページにはアクセスできません</li>
                <li>メンテナンス期間は事前に指定されない場合があります</li>
            </ul>

            <h3>ユーザーの責任</h3>
            <p>このページを使用する場合、以下に同意します：</p>
            <ul>
                <li>ページを悪用しない</li>
                <li>自動化されたボットやスクリプトを使用しない</li>
                <li>他のユーザーの体験に影響を与える行動をとらない</li>
            </ul>

            <h3>知的財産</h3>
            <p>このメンテナンスページのすべてのコンテンツは${siteName}に属し、著作権法で保護されています。</p>

            <h3>変更権</h3>
            <p>${siteName}は、これらの利用規約を随時変更する権利を留保します。</p>
        `,
        ko: `
            <h3>수락</h3>
            <p>본 점검 페이지를 사용함으로써 다음 이용 약관에 동의하는 것으로 간주됩니다.</p>

            <h3>서비스 중단</h3>
            <p>${siteName}는 현재 계획된 점검 작업으로 인해 일시적으로 사용할 수 없습니다. 이 중단期間 동안:</p>
            <ul>
                <li>일반 사이트 기능이 비활성화됩니다</li>
                <li>점검 페이지 이외의 페이지에는 접근할 수 없습니다</li>
                <li>점검 기간은 사전에 지정되지 않을 수 있습니다</li>
            </ul>

            <h3>사용자 책임</h3>
            <p>이 페이지를 사용할 때 다음에 동의합니다:</p>
            <ul>
                <li>페이지를 오용하지 않음</li>
                <li>자동화된 봇이나 스크립트를 사용하지 않음</li>
                <li>다른 사용자의 경험에 영향을 미치는 행위를 하지 않음</li>
            </ul>

            <h3>지적 재산권</h3>
            <p>이 점검 페이지의 모든 콘텐츠는 ${siteName}에 속하며 저작권법으로 보호됩니다.</p>

            <h3>수정 권한</h3>
            <p>${siteName}는 본 이용 약관을 언제든지 수정할 권리를 보유합니다.</p>
        `,
        ar: `
            <h3>القبول</h3>
            <p>باستخدام صفحة الصيانة هذه، فإنك تقبل شروط الاستخدام التالية.</p>

            <h3>انقطاع الخدمة</h3>
            <p>${siteName} غير متاح حاليًا مؤقتًا due لأعمال الصيانة المخطط لها. خلال هذا الانقطاع:</p>
            <ul>
                <li>وظائف الموقع العادية معطلة</li>
                <li>الصفحات بخلاف صفحة الصيانة غير قابلة للوصول</li>
                <li>قد لا يتم تحديد مدة الصيانة مسبقًا</li>
            </ul>

            <h3>مسؤوليات المستخدم</h3>
            <p>باستخدام هذه الصفحة، فإنك توافق على:</p>
            <ul>
                <li>عدم إساءة استخدام الصفحة</li>
                <li>عدم استخدام البوتات أو البرامج النصية الآلية</li>
                <li>عدم الانخراط في إجراءات تؤثر على تجربة المستخدمين الآخرين</li>
            </ul>

            <h3>الملكية الفكرية</h3>
            <p>جميع محتويات صفحة الصيانة هذه مملوكة لـ ${siteName} ومحمية بقوانين حقوق النشر.</p>

            <h3>حق التعديل</h3>
            <p>تحتفظ ${siteName} بالحق في تعديل شروط الاستخدام هذه في أي وقت.</p>
        `,
        ru: `
            <h3>Принятие</h3>
            <p>Используя эту страницу обслуживания, вы принимаете следующие условия использования.</p>

            <h3>Перерыв в Обслуживании</h3>
            <p>${siteName} в настоящее время временно недоступен due к плановым работам по техническому обслуживанию. Во время этого перерыва:</p>
            <ul>
                <li>Обычная функциональность сайта отключена</li>
                <li>Страницы, отличные от страницы обслуживания, недоступны</li>
                <li>Продолжительность обслуживания может не указываться заранее</li>
            </ul>

            <h3>Обязанности Пользователя</h3>
            <p>Используя эту страницу, вы соглашаетесь:</p>
            <ul>
                <li>Не злоупотреблять страницей</li>
                <li>Не использовать автоматизированные боты или скрипты</li>
                <li>Не совершать действий, влияющих на опыт других пользователей</li>
            </ul>

            <h3>Интеллектуальная Собственность</h3>
            <p>Весь контент этой страницы обслуживания принадлежит ${siteName} и защищен законами об авторском праве.</p>

            <h3>Право на Изменение</h3>
            <p>${siteName} оставляет за собой право изменять эти условия использования в любое время.</p>
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
