<?php 

class Mosaic_cbios_calculator_settings
{
    public static $options;

    public function __construct(){
        self::$options = get_option( 'mscbios_options' );
        add_action( 'admin_init', array( $this, 'admin_init') );
    }

    public function admin_init(){
            
        register_setting( 'mscbios_group', 'mscbios_options' );

        add_settings_section(
            'mscbios_main_section',
            'Configurações de shortcode',
            null,
            'mscbios_page1'
        );

        add_settings_section(
            'mscbios_second_section',
            'Configurações de Cálculo',
            null,
            'mscbios_page2'
        );

        add_settings_field(
            'intensidade_emissao',
            'Emissão padrão Usina',
            array( $this, 'mscbios_intensidade_emissao_usina_callback' ),
            'mscbios_page2',
            'mscbios_second_section'
        );

        add_settings_field(
            'preco_cbio',
            'Preço de cálculo CBios (R$)',
            array( $this, 'mscbios_preco_cbio_callback' ),
            'mscbios_page2',
            'mscbios_second_section'
        );        
    }

    public function mscbios_shortcode_callback(){
        echo '<span>Use o shortcode <b>[mscbios_calculadora]</b> para exibir a Calculadora Cbios</span>';
    }


    public function  mscbios_intensidade_emissao_usina_callback(){
        ?>
            <input
            type="text"
            name="mscbios_options[intensidade_emissao_usina]"
            id="intensidade_emissao_usina"
            value="<?php echo isset( self::$options['intensidade_emissao_usina'] ) ? esc_attr( self::$options['intensidade_emissao_usina'] ) : ''; ?>"
            >
        <?php
    }


    public function mscbios_preco_cbio_callback(){
        ?>
            <input
            type="text"
            name="mscbios_options[preco_cbios]"
            id="preco_cbio"
            value="<?php echo isset( self::$options['preco_cbios'] ) ? esc_attr( self::$options['preco_cbios'] ) : ''; ?>"
            >
        <?php
    }
}



