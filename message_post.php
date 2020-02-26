<?php
session_start();
require 'db.php';


$name=$_POST['fname'];
$email=$_POST['email'];
$message=$_POST['message'];

$insert= "INSERT INTO messages(name,email,message) values
('$name','$email','$message')";
 $result = mysqli_query($db ,$insert);

$_SESSION['succes'] = 'successfully registered';
header('location:index.php#contact');
?>
