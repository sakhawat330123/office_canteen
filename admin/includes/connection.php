<?php 
  define('SERVERNAME', 'localhost');
  define('USERNAME', 'root');
  define('PASSWORD', '');
  define('DATABASENAME', 'office_canteen');


  $con = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);

  if ($con->connect_error) {
    die("Connection Fail Due To : ". $con->connect_error);
  }
  

  echo "Database Connection Successfull";

 ?>