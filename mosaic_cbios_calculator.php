<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://studiovisual.com.br
 * @since             1.0.0
 * @package           Mosaic_cbios_calculator
 *
 * @wordpress-plugin
 * Plugin Name:       Calculadora CBios Mosaic
 * Plugin URI:        https://studiovisual.com.br
 * Description:       Calculadora de eficiência da Mosaic para cálculo de créditos de carbono.
 * Version:           1.0.0
 * Author:            Rafael Bombonatti <rbombonatti@studiovisual.com.br>
 * Author URI:        https://studiovisual.com.br
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mosaic_cbios_calculator
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'MOSAIC_CBIOS_CALCULATOR_VERSION', '1.0.0' );

function activate_mosaic_cbios_calculator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mosaic_cbios_calculator-activator.php';
	Mosaic_cbios_calculator_Activator::activate();
}

function deactivate_mosaic_cbios_calculator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mosaic_cbios_calculator-deactivator.php';
	Mosaic_cbios_calculator_Deactivator::deactivate();
}

require plugin_dir_path( __FILE__ ) . 'includes/class-mosaic_cbios_calculator.php';

register_activation_hook( __FILE__, 'activate_mosaic_cbios_calculator' );
register_deactivation_hook( __FILE__, 'deactivate_mosaic_cbios_calculator' );
register_deactivation_hook( __FILE__, 'deactivate_mosaic_cbios_calculator' );

$mscbios_calculator = new Mosaic_cbios_calculator();