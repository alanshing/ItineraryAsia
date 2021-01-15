<!--DateTimePicker-->
<!--Slug-->
<script>
    (function() {
        $('#published_at').datetimepicker( {
            format: 'YYYY-MM-DD HH:mm:ss',
            sideBySide: true,
        });
        $('#ended_at').datetimepicker( {
            format: 'YYYY-MM-DD HH:mm:ss',
            sideBySide: true,
        });

        document.getElementById('title').addEventListener('blur', function(e) {
            let slug = document.getElementById('slug');
            slug.value = this.value.toLowerCase().replace(/[^a-z0-9-]+/g, '-').replace(/^-+|-+$/g, '-');
        })
    })();
</script>