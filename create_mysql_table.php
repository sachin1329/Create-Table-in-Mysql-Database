<?php

//required to connect to desired Databse
require "connect_to_mysql.php";  

//contains Test info that can be used to create a login page
$sqlCommand = "CREATE TABLE password (
		 		 id int(11) NOT NULL auto_increment,
				 username varchar(24) NOT NULL,
		 		 password varchar(24) NOT NULL,
		 		 last_log_date date NOT NULL,
		 		 PRIMARY KEY (id),
		 		 UNIQUE KEY username (username)
		 		 ) ";
if (mysql_query($sqlCommand)){ 
    echo "Your admin table has been created successfully!"; 
} else { 
    echo "CRITICAL ERROR: admin table has not been created.";
}
?>