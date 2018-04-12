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

    public function intensity_junior_usta_team_tennis_display() {
        return get_field('junior_usta_team_tennis', 'option');
    }

    public function intensity_contact_elynne_display() {
        return get_field('contact_elynne', 'option');
    }

    public function intensity_policies_display() {
        return get_field('policies', 'option');
    }

    public function intensity_match_play_display() {
        return get_field('match_play', 'option');
    }

    public function intensity_video_analytics_display() {
        return get_field('video_analytics', 'option');
    }

    public function intensity_physical_conditioning_display() {
        return get_field('physical_conditioning', 'option');
    }

    public function intensity_student_pro_ratio_display() {
        return get_field('student_pro_ratio', 'option');
    }

    public function intensity_register_now_display() {
        return get_field('register_now', 'option');
    }

    public function intensity_payment_display() {
        return get_field('payment', 'option');
    }

    public function create_acf_fields_and_shortcodes() {

        acf_add_options_page(array(
            'page_title' 	=> 'Intensity Reusable Fields',
            'menu_title'	=> 'Reusable Fields',
            'menu_slug' 	=> 'reusable-intensity-fields',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));

        add_shortcode('policies', array($this, 'intensity_policies_display'));

        add_shortcode('match_play', array($this, 'intensity_match_play_display'));

        add_shortcode('video_analytics', array($this, 'intensity_video_analytics_display'));

        add_shortcode('physical_conditioning', array($this, 'intensity_physical_conditioning_display'));

        add_shortcode('student_pro_ratio', array($this, 'intensity_student_pro_ratio_display'));

        add_shortcode('register_now', array($this, 'intensity_register_now_display'));

        add_shortcode('payment', array($this, 'intensity_payment_display'));

        add_shortcode('contact_elynne', array($this, 'intensity_contact_elynne_display'));

        add_shortcode('junior_usta_team_tennis', array($this, 'intensity_junior_usta_team_tennis_display'));

    }

    /*
     *  Generate the Breadcrumb-navxt
     * source: https://mtekk.us/archives/guides/fun-with-bcn_display_json_ld-the-basics/
     *
     */
    public function json_ld_breadcrumb_trail() {
        if (function_exists("bcn_display"))
        {
            bcn_display();
        }
    }

    /*
     *  List Child Pages
     */
    public function list_child_pages() {

        global $post;

        // Return if page has no child or parent pages
        $children = get_pages( array( 'child_of' => $post->ID ) );
        if ((count( $children ) === 0) && ($post->post_parent === 0)) return;

        $args = array(
            'depth'        => 1,
            'child_of'     => $post->post_parent,
            'exclude'      => '',
            'title_li'     => '',
            'echo'         => 0,
            'authors'      => '',
            'sort_column'  => 'menu_order, post_title',
            'link_before'  => '',
            'link_after'   => '',
            'item_spacing' => 'preserve',
            'walker'       => '',
        );

        if ( is_page() && $post->post_parent ) {
            $childpages = wp_list_pages( $args );
        } else {
            $args['child_of'] = $post->ID;
            $childpages = wp_list_pages($args);
        }
        if ( $childpages ) {

            $string = '<div id="sub-navigation"><div class=""container"><ul class="col-md-12">' . $childpages . '</ul></div></div>';
        } else {
            return;
        }

        return $string;

    }

    /*
     * Create General Shortcodes
     *
     * All shortcodes without specific category
     */
    public function create_shortcodes() {
        add_shortcode('display_childpages', array($this, 'list_child_pages'));
    }

}
