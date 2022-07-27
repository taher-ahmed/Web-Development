<?php
// connect with the database
$servername="localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName="loginsystem";

$conn = mysqli_conncect ($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn){
  die("Connection failed:".mysqli_conncect_error());

}