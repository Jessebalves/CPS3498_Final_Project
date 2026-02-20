<?php
include "database_config.php";
$connection = mysqli_connect($host,$username,$password,$dbname) or die;


$user = $_POST["login_username"];
$pass = $_POST["login_password"];
$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

$sql_query = "Insert into 2025F_CPS3498_01.login_info(username,password) values('$user','$hashedPassword')"; 

$result = mysqli_query($connection, $sql_query); 


try{
if($result){
	echo "Successfully created an account!";
	echo "<a href='login_page.html'><p>Back to login page</p></a>";
}
else{
	echo "Failure occurred";
}
}

catch(Exception $e){
	echo "Exception homie";
}


mysqli_close($connection); 

?>