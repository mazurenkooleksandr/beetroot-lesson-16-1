<?php
$author = $_POST['author'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$comment = $_POST['comment'];
$author = htmlspecialchars($author);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$comment = htmlspecialchars($comment);
$author = urldecode($author);
$email = urldecode($email);
$tel = urldecode($tel);
$comment = urldecode($comment);
$author = trim($author);
$email = trim($email);
$tel = trim($tel);
$comment = trim($comment);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("kakchtoinfo@ukr.net", "Заявка с сайта", "ФИО:".$author.". E-mail: ".$email "Телефон:".$tel. "Комментарий:".$comment.,"From: abcdfg207@i.ua \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>