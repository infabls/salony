<?php 
ini_set('display_errors', 1);
$dev_mode = true;
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "salony";
$base_uri = "http://salony/";
$db_uri = "http://360gis";
$url = $db_uri . strtok($_SERVER["REQUEST_URI"], '?');