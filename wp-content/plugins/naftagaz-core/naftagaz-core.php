<?php
/**
 * Plugin Name: naftagaz core
 * Plugin URI: https://themsah.com
 * Description: naftagaz Theme core.
 * Version: 1.0.0
 * Author: Themsah
 * Author URI: https://themsah.com
 * Text Domain: naftagaz-core
 */
 defined( 'ABSPATH' ) || exit;

//Define plugin path
define('PLUGIN_PATH', plugin_dir_path(__FILE__));

 //include functions file
require_once(PLUGIN_PATH.'/inc/functions.php');