<?php
// Ensure translation function is available
if (!function_exists('__')) {
    function __($key) {
        return $key;
    }
}
?>

<!-- Page Header Title -->
<section class="relative bg-slate-900 py-16 overflow-hidden">
    <!-- Modern Decorative Background Gradients -->
    <div class="absolute -top-24 -left-20 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-20 -right-20 w-96 h-96 bg-indigo-500/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-4 relative z-10">
        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-500/10 text-blue-400 border border-blue-500/20 mb-4">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-400 mr-2 animate-pulse"></span> <span data-lang-key="about_us"><?php echo __('about_us'); ?></span>
        </span>
        <h1 class="text-3xl sm:text-4xl font-black text-white tracking-tight mb-3" data-lang-key="vision_mission_title"><?php echo __('vision_mission_title'); ?></h1>
        <p class="text-slate-300 text-sm sm:text-base max-w-2xl leading-relaxed" data-lang-key="vision_mission_subtitle">
            <?php echo __('vision_mission_subtitle'); ?>
        </p>
    </div>
</section>

<!-- Vision, Mission & Core Values Section -->
<section class="max-w-6xl mx-auto py-20 px-4">
    
    <!-- Top Grid: Vision & Mission (2 Columns) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
        
        <!-- Vision Box -->
        <div class="group relative bg-white rounded-3xl p-8 sm:p-10 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between overflow-hidden">
            <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-blue-600 to-indigo-600 opacity-0 group-hover:opacity-100 transition duration-300"></div>
            <div>
                <div class="flex items-center justify-between mb-6">
                    <span class="text-xs font-bold text-blue-600 uppercase tracking-widest bg-blue-50 px-3 py-1.5 rounded-xl">Corporate Vision</span>
                    <div class="w-14 h-14 bg-gradient-to-tr from-blue-600 to-indigo-600 text-white rounded-2xl flex items-center justify-center text-2xl shadow-lg shadow-blue-500/25 group-hover:scale-110 transition duration-300">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                </div>
                <h2 class="text-2xl font-bold text-slate-900 mb-4" data-lang-key="vision_heading"><?php echo __('vision_heading'); ?></h2>
                <p class="text-slate-600 text-base leading-relaxed" data-lang-key="vision_text">
                    <?php echo __('vision_text'); ?>
                </p>
            </div>
        </div>

        <!-- Mission Box -->
        <div class="group relative bg-white rounded-3xl p-8 sm:p-10 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between overflow-hidden">
            <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-indigo-600 to-blue-600 opacity-0 group-hover:opacity-100 transition duration-300"></div>
            <div>
                <div class="flex items-center justify-between mb-6">
                    <span class="text-xs font-bold text-indigo-600 uppercase tracking-widest bg-indigo-50 px-3 py-1.5 rounded-xl">Corporate Mission</span>
                    <div class="w-14 h-14 bg-gradient-to-tr from-indigo-600 to-blue-600 text-white rounded-2xl flex items-center justify-center text-2xl shadow-lg shadow-indigo-500/25 group-hover:scale-110 transition duration-300">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                </div>
                <h2 class="text-2xl font-bold text-slate-900 mb-4" data-lang-key="mission_heading"><?php echo __('mission_heading'); ?></h2>
                <ul class="text-slate-600 text-sm sm:text-base leading-relaxed space-y-3">
                    <li class="flex items-start">
                        <span class="w-2 h-2 rounded-full bg-indigo-600 mt-2 mr-3 shrink-0"></span>
                        <span data-lang-key="mission_item_1"><?php echo __('mission_item_1'); ?></span>
                    </li>
                    <li class="flex items-start">
                        <span class="w-2 h-2 rounded-full bg-indigo-600 mt-2 mr-3 shrink-0"></span>
                        <span data-lang-key="mission_item_2"><?php echo __('mission_item_2'); ?></span>
                    </li>
                    <li class="flex items-start">
                        <span class="w-2 h-2 rounded-full bg-indigo-600 mt-2 mr-3 shrink-0"></span>
                        <span data-lang-key="mission_item_3"><?php echo __('mission_item_3'); ?></span>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <!-- Core Values Box (Full Width Card) -->
    <div class="group relative bg-gradient-to-br from-slate-900 via-slate-800 to-blue-950 rounded-3xl p-8 sm:p-12 text-white shadow-xl mb-20 overflow-hidden">
        <div class="absolute top-0 right-0 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>
        
        <div class="relative z-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-8">
            <div class="max-w-2xl">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-blue-400 bg-blue-500/10 border border-blue-500/20 px-3 py-1 rounded-lg mb-3">Core Values</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-3" data-lang-key="core_values_heading"><?php echo __('core_values_heading'); ?></h2>
                <p class="text-slate-300 text-base leading-relaxed" data-lang-key="core_values_text">
                    <?php echo __('core_values_text'); ?>
                </p>
            </div>
            <div class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center text-3xl text-blue-400 shrink-0 border border-white/10 group-hover:rotate-12 transition duration-300">
                <i class="fa-solid fa-gem"></i>
            </div>
        </div>
    </div>

    <!-- License & Accreditation Section -->
    <div class="pt-8">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12">
            <div>
                <span class="text-xs font-bold text-blue-600 uppercase tracking-widest bg-blue-50 px-3 py-1.5 rounded-xl">Legality & Compliance</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-3" data-lang-key="licenses_heading"><?php echo __('licenses_heading'); ?></h2>
            </div>
            <p class="text-slate-500 text-sm mt-2 sm:mt-0 max-w-md" data-lang-key="licenses_subtitle">
                <?php echo __('licenses_subtitle'); ?>
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 select-none" oncontextmenu="return false;">
            
            <!-- License Card 1 -->
            <div class="group bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between hover:-translate-y-1.5">
                <div class="h-64 relative bg-slate-50 flex items-center justify-center p-4 cursor-pointer overflow-hidden" onclick="openImageModal('images/patent.jpg', '<?php echo __('license_1_title'); ?>')">
                    <!-- Protected Image -->
                    <img src="images/patent.jpg" alt="<?php echo __('license_1_title'); ?>" draggable="false" oncontextmenu="return false;" class="max-h-full max-w-full object-contain pointer-events-none group-hover:scale-105 transition duration-500">
                    
                    <!-- Transparent Overlay Shield -->
                    <div class="absolute inset-0 bg-transparent z-10"></div>

                    <!-- Hover View Overlay -->
                    <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-xs opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white font-medium text-xs z-20">
                        <span class="bg-white/20 border border-white/30 backdrop-blur-md px-4 py-2 rounded-full flex items-center">
                            <i class="fa-solid fa-expand mr-2"></i> <span data-lang-key="click_to_zoom"><?php echo __('click_to_zoom'); ?></span>
                        </span>
                    </div>
                </div>
                <div class="p-6 bg-white border-t border-slate-100">
                    <span class="text-[11px] font-bold text-blue-600 uppercase tracking-wider" data-lang-key="ministry_commerce"><?php echo __('ministry_commerce'); ?></span>
                    <h4 class="font-bold text-slate-900 text-base mt-1 mb-1" data-lang-key="license_1_title"><?php echo __('license_1_title'); ?></h4>
                    <p class="text-slate-500 text-xs leading-relaxed" data-lang-key="license_1_desc"><?php echo __('license_1_desc'); ?></p>
                </div>
            </div>

            <!-- License Card 2 -->
            <div class="group bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between hover:-translate-y-1.5">
                <div class="h-64 relative bg-slate-50 flex items-center justify-center p-4 cursor-pointer overflow-hidden" onclick="openImageModal('images/tax.jpg', '<?php echo __('license_2_title'); ?>')">
                    <!-- Protected Image -->
                    <img src="images/tax.jpg" alt="<?php echo __('license_2_title'); ?>" draggable="false" oncontextmenu="return false;" class="max-h-full max-w-full object-contain pointer-events-none group-hover:scale-105 transition duration-500">
                    
                    <!-- Transparent Overlay Shield -->
                    <div class="absolute inset-0 bg-transparent z-10"></div>

                    <!-- Hover View Overlay -->
                    <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-xs opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white font-medium text-xs z-20">
                        <span class="bg-white/20 border border-white/30 backdrop-blur-md px-4 py-2 rounded-full flex items-center">
                            <i class="fa-solid fa-expand mr-2"></i> <span data-lang-key="click_to_zoom"><?php echo __('click_to_zoom'); ?></span>
                        </span>
                    </div>
                </div>
                <div class="p-6 bg-white border-t border-slate-100">
                    <span class="text-[11px] font-bold text-blue-600 uppercase tracking-wider" data-lang-key="tax_department"><?php echo __('tax_department'); ?></span>
                    <h4 class="font-bold text-slate-900 text-base mt-1 mb-1" data-lang-key="license_2_title"><?php echo __('license_2_title'); ?></h4>
                    <p class="text-slate-500 text-xs leading-relaxed" data-lang-key="license_2_desc"><?php echo __('license_2_desc'); ?></p>
                </div>
            </div>

            <!-- License Card 3 -->
            <div class="group bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between hover:-translate-y-1.5">
                <div class="h-64 relative bg-slate-50 flex items-center justify-center p-4 cursor-pointer overflow-hidden" onclick="openImageModal('images/patent-tax.jpg', '<?php echo __('license_3_title'); ?>')">
                    <!-- Protected Image -->
                    <img src="images/patent-tax.jpg" alt="<?php echo __('license_3_title'); ?>" draggable="false" oncontextmenu="return false;" class="max-h-full max-w-full object-contain pointer-events-none group-hover:scale-105 transition duration-500">
                    
                    <!-- Transparent Overlay Shield -->
                    <div class="absolute inset-0 bg-transparent z-10"></div>

                    <!-- Hover View Overlay -->
                    <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-xs opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white font-medium text-xs z-20">
                        <span class="bg-white/20 border border-white/30 backdrop-blur-md px-4 py-2 rounded-full flex items-center">
                            <i class="fa-solid fa-expand mr-2"></i> <span data-lang-key="click_to_zoom"><?php echo __('click_to_zoom'); ?></span>
                        </span>
                    </div>
                </div>
                <div class="p-6 bg-white border-t border-slate-100">
                    <span class="text-[11px] font-bold text-blue-600 uppercase tracking-wider" data-lang-key="tax_department"><?php echo __('tax_department'); ?></span>
                    <h4 class="font-bold text-slate-900 text-base mt-1 mb-1" data-lang-key="license_3_title"><?php echo __('license_3_title'); ?></h4>
                    <p class="text-slate-500 text-xs leading-relaxed" data-lang-key="license_3_desc"><?php echo __('license_3_desc'); ?></p>
                </div>
            </div>

        </div>
    </div>

</section>

<!-- Modern Image Lightbox Modal -->
<div id="image-modal" class="fixed inset-0 z-50 hidden bg-slate-950/80 backdrop-blur-md flex items-center justify-center p-4 transition-all duration-300 select-none" oncontextmenu="return false;">
    <div class="relative max-w-4xl w-full flex flex-col items-center">
        <!-- Close Button Floating -->
        <button onclick="closeImageModal()" class="absolute -top-12 right-0 text-white bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/20 rounded-full w-10 h-10 flex items-center justify-center text-sm font-bold transition">✕</button>
        
        <!-- Image Container -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-2xl p-3 sm:p-4 w-full flex flex-col items-center border border-white/20 relative">
            <div class="bg-slate-50 rounded-2xl p-2 w-full flex justify-center items-center overflow-hidden max-h-[75vh] relative">
                <!-- Protected Modal Image -->
                <img id="modal-img-src" src="" alt="License Preview" draggable="false" oncontextmenu="return false;" class="max-h-[70vh] w-auto object-contain rounded-lg pointer-events-none">
                
                <!-- Transparent Protection Layer Over Modal Image -->
                <div class="absolute inset-0 bg-transparent"></div>
            </div>
            <p id="modal-img-title" class="text-slate-900 font-extrabold text-center py-3 text-sm sm:text-base"></p>
        </div>
    </div>
</div>

<!-- JavaScript for Protection & Modal Controls -->
<script>
    function openImageModal(imageSrc, title) {
        document.getElementById('modal-img-src').src = imageSrc;
        document.getElementById('modal-img-title').innerText = title;
        document.getElementById('image-modal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeImageModal() {
        document.getElementById('image-modal').classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    // Close when clicking background outside
    document.getElementById('image-modal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeImageModal();
        }
    });

    // Disable Right Click Globally on Images
    document.addEventListener('contextmenu', function(e) {
        if (e.target.tagName === 'IMG') {
            e.preventDefault();
        }
    }, false);

    // Disable Shortcuts (Ctrl+S, Cmd+S, Ctrl+P, Cmd+P, F12)
    document.addEventListener('keydown', function(e) {
        if ((e.ctrlKey || e.metaKey) && (e.key === 's' || e.key === 'p' || e.key === 'S' || e.key === 'P')) {
            e.preventDefault();
        }
    });
</script>