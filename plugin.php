<?php
/*
Plugin Name:
Plugin URI:
Description:
Version:
Author:
Author URI:
License:
*/

/**
 * rename plugin.php with the plugin's name;
 */

require_once 'vendor/autoload.php';

use PluginWp\hooks\RegisterHook;

$hooks = new RegisterHook;

/**
 * register_desactivation_hook(__FILE__, [$hooks, 'desactivation']);
 * add_action('init', [$initClass, 'initMethod']);
 */

register_activation_hook( __FILE__ , [$hooks, 'install']);