<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://studiovisual.com.br
 * @since      1.0.0
 *
 * @package    Calculadora_Cbios
 * @subpackage Calculadora_Cbios/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Calculadora_Cbios
 * @subpackage Calculadora_Cbios/includes
 * @author     Studio Visual <contato@studiovisual.com.br>
 */
class Calculadora_Cbios_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'calculadora-cbios',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
