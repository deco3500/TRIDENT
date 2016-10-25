<?php
 
 
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "cb17cc0ed69c61ad";
 $dbname = "responses";
 
 // Create connection
 $conn = new mysqli("localhost", "root", "cb17cc0ed69c61ad", "responses") or die($conn->connect_error);
 
 return $conn;
}
 
?>