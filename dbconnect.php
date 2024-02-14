<?php 

define('Db_server','localhost');

define('Db_user','root');

define('Db_pass','');

define('Db_name','xain');

$dbconnect = mysqli_connect(Db_server,Db_user,Db_pass,Db_name);

if($dbconnect == true){
    echo"Database connected";
}else{
    die("data base are not connect".mysqli_connect_error());
}