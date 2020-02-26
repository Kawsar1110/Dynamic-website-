<?php
require 'db.php';
$id= $_GET['id'];
$select_contact="SELECT * FROM contacts WHERE id=$id ";
$select_contact_result=mysqli_query($db , $select_contact);
$after_assoc=mysqli_fetch_assoc($select_contact_result);

if ($after_assoc['status']==0) {
  $select ="DELETE FROM contacts WHERE id=$id";
  $result=mysqli_query($db,$select);
  header('location:view_contact.php');
}
else {
  header('location:view_contact.php');
}

 ?>
