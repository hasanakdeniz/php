<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakımda</title>
    <link href="src/bootstrap.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            transition: background 0.5s ease;
        }

        body.light-mode {
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
            color: #333;
        }

        body.dark-mode {
            background: linear-gradient(135deg, #232526 0%, #414345 100%);
        }

        .main-container {
            text-align: center;
            animation: fadeIn 1s ease-in;
            padding: 20px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .maintenance-icon {
            font-size: 3.5em;
            margin-bottom: 20px;
            animation: pulse 2s infinite;
        }

        @media (min-width: 768px) {
            .maintenance-icon {
                font-size: 5em;
                margin-bottom: 30px;
            }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        h1 {
            font-size: 2em;
            margin-bottom: 15px;
            font-weight: 700;
        }

        @media (min-width: 768px) {
            h1 {
                font-size: 3em;
                margin-bottom: 20px;
            }
        }

        h2.site-name {
            font-size: 1.8em;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        @media (min-width: 768px) {
            h2.site-name {
                font-size: 2.5em;
                margin-bottom: 25px;
            }
        }

        .lead {
            font-size: 1.1em;
            opacity: 0.95;
            padding: 0 15px;
        }

        @media (min-width: 768px) {
            .lead {
                font-size: 1.3em;
                padding: 0;
            }
        }

        .footer-section {
            position: fixed;
            bottom: 20px;
            font-size: 0.9em;
            opacity: 0.8;
        }

        .footer-section a {
            color: inherit;
            text-decoration: none;
            margin: 0 10px;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .footer-section a:hover {
            opacity: 1;
            text-decoration: underline;
        }

        .modal-content {
            border-radius: 15px;
            border: none;
        }

        body.dark-mode .modal-content {
            background: #2a2a2a;
            color: #e0e0e0;
        }

        .modal-header {
            border-bottom: 1px solid rgba(0,0,0,0.1);
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px 15px 0 0;
        }

        body.dark-mode .modal-header {
            background: linear-gradient(135deg, #444 0%, #555 100%);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .modal-body {
            max-height: 60vh;
            overflow-y: auto;
        }

        .modal-body h3 {
            color: #764ba2;
            margin-top: 25px;
            margin-bottom: 10px;
        }

        body.dark-mode .modal-body h3 {
            color: #b57edc;
        }

        .modal-body p {
            color: #555;
            line-height: 1.7;
        }

        body.dark-mode .modal-body p {
            color: #c0c0c0;
        }

        .btn-close-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 8px;
            font-weight: 500;
            transition: transform 0.2s;
        }

        .btn-close-custom:hover {
            transform: scale(1.05);
            color: white;
        }
    </style>
</head>
<body>
    <div class="container main-container">
        <div class="maintenance-icon">🔧</div>
        <h2 class="mb-3 fw-bold" id="siteNameTitle" style="font-size: 2.5em; letter-spacing: 2px;"></h2>
        <h1 id="title">Bakımda</h1>
        <p class="lead" id="description">Sitemiz şu anda bakım çalışması yapıyor. En kısa sürede geri döneceğiz!</p>
    </div>

    <div class="footer-section">
        © <span id="year"></span> <span id="siteName"></span> | 
        <a data-bs-toggle="modal" data-bs-target="#privacyModal">Gizlilik Politikası</a> | 
        <a data-bs-toggle="modal" data-bs-target="#termsModal">Kullanım Koşulları</a>
    </div>

    <!-- Privacy Modal -->
    <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="privacyModalLabel">Gizlilik Politikası</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="privacyContent"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-close-custom" data-bs-dismiss="modal" id="closePrivacy">- KAPAT -</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Terms Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="termsModalLabel">Kullanım Koşulları</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="termsContent"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-close-custom" data-bs-dismiss="modal" id="closeTerms">- KAPAT -</button>
                </div>
            </div>
        </div>
    </div>

    <script src="src/bootstrap.js"></script>
    <script>
        // Ses efektleri
        const audioContext = new (window.AudioContext || window.webkitAudioContext)();
        
        function playSound(type) {
            const oscillator = audioContext.createOscillator();
            const gainNode = audioContext.createGain();
            
            oscillator.connect(gainNode);
            gainNode.connect(audioContext.destination);
            
            if (type === 'open') {
                oscillator.frequency.setValueAtTime(400, audioContext.currentTime);
                oscillator.frequency.exponentialRampToValueAtTime(800, audioContext.currentTime + 0.2);
            } else {
                oscillator.frequency.setValueAtTime(800, audioContext.currentTime);
                oscillator.frequency.exponentialRampToValueAtTime(400, audioContext.currentTime + 0.2);
            }
            
            gainNode.gain.setValueAtTime(0.3, audioContext.currentTime);
            gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.2);
            
            oscillator.start(audioContext.currentTime);
            oscillator.stop(audioContext.currentTime + 0.2);
        }

        // Modal seslerini ekle
        const privacyModal = document.getElementById('privacyModal');
        const termsModal = document.getElementById('termsModal');

        privacyModal.addEventListener('show.bs.modal', function () {
            playSound('open');
        });

        privacyModal.addEventListener('hide.bs.modal', function () {
            playSound('close');
        });

        termsModal.addEventListener('show.bs.modal', function () {
            playSound('open');
        });

        termsModal.addEventListener('hide.bs.modal', function () {
            playSound('close');
        });

        // Site adını URL'den al
        const siteName = window.location.hostname.replace(/^www\./, '').split('.')[0];
        const siteNameUpper = siteName.toUpperCase();
        const siteNameCapitalized = siteName.charAt(0).toUpperCase() + siteName.slice(1);
        
        document.getElementById('siteNameTitle').textContent = siteNameUpper;
        document.getElementById('siteName').textContent = siteNameCapitalized;
        document.title = 'Bakımda - ' + siteNameCapitalized;

        // Yılı otomatik güncelle
        document.getElementById('year').textContent = new Date().getFullYear();

        // Dil ve tema tespiti
        const userLang = navigator.language.slice(0, 2);
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const prefersLight = window.matchMedia('(prefers-color-scheme: light)').matches;

        if (prefersDark) {
            document.body.classList.add('dark-mode');
        } else if (prefersLight) {
            document.body.classList.add('light-mode');
        }

        const translations = {
            tr: {
                title: 'Bakımda',
                description: 'Sitemiz şu anda bakım çalışması yapıyor. En kısa sürede geri döneceğiz!',
                privacyTitle: 'Gizlilik Politikası',
                termsTitle: 'Kullanım Koşulları',
                close: '- KAPAT -',
                privacyContent: `
                    <h3>Bilgi Toplama ve Kullanımı</h3>
                    <p>Sitemizi ziyaret ettiğinizde, temel kullanım istatistikleri ve teknik bilgiler toplanabilir. Bu bilgiler hizmetlerimizi geliştirmek için kullanılır.</p>
                    
                    <h3>Çerezler</h3>
                    <p>Sitemiz, kullanıcı deneyimini iyileştirmek için çerezler kullanabilir. Tarayıcı ayarlarınızdan çerezleri kontrol edebilirsiniz.</p>
                    
                    <h3>Veri Güvenliği</h3>
                    <p>Kişisel bilgilerinizin güvenliği bizim için önceliklidir. Bilgilerinizi korumak için endüstri standardı güvenlik önlemleri kullanıyoruz.</p>
                    
                    <h3>Üçüncü Taraf Bağlantılar</h3>
                    <p>Sitemiz üçüncü taraf web sitelerine bağlantılar içerebilir. Bu sitelerin gizlilik uygulamalarından sorumlu değiliz.</p>
                    
                    <h3>Değişiklikler</h3>
                    <p>Bu gizlilik politikasını zaman zaman güncelleyebiliriz. Değişiklikler bu sayfada yayınlanacaktır.</p>
                `,
                termsContent: `
                    <h3>Hizmet Kullanımı</h3>
                    <p>Bu web sitesini kullanarak, tüm geçerli yasalara ve düzenlemelere uymayı kabul edersiniz. Siteyi kötüye kullanmak yasaktır.</p>
                    
                    <h3>Fikri Mülkiyet</h3>
                    <p>Bu sitedeki tüm içerik, tasarım ve materyaller telif hakkı ile korunmaktadır. İzinsiz kullanım yasaktır.</p>
                    
                    <h3>Sorumluluk Reddi</h3>
                    <p>Hizmetlerimiz "olduğu gibi" sunulmaktadır. Site içeriğinin doğruluğu veya eksiksizliği konusunda garanti vermiyoruz.</p>
                    
                    <h3>Hizmet Kesintileri</h3>
                    <p>Bakım, güncellemeler veya teknik sorunlar nedeniyle hizmete erişim geçici olarak kesintiye uğrayabilir.</p>
                    
                    <h3>Değişiklikler</h3>
                    <p>Bu kullanım koşullarını önceden bildirimde bulunmaksızın değiştirme hakkını saklı tutarız.</p>
                    
                    <h3>İletişim</h3>
                    <p>Sorularınız için lütfen bizimle iletişime geçin.</p>
                `
            },
            en: {
                title: 'Under Maintenance',
                description: 'Our website is currently undergoing maintenance. We will be back shortly!',
                privacyTitle: 'Privacy Policy',
                termsTitle: 'Terms of Service',
                close: '- CLOSE -',
                privacyContent: `
                    <h3>Information Collection and Use</h3>
                    <p>When you visit our site, basic usage statistics and technical information may be collected. This information is used to improve our services.</p>
                    
                    <h3>Cookies</h3>
                    <p>Our site may use cookies to enhance user experience. You can control cookies through your browser settings.</p>
                    
                    <h3>Data Security</h3>
                    <p>The security of your personal information is our priority. We use industry-standard security measures to protect your data.</p>
                    
                    <h3>Third-Party Links</h3>
                    <p>Our site may contain links to third-party websites. We are not responsible for their privacy practices.</p>
                    
                    <h3>Changes</h3>
                    <p>We may update this privacy policy from time to time. Changes will be posted on this page.</p>
                `,
                termsContent: `
                    <h3>Use of Service</h3>
                    <p>By using this website, you agree to comply with all applicable laws and regulations. Misuse of the site is prohibited.</p>
                    
                    <h3>Intellectual Property</h3>
                    <p>All content, design, and materials on this site are protected by copyright. Unauthorized use is prohibited.</p>
                    
                    <h3>Disclaimer</h3>
                    <p>Our services are provided "as is". We make no warranties regarding the accuracy or completeness of site content.</p>
                    
                    <h3>Service Interruptions</h3>
                    <p>Access to the service may be temporarily interrupted due to maintenance, updates, or technical issues.</p>
                    
                    <h3>Changes</h3>
                    <p>We reserve the right to modify these terms of service without prior notice.</p>
                    
                    <h3>Contact</h3>
                    <p>For questions, please contact us.</p>
                `
            },
            de: {
                title: 'In Wartung',
                description: 'Unsere Website wird derzeit gewartet. Wir sind bald zurück!',
                privacyTitle: 'Datenschutzrichtlinie',
                termsTitle: 'Nutzungsbedingungen',
                close: '- SCHLIESSEN -',
                privacyContent: `
                    <h3>Informationserfassung und -nutzung</h3>
                    <p>Beim Besuch unserer Website können grundlegende Nutzungsstatistiken und technische Informationen erfasst werden.</p>
                    
                    <h3>Cookies</h3>
                    <p>Unsere Website verwendet möglicherweise Cookies zur Verbesserung der Benutzererfahrung.</p>
                    
                    <h3>Datensicherheit</h3>
                    <p>Die Sicherheit Ihrer persönlichen Daten hat für uns Priorität.</p>
                    
                    <h3>Links zu Drittanbietern</h3>
                    <p>Unsere Website kann Links zu Websites Dritter enthalten.</p>
                    
                    <h3>Änderungen</h3>
                    <p>Wir können diese Datenschutzrichtlinie von Zeit zu Zeit aktualisieren.</p>
                `,
                termsContent: `
                    <h3>Nutzung des Dienstes</h3>
                    <p>Durch die Nutzung dieser Website stimmen Sie zu, alle geltenden Gesetze einzuhalten.</p>
                    
                    <h3>Geistiges Eigentum</h3>
                    <p>Alle Inhalte auf dieser Website sind urheberrechtlich geschützt.</p>
                    
                    <h3>Haftungsausschluss</h3>
                    <p>Unsere Dienste werden "wie besehen" bereitgestellt.</p>
                    
                    <h3>Dienstunterbrechungen</h3>
                    <p>Der Zugriff auf den Dienst kann vorübergehend unterbrochen werden.</p>
                    
                    <h3>Änderungen</h3>
                    <p>Wir behalten uns das Recht vor, diese Nutzungsbedingungen zu ändern.</p>
                    
                    <h3>Kontakt</h3>
                    <p>Bei Fragen kontaktieren Sie uns bitte.</p>
                `
            },
            fr: {
                title: 'En Maintenance',
                description: 'Notre site est actuellement en maintenance. Nous reviendrons bientôt!',
                privacyTitle: 'Politique de Confidentialité',
                termsTitle: 'Conditions d\'Utilisation',
                close: '- FERMER -',
                privacyContent: `<h3>Collecte et utilisation des informations</h3><p>Lorsque vous visitez notre site, des statistiques d'utilisation de base peuvent être collectées.</p>`,
                termsContent: `<h3>Utilisation du service</h3><p>En utilisant ce site, vous acceptez de respecter toutes les lois applicables.</p>`
            },
            es: {
                title: 'En Mantenimiento',
                description: '¡Nuestro sitio está en mantenimiento. Volveremos pronto!',
                privacyTitle: 'Política de Privacidad',
                termsTitle: 'Términos de Servicio',
                close: '- CERRAR -',
                privacyContent: `<h3>Recopilación y uso de información</h3><p>Al visitar nuestro sitio, se pueden recopilar estadísticas básicas de uso.</p>`,
                termsContent: `<h3>Uso del servicio</h3><p>Al utilizar este sitio web, acepta cumplir con todas las leyes aplicables.</p>`
            },
            it: {
                title: 'In Manutenzione',
                description: 'Il nostro sito è in manutenzione. Torneremo presto!',
                privacyTitle: 'Politica sulla Privacy',
                termsTitle: 'Termini di Servizio',
                close: '- CHIUDI -',
                privacyContent: `<h3>Raccolta e utilizzo delle informazioni</h3><p>Quando visiti il nostro sito, possono essere raccolte statistiche di base.</p>`,
                termsContent: `<h3>Uso del servizio</h3><p>Utilizzando questo sito web, accetti di rispettare tutte le leggi applicabili.</p>`
            },
            pt: {
                title: 'Em Manutenção',
                description: 'Nosso site está em manutenção. Voltaremos em breve!',
                privacyTitle: 'Política de Privacidade',
                termsTitle: 'Termos de Serviço',
                close: '- FECHAR -',
                privacyContent: `<h3>Coleta e uso de informações</h3><p>Ao visitar nosso site, estatísticas básicas podem ser coletadas.</p>`,
                termsContent: `<h3>Uso do serviço</h3><p>Ao usar este site, você concorda em cumprir todas as leis aplicáveis.</p>`
            },
            ru: {
                title: 'На Обслуживании',
                description: 'Наш сайт находится на обслуживании. Скоро вернемся!',
                privacyTitle: 'Политика Конфиденциальности',
                termsTitle: 'Условия Использования',
                close: '- ЗАКРЫТЬ -',
                privacyContent: `<h3>Сбор и использование информации</h3><p>При посещении нашего сайта может собираться базовая статистика.</p>`,
                termsContent: `<h3>Использование сервиса</h3><p>Используя этот сайт, вы соглашаетесь соблюдать все применимые законы.</p>`
            },
            ar: {
                title: 'قيد الصيانة',
                description: 'موقعنا قيد الصيانة حاليًا. سنعود قريبًا!',
                privacyTitle: 'سياسة الخصوصية',
                termsTitle: 'شروط الخدمة',
                close: '- إغلاق -',
                privacyContent: `<h3>جمع المعلومات واستخدامها</h3><p>عند زيارة موقعنا، قد يتم جمع إحصائيات الاستخدام الأساسية.</p>`,
                termsContent: `<h3>استخدام الخدمة</h3><p>باستخدام هذا الموقع، فإنك توافق على الامتثال لجميع القوانين المعمول بها.</p>`
            },
            zh: {
                title: '维护中',
                description: '我们的网站正在维护中。我们很快就会回来！',
                privacyTitle: '隐私政策',
                termsTitle: '服务条款',
                close: '- 关闭 -',
                privacyContent: `<h3>信息收集和使用</h3><p>访问我们的网站时，可能会收集基本使用统计信息。</p>`,
                termsContent: `<h3>服务使用</h3><p>使用本网站即表示您同意遵守所有适用法律。</p>`
            }
        };

        const lang = translations[userLang] || translations['en'];

        document.getElementById('title').textContent = lang.title;
        document.getElementById('description').textContent = lang.description;
        document.getElementById('privacyModalLabel').textContent = lang.privacyTitle;
        document.getElementById('termsModalLabel').textContent = lang.termsTitle;
        document.getElementById('closePrivacy').textContent = lang.close;
        document.getElementById('closeTerms').textContent = lang.close;
        document.getElementById('privacyContent').innerHTML = lang.privacyContent;
        document.getElementById('termsContent').innerHTML = lang.termsContent;
        
        // Title'ı güncelle
        document.title = lang.title + ' - ' + siteNameCapitalized;
    </script>
</body>
</html>
