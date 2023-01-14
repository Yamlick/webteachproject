
<?php include "../Controller/validpatientregistration.php"; 



?>

<!Doctype html>
<html>

    <head>
	<script src="../js/registrationvalidation.js"></script>
	<link rel="stylesheet" href="../CSS/mystyle.css" type="text/css">

</head>
    <body>
    <div class="header">
  <h1>Registration</h1>
</div>
<div class="sticky">

</div>
    <body >
	<form class="form" method="post" action="../Controller/validpatientregistration.php" novalidate onsubmit = "return validate(this);">
	<fieldset class="reg">

		<fieldset>
			<legend>Registration Form</legend>

			<label>First Name:</label>
			<input type="text" name="fname" id="fname"  placeholder="Enter your First name">
			<span id="errorfname"></span>


			<br><br>

			<label>Last Name:</label>
			<input type="text" name="lname" placeholder="Enter your last name">
			<span id="errorlname"></span>


			<br><br>

			<label>Gender:</label>
			<input type="radio" name="gender" value="Female">
			<label>Female</label>
			<input type="radio" name="gender" value="Male">
			<label>Male</label>
			<span id="errorgender"></span>

			<?php echo $sent; ?>

			

			<br><br>

            <label>Occupation:</label>	
			<input type="radio" name="Occupation" value="job">
			<label>job</label>
			<input type="radio" name="Occupation" value="worker">
			<label>worker</label>
            <input type="radio" name="Occupation" value="student">
			<label>student</label>
			<?php echo $message; ?>


			


			<br><br>

            <label>BPCONDITION:</label>
			<input type="checkbox" id="BPH" name="BPH" value="BPH">
			<label>BP HIGH</label>
			<input type="checkbox" id="BPH" name="BPH" value="BPL">
			<label>BP LOW</label>
            <input type="checkbox" id="BPH" name="BPH" value="BPN">
			<label>BP NORMAL</label>
			<?php echo $validatecheckbox; ?>

			<br><br>

			<label>Age:</label>
			<input type="number" name="age" id="age" required value = "<?php echo $age; ?>">
			<span id="errorage"></span>


			<br><br>

			<label>Blood Group:</label> <?php echo $group; ?>
			<select name="bg">
				<option>A ve(+)</option>
				<option>A ve(-)</option>
				<option>B ve(+)</option>
				<option>B ve(-)</option>
				<option>O ve(+)</option>
				<option>O ve(-)</option>
				<option>AB ve(+)</option>
				<option>AB ve(-)</option>
			</select>
		
			<br><br>

			

			<label>Email:</label>
			<input type="text" name="email" id="email" required value = "<?php echo $email; ?>">
			<span id="erroremail"></span>


			<br><br>

		

			

			

			<label>Username</label>
			<input type="text" name="uname" id="uname" required value = "<?php echo $uname; ?>">
			<span id="erroruname"></span>

			<br><br>

			<label>Password</label>
			<input type="text" name="pass" id="pass"required value = "<?php echo $pass; ?>">
			<span id="errorpass"></span>

			<br><br>


			<input type="submit" name="submit" class= "button submitbutton" value="Registration" onclick="namecheck()">


			<br><br>
			<br><br>
			

			<br>
			<h3><a href="login.php">Already have an account! Login</a></h3>
			

		</fieldset>

	</form>
 


</body>
</html>