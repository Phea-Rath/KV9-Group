<?php
// Ensure translation function is available
if (!function_exists('__')) {
    function __($key) {
        return $key;
    }
}
?>

<!-- Page Header Title -->
<section class="bg-white py-12 border-b border-gray-200">
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-3xl font-extrabold text-blue-900 mb-2" data-lang-key="founder_page_title">
            <?php echo __('founder_page_title'); ?>
        </h1>
        <p class="text-gray-600 text-sm" data-lang-key="founder_page_subtitle">
            <?php echo __('founder_page_subtitle'); ?>
        </p>
    </div>
</section>

<!-- Founder Profile Section -->
<section class="max-w-5xl mx-auto py-16 px-4">
    <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden grid grid-cols-1 md:grid-cols-12 gap-0 items-stretch">

        <!-- Left Column: Founder Photo Placeholder / Image -->
        <div class="md:col-span-5 bg-gradient-to-br from-blue-900 to-blue-950 relative min-h-[350px] flex items-center justify-center p-8">
            <div class="absolute inset-0 opacity-20 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80');"></div>

            <div class="relative z-10 text-center">
                <!-- Profile Image Frame -->
                <div class="w-48 h-48 mx-auto rounded-full border-4 border-white/20 shadow-2xl overflow-hidden bg-white mb-4">
                    <img src="images/founder.png"
                         alt="<?php echo htmlspecialchars(__('founder_photo_alt')); ?>"
                         class="w-full h-full object-cover"
                         onerror="this.style.display='none';this.parentElement.classList.add('flex','items-center','justify-center');this.parentElement.innerHTML='<i class=\'fa-solid fa-user-tie text-5xl text-gray-300\'></i>';">
                </div>
                <h3 class="text-white font-bold text-xl" data-lang-key="founder_name"><?php echo __('founder_name'); ?></h3>
                <p class="text-blue-300 text-xs tracking-wider uppercase mt-1" data-lang-key="founder_title_pos"><?php echo __('founder_title_pos'); ?></p>
            </div>
        </div>

        <!-- Right Column: Biography & Message -->
        <div class="md:col-span-7 p-8 md:p-12 flex flex-col justify-between">
            <div>
                <span class="inline-block bg-blue-50 text-blue-900 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-widest mb-4" data-lang-key="founder_badge">
                    <?php echo __('founder_badge'); ?>
                </span>
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-6 leading-tight">
                    « <span data-lang-key="founder_quote"><?php echo __('founder_quote'); ?></span> »
                </h2>

                <div class="space-y-4 text-gray-600 text-sm leading-relaxed">
                    <p data-lang-key="founder_bio_1">
                        <?php echo __('founder_bio_1'); ?>
                    </p>
                    <p data-lang-key="founder_bio_2">
                        <?php echo __('founder_bio_2'); ?>
                    </p>
                </div>
            </div>

            <!-- Signature or sign-off -->
            <div class="mt-8 pt-6 border-t border-gray-100 flex items-center justify-between">
                <div>
                    <h4 class="font-bold text-gray-900 text-base" data-lang-key="founder_sign_title"><?php echo __('founder_sign_title'); ?></h4>
                    <p class="text-xs text-gray-500">KV9 GROUP</p>
                </div>
                <div class="text-blue-900 font-serif italic text-xl font-bold opacity-80" data-lang-key="founder_sign_word">
                    <?php echo __('founder_sign_word'); ?>
                </div>
            </div>
        </div>

    </div>
</section>