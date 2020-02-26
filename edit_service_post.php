<?php
require 'db.php';
$id =$_POST['id'];

$service_title=$_POST['service-title'];
$service_desp=$_POST['service-desp'];
$status=$_POST['status'];

if ($_FILES['service_img']['name'] != '') {
  $select_photo="SELECT service_img FROM services WHERE id=$id";
  $select_photo_result = mysqli_query($db ,$select_photo);
  $after_assoc = mysqli_fetch_assoc($select_photo_result);
  $delete_form = 'uploads/services/'.$after_assoc['service_img'];
  unlink($delete_form);

  $uploaded_file = $_FILES['service_img'];
  $after_explode = explode('.' , $uploaded_file['name']);
  $extention = end($after_explode);
  $allowed_extention = array('jpeg','png','gif','jpg');
  if (in_array($extention , $allowed_extention)) {
    if ($uploaded_file['size'] < 5000000) {
      $file_name = $id.'.'.$extention;
      $new_location = 'uploads/services/'.$file_name;
      move_uploaded_file($uploaded_file['tmp_name'] , $new_location);
      $update_photo = "UPDATE services SET service_img='$file_name' WHERE id = $id";
      $update_photo_result = mysqli_query($update_photo);

      $update ="UPDATE services SET service_title='$service_title', service_desp='$service_desp', status='$status' WHERE id=$id";
      $update_result= mysqli_query($db, $update);
      header('location:view_service.php');
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
  $update ="UPDATE services SET service_title='$service_title', service_desp='$service_desp', status='$status' WHERE id=$id";
  $update_result= mysqli_query($db, $update);
  header('location:view_service.php');
}
 ?>
