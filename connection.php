<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sene30project";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
