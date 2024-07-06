<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'fol-db';

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {

    echo "Dataase connecton error: ";
    die('Database connection error: '.$conn->connect_error);
}
else { echo 'db Connection established.';}
?> 