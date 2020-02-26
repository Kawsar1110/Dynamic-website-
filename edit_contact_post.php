<?php
require 'db.php';
$id =$_POST['id'];

$contact_address=$_POST['contact-address'];
$contact_phone=$_POST['contact-phone'];
$contact_email=$_POST['contact-email'];
$status=$_POST['status'];


  $update ="UPDATE contacts SET contact_address='$contact_address', contact_phone='$contact_phone', contact_email='$contact_email', status='$status' WHERE id=$id";
  $update_result= mysqli_query($db, $update);
  header('location:view_contact.php');
 ?>
