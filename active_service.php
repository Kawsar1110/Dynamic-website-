<?php
require 'db.php';
$id=$_GET['id'];

$select_service="SELECT * FROM services WHERE id=$id ";
$select_service_result=mysqli_query($db , $select_service);
$after_assoc=mysqli_fetch_assoc($select_service_result);
if($after_assoc['status']==0){
  // $update_service="UPDATE services SET status=0 ";
  // $update_result=mysqli_query($db,$update_service);

  $update_service2="UPDATE services SET status=1 WHERE id=$id";
  $update_result2=mysqli_query($db,$update_service2);

  header('location:view_service.php');
}

 ?>
