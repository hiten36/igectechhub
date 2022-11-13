<?php

$username="root";
$servername="localhost";
$password="";
$database="igectechhub";

$connect1=mysqli_connect($servername,$username,$password,$database);
if(!$connect1)
{
    echo mysqli_connect_error();
}

?>