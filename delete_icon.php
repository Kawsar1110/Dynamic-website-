<?php
require 'db.php';
$id= $_GET['id'];

$select_icon="SELECT * FROM socials WHERE id=$id ";
$select_icon_result=mysqli_query($db , $select_icon);
$after_assoc=mysqli_fetch_assoc($select_icon_result);

if ($after_assoc['status']==0) {
  $select ="DELETE FROM socials WHERE id=$id";
  $result=mysqli_query($db,$select);
  header('location:view_icon.php');
}
else {
  header('location:view_icon.php');
}

 ?>
