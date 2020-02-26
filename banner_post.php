<?php
session_start();
require 'db.php';

$banner_title=$_POST['banner-title'];
$banner_desp=$_POST['banner-desp'];
// $banner_desp=htmlentities($_POST['banner_desp'],ENT_QUOTES);

$banner_btn=$_POST['banner-btn'];
$status=$_POST['status'];

$uploaded_file= $_FILES['banner-img'];
$after_explode=explode('.',$uploaded_file['name']);
$extention=end($after_explode);
$allowed_extention=array('jpg','jpeg','png','gif');
if (in_array($extention,$allowed_extention)) {
  if ($uploaded_file['size'] < 5000000) {
      $insert= "INSERT INTO banners (banner_title,banner_desp,banner_btn,status) values
      ('$banner_title','$banner_desp','$banner_btn','$status')";
      $result = mysqli_query($db , $insert);

      $last_id=mysqli_insert_id($db);
      $file_name=$last_id.'.'.$extention;
      $new_location = 'uploads/banners/'.$file_name;
      move_uploaded_file($uploaded_file['tmp_name'],$new_location);
      $update = "UPDATE banners SET banner_img ='$file_name' WHERE id='$last_id'";
      $update_result=mysqli_query($db, $update);

        $_SESSION['success'] = "You Seccessfully Registeried";
        header('location:add_banner.php');

  }
  else {
    $_SESSION['size_err'] = 'size is big!';
    header('location:add_banner.php');
  }
}
else {
  $_SESSION['frmt_err'] = 'Invoid Format!';
  header('location:add_banner.php');
}

?>
