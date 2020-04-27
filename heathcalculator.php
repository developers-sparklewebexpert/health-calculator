<?php
/**
 * Plugin Name:			Health Calcultor
 * Plugin URI:			https://fitness.webcloud.store/
 * Description:			Health calcultor widget for measure your 24 health issue.
 * Version:				1.0.0
 * Author:				Raj Kumar Singh
 * Author URI:			https://developers-india.com/
 *
 * Text Domain: DevIndia
 * Domain Path: /languages/
 *
 * @package Healthcalcultor
 * @category Heath Calcultor
 * @author Raj Kumar Singh
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
define('KG_TO_LBS',2.2046);
define('LBS_TO_KG',0.45);
define('IN_TO_CM',2.54);
define('MT_TO_CM',100);
/**
 * Returns the main instance of healthcalcultor to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object healthcalcultor
 */
function Healthcalcultor() {
	return Healthcalcultor::instance();
} // End healthcalcultor()

Healthcalcultor();

/**
 * Main healthcalcultor Class
 *
 * @class healthcalcultor
 * @version	1.0.0
 * @since 1.0.0
 * @package	healthcalcultor
 */
final class Healthcalcultor {
	/**
	 * healthcalcultor The single instance of healthcalcultor.
	 * @var 	object
	 * @access  private
	 * @since 	1.0.0
	 */
	private static $_instance = null;

	/**
	 * The token.
	 * @var     string
	 * @access  public
	 * @since   1.0.0
	 */
	public $token;

	/**
	 * The version number.
	 * @var     string
	 * @access  public
	 * @since   1.0.0
	 */
	public $version;

	// Admin - Start
	/**
	 * The admin object.
	 * @var     object
	 * @access  public
	 * @since   1.0.0
	 */
	public $admin;

	/**
	 * Constructor function.
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	public function __construct() {
		$this->token 			= 'healthcalcultor-widgets';
		$this->plugin_url 		= plugin_dir_url( __FILE__ );
		$this->plugin_path 		= plugin_dir_path( __FILE__ );
		$this->version 			= '1.0.0';

		register_activation_hook( __FILE__, array( $this, 'install' ) );

		add_action( 'init', array( $this, 'load_plugin_textdomain' ) );

		add_action( 'init', array( $this, 'setup' ) );
		add_action( 'init', array( $this, 'updater' ), 1 );

		// Add new category for Elementor
		add_action( 'elementor/init', array( $this, 'elementor_init' ), 1000 );
		
		// Add the action here so that the widgets are always visible
		add_action( 'elementor/widgets/widgets_registered', array( $this, 'widgets_registered' ) );
		
		// Translate widgets with WPML
		add_filter( 'wpml_elementor_widgets_to_translate', array( $this, 'wpml_widgets_to_translate_filter' ) );
	}

	/**
	 * Initialize License Updater.
	 * Load Updater initialize.
	 * @return void
	 */
	public function updater() {

		// Plugin Updater Code
		if( class_exists( 'Healthcalcultor_Updater' ) ) {
			$license	= new Healthcalcultor_Updater( __FILE__, 'Elementor Widgets', $this->version, 'devIndia' );
		}
	}

	/**
	 * Main Healthcalcultor Instance
	 *
	 * Ensures only one instance of Ocean_Elementor_Widgets is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 * @static
	 * @see Ocean_Elementor_Widgets()
	 * @return Main Ocean_Elementor_Widgets instance
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) )
			self::$_instance = new self();
		return self::$_instance;
	} // End instance()

	/**
	 * Load the localisation file.
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	public function load_plugin_textdomain() {
		load_plugin_textdomain( 'healthcalcultor', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	/**
	 * Cloning is forbidden.
	 *
	 * @since 1.0.0
	 */
	public function __clone() {
		_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?' ), '1.0.0' );
	}

	/**
	 * Unserializing instances of this class is forbidden.
	 *
	 * @since 1.0.0
	 */
	public function __wakeup() {
		_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?' ), '1.0.0' );
	}

	/**
	 * Installation.
	 * Runs on activation. Logs the version number and assigns a notice message to a WordPress option.
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	public function install() {
		$this->_log_version_number();
	}

	/**
	 * Log the plugin version number.
	 * @access  private
	 * @since   1.0.0
	 * @return  void
	 */
	private function _log_version_number() {
		// Log the version number.
		update_option( $this->token . '-version', $this->version );
	}

	
	public function setup() {
		require_once( $this->plugin_path .'/includes/helpers.php' );
		require_once( $this->plugin_path .'/ajax-calculator.php' );
		add_action( 'elementor/frontend/after_register_scripts', array( $this, 'scripts' ) );
		add_action( 'elementor/frontend/after_register_styles', array( $this, 'styles' ) );	
	}

	/**
	 * Add new category for Elementor.
	 *
	 * @since 1.0.0
	 */
	public function elementor_init() {

		

		$elementor = \Elementor\Plugin::$instance;

		// Add element category in panel
		$elementor->elements_manager->add_category(
			'health',
			[
				'title' =>  __( 'Healthcalcultor Elements', 'devIndia' ),
				'icon' => 'fa fa-medkit',
			],
			1
		);
	}

	/**
	 * Enqueue scripts.
	 *
	 * @since 1.0.0
	 */
	public function scripts() {

		wp_enqueue_script( 'health-ca-script',plugins_url( '/assets/js/combine_script.js', __FILE__ ),array('jquery'),false, true);
	    wp_localize_script( 'health-ca-script', 'ajax_posts', array(
			'ajaxurl' => admin_url('admin-ajax.php'),
			'noposts' => __('No more posts found', 'devIndia'),
			'loading' => __('loading... ', 'devIndia'),
		));

	}

	/**
	 * Enqueue styles.
	 *
	 * @since 1.0.0
	 */
	public function styles() {

		// Load main stylesheet
		//wp_enqueue_style( 'oew-style', plugins_url( '/assets/css/style.min.css', __FILE__ ) );
		 wp_enqueue_style( 'health-calc', plugins_url( '/assets/css/style.css', __FILE__ ),array(),null,'all' );
		// If rtl
		if ( is_RTL() ) {
			//wp_enqueue_style( 'oew-style-rtl', plugins_url( '/assets/css/rtl.css', __FILE__ ) );
		}

	}

	/**
	 * Register the widgets
	 *
	 * @since 1.0.0
	 */
	public function widgets_registered() {

		// We check if the Elementor plugin has been installed / activated.
		if ( defined( 'ELEMENTOR_PATH' ) && class_exists( 'Elementor\Widget_Base' ) ) {

			// Define dir
			$dir = $this->plugin_path .'widgets/';

			// Array of new widgets
			$build_widgets = apply_filters( 'health_widgets', array(
				'basal-metabolic-rate' 			    => $dir .'basal-metabolic-rate.php',
                'blood-alcohol-bac-calculator'      => $dir.'blood-alcohol-bac-calculator.php',
                'body-fat-calculator-navy'          => $dir.'body-fat-calculator-navy.php',
                'body-fat-calculator-army'          => $dir.'body-fat-calculator-army.php',
                'body-fat-calculator-usmc'          => $dir.'body-fat-calculator-usmc.php',
                'body-fat-calculator-ymca'          => $dir.'body-fat-calculator-ymca.php',
                'body-fat-percentage-calculator'    => $dir.'body-fat-percentage-calculator.php',
                'calories-burned-movies'            => $dir.'calories-burned-movies.php',
                'calories-to-gain-weight'           => $dir.'calories-to-gain-weight.php',
                'calories-to-lose-weight'           => $dir.'calories-to-lose-weight.php',
                'cbc'                 				=> $dir.'cbc.php',
                'dee'                 				=> $dir.'dee.php',
                'due'                 				=> $dir.'due.php',
                'frame-size'                 		=> $dir.'frame-size.php',
                'how-to-lose-weight-fast'           => $dir.'how-to-lose-weight-fast.php',
                'ideal-healthy-weight'              => $dir.'ideal-healthy-weight.php',
                'ideal-weight-children'             => $dir.'ideal-weight-children.php',
                'lean-body-mass'             		=> $dir.'lean-body-mass.php',
                'lose-one-pound'             		=> $dir.'lose-one-pound.php',
                'ovulation-calculator'              => $dir.'ovulation-calculator.php',
                'smoking-cost'             			=> $dir.'smoking-cost.php',
                'target-heart-rate'                 => $dir.'target-heart-rate.php',
                'waist-to-hip-ratio'                => $dir.'waist-to-hip-ratio.php',
			) );

			// Load files
			foreach ( $build_widgets as $widget_filename ) {
				include $widget_filename;
			}

		}

	}

	

} // End Class