<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 9/18/15
 * Time: 12:53 PM
 */
    require_once __DIR__. '/../PHPMailer/PHPMailerAutoload.php';
    require_once __DIR__ .'/../PHPMailer/class.phpmailer.php';

    $mail = new PHPMailer();


    $mail->isSMTP();
    $mail->Host    =  "smtp.gmail.com";
    $mail->SMTPAuth =true;
    $mail->SMTPSecure = "ssl";
    $mail->Port  =  465;
    $mail->CharSet = "UTF-8";

    $body = file_get_contents('test.txt');
    $mail->Username = 'Elbar.israilov@gmail.com';
    $mail->Password = 'e1l2b3a4r5';
    $mail->SetFrom('Elbar.israilov', 'Системный администратор');
    $mail->Subject   ='Логи сайта';
    $mail->MsgHTML($body);
    $address = 'Elbar_israilov@mail.ru';
    $mail->AddAddress($address, 'Админу сайта');

    $mail->addAttachment("test.txt");

   if($mail->Send()){
       echo 'Ваше письмо успешно отправлено';
   }else{
       echo 'Oops';
   }
/*
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  // here we use the php mail function
  // to send an email to:
  // you@yourdomain.com
  mail( "Elbar_israilov@mail.ru", "Feedback Form Results",$message, "From: $email" );
    */
header('Refresh: 2; url=index.php');