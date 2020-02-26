<?php
if (!isset($_COOKIE['himel'])) {
  header('location:login.php');
}
else {
  setcookie('himel' , 'timedelay' , time() + 300);
}
 ?>
