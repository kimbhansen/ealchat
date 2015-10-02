<?php
	session_start();
include 'dbi.php';
if ($_SESSION["login"] == 'true') {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	


<div class="logo"><span class="log"></span></div>

<style> 
@font-face {
    font-family: myFirstFont;
    src: url(eras.ttf);
}

div.loginholder {
    font-family: myFirstFont;
}

div.container {
    font-family: myFirstFont;
}

a {
    font-family: myFirstFont;
}

.status {
    font-family: myFirstFont;
}
</style>

<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<div class="container"></br>
	
	
<div class="content_left">
	
		<table border="0" cellpadding="3" cellspacing="3" width="254px" class="userprofile">
			<tr align="center">
				<th rowspan="2"><a href="index.php?logout"><img src="img/av20.png"></a></th>
				<th valign="bottom" align="left">Logged in as, </th>					
			</tr>
			<tr align="center">		
				<th valign="bottom" colspan="2" align="left"><span class="status"><span class="name"><?php echo $_SESSION['user']; ?></span></span></th>			
			</tr>
			<tr align="center">		
				<th align="middle" valign="bottom"><form action='session.php' method='post'>
                <input type='submit' name='logout' value='logout'>
            </form></th>	
				<th align="left" valign="bottom"></th>
			</tr>		
		</table>		
	
	</br>
	<h2>You are in chat with:</h2>
	<div>
		<caption align="top">	
			<div class="styled-select">
				<select>			
					<option value="volvo">Web-Dev 1st Semester</option>
					<option value="saab">Web-Dev 2nd Semester</option>
					<option value="opel">MMD 1st Semester</option>
					<option value="audi">MMD 3rd Semester</option>
					<option value="saab">Econcept 2nd Semester</option>
					<option value="opel">Econcept 1st Semester</option>
					<option value="audi">Film & Animation 1st Semester</option>		
				</select>
			</div>		
			<br>
		</caption>
		</div>
	<table border="0" cellpadding="3" cellspacing="3" width="280px" class="userlist">
		<tr align="center">
			<th rowspan="2"><img src="img/av01.jpg"></th>
			<th valign="bottom" align="left"><a class="add" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Angelica Kintaro</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="status">Online</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av02.jpg"></th>
			<th valign="bottom" align="left"><a class="add" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Robert Koncz</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="status">Online</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av03.jpg"></th>
			<th valign="bottom" align="left"><a class="add" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Pia Hansen</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="status">Online</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av04.jpg"></th>
			<th valign="bottom" align="left"><a class="add" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Pia Hansen</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="status">Online</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av05.jpg"></th>
			<th valign="bottom" align="left"><a class="add" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Pia Hansen</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="status">Online</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av06.jpg"></th>
			<th valign="bottom" align="left"><a class="add" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Pia Hansen</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="status">Online</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av07.jpg"></th>
			<th valign="bottom" align="left"><a class="add" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Pia Hansen</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="status">Online</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av08.jpg"></th>
			<th valign="bottom" align="left"><a class="add" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Pia Hansen</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="status">Online</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av09.jpg"></th>
			<th valign="bottom" align="left"><a class="add" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Pia Hansen</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="status">Online</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av10.jpg"></th>
			<th valign="bottom" align="left"><a class="add" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Pia Hansen</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="status">Online</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av11.jpg"></th>
			<th valign="bottom" align="left"><a class="add" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Pia Hansen</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="status">Online</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av12.jpg"></th>
			<th valign="bottom" align="left"><a class="add" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Pia Hansen</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="status">Online</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av13.jpg"></th>
			<th valign="bottom" align="left"><a class="add" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Pia Hansen</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="status">Online</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av14.jpg"></th>
			<th valign="bottom" align="left"><a class="addo" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Pia Hansen</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="statuso">Offline</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av15.jpg"></th>
			<th valign="bottom" align="left"><a class="addo" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Pia Hansen</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="statuso">Offline</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av16.jpg"></th>
			<th valign="bottom" align="left"><a class="addo" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Pia Hansen</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="statuso">Offline</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av17.jpg"></th>
			<th valign="bottom" align="left"><a class="addo" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Pia Hansen</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="statuso">Offline</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av19.jpg"></th>
			<th valign="bottom" align="left"><a class="addo" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Pia Hansen</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="statuso">Offline</span></th>		
		</tr>
		<tr align="center">
			<th rowspan="2"><img src="img/av18.jpg"></th>
			<th valign="bottom" align="left"><a class="addo" href="#"></a></th>
			<th colspan="2" rowspan="2" align="left" valign="bottom"><span class="name">Pia Hansen</span></th>		
		</tr>
		<tr align="center">		
			<th valign="bottom" colspan="2" align="left"><span class="statuso">Offline</span></th>		
		</tr>	
	</table>
</div>

<br><br>
<div class="content_right">
	<div id="chatbox">
			<?
			$sql = "SELECT * FROM  logs ORDER BY id DESC LIMIT 19";
                $result = $dbi->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo "<p>".$row['user_id'].": ".$row['msg']. "</p>";
                }
            ?>
		</div>
		<div id="message">
			<form name="form1" action="insert.php" method="post">
				message: 
				<input type="text" name="msg" id="">
				<input type="submit" value="Submit">
			</form>
		</div>
	
</div>

<div class="spacer"></div>
</div>
</body>
</html>
<?php
} else {
    header("location:login_page.php");
}
?>
