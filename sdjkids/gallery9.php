<?php include('head.php'); ?>
<section class="top">
    <div class="top__container">
        <div class="top__title">Одесса</div>
        <div class="top__subtitle">07/12</div>
        <?php
            $gallery = '9';

            for ($i = 1; $i <= 70; $i++) {
                if ($i == 1) {
                    echo '<div class="gallery__row">';
                }

                echo '<a href="img/gallery/'.$gallery.'/'.$i.'.jpg" data-toggle="lightbox" data-gallery="gallery" class="gallery__item">
                        <img class="lazy" data-original="img/gallery/'.$gallery.'/mini-'.$i.'.jpg">
                    </a>';

                if ($i % 4 == 0) {
                    echo '</div><div class="gallery__row">';
                }
            }
            echo '</div>';
        ?>
    </div>
</section>
<?php include('gallery_footer.php'); ?>
</body>
</html>
