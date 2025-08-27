<?php

if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);


if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "Invalid Email";
    exit;
}

$file = fopen("submission.txt","a");
$date = date("Y-m-d H:i:s");
$entry = "Date: $date \n Name: $name \n Email: $email \n Message: $message ";
echo PHP_EOL;
fwrite($file,$entry);
fclose($file);

echo "Successfully Submitted";

}