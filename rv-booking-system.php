<?php

/**
  *
 * @link              https://ikr.com
 * @since             1.0.0
 * @package           Rv_Booking_System
 *
 * @wordpress-plugin
 * Plugin Name:       rv-booking-system
 * Plugin URI:        https://https://wordpress.org/plugins/rv-booking-system/
 * Description:       This plugin is build for rv website make a booking rv website 
 * Version:           1.0.0
 * Author:            IK Robin
 * Author URI:        https://ikr.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rv-booking-system
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


if ( ! defined( 'RV_BOOKING_STYTEM_PATH' ) ) {
    define( 'RV_BOOKING_STYTEM_PATH', plugin_dir_path( __FILE__ ) );
 }


define( 'RV_BOOKING_SYSTEM_VERSION', '1.0.0' );

//  add the function php 
require RV_BOOKING_STYTEM_PATH . './functions.php';



