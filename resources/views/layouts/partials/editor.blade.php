<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    window.editors = {};
    document.querySelectorAll('.editor').forEach( ( node, index ) => {
        ClassicEditor
            .create( node, {
                ckfinder: {
                    uploadUrl: '{{route("admin.image.upload").'?_token=' . csrf_token()}}',
                }
            })
            .then( newEditor => {
                newEditor.editing.view.change( writer => {
                    var height = node.getAttribute('data-height') || 320;
                    writer.setStyle('min-height', height + 'px', newEditor.editing.view.document.getRoot());
                } );
                window.editors[index] = newEditor
        } );
    } );
</script>
