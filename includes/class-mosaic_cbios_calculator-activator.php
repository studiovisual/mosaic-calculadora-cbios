<?php

/**
 * Fired during plugin activation
 *
 * @link       https://studiovisual.com.br
 * @since      1.0.0
 *
 * @package    Mosaic_cbios_calculator
 * @subpackage Mosaic_cbios_calculator/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Mosaic_cbios_calculator
 * @subpackage Mosaic_cbios_calculator/includes
 * @author     Rafael Bombonatti
 */
class Mosaic_cbios_calculator_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		update_option( 'rewrite_rules', '' );
	}

}
