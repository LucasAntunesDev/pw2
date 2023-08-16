<?php
//index.php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once('vendor/autoload.php');

$mail = new PHPMailer();

try {
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'mail.eduardoschenato.com.br';
    $mail->Username = 'aulaifrs@eduardoschenato.com.br';
    $mail->Password = '&Et]DNIY1q1#asd$58D';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('aulaifrs@eduardoschenato.com.br', 'Aula IFRS');
    $mail->addAddress('lucasantuneslara06@gmail.com', 'Lucas Antunes');
    $mail->isHTML(1);
    $mail->Subject = "Sérgio Rochet mito!";
    $mail->Body = "<h1>Sérgio Rochet</h1>
    <br>
    <img src='https://live.staticflickr.com/65535/53103833904_6fa81122f2_b.jpg'/>
    <p>Se eu não defendo, eu faço!</p>";
    $mail->AltBody  = 'Sérgio Rochet mito!';

    $mail->send();
    echo 'Mesnagem enviada. Dale Inter!';
} catch (Exception $e) {;
}