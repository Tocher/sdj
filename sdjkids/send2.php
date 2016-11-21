<?php
if(isset($_POST['name'])) {
    $email_to = "SDJKIDS@MAIL.RU";
    $email_to3 = "tocher99@gmail.com";
    $email_to2 = 'superdjstudio@gmail.com';

$from = 'admin@sdjstudio.com';

    $email_subject = "Заявка на бесплатный урок с сайта";

    $email_message .= "Имя: ".$_POST['name']."<br>\n";
$email_message .= "Телефон: ".$_POST['phone']."<br>\n";
$email_message .= "Дата рождения: ".$_POST['birth']."<br>\n";
$email_message .= "Соц. сети: ".$_POST['social']."<br>\n";
$email_message .= "Email: ".$_POST['email']."<br>\n";
$email_message .= "Из каких источников узнали о нашем проекте?: ".$_POST['know']."<br>\n";
$email_message .= "Почему пробуете себя в диджеинге?: ".$_POST['about']."<br>\n\n";
$email_message .= "Промо код: ".$_POST['promo']."<br>\n";

$headers = "From: ". $from ." <". $from ."> \r\n";
$headers .= "Content-type: text/html; charset=utf-8 \r\n";

@mail($email_to, $email_subject, $email_message, $headers);
@mail($email_to2, $email_subject, $email_message, $headers);
@mail($email_to3, $email_subject, $email_message, $headers);
}
?>