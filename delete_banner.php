<?php
require 'db.php';
$id= $_GET['id'];
$select_banner="SELECT * FROM banners WHERE id=$id ";
$select_banner_result=mysqli_query($db , $select_banner);
$after_assoc=mysqli_fetch_assoc($select_banner_result);

if ($after_assoc['status']==0) {
  $select ="DELETE FROM banners WHERE id=$id";
  $result=mysqli_query($db,$select);
  header('location:view_banner.php');
}
else {
  header('location:view_banner.php');
}

 ?>
