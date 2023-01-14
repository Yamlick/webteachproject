<?php

$doctorname= $reservation= "";
if($_SERVER['REQUEST_METHOD']=="POST")
{

$doctorname=$_POST['doctorname'];

$reserve=$_POST['reservation'];


$store = array(
    'doctorname' => $doctorname, 
    'reservation' => $reservation
);



if (empty($doctorname)) {

}
if (empty($reservation)) {

}
    


$existingdata = file_get_contents('../model/reservation.json');
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$store;
$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
     
if(empty($doctorname) || empty($reservation))
  {  echo "Please Enter Everything Correctly";
}
else{
    if(file_put_contents("../model/reservation.json", $jsondata)) 
    {
        echo "Reservation Submitted <br>";
        header("Location: ../view/dashboard.php");
    } 
    else
        echo "no data saved";
}
        
//$data = file_get_contents("../Files/data.json");
//$mydata = json_decode($data);


}
?>