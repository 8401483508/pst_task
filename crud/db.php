<?php
$servername = "db";
$username = "crudapp";
$password = "Maruti@0017";
$dbname = "crudapp";

//creating connection

$conn = new mysqli($servername,  $username, $password, $dbname);

// check the connection
if ($conn->connect_error){
    die("connection fail:" .$conn->connect_error);
}
?>