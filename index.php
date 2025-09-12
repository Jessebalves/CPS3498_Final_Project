<!--PHP is a server side scripting language--> 
<html> 
    <head>
        <title>CPS_3498_Project</title> 
        <body>
            <h1>Lets get this started</h1>

            <!--HTML form that is sent to our PHP section of code--> 
            <form action = "index.php" method = "post">
                <label> Username </label>
                <input type = "text" name = "Username"> 
                <br>
                <label> Password </label>
                <input type = "text" name = "Password">
                <br>
                <input type = "submit" value = "Log In">
            </form> 

            <!--PHP is embedded into the html-->
            <?php
                //This is how you do comments in PHP
                //Variables and print in PHP
                $group_name = "Scavengers";
                echo "Group Name: ", $group_name; 

                echo "<br>Username: {$_POST["Username"]}";
                echo "<br>Password: {$_POST["Password"]}"; 
            ?>

        </body> 
    </head>
</html> 
