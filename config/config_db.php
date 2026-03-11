<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "filter";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

// Set timezone to IST (+05:30) so archiving happens at exactly 12:00 AM IST
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');
mysqli_query($conn, "SET time_zone = '+05:30'");


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$autoDeleteQuery = "DELETE FROM records WHERE to_date < '$current_date'";
mysqli_query($conn, $autoDeleteQuery);
?>
