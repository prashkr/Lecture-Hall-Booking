<?php
require('connect.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$myusername=$_POST['user_name'];
$mypassword=$_POST['_password'];
$saltpass=crypt($mypassword,'st');
$myfirstname=$_POST['firstname'];
$mylastname=$_POST['lastname'];
$myemail=$_POST['email'];
if(empty($myusername))
	echo "enter username!";
else  if(empty($mypassword))
		echo "enter password!";
	else 
	{
		$query=mysql_query("SELECT 'username' FROM users WHERE username='$myusername'");
		$rows=mysql_num_rows($query);
		if($rows>0)
			header('Location: register2.html');
		else
		{
			$user_input=mysql_query("INSERT INTO users (id,username,password,first_name,last_name,email) 
				VALUES ('NULL','$myusername' , '$saltpass','$myfirstname','$mylastname','$myemail')");
			header('Location: register1.html');
		}



	}

}

echo '<head>
<title>Registration Page</title>

<style type="text/css">
	body{
		background-image: url(back.jpg);
	}
	.box{
		position: absolute;
		top: 250px;
		left: 500px;
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
		<h3>Fill in the following details for booking </h3>
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
	<form action="register.php" method="post">
		<fieldset>
		<legend><b>Registration</b></legend>
		<table  class="style7">
			<tr>
				<td align="left">FirstName<br><br></td>
				<td align="left"><input type="text" name="firstname"/><br><br></td>
					
			</tr>

			<tr>
				<td align="left">LastName<br><br></td>
				<td align="left"><input type="text" name="lastname"/><br><br></td
			</tr>
			<tr>
				<td align="left">Username<br><br></td>
				<td align="left"><input type="text" name="user_name"/><br><br></td>
					
			</tr>
			<tr>
				<td align="left">Password<br><br></td>
				<td align="left"><input type="password" name="_password"/><br><br></td>
					
			</tr>
			
			<tr>
				<td align="left">Email Id<br><br></td>
				<td align="left"><input type="text" name="email"/><br><br></td>
					
			</tr>
			
			<tr>
				<td align="left"><input type="submit" name="register" value="Register"/>
			</tr>
		</table>
		</fieldset>
	</form>
	</div>
	
</body>
</html>

';

?>