<h1> تنظیم امکانات قالب </h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
<?php settings_fields( 'dimaan-support-settings-group' ) ?>
<?php do_settings_sections( 'dimaan_theme_support_options' ) ?>
<?php submit_button( 'ذخیره تغییرات' ); ?>
</form>