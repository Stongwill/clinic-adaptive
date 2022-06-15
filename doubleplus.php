<?php
    $tomail = "rbru-metrika@yandex.ru";
    $from = trim($_POST['email']);
    $numberpas = trim($_POST['number']);
    $data = trim($_POST['data']);
    $message = htmlspecialchars($_POST['message']);
    $message = urldecode($message);
    $message = trim($message);
    
    if($_POST['radios'] == 'set1'){
        $direction = 'Кардиология';
    }
    else if($_POST['radios'] == 'set2'){
        $direction = 'Стамотология';
    }
    else if($_POST['radios'] == 'set3'){
        $direction = 'Физиотерапия';
    }
    else{
        $direction = 'Кардиология';
    }

    $headers = "Почта отправителя: $from" . "\r\n" .
    "Паспортные данные: $numberpas" . "\r\n" . 
    "Выбранное направление: $direction" . "\r\n" . 
    "ФИО: $data" . "\r\n" . 
    "Сообщение: $message" . "\r\n";

    if(mail($tomail, $message, $headers)){
        echo 'Ваше письмо отправлено! В скором времени с Вами свяжутся!';
    }
    else{
        echo 'Увы, но что-то пошло не так';
    }
?>