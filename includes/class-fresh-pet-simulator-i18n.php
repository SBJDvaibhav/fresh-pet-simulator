<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://combinedmedia.ie/
 * @since      1.0.0
 *
 * @package    Fresh_Pet_Simulator
 * @subpackage Fresh_Pet_Simulator/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Fresh_Pet_Simulator
 * @subpackage Fresh_Pet_Simulator/includes
 * @author     Combined Media <info@combinedmedia.ie>
 */
class Fresh_Pet_Simulator_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'fresh-pet-simulator',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
