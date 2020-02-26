<?php
session_start();
require 'db.php';

$testimonial_desp=$_POST['testimonial-desp'];
$testimonial_name=$_POST['testimonial-name'];
$status=$_POST['status'];

$uploaded_file= $_FILES['testimonial-img'];
$after_explode=explode('.',$uploaded_file['name']);
$extention=end($after_explode);
$allowed_extention=array('jpg','jpeg','png','gif');
if (in_array($extention,$allowed_extention)) {
  if ($uploaded_file['size'] < 5000000) {
      $insert= "INSERT INTO testimonials (testimonial_desp,testimonial_name,status) values
      ('$testimonial_desp','$testimonial_name','$status')";
      $result = mysqli_query($db , $insert);

      $last_id=mysqli_insert_id($db);
      $file_name=$last_id.'.'.$extention;
      $new_location = 'uploads/testimonials/'.$file_name;
      move_uploaded_file($uploaded_file['tmp_name'],$new_location);
      $update = "UPDATE testimonials SET testimonial_img ='$file_name' WHERE id='$last_id'";
      $update_result=mysqli_query($db, $update);

        $_SESSION['success'] = "You Seccessfully Registeried";
        header('location:add_testimonial.php');

  }
  else {
    $_SESSION['size_err'] = 'size is big!';
    header('location:add_testimonial.php');
  }
}
else {
  $_SESSION['frmt_err'] = 'Invoid Format!';
  header('location:add_testimonial.php');
}

?>
