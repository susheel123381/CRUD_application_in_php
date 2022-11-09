<?php
// server name,user name,password,database name 
$con=new mysqli('localhost','root','','test');
if(!$con)
{
    die(mysqli_error($con));
}
?>