# CPS3498_Final_Project
Repository dedicated for Computer Security final project.

## Important Notes!
NEVER EVER push database_config.php to this repository. This repository is pubilc, so if you push the database credentials this will cause people to have your credentials to the database, leading to unauthorized access. 

## Setting up development environment
Two software you are going to need is VSCode and XAAMP to set up the development environment to run PHP on a local web server.  

* Setting up XAAMP (Development Environement software that allows you to host web server)
  * Go apachefriends.org for the download of XAAMP, there will be different download packages for Windows, Linux, and MacOS.
  * When going through the selecting components process, you can select all the tabs.
  * On the installation folder tab, REMEMBER this location! This directories location is crucial to setting up the environment.
  * Follow the rest of the installation until completion. When you open XAAMP a control panel should now appear.
  * On the control panel, the two modules that matter the most are "Apache" and "MySQL", these are Apache and MySQL servers that will be hosted on your local machine. All you have to do is press start to get the servers started. Apache should be running on ports 80 and 443(HTTP and HTTPS). The MySQL server by default runs on port 3006, if you already have a MySQL server running on your machine this will cause issues, just look up how to change the port number for the MySQL server on XAAMP, you can change the port number to something like 3007 if you encounter this issue. When you are done using the server, make sure to click stop, as these servers will still be active and running even if you close or shutdown your computer. 

## Resources
HTML/CSS tutorials : https://www.youtube.com/watch?v=HGTJBPNC-Gw  
MYSQL tutorials : https://www.youtube.com/watch?v=5OdVJbNCSso&t=2229s  
PHP tutorials : https://www.youtube.com/watch?v=zZ6vybT1HQs&t=3629s
