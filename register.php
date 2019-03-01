<?php
include "connect.php";

/* Attempt MySQL server connection.*/
$link = mysqli_connect("localhost", "root", "", "dhealth");

 // Check connection
if($link === false){
	
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
	          
              // Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$idnumber = mysqli_real_escape_string($link, $_REQUEST['idnumber']);
$dateofbirth = mysqli_real_escape_string($link, $_REQUEST['dateofbirth']);
$contact = mysqli_real_escape_string($link, $_REQUEST['contact']);
$contact2 = mysqli_real_escape_string($link, $_REQUEST['contact2']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$facility = mysqli_real_escape_string($link, $_REQUEST['facility']);
$hospitalref = mysqli_real_escape_string($link, $_REQUEST['hospitalref']);
 
// attempt insert query execution
$sql = "INSERT INTO patient_details (firstname, lastname, idnumber, email, dateofbirth, contact, contact2, address,facility, hospitalref) 
VALUES ('$firstname','$lastname','$idnumber', '$email','$dateofbirth','$contact','$contact2','$address','$facility', '$hospitalref')";

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