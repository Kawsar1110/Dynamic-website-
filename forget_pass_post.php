<?php
session_start();
 require 'db.php';
 $email=$_POST['email'];
 $password=password_hash($_POST['password'],1);

 $select_user= "SELECT * FROM users WHERE email='$email'";
 $select_result = mysqli_query($db , $select_user);
 $after_assoc = mysqli_fetch_assoc($select_result);

if ($after_assoc['email']==$email){
  $update ="UPDATE users SET  password='$password' WHERE email='$email'";
  $update_result= mysqli_query($db, $update);
  header('location:forget_pass.php');
}
else {
    header('location:forget_pass.php');
    $_SESSION['wrong_email'] = "Your Email is Wrong";
}
 ?>
