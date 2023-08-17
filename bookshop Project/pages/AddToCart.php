<?php
//connection function
$con = new mysqli('localhost', 'root', '', 'bookshop');
if (!$con) {
    die(mysqli_error($con));
};
//

if (isset($_GET['idbook'])) {
    $id = $_GET['idbook'];

    $sql = "SELECT * FROM `books` WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    // $id = $row['id'];
    $title = $row['title'];
    $image = $row['image'];
    $price = $row['price'];

    $sql = "INSERT INTO `cart`(`title`, `image`, `price`) VALUES ('$title','$image','$price')";
    $result = mysqli_query($con, $sql);
    header('location: cart.php');
}
