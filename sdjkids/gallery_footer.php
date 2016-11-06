<?php include('footer.html'); ?>
<script src="../bower_components/jquery_lazyload/jquery.lazyload.js"></script>
<script src="../bower_components/tether/dist/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.0.0/ekko-lightbox.js"></script>
<script>
    $("img.lazy").lazyload({
        effect : "fadeIn"
    });
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: true
        });
    });
</script>