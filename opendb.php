<?php
$servername="localhost";
$username="root";
$password="";
$dbname="form";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   
    // echo "Connection created successfull";
  } catch(PDOException $e) {
    echo  $e->getMessage();
  }
  
  
?>