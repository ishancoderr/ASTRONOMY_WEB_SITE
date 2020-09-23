<?php
$user='root';
$pass='';
$db='astro';

$connection=mysqli_connect('127.0.0.1',$user,$pass,$db) ;

if(mysqli_connect_errno()){
	die('Database connection failed' .mysqli_connect_error());
}else{
	//echo "Connection successful";
}
?>