# CodeIgniter Basic Docker Setup

To use this you will need to do the following

1. add the following line to your /etc/hosts file on your computer
<code>127.0.0.1     ci.test</code>

2. When setting up the database.php file you will use the following credentials:
hostname = db
database = ci
username = ci
password = ci

All other variables should be stay the same for the mysqli db driver

Make sure you stop all other docker containers before starting this one up. 
To stop docker containers
Open your terminal and `cd` to the directory where an active container is running and enter 
<code>docker-compose stop</code>

Then `cd` to the root folder of this project and type
<code>docker-compose up -d</code>

