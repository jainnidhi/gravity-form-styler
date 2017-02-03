<?php
/*
Plugin Name: Gravity Forms Styler
Plugin URI: http://ideaboxcreations.com/
Description: Provide Gravity Forms style options in customizer.
Version: 1.0.0
Author: IdeaBox Creations
Author URI: http://ideaboxcreations.com/
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
textdomain: gfs
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) )
{
    exit;
}

define( 'GFS_DIR', WP_PLUGIN_DIR . '/gravityforms-styler' . '/' );

if ( class_exists( 'GFForms' ) ) {
	require_once GFS_DIR . '/includes/class-ib-customizer.php';
	require_once GFS_DIR . '/includes/customizer.php';
}
