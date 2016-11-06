<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>kids</title>
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
            margin: 10px 0;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
            justify-content: center;
        }
        .lower {
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
            font-family: Lato-Regular;
            text-transform: uppercase;
            font-size: 26px;
        }
        .top__subtitle {
            font-family: Lato-Regular;
            font-size: 26px;
            margin-top: 10px;
        }
        .top__text {
            margin-top: 20px;
            font-size: 24px;
        }
        @media (max-width: 1399px) {
        }
        @media (min-width: 1400px) {
        }
        .program__title {
            font-family: Lato-Bold;
            text-transform: capitalize;
            text-align: center;
            margin-top: 20px;
            font-size: 22px;
        }
        .program__text {
            margin-top: 10px;
            font-family: Lato-Light;
            display: inline-block;
            text-align: center;
            font-size: 20px;
        }
        .tutorial__button-wrap {
            text-align: center;
            left: 0;
            width: 100%;
            margin-top: 50px;
        }
        .tutorial__button {
            display: inline-block;
            border: 1px solid #fff;
            padding: 8px 30px;
            text-transform: uppercase;
            transition: all .5s;
            cursor: pointer;
        }
        .tutorial__button:hover {
            background: #fff;
            color: #000;
        }
    </style>
    <style>

        .form-service {
            display: inline-flex;
            flex-direction: column;
            align-items: flex-start;
            padding-left: 26px;
            width: 50%;
        }
        .agreement__accept-mini {
            font-size: 14px;
            text-transform: uppercase;
            text-align: center;
            cursor: pointer;
            padding: 5px 0;
        }
        .agreement__accept-mini [id^=service1],
        .agreement__accept-mini [id^=service2],
        .agreement__accept-mini [id^=service3],
        .agreement__accept-mini [id^=service4],
        .agreement__accept-mini [id^=service5]
        {
            display: none;
        }
        .agreement__accept-mini label {
            cursor: pointer;
            position: relative;
        }
        .agreement__accept-mini [id^=service1] + label:before,
        .agreement__accept-mini [id^=service2] + label:before,
        .agreement__accept-mini [id^=service3] + label:before,
        .agreement__accept-mini [id^=service4] + label:before,
        .agreement__accept-mini [id^=service5] + label:before
        {
            content: '';
            display: inline-block;
            color: green;
            -webkit-transform: scale(0);
            transform: scale(0);
            -webkit-transition: 0.3s;
            transition: 0.3s;
            position: absolute;
            left: -23px;
            top: 6px;
            background: #000;
            width: 8px;
            height: 8px;
        }
        .agreement__accept-mini [id^=service1]:checked + label:before,
        .agreement__accept-mini [id^=service2]:checked + label:before,
        .agreement__accept-mini [id^=service3]:checked + label:before,
        .agreement__accept-mini [id^=service4]:checked + label:before,
        .agreement__accept-mini [id^=service5]:checked + label:before
        {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
        .agreement__box-mini {
            border: 1px solid #ccc;
            width: 14px;
            height: 14px;
            position: absolute;
            top: 3px;
            left: -26px;
        }



        .agreement__accept {
            line-height: 26px;
            font-size: 18px;
            font-family: Lato-Light;
            text-transform: uppercase;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-top: 1px solid #333;
            padding: 10px 30px 0 70px;
        }
        .agreement__accept [id^=c]{
            display: none;
        }
        .agreement__accept label {
            cursor: pointer;
            position: relative;
        }
        .agreement__accept [id^=c] + label:before{
            content: '';
            display: inline-block;
            color: green;
            -webkit-transform: scale(0);
            transform: scale(0);
            -webkit-transition: 0.3s;
            transition: 0.3s;
            position: absolute;
            left: -32px;
            top: 3px;
            background: #000;
            width: 14px;
            height: 14px;
        }
        .agreement__accept [id^=c]:checked + label:before{
            -webkit-transform: scale(1);
            transform: scale(1);
        }
        .agreement__box {
            border: 1px solid #ccc;
            width: 30px;
            height: 30px;
            position: absolute;
            top: -5px;
            left: -40px;
        }
        .agreement__send {
            padding: 8px 15px;
            border: 1px solid #ccc;
            background: #fff;
            -webkit-appearance: none;
            -webkit-user-select: none;
            font-size: 20px;
            width: 200px;
            margin: 40px auto 0;
            text-align: center;
            display: block;
            transition: all .5s;
            cursor: pointer;
        }
        .agreement__send:hover {
            background: #000;
            color: #fff;
        }

        .modal-open {
            overflow: hidden;
        }
        .modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1050;
            display: none;
            overflow: hidden;
            -webkit-overflow-scrolling: touch;
            outline: 0;
            color: #000;
        }
        .modal.fade .modal-dialog {
            transition:         transform .3s ease-out;
            transform: translate(0, -25%);
        }
        .modal.in .modal-dialog {
            transform: translate(0, 0);
        }
        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto;
        }
        .modal-dialog {
            position: relative;
            width: auto;
            margin: 10px;
        }
        .modal-content {
            position: relative;
            background-clip: padding-box;
            border: 1px solid #999;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 6px;
            outline: 0;
            box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
            background-color: #fff;
        }
        .modal-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1040;
            background-color: #000;
        }
        .modal-backdrop.fade {
            filter: alpha(opacity=0);
            opacity: 0;
        }
        .modal-backdrop.in {
            filter: alpha(opacity=50);
            opacity: .5;
        }
        .modal-header {
            padding: 35px 15px 15px;
            background: #fff;
            color: #000;
            text-align: center;
        }
        .modal-header .close {
            margin-top: -15px;
            float: right;
            font-size: 42px;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #000;
            opacity: .2;
            border-radius: 50px;
            -webkit-appearance: none;
            padding: 0;
            cursor: pointer;
            background: none;
            border: 0;
            transition: all .5s;
        }
        .modal-header .close:hover {
            opacity: 1;
        }
        .modal-title {
            margin: 0;
            line-height: 1.42857143;
            text-align: center;
            display: inline-block;
            padding: 0 15px 10px;
            border-bottom: 1px solid #333;
        }
        .modal-body-top {
            height: 100%;
            overflow: hidden;
        }
        .modal-body {
            position: relative;
            padding: 15px 0;
            background: #fff;
            color: #000;
            height: 70vh;
            overflow-y: scroll;
            overflow-x: hidden;
        }
        .modal-tabs {
            width: 100%;
            overflow-x: hidden;
            overflow-y: auto;
            height: 100%;
        }
        .modal-tab-1,
        .modal-tab-2 {
            transition: all .5s;
            width: 100%;
            display: inline-block;
            vertical-align: top;
            padding: 0 6vw;
        }
        .modal-tab-2 {
            height: 100%;
            position: absolute;
            top: 0;
            margin-left: 100%;
        }
        .modal-footer {
            display: none;
        }
        .modal-footer,
        .modal-footer2 {
            padding: 15px 15px 35px;
            background: #fff;
            color: #000;
            text-align: center;
        }
        .modal-footer .btn + .btn {
            margin-bottom: 0;
            margin-left: 5px;
        }
        .modal-footer .btn-group .btn + .btn {
            margin-left: -1px;
        }
        .modal-footer .btn-block + .btn-block {
            margin-left: 0;
        }
        .modal-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll;
        }
        @media (min-width: 768px) {
            .modal-dialog {
                width: 900px;
                min-width: 600px;
                margin: 30px auto;
            }
            .modal-content {
                -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
                box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            }
            .modal-sm {
                width: 300px;
            }
        }


        .form-control{display:block;width:100%;height:34px;padding:0 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-webkit-transition:border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s, box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s, box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6)}.form-control::-moz-placeholder{color:#999;opacity:1}.form-control:-ms-input-placeholder{color:#999}.form-control::-webkit-input-placeholder{color:#999}.form-control::-ms-expand{border:0;background-color:transparent}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{background-color:#eee;opacity:1}.form-control[disabled],fieldset[disabled] .form-control{cursor:not-allowed}textarea.form-control{height:auto}input[type="search"]{-webkit-appearance:none}@media screen and (-webkit-min-device-pixel-ratio:0){input[type="date"].form-control,input[type="time"].form-control,input[type="datetime-local"].form-control,input[type="month"].form-control{line-height:34px}input[type="date"].input-sm,input[type="time"].input-sm,input[type="datetime-local"].input-sm,input[type="month"].input-sm,.input-group-sm input[type="date"],.input-group-sm input[type="time"],.input-group-sm input[type="datetime-local"],.input-group-sm input[type="month"]{line-height:30px}input[type="date"].input-lg,input[type="time"].input-lg,input[type="datetime-local"].input-lg,input[type="month"].input-lg,.input-group-lg input[type="date"],.input-group-lg input[type="time"],.input-group-lg input[type="datetime-local"],.input-group-lg input[type="month"]{line-height:46px}}.form-group{margin-bottom:15px}.radio,.checkbox{position:relative;display:block;margin-top:10px;margin-bottom:10px}.radio label,.checkbox label{min-height:20px;padding-left:20px;margin-bottom:0;font-weight:normal;cursor:pointer}.radio input[type="radio"],.radio-inline input[type="radio"],.checkbox input[type="checkbox"],.checkbox-inline input[type="checkbox"]{position:absolute;margin-left:-20px;margin-top:4px \9}.radio+.radio,.checkbox+.checkbox{margin-top:-5px}.radio-inline,.checkbox-inline{position:relative;display:inline-block;padding-left:20px;margin-bottom:0;vertical-align:middle;font-weight:normal;cursor:pointer}.radio-inline+.radio-inline,.checkbox-inline+.checkbox-inline{margin-top:0;margin-left:10px}input[type="radio"][disabled],input[type="checkbox"][disabled],input[type="radio"].disabled,input[type="checkbox"].disabled,fieldset[disabled] input[type="radio"],fieldset[disabled] input[type="checkbox"]{cursor:not-allowed}.radio-inline.disabled,.checkbox-inline.disabled,fieldset[disabled] .radio-inline,fieldset[disabled] .checkbox-inline{cursor:not-allowed}.radio.disabled label,.checkbox.disabled label,fieldset[disabled] .radio label,fieldset[disabled] .checkbox label{cursor:not-allowed}.form-control-static{padding-top:7px;padding-bottom:7px;margin-bottom:0;min-height:34px}.form-control-static.input-lg,.form-control-static.input-sm{padding-left:0;padding-right:0}.input-sm{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-sm{height:30px;line-height:30px}textarea.input-sm,select[multiple].input-sm{height:auto}.form-group-sm .form-control{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.form-group-sm select.form-control{height:30px;line-height:30px}.form-group-sm textarea.form-control,.form-group-sm select[multiple].form-control{height:auto}.form-group-sm .form-control-static{height:30px;min-height:32px;padding:6px 10px;font-size:12px;line-height:1.5}.input-lg{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-lg{height:46px;line-height:46px}textarea.input-lg,select[multiple].input-lg{height:auto}.form-group-lg .form-control{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.form-group-lg select.form-control{height:46px;line-height:46px}.form-group-lg textarea.form-control,.form-group-lg select[multiple].form-control{height:auto}.form-group-lg .form-control-static{height:46px;min-height:38px;padding:11px 16px;font-size:18px;line-height:1.3333333}.has-feedback{position:relative}.has-feedback .form-control{padding-right:42.5px}.form-control-feedback{position:absolute;top:0;right:0;z-index:2;display:block;width:34px;height:34px;line-height:34px;text-align:center;pointer-events:none}.input-lg+.form-control-feedback,.input-group-lg+.form-control-feedback,.form-group-lg .form-control+.form-control-feedback{width:46px;height:46px;line-height:46px}.input-sm+.form-control-feedback,.input-group-sm+.form-control-feedback,.form-group-sm .form-control+.form-control-feedback{width:30px;height:30px;line-height:30px}.has-success .help-block,.has-success .control-label,.has-success .radio,.has-success .checkbox,.has-success .radio-inline,.has-success .checkbox-inline,.has-success.radio label,.has-success.checkbox label,.has-success.radio-inline label,.has-success.checkbox-inline label{color:#3c763d}.has-success .form-control{border-color:#3c763d;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-success .form-control:focus{border-color:#2b542c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #67b168;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #67b168}.has-success .input-group-addon{color:#3c763d;border-color:#3c763d;background-color:#dff0d8}.has-success .form-control-feedback{color:#3c763d}.has-warning .help-block,.has-warning .control-label,.has-warning .radio,.has-warning .checkbox,.has-warning .radio-inline,.has-warning .checkbox-inline,.has-warning.radio label,.has-warning.checkbox label,.has-warning.radio-inline label,.has-warning.checkbox-inline label{color:#8a6d3b}.has-warning .form-control{border-color:#8a6d3b;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-warning .form-control:focus{border-color:#66512c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #c0a16b;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #c0a16b}.has-warning .input-group-addon{color:#8a6d3b;border-color:#8a6d3b;background-color:#fcf8e3}.has-warning .form-control-feedback{color:#8a6d3b}.has-error .help-block,.has-error .control-label,.has-error .radio,.has-error .checkbox,.has-error .radio-inline,.has-error .checkbox-inline,.has-error.radio label,.has-error.checkbox label,.has-error.radio-inline label,.has-error.checkbox-inline label{color:#a94442}.has-error .form-control{border-color:#a94442;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-error .form-control:focus{border-color:#843534;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #ce8483;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #ce8483}.has-error .input-group-addon{color:#a94442;border-color:#a94442;background-color:#f2dede}.has-error .form-control-feedback{color:#a94442}.has-feedback label~.form-control-feedback{top:25px}.has-feedback label.sr-only~.form-control-feedback{top:0}.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#737373}@media (min-width:768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-static{display:inline-block}.form-inline .input-group{display:inline-table;vertical-align:middle}.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn,.form-inline .input-group .form-control{width:auto}.form-inline .input-group>.form-control{width:100%}.form-inline .control-label{margin-bottom:0;vertical-align:middle}.form-inline .radio,.form-inline .checkbox{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.form-inline .radio label,.form-inline .checkbox label{padding-left:0}.form-inline .radio input[type="radio"],.form-inline .checkbox input[type="checkbox"]{position:relative;margin-left:0}.form-inline .has-feedback .form-control-feedback{top:0}}.form-horizontal .radio,.form-horizontal .checkbox,.form-horizontal .radio-inline,.form-horizontal .checkbox-inline{margin-top:0;margin-bottom:0;padding-top:7px}.form-horizontal .radio,.form-horizontal .checkbox{min-height:27px}.form-horizontal .form-group{margin-left:-15px;margin-right:-15px}@media (min-width:768px){.form-horizontal .control-label{text-align:right;margin-bottom:0;padding-top:7px}}.form-horizontal .has-feedback .form-control-feedback{right:15px}@media (min-width:768px){.form-horizontal .form-group-lg .control-label{padding-top:11px;font-size:18px}}@media (min-width:768px){.form-horizontal .form-group-sm .control-label{padding-top:6px;font-size:12px}}.clearfix:before,.clearfix:after,.form-horizontal .form-group:before,.form-horizontal .form-group:after{content:" ";display:table}.clearfix:after,.form-horizontal .form-group:after{clear:both}
        .col-form-label {
            margin-bottom: 5px;
            display: block;
        }
        .form {
            width: 600px;
            margin: 0 auto;
        }
        .form-half {
            width: 50%;
            padding-right: 20px;
            display: inline-flex;
            flex-direction: column;
        }
        .form-half-right {
            width: 49%;
            padding-left: 20px;
            display: inline-flex;
            flex-direction: column;

        }

        .has-error .help-block, .has-error .control-label, .has-error .radio, .has-error .checkbox, .has-error .radio-inline, .has-error .checkbox-inline, .has-error.radio label, .has-error.checkbox label, .has-error.radio-inline label, .has-error.checkbox-inline label {
            display: none;
        }
    </style>
</head>
<body>
<?php include('menu.html'); ?>
<section class="top">
    <div class="top__container">
        <div class="upper">
            <div class="top__title">Бесплатный урок</div>
        </div>
        <div>
            <img src="img/lessons_bg.jpg" style="max-width:100%;">
        </div>
        <div class="lower">
            <div class="program__title">Программа</div>
            <div class="program__text">
                Кто такие диджеи сегодня?<br>
                От дивана до танцпола, от мечты к цели<br>
                О проекте SDJKids<br>
                Обзор оборудования<br>
                Проверка чувства ритма<br>
                Сведи свои треки сам<br>
                Селфи на память
            </div>
        </div>
        <div class="tutorial__button-wrap">
            <div class="tutorial__button">отправить заявку</div>
        </div>
    </div>
</section>
<?php include('footer.html'); ?>

<div id="agreement" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Заявка на бесплатный урок</h4>
            </div>
            <div class="modal-body">
                <div class="modal-body-top">
                    <div class="modal-tabs">
                        <div class="modal-tab-1">
                            <form class="form">
                                <div class="form-group row form-half">
                                    <label for="f-name" class="col-xs-2 col-form-label">Имя и Фамилия</label>
                                    <div class="col-xs-10">
                                        <input class="form-control" data-validation="required" type="text" placeholder="Ваше имя и фамилия" id="f-name">
                                    </div>
                                </div>
                                <div class="form-group row form-half-right">
                                    <label for="f-birth" class="col-xs-2 col-form-label">Дата рождения?</label>
                                    <div class="col-xs-10">
                                        <input class="form-control" style="-webkit-appearance: none;" data-validation="required" type="date" id="f-birth">
                                    </div>
                                </div>
                                <div class="form-group row form-half">
                                    <label for="f-phone" class="col-xs-2 col-form-label">Ваш контактный телефон для связи?</label>
                                    <div class="col-xs-10">
                                        <input class="form-control" data-validation="required" type="text" placeholder="+375 (**) *** ** **" id="f-phone">
                                    </div>
                                </div>
                                <div class="form-group row form-half-right">
                                    <label for="f-social" class="col-xs-2 col-form-label">Ссылка на вашу социальную сеть?</label>
                                    <div class="col-xs-10">
                                        <input class="form-control" data-validation="required" type="text" placeholder="vk.com/id11111" id="f-social">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="f-email" class="col-xs-2 col-form-label">Ваш E-mail</label>
                                    <div class="col-xs-10">
                                        <input class="form-control" data-validation="email" type="text" id="f-email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="f-know" class="col-xs-2 col-form-label">Из каких источников узнали о нашем проекте?</label>
                                    <div class="col-xs-10">
                                        <input class="form-control" data-validation="required" type="text" id="f-know">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="f-about" class="col-xs-2 col-form-label">Для чего Вам нужен бесплатный урок?</label>
                                    <div class="col-xs-10">
                                        <input class="form-control" data-validation="required" type="text" id="f-about">
                                    </div>
                                </div>
                                <button type="submit" class="agreement__send btn btn-primary">Отправить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer2">
                <!--<div class="agreement__accept">-->
                    <!--<input class="agreement__accept-box" type="checkbox" name="c1" id="c1" />-->
                    <!--<label for="c1"><div class="agreement__box"></div>я принимаю условия договора оферты</label>-->
                <!--</div>-->
            </div>
            <div class="modal-footer"></div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    var tutorialModal = new Modal({
        el: document.getElementById('agreement')
    });

    var dialog = $('.modal-dialog');

    $('.tutorial__button').click(function() {
        tutorialModal.show();
        var mTop = (window.innerHeight - dialog.height()) / 2;
        dialog.css('margin-top', mTop + 'px');

        var form = $('.form');
        form.css('margin-top', ($('.modal-tab-2').height() - form.height()) / 2 + 'px');
    });

    $('.close').click(function () {
        tutorialModal.hide();
    });

    var accept = false;
    var modalTabs = $('.modal-tabs');
    $('.agreement__accept-box').change(function() {
        accept = !accept;

        $('.modal-tab-2').css('margin-left', accept ? '0' : '100%');
        $('.modal-tab-1').css('margin-left', accept ? '-100%' : '0');

        $('.modal-title').animate({
            opacity: 0
        }, 'slow', function() {
            $('.modal-title').html(accept ? 'Заявка на бесплатный урок' : 'Публичный договор на обучение в школе диджеев SDJKids');
            $('.modal-title').animate({opacity:1}, 'fast');
        });
    });

    $('.form-group').change(function() {
        $(this).isValid();
    });

    $('.agreement__send').click(function (e) {
        e.preventDefault();
        var form = $('.form');

        console.log(form.find('#f-birth'));

        if (!form.isValid()) return;

        var data = {
            name: form.find('#f-name').val(),
            birth: form.find('#f-birth').val(),
            phone: form.find('#f-phone').val(),
            social: form.find('#f-social').val(),
            know: form.find('#f-know').val(),
            about: form.find('#f-about').val(),
            email: form.find('#f-email').val()
        };

        $.ajax({
            method: 'POST',
            url: 'send2.php',
            data: data
        });

        tutorialModal.hide();
    });
</script>
</body>
</html>