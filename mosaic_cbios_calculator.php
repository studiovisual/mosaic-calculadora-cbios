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

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MOSAIC_CBIOS_CALCULATOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mosaic_cbios_calculator-activator.php
 */
function activate_mosaic_cbios_calculator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mosaic_cbios_calculator-activator.php';
	Mosaic_cbios_calculator_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mosaic_cbios_calculator-deactivator.php
 */
function deactivate_mosaic_cbios_calculator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mosaic_cbios_calculator-deactivator.php';
	Mosaic_cbios_calculator_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mosaic_cbios_calculator' );
register_deactivation_hook( __FILE__, 'deactivate_mosaic_cbios_calculator' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mosaic_cbios_calculator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mosaic_cbios_calculator() {

	$plugin = new Mosaic_cbios_calculator();
	$plugin->run();

}
run_mosaic_cbios_calculator();
