<?php
  $msg = "";


  if (isset($_POST["submit"])){
    require "phpmailer/PHPMailerAutoload.php";

    function sendemail($to,$from, $fromName, $body){
      $mail = new PHPMailer();
      $mail->setFrom($from, $fromName);
      $mail->addAddress($to);
      $mail->Subject= "Contact form - Email";
      $mail->Body= $body;
      $mail->isHTML(isHtml:false);
      return $mail->send()
    }
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $body = $_POST['body'];

    if (sendemail(to:"codescolorful@gmail.com", $email, $name, $body, $file)){
     $msg= "Email sent";}
     sendemail(to:"jhilene@gmail.com", body:"Hey girllllll");
    else
      $msg = "Email Failed!";

// if (isset($_POST["submit"])){
//   $name = $_POST['name'];
//   $subject = $_POST['subject'];
//   $mailFrom = $_POST['mail'];
//   $message = $_POST['message'];
//
//   $mailTo = 'codescolorful@gmail.com';
//   $headers = "From: ".$mailFrom;
//   $txt = " You have received an e-mail from ".$name.".\n\n".$message;
//
// mail($mailTo, $subject, $txt, $headers);
// header("Location: index.php?mailsend");
//
// }
 ?>

<!-- ERICA KING
6462712865

REMOVE 1037 BRYANT AVE BRONX 10459
EQUIFAX DISPUTE DEPARTMENT

8888260727 ID AND SS

CREDITCHECKTOTAL

GAVE TO KIMIKO -->
