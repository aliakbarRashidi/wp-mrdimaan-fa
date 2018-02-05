<form method="post" action="options.php">
<?php settings_errors(); ?>
<?php settings_fields( 'dimaan-footer-settings-group' ); ?>
<?php do_settings_sections( 'dimaan_footer_options' ); ?>
<?php submit_button( 'ذخیره تغییرات' ); ?>
</form>