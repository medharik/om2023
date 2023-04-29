<?php 
//recuperer les inputs?
// $np=$_POST['np'];
// $email=$_POST['email'];
// $tel=$_POST['tel'];
// $sujet=$_POST['sujet'];
// $message=$_POST['message'];
extract($_POST);//$np,$email,... qui contienent la valeures des inputs
// XSS
$to="med.harik@gmail.com";
$sujet="Un message de $np :  $sujet ";
$body="<h1>$sujet</h1>";
$body.="<p>Email : $email</p>";
$body.="<p>$tel</p>";
$body.="<p style='color:blue'>$message</p>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
// $headers .= 'From: <webmaster@example.com>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";
if (mail($to,$sujet,$body,$headers)) {
    // redirection vers contact.php?s=yes
  header("location:contact.php?s=yes");
}else{
    header("location:contact.php?s=no");
 
}


?>