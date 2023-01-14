<?php 
include('../model/User.php');

$validatecheckbox="";
$v1=$v2=$v3=NULL;
$message = "";
$sent = "";
$group= "";




$fname= $lname= $gender= $Occupation= $age= $bg= $email= $uname= $pass = $bph = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $gender = isset($_REQUEST['gender']) ? ($_REQUEST['gender']) : NULL;
    $Occupation=isset($_REQUEST['Occupation']) ? ($_REQUEST['Occupation']):NULL;
    $age=$_REQUEST["age"];
    $bg=$_REQUEST["bg"];
    $email=$_REQUEST["email"];
    $uname=$_REQUEST["uname"];
    $pass=$_REQUEST["pass"];
    $bph = $_REQUEST["BPH"];


    if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<6))
    {
        $fname= "you must enter First Name";
    }
    else
    {
        $fname=$_REQUEST["fname"];
    }
    if(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<5))
    {
        $lname= "you must enter Last Name";
    }
    else
    {
        $lname=$_REQUEST["lname"];
    }

    if (empty($gender)) {
        $sent .= "Gender not Selected";
        $sent .= "<br>";
    }
    if (empty($Occupation)) {
        $message .= "Occupation not Selected";
        $message .= "<br>";
    }
    if(isset($_REQUEST["age"]))
    {
        $age= $_REQUEST["age"];
    }
    else{
        $age= "please enter age";
    }
    if (empty($bg)) {
        $group .= "Blood Group not Selected";
        $group .= "<br>";
    }
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $email="you must enter email";
    }
    else{
        $email= $email;
    }
    if(empty($uname)){
        $message .= "Username can't be Empty";
        $message .= "<br>";
    }
    if(isset($_REQUEST["pass"]))
    {
        $pass= $_REQUEST["pass"];
    }
    else{
        $pass="please enter password";
    }
    if(!isset($_REQUEST["BPH"])&&!isset($_REQUEST["BPL"])&&!isset($_REQUEST["BPN"]))
    {
        $validatecheckbox = "please select at least one checkbox";   
    }
    else{
    if(isset($_REQUEST["BPH"]))
    {
        $v1= $_REQUEST["BPH"];
    }
    if(isset($_REQUEST["BPL"]))
    { 
        $v2= $_REQUEST["BPL"];
    }
    if(isset($_REQUEST["BPN"]))
    {
        $v3= $_REQUEST["BPN"];
    }
    }





    if($message == ""){

        $flag = registration($fname, $lname, $gender, $Occupation, $bph, $age, $bg, $email, $uname, $pass);

        

        if($flag) {

            $_SESSION['as'] = "Registration Successful";
            header("Location: ../view/patientregistration.php");
        }
    }
    else{
        $_SESSION['as'] = $message; 
        header("Location: ../view/patientregistration.php");
    }


}
?>