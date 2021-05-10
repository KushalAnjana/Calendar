<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="calendar";
// Create connection
$conn = new mysqli($servername, $username, $password,"$dbname");

// Check connection
if(!$conn){
  die('Could not Connect MySql Server:' .mysqli_error());
}
?>