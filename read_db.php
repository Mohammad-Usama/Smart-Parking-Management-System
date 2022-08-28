<!DOCTYPE html>
<html>
	<head>
		<style>
			table {
				border-collapse: collapse;
				width: 100%;
				color: #1f5380;
				font-family: monospace;
				font-size: 20px;
				text-align: left;
			} 
			th {
				background-color: #1f5380;
				color: white;
			}
			tr:nth-child(even) {background-color: #f2f2f2}
		</style>
	</head>
	<?php
			$hostname = "localhost";		
		$username = "root";		
		$password = "";	
		$dbname = "Mcrocontroller";
		
		$conn = mysqli_connect($hostname, $username, $password, $dbname);
		if (!$conn) {
			die("Connection failed !!!");
		} 
	?>
	<body>
		<table>
			<tr>
				<th>No</th> 
				<th>LDR Value</th> 
				<th>Date</th>
				<th>Time</th>
			</tr>	
			<?php
				$table = mysqli_query($conn, "SELECT No, Ldr, Date, Time FROM nodemcu_Idr_table"); 
				while($row = mysqli_fetch_array($table))
				{
			?>
			<tr>
				<td><?php echo $row["No"]; ?></td>
				<td><?php echo $row["Ldr"]; ?></td>
				<td><?php echo $row["Date"]; ?></td>
				<td><?php echo $row["Time"]; ?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>