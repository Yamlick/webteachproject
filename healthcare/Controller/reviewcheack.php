<?php

$doctorname= $review= "";
if($_SERVER['REQUEST_METHOD']=="POST")
{

$doctorname=$_POST['dname'];

$review=$_POST['rev'];


$store = array(
    'doctorname' => $doctorname, 
    'review' => $review
);



if (empty($doctorname)) {

}
if (empty($review)) {

}
    


$existingdata = file_get_contents('../model/review.json');
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$store;
$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
     
if(empty($doctorname) || empty($review))
  {  echo "Please Enter Everything Correctly";
}
else{
    if(file_put_contents("../model/review.json", $jsondata)) 
    {
        echo "Review Submitted <br>";
        header("Location: ../view/dashboard.php");
    } 
    else
        echo "no data saved";
}
        
//$data = file_get_contents("../Files/data.json");
//$mydata = json_decode($data);


}
?>