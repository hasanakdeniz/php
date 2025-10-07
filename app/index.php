<?php
// HTTP yanıt kodu 503 (Service Unavailable) olarak ayarlanır
http_response_code(503);

// Sayfanın yenilenmesini önlemek için önbellekleme başlıkları gönderilir
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakımdayız - Maintenance</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color-light: #f8f8f8;
            --text-color-light: #111111;
            --accent-color: #444444;
            
            --bg-color-dark: #111111;
            --text-color-dark: #f8f8f8;
            --card-bg-light: #ffffff;
            --card-bg-dark: #222222;
            --button-bg-light: #e0e0e0;
            --button-bg-dark: #3a3a3a;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: var(--bg-color-light);
            color: var(--text-color-light);
            transition: background-color 0.8s, color 0.8s;
            text-align: center;
            padding: 20px;
            background-image: radial-gradient(at 100% 0%, var(--bg-color-light), var(--bg-color-light), #e8e8e8);
        }

        body.dark-theme {
            background-color: var(--bg-color-dark);
            color: var(--text-color-dark);
            background-image: radial-gradient(at 100% 0%, var(--bg-color-dark), var(--bg-color-dark), #333333);
        }

        .container {
            width: 90%; 
            max-width: 600px;
            padding: 4rem 2rem; 
            border-radius: 20px; 
            background-color: var(--card-bg-light); 
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05), 0 20px 40px rgba(0, 0, 0, 0.15); 
            transition: box-shadow 0.6s, background-color 0.6s;
            border: 1px solid rgba(0, 0, 0, 0.05); 
        }
        
        body.dark-theme .container {
            background-color: var(--card-bg-dark); 
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4), 0 20px 40px rgba(0, 0, 0, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        h1 {
            color: var(--accent-color);
            font-size: clamp(2rem, 7vw, 3.5rem); 
            font-weight: 800; 
            margin-bottom: 0.5rem;
        }

        .site-identifier {
            font-weight: 600; 
            font-size: clamp(1.2rem, 3.5vw, 1.8rem); 
            color: var(--accent-color); 
            margin-bottom: 1.5rem;
            display: block; 
        }
        
        p {
            font-size: clamp(1.1rem, 3.5vw, 1.3rem);
            line-height: 1.7;
            font-weight: 400;
        }
        
        .button-group {
            margin-top: 2.5rem;
            display: flex;
            gap: 1rem;
            flex-wrap: wrap; 
            justify-content: center;
        }

        .button-group button {
            background-color: var(--button-bg-light);
            color: var(--text-color-light);
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.1s, box-shadow 0.3s;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .button-group button:hover {
            background-color: var(--accent-color);
            color: var(--card-bg-light);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        body.dark-theme .button-group button {
            background-color: var(--button-bg-dark);
            color: var(--text-color-dark);
            box-shadow: 0 2px 4px rgba(255, 255, 255, 0.1);
        }
        
        body.dark-theme .button-group button:hover {
            background-color: var(--accent-color);
            color: var(--text-color-dark);
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.3);
        }

        .contact-info {
            margin-top: 2rem; 
            padding: 1rem 0;
            border-top: 1px solid var(--button-bg-light);
            font-size: clamp(0.9rem, 2.5vw, 1rem);
        }

        body.dark-theme .contact-info {
            border-top: 1px solid var(--button-bg-dark);
        }

        .contact-info a {
            color: var(--accent-color);
            text-decoration: none;
            font-weight: 600;
        }

        .loading-dots {
            margin-top: 2rem;
            display: flex;
            justify-content: center;
        }

        .loading-dots span {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin: 0 5px;
            border-radius: 50%;
            background-color: var(--accent-color);
            opacity: 0.3;
            animation: pulse 1.5s infinite ease-in-out both;
        }

        .loading-dots span:nth-child(1) { animation-delay: 0s; }
        .loading-dots span:nth-child(2) { animation-delay: 0.2s; }
        .loading-dots span:nth-child(3) { animation-delay: 0.4s; }

        @keyframes pulse {
            0%, 80%, 100% { opacity: 0.3; transform: scale(0.9); }
            40% { opacity: 1; transform: scale(1.1); }
        }

        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            transition: opacity 0.3s;
            opacity: 0;
        }
        
        .modal-overlay.active {
            display: flex;
            opacity: 1;
        }

        .modal-content {
            background-color: var(--card-bg-light);
            color: var(--text-color-light);
            padding: 30px;
            border-radius: 10px;
            width: 90%;
            max-width: 700px;
            max-height: 80vh;
            overflow-y: auto;
            position: relative;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            text-align: left;
            transition: background-color 0.8s, color 0.8s;
        }
        
        body.dark-theme .modal-content {
            background-color: var(--card-bg-dark);
            color: var(--text-color-dark);
        }

        .modal-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--accent-color);
            margin-top: 0;
            margin-bottom: 20px;
            border-bottom: 1px solid var(--accent-color);
            padding-bottom: 10px;
        }

        .modal-body p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .modal-body strong {
            font-weight: 700;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 28px;
            font-weight: 400;
            color: var(--accent-color);
            cursor: pointer;
            transition: color 0.2s;
            line-height: 1;
        }

        .close-btn:hover {
            color: #888;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 id="baslik"></h1>
        <div id="site-name" class="site-identifier">SITEADI</div>
        <p id="mesaj"></p>
        
        <div id="button-group" class="button-group">
            <button id="privacy-btn" onclick="openModal('privacy')"></button>
            <button id="terms-btn" onclick="openModal('terms')"></button>
        </div>
        
        <div class="contact-info">
            <p id="contact-text">Sorularınız için: <a href="mailto:info@example.com">info@example.com</a></p>
        </div>

        <div class="loading-dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="policy-modal" class="modal-overlay" onclick="closeModal(event)">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal(event)">&times;</span>
            <h2 id="modal-title" class="modal-title"></h2>
            <div id="policy-content" class="modal-body">
            </div>
        </div>
    </div>

    <script>
        const contentData = {
            'tr': { 
                baslik: 'Bakımdayız', 
                mesaj: 'Hizmet kalitemizi artırmak için şu an planlı bakımdayız. Kısa süre içinde geri döneceğiz.',
                contact: 'Sorularınız için: <a href="mailto:info@example.com">info@example.com</a>',
                privacyBtn: 'Gizlilik Politikası', 
                termsBtn: 'Kullanıcı Sözleşmesi', 
                privacy: { title: 'Gizlilik Politikası (Bakım)', text: 'Bu web sitesi, normalde kullanıcı deneyimini iyileştirmek için minimum düzeyde veri toplar. **Site şu anda bakımda olduğu için, hiçbir kullanıcı verisi işlenmemektedir ve çerez kullanılmamaktadır.** Bakım tamamlandığında, standart gizlilik politikamız yürürlüğe girecektir. Daha fazla bilgi için lütfen daha sonra tekrar kontrol edin.' },
                terms: { title: 'Kullanıcı Sözleşmesi (Şartlar)', text: 'Bu siteye erişiminiz ve kullanımı, bu kullanıcı sözleşmesine tabidir. **Sitenin bakımda olması nedeniyle hizmetler geçici olarak kullanılamamaktadır.** Sitenin canlı hale gelmesiyle birlikte, tüm kullanıcılar bu şartları kabul etmiş sayılır. Lütfen hizmetlerimiz kullanıma açıldığında şartları inceleyiniz.' }
            },
            'en': { 
                baslik: 'Under Maintenance', 
                mesaj: 'We are currently undergoing scheduled maintenance to improve our service quality. We will be back shortly.',
                contact: 'For inquiries: <a href="mailto:info@example.com">info@example.com</a>',
                privacyBtn: 'Privacy Policy', 
                termsBtn: 'Terms of Service', 
                privacy: { title: 'Privacy Policy (Maintenance)', text: 'This website normally collects minimal data to enhance user experience. **As the site is currently under maintenance, no user data is being processed, and no cookies are in use.** Our standard privacy policy will take effect once maintenance is complete. Please check back later for more details.' },
                terms: { title: 'Terms of Service', text: 'Your access to and use of this site is conditioned upon your acceptance of these Terms of Service. **Due to site maintenance, services are temporarily unavailable.** By continuing to use the site once it is live, all users are considered to have accepted our legal terms. Please review the terms when our services become available.' }
            },
            'zh': { 
                baslik: '系统维护中', 
                mesaj: '我们正在进行计划性维护，以提高服务质量。我们将很快回来。',
                contact: '如有疑问，请联系: <a href="mailto:info@example.com">info@example.com</a>',
                privacyBtn: '隐私政策', 
                termsBtn: '服务条款', 
                privacy: { title: '隐私政策 (维护)', text: '本网站通常收集最少量的数据以增强用户体验。**由于本网站目前正在维护中，因此不处理任何用户数据，也不使用任何 Cookie。** 维护完成后，我们的标准隐私政策将生效。请稍后查看更多详情。' },
                terms: { title: '服务条款', text: '您对本网站的访问和使用取决于您对本服务条款的接受。**由于网站维护，服务暂时不可用。** 一旦网站恢复正常运行，所有用户将被视为已接受我们的法律条款。请在我们的服务恢复可用时查看条款。' }
            },
            'es': { 
                baslik: 'En Mantenimiento', 
                mesaj: 'Actualmente estamos en mantenimiento programado para mejorar nuestro servicio. Volveremos en breve.',
                contact: 'Para consultas: <a href="mailto:info@example.com">info@example.com</a>',
                privacyBtn: 'Política de Privacidad', 
                termsBtn: 'Términos de Servicio', 
                privacy: { title: 'Política de Privacidad (Mantenimiento)', text: 'Este sitio web normalmente recopila datos mínimos para mejorar la experiencia del usuario. **Dado que el sitio está actualmente en mantenimiento, no se están procesando datos del usuario ni se están utilizando cookies.** Nuestra política de privacidad estándar entrará en vigencia una vez que se complete el mantenimiento. Por favor, vuelva a consultar más tarde para obtener más detalles.' },
                terms: { title: 'Términos de Servicio', text: 'Su acceso y uso de este sitio están condicionados a su aceptación de estos Términos de Servicio. **Debido al mantenimiento del sitio, los servicios no están disponibles temporalmente.** Al continuar utilizando el sitio una vez que esté activo, se considera que todos los usuarios han aceptado nuestros términos legales. Revise los términos cuando nuestros servicios estén disponibles.' }
            },
            'hi': { 
                baslik: 'रखरखाव में', 
                mesaj: 'हम अपनी सेवा की गुणवत्ता में सुधार के लिए योजनाबद्ध रखरखाव कर रहे हैं। हम जल्द ही वापस आएंगे।',
                contact: 'पूछताछ के लिए: <a href="mailto:info@example.com">info@example.com</a>',
                privacyBtn: 'गोपनीयता नीति', 
                termsBtn: 'सेवा की शर्तें', 
                privacy: { title: 'गोपनीयता नीति (रखरखाव)', text: 'यह वेबसाइट सामान्यतः उपयोगकर्ता अनुभव को बेहतर बनाने के लिए न्यूनतम डेटा एकत्र करती है। **चूंकि साइट वर्तमान में रखरखाव के अधीन है, इसलिए कोई भी उपयोगकर्ता डेटा संसाधित नहीं किया जा रहा है, और कोई कुकीज़ उपयोग में नहीं हैं।** रखरखाव पूरा होने के बाद हमारी मानक गोपनीयता नीति लागू होगी। कृपया अधिक विवरण के लिए बाद में जांच करें।' },
                terms: { title: 'सेवा की शर्तें', text: 'इस साइट तक आपकी पहुंच और उपयोग इन सेवा की शर्तों की स्वीकृति पर निर्भर करता है। **साइट के रखरखाव के कारण, सेवाएं अस्थायी रूप से अनुपलब्ध हैं।** साइट के लाइव होने के बाद इसका उपयोग जारी रखने पर, सभी उपयोगकर्ताओं को हमारी कानूनी शर्तों को स्वीकार करने वाला माना जाएगा। कृपया हमारी सेवाएं उपलब्ध होने पर शर्तों की समीक्षा करें।' }
            },
            'ar': { 
                baslik: 'تحت الصيانة', 
                mesaj: 'نحن حاليًا نجري صيانة مجدولة لتحسين جودة خدماتنا. سنعود قريباً.',
                contact: 'للاستفسارات: <a href="mailto:info@example.com">info@example.com</a>',
                privacyBtn: 'سياسة الخصوصية', 
                termsBtn: 'شروط الخدمة', 
                privacy: { title: 'سياسة الخصوصية (صيانة)', text: 'عادةً ما يجمع هذا الموقع الحد الأدنى من البيانات لتحسين تجربة المستخدم. **نظرًا لأن الموقع قيد الصيانة حاليًا، فلا يتم معالجة أي بيانات للمستخدمين ولا يتم استخدام أي ملفات تعريف ارتباط (كوكيز).** ستدخل سياسة الخصوصية القياسية الخاصة بنا حيز التنفيذ بمجرد اكتمال الصيانة. يرجى التحقق لاحقًا لمزيد من التفاصيل.' },
                terms: { title: 'شروط الخدمة', text: 'يخضع وصولك واستخدامك لهذا الموقع لقبولك شروط الخدمة هذه. **نظرًا لصيانة الموقع، فإن الخدمات غير متوفرة مؤقتًا.** من خلال الاستمرار في استخدام الموقع بمجرد تشغيله، يعتبر جميع المستخدمين قد وافقوا على شروطنا القانونية. يرجى مراجعة الشروط عندما تصبح خدماتنا متاحة.' }
            },
            'pt': { 
                baslik: 'Em Manutenção', 
                mesaj: 'Estamos em manutenção programada para melhorar a qualidade do nosso serviço. Voltaremos em breve.',
                contact: 'Para perguntas: <a href="mailto:info@example.com">info@example.com</a>',
                privacyBtn: 'Política de Privacidade', 
                termsBtn: 'Termos de Serviço', 
                privacy: { title: 'Política de Privacidade (Manutenção)', text: 'Este website normalmente coleta dados mínimos para aprimorar a experiência do usuário. **Como o site está atualmente em manutenção, nenhum dado do usuário está sendo processado e nenhum cookie está em uso.** Nossa política de privacidade padrão entrará em vigor assim que a manutenção for concluída. Por favor, volte mais tarde para mais detalhes.' },
                terms: { title: 'Termos de Serviço', text: 'Seu acesso e uso deste site estão condicionados à sua aceitação destes Termos de Serviço. **Devido à manutenção do site, os serviços estão temporariamente indisponíveis.** Ao continuar a usar o site quando ele estiver ativo, todos os usuários são considerados como tendo aceitado nossos termos legais. Por favor, revise os termos quando nossos serviços estiverem disponíveis.' }
            },
            'ru': { 
                baslik: 'На Обслуживании', 
                mesaj: 'В настоящее время мы проводим плановое обслуживание для повышения качества нашего сервиса. Скоро вернемся.',
                contact: 'По вопросам: <a href="mailto:info@example.com">info@example.com</a>',
                privacyBtn: 'Политика конфиденциальности', 
                termsBtn: 'Условия использования', 
                privacy: { title: 'Политика конфиденциальности (Обслуживание)', text: 'Этот веб-сайт обычно собирает минимальные данные для улучшения пользовательского опыта. **Поскольку сайт в настоящее время находится на обслуживании, никакие пользовательские данные не обрабатываются, и файлы cookie не используются.** Наша стандартная политика конфиденциальности вступит в силу после завершения обслуживания. Пожалуйста, зайдите позже для получения более подробной информации.' },
                terms: { title: 'Условия использования', text: 'Ваш доступ и использование этого сайта обусловлены вашим согласием с настоящими Условиями использования. **В связи с обслуживанием сайта услуги временно недоступны.** Считается, что все пользователи приняли наши юридические условия, продолжая использовать сайт после его запуска. Пожалуйста, ознакомьтесь с условиями, когда наши услуги станут доступны.' }
            },
            'ja': { 
                baslik: 'メンテナンス中', 
                mesaj: 'サービス品質向上のため、現在計画的なメンテナンスを実施しております。まもなく再開いたします。',
                contact: 'お問い合わせ: <a href="mailto:info@example.com">info@example.com</a>',
                privacyBtn: 'プライバシーポリシー', 
                termsBtn: '利用規約', 
                privacy: { title: 'プライバシーポリシー (メンテナンス)', text: 'このウェブサイトは、通常、ユーザーエクスペリエンスを向上させるために最小限のデータを収集します。**現在、サイトはメンテナンス中のため、ユーザーデータは処理されておらず、Cookieも使用されていません。** メンテナンス完了後、当社の標準プライバシーポリシーが適用されます。詳細については、後でご確認ください。' },
                terms: { title: '利用規約', text: 'このサイトへのアクセスおよび利用は、本利用規約への同意を条件とします。**サイトのメンテナンスのため、サービスは一時的に利用できません。** サイトが公開された後も引き続き使用することにより、すべてのユーザーが当社の法的条件に同意したものと見なされます。サービスが利用可能になった際に規約をご確認ください。' }
            },
            'de': { 
                baslik: 'Wartungsarbeiten', 
                mesaj: 'Wir führen derzeit geplante Wartungsarbeiten durch, um unsere Servicequalität zu verbessern. Wir sind bald zurück.',
                contact: 'Für Anfragen: <a href="mailto:info@example.com">info@example.com</a>',
                privacyBtn: 'Datenschutzrichtlinie', 
                termsBtn: 'Nutzungsbedingungen', 
                privacy: { title: 'Datenschutzrichtlinie (Wartung)', text: 'Diese Website sammelt normalerweise minimale Daten, um die Benutzererfahrung zu verbessern. **Da sich die Website derzeit in Wartung befindet, werden keine Benutzerdaten verarbeitet und keine Cookies verwendet.** Unsere Standard-Datenschutzrichtlinie tritt in Kraft, sobald die Wartung abgeschlossen ist. Bitte prüfen Sie später erneut für weitere Details.' },
                terms: { title: 'Nutzungsbedingungen', text: 'Ihr Zugriff auf und Ihre Nutzung dieser Website unterliegen Ihrer Zustimmung zu diesen Nutzungsbedingungen. **Aufgrund von Wartungsarbeiten stehen die Dienste vorübergehend nicht zur Verfügung.** Durch die weitere Nutzung der Website, sobald diese wieder live ist, wird davon ausgegangen, dass alle Benutzer unsere rechtlichen Bedingungen akzeptiert haben. Bitte überprüfen Sie die Bedingungen, sobald unsere Dienste verfügbar sind.' }
            }
        };

        const userLang = (navigator.language || navigator.userLanguage).toLowerCase();
        const selectedLang = Object.keys(contentData).find(lang => userLang.startsWith(lang)) || 'en';

        function getSiteNameFromUrl() {
            const hostname = window.location.hostname;
            let name = hostname.replace(/^www\./, '');
            
            if (name === 'localhost' || name.match(/^\d+(\.\d+){3}(:\d+)?$/)) {
                return name.toUpperCase();
            }

            name = name.split('.')[0];
            return name.toUpperCase();
        }

        function openModal(type) {
            const modal = document.getElementById('policy-modal');
            const content = contentData[selectedLang];
            let doc;

            if (type === 'privacy') {
                doc = content.privacy;
            } else if (type === 'terms') {
                doc = content.terms;
            } else {
                return; 
            }

            document.getElementById('modal-title').textContent = doc.title;
            
            document.getElementById('policy-content').innerHTML = `<p>${doc.text.replace(/\*\*/g, '<strong>')}</p>`;
            
            modal.classList.add('active');
        }

        function closeModal(event) {
            if (event.target.classList.contains('close-btn') || event.target.classList.contains('modal-overlay')) {
                document.getElementById('policy-modal').classList.remove('active');
            }
        }

        const mainContent = contentData[selectedLang];
        
        document.getElementById('baslik').textContent = mainContent.baslik;
        document.getElementById('mesaj').textContent = mainContent.mesaj;

        document.getElementById('privacy-btn').textContent = mainContent.privacyBtn;
        document.getElementById('terms-btn').textContent = mainContent.termsBtn;
        
        document.getElementById('contact-text').innerHTML = mainContent.contact;

        const siteNameElement = document.getElementById('site-name');
        if (siteNameElement) {
            siteNameElement.textContent = getSiteNameFromUrl();
        }

        const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
        function applyTheme(e) {
            if (e.matches) {
                document.body.classList.add('dark-theme');
            } else {
                document.body.classList.remove('dark-theme');
            }
        }
        applyTheme(prefersDarkScheme);
        prefersDarkScheme.addListener(applyTheme);
        
    </script>

</body>
</html>
