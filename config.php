<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "giftos";

$con = mysqli_connect($server, $username, $password, $database);

if(!$con){
        die("Connection failed ".$con->error);
}

?>