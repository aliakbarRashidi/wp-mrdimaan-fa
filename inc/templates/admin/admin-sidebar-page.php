<h1> تنظیمات ستون کناری </h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
<?php settings_fields( 'dimaan-sidebar-settings-group' ) ?>
<?php do_settings_sections( 'dimaan_sidebar_options' ) ?>
<?php submit_button( 'ذخیره تغییرات' ); ?>
</form>