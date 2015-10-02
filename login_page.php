<?
    include 'dbi.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div id="container"> 
<div class="logo">
	<span class="log"></span>
</div>



<!-- login form box -->
<div class="loginholder">


	<h2>Login now to begin chat.</h2>
	<form method="post" action="login_code.php" name="loginform">
</br>
		<label for="username">Username</label>
		<input id="username" class="login_input" type="text" name="user" required /></br></br>

		<label for="password">Password</label>
		<input id="password" class="login_input" type="password" name="password" autocomplete="off" required /></br></br>

		<input class="sub1" type="submit"  name="login" value="Log in" />

	</form>
	</br></br>
	<div class="err">
	<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

</div>
</br></br>
</div>
</br>
<div class="links"><a href="register.php">Register new account</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="forgot.php">Forgot username or password?</a></div>
</div>
</body>
</html>











