<?php
    $host = "localhost";
    $usename = "root";
    $password = "";
    $dbname = "electric";

    $conn = new mysqli($host, $usename, $password, $dbname);
    if ($conn -> connect_error) {
        die ("Error connecting to database". $conn -> error);
    }
    else {
        echo "Connect successfully <br>";        
    }
?>