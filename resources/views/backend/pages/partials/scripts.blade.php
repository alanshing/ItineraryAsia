<!--Slug-->
<script>
    (function() {
        document.getElementById('title').addEventListener('blur', function(e) {
            let url = document.getElementById('url');

            url.value = this.value.toLowerCase().replace(/[^a-z0-9-]+/g, '-').replace(/^-+|-+$/g, '-');
        })
    })();
</script>

<!--Froala Editor-->
<link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js"></script>
<script>
    new FroalaEditor('#content');
</script>