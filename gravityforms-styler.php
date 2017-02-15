<?php
/*
Plugin Name: Styler for Gravity Forms
Plugin URI: http://ideaboxcreations.com/
Description: Provide Gravity Forms styling options in customizer.
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

define( 'GFS_DIR', plugin_dir_path( __FILE__ ) );

if ( class_exists( 'GFForms' ) ) {
    require_once 'includes/customizer.php';
}
