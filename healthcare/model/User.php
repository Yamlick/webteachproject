<?php 

	require 'Connect.php';
	function Checklogin($username, $password) {
		$conn = connect();
		if ($conn) {

			$sql = "SELECT id FROM patientinfo WHERE username = '" . $username . "' and password = '" . $password . "'";

			$res = mysqli_query($conn, $sql);

			if ($res->num_rows === 1)
				return true;
			return false;
		}
	}





	function passwordchange($username, $oldpass, $newpass){

		$conn = connect();
		if($conn){
			$sql = "UPDATE `patientinfo` SET `password` = '$newpass' WHERE username = '" . $username . "' and password = '" . $oldpass . "'";
			mysqli_query($conn, $sql);

			return true;
		}

		return false;
	}

	function updateprofile($email, $uname){
		$conn = connect();

		if($conn){
			$sql = "UPDATE `patientinfo` SET  `email` = '$email' WHERE `username` = '$uname'";

			mysqli_query($conn, $sql);
			return true;
		}
		else{
			return false;
		}
	}


	function viewprofile($username, $password) {
		$conn = connect();
		if ($conn) {
			$sql = "SELECT firstname , lastname , gender, occupation, bpcondition, age, bg, email FROM patientinfo WHERE username = '" . $username . "' and password = '" . $password . "'";
			$res = mysqli_query($conn, $sql);
			$users = array();
			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}



	function registration($fname , $lname , $gen, $occp, $bpcon, $ag, $blood, $em, $user, $pass){
		$conn = connect();
		if($conn){
			$stmt = $conn->prepare("Insert INTO patientinfo (firstname , lastname , gender, occupation, bpcondition, age, bg, email, username, password) VALUES(?,?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param("ssssssssss", $firstname , $lastname , $gender, $occupation, $bpcondition, $age, $bg, $email, $username, $password );

			$firstname = $fname;
			$lastname = $lname;
			$gender = $gen;
			$occupation= $occp;
			$bpcondition = $bpcon;
			$age = $ag;
			$bg = $blood;
			$email = $em;
			$username = $user;
			$password = $pass;
			
			
			$stmt->execute();
			// die($stmt->error);
			return true;
		}
		else{
			return false;
		}
	}


	function search($id) {
		$conn = connect();
		if ($conn){
			$sql = "SELECT ID, firstname , lastname , gender, time, fees FROM doctorinfo WHERE Id = '$id'";
			$res = mysqli_query($conn, $sql);
			$users = array();

			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
			else{
				$_SESSION['searcha'] = "No data found";
				$_SESSION['fl'] = false;
				/*header("Location: ../view/adminsearch.php");*/
			}
		}
		//return array();
	}



	

	















?>