<?php
session_start();
require 'db.php';

$icon1=$_POST['icon1'];
$icon2=$_POST['icon2'];
$icon3=$_POST['icon3'];
$icon4=$_POST['icon4'];

$insert= "INSERT INTO socials (social1,social2,social3,social4) values
('$icon1','$icon2','$icon3','$icon4')";
$result = mysqli_query($db , $insert);

$_SESSION['success'] = "You Seccessfully Registeried";
header('location:add_icon.php');
?>
