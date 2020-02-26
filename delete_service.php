<?php
require 'db.php';
$id= $_GET['id'];
$select_service="SELECT * FROM services WHERE id=$id ";
$select_service_result=mysqli_query($db , $select_service);
$after_assoc=mysqli_fetch_assoc($select_service_result);

if ($after_assoc['status']==0) {
  $select ="DELETE FROM services WHERE id=$id";
  $result=mysqli_query($db,$select);
  header('location:view_service.php');
}
else {
  header('location:view_service.php');
}

 ?>
