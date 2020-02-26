<?php
session_start();
 require 'db.php';
 $email=$_POST['email'];
 $password=$_POST['password'];
 $select ="SELECT count(*) as falcon, password, name, photo, role, id FROM users WHERE email='$email'";
 $select_result = mysqli_query($db,$select);
 $after_assoc = mysqli_fetch_assoc($select_result);

 if ($after_assoc['falcon']==1) {
    if(password_verify($password,$after_assoc['password'])){
     header('location:admin.php');
     $_SESSION['login'] = "Successfully Login";
     $_SESSION['name'] =$after_assoc['name'];
     $_SESSION['photo'] =$after_assoc['photo'];
     $_SESSION['role'] =$after_assoc['role'];
     $_SESSION['id'] =$after_assoc['id'];
     setcookie('himel' , 'timedelay' , time() + 300);
   }
   else {
      header('location:login.php');
      $_SESSION['wrong'] = "Wrong email And password";
   }
 }
 else {
   header('location:login.php');
    $_SESSION['wrong'] = "Wrong email And password";
 }
 ?>
