<?php

/*
Plugin Name: Code Test
Plugin URI: http://localhost/plugins/code-test/
Description: Pruebas
Armstrong: Activado code
Author: Carlos Alemán
Version: 1.0.0
Author URI: http://localhost/

 */

// Add a new top level menu link to the ACP
function codetest_Add_My_Admin_Link()
{
    add_menu_page(
        'Code Test', // Title of the page
        'Codeptest', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'code-test' // The 'slug' - file to display when clicking the link
    );
};
function codetest_functionactivacion_to_run()
{
    add_action('admin_menu', 'codetest_Add_My_Admin_Link');
    // echo 'Desactivación';

    // Hook to the 'init' action, which is called after WordPress is finished loading the core code
    // add_action('init', 'codetest_add_Cookie');
    // // Set a cookie with the current time of day
    // function codetest_add_Cookie()
    // {
    //     setcookie("last_visit_time", date("r"), time() + 60 * 60 * 24 * 30, "/");
    // }

    // Hook the 'init' action, which is called after WordPress is finished loading the core code, add the function 'codetest_remove_My_Meta_Tags'
    // add_action('init', 'codetest_remove_My_Meta_Tags');
    // // Remove the 'codetest_My_Meta_Tags' function from the wp_head action hook
    // function codetest_remove_My_Meta_Tags()
    // {
    //     remove_action('wp_head', 'codetest_My_Meta_Tags');
    // }

    // Hook the 'wp_footer' action, run the function named 'codetest_Add_Text()'
    // add_action("wp_footer", "codetest_Add_Text");
    // // Hook the 'wp_head' action, run the function named 'codetest_Remove_Text()'
    // add_action("wp_head", "codetest_Remove_Text");
    // // Define the function named 'codetest_Add_Text('), which just echoes simple text
    // function codetest_Add_Text()
    // {
    //     echo "<p style='color: #FFF;'>After the footer is loaded, my text is added!</p>";
    // }
    // // Define the function named 'codetest_Remove_Text()' to remove our previous function from the 'wp_footer' action
    // function codetest_Remove_Text()
    // {
    //     if (date("l") === "Monday") {
    //         // Target the 'wp_footer' action, remove the 'codetest_Add_Text' function from it
    //         remove_action("wp_footer", "codetest_Add_Text");
    //     }
    // }
};
function codetest_functiondesactivacion_to_run()
{

};

register_activation_hook(
    __FILE__,
    'codetest_functionactivacion_to_run'
);

register_deactivation_hook(
    __FILE__,
    'codetest_functiondesactivacion_to_run'
);

/**
 * Register the "book" custom post type
 */
// function pluginprefix_setup_post_type()
// {
//     register_post_type('book', ['public' => true]);
// }
// add_action('init', 'pluginprefix_setup_post_type');

// /**
//  * Activate the plugin.
//  */
// function pluginprefix_activate()
// {
//     // Trigger our function that registers the custom post type plugin.
//     pluginprefixSetupPostType();
//     // Clear the permalinks after the post type has been registered.
//     flush_rewrite_rules();
// }
// register_activation_hook(__FILE__, 'pluginprefix_activate');
