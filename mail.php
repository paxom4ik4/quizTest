<?php 

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$numberOfCows = $_POST['number-of-cows'];
$amountOfMilk = $_POST['amount-of-milk'];
$position = $_POST['position'];
$contactChoise = $_POST['contact-choise'];
$userMail = $_POST['user_mail'];
$userPhone = $_POST['user_phone'];

$title = "Заявка с сайта E-STADO";
$body = "
<h2>Новое письмо</h2>
<b>Телефон Пользователя:</b> $userPhone<br>
<b>E-mail Пользователя:</b> $userMail<br>
<b>Количество коров:</b> $numberOfCows<br>
<b>Количество мололка:</b> $amountOfMilk<br>
<b>Должность:</b> $position <br>
<b>Предпочитаемый способ связи:</b> $contactChoise <br>
";

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'dev.pavel.zelenko@gmail.ru'; // Логин на почте
    $mail->Password   = 'NetrogaI1234'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('dev.pavel.zelenko@gmail.ru', 'E-STADO TEST'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('pasha.zelenko001@gmail.com');  
    // Прикрипление файлов к письму

    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;    

    // Проверяем отравленность сообщения
    if ($mail->send()) {$result = "success";} 
    else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

?>