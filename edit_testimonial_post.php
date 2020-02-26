<?php
require 'db.php';
$id =$_POST['id'];

$testimonial_desp=$_POST['testimonial-desp'];
$testimonial_name=$_POST['testimonial-name'];
$status=$_POST['status'];

if ($_FILES['testimonial_img']['name'] != '') {
  $select_photo="SELECT testimonial_img FROM testimonials WHERE id=$id";
  $select_photo_result = mysqli_query($db ,$select_photo);
  $after_assoc = mysqli_fetch_assoc($select_photo_result);
  $delete_form = 'uploads/testimonials/'.$after_assoc['testimonial_img'];
  unlink($delete_form);

  $uploaded_file = $_FILES['testimonial_img'];
  $after_explode = explode('.' , $uploaded_file['name']);
  $extention = end($after_explode);
  $allowed_extention = array('jpeg','png','gif','jpg');
  if (in_array($extention , $allowed_extention)) {
    if ($uploaded_file['size'] < 5000000) {
      $file_name = $id.'.'.$extention;
      $new_location = 'uploads/testimonials/'.$file_name;
      move_uploaded_file($uploaded_file['tmp_name'] , $new_location);
      $update_photo = "UPDATE testimonials SET testimonial_img='$file_name' WHERE id = $id";
      $update_photo_result = mysqli_query($update_photo);

      $update ="UPDATE testimonials SET testimonial_desp='$testimonial_desp', testimonial_name='$testimonial_name', status='$status' WHERE id=$id";
      $update_result= mysqli_query($db, $update);
      header('location:view_testimonial.php');
    }
    else {
      echo "size is Big";
    }
  }
  else {
    echo "format error";
  }
}
else {

    $update ="UPDATE testimonials SET testimonial_desp='$testimonial_desp', testimonial_name='$testimonial_name', status='$status' WHERE id=$id";
    $update_result= mysqli_query($db, $update);
    header('location:view_testimonial.php');
}
 ?>
