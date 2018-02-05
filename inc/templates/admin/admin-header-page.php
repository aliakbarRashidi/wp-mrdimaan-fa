<form method="post" action="options.php" class="dimaan-header-form">
<?php settings_errors(); ?>
<?php settings_fields( 'dimaan-header-settings-group' ); ?>
<?php do_settings_sections( 'dimaan_options' ); ?>
<?php submit_button( 'ذخیره تغییرات', 'primary', 'btnSubmit' ); ?>
</form>