<?php
//set up database connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME );
if($mysqli->errno) {
    echo 'Error : ' . $mysqli->connect_error();
}
