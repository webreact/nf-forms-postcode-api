<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.holtesdesign.nl
 * @since      1.0.0
 *
 * @package    NF_Postcode_Api
 * @subpackage NF_Postcode_Api/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    NF_Postcode_Api
 * @subpackage NF_Postcode_Api/public
 * @author     Holtes Design <email@example.com>
 */
class NF_Postcode_Api_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $nf_postcode_api    The ID of this plugin.
	 */
	private $nf_postcode_api;

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
	 * @param      string    $nf_postcode_api       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $nf_postcode_api, $version ) {

		$this->nf_postcode_api = $nf_postcode_api;
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
		 * defined in NF_Postcode_Api_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The NF_Postcode_Api_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->nf_postcode_api, plugin_dir_url( __FILE__ ) . 'css/nf-postcode-api-public.css', array(), $this->version, 'all' );

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
		 * defined in NF_Postcode_Api_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The NF_Postcode_Api_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

	}

}
