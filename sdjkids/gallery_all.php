<?php include('head.php'); ?>
<section class="top">
    <div class="top__container">
        <div class="top__title">Фото</div>
        <div class="top__subtitle"></div>

            <a href="gallery11.php" class="events__item events__img_item eitem11">
                <div>Первое командное занятие по диджеингу</div>
                <div class="events__item-date">12/11/16</div>
            </a>
            <a href="gallery1.php" class="events__item events__img_item eitem4">
                <div>Аргумент</div>
                <div class="events__item-date">26/10/16</div>
            </a>
            <a href="gallery2.php" class="events__item events__img_item eitem3">
                Аквапарк
                <div class="events__item-date">28/08/16</div>
            </a>
            <a href="gallery6.php" class="events__item events__img_item eitem6">
                Viva Braslav ZTE
                <div class="events__item-date">30/07/16</div>
            </a>
            <a href="gallery3.php" class="events__item events__img_item eitem1">
                Зубренок
                <div class="events__item-date">28/07/16</div>
            </a>
            <a href="gallery4.php" class="events__item events__img_item eitem5">
                Зубренок
                <div class="events__item-date">24/07/16</div>
            </a>
            <a href="gallery5.php" class="events__item events__img_item eitem2">
                Артек
                <div class="events__item-date">23/06/13</div>
            </a>
            <a href="gallery8.php" class="events__item events__img_item eitem8">
                Турнир по боулингу
                <div class="events__item-date">11/12</div>
            </a>
            <a href="gallery7.php" class="events__item events__img_item eitem7">
                Рококо Кидс
                <div class="events__item-date">10/12</div>
            </a>
            <a href="gallery9.php" class="events__item events__img_item eitem9">
                Одесса
                <div class="events__item-date">07/12</div>
            </a>
            <a href="gallery10.php" class="events__item events__img_item eitem10">
                Артек
                <div class="events__item-date">06/12</div>
            </a>
        <?php
            for ($i = 1; $i <= 11; $i++) {
                if ($i == 1) {
                    echo '<div class="gallery__row">';
                }

                echo '<a href="sdjkids/gallery_'.$i.'.php" class="gallery__item">
                        <img class="lazy" data-original="img/gallery/'.$i.'.jpg">
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
