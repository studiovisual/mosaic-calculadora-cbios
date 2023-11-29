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
 * @package    Mosaic_cbios_calculator
 * @subpackage Mosaic_cbios_calculator/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Mosaic_cbios_calculator
 * @subpackage Mosaic_cbios_calculator/includes
 * @author     Leonardo Gobatto <lgobatto@studiovisual.com.br>
 */
class Mosaic_cbios_calculator_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'mosaic_cbios_calculator',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
