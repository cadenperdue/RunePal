<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'perdueca');
define('DB_PASSWORD', '900625468');
define('DB_NAME', '4800-191-t2');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
