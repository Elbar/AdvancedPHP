<?php
/**
 * Created by PhpStorm.
 * User: fukuro
 * Date: 9/18/15
 * Time: 12:53 PM
 */
    require __DIR__ .'/../PHPMailer/class.phpmailer.php';
    require_once __DIR__ .'/../PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer();


    $mail->isSMTP();
    $mail->Host    =  "smtp.gmail.com";
    $mail->SMTPAuth =true;
    $mail->SMTPSecure = "ssl";
    $mail->Port  =  465;
    $mail->CharSet = "UTF-8";

    $body = file_get_contents('test.txt');
    $mail->Username = $_POST['email'];
    $mail->Password = 'password';
    $mail->SetFrom('Username', 'Системный администратор');
    $mail->Subject   ='Logs of site';
    $mail->MsgHTML($body);
    $address = 'Recipient@mail.ru';
    $mail->AddAddress($address, 'To admin');

    $mail->addAttachment("test.txt");

   if($mail->Send()){
       echo 'Your message has been successfully sent';
   }else{
       echo 'Oops';
   }

header('Refresh: 2; url=index.php');