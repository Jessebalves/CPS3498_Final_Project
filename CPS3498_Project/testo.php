<?php
include "database_config.php";

$connection = mysqli_connect($host,$username,$password,$dbname) or die;

$user = $_POST["login_username"];
$pass = $_POST["login_password"];

$sql_query = "Select username, password from 2025F_CPS3498_01.login_info where username in ('$user') and password in ('$pass')"; 

$result = mysqli_query($connection, $sql_query); 

if($result){
	if(mysqli_num_rows($result) == 1){
		echo "successful login";
	}
	else{
		echo "not successful"; 
	}
} 
mysqli_free_result($result);
mysqli_close($connection); 

?>
