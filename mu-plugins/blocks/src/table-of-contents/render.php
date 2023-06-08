<?php
/**
 * Render file that will contain the output of the block on the front end. 
 * This is essentially what would be returned from the `render_callback` function previously.
 * 
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#php-server-side
 * 
 * @package wporg
 */
namespace WordPressdotorg\MU_Plugins\Blocks\Dynamic_ToC_Block;

// We're reusing the existing render_callback function here to reduce
// the possibility of introducing errors with this refactor.
echo render( $attributes, $content, $block );