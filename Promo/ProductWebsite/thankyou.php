<?php

require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['u_name']);
$email   = $conn->real_escape_string($_POST['u_email']);
$phone    = $conn->real_escape_string($_POST['phone']);
$message = $conn->real_escape_string($_POST['message']);
$rate = $conn->real_escape_string($_POST['rate']);
$query   = "INSERT into tb_cform (u_name,u_email,phone,message,rate) VALUES('" . $name . "','" . $email . "','" . $phone . "','" . $message . "','" . $rate . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

echo "<script> window.location.assign('final.php'); </script>";

$conn->close();

?>