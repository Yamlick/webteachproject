<?php 
session_start() ;
include('../model/User.php');


	$username = $password = "";

	if($_SERVER['REQUEST_METHOD'] === "POST"){
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$username = test_input($_POST['username']);
		$password = test_input($_POST['password']);
		$message = "";
		if(empty($username)){
				$message .= "Username can't be Empty";
				$message .= "<br>";
			}

		if(empty($password)){
				$message .= "Password can't be Empty";
				$message .= "<br>";
		}




		if($message === ""){
			$flag = Checklogin($username, $password);

			$name = viewprofile($username, $password);
			
			$x = $name[0]['lastname'];
			$y = $name[0]['firstname'];
			
			if($flag){

				$_SESSION['auth'] = "Patient";
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['lastname'] = $x;
				$_SESSION['firstname'] = $y;
				
				if(!empty($_POST['remember'])){

					setcookie('username',$_POST['username'],time() + 60*60*24);

					setcookie('password',$_POST['password'],time() + 60*60*24);
					
					header("Location: ../view/dashboard.php");
				}
				else{

					setcookie('username', "");
					setcookie('password', "");
					header("Location: ../view/dashboard.php");

				}
				

				
			}			
			else
			{
				$_SESSION['error'] = "Please correct your username/password";
				header("Location: ../view/login.php");
			}
		}
		else
		{
			$_SESSION['error'] = $message;
			header("Location: ../view/login.php");
		}	






















		$a = true;	
		$flag = false;

		if ($message === ""){

			for($i=0; $i<sizeof($data); $i++)
			{
				if($data[$i]->username === $username and $data[$i]->password === $password){
					$flag = true;
					

					$_SESSION['firstname'] = $data[$i]->firstname;
					$_SESSION['lastname'] = $data[$i]->lastname;
					$_SESSION['gender'] = $data[$i]->gender;
					$_SESSION['Occupation'] = $data[$i]->Occupation;
					$_SESSION['age'] = $data[$i]->age;
					$_SESSION['email'] = $data[$i]->email;
					$_SESSION['username'] = $data[$i]->username;
					$_SESSION['password'] = $data[$i]->password;
					$_SESSION['bg'] = $data[$i]->password;

					break; 
				}
			}
		}
		else{

			
			$_SESSION['msg'] = $message;
			header("Location: ../view/login.php");
			echo "<br>";
			echo "<br>";

			$a = false;
			
		}

	
		if(!$flag){

			if($a){
				$_SESSION['us'] = "Username / Password incorrect. Try again...";
				header("Location: ../view/login.php");
				echo "Username / Password incorrect. Try again...";

				echo "<br>";
				echo "<br>";

			}

			
		}

		
		else
		{
			echo "<br>";
			echo "<br>";
			$_SESSION['auth'] = "Admin";
			
			header("Location: ../view/dashboard.php");
			
		}
	}




?>

