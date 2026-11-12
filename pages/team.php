<?php
// Ensure translation function is available
if (!function_exists('__')) {
    function __($key) {
        return $key;
    }
}
?>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Page Header Title -->
<section class="bg-white py-12 border-b border-gray-200">
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-3xl font-extrabold text-blue-900 mb-2" data-lang-key="team_page_title"><?php echo __('team_page_title'); ?></h1>
        <p class="text-gray-600 text-sm" data-lang-key="team_page_subtitle"><?php echo __('team_page_subtitle'); ?></p>
    </div>
</section>

<!-- Team Members Grid Section -->
<section class="max-w-6xl mx-auto py-16 px-4">

    <!-- Executive Management / CEO Top Highlight -->
    <div class="text-center mb-12">
        <span class="text-blue-600 font-semibold text-xs uppercase tracking-widest bg-blue-100 px-3 py-1 rounded-full" data-lang-key="exec_mgmt_tag"><?php echo __('exec_mgmt_tag'); ?></span>
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-3 mb-2" data-lang-key="exec_mgmt_title"><?php echo __('exec_mgmt_title'); ?></h2>
        <div class="w-12 h-1 bg-blue-900 mx-auto rounded-full"></div>
    </div>

    <!-- Top Tier: CEO -->
    <div class="flex justify-center mb-10">
        <div class="bg-white rounded-2xl shadow-xl border-2 border-blue-900 overflow-hidden text-center group hover:shadow-2xl transition duration-300 w-full max-w-sm">
            <div class="h-56 bg-gray-100 overflow-hidden relative flex items-center justify-center">
                <img src="images/ceo.png"
                     alt="<?php echo htmlspecialchars(__('ceo_name')); ?>"
                     class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-500"
                     onerror="this.style.display='none';this.parentElement.classList.add('bg-blue-50');this.parentElement.innerHTML='<i class=\'fa-solid fa-user-tie text-6xl text-blue-200\'></i>';">
                <div class="absolute top-3 right-3 bg-blue-900 text-white text-xs font-bold px-3 py-1 rounded-full shadow" data-lang-key="ceo_badge">
                    <?php echo __('ceo_badge'); ?>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-900" data-lang-key="ceo_name"><?php echo __('ceo_name'); ?></h3>
                <p class="text-blue-600 text-xs font-semibold uppercase tracking-wider mt-1" data-lang-key="ceo_title"><?php echo __('ceo_title'); ?></p>
                <p class="text-gray-500 text-xs mt-3" data-lang-key="ceo_desc"><?php echo __('ceo_desc'); ?></p>
            </div>
        </div>
    </div>

    <!-- Second Tier: COO, Co-Founder & Management -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-3xl mx-auto mb-20">

        <!-- Member 2: COO -->
        <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden text-center group hover:shadow-xl transition duration-300">
            <div class="h-64 bg-gray-100 overflow-hidden relative flex items-center justify-center">
                <img src="images/team-1.png"
                     alt="<?php echo htmlspecialchars(__('coo_name')); ?>"
                     class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-500"
                     onerror="this.style.display='none';this.parentElement.innerHTML='<i class=\'fa-solid fa-user text-5xl text-gray-300\'></i>';">
            </div>
            <div class="p-6">
                <h3 class="text-lg font-bold text-gray-900" data-lang-key="coo_name"><?php echo __('coo_name'); ?></h3>
                <p class="text-blue-600 text-xs font-semibold uppercase tracking-wider mt-1" data-lang-key="coo_title"><?php echo __('coo_title'); ?></p>
                <p class="text-gray-500 text-xs mt-3" data-lang-key="coo_desc"><?php echo __('coo_desc'); ?></p>
            </div>
        </div>

        <!-- Member 3: Ratha -->
        <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden text-center group hover:shadow-xl transition duration-300">
            <div class="h-64 bg-gray-100 overflow-hidden relative flex items-center justify-center">
                <img src="images/ratha0001.jpg"
                     alt="<?php echo htmlspecialchars(__('ratha_name')); ?>"
                     class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-500"
                     onerror="this.style.display='none';this.parentElement.innerHTML='<i class=\'fa-solid fa-user text-5xl text-gray-300\'></i>';">
            </div>
            <div class="p-6">
                <h3 class="text-lg font-bold text-gray-900" data-lang-key="ratha_name"><?php echo __('ratha_name'); ?></h3>
                <p class="text-blue-600 text-xs font-semibold uppercase tracking-wider mt-1" data-lang-key="ratha_title"><?php echo __('ratha_title'); ?></p>
                <p class="text-gray-500 text-xs mt-3" data-lang-key="ratha_desc"><?php echo __('ratha_desc'); ?></p>
            </div>
        </div>

        <!-- Member 4 -->
        <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden text-center group hover:shadow-xl transition duration-300">
            <div class="h-64 bg-gray-100 overflow-hidden relative flex items-center justify-center">
                <img src="images/team-3.png"
                     alt="<?php echo htmlspecialchars(__('member4_name')); ?>"
                     class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-500"
                     onerror="this.style.display='none';this.parentElement.innerHTML='<i class=\'fa-solid fa-user text-5xl text-gray-300\'></i>';">
            </div>
            <div class="p-6">
                <h3 class="text-lg font-bold text-gray-900" data-lang-key="member4_name"><?php echo __('member4_name'); ?></h3>
                <p class="text-blue-600 text-xs font-semibold uppercase tracking-wider mt-1" data-lang-key="member4_title"><?php echo __('member4_title'); ?></p>
                <p class="text-gray-500 text-xs mt-3" data-lang-key="member4_company"><?php echo __('member4_company'); ?></p>
            </div>
        </div>

        <!-- Member 5 -->
        <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden text-center group hover:shadow-xl transition duration-300">
            <div class="h-64 bg-gray-100 overflow-hidden relative flex items-center justify-center">
                <img src="images/team-4.png"
                     alt="<?php echo htmlspecialchars(__('member5_name')); ?>"
                     class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-500"
                     onerror="this.style.display='none';this.parentElement.innerHTML='<i class=\'fa-solid fa-user text-5xl text-gray-300\'></i>';">
            </div>
            <div class="p-6">
                <h3 class="text-lg font-bold text-gray-900" data-lang-key="member5_name"><?php echo __('member5_name'); ?></h3>
                <p class="text-blue-600 text-xs font-semibold uppercase tracking-wider mt-1" data-lang-key="member5_title"><?php echo __('member5_title'); ?></p>
                <p class="text-gray-500 text-xs mt-3" data-lang-key="member5_company"><?php echo __('member5_company'); ?></p>
            </div>
        </div>

        <!-- Member 6 -->
        <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden text-center group hover:shadow-xl transition duration-300">
            <div class="h-64 bg-gray-100 overflow-hidden relative flex items-center justify-center">
                <img src="images/am001.jpg"
                     alt="<?php echo htmlspecialchars(__('member6_name')); ?>"
                     class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-500"
                     onerror="this.style.display='none';this.parentElement.innerHTML='<i class=\'fa-solid fa-user text-5xl text-gray-300\'></i>';">
            </div>
            <div class="p-6">
                <h3 class="text-lg font-bold text-gray-900" data-lang-key="member6_name"><?php echo __('member6_name'); ?></h3>
                <p class="text-blue-600 text-xs font-semibold uppercase tracking-wider mt-1" data-lang-key="member6_title"><?php echo __('member6_title'); ?></p>
                <p class="text-gray-500 text-xs mt-3" data-lang-key="member6_company"><?php echo __('member6_company'); ?></p>
            </div>
        </div>

        <!-- Member 7 -->
        <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden text-center group hover:shadow-xl transition duration-300">
            <div class="h-64 bg-gray-100 overflow-hidden relative flex items-center justify-center">
                <img src="images/profile.png"
                     alt="<?php echo htmlspecialchars(__('member7_name')); ?>"
                     class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-500"
                     onerror="this.style.display='none';this.parentElement.innerHTML='<i class=\'fa-solid fa-user text-5xl text-gray-300\'></i>';">
            </div>
            <div class="p-6">
                <h3 class="text-lg font-bold text-gray-900" data-lang-key="member7_name"><?php echo __('member7_name'); ?></h3>
                <p class="text-blue-600 text-xs font-semibold uppercase tracking-wider mt-1" data-lang-key="member7_title"><?php echo __('member7_title'); ?></p>
                <p class="text-gray-500 text-xs mt-3" data-lang-key="member7_company"><?php echo __('member7_company'); ?></p>
            </div>
        </div>

    </div>

    <!-- Department Heads / Key Staff Carousel Section -->
    <div class="text-center mb-12">
        <span class="text-blue-600 font-semibold text-xs uppercase tracking-widest bg-blue-100 px-3 py-1 rounded-full" data-lang-key="dept_heads_tag"><?php echo __('dept_heads_tag'); ?></span>
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mt-3 mb-2" data-lang-key="dept_heads_title"><?php echo __('dept_heads_title'); ?></h2>
        <div class="w-12 h-1 bg-blue-900 mx-auto rounded-full"></div>
    </div>

    <!-- Swiper Container with Navigation Arrows -->
    <div class="relative px-2 sm:px-10">
        <div class="swiper departmentSwiper overflow-hidden py-4">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 text-center h-full flex flex-col items-center">
                        <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 overflow-hidden mb-4 border border-gray-200 flex items-center justify-center">
                            <img src="images/team-2.png"
                                 alt="<?php echo htmlspecialchars(__('staff1_name')); ?>"
                                 class="w-full h-full object-cover object-top"
                                 onerror="this.style.display='none';this.parentElement.innerHTML='<i class=\'fa-solid fa-user text-2xl text-gray-300\'></i>';">
                        </div>
                        <h4 class="font-bold text-gray-900 text-sm" data-lang-key="staff1_name"><?php echo __('staff1_name'); ?></h4>
                        <p class="text-xs text-gray-500 mt-1" data-lang-key="staff1_title"><?php echo __('staff1_title'); ?></p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 text-center h-full flex flex-col items-center">
                        <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 overflow-hidden mb-4 border border-gray-200 flex items-center justify-center">
                            <img src="images/team-5.png"
                                 alt="<?php echo htmlspecialchars(__('staff2_name')); ?>"
                                 class="w-full h-full object-cover object-top"
                                 onerror="this.style.display='none';this.parentElement.innerHTML='<i class=\'fa-solid fa-user text-2xl text-gray-300\'></i>';">
                        </div>
                        <h4 class="font-bold text-gray-900 text-sm" data-lang-key="staff2_name"><?php echo __('staff2_name'); ?></h4>
                        <p class="text-xs text-gray-500 mt-1" data-lang-key="staff2_title"><?php echo __('staff2_title'); ?></p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 text-center h-full flex flex-col items-center">
                        <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 overflow-hidden mb-4 border border-gray-200 flex items-center justify-center">
                            <img src="images/team-7.png"
                                 alt="<?php echo htmlspecialchars(__('staff3_name')); ?>"
                                 class="w-full h-full object-cover object-top"
                                 onerror="this.style.display='none';this.parentElement.innerHTML='<i class=\'fa-solid fa-user text-2xl text-gray-300\'></i>';">
                        </div>
                        <h4 class="font-bold text-gray-900 text-sm" data-lang-key="staff3_name"><?php echo __('staff3_name'); ?></h4>
                        <p class="text-xs text-gray-500 mt-1" data-lang-key="staff3_title"><?php echo __('staff3_title'); ?></p>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 text-center h-full flex flex-col items-center">
                        <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 overflow-hidden mb-4 border border-gray-200 flex items-center justify-center">
                            <img src="images/team-6.png"
                                 alt="<?php echo htmlspecialchars(__('staff4_name')); ?>"
                                 class="w-full h-full object-cover object-top"
                                 onerror="this.style.display='none';this.parentElement.innerHTML='<i class=\'fa-solid fa-user text-2xl text-gray-300\'></i>';">
                        </div>
                        <h4 class="font-bold text-gray-900 text-sm" data-lang-key="staff4_name"><?php echo __('staff4_name'); ?></h4>
                        <p class="text-xs text-gray-500 mt-1" data-lang-key="staff4_title"><?php echo __('staff4_title'); ?></p>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 text-center h-full flex flex-col items-center">
                        <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 overflow-hidden mb-4 border border-gray-200 flex items-center justify-center">
                            <img src="images/team-8.png"
                                 alt="<?php echo htmlspecialchars(__('staff5_name')); ?>"
                                 class="w-full h-full object-cover object-top"
                                 onerror="this.style.display='none';this.parentElement.innerHTML='<i class=\'fa-solid fa-user text-2xl text-gray-300\'></i>';">
                        </div>
                        <h4 class="font-bold text-gray-900 text-sm" data-lang-key="staff5_name"><?php echo __('staff5_name'); ?></h4>
                        <p class="text-xs text-gray-500 mt-1" data-lang-key="staff5_title"><?php echo __('staff5_title'); ?></p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Custom Navigation Buttons (Prev / Next) -->
        <div class="swiper-button-prev !-left-2 sm:!left-0 !text-blue-900 bg-white shadow-md rounded-full !w-10 !h-10 !after:text-base !after:font-bold"></div>
        <div class="swiper-button-next !-right-2 sm:!right-0 !text-blue-900 bg-white shadow-md rounded-full !w-10 !h-10 !after:text-base !after:font-bold"></div>
    </div>

</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    const departmentSwiper = new Swiper('.departmentSwiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: { slidesPerView: 2 },
            768: { slidesPerView: 3 },
            1024: { slidesPerView: 4 },
        },
    });
</script>