<?php
/*
Plugin Name: Imgra Helper
Description: Imgra Helper is the core plugin for Imgra WordPress Theme. You must install this plugin to get a full fledge Imgra WordPress Theme, otherwise you'll miss some cool features.
Plugin URI: http://msecreative.xyz/
Author: Imgra Theme
Author URI: http://msecreative.xyz/
Version: 1.0.0
License: GPL2
Text Domain: imgra
Domain Path: /languages
*/

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    die( 'No Direct Access' );
}

/*******************************************************************
 * Constants
 *******************************************************************/

/** IMGRA Engine version  */
define( 'IMGRA_HELPER_VERSION', '1.0.0' );

/** IMGRA Engine directory path  */
define( 'IMGRA_HELPER_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );

/** IMGRA Engine includes directory path  */
define( 'IMGRA_HELPER_INCLUDES_DIR', trailingslashit( IMGRA_HELPER_DIR . 'includes' ) );

/** IMGRA Engine shortcodes directory path  */
define( 'IMGRA_HELPER_SHORTCODES_DIR', trailingslashit( IMGRA_HELPER_DIR . 'shortcodes' ) );

/** IMGRA Engine url  */
define( 'IMGRA_HELPER_URL', trailingslashit(  plugin_dir_url( __FILE__ ) ) );


class Imgra_Helper {

    public function __construct() {
        register_activation_hook( __FILE__, array($this, 'activate') );

        $this->load_includes();

        $this->load_shortcodes();

        add_action( 'plugins_loaded', array($this, 'load_textdomain') );
    }

    public function activate() {
        // flash rewrite rules because of custom post type
        flush_rewrite_rules();
    }

    public function load_textdomain() {
        load_plugin_textdomain( 'imgra', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
    }

    private function load_includes() {
        // shortcode base
        require_once  IMGRA_HELPER_INCLUDES_DIR . 'class.shortcode.php';

    }

    /**
     * Include all shortcode files
     * @return null
     */
    private function load_shortcodes() {
        foreach ( glob( IMGRA_HELPER_SHORTCODES_DIR . '*/*.php' ) as $shortcode ) {
            if ( ! file_exists( $shortcode ) ) {
                continue;
            }
            require_once $shortcode;
        }
    }

}

new Imgra_Helper;
