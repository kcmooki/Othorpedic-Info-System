<?php
include "connect.php";
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "dhealth");
 
// Check connection
if($link === false){
    //die("ERROR: Could not connect. " . mysqli_connect_error());
}
 	 // Fetching Values from URL.
				
// Escape user inputs for security
$idnumber = mysqli_real_escape_string($link, $_REQUEST['idnumber']);
$hospitalref = mysqli_real_escape_string($link, $_REQUEST['hospitalref']);
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$time = mysqli_real_escape_string($link, $_REQUEST['time']);
$typebooking = mysqli_real_escape_string($link, $_REQUEST['typebooking']);

// attempt insert query execution
$sql = "INSERT INTO booking (idnumber, hospitalref, date, time, typebooking) 
VALUES ('$idnumber','$hospitalref','$date', '$time','$typebooking')";

if(mysqli_query($link, $sql)){
    echo "Booking successfully.";
	//header("location:booked.html");
//echo "<a href='register-form.html'>Click here to go to Register</a>";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

						