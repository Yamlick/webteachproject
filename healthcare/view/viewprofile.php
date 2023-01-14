<?php 
include('../Controller/checksession.php');
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../CSS/mystyle.css" type="text/css">

    <body>
    <div class="header">
  <h1>view profile</h1>
</div>
<div class="sticky">




	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Profile</title>
</head>
<body>

	<h3 align="right"> <?php echo $_SESSION['lastname'];?>, Welcome</h3>

<br>

	<h3 align="center"> <?php if(isset($_SESSION['up'])) {echo $_SESSION['up'];} ?> </h3>

	<br>

	<h3><a href="dashboard.php">Homepage</a></h3>


	<h3><a href="../Controller/logout.php">Logout</a></h3>

	<br>

	<div align="center">
			<br><br><br><br><br><br><br><br>

			<?php 

				$x = $_SESSION['info'];

				echo "<table border=1>";
				echo "<tr>";
				echo "<th>Firstname</th>";
				echo "<th>LastName</th>";
				echo "<th>Gender</th>";
				echo "<th>occupation</th>";
				echo "<th>bpcondition</th>";
				echo "<th>age</th>";
				echo "<th>bg</th>";
				echo "<th>email</th>";
				
				echo "</tr>";

				echo "<tr>";
				echo "<td>" . $x[0]['firstname'] . "</td>";
				echo "<td>" . $x[0]['lastname'] . "</td>";
				echo "<td>" . $x[0]['gender'] . "</td>";
				echo "<td>" . $x[0]['occupation'] . "</td>";
				echo "<td>" . $x[0]['bpcondition'] . "</td>";
				echo "<td>" . $x[0]['age'] . "</td>";
				echo "<td>" . $x[0]['bg'] . "</td>";
				echo "<td>" . $x[0]['email'] . "</td>";
				echo "</tr>";
			


			echo "</table>";

			echo "<br><br>";


			
			?>



	<br>

	<a href="editprofile.php">Click here to update profile.</a>







</body>
</html>

<?php include('./footer.php'); ?>