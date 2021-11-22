<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$hostname = 'db';

// Database user name
$user = 'MYSQL_USER';

//database user password
$password = 'MYSQL_PASSWORD';

// database name
$database = 'MYSQL_DATABASE';
// check the mysql connection status

$conn = new mysqli($hostname, $user, $password, $database);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>