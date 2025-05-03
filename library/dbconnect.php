<?php
// database connection config
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '123456';
$dbname = 'necom_db';
global $con;

/*
connecting to mysql database
*/
$con = mysqli_connect($dbhost, $dbuser, $dbpass);
if (!$con) {
    die("Connection to database failed" . mysqli_error(mysqli_connect($con)));
}

/* selecting the database "dbname" */
$dataselect = mysqli_select_db($con, $dbname);
if (!$dataselect) {
    die("Database namelist not selected" . mysqli_error($dataselect));
}
