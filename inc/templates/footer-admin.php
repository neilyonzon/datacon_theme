<h1>Footer Configuration</h1>
<?php settings_errors();?>
<form method="post" action="options.php">
    <?php settings_fields( 'datacon-footer-settings-group' )?>
    <?php do_settings_sections('datacon_refresh'); ?>
    <?php submit_button();?>
</form>