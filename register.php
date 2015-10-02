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


<div class="loginholder">
<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}

?>

<!-- register form -->
<h2>Please enter your data.</h2>
<form method="post" action="register_code.php" name="registerform">
	<table class="reg" cellpadding="6px;">
	<tr>
    <!-- the user name input field uses a HTML5 pattern check -->
    <td><label for="username">Username </label></td>
    <td><input id="username" class="login_input" type="text" name="user" required /></td>
	
</tr>
<tr>
   <td> <label for="password">Password </label></td>
    <td><input id="password" class="login_input" type="password" name="password"  required autocomplete="off" /></td>
</tr>

</table></br>
	
    <input class="sub2" type="submit"  name="register" value="Register" />
	</br></br>
	
</form>
</div>
<!-- backlink -->
</br>
<a href="index.php">Back to Login Page</a>
</div>
</body>
</html>




