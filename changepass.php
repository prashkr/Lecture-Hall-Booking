<?php
require('loggedin.php');
require('connect.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$myusername1=$_POST['username'];
	$_oldpassword=$_POST['oldpassword'];
	$_newpassword=$_POST['newpassword'];
	$saltpass1=crypt($_oldpassword,'st');
	$saltpass2=crypt($_newpassword,'st');

	$query="SELECT * FROM users WHERE username='$myusername1'";
	$query_run=mysql_query($query);
	while($result=mysql_fetch_array($query_run)){
		$x=$result['password'];
	}

	if ($saltpass1==$x) {
		mysql_query("UPDATE users SET password='$saltpass2' WHERE username='$myusername1'");
		header('Location: changepass1.html');
	}
 	else {
		header('Location: changepass2.html');
	}
}

if(signedin()){
	echo '<html>
<head>
<title>Change Password</title>

<style type="text/css">
	body{
		background-image: url(back.jpg);
	}
	.box{
		position: absolute;
		top: 250px;
		left: 550px;
		width: 250px;
		height: 80px;
		padding: 2px;
		 
	}
	.box1{
		position: absolute;
		top: 300px;
		left: 150px;
		width: 200px;
		height: 80px;
		padding: 2px; 
	}
	.style7 {
	font-family: "Courier New", Courier, monospace;
	font-size: large;
	font-weight: bold;
	}
	a:link {
	color: #333333;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #333333;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
</head>
<body>
	<center class="style7">
		<h1>DEPARTMENT OF <br/> COMPUTER SCIENCE AND ENGINEERING</h1>
	</center>
	<br>
	<center class="style7">
		<h3>Change Password</h3>
	</center>
	<div class="box1">
		<table class="style7">
			<tr>
				<td align="left"><a href="index.php">HOME</a><br><br></td>
			</tr>
			<tr>
				<td align="left"><a href="http://www.cse.iitk.ac.in">CSE_IITK</a><br><br></td>
			</tr>
			<tr>
				<td align="left"><a href="http://www.iitk.ac.in">IITK</a><br><br></td>
			</tr>
			<tr>
				<td align="left"><a href="register.html">REGISTER</a><br><br></td>
			</tr>
			
		</table>
	</div>
	<div class="box">
	<form action="changepass.php" method="post">
		<fieldset>
		<legend><b></b></legend>
		<table  class="style7">
			<tr>
				<td align="left">UserName<br><br></td>
				<td align="left"><input type="text" name="username"/><br><br></td>
					
			</tr>

			<tr>
				<td align="left">Old Password<br><br></td>
				<td align="left"><input type="password" name="oldpassword"/><br><br></td
			</tr>
			<tr>
				<td align="left">New Password<br><br></td>
				<td align="left"><input type="password" name="newpassword"/><br><br></td>
					
			</tr>
			
			<tr>
				<td align="left"><input type="submit" name="change" value="Change"/>
			</tr>
		</table>
		</fieldset>
	</form>
	</div>
	
</body>
</html>';

} else {
	echo '<html>
<head>
<title>Change Password</title>

<style type="text/css">
	body{
		background-image: url(back.jpg);
	}
	.box{
		position: absolute;
		top: 300px;
		left: 550px;
		width: 250px;
		height: 80px;
		padding: 2px;
		 
	}
	.box1{
		position: absolute;
		top: 300px;
		left: 150px;
		width: 200px;
		height: 80px;
		padding: 2px; 
	}
	.style7 {
	font-family: "Courier New", Courier, monospace;
	font-size: large;
	font-weight: bold;
	}
	a:link {
	color: #333333;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #333333;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
</head>
<body>
	<center class="style7">
		<h1>DEPARTMENT OF <br/> COMPUTER SCIENCE AND ENGINEERING</h1>
	</center>
	<br>
	<center class="style7">
		<h3>Change Password</h3>
	</center>
	<div class="box1">
		<table class="style7">
			<tr>
				<td align="left"><a href="index.php">HOME</a><br><br></td>
			</tr>
			<tr>
				<td align="left"><a href="http://www.cse.iitk.ac.in">CSE_IITK</a><br><br></td>
			</tr>
			<tr>
				<td align="left"><a href="http://www.iitk.ac.in">IITK</a><br><br></td>
			</tr>
			<tr>
				<td align="left"><a href="register.php">REGISTER</a><br><br></td>
			</tr>
			
		</table>
	</div>
	<div class="box">
	<form action="changepass.php" method="post">
		<fieldset>
		<legend><b></b></legend>
		<table  class="style7">
			<tr>
				<td align="left">Please <a href="/index.php">Login</a> to continue.</td>
			</tr>
		</table>
		</fieldset>
	</form>
	</div>
	
</body>
</html>';

}

?>




