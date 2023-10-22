<?php

/*
Plugin Name: Code Test
Plugin URI: http://localhost/plugins/code-test/
Description: Pruebas
Armstrong: Activado code
Author: Carlos Aleman
Version: 1.0.0
Author URI: http://localhost/

 */

function pluginprefixFunctionToRun() {
	echo 'ok';
}

register_activation_hook(
	__FILE__,
	'pluginprefix_function_to_run'
);

register_deactivation_hook(
	__FILE__,
	'pluginprefix_function_to_run'
);

/**
 * Register the "book" custom post type
 */
function pluginprefixSetupPostType() {
	register_post_type('book', ['public' => true]);
}
add_action('init', 'pluginprefix_setup_post_type');

/**
 * Activate the plugin.
 */
function pluginprefixActivate() {
	// Trigger our function that registers the custom post type plugin.
	pluginprefixSetupPostType();
	// Clear the permalinks after the post type has been registered.
	flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'pluginprefix_activate');