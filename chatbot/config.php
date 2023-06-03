<?php

$host="localhost";
$user="root";
$password='';
$db_name="db";

$con=mysqli_connect($host,$user,$password,$db_name);

if(!$con)
{
	print("Not Connected<br>".mysqli_connect_error());

}
else
{
	echo("Connected");
}
?>