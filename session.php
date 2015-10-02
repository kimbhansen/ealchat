
<?php

session_start();
//if ($_SESSION["login"] == 'true') {


session_destroy();
header("location:login_page.php");

echo "ealchat goodbye";
//} else {
  //  header("location:login.php");
//}

?>