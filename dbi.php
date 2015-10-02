<?php  
$dbi = mysqli_connect('host','','','') or die(mysql_errno());
   
if ($dbi->connect_error ){
    die('kan ikke forbinde til SQLserver' . $dbi->connect_errno .
    ":".$dbi->connect_error);
}
$dbi->set_charset('utf8');
?>
