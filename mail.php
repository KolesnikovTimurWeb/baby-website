<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$text = $_POST['text'];

$to = "sales@bc-ru.com";
$date = date("d.m.Y");
$time = date("h:i");
$from = $email;
$subject = "Заявка c сайта";


$msg = "
    Имейл: $name /n
    Телефон: $tel /n
    Текст: $text";

 if(mail($to, $subject, $msg, "From: $from ")) {
		header('location: thanks.html');
	} 
	

?>