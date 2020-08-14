<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// define('DB_SERVER', 'localhost');
// define( 'DB_HOST', 'localhost' );
// // define('DB_USERNAME', 'root');
// define( 'DB_USER', 'raoufcvc_demo' );
// define('DB_PASSWORD',  'azerty@2020');
// define('DB_NAME', 'raoufcvc_demo');
 
// /* Attempt to connect to MySQL database */
// $link = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
$link = new wpdb('raoufcvc_demo','azerty@2020','raoufcvc_demo','localhost');
 
//  $link = mysqli_connect('raoufcvc_demo','azerty@2020','raoufcvc_demo','localhost');
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>