<!--Slug-->
<script>
    (function() {
        document.getElementById('name').addEventListener('blur', function(e) {
            let slug = document.getElementById('slug');
            slug.value = this.value.toLowerCase().replace(/[^a-z0-9-]+/g, '-').replace(/^-+|-+$/g, '-');
        })
    })();
</script>