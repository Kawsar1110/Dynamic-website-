<?php
require 'db.php';
$id= $_GET['id'];

$select ="DELETE FROM messages WHERE id=$id";
$result=mysqli_query($db,$select);
header('location:view_message.php');
