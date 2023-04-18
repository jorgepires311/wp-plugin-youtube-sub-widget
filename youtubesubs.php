<?php
/**
 * YouTubeSubs
 *
 * @package     PluginPackage
 * @author      Jorge Pires
 * @copyright   2023 Horhei Tech Labs LLC
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: YouTubeSubs
 * Plugin URI:  https://jorgepir.es
 * Description: Adds widget where users can subscribe to YouTube Channel
 * Version:     1.0.0
 * Author:      Jorge Pires
 * Author URI:  https://jorgepir.es
 * Text Domain: plugin-slug
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

 // Exit if access directly
 if(!defined('ABSPATH')){
    exit;
 }
//  Load Scripts and Styles
 require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');
//  Load Class
 require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-class.php');

 function register_youtubesubs(){
    register_widget('YTS_Widget');
}

add_action('widgets_init','register_youtubesubs');