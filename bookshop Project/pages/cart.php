<?php
session_start();
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

<body class="yourCart">
  <!-- start navbar -->
  <header>
    <div class="logo"><a href="">Books Store</a></div>
    <div class="container">
      <ul class="home login register">
        <li><a href="./index.php">Home</a></li>

        <?php
        if (isset($_SESSION['user_email'])) {
          echo '
                <li><a href="./logout.php">Logout</a></li>
                ';
        }
        if (!isset($_SESSION['user_email'])) {
          echo '
                <li> <a href="./login.php">Login</a> </li>';
        }
        ?>
      </ul>
    </div>
  </header>
  <!-- finsh navbar -->



  <div class="mainCart-table">

    <h1>Your Cart</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Image</th>
          <th>Book</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `cart`";
        $result = mysqli_query($con, $sql);
        if ($result) {
          $totalprice = 0;
          $quantity = 1;
          $num = 0;
          while ($row = mysqli_fetch_assoc($result)) {
            $num = $num + 1;
            $id = $row['id'];
            $title = $row['title'];
            $image = $row['image'];
            $price = $row['price'];
            $totalprice = $totalprice + $price;
            echo '<tr>
            <td>' . $id . '</td>
            <td>
              <!-- style="width: 70px; height: 80px;" -->
              <img src="./uploads/' . $image . '" alt="">
            </td>
            <td>' . $title . '</td>
            <td>' . $price . '</td>
            <td>' . $quantity . '</td>
            <td>' . $price . '</td>
            <td>
            <a href="./deletecart.php?idbook=' . $id . '">
            <i class="fa-solid fa-xmark"></i>
            </a>
            </td>
          </tr>';
          };
        };

        ?>


      </tbody>
      <tfoot>
        <tr>
          <th colspan="5">Total</th>
          <th><?php echo $totalprice ?></th>
          <th></th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- start footer  -->
  <?php
  include('footer.php');
  ?>