<?php
include('header.php');
include('../Controller/loginAction.php');

if(isset($_SESSION['auth'])){
	if($_SESSION['auth'] == "Admin"){
		header("Location: dashboard.php");
	}
}
?>


<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../CSS/mystyle.css" type="text/css">

    <body>
    <div class="header">
  <h1>Log in</h1>
</div>
<div class="sticky">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>

<?php 
	if(isset($_SESSION['status']))
	{
		echo $_SESSION['status'];
	}

	

	
?>


<body>


	<br>
	<h3 align="center"> 
		<?php 
			if(isset($_SESSION['msg'])) 
			{
				echo $_SESSION['msg'];
			} 
		?> 
	</h3>

	<br>

	<form method="post" action="../Controller/loginAction.php" novalidate>
		<fieldset>


			<legend>Login page</legend>

			<br>
			<h3 align="center"> 
				<?php 
					if(isset($_SESSION['us'])) 
					{
						echo $_SESSION['us'];
					} 
				?> 
			</h3>
			<br>

			<label>Username :</label>
			<input type="text" name="username" required value = "">
			<br><br>
			<label>Password:</label>
			<input type="text" name="password" required value = "">
			<br><br>

			<input type="submit" name="submit" value="Login">
			<br><br>
			<br><br>
			<p>Don't have an account?</p>
			<a href="patientregistration.php">Click here for Sign up!</a>


		</fieldset>

		<br><br>



	</form>


<?php include('./footer.php'); ?>
</body>
</html>


