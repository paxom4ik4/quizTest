<?php
if (isset ($_POST['contactFF'])) {
  $to = "pasha.zelenko001@gmail.com";
  $from = "dev.pavel.zelenko@mail.ru";
  $subject = "Заполнена контактная форма на сайте E-Stado";
  $message = "Пользователь остваил заявку.\nEmail пользователя: ".$_POST['user_mail']."\nТелефон пользователя ".$_POST['user_phone']."\nКоличество коров: ".$_POST['number-of-cows']."\nКоличество молока: ".$_POST['amount-of-milk']."Пользователь является: ".$_POST['question-3-choise']."Предпочитаемый способ связи: ".$_POST['contact-choise']".";
 
//   $boundary = md5(date('r', time()));
//   $filesize = '';
//   $headers = "MIME-Version: 1.0\r\n";
//   $headers .= "From: " . $from . "\r\n";
//   $headers .= "Reply-To: " . $from . "\r\n";
//   $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
//   $message="
// Content-Type: multipart/mixed; boundary=\"$boundary\"
 
// --$boundary
// Content-Type: text/plain; charset=\"utf-8\"
// Content-Transfer-Encoding: 7bit
 
// $message";
//      if(is_uploaded_file($_FILES['fileFF']['tmp_name'])) {
//          $attachment = chunk_split(base64_encode(file_get_contents($_FILES['fileFF']['tmp_name'])));
//          $filename = $_FILES['fileFF']['name'];
//          $filetype = $_FILES['fileFF']['type'];
//          $filesize = $_FILES['fileFF']['size'];
//          $message.="
 
// --$boundary
// Content-Type: \"$filetype\"; name=\"$filename\"
// Content-Transfer-Encoding: base64
// Content-Disposition: attachment; filename=\"$filename\"
 
// $attachment";
//      }
//    $message.="
// --$boundary--";
 
//   if ($filesize < 10000000) { // проверка на общий размер всех файлов. Многие почтовые сервисы не принимают вложения больше 10 МБ
//     mail($to, $subject, $message, $headers);
//     echo $_POST['nameFF'].', Ваше сообщение отправлено, спасибо!';
//   } else {
//     echo 'Извините, письмо не отправлено. Размер всех файлов превышает 10 МБ.';
//   }
// }
?>
