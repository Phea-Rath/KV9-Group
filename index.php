<?php
// ============================================================
// KV9 GROUP - Main Layout / Router
// ============================================================
session_start();

require_once 'includes/functions.php';

// Fallback if session lang not set
if (!isset($_SESSION['lang']) || !in_array($_SESSION['lang'], ['km', 'en'])) {
    $_SESSION['lang'] = 'en';
}
$current_lang = $_SESSION['lang'];

// ------------------------------------------------------------
// Determine page + build SEO title
// ------------------------------------------------------------
$page = isset($_GET['page']) ? preg_replace('/[^a-zA-Z0-9_-]/', '', $_GET['page']) : 'home';
$allowed_pages = ['home', 'vision', 'founder', 'team', 'subsidiaries', 'portfolio', 'contact'];
if (!in_array($page, $allowed_pages)) {
    $page = '404';
}

$page_titles = [
    'home'         => 'KV9 GROUP',
    'vision'       => __('vision_mission') . ' - KV9 GROUP',
    'founder'      => __('founder') . ' - KV9 GROUP',
    'team'         => __('team') . ' - KV9 GROUP',
    'subsidiaries' => __('subsidiaries') . ' - KV9 GROUP',
    'portfolio'    => __('portfolio') . ' - KV9 GROUP',
    'contact'      => __('contact') . ' - KV9 GROUP',
    '404'          => __('page_not_found') . ' - KV9 GROUP',
];
$page_title = $page_titles[$page] ?? 'KV9 GROUP';
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($current_lang); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="KV9 GROUP - <?php echo htmlspecialchars(__('about_us')); ?>">
    <title><?php echo htmlspecialchars($page_title); ?></title>

    <!-- Google Fonts for Khmer Unicode Support -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,300..700;1,300..700&family=Preahvihear&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        .nav-blue-bg { background: #06069b; }
        /* Smooth dropdown fade */
        .dropdown-menu { animation: fadeIn 0.15s ease-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(-4px); } to { opacity: 1; transform: translateY(0); } }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['"Kantumruy Pro"', '"Preahvihear"', 'sans-serif'] }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased flex flex-col min-h-screen">

    <!-- ============================================================ -->
    <!-- HEADER / NAVBAR -->
    <!-- ============================================================ -->
    <header class="nav-blue-bg shadow-md sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 h-16 flex justify-between items-center">

            <!-- Brand Logo -->
            <div class="flex items-center space-x-3">
                <a href="index.php" class="flex items-center space-x-3 group">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 bg-white rounded-full p-2 shadow-md flex items-center justify-center overflow-hidden shrink-0">
                        <img src="images/kv9logo.jpg" alt="KV9 Logo" class="w-full h-full object-contain">
                    </div>
                    <span class="font-extrabold text-white text-base sm:text-lg tracking-wide group-hover:text-blue-200 transition-colors">
                        KV9 GROUP
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation Menu -->
            <nav class="hidden md:flex items-center space-x-6 text-sm font-medium">
                <a href="index.php" class="text-white hover:text-gray-200 transition" data-lang-key="home"><?php echo __('home'); ?></a>

                <!-- About Us Dropdown -->
                <div class="relative group">
                    <button class="flex items-center space-x-1 text-white hover:text-gray-200 focus:outline-none py-5">
                        <span data-lang-key="about_us"><?php echo __('about_us'); ?></span>
                        <i class="fa-solid fa-chevron-down text-xs ml-1 transition-transform group-hover:rotate-180"></i>
                    </button>
                    <div class="absolute left-0 top-full w-56 bg-white border border-gray-100 shadow-xl rounded-md py-2 hidden group-hover:block dropdown-menu z-50">
                        <a href="index.php?page=vision" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-900" data-lang-key="vision_mission"><?php echo __('vision_mission'); ?></a>
                        <a href="index.php?page=founder" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-900" data-lang-key="founder"><?php echo __('founder'); ?></a>
                        <a href="index.php?page=team" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-900" data-lang-key="team"><?php echo __('team'); ?></a>
                        <a href="index.php?page=subsidiaries" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-900" data-lang-key="subsidiaries"><?php echo __('subsidiaries'); ?></a>
                    </div>
                </div>

                <a href="index.php?page=portfolio" class="hover:text-gray-200 text-white transition" data-lang-key="portfolio"><?php echo __('portfolio'); ?></a>
                <a href="index.php?page=contact" class="hover:text-gray-200 text-white transition" data-lang-key="contact"><?php echo __('contact'); ?></a>

                <!-- Desktop Single-Toggle Language Switcher -->
                <div class="flex items-center pl-4 border-l border-blue-800">
                    <button onclick="switchLanguage('<?php echo ($current_lang == 'km') ? 'en' : 'km'; ?>')" id="lang-toggle-desktop"
                        class="flex items-center space-x-2 text-white hover:text-gray-200 transition cursor-pointer focus:outline-none">
                        <?php if ($current_lang == 'km'): ?>
                            <img src="https://flagcdn.com/w20/gb.png" alt="English" class="w-5 h-3.5 object-cover rounded-sm shadow-sm">
                            <span class="text-sm font-medium">English</span>
                        <?php else: ?>
                            <img src="https://flagcdn.com/w20/kh.png" alt="Khmer" class="w-5 h-3.5 object-cover rounded-sm shadow-sm">
                            <span class="text-sm font-medium">ភាសាខ្មែរ</span>
                        <?php endif; ?>
                    </button>
                </div>
            </nav>

            <!-- Mobile Hamburger Button -->
            <button id="menu-btn" aria-label="Toggle Navigation" aria-expanded="false"
                class="md:hidden text-white focus:outline-none p-2 rounded hover:bg-blue-900">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>
        </div>

        <!-- Mobile Navigation Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden bg-blue-950 border-t border-blue-900 px-4 pt-2 pb-4 space-y-2 text-sm font-medium">
            <a href="index.php" class="block py-2 text-white hover:text-blue-200" data-lang-key="home"><?php echo __('home'); ?></a>
            <a href="index.php?page=vision" class="block py-2 text-white hover:text-blue-200" data-lang-key="vision_mission"><?php echo __('vision_mission'); ?></a>
            <a href="index.php?page=founder" class="block py-2 text-white hover:text-blue-200" data-lang-key="founder"><?php echo __('founder'); ?></a>
            <a href="index.php?page=team" class="block py-2 text-white hover:text-blue-200" data-lang-key="team"><?php echo __('team'); ?></a>
            <a href="index.php?page=subsidiaries" class="block py-2 text-white hover:text-blue-200" data-lang-key="subsidiaries"><?php echo __('subsidiaries'); ?></a>
            <a href="index.php?page=portfolio" class="block py-2 text-white hover:text-blue-200" data-lang-key="portfolio"><?php echo __('portfolio'); ?></a>
            <a href="index.php?page=contact" class="block py-2 text-white hover:text-blue-200" data-lang-key="contact"><?php echo __('contact'); ?></a>

            <div class="flex items-center justify-between pt-3 mt-2 border-t border-blue-900">
                <span class="text-xs text-blue-300" data-lang-key="language_label"><?php echo __('language_label'); ?></span>
                <div>
                    <button onclick="switchLanguage('<?php echo ($current_lang == 'km') ? 'en' : 'km'; ?>')" id="lang-toggle-mobile"
                        class="flex items-center space-x-2 text-white hover:text-blue-200 transition cursor-pointer py-1">
                        <?php if ($current_lang == 'km'): ?>
                            <img src="https://flagcdn.com/w20/gb.png" alt="English" class="w-5 h-3.5 object-cover rounded-sm shadow-sm">
                            <span class="text-sm font-medium">English</span>
                        <?php else: ?>
                            <img src="https://flagcdn.com/w20/kh.png" alt="Khmer" class="w-5 h-3.5 object-cover rounded-sm shadow-sm">
                            <span class="text-sm font-medium">ភាសាខ្មែរ</span>
                        <?php endif; ?>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- ============================================================ -->
    <!-- DYNAMIC CONTENT AREA -->
    <!-- ============================================================ -->
    <main class="flex-grow">
        <?php
            $file = 'pages/' . $page . '.php';
            if (file_exists($file)) {
                include($file);
            } else {
                echo "<div class='max-w-4xl mx-auto px-4 py-20 text-center'>
                        <h2 class='text-2xl font-bold text-red-600' data-lang-key='page_not_found'>" . __('page_not_found') . "</h2>
                        <p class='text-gray-500 mt-2' data-lang-key='try_again'>" . __('try_again') . "</p>
                        <a href='index.php' class='inline-block mt-6 px-5 py-2 bg-blue-900 text-white rounded hover:bg-blue-800 transition' data-lang-key='home'>" . __('home') . "</a>
                      </div>";
            }
        ?>
    </main>

    <!-- ============================================================ -->
    <!-- FOOTER -->
    <!-- ============================================================ -->
    <footer class="bg-blue-950 text-gray-300 text-xs py-12 border-t border-blue-900">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-8">
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-10 h-10 bg-white rounded-full p-2 shadow-md flex items-center justify-center overflow-hidden shrink-0">
                        <img src="images/kv9logo.jpg" alt="KV9 Logo" class="w-full h-full object-contain">
                    </div>
                    <span class="font-bold text-white text-sm tracking-tight">KV9 GROUP</span>
                </div>
                <p class="text-blue-200 leading-relaxed mb-3" data-lang-key="address"><?php echo __('address'); ?></p>
                <p class="text-blue-200">
                    <span data-lang-key="phone"><?php echo __('phone'); ?></span>: +855 61 955 859<br>
                    <span data-lang-key="email"><?php echo __('email'); ?></span>: koyvitou999@gmail.com
                </p>
            </div>
            <div>
                <h4 class="text-white font-bold text-sm mb-4 uppercase tracking-wider" data-lang-key="quick_links"><?php echo __('quick_links'); ?></h4>
                <ul class="space-y-2">
                    <li><a href="index.php" class="hover:text-white transition" data-lang-key="home"><?php echo __('home'); ?></a></li>
                    <li><a href="index.php?page=vision" class="hover:text-white transition" data-lang-key="about_us"><?php echo __('about_us'); ?></a></li>
                    <li><a href="index.php?page=team" class="hover:text-white transition" data-lang-key="team"><?php echo __('team'); ?></a></li>
                    <li><a href="index.php?page=subsidiaries" class="hover:text-white transition" data-lang-key="subsidiaries"><?php echo __('subsidiaries'); ?></a></li>
                    <li><a href="index.php?page=portfolio" class="hover:text-white transition" data-lang-key="portfolio"><?php echo __('portfolio'); ?></a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold text-sm mb-4 uppercase tracking-wider" data-lang-key="career_opp"><?php echo __('career_opp'); ?></h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-white transition" data-lang-key="news_updates"><?php echo __('news_updates'); ?></a></li>
                    <li><a href="#" class="hover:text-white transition" data-lang-key="privacy_policy"><?php echo __('privacy_policy'); ?></a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold text-sm mb-4 uppercase tracking-wider" data-lang-key="contact"><?php echo __('contact'); ?></h4>
                <p class="text-blue-200 mb-4" data-lang-key="follow_us"><?php echo __('follow_us'); ?></p>
                <div class="flex space-x-3">
                    <a href="#" aria-label="Facebook" class="w-8 h-8 rounded-full bg-blue-900 hover:bg-blue-800 flex items-center justify-center transition"><i class="fa-brands fa-facebook-f text-white text-sm"></i></a>
                    <a href="#" aria-label="Telegram" class="w-8 h-8 rounded-full bg-blue-900 hover:bg-blue-800 flex items-center justify-center transition"><i class="fa-brands fa-telegram text-white text-sm"></i></a>
                    <a href="#" aria-label="LinkedIn" class="w-8 h-8 rounded-full bg-blue-900 hover:bg-blue-800 flex items-center justify-center transition"><i class="fa-brands fa-linkedin-in text-white text-sm"></i></a>
                </div>
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-4 border-t border-blue-900 pt-6 text-center text-blue-300">
            © 2026 KV9 GROUP. <span data-lang-key="rights"><?php echo __('rights'); ?></span>
        </div>
    </footer>

    <!-- ============================================================ -->
    <!-- SCRIPTS -->
    <!-- ============================================================ -->
    <script>
        // ---- AJAX Language Switcher (No Refresh) ----
        function switchLanguage(lang) {
            if (lang !== 'km' && lang !== 'en') return;

            fetch('api/ajax_lang.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'lang=' + encodeURIComponent(lang)
            })
            .then(r => r.json())
            .then(data => {
                if (data.status !== 'success') {
                    console.error('Language switch failed:', data.message);
                    return;
                }

                // 1. Update all [data-lang-key] text elements on the page via AJAX response
                const t = data.translations || {};
                document.querySelectorAll('[data-lang-key]').forEach(el => {
                    const key = el.getAttribute('data-lang-key');
                    if (Object.prototype.hasOwnProperty.call(t, key)) {
                        el.innerHTML = t[key];
                    }
                });

                // 2. Update <html lang> attribute
                document.documentElement.setAttribute('lang', lang);

                // 3. Update page <title> if translated
                const titleEl = document.querySelector('title');
                if (titleEl) {
                    // Re-evaluate page key mapping or use home title as fallback
                    const pageKey = '<?php echo $page; ?>';
                    if (t[pageKey]) titleEl.textContent = t[pageKey] + ' - KV9 GROUP';
                }

                // 4. Dynamically swap the toggle buttons (Desktop & Mobile) to the alternate language
                const nextLang = (lang === 'km') ? 'en' : 'km';
                const nextFlag = (lang === 'km') ? 'https://flagcdn.com/w20/gb.png' : 'https://flagcdn.com/w20/kh.png';
                const nextLabel = (lang === 'km') ? 'English' : 'ភាសាខ្មែរ';
                const nextAlt = (lang === 'km') ? 'English' : 'Khmer';

                ['lang-toggle-desktop', 'lang-toggle-mobile'].forEach(id => {
                    const btn = document.getElementById(id);
                    if (btn) {
                        btn.setAttribute('onclick', `switchLanguage('${nextLang}')`);
                        btn.innerHTML = `
                            <img src="${nextFlag}" alt="${nextAlt}" class="w-5 h-3.5 object-cover rounded-sm shadow-sm">
                            <span class="text-sm font-medium">${nextLabel}</span>
                        `;
                    }
                });

                // 5. Save preference locally
                try { localStorage.setItem('kv9_lang', lang); } catch (e) {}
            })
            .catch(err => console.error('Language switch error:', err));
        }

        // ---- Mobile menu toggle ----
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                const isHidden = mobileMenu.classList.toggle('hidden');
                menuBtn.setAttribute('aria-expanded', !isHidden);
                const icon = menuBtn.querySelector('i');
                if (icon) {
                    icon.className = isHidden
                        ? 'fa-solid fa-bars text-xl'
                        : 'fa-solid fa-xmark text-xl';
                }
            });
        }

        // ---- Close mobile menu when a link inside is clicked ----
        if (mobileMenu) {
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    menuBtn?.setAttribute('aria-expanded', 'false');
                    const icon = menuBtn?.querySelector('i');
                    if (icon) icon.className = 'fa-solid fa-bars text-xl';
                });
            });
        }

        // ---- Auto-apply saved language preference on first visit ----
        document.addEventListener('DOMContentLoaded', () => {
            try {
                const saved = localStorage.getItem('kv9_lang');
                const current = document.documentElement.getAttribute('lang');
                if (saved && saved !== current) {
                    switchLanguage(saved);
                }
            } catch (e) {}
        });
    </script>
</body>
</html>