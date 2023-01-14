<?php  

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

			if($message === "")
			{
				$f = fopen("../model/patient.json", 'r');

				$s = fread($f, filesize("../model/patient.json"));

				$data = json_decode($s);
				

				

				echo "<table border=1>";
				echo "<tr>";
				echo "<th>ID</th>";
				echo "<th>Firstname</th>";
				echo "<th>LastName</th>";
				echo "<th>Gender</th>";
				echo "<th>Date of Birth</th>";
				echo "</tr>";
				




				for($i=0; $i<sizeof($data); $i++)
				{
					$check = $data[$i]->id;
					if($check === $id){

						echo "<tr>";
						echo "<td>" . $data[$i]->id . "</td>";
						echo "<td>" . $data[$i]->firstname . "</td>";
						echo "<td>" . $data[$i]->lastname . "</td>";
						echo "<td>" . $data[$i]->gender . "</td>";
						echo "<td>" . $data[$i]->dob . "</td>";
						echo "</tr>";
					}
				}

				echo "</table>";
				

				fclose($f);



			}
			else
			{
				echo $message;
			}

	}

?>



