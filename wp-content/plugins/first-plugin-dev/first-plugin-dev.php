<?php


/*
 * Plugin Name: First Plugin Dev
 * Plugin URI: https://example.com/plugins/first-plugin-dev/
 * Description: Handle the first plugin dev with this plugin.
 * Version: 1.0.0
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Md. Ashadul Islam
 * Author URI: https://ashadulislam.com/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:
 * Text Domain: first-plugin-dev
 * Domain Path: /languages
 */



//  define constant
define("PLUGIN_DIR_URL", plugin_dir_url(__FILE__));
define("PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));
define("PLUGIN_VERSION", '1.0.0');



//  Admin Menu on Dashboard
add_action('admin_menu', 'first_plugin_dev_menu');
function first_plugin_dev_menu()
{
    add_menu_page(
        'First Plugin Dev',
        'First Plugin Dev',
        'manage_options',
        'first-plugin-dev',
        'first_plugin_dev_page',
        'dashicons-video-alt',
        25
    );

    add_submenu_page(
        'first-plugin-dev',
        'First Plugin Dev Submenu',
        'First Plugin Dev Submenu',
        'manage_options',
        'first-plugin-dev-submenu',
        'first_plugin_dev_submenu_page'
    );

    // submenu under wp setting
    add_submenu_page(
        'options-general.php',
        // 'first-plugin-dev',
        'Submenu under wp setting',
        'Submenu under wp setting',
        'manage_options',
        'submenu-under-wp-setting',
        'submenu_under_wp_setting_page'
    );
}

function first_plugin_dev_page()
{
    echo '<h1>First Plugin Dev</h1>';
}


// add submenu on dashboard
// add_action('admin_menu', 'first_plugin_dev_submenu');

// function first_plugin_dev_submenu()
// {
//     add_submenu_page(
//         'first-plugin-dev',
//         'First Plugin Dev Submenu',
//         'First Plugin Dev Submenu',
//         'manage_options',
//         'first-plugin-dev-submenu',
//         'first_plugin_dev_submenu_page'
//     );
// }
function first_plugin_dev_submenu_page()
{
    // echo '<h1>First Plugin Dev Submenu</h1>';
    include_once PLUGIN_DIR_PATH . 'views/submenu.php';
}

// //  Admin Settings
// add_action('admin_init', 'first_plugin_dev_settings');
// function first_plugin_dev_settings()
// {
//     register_setting('first-plugin-dev-group', 'first-plugin-dev-text');
// }

// // Admin Settings Section
// function first_plugin_dev_settings_section()
// {
//     echo '<p>Enter your text here.</p>';
// }
// add_action('first-plugin-dev-group', 'first_plugin_dev_settings_section');


function submenu_under_wp_setting_page()
{
    echo '<h1>Submenu under wp setting</h1>';
}


/**
 * enqueue style and script
 * Never worry about cache again!
 */
function FPD_load_plugin_scripts()
{
    // create my own version codes
    // $FPD_js_ver = date("ymd-Gis", filemtime(PLUGIN_DIR_URL . 'js/main.js'));
    // $FPD_css_ver = date("ymd-Gis", filemtime(PLUGIN_DIR_URL . 'css/style.css'));

    // enqueue script and style
    // wp_enqueue_script('FPD_main', PLUGIN_DIR_URL . 'js/main.js', array(''), $FPD_js_ver);
    // wp_register_style('FPD_css', PLUGIN_DIR_URL . 'css/style.css', false, $FPD_css_ver);
    // wp_enqueue_style('FPD_css');


    wp_enqueue_style('FPD-style', PLUGIN_DIR_URL . "assets/css/style.css", [], '1.0.0'); // remove enqueue location for admin

}

/*
 * use init action for enqueue style and script for admin
 */
add_action('init', 'FPD_load_plugin_scripts');