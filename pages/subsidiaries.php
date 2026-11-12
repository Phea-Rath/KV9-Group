<?php
// ============================================================
// pages/subsidiaries.php — Subsidiaries Timeline
// ============================================================
?>

<!-- Page Header Title -->
<section class="bg-white py-12 border-b border-gray-200">
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-3xl font-extrabold text-blue-900 mb-2" data-lang-key="subs_page_title">
            <?php echo __('subs_page_title'); ?>
        </h1>
        <p class="text-gray-600 text-sm" data-lang-key="subs_page_subtitle">
            <?php echo __('subs_page_subtitle'); ?>
        </p>
    </div>
</section>

<!-- Timeline Section -->
<section class="max-w-5xl mx-auto py-16 px-4 relative">
    <!-- Vertical Center Line -->
    <div class="absolute left-1/2 transform -translate-x-1/2 top-0 bottom-0 w-1 bg-blue-200 hidden md:block"></div>

    <!-- Timeline Item 1 (2026) — Vijing Soup Powder -->
    <div class="flex flex-col md:flex-row items-center mb-16 relative">
        <div class="md:w-1/2 md:pr-12 text-center md:text-right mb-6 md:mb-0">
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 inline-block text-left w-full hover:shadow-lg transition">
                <div class="mb-4">
                    <img src="images/products/logo.png"
                         alt="<?php echo htmlspecialchars(__('sub6_name')); ?>"
                         class="w-16 h-16 rounded-full object-cover border-2 border-blue-100 shadow-sm"
                         onerror="this.style.display='none';this.parentElement.innerHTML='<i class=\'fa-solid fa-utensils text-2xl text-blue-300\'></i>';">
                </div>
                <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub6_cat"><?php echo __('sub6_cat'); ?></span>
                <h3 class="text-xl font-bold text-gray-900 mt-1 mb-2" data-lang-key="sub6_name"><?php echo __('sub6_name'); ?></h3>
                <p class="text-gray-600 text-sm" data-lang-key="sub6_desc"><?php echo __('sub6_desc'); ?></p>
            </div>
        </div>
        <!-- Center Year Badge -->
        <div class="absolute left-1/2 transform -translate-x-1/2 bg-blue-900 text-white font-bold text-sm w-16 h-16 rounded-full flex items-center justify-center shadow-md z-10 border-4 border-white hidden md:flex">
            2026
        </div>
        <div class="md:w-1/2 md:pl-12 text-center md:text-left">
            <span class="md:hidden inline-block bg-blue-900 text-white font-bold text-sm px-3 py-1 rounded-full mb-2">2026</span>
            <p class="text-xs text-gray-500" data-lang-key="subs_t1_note"><?php echo __('subs_t1_note'); ?></p>
        </div>
    </div>

    <!-- Timeline Item 2 (2026) — Chomnenh Recruitment -->
    <div class="flex flex-col md:flex-row-reverse items-center mb-16 relative">
        <div class="md:w-1/2 md:pl-12 text-center md:text-left mb-6 md:mb-0">
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 inline-block text-left w-full hover:shadow-lg transition">
                <div class="mb-4">
                    <img src="images/chrm.jpg"
                         alt="<?php echo htmlspecialchars(__('subs_t2_cat')); ?>"
                         class="w-16 h-16 rounded-full object-cover border-2 border-blue-100 shadow-sm"
                         onerror="this.style.display='none';this.parentElement.innerHTML='<i class=\'fa-solid fa-users text-2xl text-blue-300\'></i>';">
                </div>
                <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="subs_t2_cat"><?php echo __('subs_t2_cat'); ?></span>
                <h3 class="text-xl font-bold text-gray-900 mt-1 mb-2" data-lang-key="subs_t2_name"><?php echo __('subs_t2_name'); ?></h3>
                <p class="text-gray-600 text-sm" data-lang-key="sub5_modal_text"><?php echo __('sub5_modal_text'); ?></p>
            </div>
        </div>
        <!-- Center Year Badge -->
        <div class="absolute left-1/2 transform -translate-x-1/2 bg-blue-900 text-white font-bold text-sm w-16 h-16 rounded-full flex items-center justify-center shadow-md z-10 border-4 border-white hidden md:flex">
            2026
        </div>
        <div class="md:w-1/2 md:pr-12 text-center md:text-right">
            <span class="md:hidden inline-block bg-blue-900 text-white font-bold text-sm px-3 py-1 rounded-full mb-2">2026</span>
            <p class="text-xs text-gray-500" data-lang-key="subs_t2_note"><?php echo __('subs_t2_note'); ?></p>
        </div>
    </div>

    <!-- Timeline Item 3 (2025) — Star Care -->
    <div class="flex flex-col md:flex-row items-center mb-16 relative">
        <div class="md:w-1/2 md:pr-12 text-center md:text-right mb-6 md:mb-0">
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 inline-block text-left w-full hover:shadow-lg transition">
                <div class="mb-4">
                    <img src="images/starcare.jpg"
                         alt="<?php echo htmlspecialchars(__('sub4_name')); ?>"
                         class="w-16 h-16 rounded-full object-cover border-2 border-blue-100 shadow-sm"
                         onerror="this.style.display='none';this.parentElement.innerHTML='<i class=\'fa-solid fa-heart-pulse text-2xl text-blue-300\'></i>';">
                </div>
                <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub4_cat"><?php echo __('sub4_cat'); ?></span>
                <h3 class="text-xl font-bold text-gray-900 mt-1 mb-2" data-lang-key="sub4_name"><?php echo __('sub4_name'); ?></h3>
                <p class="text-gray-600 text-sm" data-lang-key="sub4_modal_text"><?php echo __('sub4_modal_text'); ?></p>
            </div>
        </div>
        <!-- Center Year Badge -->
        <div class="absolute left-1/2 transform -translate-x-1/2 bg-blue-900 text-white font-bold text-sm w-16 h-16 rounded-full flex items-center justify-center shadow-md z-10 border-4 border-white hidden md:flex">
            2025
        </div>
        <div class="md:w-1/2 md:pl-12 text-center md:text-left">
            <span class="md:hidden inline-block bg-blue-900 text-white font-bold text-sm px-3 py-1 rounded-full mb-2">2025</span>
            <p class="text-xs text-gray-500" data-lang-key="subs_t3_note"><?php echo __('subs_t3_note'); ?></p>
        </div>
    </div>

    <!-- Timeline Item 4 (2025) — Chomnenh Technology -->
    <div class="flex flex-col md:flex-row-reverse items-center mb-16 relative">
        <div class="md:w-1/2 md:pl-12 text-center md:text-left mb-6 md:mb-0">
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 inline-block text-left w-full hover:shadow-lg transition">
                <div class="mb-4">
                    <img src="images/ch.jpg"
                         alt="<?php echo htmlspecialchars(__('sub3_name')); ?>"
                         class="w-16 h-16 rounded-full object-cover border-2 border-blue-100 shadow-sm"
                         onerror="this.style.display='none';this.parentElement.innerHTML='<i class=\'fa-solid fa-microchip text-2xl text-blue-300\'></i>';">
                </div>
                <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub3_cat"><?php echo __('sub3_cat'); ?></span>
                <h3 class="text-xl font-bold text-gray-900 mt-1 mb-2" data-lang-key="subs_t4_name"><?php echo __('subs_t4_name'); ?></h3>
                <p class="text-gray-600 text-sm" data-lang-key="sub3_desc"><?php echo __('sub3_desc'); ?></p>
            </div>
        </div>
        <!-- Center Year Badge -->
        <div class="absolute left-1/2 transform -translate-x-1/2 bg-blue-900 text-white font-bold text-sm w-16 h-16 rounded-full flex items-center justify-center shadow-md z-10 border-4 border-white hidden md:flex">
            2025
        </div>
        <div class="md:w-1/2 md:pr-12 text-center md:text-right">
            <span class="md:hidden inline-block bg-blue-900 text-white font-bold text-sm px-3 py-1 rounded-full mb-2">2025</span>
            <p class="text-xs text-gray-500" data-lang-key="subs_t4_note"><?php echo __('subs_t4_note'); ?></p>
        </div>
    </div>

    <!-- Timeline Item 5 (2024) — Craft / Charcoal -->
    <div class="flex flex-col md:flex-row items-center mb-16 relative">
        <div class="md:w-1/2 md:pr-12 text-center md:text-right mb-6 md:mb-0">
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 inline-block text-left w-full hover:shadow-lg transition">
                <div class="mb-4">
                    <img src="images/boss.jpg"
                         alt="<?php echo htmlspecialchars(__('sub2_name')); ?>"
                         class="w-16 h-16 rounded-full object-cover border-2 border-blue-100 shadow-sm"
                         onerror="this.style.display='none';this.parentElement.innerHTML='<i class=\'fa-solid fa-hammer text-2xl text-blue-300\'></i>';">
                </div>
                <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub2_cat"><?php echo __('sub2_cat'); ?></span>
                <h3 class="text-xl font-bold text-gray-900 mt-1 mb-2" data-lang-key="subs_t5_name"><?php echo __('subs_t5_name'); ?></h3>
                <p class="text-gray-600 text-sm" data-lang-key="sub2_desc"><?php echo __('sub2_desc'); ?></p>
            </div>
        </div>
        <!-- Center Year Badge -->
        <div class="absolute left-1/2 transform -translate-x-1/2 bg-blue-900 text-white font-bold text-sm w-16 h-16 rounded-full flex items-center justify-center shadow-md z-10 border-4 border-white hidden md:flex">
            2024
        </div>
        <div class="md:w-1/2 md:pl-12 text-center md:text-left">
            <span class="md:hidden inline-block bg-blue-900 text-white font-bold text-sm px-3 py-1 rounded-full mb-2">2024</span>
            <p class="text-xs text-gray-500" data-lang-key="subs_t5_note"><?php echo __('subs_t5_note'); ?></p>
        </div>
    </div>

    <!-- Timeline Item 6 (2017) — KV9 CAMBODIA -->
    <div class="flex flex-col md:flex-row-reverse items-center relative">
        <div class="md:w-1/2 md:pl-12 text-center md:text-left mb-6 md:mb-0">
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 inline-block text-left w-full hover:shadow-lg transition">
                <div class="mb-4">
                    <img src="images/kv9logo.jpg"
                         alt="<?php echo htmlspecialchars(__('sub1_name')); ?>"
                         class="w-16 h-16 rounded-full object-cover border-2 border-blue-100 shadow-sm"
                         onerror="this.style.display='none';this.parentElement.innerHTML='<i class=\'fa-solid fa-spa text-2xl text-blue-300\'></i>';">
                </div>
                <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub1_cat"><?php echo __('sub1_cat'); ?></span>
                <h3 class="text-xl font-bold text-gray-900 mt-1 mb-2" data-lang-key="sub1_name"><?php echo __('sub1_name'); ?></h3>
                <p class="text-gray-600 text-sm" data-lang-key="sub1_desc"><?php echo __('sub1_desc'); ?></p>
            </div>
        </div>
        <!-- Center Year Badge -->
        <div class="absolute left-1/2 transform -translate-x-1/2 bg-blue-900 text-white font-bold text-sm w-16 h-16 rounded-full flex items-center justify-center shadow-md z-10 border-4 border-white hidden md:flex">
            2017
        </div>
        <div class="md:w-1/2 md:pr-12 text-center md:text-right">
            <span class="md:hidden inline-block bg-blue-900 text-white font-bold text-sm px-3 py-1 rounded-full mb-2">2017</span>
            <p class="text-xs text-gray-500" data-lang-key="subs_t6_note"><?php echo __('subs_t6_note'); ?></p>
        </div>
    </div>

</section>