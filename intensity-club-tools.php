<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/mikeill/intensity-club-tools
 * @since             1.0.0
 * @package           Intensity_Club_Tools
 *
 * @wordpress-plugin
 * Plugin Name:       Intensity Club Tools
 * Plugin URI:        https://github.com/mikeill/intensity-club-tools
 * Description:       Intensity Club features that can be abstracted from Theme and maintained.
 * Version:           1.0.0
 * Author:            mZoo.org/LexWebDev/VilleMarketing
 * Author URI:        http://mzoo.org
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       intensity-club-tools
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
define( 'INTENSITY_CLUB_TOOLS_VERSION', '1.0.0' );

//define plugin path and directory
define( 'INTENSITY_CLUB_TOOLS_DIR', plugin_dir_path( __FILE__ ) );
define( 'INTENSITY_CLUB_TOOLS_URL', plugin_dir_url( __FILE__ ) );
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-intensity-club-tools-activator.php
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-intensity-club-tools-activator.php';
	Intensity_Club_Tools_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-intensity-club-tools-deactivator.php
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-intensity-club-tools-deactivator.php';
	Intensity_Club_Tools_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-intensity-club-tools.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_name() {

	$plugin = new Intensity_Club_Tools();
	$plugin->run();

}
run_plugin_name();
