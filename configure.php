<?php

$host = "sql212.infinityfree.com";
$username = "if0_42721208";
$password = "hJ8zVw9Cj1";
$database = "if0_42721208_slicejoy";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

?>