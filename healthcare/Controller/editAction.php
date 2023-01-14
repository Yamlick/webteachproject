<?php  
session_start();
require('../model/User.php');
$email = "";


	if ($_SERVER['REQUEST_METHOD'] === "POST"){

			function test_input($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			$email = test_input($_POST['email']);
			


			$message = "";
			
			
			if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $email="you must enter email";
    }
    else{
        $email= $email;
    }

	
			

			
		


	$flag = updateprofile($email, $_SESSION['username']);
	
	

	if($flag) {

		$_SESSION['update'] = "Profile Updated Successfully";
		header("Location: ../Controller/cheakview.php");
	}

	else{
		$_SESSION['update'] = $message;
		header("Location: ../view/editprofile.php");
	}
}
		


			
			
		

?>








