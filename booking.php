<?php
require('loggedin.php');
require('connect.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$_firstname=$_POST['firstname'];
$_lastname=$_POST['lastname'];
$_email=$_POST['email'];
$_room=$_POST['room'];
$_purpose=$_POST['purpose'];
$_date=$_POST['date'];
$_month=$_POST['month'];
$_year=$_POST['year'];
$_time=$_POST['time'];

$_query="SELECT * FROM booking WHERE room='$_room' AND date='$_date' AND month='$_month' AND year='$_year' AND time='$_time'";

$query_run=mysql_query($_query);
$_row=mysql_num_rows($query_run);
if($_row == 0){

	$user_input=mysql_query("INSERT INTO `booking` (`first_name`, `last_name`, `email`, `room`, `purpose`, `date`, `month`, `year`, `time`) VALUES ('$_firstname', '$_lastname', '$_email', '$_room', '$_purpose', '$_date', '$_month', '$_year', '$_time');");
	echo "Registration successful";
} else {
	echo "Event clash! choose another slot.";
}		

	

}

if(signedin()){

	echo '<head>
<script>
function myFunction()
{
alert("I am an alert box!");
}
</script>
<title>Booking Page</title>

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
	.box2{
		position: absolute;
		top: 300px;
		left: 1000px;
		width: 250px;
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
			
		</table>
	</div>
	<div class="box">
	<form action="booking.php" method="post">
		<fieldset>
		<legend><b>BOOKING</b></legend>
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
				<td align="left">Email Id<br><br></td>
				<td align="left"><input type="text" name="email"/><br></td>
					
			</tr>
			<tr>
				<td align="left">Room<br><br></td>
				<td align="left"><select name="room"><option>Select</option><option>CS101</option><option>CS102</option></select>
					
			</tr>
			<tr>
				<td align="left">Booking Purpose<br><br></td>
				<td align="left"><select name="purpose"><option>Select</option><option>Class</option><option>Seminar</option></select>
					
			</tr>
			<tr>
				<td align="left">Booking Date(DD/MM/YY)<br><br></td>
				<td align="left">
					<select name="date">
						<option>DD</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
						<option>13</option>
						<option>14</option>
						<option>15</option>
						<option>16</option>
						<option>17</option>
						<option>18</option>
						<option>19</option>
						<option>20</option>
						<option>21</option>
						<option>22</option>
						<option>23</option>
						<option>24</option>
						<option>25</option>
						<option>26</option>
						<option>27</option>
						<option>28</option>
						<option>29</option>
						<option>30</option>
						<option>31</option>
					</select>
					<select name="month">
						<option>MM</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
					</select>
					<select name="year">
						<option>YY</option>
						<option>2012</option>
					</select>

				</td>
					
					
			</tr>
			<tr>
				<td align="left">Booking Time(HH)<br><br></td>
				<td align="left">
					<select name="time">
						<option>HH</option>
						<option>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
						<option>13</option>
						<option>14</option>
						<option>15</option>
						<option>16</option>
						<option>17</option>
						<option>18</option>
						<option>19</option>
						<option>20</option>
						<option>21</option>
						<option>22</option>
						<option>23</option>
					</select>
				</td>
					
			</tr>
			<tr>
				<td align="left"><input type="submit" name="submit" value="Submit"/>
			</tr>
		</table>
		</fieldset>
	</form>
	</div>
	<div class="box2">
	
		<fieldset>
			<table class="style7">
				<tr>
					<td align="left">You are logged in!</td>
				</tr>
				<tr>
					<td align="left"><a href="logout.php">Log Out</a></td>
				</tr>
				<tr>
					<td align="left"><a href="changepass.html">Change Password</a></td>
				</tr>


		</fieldset>
	
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