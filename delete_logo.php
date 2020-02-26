<?php
require 'db.php';
$id= $_GET['id'];

$select_logo="SELECT * FROM logos WHERE id=$id ";
$select_logo_result=mysqli_query($db , $select_logo);
$after_assoc=mysqli_fetch_assoc($select_logo_result);

if ($after_assoc['status']==0) {
  $select ="DELETE FROM logos WHERE id=$id";
  $result=mysqli_query($db,$select);
  header('location:view_logo.php');
}
else {
  header('location:view_logo.php');
}

 ?>
