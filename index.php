<?php 
/*
Plugin Name: ALT Lab 3dMol Viewer
Plugin URI:  https://github.com/
Description: Using the awesome 3dMol Viewer in WordPress https://3dmol.csb.pitt.edu/
Version:     1.0
Author:      ALT Lab
Author URI:  http://altlab.vcu.edu
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset

*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//add_action('wp_enqueue_scripts', 'prefix_load_scripts');

function prefix_load_scripts() {                           
    $deps = array('jquery');
    $version= '1.0'; 
    $in_footer = true;    
    wp_enqueue_script( 'jQuery', '', null, null, true );
    wp_enqueue_script('3dmol-viewer-main-js', plugin_dir_url( __FILE__ ) . 'js/tdmol-viewer-main.js', $deps, $version, $in_footer); 
    wp_enqueue_style( '3dmol-viewer-main-css', plugin_dir_url( __FILE__ ) . 'css/tdmol-viewer-main.css');
}



//LOGGER -- like frogger but more useful

if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}


  //print("<pre>".print_r($a,true)."</pre>");

// Define path and URL to the ACF plugin.

define( 'TDMOL_ACF_PATH', plugin_dir_url(__FILE__) . 'includes/acf/' );
define( 'TDMOL_ACF_URL', plugin_dir_url(__FILE__) . 'includes/acf/' );

// Include the ACF plugin.
include_once( plugin_dir_path( __FILE__ ) . 'includes/acf/acf.php' );


// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'tdmol_acf_settings_url');
function tdmol_acf_settings_url( $url ) {
    return TDMOL_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', 'tdmol_acf_settings_show_admin');
function tdmol_acf_settings_show_admin( $show_admin ) {
    return true;
}

require_once plugin_dir_path(__FILE__) . '/includes/acf-fields.php';

