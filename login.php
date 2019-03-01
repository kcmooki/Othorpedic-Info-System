<?php

// Grab User submitted information
$username = $_POST["username"];
$password = $_POST["password"];

// Connect to the database
$con = mysql_connect("localhost","root","");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("dhealth",$con);

$result = new mysql_query("SELECT username, password FROM users WHERE username = $password");

$row = mysql_fetch_array($result);

if($row["username"]==$email && $row["password"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>