<!--PHP is a server side scripting language--> 
<html> 
    <head>
        <title>CPS3498_Project</title> 
        <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <h1>Log In Page</h1>
            <form action = "index.php" method = "post">
                <label> Username </label>
                <input type = "text" name = "Username"> 
                <br>
                <label> Password  </label>
                <input type = "text" name = "Password">
                <br>
                <input type = "submit" value = "Log In">
            </form> 
            <?php
                //$name = "Jesse Alves";
                //echo $name, " is my name"; 
                //echo "<br> {$name} why doesnt this work";

                //$testo = 3.14; 
                //$testo = floor($testo);
                //echo "<br> {$testo}"; 

                if(isset($_POST["Username"]) && isset($_POST["Password"])){
                    $username = $_POST["Username"]; 
                    $password = $_POST["Password"];
                    echo "USERNAME: ", $username;
                    echo "<br>PASSWORD: ", $password; 
                }




                //echo "<br>Username: {$_POST["Username"]}";
                //echo "<br>Password: {$_POST["Password"]}"; 
            ?>
        </body> 
</html> 
