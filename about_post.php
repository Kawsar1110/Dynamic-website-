<?php
session_start();
require 'db.php';

$about_title=$_POST['about-title'];
$about_desp=$_POST['about-desp'];
// $about_desp=htmlentities($_POST['about_desp'],ENT_QUOTES);
$about_sub_title=$_POST['about-sub-title'];
$feature=$_POST['feature'];
$status=$_POST['status'];

$uploaded_file= $_FILES['about-img'];
$after_explode=explode('.',$uploaded_file['name']);
$extention=end($after_explode);
$allowed_extention=array('jpg','jpeg','png','gif');
if (in_array($extention,$allowed_extention)) {
  if ($uploaded_file['size'] < 5000000) {
      $insert= "INSERT INTO abouts (about_title,about_desp,about_sub_title,feature,status) values
      ('$about_title','$about_desp','$about_sub_title','$feature','$status')";
      $result = mysqli_query($db , $insert);

      $last_id=mysqli_insert_id($db);
      $file_name=$last_id.'.'.$extention;
      $new_location = 'uploads/abouts/'.$file_name;
      move_uploaded_file($uploaded_file['tmp_name'],$new_location);
      $update = "UPDATE abouts SET about_img ='$file_name' WHERE id='$last_id'";
      $update_result=mysqli_query($db, $update);

        $_SESSION['success'] = "You Seccessfully Registeried";
        header('location:add_about.php');

  }
  else {
    $_SESSION['size_err'] = 'size is big!';
    header('location:add_about.php');
  }
}
else {
  $_SESSION['frmt_err'] = 'Invoid Format!';
  header('location:add_about.php');
}

?>
