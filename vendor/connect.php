<?php
    $server_name = "localhost";
    $username = "root";
    $password = "root";
    $db = "blog";
    $connect = mysqli_connect($server_name, $username, $password, $db);

    if (!$connect){
        die('Error connect to DataBase');
    }

?>