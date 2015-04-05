<?php
if(isset($_POST['username'])&&isset($_POST['password']))
{
	$myusername=$_POST['username'];
	$mypassword=$_POST['password'];
	$saltpass=crypt($mypassword,'st');
	if(!empty($myusername)&&!empty($mypassword))
	{
	
		$query=mysql_query("SELECT * FROM users WHERE username='$myusername'");
		$row=mysql_num_rows($query);
		while($result=mysql_fetch_array($query))
		{
			 $x=$result['password'];
		}

		if($saltpass==$x)
		{
			$value=mysql_result($query, 0, 'id');
			$_SESSION['value']=$value;
			header('Location: index.php'); 
		}
		else 
		{
			echo 'Bad login';
		}
	}
	else
	{
		echo "You must supply a username and password";
	}
	
}

?>
<html>
<head>
<title>Home Page</title>

<style type="text/css">
	body{
		background-image: url(back.jpg);
	}
	.box{
		position: absolute;
		top: 280px;
		left: 440px;
		width: 500px;
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
	.box2{
		position: absolute;
		top: 300px;
		left: 1050px;
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
		<h3>Welcome to CSE Event Management Website</h3>
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
		



				<?php
				require 'connect.php';
				$_date=date('j');
				$_month=date('n');
				$_year=date('Y');

				$_query="SELECT * FROM booking WHERE (date='$_date' OR date='$_date'+1 OR date='$_date'+2 OR date='$_date'+3 OR date='$_date'+4 OR 
				date='$_date'+5 OR date='$_date'+6) AND month='$_month'";
				$_result=mysql_query($_query);
				
				if(mysql_query($_query))
				{	


				echo '
				<table class="style7" border="1" cellpadding="2">
				<tr>
					<th align="center">DATE</th>
					<th align="center">Time(HH)</th>
					<th align="center">Room</th>
					<th align="center">Purpose</th>
					<th align="center">Booked by</th>
				</tr>';



					while($ans=mysql_fetch_array($_result))
					{
						echo'<tr>
							<td align="center">';echo $ans['date']."-".$ans['month']."-".$ans['year'];echo'</td>
							<td align="center">';echo $ans['time'];echo'</td>
							<td align="center">';echo $ans['room'];echo'</td>
							<td align="center">';echo $ans['purpose'];echo'</td>
							<td align="center">';echo $ans['first_name'];echo'</td>
						</tr>';
						}
						echo'</table>';
				}
				else
				{	

					echo 
					'<table class="style7" border="1" cellpadding="2">
					<tr>
						  <td align="center">';echo "NO EVENTS THIS WEEK!";echo'</td>
						  </tr>';
						  echo'</table>';

				}
				
				?>



			</table>
	</div>
	<div class="box2">
	<form action="/index.php" method="post">
		<fieldset>
			<legend class="style7">LOGIN</legend>
			<table class="style7">
				<tr>
					<td align="left">UserName<br><br></td>
					<td align="left"><input type="text" name="username"><br><br></td>
				</tr>
				<tr>
					<td align="left">Password<br><br></td>
					<td align="left"><input type="password" name="password"><br><br></td>
				</tr>
				<tr>
					<td></td>
					<td align="right"><input type="submit" name="submit" value="Login"></td>
				</tr>
				
			</table>
		</fieldset>
	</form>
	</div>

	
</body>
</html>

