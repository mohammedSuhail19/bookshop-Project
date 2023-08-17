<?php
//connection function
$con = new mysqli('localhost', 'root', '', 'bookshop');
if (!$con) {
    die(mysqli_error($con));
}
//


session_start();
session_unset();
session_destroy();

header('location:login.php');
