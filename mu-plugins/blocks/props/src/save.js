/**
 * WordPress dependencies
 */
import { useBlockProps } from '@wordpress/block-editor';


const save = () => {
    const blockProps = useBlockProps.save();

    return (
        <div { ...blockProps }>
            Hello World, step 1 (from the frontend).
        </div>
    );
}

export default save;