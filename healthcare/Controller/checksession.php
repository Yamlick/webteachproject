<?php
session_start();
if($_SESSION['auth'] == "Patient"){

}
else{
    $_SESSION['status'] = "Access Deigned. Please login to continue...";
    header("Location: ../view/login.php");
}
?>