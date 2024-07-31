<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="makemovement_db";

$connect_db = mysqli_connect($server_name,$username,$password,$database_name);

if(!$connect_db)
{
    echo"Server connection error";
}
?>