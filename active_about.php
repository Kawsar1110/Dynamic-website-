<?php
require 'db.php';
$id=$_GET['id'];
$select_abouts="SELECT * FROM abouts WHERE id=$id ";
$select_abouts_result=mysqli_query($db , $select_abouts);
$after_assoc=mysqli_fetch_assoc($select_abouts_result);
if($after_assoc['status']==0){
  $update_abouts="UPDATE abouts SET status=0 ";
  $update_result=mysqli_query($db,$update_abouts);

  $update_abouts2="UPDATE abouts SET status=1 WHERE id=$id";
  $update_result2=mysqli_query($db,$update_abouts2);

  header('location:view_about.php');
}

 ?>
