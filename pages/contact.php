<?php
// ============================================================
// pages/contact.php — Contact Us
// ============================================================
?>

<!-- Page Header Title -->
<section class="bg-white py-12 border-b border-gray-200">
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-3xl font-extrabold text-blue-900 mb-2" data-lang-key="contact_page_title">
            <?php echo __('contact_page_title'); ?>
        </h1>
        <p class="text-gray-600 text-sm" data-lang-key="contact_page_subtitle">
            <?php echo __('contact_page_subtitle'); ?>
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="max-w-6xl mx-auto py-16 px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        
        <!-- Left Column: Contact Information & Details -->
        <div>
            <span class="inline-block bg-blue-50 text-blue-900 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-widest mb-4" data-lang-key="contact_badge">
                <?php echo __('contact_badge'); ?>
            </span>
            <h2 class="text-3xl font-bold text-gray-900 mb-6" data-lang-key="contact_heading">
                <?php echo __('contact_heading'); ?>
            </h2>
            <p class="text-gray-600 text-sm leading-relaxed mb-8" data-lang-key="contact_desc">
                <?php echo __('contact_desc'); ?>
            </p>

            <div class="space-y-6">
                <!-- Address -->
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-blue-100 text-blue-900 rounded-xl flex items-center justify-center shrink-0 text-lg font-bold">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-base" data-lang-key="contact_label_address">
                            <?php echo __('contact_label_address'); ?>
                        </h4>
                        <p class="text-gray-600 text-sm mt-1" data-lang-key="address">
                            <?php echo __('address'); ?>
                        </p>
                    </div>
                </div>

                <!-- Phone -->
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-blue-100 text-blue-900 rounded-xl flex items-center justify-center shrink-0 text-lg font-bold">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-base" data-lang-key="contact_label_phone">
                            <?php echo __('contact_label_phone'); ?>
                        </h4>
                        <p class="text-gray-600 text-sm mt-1">+855 61 955 859</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-blue-100 text-blue-900 rounded-xl flex items-center justify-center shrink-0 text-lg font-bold">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-base" data-lang-key="contact_label_email">
                            <?php echo __('contact_label_email'); ?>
                        </h4>
                        <p class="text-gray-600 text-sm mt-1">koyvitou999@gmail.com</p>
                    </div>
                </div>
            </div>

            <!-- Social Media Links -->
            <div class="mt-8 pt-8 border-t border-gray-200">
                <h4 class="font-bold text-gray-900 text-sm mb-4" data-lang-key="contact_follow_us">
                    <?php echo __('contact_follow_us'); ?>
                </h4>
                <div class="flex space-x-3 text-base">
                    <a href="#" class="w-10 h-10 bg-blue-900 text-white rounded-full flex items-center justify-center hover:bg-blue-800 transition" title="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-blue-900 text-white rounded-full flex items-center justify-center hover:bg-blue-800 transition" title="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-blue-900 text-white rounded-full flex items-center justify-center hover:bg-blue-800 transition" title="LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-red-600 text-white rounded-full flex items-center justify-center hover:bg-red-700 transition" title="YouTube">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Column: Google Map Embedded -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden h-[450px]">
            <iframe 
                class="w-full h-full border-0" 
                src="https://www.google.com/maps?q=KV9+CAMBODIA+CO.,LTD&output=embed" 
                allowfullscreen="" 
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>