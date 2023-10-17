<?php
// database connection
$hostname = "localhost"; //host name for server
$username = "root"; //username for database
$password = ""; //password for database
$dbname = "krm";  //database name for connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);

if ($conn) {
    echo "Connection Successful";
} else {
    echo "Connection Failed";
}
