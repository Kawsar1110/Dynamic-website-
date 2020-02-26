<?php
session_start();
require 'db.php';

$contact_address=$_POST['contact-address'];
$contact_phone=$_POST['contact-phone'];
$contact_email=$_POST['contact-email'];
$status=$_POST['status'];

$insert= "INSERT INTO contacts (contact_address,contact_phone,contact_email,status) values
('$contact_address','$contact_phone','$contact_email','$status')";
$result = mysqli_query($db , $insert);

$_SESSION['success'] = "You Seccessfully Registeried";
header('location:add_contact.php');

?>
