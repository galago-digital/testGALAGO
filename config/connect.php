<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'crud');

$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (!$connect) {
    die('Error connect to database!');
}

?>