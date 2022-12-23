<?php
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   require 'phpmailer/src/Exception.php';
   require 'phpmailer/src/PHPMailer.php';

   $mail = new PHPMailer(true);
   $mail->CharSet = 'UTF-8';
   $mail->setLanguage('ru' , 'phpmailer/language/');
   $mail->ISHTML(true);

   // Від кого лист
   $mail->setFrom('test@gmail.com' , 'Test');
   // Кому відправити
   $mail->addAddress('loenko99@gmail.com');
   // Tema листа
   $mail->Subject = 'Test test';

   // Pyka
   $hand = "Правая";
   if($_POST['hand' ] == "left"){
   $hand = "левая";
   }

   // Teлo nuсьма
   $body = '<h1>встречайте супер письмо!</h1>';
   
   if(trim(!empty($_POST['name']))) {
      $body.='<p><strong>MMA:</strong> '.$_POST['name'].'</p>';
   }
   if(trim(!empty($_POST['email']))){
      $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
   }
   if(trim(!empty($_POST['hand']))){
      $body.='<p><strong>Pyka:</strong> '.$hand.'</p>';
   }
   if(trim(!empty($_POST['age']))){
      $body.='<p><strong>Bo3paсT:</strong> '.$_POST['age'].'</p>';
   }
   if(trim(!empty($_POST['message']))){
      $body.='<p><strong>Сoобшение:</strong> '.$_POST['message'].'</p>';
   }

   // Прикріпити файл
   if(!empty($_FILES['image']['tmp_name'])) {
      // Шлях завантаження файлу
      $filePath = __DIR__ . "/files/" . $_FILES['image']['name'];
      // Завантажуємо файл
      if (copy($_FILES['image']['tmp_name'], $filePath)) {
         $fileAttach = $filePath;
         $body.='<p><strong>Фото в додатку</strong>';
         $mail->addAttachment($fileAttach);
      }
   }

   $mail->Body = $body ;

   // Відправляємо
   if (!$mail->send()) {
      $message = 'Error';
   } else {
      $message = 'Data sent!';
   }

   $response = ['message' => $message];

   header('Content-type: application/json');
   echo json_encode($response);
?>