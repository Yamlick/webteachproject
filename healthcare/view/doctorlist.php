<?php include('header.php'); include('../Controller/checksession.php');?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../CSS/mystyle.css" type="text/css">

    <body>
    <div class="header">
  <h1>Doctor list</h1>
</div>
<div class="sticky">

	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor List</title>
</head>
<body>
	<h3 align="right"> <?php echo $_SESSION['lastname'];?>, Welcome</h3>

	<br>
	<h3><a href="dashboard.php">Homepage</a></h3>


	<h3><a href="../Controller/logout.php">Logout</a></h3>

	<br>

	<?php 


				$f = fopen("../model/doctor.json", 'r');

				$s = fread($f, filesize("../model/doctor.json"));

				$data = json_decode($s);
				

				

				echo "<table border=1>";
				echo "<tr>";
				echo "<th>ID</th>";
				echo "<th>Firstname</th>";
				echo "<th>LastName</th>";
				echo "<th>Gender</th>";
				echo "<th>Visiting Time</th>";
				echo "<th>Visiting Fee</th>";
				echo "</tr>";
				




				for($i=0; $i<sizeof($data); $i++)
				{
						echo "<tr>";
						echo "<td>" . $data[$i]->id . "</td>";
						echo "<td>" . $data[$i]->firstname . "</td>";
						echo "<td>" . $data[$i]->lastname . "</td>";
						echo "<td>" . $data[$i]->gender . "</td>";
						echo "<td>" . $data[$i]->time . "</td>";
						echo "<td>" . $data[$i]->fees . "</td>";
						echo "</tr>";
					
				}

				echo "</table>";
				

				fclose($f);


	?>

</body>
</html>

<?php include('./footer.php'); ?>