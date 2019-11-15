<?php


copy($_FILES['pic']['tmp_name'],"../upload/".$_FILES['pic']['name']);

$tmp=$_POST;
$tmp['pic']=$_FILES['pic']['name'];
session_start();
$_SESSION['info']=$tmp;
// print_r($_FILES);
// echo "<hr>";
// print_r($_SESSION);
header('location:preview.php');
?>