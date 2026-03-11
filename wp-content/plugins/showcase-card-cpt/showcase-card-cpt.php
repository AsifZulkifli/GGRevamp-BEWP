<?php
/**
 * Plugin Name: Showcase Cards CPT
 * Description: Custom post type for showcase cards
 * Version: 1.0
 */

if (!defined('ABSPATH')) exit;

add_action('init', function () {
    register_post_type('showcase_card', [
        'labels' => [
            'name' => 'Showcase Cards',
            'singular_name' => 'Showcase Card',
            'add_new_item' => 'Add New Showcase Card',
            'edit_item' => 'Edit Showcase Card',
        ],
        'public' => true,
        'show_in_graphql' => true,
        'graphql_single_name' => 'showcaseCard',
        'graphql_plural_name' => 'showcaseCards',
        'supports' => ['title', 'editor', 'page-attributes'],
        'menu_icon' => 'dashicons-screenoptions',
        'has_archive' => false,
        'rewrite' => ['slug' => 'showcase-card'],
    ]);
});