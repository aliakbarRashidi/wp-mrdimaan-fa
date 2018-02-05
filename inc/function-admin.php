<?php
/*
@package mrdimaan

        Admin Panel Functions
    ======================================
*/

function dimaan_add_admin_page() {

    add_menu_page( 'تنظیمات هدر دیمان' , 'دیمان', 'manage_options', 'dimaan_options', 'dimaan_header_page', 'dashicons-admin-generic', 74 );
    add_submenu_page( 'dimaan_options', 'تنظیمات هدر', 'هدر', 'manage_options', 'dimaan_options', 'dimaan_header_page' );
    add_submenu_page( 'dimaan_options', 'تنظیمات سایدبار', 'ستون کناری', 'manage_options', 'dimaan_sidebar_options', 'dimaan_sidebar_page' );
    add_submenu_page( 'dimaan_options', 'تنظیمات فوتر', 'فوتر', 'manage_options', 'dimaan_footer_options', 'dimaan_footer_page' );
    add_submenu_page( 'dimaan_options', 'تنظیمات امکانات قالب', 'امکانات', 'manage_options', 'dimaan_theme_support_options', 'dimaan_theme_support_page' );

    // Activate custo setings
    add_action( 'admin_init', 'dimaan_custom_settings' );
}
add_action( 'admin_menu', 'dimaan_add_admin_page' );

// Generate Pages ========================
function dimaan_header_page() {
    require_once get_template_directory() . '/inc/templates/admin/admin-header-page.php';
}
function dimaan_sidebar_page() {
    require_once get_template_directory() . '/inc/templates/admin/admin-sidebar-page.php';
}
function dimaan_footer_page() {
    require_once get_template_directory() . '/inc/templates/admin/admin-footer-page.php';
}
function dimaan_theme_support_page() {
    require_once get_template_directory() . '/inc/templates/admin/admin-theme-support-page.php';
}

// Settings API
function dimaan_custom_settings() {
    
    // Create sections
    add_settings_section( 'dimaan-header-options-section', 'تنظیمات هدر سایت', 'dimaan_header_options_section', 'dimaan_options' );
    add_settings_section( 'dimaan-sidebar-options-section', 'توضیحاتی در مورد سایت', 'dimaan_sidebar_options_section', 'dimaan_sidebar_options' );
    add_settings_section( 'dimaan-sidebar-handler-options-section', 'شبکه های اجتماعی', 'dimaan_sidebar_handler_options_section', 'dimaan_sidebar_options' );
    add_settings_section( 'dimaan-footer-options-section', 'تنظیمات فوتر', 'dimaan_footer_options_section', 'dimaan_footer_options' );
    add_settings_section( 'dimaan-support-options-section', 'تنظیمات امکانات', 'dimaan_support_options_section', 'dimaan_theme_support_options' );

    // Register settings
    register_setting( 'dimaan-header-settings-group', 'full_name' );
    register_setting( 'dimaan-header-settings-group', 'profile_picture' );
    register_setting( 'dimaan-header-settings-group', 'backpro_picture' );
    register_setting( 'dimaan-header-settings-group', 'logo_picture' );

    register_setting( 'dimaan-sidebar-settings-group', 'about_site' );
    register_setting( 'dimaan-sidebar-settings-group', 'email_handler' );
    register_setting( 'dimaan-sidebar-settings-group', 'github_handler', 'dimaan_sunitize_at_handlers' );
    register_setting( 'dimaan-sidebar-settings-group', 'twitter_handler', 'dimaan_sunitize_at_handlers' );
    register_setting( 'dimaan-sidebar-settings-group', 'facebook_handler', 'dimaan_sunitize_at_handlers' );
    register_setting( 'dimaan-sidebar-settings-group', 'gplus_handler', 'dimaan_sunitize_at_handlers' );
    register_setting( 'dimaan-sidebar-settings-group', 'insta_handler', 'dimaan_sunitize_at_handlers' );
    register_setting( 'dimaan-sidebar-settings-group', 'pintrest_handler', 'dimaan_sunitize_at_handlers' );
    register_setting( 'dimaan-sidebar-settings-group', 'sc_handler', 'dimaan_sunitize_at_handlers' );
    register_setting( 'dimaan-sidebar-settings-group', 'telegram_handler', 'dimaan_sunitize_at_handlers' );
    register_setting( 'dimaan-sidebar-settings-group', 'youtube_handler', 'dimaan_sunitize_at_handlers' );

    register_setting( 'dimaan-footer-settings-group', 'footer_content' );

    register_setting( 'dimaan-support-settings-group', 'post_thumbnail' );
    register_setting( 'dimaan-support-settings-group', 'aside_format' );
    register_setting( 'dimaan-support-settings-group', 'gallery_format' );
    register_setting( 'dimaan-support-settings-group', 'image_format' );    
    register_setting( 'dimaan-support-settings-group', 'video_format' );
    register_setting( 'dimaan-support-settings-group', 'audio_format' );
    

    // Create input filelds
    add_settings_field( 'full-name', 'نام و نام خانوادگی', 'dimaan_full_name_field', 'dimaan_options', 'dimaan-header-options-section');   
    add_settings_field( 'profile-picture', 'تصویر پروفایل', 'dimaan_profile_picture_field', 'dimaan_options', 'dimaan-header-options-section');
    add_settings_field( 'backpro-picture', 'تصویر پس زمینه پروفایل', 'dimaan_backpro_picture_field', 'dimaan_options', 'dimaan-header-options-section');
    add_settings_field( 'logo-picture', 'تصویر لوگو', 'dimaan_logo_picture_field', 'dimaan_options', 'dimaan-header-options-section');

    add_settings_field( 'about-site', 'درباره ی سایت', 'dimaan_about_site_field', 'dimaan_sidebar_options', 'dimaan-sidebar-options-section' );
    add_settings_field( 'sidebar-email', 'ایمیل شما', 'dimaan_email_handler_field', 'dimaan_sidebar_options', 'dimaan-sidebar-handler-options-section' );
    add_settings_field( 'sidebar-github', 'آیدی گیت هاب', 'dimaan_github_handler_field', 'dimaan_sidebar_options', 'dimaan-sidebar-handler-options-section' );
    add_settings_field( 'sidebar-twitter', 'آیدی توییتر', 'dimaan_twitter_handler_field', 'dimaan_sidebar_options', 'dimaan-sidebar-handler-options-section' );
    add_settings_field( 'sidebar-facebook', 'آیدی فیس بوک', 'dimaan_facebook_handler_field', 'dimaan_sidebar_options', 'dimaan-sidebar-handler-options-section' );
    add_settings_field( 'sidebar-gplus', 'آیدی گوگل پلاس', 'dimaan_gplus_handler_field', 'dimaan_sidebar_options', 'dimaan-sidebar-handler-options-section' );
    add_settings_field( 'sidebar-insta', 'آیدی اینستاگرام', 'dimaan_insta_handler_field', 'dimaan_sidebar_options', 'dimaan-sidebar-handler-options-section' );
    add_settings_field( 'sidebar-pintrest', 'آیدی پینترست', 'dimaan_pintrest_handler_field', 'dimaan_sidebar_options', 'dimaan-sidebar-handler-options-section' );
    add_settings_field( 'sidebar-sc', 'آیدی سوند کلود', 'dimaan_sc_handler_field', 'dimaan_sidebar_options', 'dimaan-sidebar-handler-options-section' );
    add_settings_field( 'sidebar-telegram', 'آیدی تلگرام', 'dimaan_telegram_handler_field', 'dimaan_sidebar_options', 'dimaan-sidebar-handler-options-section' );
    add_settings_field( 'sidebar-youtube', 'کانال یوتیوب', 'dimaan_youtube_handler_field', 'dimaan_sidebar_options', 'dimaan-sidebar-handler-options-section' );

    add_settings_field( 'footer-content', 'متن داخل فوتر', 'dimaan_footer_content_field', 'dimaan_footer_options', 'dimaan-footer-options-section' );
    
    add_settings_field( 'post-thumbnail', 'تصویر شاخص پست', 'dimaan_post_thumbnail_field', 'dimaan_theme_support_options', 'dimaan-support-options-section' );
    add_settings_field( 'post-formats', 'انواع پست', 'dimaan_post_formats_field', 'dimaan_theme_support_options', 'dimaan-support-options-section' );
    
}

// Section callback options
function dimaan_header_options_section() { echo 'هدر سایت خود را شخصی سازی کنید.'; }
function dimaan_sidebar_options_section() {}
function dimaan_sidebar_handler_options_section() { echo 'راه های ارتباطی با خود را تنظیم کنید.'; }
function dimaan_footer_options_section() { echo 'متن فوتر را شخصی سازی کنید.'; }
function dimaan_support_options_section() {};

// Fields callback
function dimaan_full_name_field() {
    $full_name = esc_attr( get_option( 'full_name' ) );
    echo '<input type="text" name="full_name" value="' . $full_name . '" placeholder="نام و نام خانوادگی" />
    <p class="description">این نام در منوی کشویی موبایل قابل مشاهده است.</p>';
}
function dimaan_about_site_field() {
    $about_site = esc_attr( get_option( 'about_site' ) );
    echo '<textarea rows="4" cols="30" name="about_site" placeholder="توضیحاتی درباره ی وبسایت">' . $about_site . '</textarea>
    <p class="description">با یک متن جالب وبسایت خود را توصیف کنید.</p>';
}
function dimaan_email_handler_field() {
    $email = esc_attr( get_option( 'email_handler' ) );
    echo '<input type="text" name="email_handler" value="' . $email . '" placeholder="ایمیل شما" />';
}
function dimaan_github_handler_field() {
    $github_handler = esc_attr( get_option( 'github_handler' ) );
    echo '<input type="text" name="github_handler" value="' . $github_handler . '" placeholder="آیدی گیت هاب" />
    <p class="description">آیدی گیت هاب خود را بدون کاراکتر @ وارد کنید.</p>';
}
function dimaan_twitter_handler_field() {
    $twitter_handler = esc_attr( get_option( 'twitter_handler' ) );
    echo '<input type="text" name="twitter_handler" value="' . $twitter_handler . '" placeholder="آیدی توییتر" />
    <p class="description">آیدی توییتر خود را بدون کاراکتر @ وارد کنید.</p>';
}
function dimaan_facebook_handler_field() {
    $facebook_handler = esc_attr( get_option( 'facebook_handler' ) );
    echo '<input type="text" name="facebook_handler" value="' . $facebook_handler . '" placeholder="آیدی فیس بوک" />';
}
function dimaan_gplus_handler_field() {
    $gplus_handler = esc_attr( get_option( 'gplus_handler' ) );
    echo '<input type="text" name="gplus_handler" value="' . $gplus_handler . '" placeholder="آیدی گوگل پلاس" />';
}
function dimaan_insta_handler_field() {
    $insta_handler = esc_attr( get_option( 'insta_handler' ) );
    echo '<input type="text" name="insta_handler" value="' . $insta_handler . '" placeholder="آیدی اینستاگرام" />
    <p class="description">آیدی اینستاگرام خود را بدون کاراکتر @ وارد کنید.</p>';
}
function dimaan_pintrest_handler_field() {
    $pintrest_handler = esc_attr( get_option( 'pintrest_handler' ) );
    echo '<input type="text" name="pintrest_handler" value="' . $pintrest_handler . '" placeholder="آیدی پینترست" />';
}
function dimaan_sc_handler_field() {
    $sc_handler = esc_attr( get_option( 'sc_handler' ) );
    echo '<input type="text" name="sc_handler" value="' . $sc_handler . '" placeholder="آیدی سوند کلود" />';
}
function dimaan_telegram_handler_field() {
    $telegram_handler = esc_attr( get_option( 'telegram_handler' ) );
    echo '<input type="text" name="telegram_handler" value="' . $telegram_handler . '" placeholder="آیدی تلگرام" />
    <p class="description">آیدی تلگرام خود را بدون کاراکتر @ وارد کنید.</p>';
}
function dimaan_youtube_handler_field() {
    $youtube_handler = esc_attr( get_option( 'youtube_handler' ) );
    echo '<input type="text" name="youtube_handler" value="' . $youtube_handler . '" placeholder="کانال یوتیوب" />
    <p class="description">آدرس کانال یوتیوب خود را بدون https://www.youtube.com/channel وارد کنید.</p>';
}
function dimaan_footer_content_field() {
    $footer_content = esc_attr( get_option( 'footer_content' ) );
    echo '<textarea rows="4" cols="30" name="footer_content" placeholder="متن داخل فوتر">' . $footer_content . '</textarea>
    <p class="description">برای فوتر خود متنی بنویسید.</p>';
}
function dimaan_profile_picture_field() {
    $profile_pic = esc_attr( get_option( 'profile_picture' ) );
    if ( $profile_pic == "" ) {
        echo '<input type="button" value="آپلود پروفایل" id="upload_profile_pic" class="button button-secondary"/>
        <input id="profile_pic_input" type="hidden" name="profile_picture" value="' . $profile_pic . '" />';
    } else {
        echo '<input type="button" value="تغییر پروفایل" id="upload_profile_pic" class="button button-secondary"/>
        <input type="button" value="حذف" id="remove_profile_pic" class="button button-secondary"/>
        <input id="profile_pic_input" type="hidden" name="profile_picture" value="' . $profile_pic . '" />';
    }
}
function dimaan_backpro_picture_field() {
    $backpro_pic = esc_attr( get_option( 'backpro_picture' ) );
    if ( $backpro_pic == "" ) {
        echo '<input type="button" value="آپلود پس زمینه" id="upload_backpro_pic" class="button button-secondary"/>
        <p class="description">این پس زمینه در منوی موبایل قابل مشاهده است.</p>
        <input id="backpro_pic_input" type="hidden" name="backpro_picture" value="' . $backpro_pic . '" />';
    } else {
        echo '<input type="button" value="تغییر پس زمینه" id="upload_backpro_pic" class="button button-secondary"/>
        <input type="button" value="حذف" id="remove_backpro_pic" class="button button-secondary"/>
        <p class="description">این پس زمینه در منوی موبایل قابل مشاهده است.</p>
        <input id="backpro_pic_input" type="hidden" name="backpro_picture" value="' . $backpro_pic . '" />';
    }
}
function dimaan_logo_picture_field() {
    $logo_pic = esc_attr( get_option( 'logo_picture' ) );
    if ( $logo_pic == "" ) {
        echo '<input type="button" value="آپلود لوگو" id="upload_logo_pic" class="button button-secondary"/>
        <input id="logo_pic_input" type="hidden" name="logo_picture" value="' . $logo_pic . '" />';
    } else {
        echo '<input type="button" value="تغییر لوگو" id="upload_logo_pic" class="button button-secondary"/>
        <input type="button" value="حذف" id="remove_logo_pic" class="button button-secondary"/>
        <input id="logo_pic_input" type="hidden" name="logo_picture" value="' . $logo_pic . '" />';
    }
}
function dimaan_post_thumbnail_field() {
    $tumpnail = esc_attr( get_option( 'post_thumbnail' ) );
    $check = '';
    if ( $tumpnail == '1' )
        $check = 'checked';
    echo '<input type="checkbox" value="1" name="post_thumbnail" '. $check .'/> تصویر شاخص';
}
function dimaan_post_formats_field() {
    $check = '';
    //aside
    $format_value = esc_attr( get_option( 'aside_format' ) );
    if ( $format_value == '1' )
        $check = 'checked';
        else
        $check = '';
    echo '<input type="checkbox" value="1" name="aside_format" '. $check .'/> نوع حاشیه <br/>';
    //gallery
    $format_value = esc_attr( get_option( 'gallery_format' ) );
    if ( $format_value == '1' )
        $check = 'checked';
        else
        $check = '';
    echo '<input type="checkbox" value="1" name="gallery_format" '. $check .'/> نوع گالری <br/>';
    // Image
    $format_value = esc_attr( get_option( 'image_format' ) );
    if ( $format_value == '1' )
        $check = 'checked';
        else
        $check = '';
    echo '<input type="checkbox" value="1" name="image_format" '. $check .'/> نوع تصویر <br/>';
    // Video
    $format_value = esc_attr( get_option( 'video_format' ) );
    if ( $format_value == '1' )
        $check = 'checked';
        else
        $check = '';
    echo '<input type="checkbox" value="1" name="video_format" '. $check .'/> نوع ویدیو <br/>';
    // Audio
    $format_value = esc_attr( get_option( 'audio_format' ) );
    if ( $format_value == '1' )
        $check = 'checked';
        else
        $check = '';
    echo '<input type="checkbox" value="1" name="audio_format" '. $check .'/> نوع صدا <br/>';
}
// Sanitize
function dimaan_sunitize_at_handlers( $input ) {
 $output = sanitize_text_field( $input );
 $output = str_replace('@', '', $output );
 return $output;
}