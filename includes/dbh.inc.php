<?php
//This page runs the connection to the database

//<<FYI The dbcontroller.php is more OOP focused while this is procedural programming oriented. I'm much better at procedural programming so I made this.>>

//Creating the variables below
$servername = "localhost";
$dBUsername = "dw19018";
$dBPassword = "RE4g0ypf";
$dBName = "dw19018";

//This line runs the connection to the database
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

//This checks to see if the connection failed in the above line
//In English: 'If connection does not work, kill connection and output text.'
if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
 ?>
