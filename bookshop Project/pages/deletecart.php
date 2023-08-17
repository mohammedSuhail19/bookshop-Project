<?php
//connection function
$con = new mysqli('localhost', 'root', '', 'bookshop');
if (!$con) {
    die(mysqli_error($con));
}
//


//delete book function
if (isset($_GET['idbook'])) {
    $id = $_GET['idbook'];
    $sql = "DELETE FROM `cart` WHERE id=$id";
    $result = mysqli_query($con, $sql);
    header('location:cart.php');
}
//