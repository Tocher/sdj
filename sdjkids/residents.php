<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Резидент</title>
    <link rel="stylesheet" href="general.css">
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
            font-family: Lato-Regular, Verdana, sans-serif;
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

        .header {
            width: 100%;
            height: 100px;
            position: fixed;
            background: #000;
            padding: 10px 0;
            z-index: 100;
            top: 0;
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
            font-family: Lato-Bold, Verdana, sans-serif;
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
            font-family: BebasNeueCyrillic, Verdana, sans-serif;
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
            font-family: Lato-Light, Verdana, sans-serif;
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
            min-width: 870px;
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
            font-family: Lato-Light, Verdana, sans-serif;
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
        .top {
            min-height: calc(100vh - 180px);
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
            font-family: Lato-Regular, Verdana, sans-serif;
            text-transform: uppercase;
            font-size: 26px;
        }
        .top__subtitle {
            font-family: Lato-Light, Verdana, sans-serif;
            font-size: 24px;
            margin-top: 10px;
        }
        .top__text {
            font-family: Lato-Light, Verdana, sans-serif;
            margin-top: 20px;
            font-size: 24px;
        }
        @media (max-width: 1399px) {
        }
        @media (min-width: 1400px) {
        }
        .program__title {
            font-family: Lato-Bold, Verdana, sans-serif;
            text-transform: capitalize;
            text-align: center;
            margin-top: 20px;
            font-size: 22px;
        }
        .program__text {
            margin-top: 10px;
            font-family: Lato-Light, Verdana, sans-serif;
            display: inline-block;
            text-align: center;
            font-size: 20px;
        }
        .program__abon {
            margin: 20px 0;
            font-size: 22px;
            font-family: Lato-Regular, Verdana, sans-serif;
        }
    </style>
</head>
<body>
<?php include('menu.html'); ?>
<section class="top">
    <div class="top__container">
        <div class="upper">
            <div class="top__title">Резидент SDJKids</div>
            <div class="top__subtitle">Для тех, кто хочет развиваться и<br>профессионально расти вместе с командой SDJ</div>
        </div>
        <div>
            <img src="img/residents_bg.jpg" style="max-width:100%;">
        </div>
        <div class="lower">
            <div class="top__text">
                Дети развивают музыкальный слух и чувство ритма, навыки общения и<br>
                актёрского мастерства. Учатся работать со звуковым оборудованием и<br>
                музыкальным программным обеспечением</div>
            <div class="program__title">Программа</div>
            <div class="program__text">
                - Индивидуальные и самостоятельные тренинги<br>
                - Участие в мероприятиях проекта<br>
                - Продвижение в рамках проекта
            </div>
            <div class="program__abon">Абонентская плата</div>
        </div>
    </div>
</section>
<?php include('footer.html'); ?>
</body>
</html>