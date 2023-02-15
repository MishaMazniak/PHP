<?php
session_start();

$title = "Contact";
require "blocks/header.php";
?>

<h1 class="mt-5"><?=$title?></h1>

<div class="alert alert-success"><?=$_SESSION['success_mail']?></div>

<form action="check_contact.php" method="post">
    <input type="text" name="user_name" value="<?=$_SESSION['user_name']?>" placeholder="Your name" class="form-control">
        <div class="text-danger"><?=$_SESSION['error_username']?></div>
    <input type="email" name="email" value="<?=$_SESSION['email']?>" placeholder="Your email" class="form-control">
        <div class="text-danger"><?=$_SESSION['error_email']?></div>
    <input type="text" name="subject" value="<?=$_SESSION['subject']?>" placeholder="Title text" class="form-control">
        <div class="text-danger"><?=$_SESSION['error_subject']?></div>
    <textarea name="message" placeholder="Enter your massage" class="form-control"> <?=$_SESSION['message']?> </textarea>
    <button type="submit" class="btn btn-success">Enter</button>
</form>

<?php
require "blocks/footer.php";
?>