# wingify-tech-task

For running the application you need to install WAMP or XAMP if you are using Windows.
For Linux LAMP should be installed. If you are using Linux, you need to install phpmyadmin separately.

Open the db_connection.php file in wingify/includes/
Follow the instructions written in the comment there. 

Copy the folder and paste it to 
(For windows if you have installed WAMP):

c:/wamp/www/

(For windows if you have installed XAMP):

c:/xamp/htdocs/

(For Linux):

/var/www/html/

--------------------------------------------------------

open your browser and type localhost/phpmyadmin

create a new database by clicking on the option given in the left panel, name the database wingify.
after creating the database click on the import option given in the menubar.
browse the file and select wingify.sql from this folder.

now open a new tab and type localhost/wingify
you will see the application running.

------------------------------------------------------

I have used Material Design for Bootstrap
Version: MDB Free 4.1.1 for the frontend

For backend I have used PHP and the database is in Mysql

I am fetching the data by Ajax and JavaScript
