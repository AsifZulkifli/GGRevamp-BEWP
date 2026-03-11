<?php
/**
 * Plugin Name: Headless Contact API
 * Description: API endpoint for Next.js contact form
 * Version: 1.0
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('rest_api_init', function () {

    register_rest_route('headless/v1', '/contact', array(
        'methods'  => 'POST',
        'callback' => 'handle_contact_form',
        'permission_callback' => '__return_true'
    ));

});

function handle_contact_form($request) {

    $data = $request->get_json_params();

    return [
        'success' => true,
        'data' => $data
    ];
}