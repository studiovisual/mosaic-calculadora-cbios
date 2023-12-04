<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://studiovisual.com.br
 * @since      1.0.0
 *
 * @package    Mosaic_cbios_calculator
 * @subpackage Mosaic_cbios_calculator/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Mosaic_cbios_calculator
 * @subpackage Mosaic_cbios_calculator/includes
 * @author     Rafael Bombonatti
 */
class Mosaic_cbios_calculator_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
        flush_rewrite_rules();

	}

}
