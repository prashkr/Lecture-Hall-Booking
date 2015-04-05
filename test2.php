<table border='1' cellpadding='2'>
				<tr>
					<th align="center">DATE</th>
					<th align="center">Time</th>
					<th align="center">Room</th>
					<th align="center">Purpose</th>
					<th align="center">Booked by</th>
				</tr>

<?php
				$_date=date('j');
				$_month=date('n');
				$_year=date('Y');
				echo $_date.$_month.$_year;

				$_query="SELECT * FROM booking WHERE (date='$_date' OR date='$_date'+1 OR date='$_date'+2 OR date='$_date'+3 OR date='$_date'+4 OR 
				date='$_date'+5 OR date='$_date'+6) AND month='$_month'";
				$_result=mysql_query($_query);

				while($ans=mysql_fetch_array($_result))
				{
					echo'<tr>
						<td>';echo $ans['date']."-".$ans['month']."-".$ans['year'];echo'</td>
						<td>';echo $ans['time'];echo'</td>
						<td>';echo $ans['room'];echo'</td>
						<td>';echo $ans['purpose'];echo'</td>
						<td>';echo $ans['first_name'];echo'</td>
					</tr>';
					echo "hello";					
				}
				?>

			</table>