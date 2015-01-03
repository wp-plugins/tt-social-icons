<?php
/*
    Plugin Name: TT Social Icons
    Plugin URI: http://www.trendytheme.net/tt-social-icons
    Description: Show off social icon on your theme by widget.
    Author: Trendy Theme
    Author URI: http://www.trendytheme.net
    Version: 0.1
*/

    // don't call the file directly
    if ( !defined( 'ABSPATH' ) ) exit;
    

    //---------------------------------------------------
    // Loading Scripts, Stylesheets
    //---------------------------------------------------

    function tt_wp_enqueue_scripts() {
        $plugin_url = plugin_dir_url( __FILE__ );
        wp_enqueue_style( 'fontawesome', $plugin_url . 'css/font-awesome.min.css' );
        wp_enqueue_style( 'custom-style', $plugin_url . 'css/tt.css' );
    }
    add_action('wp_enqueue_scripts', 'tt_wp_enqueue_scripts');

    function tt_wp_admin_scripts() {
        $plugin_url = plugin_dir_url( __FILE__ );
        wp_enqueue_style( 'admin-style', $plugin_url . 'css/admin-style.css' );
    }
    add_action('admin_enqueue_scripts', 'tt_wp_admin_scripts');

    //---------------------------------------------------
    // Widget
    //---------------------------------------------------
    
    require_once "lib/widget.php";