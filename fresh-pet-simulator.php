<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://combinedmedia.ie/
 * @since             1.0.0
 * @package           Fresh_Pet_Simulator
 *
 * @wordpress-plugin
 * Plugin Name:       Fresh Pet Simulator
 * Plugin URI:        https://combinedmedia.ie/
 * Description:       This Plugin is Created for Product Management.
 * Version:           1.0.0
 * Author:            Combined Media
 * Author URI:        https://combinedmedia.ie/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fresh-pet-simulator
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
define( 'FRESH_PET_SIMULATOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-fresh-pet-simulator-activator.php
 */
function activate_fresh_pet_simulator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fresh-pet-simulator-activator.php';
	Fresh_Pet_Simulator_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-fresh-pet-simulator-deactivator.php
 */
function deactivate_fresh_pet_simulator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fresh-pet-simulator-deactivator.php';
	Fresh_Pet_Simulator_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_fresh_pet_simulator' );
register_deactivation_hook( __FILE__, 'deactivate_fresh_pet_simulator' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-fresh-pet-simulator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_fresh_pet_simulator() {

	$plugin = new Fresh_Pet_Simulator();
	$plugin->run();

}
run_fresh_pet_simulator();
