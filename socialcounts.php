<?php
/*
Plugin Name: Social Counts - Youtube
Plugin URI: 
Description: Shows the counts of your youtube channel's subscribers
Version: 2.0.0
Author: Milind Audichya
Author URI: https://milindaudichya.com/
*/

// Exit if accessed directly
if(!defined('ABSPATH'))
{
    exit;
}

//Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/socialcounts-scripts.php');

//Load Class
require_once(plugin_dir_path(__FILE__).'/includes/socialcounts-class.php');

//Register Widget 
function register_socialcounts()
{
    register_widget('Social_Counts_Widget');
}

//Hook in function
add_action('widgets_init','register_socialcounts');