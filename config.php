<?php 
define('DB_SERVERNAME','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','vehicle');

$con=new mysqli(DB_SERVERNAME,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($con->connect_error)
{
	die("Error:.".$con->connect_error);
}
?>