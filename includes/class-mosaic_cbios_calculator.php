<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://studiovisual.com.br
 * @since      1.0.0
 *
 * @package    Mosaic_cbios_calculator
 * @subpackage Mosaic_cbios_calculator/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Mosaic_cbios_calculator
 * @subpackage Mosaic_cbios_calculator/includes
 * @author     Rafael Bombonatti
 */
class Mosaic_cbios_calculator {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Mosaic_cbios_calculator_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'MOSAIC_CBIOS_CALCULATOR_VERSION' ) ) {
			$this->version = MOSAIC_CBIOS_CALCULATOR_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'mosaic_cbios_calculator';

        add_action( 'admin_menu', [ $this, 'mosaic_cbios_calculator_add_menu' ]);

	}

    public function mosaic_cbios_calculator_add_menu()
    {
        add_menu_page(
            'Calculadora CBios',
            'Calculadora CBios',
            'manage_options',
            'mosaic_cbios_calculator_admin',
            [
                $this,
                'mosaic_cbios_calculator_settings_page'
            ],
            'dashicons-calculator'
        );

        add_submenu_page(
            'mosaic_cbios_calculator_admin',
            'Ajuste de Valores',
            'Ajuste de Valores',
            'manage_options',
            'mosaic_cbios_calculator_admin_settings'
        )
    }

    public function mosaic_cbios_calculator_settings_page()
    {
        echo 'teste página de admin';
    }

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Mosaic_cbios_calculator_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
		$this->loader->add_action( 'init', $plugin_public, 'register_shortcodes');
		$this->loader->add_action( 'wp_head', $plugin_public, 'register_google_fonts', PHP_INT_MIN);

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Mosaic_calculator_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
