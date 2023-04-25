<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$hostname_db = "localhost";
$database_db = "lawyer";
$username_db = "root";
$password_db = "";
//const HTTP_BASE = 'http://192.168.1.3/lawyer/';
//const HTTP_BASE_ADMIN = 'http://192.168.1.3/lawyer/admin/';
const HTTP_BASE = 'http://127.0.0.1/lawyer/';
const HTTP_BASE_ADMIN = 'http://127.0.0.1/lawyer/admin/';
try {
	if ($con = mysqli_connect($hostname_db, $username_db, $password_db)) {
		$db = mysqli_select_db($con, $database_db);
		if (!$db) {
			throw new Exception('Database selection failed');
		}
	}
} catch (Exception $e) {
	echo $e->getMessage();
}

$xFormarray = $_POST;
$xFormarray += $_GET;
if (!isset($_GET['page'])) {
	$page = 1;
} else {
	$page = $_GET['page'];
}
if ($page < 1) {
	$page = 1;
}
$max_results = "30";
$from = (($page * $max_results) - $max_results);
function getExtension($str)
{
	$i = strrpos($str, ".");
	if (!$i) {
		return "";
	}
	$l = strlen($str) - $i;
	$ext = substr($str, $i + 1, $l);
	return $ext;
}
//print_r($con);



/*$con=mysqli_connect("localhost","root","");

if(!$con){	
	die('Could Not Connect: '.mysqli_error());	
}
$db = mysqli_select_db($con, "reconsult");
if (!$db) 
{
    error_log("Database selection failed: " . mysqli_error($con));
    die('Internal server error');
}
*/
