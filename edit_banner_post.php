<?php
require 'db.php';
$id =$_POST['id'];

$banner_title=$_POST['banner_title'];
$banner_desp=htmlentities($_POST['banner_desp'],ENT_QUOTES);
$banner_btn =$_POST['banner_btn'];
$status=$_POST['status'];

if ($_FILES['banner_img']['name'] != '') {
  $select_photo="SELECT banner_img FROM banners WHERE id=$id";
  $select_photo_result = mysqli_query($db ,$select_photo);
  $after_assoc = mysqli_fetch_assoc($select_photo_result);
  $delete_form = 'uploads/banners/'.$after_assoc['banner_img'];
  unlink($delete_form);

  $uploaded_file = $_FILES['banner_img'];
  $after_explode = explode('.' , $uploaded_file['name']);
  $extention = end($after_explode);
  $allowed_extention = array('jpeg','png','gif','jpg');
  if (in_array($extention , $allowed_extention)) {
    if ($uploaded_file['size'] < 5000000) {
      $file_name = $id.'.'.$extention;
      $new_location = 'uploads/banners/'.$file_name;
      move_uploaded_file($uploaded_file['tmp_name'] , $new_location);
      $update_photo = "UPDATE banners SET banner_img='$file_name' WHERE id = $id";
      $update_photo_result = mysqli_query($update_photo);

      $update ="UPDATE banners SET banner_title='$banner_title', banner_desp='$banner_desp', banner_btn='$banner_btn', status='$status' WHERE id=$id";
      $update_result= mysqli_query($db, $update);
      header('location:view_banner.php');
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
    $update ="UPDATE banners SET banner_title='$banner_title', banner_desp='$banner_desp', banner_btn='$banner_btn', status='$status' WHERE id=$id";
    $update_result= mysqli_query($db, $update);
    header('location:view_banner.php');
}
 ?>
