<?php
require 'db.php';
$id=$_GET['id'];

$select_contact="SELECT * FROM contacts WHERE id=$id ";
$select_contact_result=mysqli_query($db , $select_logo);
$after_assoc=mysqli_fetch_assoc($select_contact_result);

if($after_assoc['status']==0){
  $update_contact="UPDATE contacts SET status=0 ";
  $update_result=mysqli_query($db,$update_contact);

  $update_contact2="UPDATE contacts SET status=1 WHERE id=$id";
  $update_result2=mysqli_query($db,$update_contact2);

  header('location:view_contact.php');
}

 ?>
