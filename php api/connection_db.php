<?php
$servername = "localhost";
$username = "codehafe_demo_db";
$password = "codehafe_demo_db";
$dbname = "codehafe_demo_db";

$con = new mysqli($servername, $username, $password, $dbname);
if (!$con) { die("Connection failed: " . mysqli_connect_error()); }

