<?php 
 
session_start();
include 'dbi.php';
if ($_SESSION["login"] == 'true') {


$msg = $_POST['msg'];
$user_id = $_SESSION["user"] ;

$sql = "INSERT INTO logs (msg, user_id)VALUES( '$msg','$user_id')";
$dbi->query($sql);
header('location:logged_in.php');
} else {
    header("location:login_page.php");
}




?>
