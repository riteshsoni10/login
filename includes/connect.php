<?php

$server="localhost";
        $database="login";
        $username="student";
        $password="Soni@1995";
        
 if($connect=mysql_connect($server,$username,$password,$database))
 {
     
 }
 else
     {
     echo "Database connection error";
 }
 
     
         
?>
