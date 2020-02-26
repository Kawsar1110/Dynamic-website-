<?php
require 'db.php';
$id =$_POST['id'];
$status=$_POST['status'];

if ($_FILES['logo']['name'] != '') {
  $select_photo="SELECT logo FROM logos WHERE id=$id";
  $select_photo_result = mysqli_query($db ,$select_photo);
  $after_assoc = mysqli_fetch_assoc($select_photo_result);
  $delete_form = 'uploads/logos/'.$after_assoc['logo'];
  unlink($delete_form);

  $uploaded_file = $_FILES['logo'];
  $after_explode = explode('.' , $uploaded_file['name']);
  $extention = end($after_explode);
  $allowed_extention = array('jpeg','png','gif','jpg');
  if (in_array($extention , $allowed_extention)) {
    if ($uploaded_file['size'] < 5000000) {
      $file_name = $id.'.'.$extention;
      $new_location = 'uploads/logos/'.$file_name;
      move_uploaded_file($uploaded_file['tmp_name'] , $new_location);
      $update_photo = "UPDATE logos SET logo='$file_name' WHERE id = $id";
      $update_photo_result = mysqli_query($update_photo);

      $update ="UPDATE logos status='$status' WHERE id=$id";
      $update_result= mysqli_query($db, $update);
      header('location:view_logo.php');
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
  $update ="UPDATE logos status='$status' WHERE id=$id";
  $update_result= mysqli_query($db, $update);
  header('location:view_logo.php');
}
?>
