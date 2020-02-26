<?php
require 'db.php';
$id= $_GET['id'];
$select_about="SELECT * FROM abouts WHERE id=$id ";
$select_about_result=mysqli_query($db , $select_about);
$after_assoc=mysqli_fetch_assoc($select_about_result);

if ($after_assoc['status']==0) {
  $select ="DELETE FROM abouts WHERE id=$id";
  $result=mysqli_query($db,$select);
  header('location:view_about.php');
}
else {
  header('location:view_about.php');
}

 ?>
