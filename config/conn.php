<?php
$host="localhost";
$user="root";
$pass="";
$db="portf";

$conn=new PDO("mysql:hostname=$host,dbname=$db",$user,$pass);

echo "Connect Done";

?>