<?php include('header.php');  
//include('../Controller/checksession.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../CSS/mystyle.css" type="text/css">

    <body>
    <div class="header">
  <h1>Search Doctor</h1>
</div>
<div class="sticky">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Doctor</title>
</head>
<body>
	<h3 align="right"> <?php echo $_SESSION['lastname'];?>, Welcome</h3>

	<br>
	<h3><a href="dashboard.php">Homepage</a></h3>


	<h3><a href="../Controller/logout.php">Logout</a></h3>

	<br>

	<form method="post" action="../Controller/searchdoctorAction.php" novalidate>
		<fieldset>
			<legend>Search Doctor by ID</legend>

			<label>Enter ID to search.</label>	
			<input type="number" id="id" name="id" required value=" <?php echo "$id"; ?>" >
			<input type="submit" name="submit" value="Search">


		</fieldset>

		<br><br>

		<h4><a href="doctorlist.php">Show all Doctor</a></h4>
	</form>


	<br></br>
	
	<div align="center">
			<br><br><br>

			<?php 

			if( isset($_SESSION['result']) ){


					$x = $_SESSION['result'];

					echo "<table border=1>";
					echo "<tr>";
					echo "<th>ID</th>";
					echo "<th>firstname</th>";
					echo "<th>lastname</th>";
					echo "<th>gender</th>";
					echo "<th>time</th>";
					echo "<th>fess</th>";
					
					echo "</tr>";

					echo "<tr>";
					echo "<td>" . $x[0]['ID'] . "</td>";
					echo "<td>" . $x[0]['firstname'] . "</td>";
					echo "<td>" . $x[0]['lastname'] . "</td>";
					echo "<td>" . $x[0]['gender'] . "</td>";
					echo "<td>" . $x[0]['time'] . "</td>";
					echo "<td>" . $x[0]['fees'] . "</td>";
					
					echo "</tr>";
				


				echo "</table>";

				echo "<br><br>";


				}
	?>

</body>
</html>

<?php include('footer.php'); ?>