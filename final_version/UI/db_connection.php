<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "seproject";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
