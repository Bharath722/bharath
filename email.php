<?php
//store the message

$name = $_POST['name'];
$user = $_POST['email'];
$sub = $_POST['subject'];
$msg = $_POST['message'];

//create email

$to ="bgbharath722@gmail.com";
$headers = "From: $user";
mail($to,$sub,$msg,$headers);
header("location:em.html");
?>