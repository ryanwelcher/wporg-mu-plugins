<?php
/**
 * Register all blocks
 */
namespace WordPressdotorg\MU_Plugins\Blocks;

add_action( 'init', __NAMESPACE__ . '\init' );

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */

function init() {
	register_block_type( BLOCK_BUILD_DIR . '/notice' );
	register_block_type( BLOCK_BUILD_DIR . '/language-suggest' );
	register_block_type( BLOCK_BUILD_DIR . '/table-of-contents' );
}