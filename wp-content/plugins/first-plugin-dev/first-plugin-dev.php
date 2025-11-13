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
    echo '<h1>First Plugin Dev Submenu</h1>';
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