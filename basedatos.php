<?php
$servername = "MySQL80";
$database = "semana_ciencias";
$username = "root";
$password = "Path099%7k21";
// Create connection
$conn = mysqli_connect($MySQL80, $root, $Path099%7k21, $semana_ciencias);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>