<?php 
	include('../Controller/checksession.php');
?>

<!DOCTYPE html>
<html>
<head>


<body>

	<?php include('./header.php'); ?>
	
<br>
<fieldset>

	
	
	<h3 align="right"> <?php echo $_SESSION['lastname'];?>, Welcome</h3>

	<br>
	

	<h3><a href="dashboard.php">Homepage</a></h3>


	<h3><a href="../Controller/logout.php">Logout</a></h3>

	<br>

	<h3><a href="changepassword.php">Change Password</a></h3>

	<h3><a href="editprofile.php">Update  Profile</a></h3>

	<h3><a href="../Controller/cheakview.php">View  Profile</a></h3>


	<h3><a href="searchdoctor.php">Search Doctor</a></h3>

	<h3><a href="doctorlist.php">View Doctor</a></h3>

	<h3><a href="reservation.php">Doctor Reservation </a></h3>

	<h3><a href="doctorreveiw.php">Give Doctor Review</a></h3>
	
	<h3><a href="payment.php">Give Payment</a></h3>
	
	</fieldset>
	<br>

	<?php include('./footer.php'); ?>



</body>
</html>