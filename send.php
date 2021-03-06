<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];


// Формирование самого письма
$title = "У Вас новый подписчик!";
$body = "
<h2>Новый подписчик</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br>
<b>Email:</b> $email<br>
";
// Отправка адреса для подписки
$titleMail = "Новый запрос на рассылку";
$bodyMail = "
<h2>Новый запрос на рассылку!</h2>
<b>Email:</b> $email<br>
";
// Отправка комментария
$titleComm = "У Вас новый комментарий";
$bodyComm = "
<h2>Новый комментарий!</h2>
<b>Комментарий:</b> $message<br>
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function ($str, $level) {
        $GLOBALS['status'][] = $str;
    };

    // Настройки вашей почты
    $mail->Host       = 'smtp.ukr.net'; // SMTP сервера вашей почты
    $mail->Username   = ''; // Логин на почте
    $mail->Password   = ''; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('', 'DepOfInn'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('');

    // Отправка сообщения
    $mail->isHTML(true);
    if ($phone) {
        $mail->Subject = $title;
        $mail->Body = $body;
        $typePhone = 'message';
    } else if ($message) {
        $mail->Subject = $titleComm;
        $mail->Body = $bodyComm;
        $typePhone = 'comment';
    } else {
        $mail->Subject = $titleMail;
        $mail->Body = $bodyMail;
        $typePhone = 'email';
    }


    // Проверяем отравленность сообщения
    if ($mail->send()) {
        $result = "success";
        // Отображение результата
        header('Location: thankyou.php' . '?type=' . $typePhone);
    } else {
        $result = "error";
    }
} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
