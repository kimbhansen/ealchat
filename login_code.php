<?php

    include 'dbi.php';

  
   session_start();

  /*if (isset($_POST['login'])) {*/
      

              $sql = "SELECT * FROM user WHERE user = '" . $_POST['user'] . "' && password = '" . $_POST['password'] . "'";

             
              $result = $dbi->query($sql) or die(error_reporting());

                 if ($result->num_rows == 1) {
                   $_SESSION["login"] = 'true';

                   $_SESSION["user"] = $_POST['user'];
                   

                  

                  
                  header("location:logged_in.php");
                      
                      
                 } else {
                     /* .. DU ER IKKE LOGGET IND .. */
                       $_SESSION['login'] = 'false';
                      header("location:login.php");
                     
             }
            
?>