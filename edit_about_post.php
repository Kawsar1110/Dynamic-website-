<?php
require 'db.php';
$id =$_POST['id'];

$about_title=$_POST['about-title'];
$about_desp=$_POST['about-desp'];
$about_sub_title=$_POST['about-sub-title'];
$feature =$_POST['feature'];
$status=$_POST['status'];

if ($_FILES['about_img']['name'] != '') {
  $select_photo="SELECT about_img FROM abouts WHERE id=$id";
  $select_photo_result = mysqli_query($db ,$select_photo);
  $after_assoc = mysqli_fetch_assoc($select_photo_result);
  $delete_form = 'uploads/abouts/'.$after_assoc['about_img'];
  unlink($delete_form);

  $uploaded_file = $_FILES['about_img'];
  $after_explode = explode('.' , $uploaded_file['name']);
  $extention = end($after_explode);
  $allowed_extention = array('jpeg','png','gif','jpg');
  if (in_array($extention , $allowed_extention)) {
    if ($uploaded_file['size'] < 5000000) {
      $file_name = $id.'.'.$extention;
      $new_location = 'uploads/abouts/'.$file_name;
      move_uploaded_file($uploaded_file['tmp_name'] , $new_location);
      $update_photo = "UPDATE abouts SET about_img='$file_name' WHERE id = $id";
      $update_photo_result = mysqli_query($update_photo);

      $update ="UPDATE abouts SET about_title='$about_title', about_desp='$about_desp', about_sub_title='$about_sub_title',    feature='$feature', status='$status' WHERE id=$id";
      $update_result= mysqli_query($db, $update);
      header('location:view_about.php');
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
  $update ="UPDATE abouts SET about_title='$about_title', about_desp='$about_desp', about_sub_title='$about_sub_title',    feature='$feature', status='$status' WHERE id=$id";
  $update_result= mysqli_query($db, $update);
  header('location:view_about.php');
}
 ?>
