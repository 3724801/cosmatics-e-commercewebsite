<?php

// START CONNECTION

$ServerName= "localhost";
$UserName= "root";
$Password="";
$DataBaseName="bella";

$connection=new mysqli($ServerName,$UserName,$Password,$DataBaseName);

if($connection->connect_error){
    echo $connection->connect_error;
}else{
    echo "Connection Successed";
    

    
}







?>