<div class="wrap">
    <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
    <form actions="options.php" method="post">
    <?php
        settings_fields('mscbios_group');
        do_settings_sections( 'mscbios_page1' );
        settings_fields('mscbios_group');
        do_settings_sections( 'mscbios_page2' );
        submit_button( 'Salvar Configurações' );
    ?>
    </form>
</div>
