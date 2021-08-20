
<?php
$user = 'root';
$password = '';
$database = 'database123';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);
// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
// SQL query to select data from database
$sql = "SELECT * FROM  bonafide_registration";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Bonafide</title>
	<!-- CSS FOR STYLING THE PAGE -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #1DB954;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
	<!-- <script src="table2excel.js"></script>-->
</head>

<body>
	<section>
		<button id="downloadexcel">View in excel</button>
		<h1>Bonafide Requesters</h1>
		<!-- TABLE CONSTRUCTION-->
		<table class="table table-striped table-responsive-md btn-table" id="example-table">
			<tr>
                <th>Name</th>
				<th>Roll No</th>
				<th>Email</th>
				<th>Quota</th>
				<th>purpose</th>
				
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
                <td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['rollno'];?></td>
				<td><?php echo $rows['email'];?></td>
				<td><?php echo $rows['quota'];?></td>
				<td><?php echo $rows['purpose'];?></td>
       		</td>
       	    </form>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
		<!--<script>
	document.getElementById('downloadexcel').addEventListener('click',function(){
		var table2excel= new Table2Excel();
		table2excel.export(document.querySelectorAll("#example-table"));
	});
	</script>-->
</body>

</html>
