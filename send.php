<?php

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$product = $_POST['product'];



$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;
$mail->Username = 'dzharuzov@mail.ru';
$mail->Password = '$dk820&123';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('dzharuzov@mail.ru');
$mail->addAddress('smnrlnv@gmail.com');

$mail->isHTML(true);

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. '<br>Почта этого пользователя: ' .$email. 'на продукт:'.product;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>