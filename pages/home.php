<?php
// Ensure translation function is available
if (!function_exists('__')) {
    function __($key) {
        return $key;
    }
}
?>

<!-- Hero Section with Modern Background Gradient Overlay & Animations -->
<section class="relative bg-gradient-to-br from-slate-950 via-blue-950 to-indigo-950 text-white py-32 px-4 overflow-hidden">
    <!-- Background decorative image with smooth parallax feel and dark overlay -->
    <div class="absolute inset-0 opacity-20 bg-cover bg-center mix-blend-overlay transform scale-105 transition-transform duration-1000 hover:scale-100" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1920&q=80');"></div>
    
    <!-- Decorative Animated Glowing Elements -->
    <div class="absolute -top-40 -left-40 w-96 h-96 bg-blue-500 rounded-full filter blur-[120px] opacity-30 animate-pulse"></div>
    <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-indigo-600 rounded-full filter blur-[120px] opacity-25 animate-pulse" style="animation-duration: 4s;"></div>

    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <!-- Badge -->
        <div class="inline-flex items-center space-x-2.5 bg-blue-500/10 text-blue-300 text-sm sm:text-base font-medium px-5 py-2 rounded-full uppercase tracking-widest mb-6 border border-blue-400/30 backdrop-blur-md shadow-inner">
            <span class="w-2.5 h-2.5 rounded-full bg-blue-400 animate-ping"></span>
            <span data-lang-key="welcome_badge"><?php echo __('welcome_badge'); ?></span>
        </div>

        <!-- Main Title -->
        <h1 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight mb-6 leading-tight sm:leading-snug bg-gradient-to-r from-white via-blue-100 to-blue-300 bg-clip-text text-transparent" data-lang-key="hero_title">
            <?php echo __('hero_title'); ?>
        </h1>
        <!-- Subtitle -->
        <p class="text-gray-300 text-base sm:text-lg mb-10 max-w-2xl mx-auto leading-relaxed font-light" data-lang-key="hero_desc">
            <?php echo __('hero_desc'); ?>
        </p>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="index.php?page=portfolio" class="w-full sm:w-auto bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-8 py-4 rounded-xl font-semibold hover:from-blue-500 hover:to-indigo-500 transition-all duration-300 shadow-xl shadow-blue-900/40 hover:shadow-blue-700/60 hover:-translate-y-0.5 flex items-center justify-center space-x-3 group">
                <span data-lang-key="explore_biz"><?php echo __('explore_biz'); ?></span>
                <i class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1.5"></i>
            </a>
            
            <a href="index.php?page=vision" class="w-full sm:w-auto bg-white/5 hover:bg-white/10 text-white border border-white/15 px-8 py-4 rounded-xl font-semibold transition-all duration-300 backdrop-blur-md hover:border-white/30 hover:-translate-y-0.5 flex items-center justify-center" data-lang-key="about_us">
                <?php echo __('about_us'); ?>
            </a>
        </div>
    </div>
</section>


<!-- Core Highlights / Vision, Mission, Values Banner Cards -->
<section class="max-w-6xl mx-auto px-4 -mt-12 relative z-20 mb-20">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-stretch">
        
        <!-- Card 1 -->
        <div class="bg-white p-6 rounded-2xl shadow-xl border border-gray-100 hover:-translate-y-1 transition duration-300 flex flex-col justify-between">
            <div>
                <div class="w-12 h-12 bg-blue-50 text-blue-900 rounded-xl flex items-center justify-center text-xl font-bold mb-4 shadow-inner">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-900" data-lang-key="vision_title"><?php echo __('vision_title'); ?></h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-4" data-lang-key="vision_desc">
                    <?php echo __('vision_desc'); ?>
                </p>
            </div>
            <div class="pt-2 border-t border-gray-50">
                <a href="index.php?page=vision" class="inline-flex items-center space-x-2 text-blue-600 font-semibold text-sm hover:text-blue-700 transition group">
                    <span data-lang-key="learn_more"><?php echo __('learn_more'); ?></span>
                    <i class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                </a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-6 rounded-2xl shadow-xl border border-gray-100 hover:-translate-y-1 transition duration-300 flex flex-col justify-between">
            <div>
                <div class="w-12 h-12 bg-blue-50 text-blue-900 rounded-xl flex items-center justify-center text-xl font-bold mb-4 shadow-inner">
                    <i class="fa-solid fa-bullseye"></i>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-900" data-lang-key="mission_title"><?php echo __('mission_title'); ?></h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-4" data-lang-key="mission_desc">
                    <?php echo __('mission_desc'); ?>
                </p>
            </div>
            <div class="pt-2 border-t border-gray-50">
                <a href="index.php?page=vision" class="inline-flex items-center space-x-2 text-blue-600 font-semibold text-sm hover:text-blue-700 transition group">
                    <span data-lang-key="learn_more"><?php echo __('learn_more'); ?></span>
                    <i class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                </a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-6 rounded-2xl shadow-xl border border-gray-100 hover:-translate-y-1 transition duration-300 flex flex-col justify-between">
            <div>
                <div class="w-12 h-12 bg-blue-50 text-blue-900 rounded-xl flex items-center justify-center text-xl font-bold mb-4 shadow-inner">
                    <i class="fa-solid fa-gem"></i>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-900" data-lang-key="values_title"><?php echo __('values_title'); ?></h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-4" data-lang-key="values_desc">
                    <?php echo __('values_desc'); ?>
                </p>
            </div>
            <div class="pt-2 border-t border-gray-50">
                <a href="index.php?page=vision" class="inline-flex items-center space-x-2 text-blue-600 font-semibold text-sm hover:text-blue-700 transition group">
                    <span data-lang-key="learn_more"><?php echo __('learn_more'); ?></span>
                    <i class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                </a>
            </div>
        </div>

    </div>
</section>


<!-- Featured Subsidiaries / Business Units Grid (3 Columns Layout) -->
<section class="bg-gray-100 py-20 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-blue-600 font-semibold text-xs uppercase tracking-widest bg-blue-100 px-3 py-1 rounded-full" data-lang-key="ecosystem_tag"><?php echo __('ecosystem_tag'); ?></span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mt-3 mb-4" data-lang-key="subs_section_title"><?php echo __('subs_section_title'); ?></h2>
            <div class="w-16 h-1 bg-blue-900 mx-auto rounded-full"></div>
            <p class="text-gray-600 text-sm mt-4" data-lang-key="subs_section_desc"><?php echo __('subs_section_desc'); ?></p>
        </div>
        
        <!-- Grid set to 3 Columns on desktop -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

             <!-- Item 1: KV9 CAMBODIA CO.,LTD -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-2xl transition duration-300 flex flex-col justify-between group">
                <div>
                    <div class="h-52 bg-gradient-to-r from-blue-950 via-blue-900 to-indigo-950 relative overflow-hidden flex items-center justify-center p-6">
                        <div class="absolute inset-0 bg-blue-500/10 backdrop-blur-[2px]"></div>
                        <div class="relative z-10 w-32 h-32 flex-shrink-0 min-w-0 bg-white/95 backdrop-blur-md rounded-2xl p-0 flex items-center justify-center shadow-xl group-hover:scale-105 group-hover:bg-white transition-all duration-300 border border-white/20 overflow-hidden transform-gpu [mask-image:_radial-gradient(circle_at_center,_white_100%,_black_100%)]">
                            <img src="images/kv9logo.jpg" alt="KV9 Logo" class="w-full h-full max-w-full max-h-full object-contain block drop-shadow-sm">
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub1_cat"><?php echo __('sub1_cat'); ?></span>
                        <h4 class="text-lg font-bold text-gray-900 mt-1 mb-2" data-lang-key="sub1_name"><?php echo __('sub1_name'); ?></h4>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4" data-lang-key="sub1_desc">
                            <?php echo __('sub1_desc'); ?>
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0">
                    <button onclick="openModal('kv9CosmeticModal')" class="inline-flex items-center text-blue-900 font-semibold text-sm hover:text-blue-700 transition cursor-pointer">
                        <span data-lang-key="read_more"><?php echo __('read_more'); ?></span> <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                    </button>
                </div>
            </div>
            
            <!-- Item 2: សិប្បកម្ម ធ្យូងអនាម័យ -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-2xl transition duration-300 flex flex-col justify-between group">
                <div>
                    <div class="h-52 bg-gradient-to-r from-blue-950 via-blue-900 to-indigo-950 relative overflow-hidden flex items-center justify-center p-6">
                        <div class="absolute inset-0 bg-blue-500/10 backdrop-blur-[2px]"></div>
                        <div class="relative z-10 w-32 h-32 flex-shrink-0 min-w-0 bg-white/95 backdrop-blur-md rounded-2xl p-0 flex items-center justify-center shadow-xl group-hover:scale-105 group-hover:bg-white transition-all duration-300 border border-white/20 overflow-hidden transform-gpu [mask-image:_radial-gradient(circle_at_center,_white_100%,_black_100%)]">
                            <img src="images/boss.jpg" alt="Charcoal Craft Logo" class="w-full h-full max-w-full max-h-full object-contain block drop-shadow-sm">
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub2_cat"><?php echo __('sub2_cat'); ?></span>
                        <h4 class="text-lg font-bold text-gray-900 mt-1 mb-2" data-lang-key="sub2_name"><?php echo __('sub2_name'); ?></h4>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4" data-lang-key="sub2_desc">
                            <?php echo __('sub2_desc'); ?>
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0">
                    <button onclick="openModal('craftModal')" class="inline-flex items-center text-blue-900 font-semibold text-sm hover:text-blue-700 transition cursor-pointer">
                        <span data-lang-key="read_more"><?php echo __('read_more'); ?></span> <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                    </button>
                </div>
            </div>

            <!-- Item 3: CHOMNENH TECHNOLOGY -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-2xl transition duration-300 flex flex-col justify-between group">
                <div>
                    <div class="h-52 bg-gradient-to-r from-blue-950 via-blue-900 to-indigo-950 relative overflow-hidden flex items-center justify-center p-6">
                        <div class="absolute inset-0 bg-blue-500/10 backdrop-blur-[2px]"></div>
                        <div class="relative z-10 w-32 h-32 flex-shrink-0 min-w-0 bg-white/95 backdrop-blur-md rounded-2xl p-0 flex items-center justify-center shadow-xl group-hover:scale-105 group-hover:bg-white transition-all duration-300 border border-white/20 overflow-hidden transform-gpu [mask-image:_radial-gradient(circle_at_center,_white_100%,_black_100%)]">
                            <img src="images/ch.jpg" alt="Tech Logo" class="w-full h-full max-w-full max-h-full object-contain block drop-shadow-sm">
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub3_cat"><?php echo __('sub3_cat'); ?></span>
                        <h4 class="text-lg font-bold text-gray-900 mt-1 mb-2" data-lang-key="sub3_name"><?php echo __('sub3_name'); ?></h4>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4" data-lang-key="sub3_desc">
                            <?php echo __('sub3_desc'); ?>
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0">
                    <button onclick="openModal('techModal')" class="inline-flex items-center text-blue-900 font-semibold text-sm hover:text-blue-700 transition cursor-pointer">
                        <span data-lang-key="read_more"><?php echo __('read_more'); ?></span> <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                    </button>
                </div>
            </div>

            <!-- Item 4: Star Care -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-2xl transition duration-300 flex flex-col justify-between group">
                <div>
                   <div class="h-52 bg-gradient-to-r from-blue-950 via-blue-900 to-indigo-950 relative overflow-hidden flex items-center justify-center p-6">
                        <div class="absolute inset-0 bg-blue-500/10 backdrop-blur-[2px]"></div>
                        <div class="relative z-10 w-32 h-32 flex-shrink-0 min-w-0 bg-white/95 backdrop-blur-md rounded-2xl p-0 flex items-center justify-center shadow-xl group-hover:scale-105 group-hover:bg-white transition-all duration-300 border border-white/20 overflow-hidden transform-gpu [mask-image:_radial-gradient(circle_at_center,_white_100%,_black_100%)]">
                            <img src="images/starcare.jpg" alt="Star Care Logo" class="w-full h-full max-w-full max-h-full object-contain block drop-shadow-sm">
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub4_cat"><?php echo __('sub4_cat'); ?></span>
                        <h4 class="text-lg font-bold text-gray-900 mt-1 mb-2" data-lang-key="sub4_name"><?php echo __('sub4_name'); ?></h4>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4" data-lang-key="sub4_desc">
                            <?php echo __('sub4_desc'); ?>
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0">
                    <button onclick="openModal('starcareModal')" class="inline-flex items-center text-blue-900 font-semibold text-sm hover:text-blue-700 transition cursor-pointer">
                        <span data-lang-key="read_more"><?php echo __('read_more'); ?></span> <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                    </button>
                </div>
            </div>

            <!-- Item 5: CHOMNENH RECRUITMENT -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-2xl transition duration-300 flex flex-col justify-between group">
                <div>
                   <div class="h-52 bg-gradient-to-r from-blue-950 via-blue-900 to-indigo-950 relative overflow-hidden flex items-center justify-center p-6">
                        <div class="absolute inset-0 bg-blue-500/10 backdrop-blur-[2px]"></div>
                        <div class="relative z-10 w-32 h-32 flex-shrink-0 min-w-0 bg-white/95 backdrop-blur-md rounded-2xl p-0 flex items-center justify-center shadow-xl group-hover:scale-105 group-hover:bg-white transition-all duration-300 border border-white/20 overflow-hidden transform-gpu [mask-image:_radial-gradient(circle_at_center,_white_100%,_black_100%)]">
                            <img src="images/chrm.jpg" alt="Recruitment Logo" class="w-full h-full max-w-full max-h-full object-contain block drop-shadow-sm">
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub5_cat"><?php echo __('sub5_cat'); ?></span>
                        <h4 class="text-lg font-bold text-gray-900 mt-1 mb-2" data-lang-key="sub5_name"><?php echo __('sub5_name'); ?></h4>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4" data-lang-key="sub5_desc">
                            <?php echo __('sub5_desc'); ?>
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0">
                    <button onclick="openModal('recruitmentModal')" class="inline-flex items-center text-blue-900 font-semibold text-sm hover:text-blue-700 transition cursor-pointer">
                        <span data-lang-key="read_more"><?php echo __('read_more'); ?></span> <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                    </button>
                </div>
            </div>

            <!-- Item 6: វីជីង ម្សៅស៊ុប -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-2xl transition duration-300 flex flex-col justify-between group">
                <div>
                    <div class="h-52 bg-gradient-to-r from-blue-950 via-blue-900 to-indigo-950 relative overflow-hidden flex items-center justify-center p-6">
                        <div class="absolute inset-0 bg-blue-500/10 backdrop-blur-[2px]"></div>
                        <div class="relative z-10 w-32 h-32 flex-shrink-0 min-w-0 bg-white/95 backdrop-blur-md rounded-2xl p-0 flex items-center justify-center shadow-xl group-hover:scale-105 group-hover:bg-white transition-all duration-300 border border-white/20 overflow-hidden transform-gpu [mask-image:_radial-gradient(circle_at_center,_white_100%,_black_100%)]">
                            <img src="images/products/logo.png" alt="Soup Logo" class="w-full h-full max-w-full max-h-full object-contain block drop-shadow-sm">
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub6_cat"><?php echo __('sub6_cat'); ?></span>
                        <h4 class="text-lg font-bold text-gray-900 mt-1 mb-2" data-lang-key="sub6_name"><?php echo __('sub6_name'); ?></h4>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4" data-lang-key="sub6_desc">
                            <?php echo __('sub6_desc'); ?>
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0">
                    <button onclick="openModal('vijingSoupModal')" class="inline-flex items-center text-blue-900 font-semibold text-sm hover:text-blue-700 transition cursor-pointer">
                        <span data-lang-key="read_more"><?php echo __('read_more'); ?></span> <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Modal 1: Charcoal Craft -->
<div id="craftModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300 px-4">
    <div class="bg-white rounded-2xl max-w-lg w-full p-6 sm:p-8 shadow-2xl transform scale-95 transition-transform duration-300 relative" id="craftModalContent">
        <button onclick="closeModal('craftModal')" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center transition cursor-pointer">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="flex items-center space-x-3 mb-4">
            <div class="w-12 h-12 bg-blue-50 text-blue-900 rounded-xl flex items-center justify-center text-xl font-bold shadow-inner">
                <i class="fa-solid fa-fire"></i>
            </div>
            <div>
                <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub2_cat"><?php echo __('sub2_cat'); ?></span>
                <h3 class="text-xl font-bold text-gray-900" data-lang-key="sub2_name"><?php echo __('sub2_name'); ?></h3>
            </div>
        </div>
        <div class="space-y-3 text-gray-600 text-sm leading-relaxed max-h-[60vh] overflow-y-auto pr-2" data-lang-key="sub2_modal_text">
            <p><?php echo __('sub2_modal_text'); ?></p>
        </div>
        <div class="mt-6 pt-4 border-t border-gray-100 flex justify-end">
            <button onclick="closeModal('craftModal')" class="bg-blue-900 text-white px-5 py-2.5 rounded-xl font-semibold text-sm hover:bg-blue-800 transition shadow-md cursor-pointer" data-lang-key="close">
                <?php echo __('close'); ?>
            </button>
        </div>
    </div>
</div>

<!-- Modal 2: Digital Technology -->
<div id="techModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300 px-4">
    <div class="bg-white rounded-2xl max-w-lg w-full p-6 sm:p-8 shadow-2xl transform scale-95 transition-transform duration-300 relative" id="techModalContent">
        <button onclick="closeModal('techModal')" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center transition cursor-pointer">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="flex items-center space-x-3 mb-4">
            <div class="w-12 h-12 bg-blue-50 text-blue-900 rounded-xl flex items-center justify-center text-xl font-bold shadow-inner">
                <i class="fa-solid fa-laptop-code"></i>
            </div>
            <div>
                <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub3_cat"><?php echo __('sub3_cat'); ?></span>
                <h3 class="text-xl font-bold text-gray-900" data-lang-key="sub3_name"><?php echo __('sub3_name'); ?></h3>
            </div>
        </div>
        <div class="space-y-3 text-gray-600 text-sm leading-relaxed max-h-[60vh] overflow-y-auto pr-2" data-lang-key="sub3_modal_text">
            <p><?php echo __('sub3_modal_text'); ?></p>
        </div>
        <div class="mt-6 pt-4 border-t border-gray-100 flex justify-end">
            <button onclick="closeModal('techModal')" class="bg-blue-900 text-white px-5 py-2.5 rounded-xl font-semibold text-sm hover:bg-blue-800 transition shadow-md cursor-pointer" data-lang-key="close">
                <?php echo __('close'); ?>
            </button>
        </div>
    </div>
</div>

<!-- Modal 3: Star Care -->
<div id="starcareModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300 px-4">
    <div class="bg-white rounded-2xl max-w-lg w-full p-6 sm:p-8 shadow-2xl transform scale-95 transition-transform duration-300 relative" id="starcareModalContent">
        <button onclick="closeModal('starcareModal')" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center transition cursor-pointer">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="flex items-center space-x-3 mb-4">
            <div class="w-12 h-12 bg-blue-50 text-blue-900 rounded-xl flex items-center justify-center text-xl font-bold shadow-inner">
                <i class="fa-solid fa-hand-holding-medical"></i>
            </div>
            <div>
                <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub4_cat"><?php echo __('sub4_cat'); ?></span>
                <h3 class="text-xl font-bold text-gray-900" data-lang-key="sub4_name"><?php echo __('sub4_name'); ?></h3>
            </div>
        </div>
        <div class="space-y-3 text-gray-600 text-sm leading-relaxed max-h-[60vh] overflow-y-auto pr-2" data-lang-key="sub4_modal_text">
            <p><?php echo __('sub4_modal_text'); ?></p>
        </div>
        <div class="mt-6 pt-4 border-t border-gray-100 flex justify-end">
            <button onclick="closeModal('starcareModal')" class="bg-blue-900 text-white px-5 py-2.5 rounded-xl font-semibold text-sm hover:bg-blue-800 transition shadow-md cursor-pointer" data-lang-key="close">
                <?php echo __('close'); ?>
            </button>
        </div>
    </div>
</div>

<!-- Modal 4: Chomnenh Recruitment -->
<div id="recruitmentModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300 px-4">
    <div class="bg-white rounded-2xl max-w-lg w-full p-6 sm:p-8 shadow-2xl transform scale-95 transition-transform duration-300 relative" id="recruitmentModalContent">
        <button onclick="closeModal('recruitmentModal')" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center transition cursor-pointer">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="flex items-center space-x-3 mb-4">
            <div class="w-12 h-12 bg-blue-50 text-blue-900 rounded-xl flex items-center justify-center text-xl font-bold shadow-inner">
                <i class="fa-solid fa-users"></i>
            </div>
            <div>
                <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub5_cat"><?php echo __('sub5_cat'); ?></span>
                <h3 class="text-xl font-bold text-gray-900" data-lang-key="sub5_name"><?php echo __('sub5_name'); ?></h3>
            </div>
        </div>
        <div class="space-y-3 text-gray-600 text-sm leading-relaxed max-h-[60vh] overflow-y-auto pr-2" data-lang-key="sub5_modal_text">
            <p><?php echo __('sub5_modal_text'); ?></p>
        </div>
        <div class="mt-6 pt-4 border-t border-gray-100 flex justify-end">
            <button onclick="closeModal('recruitmentModal')" class="bg-blue-900 text-white px-5 py-2.5 rounded-xl font-semibold text-sm hover:bg-blue-800 transition shadow-md cursor-pointer" data-lang-key="close">
                <?php echo __('close'); ?>
            </button>
        </div>
    </div>
</div>

<!-- Modal 5: KV9 CAMBODIA CO.,LTD -->
<div id="kv9CosmeticModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300 px-4">
    <div class="bg-white rounded-2xl max-w-lg w-full p-6 sm:p-8 shadow-2xl transform scale-95 transition-transform duration-300 relative" id="kv9CosmeticModalContent">
        <button onclick="closeModal('kv9CosmeticModal')" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center transition cursor-pointer">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="flex items-center space-x-3 mb-4">
            <div class="w-12 h-12 bg-blue-50 text-blue-900 rounded-xl flex items-center justify-center text-xl font-bold shadow-inner">
                <i class="fa-solid fa-sparkles"></i>
            </div>
            <div>
                <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub1_cat"><?php echo __('sub1_cat'); ?></span>
                <h3 class="text-xl font-bold text-gray-900" data-lang-key="sub1_name"><?php echo __('sub1_name'); ?></h3>
            </div>
        </div>
        <div class="space-y-3 text-gray-600 text-sm leading-relaxed max-h-[60vh] overflow-y-auto pr-2" data-lang-key="sub1_modal_text">
            <p><?php echo __('sub1_modal_text'); ?></p>
        </div>
        <div class="mt-6 pt-4 border-t border-gray-100 flex justify-end">
            <button onclick="closeModal('kv9CosmeticModal')" class="bg-blue-900 text-white px-5 py-2.5 rounded-xl font-semibold text-sm hover:bg-blue-800 transition shadow-md cursor-pointer" data-lang-key="close">
                <?php echo __('close'); ?>
            </button>
        </div>
    </div>
</div>

<!-- Modal 6: វីជីង ម្សៅស៊ុប -->
<div id="vijingSoupModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300 px-4">
    <div class="bg-white rounded-2xl max-w-lg w-full p-6 sm:p-8 shadow-2xl transform scale-95 transition-transform duration-300 relative" id="vijingSoupModalContent">
        <button onclick="closeModal('vijingSoupModal')" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center transition cursor-pointer">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="flex items-center space-x-3 mb-4">
            <div class="w-12 h-12 bg-blue-50 text-blue-900 rounded-xl flex items-center justify-center text-xl font-bold shadow-inner">
                <i class="fa-solid fa-bowl-food"></i>
            </div>
            <div>
                <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub6_cat"><?php echo __('sub6_cat'); ?></span>
                <h3 class="text-xl font-bold text-gray-900" data-lang-key="sub6_name"><?php echo __('sub6_name'); ?></h3>
            </div>
        </div>
        <div class="space-y-3 text-gray-600 text-sm leading-relaxed max-h-[60vh] overflow-y-auto pr-2" data-lang-key="sub6_modal_text">
            <p><?php echo __('sub6_modal_text'); ?></p>
        </div>
        <div class="mt-6 pt-4 border-t border-gray-100 flex justify-end">
            <button onclick="closeModal('vijingSoupModal')" class="bg-blue-900 text-white px-5 py-2.5 rounded-xl font-semibold text-sm hover:bg-blue-800 transition shadow-md cursor-pointer" data-lang-key="close">
                <?php echo __('close'); ?>
            </button>
        </div>
    </div>
</div>

<!-- JavaScript for Modal Control -->
<script>
    function openModal(modalId) {
        const modal = document.getElementById(modalId);
        const content = document.getElementById(modalId + 'Content');
        if (modal && content) {
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                content.classList.remove('scale-95');
                content.classList.add('scale-100');
            }, 10);
        }
    }

    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        const content = document.getElementById(modalId + 'Content');
        if (modal && content) {
            modal.classList.add('opacity-0');
            content.classList.remove('scale-100');
            content.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
    }

    window.onclick = function(event) {
        const modals = ['craftModal', 'techModal', 'starcareModal', 'recruitmentModal', 'kv9CosmeticModal', 'vijingSoupModal'];
        modals.forEach(id => {
            const modal = document.getElementById(id);
            if (event.target === modal) {
                closeModal(id);
            }
        });
    }
</script>