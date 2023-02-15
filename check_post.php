<?php
$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

if(trim($name) == "" || trim($pass) == ""){
    echo "Not all data entered";
}
else if(!str_contains($email, '@')){
    echo "Data isn't correctly";
}
else if($pass == "qwerty"){
    echo "Password is wrong";
}
else header('Location: https://itproger.com');
