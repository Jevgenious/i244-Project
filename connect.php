<?php
$connection = mysqli_connect('localhost', 'root', 'Sc0rp');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'home_test');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}