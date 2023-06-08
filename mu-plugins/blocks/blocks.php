<?php
/**
 * Register all blocks
 */
namespace WordPressdotorg\MU_Plugins\Blocks;


/**
 * Include some helper.php files for blocks that may need them.
 */
require_once __DIR__ . '/src/table-of-contents/helpers.php';


/**
 * Register all the blocks on the same hook.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function init() {
	register_block_type( BLOCK_BUILD_DIR . '/notice' );
	register_block_type( BLOCK_BUILD_DIR . '/language-suggest' );
	register_block_type( BLOCK_BUILD_DIR . '/table-of-contents' );
}

add_action( 'init', __NAMESPACE__ . '\init' );