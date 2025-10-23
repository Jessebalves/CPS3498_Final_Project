<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>Team 2 Project</title>
	<link rel = "stylesheet" href = "style.css">
</head>
<body>
	<?php
	include "database_config.php";

	$connection = mysqli_connect($host,$username,$password,$dbname) or die;

	$user = $_POST["login_username"];
	$pass = $_POST["login_password"]; 
	

	$sql_query = "Select password from 2025F_CPS3498_01.login_info where username = '$user'"; 

	$result = mysqli_query($connection, $sql_query); 

	if($result){
		if(mysqli_num_rows($result) > 0){
			while($rows = mysqli_fetch_array($result)){
				$stored = $rows['password'];
				if (password_verify($pass, $stored)){
					echo "Password is valid.";
					echo "Welcome back $user.";
					echo "<h1 style = 'text-align:center;'><u>Welcome to Team 2's Webpage!</u></h1>";
					echo "<div class = 'container'>";
					echo "<h3 style = 'text-align:center;'>Encryption</h3>";
					echo "<img src = 'Encry.png' width ='90%' style = 'display:flex;justify-content:center;align-items:center;'>"; 
					echo "<p> Encryption is the action of turning Plaintext into Ciphertext, and there are many different methods of achieving this.</p>";
					echo "</div>";
					echo "logout";

    				} else {
        				echo "<h2 style = 'text-align:center;'>You are not authorized to view this page's contents.<h2>";
    				}
			}
		}
		else{
			echo "<h2 style = 'text-align:center;'>You are not authorized to view this page's contents.<h2>"; 
		}
	} 
	mysqli_free_result($result);
	mysqli_close($connection); 

	?>
</body>
<html>
