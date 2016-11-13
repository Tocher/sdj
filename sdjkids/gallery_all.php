<?php include('head.php'); ?>
<section class="top">
    <div class="top__container">
        <div class="top__title">ФОТО</div>
        <div class="top__subtitle"></div>
        <?php
            $data = array(
                array('11', 'Первое командное занятие по диджеингу', '12/11/16'),
                array('1', 'Аргумент', '26/10/16'),
                array('2', 'Аквапарк', '28/08/16'),
                array('6', 'Viva Braslav ZTE', '30/07/16'),
                array('3', 'Зубренок', '28/07/16'),
                array('4', 'Зубренок', '24/07/16'),
                array('5', 'Артек', '23/06/13'),
                array('8', 'Турнир по боулингу', '11/12'),
                array('7', 'Рококо Кидс', '10/12'),
                array('9', 'Одесса', '07/12'),
                array('10', 'Артек', '06/12')
            );

            for ($i = 1; $i <= 11; $i++) {
                if ($i == 1) {
                    echo '<div class="gallery__row">';
                }

                $item = $data[$i-1];

                echo '<a href="/sdjkids/gallery_'.$item[0].'.php" class="events__item events__img_item eitem'.$item[0].' gallery__item">
                        <div>'.$item[1].'</div>
                        <div class="events__item-date">'.$item[2].'</div>
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
