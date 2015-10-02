<?php  
$dbi = mysqli_connect('mysql12.000webhost.com','a8861915_ealchat','heroes51','a8861915_login') or die(mysql_errno());
   
if ($dbi->connect_error ){
    die('kan ikke forbinde til SQLserver' . $dbi->connect_errno .
    ":".$dbi->connect_error);
}
$dbi->set_charset('utf8');
?>