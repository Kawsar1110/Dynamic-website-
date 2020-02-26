<?php
session_start();
require 'db.php';
$name=$_POST['fname'];
$email=$_POST['email'];
$password=$_POST['password'];
// $repassword=password_hash($_POST['repassword'],1);
// // $repass=$_POST['repassword'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$role=$_POST['role'];

$_SESSION['fname'] = $name;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
$_SESSION['repassword'] = $repass;
$_SESSION['age'] = $age;
$_SESSION['gender'] = $gender;
$_SESSION['Role'] = $role;

// $uppr=preg_match('@[A-Z]@',$pass);
// $lower=preg_match('@[a-z]@',$pass);
// $number=preg_match('@[0-9]@',$pass);
// $spcl=preg_match('@[#,$,&,*]@',$pass);

$regex='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';


if (empty($name)) {
  $err_msg = "plz enter your name";
  header('location:registation.php?name_err='.$err_msg);
}
elseif (empty($email)) {
  $err_msg="plz Enter Your email";
  header('location:registation.php?email_err='.$err_msg);
}
elseif (!preg_match($regex,$email)) {
  $err_msg ="Your email format wrong";
  header('location:registation.php?email_err='.$err_msg);
}
elseif (empty($password)) {
  $err_msg='Plz Enter your Password';
  header('location:registation.php?pass_err='.$err_msg);
}
// elseif (!$uppr || !$lower || !$number || !$spcl || strlen($pass) < 8 ){
//   $err_msg='pass ja chaisi ta den';
//   header('location:index.php?pass_err='.$err_msg);
//
// elseif (empty($repass)) {
//   $err_msg='plz enter again your password';
//   header('location:registation.php?repass_err='.$err_msg);
// }
// elseif ($password != $repass) {
//   $err_msg='password does not mass';
//   header('location:registation.php?repass_err='.$err_msg);
// }
elseif (empty($age)) {
  $err_msg='plz select your date of birth';
  header('location:registation.php?age_err='.$err_msg);
}
elseif (empty($gender)) {
  $err_msg='plz select your gender';
  header('location:registation.php?gender_err='.$err_msg);
}
elseif (empty($role)) {
  $err_msg='plz select your Role';
  header('location:registation.php?role_err='.$err_msg);
}
elseif($_SESSION['role']==1){

     $select ="SELECT count(*) as falcon FROM users WHERE email='$email'";
     $select_result = mysqli_query($db,$select);
     $after_assoc = mysqli_fetch_assoc($select_result);
       if ($after_assoc['falcon'] == 1) {
        header('location:registation.php');
        $_SESSION['exist'] = 'your email are exist';
       }
       else {
       $uploaded_file= $_FILES['photo'];
       $after_explode=explode('.',$uploaded_file['name']);
       $extention=end($after_explode);
       $allowed_extention=array('jpg','jpeg','png','gif');

       if (in_array($extention,$allowed_extention)) {
         if ($uploaded_file['size'] <2000000) {

             $insert= "INSERT INTO users(name,email,password,age,gender,role) values
               ('$name','$email','$password','$age','$gender','$role')";
             $result = mysqli_query($db , $insert);

             $last_id=mysqli_insert_id($db);
             $file_name=$last_id.'.'.$extention;
             $new_location = 'uploads/users/'.$file_name;
             move_uploaded_file($uploaded_file['tmp_name'],$new_location);
             $update = "UPDATE users SET photo ='$file_name' WHERE id='$last_id'";
             $update_result=mysqli_query($db, $update);

             $_SESSION['success'] = "You Seccessfully Registeried";
             header('location:registation.php');
            }
             else {
               echo "Size is long";
             }
           }
           else {
             echo "Format error";
           }

         }

}
else {
  $_SESSION['unregis'] = "Only Admin Can new register";
  header('location:registation.php');
}

 ?>
