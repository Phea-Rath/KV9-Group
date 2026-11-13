<?php
// ============================================================
// KV9 GROUP — Translation & Helper Functions
// File: includes/functions.php
// Encoding: UTF-8 (no BOM)
// ============================================================

if (session_status() === PHP_SESSION_NONE) {
    if (!is_writable(session_save_path())) {
        @session_save_path('/tmp');
    }
    @session_start();
}

if (!isset($_SESSION['lang']) || !in_array($_SESSION['lang'], ['km', 'en'], true)) {
    if (isset($_COOKIE['kv9_lang']) && in_array($_COOKIE['kv9_lang'], ['km', 'en'], true)) {
        $_SESSION['lang'] = $_COOKIE['kv9_lang'];
    } else {
        $_SESSION['lang'] = 'km';
    }
}

function __($key) {
    static $translations = null;
    if ($translations === null) {
        $translations = kv9_get_translations();
    }
    $lang = $_SESSION['lang'] ?? 'km';
    return $translations[$lang][$key] ?? $key;
}

function get_all_translations($lang = null) {
    $lang = $lang ?? ($_SESSION['lang'] ?? 'km');
    if (!in_array($lang, ['km', 'en'])) {
        $lang = 'km';
    }
    $all = kv9_get_translations();
    return $all[$lang] ?? [];
}

function kv9_get_translations() {
    return [
        // =====================================================
        // ខ្មែរ (KHMER)
        // =====================================================
        'km' => [
            // Navbar & Menu
            'home'                     => 'ទំព័រដើម',
            'about_us'                 => 'អំពីយើង',
            'vision_mission'           => 'ចក្ខវិស័យ,បេសកកម្ម,គុណតម្លៃ',
            'founder'                  => 'ស្ថាបនិក',
            'team'                     => 'រចនាសម្ព័ន្ធបុគ្គលិក',
            'subsidiaries'             => 'ក្រុមហ៊ុនបុត្រសម្ព័ន្ធ',
            'portfolio'                => 'អាជីវកម្ម',
            'contact'                  => 'ទំនាក់ទំនង',
            'quick_links'              => 'តំណរភ្ជាប់រហ័ស',
            'career_opp'               => 'ឱកាសការងារ',
            'news_updates'             => 'ព្រឹត្តិបត្រ និងព័ត៌មានថ្មីៗ',
            'privacy_policy'           => 'គោលការណ៍ឯកជនភាព',
            'follow_us'                => 'តាមដានសកម្មភាព និងព័ត៌មានថ្មីៗរបស់យើងតាមរយៈបណ្តាញសង្គម៖',
            'rights'                   => 'រក្សាសិទ្ធិគ្រប់យ៉ាង។',
            'address'                  => 'ផ្ទះលេខ 49B ភូមិព្រះពន្លា សង្កាត់ព្រែកប្រា ខណ្ឌច្បារអំពៅ រាជធានីភ្នំពេញ',
            'phone'                    => 'ទូរស័ព្ទ',
            'email'                    => 'អ៊ីមែល',
            'page_not_found'           => 'រកមិនឃើញទំព័រនេះទេ (Page Not Found)',
            'try_again'                => 'សូមព្យាយាមម្តងទៀត។',
            'language_label'           => 'ភាសា / Language:',

            // Home Hero
            'welcome_badge'            => 'ស្វាគមន៍មកកាន់ KV9 GROUP',
            'hero_title'               => 'ជាសហគ្រាសឈានមុខគេ ក្នុងការផលិត ផ្គត់ផ្គង់ផលិតផល សេវាកម្ម',
            'hero_desc'                => 'និងដំណោះស្រាយពហុវិស័យ ប្រកបដោយបរិយាបន្ន និងនវានុវត្តន៍ ដើម្បីឆ្លើយតបតម្រូវការទីផ្សារក្នុងតំបន់ និងសកលលោក ប្រកបដោយចីរភាព។',
            'explore_biz'              => 'ស្វែងយល់ពីអាជីវកម្ម',
            'learn_more'               => 'អានបន្ត',
            'read_more'                => 'ស្វែងយល់បន្ថែម',
            'close'                    => 'បិទ',

            // Home Cards
            'vision_title'             => 'ចក្ខវិស័យ',
            'vision_desc'              => 'ក្រុមហ៊ុន KV9 គ្រុប ប្តេជ្ញាចិត្តក្លាយជាសហគ្រាសឈានមុខគេក្នុងការផលិត ផ្គត់ផ្គង់ផលិតផល សេវាកម្ម និងដំណោះស្រាយ ប្រកបដោយបរិយាបន្ន...',
            'mission_title'            => 'បេសកកម្ម',
            'mission_desc'             => 'ផ្តល់ជូននូវផលិតផល និងសេវាកម្មគុណភាពខ្ពស់៖ បង្កើត និងផ្គត់ផ្គង់ផលិតផល ព្រមទាំងសេវាកម្មពហុវិស័យ ដែលមានស្តង់ដារខ្ពស់...',
            'values_title'             => 'គុណតម្លៃស្នូល',
            'values_desc'              => 'យើងប្រកាន់ខ្ជាប់នូវតម្លាភាព សីលធម៌អាជីវកម្ម និងភាពស្មោះត្រង់ក្នុងការធ្វើទំនាក់ទំនងជាមួយអតិថិជន...',

            // Subsidiaries (Home)
            'ecosystem_tag'            => 'Our Ecosystem',
            'subs_section_title'       => 'ក្រុមហ៊ុនបុត្រសម្ព័ន្ធ និងអាជីវកម្ម',
            'subs_section_desc'        => 'បណ្តុំក្រុមហ៊ុនបុត្រសម្ព័ន្ធដែលផ្តល់សេវាកម្ម និងផលិតផលឆ្លើយតបទៅនឹងតម្រូវការទីផ្សារសម័យទំនើប។',
            'sub1_cat'                 => 'Beauty & Cosmetics',
            'sub1_name'                => 'KV9 CAMBODIA CO.,LTD',
            'sub1_desc'                => 'ផ្គត់ផ្គង់ និងចែកចាយផលិតផលគ្រឿងសំអាង ថែរក្សាស្បែកមុខ និងដងខ្លួនប្រកបដោយសុវត្ថិភាព...',
            'sub1_modal_text'          => 'KV9 CAMBODIA CO.,LTD គឺជាផ្នែកមួយដែលផ្តោតលើការផ្គត់ផ្គង់ នាំចូល និងចែកចាយផលិតផលគ្រឿងសំអាង ផលិតផលថែរក្សាស្បែកមុខ ដងខ្លួន និងសម្រស់ដែលបានឆ្លងកាត់ការត្រួតពិនិត្យ និងទទួលស្គាល់គុណភាពយ៉ាងត្រឹមត្រូវ។',
            'sub2_cat'                 => 'Craft & Manufacturing',
            'sub2_name'                => 'សិប្បកម្ម ធ្យូងអនាម័យ',
            'sub2_desc'                => 'ផ្តោតលើការផលិត និងអភិវឌ្ឍផលិតផលក្នុងស្រុក និងសិប្បកម្មដែលមានគុណភាព និងស្តង់ដារ...',
            'sub2_modal_text'          => 'សិប្បកម្ម ធ្យូងអនាម័យ ផ្តោតលើការផលិត និងអភិវឌ្ឍផលិតផលក្នុងស្រុក និងសិប្បកម្មដែលមានគុណភាពខ្ពស់ ងាយស្រួលប្រើប្រាស់ និងមានស្តង់ដារអនាម័យត្រឹមត្រូវ។',
            'sub3_cat'                 => 'Digital Technology',
            'sub3_name'                => 'CHOMNENH TECHNOLOGY',
            'sub3_desc'                => 'ផ្តល់សេវាកម្មបច្ចេកវិទ្យា និងដំណោះស្រាយឌីជីថលទំនើប សម្រាប់អាជីវកម្ម និងស្ថាប័ន...',
            'sub3_modal_text'          => 'ផ្តល់សេវាកម្មបច្ចេកវិទ្យា និងដំណោះស្រាយឌីជីថលទំនើប សម្រាប់អាជីវកម្ម និងស្ថាប័ន ដោយផ្តោតលើការអភិវឌ្ឍប្រព័ន្ធបច្ចេកវិទ្យាថ្មីៗ និងជំរុញការរីកចម្រើនរបស់អាជីវកម្ម។',
            'sub4_cat'                 => 'Healthcare Services',
            'sub4_name'                => 'STAR CARE COMPANY',
            'sub4_desc'                => 'ជាក្រុមហ៊ុននាំចូល និងចែកចាយផលិតផលថែរក្សាសម្រស់ និងអនាម័យគុណភាពខ្ពស់...',
            'sub4_modal_text'          => 'គឺជាក្រុមហ៊ុននាំចូល និងចែកចាយផលិតផលថែរក្សាសម្រស់ និងអនាម័យផ្ទាល់ខ្លួនគុណភាពខ្ពស់ពីអន្តរជាតិមកកាន់ទីផ្សារកម្ពុជា។ យើងមានផ្តល់ជូននូវសាប៊ូកក់សក់ សាប៊ូដុសខ្លួន ព្រមទាំងផលិតផលថែរក្សាសក់ ស្បែក និងសម្រស់ជាច្រើនមុខ។',
            'sub5_cat'                 => 'HR & Recruitment',
            'sub5_name'                => 'CHOMNENH RECRUITMENT',
            'sub5_desc'                => 'ផ្តល់ការប្រឹក្សាយោបល់ ជ្រើសរើស និងផ្គត់ផ្គង់ធនធានមនុស្សប្រកបដោយវិជ្ជាជីវៈ...',
            'sub5_modal_text'          => 'ផ្តល់ការប្រឹក្សាយោបល់ ជ្រើសរើស និងផ្គត់ផ្គង់ធនធានមនុស្សប្រកបដោយវិជ្ជាជីវៈ គុណភាពខ្ពស់ និងឆ្លើយតបចំតម្រូវការជាក់ស្តែងរបស់ដៃគូអាជីវកម្ម។',
            'sub6_cat'                 => 'Food & Seasoning',
            'sub6_name'                => 'វីជីង ម្សៅស៊ុប',
            'sub6_desc'                => 'ផលិត និងចែកចាយម្សៅស៊ុបខ្នាតស្តង់ដារ ផ្តល់ឱជារសឆ្ងាញ់ពិសា សុវត្ថិភាពខ្ពស់...',
            'sub6_modal_text'          => 'វីជីង ម្សៅស៊ុប ផ្តោតលើការផលិត និងចែកចាយគ្រឿងទេសម្សៅស៊ុបដែលមានរសជាតិឈ្ងុយឆ្ងាញ់ ផលិតឡើងតាមស្តង់ដារអនាម័យ និងសុវត្ថិភាពម្ហូបអាហារខ្ពស់ ដើម្បីជួយលើកកម្ពស់ឱជារសម្ហូបអាហារគ្រប់មុខ។',

            // Subs Timeline Page
            'subs_page_title'          => 'ក្រុមហ៊ុនបុត្រសម្ព័ន្ធ',
            'subs_page_subtitle'       => 'ប្រវត្តិសាស្រ្ត និងការរីកចម្រើនឥតឈប់ឈររបស់ក្រុមហ៊ុនបុត្រសម្ព័ន្ធ KV9 GROUP',
            'subs_t1_note'             => 'បោះជំហានចូលក្នុងវិស័យផលិតកម្ម និងចែកចាយគ្រឿងទេសអាហារ។',
            'subs_t2_cat'              => 'CHOMNENH RECRUITMENT',
            'subs_t2_name'             => 'វិស័យសេវាកម្ម ប្រឹក្សា និងផ្គត់ផ្គង់បុគ្គលិក',
            'subs_t2_note'             => 'ការពង្រីកវិសាលភាពអាជីវកម្ម ឆ្ពោះទៅរកសេវាកម្មប្រឹក្សាយោបល់ និងផ្គត់ផ្គង់បុគ្គលិកជំនាញ។',
            'subs_t3_note'             => 'ការបង្កើតឡើងនូវសាខាថ្មីដើម្បីពង្រីកសេវាកម្មថែទាំសុខភាព និងសម្រស់។',
            'subs_t4_name'             => 'វិស័យបច្ចេកវិទ្យាឌីជីថល',
            'subs_t4_note'             => 'ការដាក់ដំណើរការជាផ្លូវការនូវសេវាកម្មបច្ចេកវិទ្យាទំនើប។',
            'subs_t5_name'             => 'សិប្បកម្ម ធ្យូងអនាម័យ និងផលិតផលក្នុងស្រុក',
            'subs_t5_note'             => 'បោះជំហានដំបូងក្នុងការបង្កើតអាជីវកម្មសិប្បកម្មផ្ទាល់ខ្លួន។',
            'subs_t6_note'             => 'ការចាប់ផ្តើមដំបូងបង្អស់ក្នុងការបង្កើតអាជីវកម្មគ្រឿងសំអាង KV9 CAMBODIA CO.,LTD។',

            // Contact Page
            'contact_page_title'       => 'ទំនាក់ទំនង',
            'contact_page_subtitle'    => 'សូមស្វាគមន៍! យើងខ្ញុំរីករាយក្នុងការទំនាក់ទំនងជាមួយអ្នក។',
            'contact_badge'            => 'Get In Touch',
            'contact_heading'          => 'ព័ត៌មានទំនាក់ទំនង',
            'contact_desc'             => 'ក្រុមហ៊ុនរបស់យើងខ្ញុំរីករាយក្នុងការឆ្លើយតបនូវរាល់សំណួរ ឬសំណើរបស់អ្នក។ សូមទាក់ទងមកយើងខ្ញុំតាមរយៈព័ត៌មានខាងក្រោម៖',
            'contact_label_address'    => 'អាសយដ្ឋាន',
            'contact_label_phone'      => 'លេខទូរស័ព្ទ',
            'contact_label_email'      => 'អ៊ីមែល',
            'contact_follow_us'        => 'តាមដានពួកយើង',

            // Vision & Mission Page
            'vision_mission_title'     => 'ចក្ខុវិស័យ និងបេសកកម្ម',
            'vision_mission_subtitle'  => 'ស្វែងយល់ពីទិសដៅយុទ្ធសាស្ត្រ និងគោលបំណងស្នូលរបស់ KV9 GROUP ក្នុងការអភិវឌ្ឍអាជីវកម្មប្រកបដោយនិរន្តរភាព និងទំនួលខុសត្រូវ។',
            'vision_heading'           => 'ចក្ខុវិស័យ (Vision)',
            'vision_text'              => 'ក្រុមហ៊ុន KV9 គ្រុប ប្តេជ្ញាចិត្តក្លាយជាសហគ្រាសឈានមុខគេ ក្នុងការផលិត ផ្គត់ផ្គង់ផលិតផល សេវាកម្ម និងដំណោះស្រាយពហុវិស័យ ប្រកបដោយបរិយាបន្ន និងនវានុវត្តន៍ ដើម្បីឆ្លើយតបតម្រូវការទីផ្សារក្នុងតំបន់ និងសកលលោក ប្រកបដោយចីរភាព។',
            'mission_heading'          => 'បេសកកម្ម (Mission)',
            'mission_item_1'           => 'ផ្តល់ជូននូវផលិតផល និងសេវាកម្មគុណភាពខ្ពស់៖ បង្កើត និងផ្គត់ផ្គង់ផលិតផល ព្រមទាំងសេវាកម្មពហុវិស័យ ដែលមានស្តង់ដារខ្ពស់ ដើម្បីឆ្លើយតប និងលើសពីការរំពឹងទុករបស់អតិថិជន និងដៃគូអាជីវកម្ម។',
            'mission_item_2'           => 'ជំរុញនវានុវត្តន៍ និងភាពច្នៃប្រឌិត៖ ស្រាវជ្រាវ និងអភិវឌ្ឍដំណោះស្រាយអាជីវកម្មថ្មីៗ ប្រកបដោយភាពច្នៃប្រឌិត ដើម្បីជួយដោះស្រាយបញ្ហា និងបង្កើតឱកាសធុរកិច្ចថ្មីៗក្នុងយុគសម័យឌីជីថល។',
            'mission_item_3'           => 'ពង្រីកវិសាលភាពទីផ្សារ៖ បង្កើតដៃគូយុទ្ធសាស្ត្ររឹងមាំ ដើម្បីពង្រីកវត្តមានអាជីវកម្ម និងវិសាលភាពទីផ្សារពីកម្រិតតំបន់ រហូតដល់កម្រិតសកលលោក។',
            'core_values_heading'      => 'គុណតម្លៃស្នូល',
            'core_values_text'         => 'យើងប្រកាន់ខ្ជាប់នូវតម្លាភាព សីលធម៌អាជីវកម្ម និងភាពស្មោះត្រង់ក្នុងការធ្វើទំនាក់ទំនងជាមួយអតិថិជន ដៃគូពាណិជ្ជកម្ម និងបុគ្គលិកគ្រប់រូប។',
            'licenses_heading'         => 'អាជ្ញាប័ណ្ណ និងលិខិតអនុញ្ញាតផ្លូវការ',
            'licenses_subtitle'        => 'ក្រុមហ៊ុន KV9 GROUP ប្រតិបត្តិការអាជីវកម្មយ៉ាងត្រឹមត្រូវតាមច្បាប់នៃព្រះរាជាណាចក្រកម្ពុជា ប្រកបដោយតម្លាភាព។',
            'click_to_zoom'            => 'ចុចដើម្បីមើលរូបធំ',
            'ministry_commerce'        => 'ក្រសួងពាណិជ្ជកម្ម',
            'tax_department'           => 'អគ្គនាយកដ្ឋានពន្ធដារ',
            'license_1_title'          => 'វិញ្ញាបនបត្រចុះបញ្ជីពាណិជ្ជកម្ម',
            'license_1_desc'           => 'ការចុះបញ្ជីបង្កើតក្រុមហ៊ុនស្របច្បាប់នៅក្រសួងពាណិជ្ជកម្ម។',
            'license_2_title'          => 'ប័ណ្ណសារពើពន្ធ (Tax Patent)',
            'license_2_desc'           => 'ការចុះបញ្ជីពន្ធដារ និងការបង់ពន្ធជូនរដ្ឋយ៉ាងត្រឹមត្រូវ។',
            'license_3_title'          => 'វិញ្ញាបនបត្របង់ពន្ធប៉ាតង់',
            'license_3_desc'           => 'លិខិតបញ្ជាក់ការបង់ពន្ធប៉ាតង់ប្រចាំឆ្នាំស្របតាមច្បាប់ជាធរមាន។',

            // Founder Page
            'founder_page_title'       => 'ស្ថាបនិក និងថ្នាក់ដឹកនាំជាន់ខ្ពស់',
            'founder_page_subtitle'    => 'ស្វែងយល់ពីចក្ខុវិស័យ ស្មារតីដឹកនាំ និងប្រវត្តិនៃការកសាងអាជីវកម្មរបស់ស្ថាបនិក KV9 GROUP។',
            'founder_name'             => 'លោក កុយ វិទូ',
            'founder_title_pos'        => 'Founder & Chairman',
            'founder_badge'            => 'Message from the Founder',
            'founder_quote'            => 'ការកសាងអនាគត និងទំនុកចិត្ត គឺផ្តើមចេញពីការប្តេជ្ញាចិត្តខ្ពស់លើគុណភាព និងសីលធម៌អាជីវកម្ម។',
            'founder_bio_1'            => 'ក្នុងនាមជាស្ថាបនិកនៃ KV9 GROUP ខ្ញុំមានមោទនភាពយ៉ាងខ្លាំងចំពោះដំណើរការវិវត្ត និងការរីកចម្រើនឥតឈប់ឈររបស់គ្រុបយើងខ្ញុំ ឆ្លងកាត់រាល់បញ្ហាប្រឈមរហូតដល់សម្រេចបានជោគជ័យ និងទទួលបានការទុកចិត្តពីសំណាក់អតិថិជន ក៏ដូចជាដៃគូពាណិជ្ជកម្ម។',
            'founder_bio_2'            => 'យើងខ្ញុំបន្តប្តេជ្ញាចិត្តយ៉ាងមុតមាំក្នុងការច្នៃប្រឌិត និងពង្រីកសេវាកម្មក្នុងវិស័យបច្ចេកវិទ្យា ថែទាំសុខភាព និងសិប្បកម្ម ដើម្បីរួមចំណែកយ៉ាងសកម្មក្នុងការអភិវឌ្ឍសេដ្ឋកិច្ចជាតិ។',
            'founder_bio_3'            => 'ខ្ញុំសូមអរគុណយ៉ាងជ្រាលជ្រៅចំពោះក្រុមការងារ អតិថិជន និងដៃគូអាជីវកម្មទាំងអស់ ដែលបានជឿជាក់ និងគាំទ្រយើងខ្ញុំរហូតមកដល់សព្វថ្ងៃនេះ។',
            'founder_sign_title'       => 'អគ្គនាយក និងស្ថាបនិក',
            'founder_sign_word'        => 'ហត្ថលេខា',
            'founder_photo_alt'        => 'រូបថតស្ថាបនិក KV9 GROUP',
            'founder_connect'          => 'ទំនាក់ទំនង',
            'founder_bio_title'        => 'ប្រវត្តិរូបសង្ខេប',
            'founder_milestones_title' => 'ព្រឹត្តិការណ៍សំខាន់ៗ',
            'founder_m1_year'          => '២០១៥',
            'founder_m1_text'          => 'បង្កើត KV9 GROUP ជាមួយក្រុមតូច និងចក្ខុវិស័យធំ។',
            'founder_m2_year'          => '២០១៨',
            'founder_m2_text'          => 'ពង្រីកអាជីវកម្មទៅវិស័យអចលនទ្រព្យ និងសំណង់។',
            'founder_m3_year'          => '២០២១',
            'founder_m3_text'          => 'បើកដំណើរការផ្នែកបច្ចេកវិទ្យា និងសេវាឌីជីថល។',
            'founder_m4_year'          => '២០២៤',
            'founder_m4_text'          => 'បង្កើតក្រុមហ៊ុនបុត្រសម្ព័ន្ធជាច្រើននៅទូទាំងកម្ពុជា។',
            'founder_cta_title'        => 'ចង់សហការជាមួយយើង?',
            'founder_cta_desc'         => 'ទាក់ទងមកយើងខ្ញុំ ដើម្បីស្វែងយល់បន្ថែមអំពីឱកាសសហការ។',

            // Team Page
            'team_page_title'          => 'រចនាសម្ព័ន្ធថ្នាក់ដឹកនាំ និងបុគ្គលិក',
            'team_page_subtitle'       => 'ជួបជាមួយក្រុមការងារ និងថ្នាក់ដឹកនាំដ៏មានបទពិសោធន៍របស់ KV9 GROUP។',
            'exec_mgmt_tag'            => 'Executive Management',
            'exec_mgmt_title'          => 'គណៈគ្រប់គ្រងជាន់ខ្ពស់',
            'ceo_badge'                => 'អគ្គនាយក',
            'ceo_name'                 => 'លោក កុយ វិទូ',
            'ceo_title'                => 'Chief Executive Officer (CEO)',
            'ceo_desc'                 => 'មានបទពិសោធន៍ច្រើនឆ្នាំក្នុងការគ្រប់គ្រង ដឹកនាំយុទ្ធសាស្ត្រអាជីវកម្ម និងសម្រេចទិសដៅធំៗរបស់ក្រុមហ៊ុន។',
            'coo_name'                 => 'លោក ថាច់ ថាន់',
            'coo_title'                => 'CO-FOUNDER & Chief Operating Officer (COO)',
            'coo_desc'                 => 'គ្រប់គ្រងប្រតិបត្តិការទូទៅ និងជំរុញប្រសិទ្ធភាពការងាររបស់ក្រុមហ៊ុនបុត្រសម្ព័ន្ធ។',
            'ratha_name'               => 'លោក យ៉ែន រដ្ឋា',
            'ratha_title'              => 'Co-Founder',
            'ratha_desc'               => 'Project manager of CHOMNENH TECHNOLOGY',
            'member4_name'             => 'លោក ទូច វិត',
            'member4_title'            => 'គ្រប់គ្រងទូទៅ',
            'member4_company'          => 'KV9 CAMBODIA CO.,LTD',
            'member5_name'             => 'លោក សន ផន',
            'member5_title'            => 'ប្រធានផ្នែកគ្រប់គ្រងទូទៅ',
            'member5_company'          => 'KV9 CAMBODIA CO.,LTD',
            'member6_name'             => 'លោក  អុីវ អមតៈ',
            'member6_title'            => 'អគ្គនាយករង',
            'member6_company'          => 'STAR CARE COMPANY',
            'member7_name'             => 'លោក  ពុធ ភារម្យ',
            'member7_title'            => 'គ្រប់គ្រងទូទៅ',
            'member7_company'          => 'សិប្បកម្ម ធ្យូងអនាម័យ',
            'dept_heads_tag'           => 'Department Heads',
            'dept_heads_title'         => 'ប្រធានផ្នែកជំនាញ',
            'staff1_name'              => 'អ្នកស្រី បិន',
            'staff1_title'             => 'ប្រធានផ្នែកហិរញ្ញវត្ថុ (CFO)',
            'staff2_name'              => 'កញ្ញា ខុន ស្រីម៉ី',
            'staff2_title'             => 'ជំនួយការ គណនេយ្យ',
            'staff3_name'              => 'កញ្ញា កិន ម៉ូនីកា',
            'staff3_title'             => 'គ្រប់គ្រងផ្នែកលក់ (online)',
            'staff4_name'              => 'កញ្ញា ឃឿ ម៉ាឡា',
            'staff4_title'             => 'គ្រប់គ្រងផ្នែកលក់ (online)',
            'staff5_name'              => 'លោក យុន វ៉ាន់ឆៃ',
            'staff5_title'             => 'គ្រប់គ្រងផ្នែកប្រម៉ូត (online)',

            // Portfolio Page
            'port_page_title'          => 'អាជីវកម្ម និងសេវាកម្ម',
            'port_page_subtitle'       => 'ស្វែងយល់ពីវិស័យអាជីវកម្ម និងសេវាកម្មចម្រុះរបស់ KV9 GROUP ដែលកំពុងជំរុញកំណើនសេដ្ឋកិច្ច និងផ្តល់តម្លៃបន្ថែមដល់អតិថិជន។',
            'port_card1_title'         => 'គ្រឿងសំអាង និងថែរក្សាសម្រស់',
            'port_card2_title'         => 'សិប្បកម្ម',
            'port_card3_title'         => 'បច្ចេកវិទ្យា ឌីជីថល',
            'port_card4_title'         => 'នាំចូល និងផ្គត់ផ្គង់',
            'port_card5_title'         => 'វិស័យប្រឹក្សា និងផ្គត់ផ្គង់បុគ្គលិក',
            'port_card6_title'         => 'គ្រឿងទេស និងម្ហូបអាហារ',
            'btn_details'              => 'ព័ត៌មានលម្អិត',
            'port_modal_product_title' => 'ផលិតផល និងសេវាកម្មចម្បង (1:1 Aspect Ratio)៖',
            'port_modal_starcare_desc' => 'នាំចូល និងចែកចាយផលិតផលថែរក្សាសម្រស់ សុខភាព និងអនាម័យផ្ទាល់ខ្លួនគុណភាពខ្ពស់។',
            'port_modal_tech_desc'     => 'ផ្តល់នូវដំណោះស្រាយបច្ចេកវិទ្យាឌីជីថល និងប្រព័ន្ធគ្រប់គ្រងអាជីវកម្មទំនើប។',
            'port_tech_item1_title'    => 'Digital Menu',
            'port_tech_item1_desc'     => 'អភិវឌ្ឍកម្មវិធីទូរស័ព្ទ និងគេហទំព័រអាជីវកម្មតាមតម្រូវការ។',
            'port_tech_item2_title'    => 'ប្រព័ន្ធ ERP',
            'port_tech_item2_desc'     => 'ប្រព័ន្ធគ្រប់គ្រងប្រតិបត្តិការសហគ្រាស (Enterprise Resource Planning)។',
            'port_tech_item3_title'    => 'ប្រព័ន្ធ HR Attendance',
            'port_tech_item3_desc'     => 'ប្រព័ន្ធគ្រប់គ្រងវត្តមាន បុគ្គលិក និងប្រាក់បៀវត្សរ៍ទំនើប។',
        ],

        // =====================================================
        // ENGLISH
        // =====================================================
        'en' => [
            // Navbar & Menu
            'home'                     => 'Home',
            'about_us'                 => 'About Us',
            'vision_mission'           => 'Vision, Mission & Values',
            'founder'                  => 'Founder',
            'team'                     => 'Our Team',
            'subsidiaries'             => 'Subsidiaries',
            'portfolio'                => 'Business',
            'contact'                  => 'Contact',
            'quick_links'              => 'Quick Links',
            'career_opp'               => 'Career Opportunities',
            'news_updates'             => 'News & Updates',
            'privacy_policy'           => 'Privacy Policy',
            'follow_us'                => 'Follow our latest activities and updates on social media:',
            'rights'                   => 'All rights reserved.',
            'address'                  => '#49B, Preah Ponlea Village, Sangkat Prek Pra, Khan Chbar Ampov, Phnom Penh',
            'phone'                    => 'Phone',
            'email'                    => 'Email',
            'page_not_found'           => 'Page Not Found',
            'try_again'                => 'Please try again.',
            'language_label'           => 'Language:',

            // Home Hero
            'welcome_badge'            => 'WELCOME TO KV9 GROUP',
            'hero_title'               => 'A leading enterprise in manufacturing, product supply, and services',
            'hero_desc'                => 'And multi-sector solutions with inclusivity and innovation to meet regional and global market demands sustainably.',
            'explore_biz'              => 'Explore Businesses',
            'learn_more'               => 'Read More',
            'read_more'                => 'Learn More',
            'close'                    => 'Close',

            // Home Cards
            'vision_title'             => 'Vision',
            'vision_desc'              => 'KV9 Group is committed to becoming a leading enterprise in manufacturing, product supply, services, and sustainable solutions...',
            'mission_title'            => 'Mission',
            'mission_desc'             => 'Providing high quality products and services: Creating and supplying high standard multi-sector products and services...',
            'values_title'             => 'Core Values',
            'values_desc'              => 'We adhere to transparency, business ethics, and integrity in our communications with all clients...',

            // Subsidiaries (Home)
            'ecosystem_tag'            => 'Our Ecosystem',
            'subs_section_title'       => 'Subsidiaries & Businesses',
            'subs_section_desc'        => 'A collection of subsidiaries providing services and products tailored to modern market needs.',
            'sub1_cat'                 => 'Beauty & Cosmetics',
            'sub1_name'                => 'KV9 CAMBODIA CO.,LTD',
            'sub1_desc'                => 'Supplying and distributing safe cosmetics, facial and body care products...',
            'sub1_modal_text'          => 'KV9 CAMBODIA CO.,LTD focuses on supplying, importing, and distributing quality-verified cosmetics, facial, body care, and beauty products.',
            'sub2_cat'                 => 'Craft & Manufacturing',
            'sub2_name'                => 'Hygiene Charcoal Craft',
            'sub2_desc'                => 'Focusing on the production and development of quality local products and crafts...',
            'sub2_modal_text'          => 'Hygiene Charcoal Craft focuses on producing and developing high-quality local craft products that are easy to use and meet standard hygiene criteria.',
            'sub3_cat'                 => 'Digital Technology',
            'sub3_name'                => 'CHOMNENH TECHNOLOGY',
            'sub3_desc'                => 'Providing modern technology services and digital solutions for businesses and organizations...',
            'sub3_modal_text'          => 'Providing modern technology services and digital solutions for businesses and organizations, focusing on developing new tech systems to drive business growth.',
            'sub4_cat'                 => 'Healthcare Services',
            'sub4_name'                => 'STAR CARE COMPANY',
            'sub4_desc'                => 'An importer and distributor of high-quality beauty and personal care products...',
            'sub4_modal_text'          => 'An international importer and distributor of high-quality personal care and beauty products in Cambodia. We offer shampoos, body washes, hair, skin, and beauty care items.',
            'sub5_cat'                 => 'HR & Recruitment',
            'sub5_name'                => 'CHOMNENH RECRUITMENT',
            'sub5_desc'                => 'Providing professional consulting, selection, and human resource supply...',
            'sub5_modal_text'          => 'Providing professional, high-quality human resource consulting, recruitment, and supply matching the practical needs of business partners.',
            'sub6_cat'                 => 'Food & Seasoning',
            'sub6_name'                => 'Vijing Soup Powder',
            'sub6_desc'                => 'Producing and distributing standard soup powder providing delicious taste and safety...',
            'sub6_modal_text'          => 'Vijing Soup Powder focuses on manufacturing and distributing savory soup seasonings produced under high hygiene and food safety standards to enhance flavor.',

            // Subs Timeline Page
            'subs_page_title'          => 'Subsidiaries',
            'subs_page_subtitle'       => 'The history and continuous growth of KV9 GROUP subsidiaries',
            'subs_t1_note'             => 'Entered the food seasoning production and distribution sector.',
            'subs_t2_cat'              => 'CHOMNENH RECRUITMENT',
            'subs_t2_name'             => 'Consulting & HR Supply Services',
            'subs_t2_note'             => 'Expanded business scope toward consulting and supplying skilled personnel.',
            'subs_t3_note'             => 'Established a new branch to expand healthcare and beauty services.',
            'subs_t4_name'             => 'Digital Technology Sector',
            'subs_t4_note'             => 'Officially launched modern technology services.',
            'subs_t5_name'             => 'Hygiene Charcoal Craft & Local Products',
            'subs_t5_note'             => 'Took the first step in creating our own craft business.',
            'subs_t6_note'             => 'The very beginning of building KV9 CAMBODIA CO.,LTD cosmetics business.',

            // Contact Page
            'contact_page_title'       => 'Contact Us',
            'contact_page_subtitle'    => 'Welcome! We are happy to connect with you.',
            'contact_badge'            => 'Get In Touch',
            'contact_heading'          => 'Contact Information',
            'contact_desc'             => 'Our team is happy to answer any of your questions or requests. Please reach out to us using the information below:',
            'contact_label_address'    => 'Address',
            'contact_label_phone'      => 'Phone',
            'contact_label_email'      => 'Email',
            'contact_follow_us'        => 'Follow Us',

            // Vision & Mission Page
            'vision_mission_title'     => 'Vision & Mission',
            'vision_mission_subtitle'  => 'Discover the strategic direction and core objectives of KV9 GROUP in developing sustainable and responsible business operations.',
            'vision_heading'           => 'Corporate Vision',
            'vision_text'              => 'KV9 Group is committed to becoming a leading enterprise in manufacturing, product supply, services, and multi-sector solutions with inclusivity and innovation to meet regional and global market demands sustainably.',
            'mission_heading'          => 'Corporate Mission',
            'mission_item_1'           => 'Provide High Quality Products & Services: Create and supply high-standard multi-sector products and services to meet and exceed customer and business partner expectations.',
            'mission_item_2'           => 'Drive Innovation & Creativity: Research and develop innovative business solutions to solve problems and create new business opportunities in the digital era.',
            'mission_item_3'           => 'Expand Market Scope: Build strong strategic partnerships to expand business presence and market scope from regional to global levels.',
            'core_values_heading'      => 'Core Values',
            'core_values_text'         => 'We adhere to transparency, business ethics, and integrity in our communications with all clients, business partners, and employees.',
            'licenses_heading'         => 'Official Licenses & Accreditations',
            'licenses_subtitle'        => 'KV9 GROUP operates its business strictly and transparently in accordance with the laws of the Kingdom of Cambodia.',
            'click_to_zoom'            => 'Click to zoom in',
            'ministry_commerce'        => 'Ministry of Commerce',
            'tax_department'           => 'General Department of Taxation',
            'license_1_title'          => 'Commercial Registration Certificate',
            'license_1_desc'           => 'Legal company registration at the Ministry of Commerce.',
            'license_2_title'          => 'Tax Patent',
            'license_2_desc'           => 'Proper tax registration and tax payments to the state.',
            'license_3_title'          => 'Patent Tax Payment Certificate',
            'license_3_desc'           => 'Annual patent tax payment certification in compliance with applicable laws.',

            // Founder Page
            'founder_page_title'       => 'Founder & Senior Leadership',
            'founder_page_subtitle'    => 'Explore the vision, leadership spirit, and business-building history of the founder of KV9 GROUP.',
            'founder_name'             => 'Mr. Koy Vitou',
            'founder_title_pos'        => 'Founder & Chairman',
            'founder_badge'            => 'Message from the Founder',
            'founder_quote'            => 'Building the future and trust starts with a high commitment to quality and business ethics.',
            'founder_bio_1'            => 'As the founder of KV9 GROUP, I am immensely proud of our group\'s continuous evolution and growth, overcoming challenges to achieve success and earn the trust of our clients and business partners.',
            'founder_bio_2'            => 'We remain firmly committed to innovating and expanding our services in technology, healthcare, and manufacturing to actively contribute to national economic development.',
            'founder_bio_3'            => 'I sincerely thank our team, customers, and business partners who have trusted and supported us throughout this journey.',
            'founder_sign_title'       => 'CEO & Founder',
            'founder_sign_word'        => 'Signature',
            'founder_photo_alt'        => 'Founder of KV9 GROUP',
            'founder_connect'          => 'Connect',
            'founder_bio_title'        => 'Biography',
            'founder_milestones_title' => 'Key Milestones',
            'founder_m1_year'          => '2015',
            'founder_m1_text'          => 'Founded KV9 GROUP with a small team and a big vision.',
            'founder_m2_year'          => '2018',
            'founder_m2_text'          => 'Expanded into real estate and construction.',
            'founder_m3_year'          => '2021',
            'founder_m3_text'          => 'Launched technology and digital services division.',
            'founder_m4_year'          => '2024',
            'founder_m4_text'          => 'Established multiple subsidiaries across Cambodia.',
            'founder_cta_title'        => 'Want to work with us?',
            'founder_cta_desc'         => 'Get in touch to learn more about partnership opportunities.',

            // Team Page
            'team_page_title'          => 'Leadership & Staff Structure',
            'team_page_subtitle'       => 'Meet the experienced team and leadership of KV9 GROUP.',
            'exec_mgmt_tag'            => 'Executive Management',
            'exec_mgmt_title'          => 'Executive Management',
            'ceo_badge'                => 'CEO',
            'ceo_name'                 => 'Mr. Koy Vitou',
            'ceo_title'                => 'Chief Executive Officer (CEO)',
            'ceo_desc'                 => 'Has many years of experience in management, business strategy leadership, and major company milestone execution.',
            'coo_name'                 => 'Mr. Thach Than',
            'coo_title'                => 'CO-FOUNDER & Chief Operating Officer (COO)',
            'coo_desc'                 => 'Manages general operations and drives working efficiency across subsidiaries.',
            'ratha_name'               => 'Mr. Yen Ratha',
            'ratha_title'              => 'Co-Founder',
            'ratha_desc'               => 'Project manager of CHOMNENH TECHNOLOGY',
            'member4_name'             => 'Mr. Touch Vit',
            'member4_title'            => 'General Manager',
            'member4_company'          => 'KV9 CAMBODIA CO.,LTD',
            'member5_name'             => 'Mr. Son Phon',
            'member5_title'            => 'Head of General Management',
            'member5_company'          => 'KV9 CAMBODIA CO.,LTD',
            'member6_name'             => 'Mr. Eiv Amatak',
            'member6_title'            => 'Deputy Director',
            'member6_company'          => 'STAR CARE COMPANY',
            'member7_name'             => 'Mr. Puth Phirom',
            'member7_title'            => 'General Manager',
            'member7_company'          => 'Hygiene Charcoal Craft',
            'dept_heads_tag'           => 'Department Heads',
            'dept_heads_title'         => 'Department Heads',
            'staff1_name'              => 'Mrs. Ben',
            'staff1_title'             => 'Chief Financial Officer (CFO)',
            'staff2_name'              => 'Ms. Khon Sreymich',
            'staff2_title'             => 'Accounting Assistant',
            'staff3_name'              => 'Ms. Kin Monika',
            'staff3_title'             => 'Online Sales Manager',
            'staff4_name'              => 'Ms. Khhoe Mala',
            'staff4_title'             => 'Online Sales Manager',
            'staff5_name'              => 'Mr. Yun Vanchai',
            'staff5_title'             => 'Online Promotion Manager',

            // Portfolio Page
            'port_page_title'          => 'Business & Services',
            'port_page_subtitle'       => 'Explore the diverse business sectors and services of KV9 GROUP that are driving economic growth and providing added value to customers.',
            'port_card1_title'         => 'Beauty & Cosmetics',
            'port_card2_title'         => 'Craft',
            'port_card3_title'         => 'Digital Technology',
            'port_card4_title'         => 'Import & Supply',
            'port_card5_title'         => 'Consulting & HR Supply',
            'port_card6_title'         => 'Food & Seasoning',
            'btn_details'              => 'Details',
            'port_modal_product_title' => 'Main Products & Services (1:1 Aspect Ratio):',
            'port_modal_starcare_desc' => 'Importer and distributor of high-quality beauty, health, and personal care products.',
            'port_modal_tech_desc'     => 'Providing digital technology solutions and modern business management systems.',
            'port_tech_item1_title'    => 'Digital Menu',
            'port_tech_item1_desc'     => 'Developing custom mobile apps and business websites.',
            'port_tech_item2_title'    => 'ERP System',
            'port_tech_item2_desc'     => 'Enterprise Resource Planning system for managing business operations.',
            'port_tech_item3_title'    => 'HR Attendance System',
            'port_tech_item3_desc'     => 'Modern system for managing employee attendance and payroll.',
        ]
    ];
}