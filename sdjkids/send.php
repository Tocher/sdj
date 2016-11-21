<?php
if(isset($_POST['name'])) {
    $email_to = "SDJKIDS@MAIL.RU";
    $email_to3 = "tocher99@gmail.com";
    $email_to2 = 'superdjstudio@gmail.com';


    $email_subject = "Заявка с сайта";
    
    $email_message .= "Имя: ".$_POST['name']."<br>\n";
    $email_message .= "Телефон: ".$_POST['phone']."<br>\n";
    $email_message .= "Дата рождения: ".$_POST['birth']."<br>\n";
    $email_message .= "Соц. сети: ".$_POST['social']."<br>\n";
    $email_message .= "Из каких источников узнали о нашем проекте?: ".$_POST['know']."<br>\n";
    $email_message .= "Почему пробуете себя в диджеинге?: ".$_POST['about']."<br>\n";
    $email_message .= "<br>\nКурсы:<br>\n";
    $email_message .= "Базовый курс: ".$_POST['service1']."<br>\n";
    $email_message .= "SDJKids: ".$_POST['service2']."<br>\n";
    $email_message .= "Ableton Live: ".$_POST['service3']."<br>\n";
    $email_message .= "Индивидуальный: ".$_POST['service4']."<br>\n";
    $email_message .= "Групповой: ".$_POST['service5']."<br>\n\n";
    $email_message .= "Промо код: ".$_POST['promo']."<br>\n";

	$headers = 'From: sdjkids'."\r\n".
		"Content-type: text/html; charset=utf-8 \r\n".
		"Reply-To: sdjkids <sdjkids@mail.ru>"."\r\n";
		//'X-Mailer: PHP/' . phpversion();

    @mail($email_to, $email_subject, $email_message, $headers);
    @mail($email_to2, $email_subject, $email_message, $headers);
    @mail($email_to3, $email_subject, $email_message, $headers);
}
?>
