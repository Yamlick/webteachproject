<?php  
	require('../model/User.php');
	session_start();



	$id = "";
	
	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		function test_input($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$id = test_input($_POST['id']);

			$message = "";
			if(empty($id)){
				$message .= "Insert ID to search";
				$message .= "<br>";
			}

			$_SESSION['sess'] = false;

			if (true)
			{

				$_SESSION['result'] = search($id);

				if(isset($_SESSION['result'])){
					
					$_SESSION['sess'] = true;
					header("Location: ../view/searchdoctor.php");
				}
				else {
					echo "result not found";
				}
			}
			else{
				header("Location: ../view/dashboard.php");


			}

							

	}

?>



