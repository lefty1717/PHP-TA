<?php
    define('DB_HOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'test');

    $connect = @mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    mysqli_query($connect, 'SET NAMES utf8');

    if(!$connect)
        die("ERROR: Could not connect. " . mysqli_connect_error());
    else
        return $connect;
?>