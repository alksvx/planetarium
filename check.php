<?php
    $email = $_POST['email']; //записываем email который ввел пользователь в переменную email
    $message = $_POST['message']; //записываем сообщение которое ввел пользователь в переменную message

    $subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?="; 
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

    mail('email', $subject, $message, $headers); //отправка сообщения на почту

    header('Location: /about.php'); //возврат на страницу about после отправки сообщения

?>