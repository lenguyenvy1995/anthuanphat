<script src="https://cdn.jsdelivr.net/npm/jquery-tagcanvas@2.9.0/tagcanvas.min.js" type="text/javascript"></script>
<script type="text/javascript">
    window.onload = function () {
        var canvas = document.getElementById('tag-cloud-canvas');
        var list = document.getElementById('tag-cloud-list');

        if (!canvas || !list) {
            return;
        }

        try {
            TagCanvas.Start('tag-cloud-canvas', 'tag-cloud-list', {
                textColour: '#8dc256',
                outlineColour: '#7ab141',
                reverse: true,
                depth: 0.8,
                maxSpeed: 0.05
            });
        } catch (e) {
            var container = document.getElementById('tag-cloud-container');
            if (container) {
                container.style.display = 'none';
            }
        }
    };
</script>
