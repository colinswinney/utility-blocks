<?php
/*
Plugin Name: Utility Blocks
Plugin URI: https://colinswinney.com
Description: A collection of useful blocks.
Author: Colin Swinney
Author URI: https://colinswinney.com/
Version: 1.0.0
Text Domain: utility-blocks
*/

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 * 
 * @return void
 */
add_action( 'init', function() {
	register_block_type( __DIR__ . '/build' );
} );

/**
 * Register Utility Blocks Category
 *
 * @param array $block_categories   Array of categories for block types.
 * 
 * @return array
 */ 
add_filter( 'block_categories_all', function ( $block_categories ) {
    return array_merge(
        $block_categories,
        [
            [
                'slug'  => 'utility-blocks',
                'title' => esc_html__( 'Utility Blocks', 'utility-blocks' )
            ]
        ]
    );
} );