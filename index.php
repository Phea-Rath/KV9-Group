<?php
session_start();
?>
<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KV9 GROUP</title>
    <!-- Google Fonts for Khmer Unicode Support -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,300..700;1,300..700&family=Preahvihear&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .nav-blue-bg {
            background: #06069b;
        }
    </style>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        kv9Red: '#D32F2F',
                        kv9Dark: '#111827',
                    },
                    fontFamily: {
                        sans: ['"Kantumruy Pro"', '"Preahvihear"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased flex flex-col min-h-screen">

    <!-- Header / Navbar -->
    <header class="nav-blue-bg shadow-md sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 h-16 flex justify-between items-center">
            
            <!-- Brand Logo -->
            <div class="flex items-center space-x-3">
                <a href="index.php" class="flex items-center space-x-3 group">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 bg-white rounded-full p-2 shadow-md flex items-center justify-center overflow-hidden transition-transform duration-300 group-hover:scale-105 shrink-0">
                        <img src="images/kv9logo.jpg" alt="KV9 Logo" class="w-full h-full object-contain">
                    </div>
                    <span class="font-extrabold text-white text-base sm:text-lg tracking-wide group-hover:text-blue-200 transition-colors">
                        KV9 GROUP
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation Menu -->
            <nav class="hidden md:flex items-center space-x-6 text-sm font-medium">
                <a href="index.php" class="text-white hover:text-gray-200 transition">ទំព័រដើម</a>
                
                <!-- About Us Dropdown (អំពីយើង) -->
                <div class="relative group">
                    <button class="flex items-center space-x-1 text-white hover:text-gray-200 focus:outline-none py-5">
                        <span>អំពីយើង</span>
                        <i class="fa-solid fa-chevron-down text-xs ml-1"></i>
                    </button>
                    <!-- Dropdown Content -->
                    <div class="absolute left-0 top-full w-56 bg-white border border-gray-100 shadow-xl rounded-md py-2 hidden group-hover:block transition-all z-50">
                        <a href="index.php?page=vision" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-900">ចក្ខវិស័យ,បេសកកម្ម,គុណតម្លៃ</a>
                        <a href="index.php?page=founder" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-900">ស្ថាបនិក</a>
                        <a href="index.php?page=team" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-900">រចនាសម្ព័ន្ធបុគ្គលិក</a>
                        <a href="index.php?page=subsidiaries" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-900">ក្រុមហ៊ុនបុត្រសម្ព័ន្ធ</a>
                    </div>
                </div>

                <a href="index.php?page=portfolio" class="hover:text-gray-200 text-white transition">អាជីវកម្ម</a>
                <a href="index.php?page=contact" class="hover:text-gray-200 text-white transition">ទំនាក់ទំនង</a>
            </nav>

            <!-- Mobile Hamburger Button -->
            <button id="menu-btn" aria-label="Toggle Navigation" class="md:hidden text-white focus:outline-none p-2 rounded hover:bg-blue-900">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>
        </div>

        <!-- Mobile Navigation Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden bg-blue-950 border-t border-blue-900 px-4 pt-2 pb-4 space-y-2 text-sm font-medium">
            <a href="index.php" class="block py-2 text-white hover:text-blue-200">ទំព័រដើម</a>
            
            <!-- Mobile Submenu -->
            <div class="py-1">
                <button id="mobile-dropdown-btn" class="w-full flex justify-between items-center py-2 text-white hover:text-blue-200 focus:outline-none">
                    <span>អំពីយើង</span>
                    <i id="mobile-arrow" class="fa-solid fa-chevron-down text-xs transition-transform duration-200"></i>
                </button>
                <div id="mobile-dropdown" class="hidden pl-4 space-y-1 mt-1 border-l-2 border-blue-700">
                    <a href="index.php?page=vision" class="block py-1.5 text-gray-300 hover:text-white">ចក្ខវិស័យ,បេសកកម្ម,គុណតម្លៃ</a>
                    <a href="index.php?page=founder" class="block py-1.5 text-gray-300 hover:text-white">ស្ថាបនិក</a>
                    <a href="index.php?page=team" class="block py-1.5 text-gray-300 hover:text-white">រចនាសម្ព័ន្ធបុគ្គលិក</a>
                    <a href="index.php?page=subsidiaries" class="block py-1.5 text-gray-300 hover:text-white">ក្រុមហ៊ុនបុត្រសម្ព័ន្ធ</a>
                </div>
            </div>

            <a href="index.php?page=portfolio" class="block py-2 text-white hover:text-blue-200">អាជីវកម្ម</a>
            <a href="index.php?page=contact" class="block py-2 text-white hover:text-blue-200">ទំនាក់ទំនង</a>
        </div>
    </header>

    <!-- Dynamic Content Area -->
    <main class="flex-grow">
        <?php 
            if (isset($_GET['page'])) {
                $page = preg_replace('/[^a-zA-Z0-9_-]/', '', $_GET['page']);
                $file = 'pages/' . $page . '.php';
                if (file_exists($file)) {
                    include($file);
                } else {
                    echo "<div class='max-w-4xl mx-auto px-4 py-20 text-center'><h2 class='text-2xl font-bold text-red-600'>រកមិនឃើញទំព័រនេះទេ (Page Not Found)</h2><p class='text-gray-500 mt-2'>សូមព្យាយាមម្តងទៀត។</p></div>";
                }
            } else {
                if (isset($_SESSION['UserRole']) && $_SESSION['UserRole'] == 3) {
                    if (file_exists('pages/dashboard.php')) {
                        include('pages/dashboard.php');
                    } else {
                        include('pages/home.php');
                    }
                } else {
                    if (file_exists('pages/home.php')) {
                        include('pages/home.php');
                    } else {
                        include('pages/home.php');
                    }
                }
            }
        ?>
    </main>

    <!-- Footer -->
    <footer class="bg-blue-950 text-gray-300 text-xs py-12 border-t border-blue-900">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-8">
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-10 h-10 bg-white rounded-full p-2 shadow-md flex items-center justify-center overflow-hidden shrink-0">
                        <img src="images/kv9logo.jpg" alt="KV9 Logo" class="w-full h-full object-contain">
                    </div>
                    <span class="font-bold text-white text-sm tracking-tight">KV9 GROUP</span>
                </div>
                <p class="text-blue-200 leading-relaxed mb-3">
                    ផ្ទះលេខ 49B ភូមិព្រះពន្លា សង្កាត់ព្រែកប្រា ខណ្ឌច្បារអំពៅ រាជធានីភ្នំពេញ
                </p>
                <p class="text-blue-200">
                    ទូរស័ព្ទ: +855 61 955 859<br>
                    អ៊ីមែល: koyvitou999@gmail.com
                </p>
            </div>
            <div>
                <h4 class="text-white font-bold text-sm mb-4 uppercase tracking-wider">តំណរភ្ជាប់រហ័ស</h4>
                <ul class="space-y-2">
                    <li><a href="index.php" class="hover:text-white transition">ទំព័រដើម</a></li>
                    <li><a href="index.php?page=vision" class="hover:text-white transition">អំពីយើង</a></li>
                    <li><a href="index.php?page=team" class="hover:text-white transition">រចនាសម្ព័ន្ធបុគ្គលិក</a></li>
                    <li><a href="index.php?page=subsidiaries" class="hover:text-white transition">ក្រុមហ៊ុនបុត្រសម្ព័ន្ធ</a></li>
                    <li><a href="index.php?page=portfolio" class="hover:text-white transition">អាជីវកម្ម និងសេវាកម្ម</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold text-sm mb-4 uppercase tracking-wider">ឱកាសការងារ</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-white transition">ព្រឹត្តិបត្រ និងព័ត៌មានថ្មីៗ</a></li>
                    <li><a href="#" class="hover:text-white transition">គោលការណ៍ឯកជនភាព</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold text-sm mb-4 uppercase tracking-wider">ទំនាក់ទំនងជាមួយយើង</h4>
                <p class="text-blue-200 mb-4">តាមដានសកម្មភាព និងព័ត៌មានថ្មីៗរបស់យើងតាមរយៈបណ្តាញសង្គម៖</p>
                <div class="flex space-x-3 text-base">
                    <a href="#" class="w-9 h-9 bg-blue-900 text-white rounded-full flex items-center justify-center hover:bg-blue-600 transition" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="w-9 h-9 bg-blue-900 text-white rounded-full flex items-center justify-center hover:bg-blue-600 transition" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="w-9 h-9 bg-blue-900 text-white rounded-full flex items-center justify-center hover:bg-blue-600 transition" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="w-9 h-9 bg-blue-900 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-4 border-t border-blue-900 pt-6 text-center text-blue-300">
            &copy; 2026 KV9 GROUP. រក្សាសិទ្ធិគ្រប់យ៉ាង។
        </div>
    </footer>

    <!-- Interactive Scripts for Mobile Navigation -->
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileDropdownBtn = document.getElementById('mobile-dropdown-btn');
        const mobileDropdown = document.getElementById('mobile-dropdown');
        const mobileArrow = document.getElementById('mobile-arrow');

        // Toggle mobile navbar menu
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Toggle mobile sub-menu dropdown
        mobileDropdownBtn.addEventListener('click', () => {
            mobileDropdown.classList.toggle('hidden');
            mobileArrow.classList.toggle('rotate-180');
        });
    </script>
</body>
</html>