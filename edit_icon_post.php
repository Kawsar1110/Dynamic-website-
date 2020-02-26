<?php
require 'db.php';
$id =$_POST['id'];
$social1=$_POST['social1'];
$social2=$_POST['social2'];
$social3=$_POST['social3'];
$social4=$_POST['social4'];

$update ="UPDATE socials SET social1='$social1', social2='$social2', social3='$social3', social4='$social4' WHERE id=$id";
$update_result= mysqli_query($db, $update);
header('location:view_icon.php');

 ?>
