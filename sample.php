<?php
require 'connect.php';

$_date=3;
$_month=3;
$_year=date('Y');

$query="SELECT * FROM booking WHERE (date='$_date' OR date='$_date'+1 OR date='$_date'+2 OR date='$_date'+3 OR date='$_date'+4 OR 
	date='$_date'+5 OR date='$_date'+6) AND month='$_month'";
$result=mysql_query($query);

	
//date('n')=month without leading zeroes.
//date('j');=day of the month without leading zeroes.
//idate('Y')=year
?>

<?php
while($ans=mysql_fetch_array($result))
{
	echo $ans['first_name']." ".$ans['room']." ".$ans['purpose']." ".$ans['time']." ".$ans['purpose'];
	echo "<br>";
}
?>
