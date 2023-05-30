<?php

require 'connect.php';
if (isset($_POST['add'])) {
    if (empty($name) || empty($month) || empty($firstindex) || empty($lastindex)) {
        echo "plese fill all the gap";
        exit();
    }

    $name = $_POST['name'];
    $month = $_POST['month'];
    $firstindex = $_POST['firstindex'];
    $lastindex = $_POST['lastindex'];

    $InsertSql = "INSERT INTO tblhousehold (name, month, firstindex, lastindex) 
    VALUES($name, $month, $firstindex, $lastindex)";

    if ($conn -> query($InsertSql) === true ){
        echo "<br>a new record was created<br>";
    }
    else {
        echo "error". $conn -> error ."<br>" .$InsertSql;
    }
}
