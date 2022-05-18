<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "elearn";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect!");
}
