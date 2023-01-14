<?php

	session_start();
	require('../model/User.php');

	$_SESSION['info'] = viewprofile($_SESSION['username'], $_SESSION['password']);

	echo $_SESSION['info'];

	if(isset($_SESSION['info'])){
		header("Location: ../view/viewprofile.php");
	}














?>