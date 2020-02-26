<?php
require 'db.php';
$id =$_POST['id'];

$name=$_POST['fname'];
$email=$_POST['email'];
$password =$_POST['password'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$role=$_POST['role'];

if ($_FILES['photo']['name'] != '') {
  $select_photo="SELECT photo FROM users WHERE id=$id";
  $select_photo_result = mysqli_query($db ,$select_photo);
  $after_assoc = mysqli_fetch_assoc($select_photo_result);
  $delete_form = 'uploads/users/'.$after_assoc['photo'];
  unlink($delete_form);

  $uploaded_file = $_FILES['photo'];
  $after_explode = explode('.' , $uploaded_file['name']);
  $extention = end($after_explode);
  $allowed_extention = array('jpeg','png','gif','jpg');
  if (in_array($extention , $allowed_extention)) {
    if ($uploaded_file['size'] < 2000000) {
      $file_name = $id.'.'.$extention;
      $new_location = 'uploads/users/'.$file_name;
      move_uploaded_file($uploaded_file['tmp_name'] , $new_location);
      $update_photo = "UPDATE users SET photo='$file_name' WHERE id = $id";
      $update_photo_result = mysqli_query($update_photo);

      $update ="UPDATE users SET name='$name', email='$email', password='$password', age='$age', gender='$gender', role='$role' WHERE id=$id";
      $update_result= mysqli_query($db, $update);
      header('location:user.php');
    }
    else {
      echo "size is longer";
    }
  }
  else {
    echo "Format Wrong";
  }
}
else {
  $update ="UPDATE users SET name='$name', email='$email', password='$password', age='$age', gender='$gender', role='$role' WHERE id=$id";
  $update_result= mysqli_query($db, $update);
  header('location:user.php');
}
 ?>
