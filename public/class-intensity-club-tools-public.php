<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://github.com/mikeill/intensity-club-tools
 * @since      1.0.0
 *
 * @package    Intensity_Club_Tools
 * @subpackage Intensity_Club_Tools/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Intensity_Club_Tools
 * @subpackage Intensity_Club_Tools/public
 * @author     Mike iLL Kilmer <mike@mzoo.org>
 */
class Intensity_Club_Tools_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Intensity_Club_Tools_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Intensity_Club_Tools_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/intensity-club-tools-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Intensity_Club_Tools_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Intensity_Club_Tools_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/intensity-club-tools-public.js', array( 'jquery' ), $this->version, false );

	}

    /*
     *
     * ACF Custom Options Page where we store fields
     *
     */
    public function create_acf_fields_and_shortcodes() {

        if( function_exists('acf_add_options_page') ) {

            acf_add_options_page(array(
                'page_title' 	=> 'Intensity Reusable Fields',
                'menu_title'	=> 'Reusable Fields',
                'menu_slug' 	=> 'reusable-intensity-fields',
                'capability'	=> 'edit_posts',
                'redirect'		=> false
            ));

            /*
             * Return our Reusable Fields as stored in ACF Options Field
             */
            function intensity_policies_display() {
                return get_field('policies', 'option');
            }
            add_shortcode('policies', 'intensity_policies_display');

            function intensity_match_play_display() {
                return get_field('match_play', 'option');
            }
            add_shortcode('match_play', 'intensity_match_play_display');

            function intensity_video_analytics_display() {
                return get_field('video_analytics', 'option');
            }
            add_shortcode('video_analytics', 'intensity_video_analytics_display');

            function intensity_physical_conditioning_display() {
                return get_field('physical_conditioning', 'option');
            }
            add_shortcode('physical_conditioning', 'intensity_physical_conditioning_display');

            function intensity_student_pro_ratio_display() {
                return get_field('student_pro_ratio', 'option');
            }
            add_shortcode('student_pro_ratio', 'intensity_student_pro_ratio_display');

            function intensity_register_now_display() {
                return get_field('register_now', 'option');
            }
            add_shortcode('register_now', 'intensity_register_now_display');

            function intensity_payment_display() {
                return get_field('payment', 'option');
            }
            add_shortcode('payment', 'intensity_payment_display');

            function intensity_contact_elynne_display() {
                return get_field('contact_elynne', 'option');
            }
            add_shortcode('contact_elynne', 'intensity_contact_elynne_display');

            function intensity_junior_usta_team_tennis_display() {
                return get_field('junior_usta_team_tennis', 'option');
            }
            add_shortcode('junior_usta_team_tennis', 'intensity_junior_usta_team_tennis_display');

        }

    }

    /*
     *  Generate the Breadcrumb-navxt
     * source: https://mtekk.us/archives/guides/fun-with-bcn_display_json_ld-the-basics/
     *
     */
    public function json_ld_breadcrumb_trail() {
        if (function_exists(‘bcn_display’))
        {
            bcn_display();
        }
    }



}
