<?php
require 'db.php';
$id= $_GET['id'];

$select_testimonial="SELECT * FROM testimonials WHERE id=$id ";
$select_testimonial_result=mysqli_query($db , $select_testimonial);
$after_assoc=mysqli_fetch_assoc($select_testimonial_result);

if ($after_assoc['status']==0) {
  $select ="DELETE FROM testimonials WHERE id=$id";
  $result=mysqli_query($db,$select);
  header('location:view_testimonial.php');
}
else {
  header('location:view_testimonial.php');
}

 ?>
