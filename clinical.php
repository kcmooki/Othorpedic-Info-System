<?php
include "connect.php";

/* Attempt MySQL server connection.*/
$link = mysqli_connect("localhost", "root", "", "dhealth");

 // Check connection
if($link === false){
	
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
	          
              // Escape user inputs for security
$hospitalref = mysqli_real_escape_string($link, $_REQUEST['hospitalref']);
$pathology = mysqli_real_escape_string($link, $_REQUEST['pathology']);
$icd10 = mysqli_real_escape_string($link, $_REQUEST['icd10']);
$case_complexity = mysqli_real_escape_string($link, $_REQUEST['case_complexity']);

 
// attempt insert query execution
$sql = "INSERT INTO clinical_data (hospitalref, pathology,icd10,case_complexity) 
VALUES ('$hospitalref','$pathology','$icd10','$case_complexity')";

if(mysqli_query($link, $sql)){
	echo "Suscess";
	//header('Location: clinical.html'); 
//echo "<a href='register-form.html'>Click here to go to Register</a>";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>