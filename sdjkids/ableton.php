<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ableton</title>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter40426280 = new Ya.Metrika({
                        id:40426280,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/40426280" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-86221782-1', 'auto');
        ga('send', 'pageview');

    </script>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            font-family: Lato-Regular;
            background: #000;
            color: #fff;
            -webkit-font-smoothing: antialiased;
        }

        body {
            min-width: 1200px;
        }

        * {
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
            cursor: pointer;
        }

        @font-face
        {
            font-family: Lato-Regular;
            src: url(Lato-Regular.ttf);
        }
        @font-face
        {
            font-family: Lato-Light;
            src: url(Lato-Light.ttf);
        }
        @font-face
        {
            font-family: Lato-Bold;
            src: url(Lato-Bold.ttf);
        }
        @font-face
        {
            font-family: BebasNeueCyrillic;
            src: url(BebasNeueCyrillic.ttf);
        }

        .container {
            margin: 0 auto;
            text-align: center;
            min-width: 1200px;
        }
        @media (max-width: 1400px) {
            .container {
                max-width: 1200px;
            }
        }
        @media (min-width: 1401px) and (max-width: 1679px) {
            .container {
                max-width: 1200px;
            }
        }
        @media (min-width: 1680px) and (max-width: 1900px) {
            .container {
                max-width: 1600px;
            }
        }
        @media (min-width: 1901px) {
            .container {
                max-width: 1800px;
            }
        }

        .top, .section, .section1, .section2, .section3 {
            min-height: 900px;
        }

        .header {
            width: 100%;
            height: 100px;
            position: fixed;
            background: #000;
            padding: 10px 0;
            z-index: 100;
            top:0;
        }

        .header a {
            display: inline-block;
            color: #fff;
            text-transform: uppercase;
            font-size: 12px;
            vertical-align: top;
            padding-left: 15px;
            padding-right: 15px;
            transition: all .5s;
        }


        .header__link {
            margin: 30px 0;
            font-weight: bold;
            font-family: Lato-Bold;
        }

        .header__link:hover {
            color: #696969;
        }

        .header__logo {
            width: 220px;
            margin-top: 10px;
        }

        .header__desc {
            position: absolute;
            bottom: 10px;
            line-height: normal;
            font-family: BebasNeueCyrillic;
            font-size: 14px;
            letter-spacing: 2.5px;
        }

        .subscribe {
            border: 2px solid rgba(255,255,255,.68);
            border-radius: 5px;
            padding: 5px 0;
            margin: 24px 5px;
            font-size: 10px !important;
        }

        .subscribe:hover {
            background: #fff;
            color: #000;
        }

        .subscribe__modal {
            z-index: 999;
            display: none;
            position: fixed;
            top:0;
            left:0;
            right:0;
            bottom:0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0, .6);
        }
        .subscribe__box {
            text-align: center;
            font-size: 24px;
            font-family: Lato-Light;
            text-transform: uppercase;
            position: absolute;
            width: 40vw;
            margin-left: -20vw;
            left: 50%;
            top: 50%;
            background: #000;
            color: #fff;
            padding: 20px;
        }
        .subscribe__box input {
            display: block;
            width: 90%;
            height: 30px;
            line-height: 30px;
            margin: 30px auto;
        }
        .subscribe__send {
            text-transform: uppercase;
            transition: all .5s;
            cursor: pointer;
            border: 1px solid #fff;
            padding: 8px 18px;
            color: #fff;
            display: inline-block;
            font-size: 18px;
            margin: 0 auto;
        }

        .subscribe__send:hover {
            background: #fff;
            color: #000;
        }

        .footer {
            height: 80px;
            line-height: 80px;
            background: #000;
            position: fixed;
            bottom: 0;
            z-index: 999;
            transition: all .5s;
            width: 100%;
        }

        .footer .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80px;
            max-width: 100%;
            min-width:1240px;
        }

        .footer__left {
            color: #696969;
            font-size: 12px;
            text-transform: uppercase;
        }

        .footer__center {
            min-width: 850px;
        }

        @media (min-width: 1600px) {
            .footer__left {
                font-size: 14px;
            }
            .footer__center {
                padding: 0 40px;
                min-width: 1250px;
            }
            .footer__right {
                font-size: 12px;
            }
        }

        .footer__center a {
            margin: 0 18px;
            font-size: 12px;
            transition: all .5s;
            position: relative;
            color: #fff;
        }
        .footer__center a:hover {
            color: #696969;
            border-color: #696969;
        }

        .footer__phone,
        .footer__mail {
            text-transform: uppercase;
            color: #fff;
        }

        .footer__vk,
        .footer__fb {
            border: 1px solid #fff;
            border-radius: 5px;
            padding: 2px 5px;
        }

        .footer__phone:before {
            background: url(img/icon_phone.png) no-repeat;
        }

        .footer__mail:before {
            background: url(img/icon_mail.png) no-repeat;
        }

        .footer__vk:before {
            top: -3px !important;
            background-size: 25px !important;
            background: url(img/icon_vk.png) no-repeat;
        }

        .footer__fb:before {
            top: -3px !important;
            background: url(img/icon_fb.png) no-repeat;
        }

        .footer__center .regular:before {
            content: '';
            width: 26px;
            height: 26px;
            background-size: 26px;
            position: absolute;
            transition: all .2s;
            left: -30px;
            top: -5px;
        }

        .footer__center a:hover:before {
            background-position: 0 -26px;
        }

        .footer__right {
            text-align: left;
            color: #696969;
            line-height: 14px;
            text-transform: uppercase;
            font-family: Lato-Light;
            font-size: 11px;
            transition: all .5s;
        }

        .footer__right:hover {
            color: #fff;
            cursor: pointer;
        }

        .social {
            height: 26px;
            transition: all .5s;
            background-size: 26px!important;
            background-position: top center!important;
            margin: 0 3px!important;
            display: inline-flex;
            overflow: hidden;
            vertical-align: middle;
            margin-top: -4px !important;
            width: 26px;
        }

        .social img:last-child {
            top: 26px;
        }

        .social img {
            width: 26px;
            height: 26px;
            position: absolute;
            transition: all .2s;
        }
        .social:hover img:first-child {
            margin-top: -26px;
        }
        .social:hover img:last-child {
            top: 0;
        }
        /* kids css */
        .upper {
            background: url('img/ableton_bg.jpg') top center no-repeat;
            background-size: cover;

            height: 40vh;
            min-height: 300px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
            justify-content: center;
        }
        .top {
            display: block;
            min-height: 100vh;
            background-color: #000;
            margin-top: 100px;
            margin-bottom: 80px;
        }
        .top__container {
            width: 100%;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
            justify-content: center;
        }
        .top__title {
            font-family: Lato-Regular;
            text-transform: uppercase;
            font-size: 26px;
        }
        .top__text {
            max-width: 1200px;
            font-family: Lato-Regular;
            font-size: 24px;
            margin: 30px auto;
        }

        .program__title {
            font-family: Lato-Bold;
            font-size: 22px;
        }
        .program__text {
            font-family: Lato-Regular;
            display: inline-block;
            vertical-align: top;
            text-align: left;
            margin: 40px 0 20px;
            font-size: 18px;
        }
        .program__text span {
            font-family: Lato-Light;
        }

        .section {
            height: 100vh;
            overflow: hidden;
        }
        .section1 {
            height: 100vh;
            width: 50%;
            background: url(img/ableton/section1.jpg) no-repeat;
            background-size: cover;
            display: inline-block;
            vertical-align: top;
        }
        .section1 .section__text {
            width: 50%;
        }
        .section2 {
            height: 100vh;
            width: 60%;
            background: url(img/ableton/section2.jpg) no-repeat;
            background-size: cover;
            display: inline-block;
            vertical-align: top;
        }
        .sect2 .section__text {
            width: 40%;
            color: #000;
        }
        .section3 {
            height: 100vh;
            width: 60%;
            background: url(img/ableton/section3.jpg) no-repeat;
            background-size: cover;
            display: inline-block;
            vertical-align: top;
        }
        .sect3 .section__text {
            width: 40%;
            color: #000;
        }
        .section__text {
            padding: 60px 100px 30px;
            display: inline-block;
            vertical-align: top;
            margin-left: -5px;
        }
        .section__title {
            font-family: Lato-Bold;
            margin-bottom: 10px;
        }
        @media (min-width: 1200px) and (max-width: 1299px) {
            .section__text {
                font-size: 72%;
            }
        }
        @media (min-width: 1501px) {
            .sect1 .section__title,
            .sect2 .section__title,
            .sect3 .section__title{
                font-size: 200%;
                line-height: 100%;
            }
            .sect1 .section__text,
            .sect2 .section__text,
            .sect3 .section__text {
                line-height: 22px;
            }
        }
        @media (min-width: 1300px) and (max-width: 1400px) {
            .section__text {
                font-size: 90%;
            }
        }
        @media (min-width: 1401px) and (max-width: 1500px) {
            .section__text {
                font-size: 110%;
            }
        }
    </style>
</head>
<body>
<?php include('menu.html'); ?>
<section class="top">
    <div class="top__container">
        <div class="upper">
            <div class="top__title">
                Ableton Live<br>
                готовим профессиональных саунд-продюсеров<br>курс создания электронной музыки с Ableton live
            </div>
        </div>
        <div class="top__text">
            Пройдя полный курс Ableton Live, получаешь не только углубленные знания пользования<br>
            самой программой, но и познаешь ее силу в создании электронной музыки,<br>
            которая является выбором многих успешных Electronic Dance Music продюсеров.<br>
            В курсе идет речь о дизайне звуков, подробный разбор каналов драм секций,<br>
            вариация паттернов, работа с перкуссией, автоматизация, синтез звуков Bass, Synth,<br>
            создание рэков эффектов и многое другое. А так же сведение собственного<br>
            материала и DIY (Do It Yourself) мастеринга. Курс охватывает такие стили<br>
            как Deep House, House, Main Room House и другие<br>
            Научись создавать house и вскоре твой саунд станет качественным

            <div class="program__text" style="margin-right:40px;">
                Индивидуальное обучение с персональным тренером<br>
                <span>3 этапа по 10 тренингов по 90 минут<br>
                Стоимость одного этапа - 900 рублей</span>
            </div>
            <div class="program__text" style="margin-left:40px;">
                Групповое обучение :<br>
                <span>3 этапа по 10 тренингов по 120 минут<br>
                Стоимость одного этапа 400 рублей</span>
            </div>
            <div class="program__title">Программа</div>
        </div>
    </div>
</section>
<section class="section sect1" style="background: #000;">
    <div class="section1"></div>
    <div class="section__text">
        <div class="section__title">Часть 1<br>
        Первые шаги в цифровом<br>
        музыкальном продакшене</div>
        -	Почему Live?<br>
        -	Краткий обзор основных функций<br>
        -	Внешние аудиоинтерфейсы и их оптимизация<br>
        -	Свойства (вкладка Live > Preferences)<br>
        -	Папка хранения временных файлов<br>
        -	Сохранение проекта<br>
        -	Импорт, экспорт<br>
        -	Браузер Live 9<br>
        -	Обзор Groove Pool<br>
        -	Поиск и Папка User Library<br>
        -	Обзор Instruments<br>
        -	Обзор Audio Effects<br>
        -	Обзор MIDI Effects<br>
        -	Установка плагинов<br>
        -	Браузер и каналы (Сhains)<br>
        -	Посылы (Sends, Aux)<br>
        -	Кроссфэйдер и его режимы<br>
        -	Что такое варпинг<br>
        -	Режимы варпинга<br>
        -	Варп маркеры и транзиенты<br>
        -	Варпинг сложных треков<br>
        -	Режимы сесии и аранжировки<br>
        -	Автоматизация, функция Lock Envelopes<br>
        -	Огибающие (curves) автоматизации<br>
        -	Запись автоматизации в режиме сессии<br>
        -	MIDI клипы, piano roll, редактирование нот<br>
        -	Организация клипов и сцен на каналах<br>
        -	Запуск клипов и квантизация<br>
        -	Вид, свойства клипов<br>
        -	Запись клипов<br>
        -	MIDI Stretch маркеры<br>
        -	Быстрое транспонирование MIDI партий
    </div>
</section>
<section class="section sect2" style="background: #fff;">
    <div class="section__text">
        <div class="section__title">Часть 2<br>
            Продвинутый тренинг</div>
        -	Организация библиотеки сэмплов<br>
        -	Создание Locators когда создается трек<br>
        -	Понятия электронных терминов Synth,<br>
        &nbsp;&nbsp;Chords, Pads, Stabs и т.д.<br>
        -	Обзор Impulse & Simpler<br>
        -	Анализ стилей.<br>
        &nbsp;&nbsp;Классические Drum Sounds<br>
        -	Четверти, доли, ноты. Count Music<br>
        -	Создание битов используя<br>
        &nbsp;&nbsp;Impulse & Simpler<br>
        -	Создание битов используя<br>
        &nbsp;&nbsp;Drum Racks и Audio Clips<br>
        -	Создание Kicks, Claps, Snares, Hats<br>
        -	Программирование простого бита<br>
        &nbsp;&nbsp;используя сэмплы<br>
        -	Groove & Swing<br>
        -	Перкуссия<br>
        -	Программирование бита.<br>
        &nbsp;&nbsp;Создание клипов (patterns)<br>
        -	Pattern switching<br>
        -	Креативное использование<br>
        &nbsp;&nbsp;автоматизации<br>
        -	Использование сэмплов<br>
        -	Синтез звуков используя<br>
        &nbsp;&nbsp;Analog и  Operator<br>
        -	Bass, Chords<br>
        -	Лееринг<br>
        -	MIDI Effects: Arpeggiator,<br>
        &nbsp;&nbsp;Chord, Note Lenght,<br>
        &nbsp;&nbsp;Pitch, Random, Scale, Velocity<br>
        -	Понятие нот. Музыкальная грамота.<br>
        &nbsp;&nbsp;Основы музыкальности<br>
        -	Разработка музыкальных идей<br>
        -	Inserts vs Send/Return FX<br>
        -	Макросы, создание эффектов<br>
        -	Эффекты и саунд дизайн - Falls/Risers
    </div>
    <div class="section2">
        <video style="min-width: 100%;min-height: 100%;" autoplay class="fp-engine" preload="metadata" controls="true" x-webkit-airplay="allow" loop="">
            <source src="https://drive.flowplayer.org/235131/78245-05mixrefinemadzach2810-960p.webm" type="video/webm">
            <source src="http://sdjstudio.com/sdjkids/video.mp4" type="video/mp4">
        </video>
    </div>
</section>
<section class="section sect3" style="background: #fff;">
    <div class="section3"></div>
    <div class="section__text">
        <div class="section__title">Часть 3<br>
            DIY Миксинг и Мастеринг</div>
        -	Элементы микса<br>
        -	Встроенные мастер плагины<br>
        -	Баланс и настройка эффектов<br>
        -	EQ Kick<br>
        -	EQ Beats<br>
        -	EQ Synth<br>
        -	EQ прочих элементов<br>
        -	Настройка баланса<br>
        -	Понятие о динамике. Компрессия<br>
        -	Компрессия для формирования звука<br>
        -	Компрессия для поднятия уровня звука<br>
        -	Параллельная компрессия Drums<br>
        -	Side Chain компрессия<br>
        -	Multiband компрессия<br>
        -	Master Bus компрессия<br>
        -	Панорамирование<br>
        -	Reverb и Echo<br>
        -	Добавление Chorus<br>
        -	Tremolo и Autopan<br>
        -	Автоматизация уровней звука на каналах<br>
        -	Автоматизация фильтров<br>
        -	Автоматизация панорамирования<br>
        -	DIY громкий мастеринг
    </div>
</section>
<?php include('footer.html'); ?>
</body>
</html>