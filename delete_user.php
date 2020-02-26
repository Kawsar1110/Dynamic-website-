<?php
session_start();

require 'db.php';
$id= $_GET['id'];
$select_user="SELECT * FROM users WHERE id=$id ";
$select_user_result=mysqli_query($db , $select_user);
$after_assoc=mysqli_fetch_assoc($select_user_result);

if ($_SESSION['id'] != $after_assoc['id']) {
  if ($_SESSION['role']==2 || $_SESSION['role']==3) {
      header('location:user.php');
  }
  else {
    $select ="DELETE FROM users WHERE id=$id";
    $result=mysqli_query($db,$select);
    header('location:user.php');
  }
}
else {
    header('location:user.php');
}

 ?>
