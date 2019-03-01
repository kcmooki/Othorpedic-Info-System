<?php

class Connect
{


  private $servername;
  private $username;
  private $password;
  private $databaseName;
/**
*This function connects to the database and returns an error message if failed

*/

  public function __construct() {
    // Initilize instances
    $this->servername = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->databaseName= "dhealth";
  }

  public function connect()
  {

     // Create connection
     $con = new mysqli($this->servername, $this->username,$this->password,$this->databaseName);

      // Check connection
      if ($con->connect_error)
      {     
          die("Connection failed: " . $con->connect_error);
      }
      else
      {
          echo "successfully connected!!";
      }

  }

}

$obj = new Connect();
$obj->connect();
?>
