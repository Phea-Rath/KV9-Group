<?php
// ============================================================
// pages/portfolio.php — Business Units & Services
// ============================================================
?>

<!-- Page Header Title -->
<section class="bg-white py-12 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-3xl font-extrabold text-blue-900 mb-2" data-lang-key="port_page_title">
            <?php echo __('port_page_title'); ?>
        </h1>
        <p class="text-gray-600 text-sm" data-lang-key="port_page_subtitle">
            <?php echo __('port_page_subtitle'); ?>
        </p>
    </div>
</section>

<!-- Business Units Grid Section (3 Columns Layout) -->
<section class="max-w-7xl mx-auto py-16 px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

         <!-- Business Card 5: KV9 GROUP -->
        <div class="bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden group hover:shadow-xl transition duration-300 flex flex-col justify-between">
            <div>
                <div class="aspect-square w-full relative overflow-hidden bg-gray-100">
                    <img src="images/products/kv9cover.png" alt="<?php echo htmlspecialchars(__('sub1_name')); ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-6">
                        <h3 class="text-2xl font-bold text-white" data-lang-key="sub1_name"><?php echo __('sub1_name'); ?></h3>
                    </div>
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub1_cat"><?php echo __('sub1_cat'); ?></span>
                    <h4 class="text-lg font-bold text-gray-900 mt-1 mb-2" data-lang-key="port_card1_title"><?php echo __('port_card1_title'); ?></h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4" data-lang-key="sub1_desc"><?php echo __('sub1_desc'); ?></p>
                </div>
            </div>
            <div class="px-6 pb-6">
                <button onclick="openModal('modal-kv9-cosmetic')" class="inline-flex items-center text-blue-900 font-semibold text-sm hover:text-blue-700 transition cursor-pointer" data-lang-key="btn_details">
                    <?php echo __('btn_details'); ?> <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                </button>
            </div>
        </div>

        <!-- Business Card 1: Star Care Company -->
        <div class="bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden group hover:shadow-xl transition duration-300 flex flex-col justify-between">
            <div>
                <div class="aspect-square w-full relative overflow-hidden bg-gray-100">
                    <img src="images/products/stcover.jpg" alt="<?php echo htmlspecialchars(__('sub4_name')); ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-6">
                        <h3 class="text-2xl font-bold text-white" data-lang-key="sub4_name"><?php echo __('sub4_name'); ?></h3>
                    </div>
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub4_cat"><?php echo __('sub4_cat'); ?></span>
                    <h4 class="text-lg font-bold text-gray-900 mt-1 mb-2" data-lang-key="port_card4_title"><?php echo __('port_card4_title'); ?></h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4" data-lang-key="sub4_desc"><?php echo __('sub4_desc'); ?></p>
                </div>
            </div>
            <div class="px-6 pb-6">
                <button onclick="openModal('modal-starcare')" class="inline-flex items-center text-blue-900 font-semibold text-sm hover:text-blue-700 transition cursor-pointer" data-lang-key="btn_details">
                    <?php echo __('btn_details'); ?> <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                </button>
            </div>
        </div>

        <!-- Business Card 2: Chomnenh Technology -->
        <div class="bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden group hover:shadow-xl transition duration-300 flex flex-col justify-between">
            <div>
                <div class="aspect-square w-full relative overflow-hidden bg-gray-100">
                    <img src="images/chomenhtechno.jpg" alt="<?php echo htmlspecialchars(__('sub3_name')); ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-6">
                        <h3 class="text-2xl font-bold text-white" data-lang-key="sub3_name"><?php echo __('sub3_name'); ?></h3>
                    </div>
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub3_cat"><?php echo __('sub3_cat'); ?></span>
                    <h4 class="text-lg font-bold text-gray-900 mt-1 mb-2" data-lang-key="port_card3_title"><?php echo __('port_card3_title'); ?></h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4" data-lang-key="sub3_desc"><?php echo __('sub3_desc'); ?></p>
                </div>
            </div>
            <div class="px-6 pb-6">
                <button onclick="openModal('modal-chomnenh-tech')" class="inline-flex items-center text-blue-900 font-semibold text-sm hover:text-blue-700 transition cursor-pointer" data-lang-key="btn_details">
                    <?php echo __('btn_details'); ?> <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                </button>
            </div>
        </div>

        <!-- Business Card 3: Sothy Craft -->
        <div class="bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden group hover:shadow-xl transition duration-300 flex flex-col justify-between">
            <div>
                <div class="aspect-square w-full relative overflow-hidden bg-gray-100">
                    <img src="images/products/sccover.jpg" alt="<?php echo htmlspecialchars(__('subs_t5_name')); ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-6">
                        <h3 class="text-2xl font-bold text-white" data-lang-key="subs_t5_name"><?php echo __('subs_t5_name'); ?></h3>
                    </div>
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub2_cat"><?php echo __('sub2_cat'); ?></span>
                    <h4 class="text-lg font-bold text-gray-900 mt-1 mb-2" data-lang-key="port_card2_title"><?php echo __('port_card2_title'); ?></h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4" data-lang-key="sub2_desc"><?php echo __('sub2_desc'); ?></p>
                </div>
            </div>
            <div class="px-6 pb-6">
                <button onclick="openModal('modal-sothy-craft')" class="inline-flex items-center text-blue-900 font-semibold text-sm hover:text-blue-700 transition cursor-pointer" data-lang-key="btn_details">
                    <?php echo __('btn_details'); ?> <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                </button>
            </div>
        </div>

        <!-- Business Card 6: វីជីង ម្សៅស៊ុប -->
        <div class="bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden group hover:shadow-xl transition duration-300 flex flex-col justify-between">
            <div>
                <div class="aspect-square w-full relative overflow-hidden bg-gray-100">
                    <img src="images/products/vj0002.jpg" alt="<?php echo htmlspecialchars(__('sub6_name')); ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-6">
                        <h3 class="text-2xl font-bold text-white" data-lang-key="sub6_name"><?php echo __('sub6_name'); ?></h3>
                    </div>
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub6_cat"><?php echo __('sub6_cat'); ?></span>
                    <h4 class="text-lg font-bold text-gray-900 mt-1 mb-2" data-lang-key="port_card6_title"><?php echo __('port_card6_title'); ?></h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4" data-lang-key="sub6_desc"><?php echo __('sub6_desc'); ?></p>
                </div>
            </div>
            <div class="px-6 pb-6">
                <button onclick="openModal('modal-vijing-soup')" class="inline-flex items-center text-blue-900 font-semibold text-sm hover:text-blue-700 transition cursor-pointer" data-lang-key="btn_details">
                    <?php echo __('btn_details'); ?> <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                </button>
            </div>
        </div>

        <!-- Business Card 4: Chomnenh Recruitment -->
        <div class="bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden group hover:shadow-xl transition duration-300 flex flex-col justify-between">
            <div>
                <div class="aspect-square w-full relative overflow-hidden bg-gray-100">
                    <img src="images/recrutment.webp" alt="<?php echo htmlspecialchars(__('sub5_name')); ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-6">
                        <h3 class="text-2xl font-bold text-white" data-lang-key="sub5_name"><?php echo __('sub5_name'); ?></h3>
                    </div>
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider" data-lang-key="sub5_cat"><?php echo __('sub5_cat'); ?></span>
                    <h4 class="text-lg font-bold text-gray-900 mt-1 mb-2" data-lang-key="port_card5_title"><?php echo __('port_card5_title'); ?></h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4" data-lang-key="sub5_desc"><?php echo __('sub5_desc'); ?></p>
                </div>
            </div>
            <div class="px-6 pb-6">
                <button onclick="openModal('modal-chomnenh-recruitment')" class="inline-flex items-center text-blue-900 font-semibold text-sm hover:text-blue-700 transition cursor-pointer" data-lang-key="btn_details">
                    <?php echo __('btn_details'); ?> <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                </button>
            </div>
        </div>

    </div>
</section>

<!-- ========================================== -->
<!-- MODALS WITH 1:1 SQUARE PRODUCT GALLERY    -->
<!-- ========================================== -->

<!-- Modal 1: Star Care Company -->
<div id="modal-starcare" class="fixed inset-0 z-50 hidden bg-black/75 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto shadow-2xl relative">
        <button onclick="closeModal('modal-starcare')" class="absolute top-4 right-4 bg-black/50 hover:bg-black/70 text-white w-9 h-9 rounded-full flex items-center justify-center text-base font-bold transition z-20">✕</button>
        <div class="p-6 space-y-6">
            <div>
                <span class="text-xs font-bold text-blue-600 uppercase tracking-wider" data-lang-key="sub4_cat"><?php echo __('sub4_cat'); ?></span>
                <h2 class="text-2xl font-extrabold text-gray-900 mt-1" data-lang-key="sub4_name"><?php echo __('sub4_name'); ?></h2>
                <p class="text-gray-600 text-xs sm:text-sm mt-1" data-lang-key="port_modal_starcare_desc"><?php echo __('port_modal_starcare_desc'); ?></p>
            </div>
            <div>
                <h4 class="font-bold text-gray-900 text-sm mb-3" data-lang-key="port_modal_product_title"><?php echo __('port_modal_product_title'); ?></h4>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <!-- រូបភាពទាំងអស់នៅទីនេះមិនចាំបាច់បកប្រែទេ ព្រោះជារូបភាព -->
                    <!-- (ទុកកូដរូបភាពដើមរបស់អ្នកនៅដដែល) -->
                    <div class="bg-gray-50 border border-gray-100 rounded-xl overflow-hidden shadow-xs flex flex-col"><div class="aspect-square w-full bg-gray-200"><img src="images/products/st0001.jpg" alt="Skincare" class="w-full h-full object-cover"></div></div>
                    <div class="bg-gray-50 border border-gray-100 rounded-xl overflow-hidden shadow-xs flex flex-col"><div class="aspect-square w-full bg-gray-200"><img src="images/products/st0002.jpg" alt="Body Hygiene" class="w-full h-full object-cover"></div></div>
                    <div class="bg-gray-50 border border-gray-100 rounded-xl overflow-hidden shadow-xs flex flex-col"><div class="aspect-square w-full bg-gray-200"><img src="images/products/st0003.jpg" alt="Distribution" class="w-full h-full object-cover"></div></div>
                    <!-- ... អ្នកអាចបន្តដាក់រូបភាពផ្សេងទៀតនៅទីនេះ ... -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2: Chomnenh Technology -->
<div id="modal-chomnenh-tech" class="fixed inset-0 z-50 hidden bg-black/75 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto shadow-2xl relative">
        <button onclick="closeModal('modal-chomnenh-tech')" class="absolute top-4 right-4 bg-black/50 hover:bg-black/70 text-white w-9 h-9 rounded-full flex items-center justify-center text-base font-bold transition z-20">✕</button>
        <div class="p-6 space-y-6">
            <div>
                <span class="text-xs font-bold text-blue-600 uppercase tracking-wider" data-lang-key="sub3_cat"><?php echo __('sub3_cat'); ?></span>
                <h2 class="text-2xl font-extrabold text-gray-900 mt-1" data-lang-key="sub3_name"><?php echo __('sub3_name'); ?></h2>
                <p class="text-gray-600 text-xs sm:text-sm mt-1" data-lang-key="port_modal_tech_desc"><?php echo __('port_modal_tech_desc'); ?></p>
            </div>
            <div>
                <h4 class="font-bold text-gray-900 text-sm mb-3" data-lang-key="port_modal_product_title"><?php echo __('port_modal_product_title'); ?></h4>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="bg-gray-50 border border-gray-100 rounded-xl overflow-hidden shadow-xs flex flex-col">
                        <div class="aspect-square w-full bg-gray-200"><img src="images/products/ch0001.jpg" alt="Digital Menu" class="w-full h-full object-cover"></div>
                        <div class="p-3">
                            <h5 class="font-bold text-gray-900 text-xs sm:text-sm" data-lang-key="port_tech_item1_title"><?php echo __('port_tech_item1_title'); ?></h5>
                            <p class="text-gray-500 text-xs mt-1" data-lang-key="port_tech_item1_desc"><?php echo __('port_tech_item1_desc'); ?></p>
                        </div>
                    </div>
                    <div class="bg-gray-50 border border-gray-100 rounded-xl overflow-hidden shadow-xs flex flex-col">
                        <div class="aspect-square w-full bg-gray-200"><img src="images/products/ch0003.jpg" alt="ERP" class="w-full h-full object-cover"></div>
                        <div class="p-3">
                            <h5 class="font-bold text-gray-900 text-xs sm:text-sm" data-lang-key="port_tech_item2_title"><?php echo __('port_tech_item2_title'); ?></h5>
                            <p class="text-gray-500 text-xs mt-1" data-lang-key="port_tech_item2_desc"><?php echo __('port_tech_item2_desc'); ?></p>
                        </div>
                    </div>
                    <div class="bg-gray-50 border border-gray-100 rounded-xl overflow-hidden shadow-xs flex flex-col">
                        <div class="aspect-square w-full bg-gray-200"><img src="images/products/ch0002.jpg" alt="HR System" class="w-full h-full object-cover"></div>
                        <div class="p-3">
                            <h5 class="font-bold text-gray-900 text-xs sm:text-sm" data-lang-key="port_tech_item3_title"><?php echo __('port_tech_item3_title'); ?></h5>
                            <p class="text-gray-500 text-xs mt-1" data-lang-key="port_tech_item3_desc"><?php echo __('port_tech_item3_desc'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- អ្នកអាចបន្តធ្វើដូចគ្នាចំពោះ Modal ផ្សេងទៀត (Sothy Craft, Recruitment, KV9, Vijing) ដោយគ្រាន់តែបន្ថែម data-lang-key និង <?php echo __('...'); ?> ទៅលើអត្ថបទដែលអ្នកចង់បកប្រែ។ -->

<!-- JavaScript Modals Control -->
<script>
    function openModal(id) {
        document.getElementById(id).classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    window.onclick = function(event) {
        const modals = document.querySelectorAll('[id^="modal-"]');
        modals.forEach(modal => {
            if (event.target === modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        });
    }
</script>