
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>


<link href="node_modules/froala-editor/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="node_modules/froala-editor/js/froala_editor.pkgd.min.js"></script>
<link href="node_modules/froala-editor/css/froala_style.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="node_modules/froala-editor/css/themes/dark.css">
<script>
    $("document").ready(function () {
        new FroalaEditor('#editor',{
            // Set dark theme name.
            theme: 'gray',
            zIndex: 2001
        })
    });
</script>