<?php
include('../Controller/checksession.php');
include('header.php') ?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../CSS/mystyle.css" type="text/css">

    <body>
    <div class="header">
  <h1>Registration</h1>
</div>
<div class="sticky">
<div class="topnav">
  <a href="#">Home</a>
  <a href="#">About US</a>
</div>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment</title>
</head>
<body>

	<h3 align="right"> <?php echo $_SESSION['lastname'];?>, Welcome</h3>

	<br>

	<h3><a href="dashboard.php">Homepage</a></h3>


	<h3><a href="../Controller/logout.php">Logout</a></h3>

	<br>

	<h1>Please collect your payment receive from Accountant.</h1>

	<br>

	<a href="dashboard.php">Go Back</a>

</body>
</html>