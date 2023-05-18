/**
 * WordPress dependencies
 */
import { registerBlockType } from '@wordpress/blocks';

/**
 * Internal dependencies
 */
import meta from './block.json';
import edit from './edit';
import save from './save';

registerBlockType( meta.name, {
    edit,
    save,
});