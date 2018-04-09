<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://github.com/mikeill/intensity-club-tools
 * @since      1.0.0
 *
 * @package    Intensity_Club_Tools
 * @subpackage Intensity_Club_Tools/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Intensity_Club_Tools
 * @subpackage Intensity_Club_Tools/includes
 * @author     Mike iLL Kilmer <mike@mzoo.org>
 */
class Intensity_Club_Tools_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'intensity-club-tools',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
