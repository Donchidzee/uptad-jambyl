<?php

require_once('phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

if (!empty($_POST)) {
    $first_name = trim($_POST['user_name']);
    $surname = trim($_POST['user_surname']);
    $name = $first_name . ' ' . $surname;
    $phone = trim($_POST['user_tel']);
    $email = trim($_POST['user_email']);
    $message = trim($_POST['user_message']);
} else {
    die('Error: не все данные заполнены');
}



//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'uptad-jambyl.kz@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'Up137883tAd'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('uptad-jambyl.kz@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('depdoroga@mail.ru');     // Кому будет уходить письмо
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Сообщение с сайта Uptad-Jambyl.kz';
$mail->Body    = 'Имя отправителя: ' .$name  .'<br>Телефон отправителя: ' .$phone. '<br>Почта отправителя: ' .$email .'<br>Текст сообщения: ' .$message;
$mail->AltBody = '';

if(!$mail->send()) {
    die('Произошла ошибка при отправке письма');
} else {
    header('location: /');
}
