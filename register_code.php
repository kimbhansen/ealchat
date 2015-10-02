<?
include ('dbi.php');

$user = $_POST['user'];
$password = $_POST['password'];



$sql = "INSERT INTO user (user, password ) VALUES
    ('$user','$password')";
$dbi->query($sql);

header('location:login_page.php');




?>