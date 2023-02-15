<?php
session_start();

unset($_SESSION['user_name']);
unset($_SESSION['email']);
unset($_SESSION['subject']);
unset($_SESSION['message']);

unset($_SESSION['error_username']);
unset($_SESSION['error_email']);
unset($_SESSION['error_subject']);
unset($_SESSION['error_mess']);

function redirect(){
    header('Location: contact.php');
    exit;
}

$user_name = htmlspecialchars(trim($_POST['user_name']));
$from = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

$_SESSION['user_name'] = $user_name;
$_SESSION['email'] = $from;
$_SESSION['subject'] = $subject;
$_SESSION['message'] = $message;

if(strlen($user_name) <= 1){
$_SESSION['error_username'] = "Name isn't correctly";
redirect();
}
else if(strlen($from) < 5 || strpos($from, '@') == false){
$_SESSION['error_email'] = "Email is wrong";
redirect();
}
else if(strlen($subject) <= 5){
$_SESSION['error_subject'] = "The length of the message is not less 5 words";
redirect();
}
else if(strlen($message) <= 15){
$_SESSION['error_mess'] = "The length of the message is not less 15 words";
redirect();
}
else {
   $subject = "=?utf-8?B?".base64_encode($subject)."?=";
   $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=urf-8\r\n";
   mail('mishamaznyak@gmail.com',$subject,$message ,$headers);
   $_SESSION['success_mail'] = "Good";
   redirect();
}

?>