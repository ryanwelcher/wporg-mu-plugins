/**
 * WordPress dependencies
 */
import { useBlockProps } from '@wordpress/block-editor';

const Edit = () => {
    const blockProps = useBlockProps();

    return (
        <div { ...blockProps }>
            Hello World, step 1 (from the editor).
        </div>
    );
}

export default Edit;