<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>Team 2 Project</title>
</head>
<body>
  <style>
    body {
      background-color: #cce6ff;
      font-family: 'Segoe UI', sans-serif;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .containa{
      background-color:white;
      width:50%;
      border:3px solid black;
      padding-left:10px; 
      padding-right10px;
      padding-bottom: 30px;
      margin:auto;
      margin-bottom:40px;
      display:flex-box;
    }
  </style>
	<?php
	include "database_config.php";

	$connection = mysqli_connect($host,$username,$password,$dbname) or die;
	
	if(!isset($_POST["login_username"])){
		$user = "";
	}
	else{
		$user = mysqli_real_escape_string($connection, $_POST["login_username"]);
	}

	if(!isset($_POST["login_password"])){
		$pass = "";
	}
	else{
		$pass = mysqli_real_escape_string($connection, $_POST["login_password"]);
	}

	//$user = mysqli_real_escape_string($connection,$_POST["login_username"]);
	//$pass = mysqli_real_escape_string($connection, $_POST["login_password"]);  
	

	$sql_query = "Select password from 2025F_CPS3498_01.login_info where username = '$user'"; 

	$result = mysqli_query($connection, $sql_query); 

	//$user = mysqli_real_escape_string($connection,$_POST["login_username"]);
        //$pass = mysqli_real_escape_string($connection,$_POST["login_password"]);
	if($result){		
		if(mysqli_num_rows($result) > 0){
			while($rows = mysqli_fetch_array($result)){
				$stored = $rows['password'];
				if (password_verify($pass, $stored)){
					echo "Welcome back $user.<br>";
					echo "<a href='logout.html'>logout</a>";
					echo "<h1 style = 'text-align:center;'><u>Welcome to Team 2's Webpage!</u></h1>";
					echo "<h3 style = 'text-align:center;'>What Computer Security Concepts does this project use?</h3>";
					echo "<div class = 'containa'>";

					echo "<h3 style = 'text-align:center;'>Salt Hashing</h3>";
					echo "<img src = 'salttt.jpg' width ='90%' style = 'display:flex;justify-content:center;align-items:center;margin:0 auto'>";
					echo "<p> Salt Hashing is a computer security method that adds extra layer of security to a string of characters, which is usually used for passwords.
					 Salting adds extra characters to the end of a password before being hashed for extra security. This also allows for users to have similar passwords, as 
					they should have different salts applied to the end of their password. Even though users can share the same password, this is not a security risk due to 
					the hash and salt combo. Hashing takes a string and turns it into a fixed length of different characters based upon the hashing algorithm. So for example, 
					if your password is Apple, the salt added to the end would be yrZD, and after the original string is hashed, it displays as 9bf40cd8c1e2cbda487.
					This also adds an extra layer of secuirty, because if a hacker gains access to our database, the passwords are not stored in plaintext. Hackers can still 
					crack the hash, however, it is more complicated and time consuming to crack if salt hashing is used.</p>";
					echo "</div>";

					echo "<div class = 'containa'>";
					echo "<h3 style = 'text-align:center;'>Databases</h3>";
					echo "<img src = 'db_pic.jpg' width ='90%' style = 'display:flex;justify-content:center;align-items:center;margin:0 auto'>";
					echo "<p> Databases are a central location for logically related information/data. For our project, we needed a database server
					to store user's credentials. In our case, we are using Kean's imc server, which is a database server used on campus. We would like
					to acknowledge Dr.Huang and Professor Wang because they are the ones who helped us create a database on the imc server.
					This made the process much easier as we did not have to host our own database server. </p>";
					echo "</div>";

					echo "<div class = 'containa'>";
					echo "<h3 style = 'text-align:center;'>SQL Injection</h3>";
					echo "<img src = 'injecto.png' width ='90%' style = 'display:flex;justify-content:center;align-items:center;margin:0 auto'>";
					echo "<p>SQL Injection is when a malicious user tries to manipulate a database by injecting their own SQL command. With a little
					knowledge of Structured Query Language(SQL) and how the website interacts with the database, a hacker can use this to their 
					advantage. Hackers can write their own queries to extract information from the database, insert their own data, modify
					existing data, or even worse, delete data and drop entire tables. Hackers can even write their own queries to a database
					through input tags on a webpage, like username and password inputs used on all log in pages. Most modern websites protect
					against SQL injection, and that is the idea of our project.</p>";
					echo "</div>";

					echo "<hr>";
					echo "<footer>";
					echo "<h3 style = 'text-align:center;'>Contributers</h3>";
					echo "<p style = 'text-align:center;'>Jesse Alves</p>";
					echo "<p style = 'text-align:center;'>David Arosemena</p>";
					echo "<p style = 'text-align:center;'>Muhammed Elhowary</p>";
					echo "<p style = 'text-align:center;'>Roydon Hampton</p>";
					echo "<p style = 'text-align:center;'>Elianni Lerieco</p>";
					echo "<p style = 'text-align:center;'>Matthew Ngoy</p>";
					echo "<p style = 'text-align:center;'>Mariah Weatherspoon</p>";
					echo "<br>"; 
					echo "</footer>";

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
