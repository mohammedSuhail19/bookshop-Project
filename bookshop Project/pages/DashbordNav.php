<?php
//connection function
$con = new mysqli('localhost', 'root', '', 'bookshop');
if (!$con) {
    die(mysqli_error($con));
}
//

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://kit.fontawesome.com/50d8c19a3b.js"
            crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/brands.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/solid.css">
    <title>Book Store</title>
</head>

<body>
    <header class="headerSidebar">
        <div class="companyName">Company name</div>
        <div><input type="search" class="inputSearch" name="" id="" placeholder="Search"></div>
        <div>
            <a href="./login.php">Sign out</a>
        </div>
    </header>


    <main>
        <div class="sidebar">
            <a href="./dashboard.php">Dashboard</a>
            <a href="">Categories</a>
            <a href="">Authors</a>
            <a href="./books.php">Books</a>
            <a href="">Users</a>
        </div>