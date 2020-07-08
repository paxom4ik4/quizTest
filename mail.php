<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$numberOfCows = $_POST['number-of-cows'];
$amountOfMilk = $_POST['amount-of-milk'];
$whoAreYou = $_POST['question-3-choise'];
$contact = $_POST['contact-choise'];
$userPhone = $_POST['user_phone'];
$userMail= $_POST['user_mail'];


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dev.pavel.zelenko@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'NetRogAi1001'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('dev.pavel.zelenko@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('pasha.zelenko001@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта e-stado';
$mail->Body    = 'Пользователь оставил заявку, его телефон: ' .$userPhone. '<br>Почта этого пользователя: ' .$userMail
 'Количество коров: '.$numberOfCows.'Количество молока: '.$amountOfMilk. 'Является: ' .$whoAreYou. 'Предпочитает связь по'.$contact.;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>