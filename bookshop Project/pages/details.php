<?php
include('HomeNav.php');

if (isset($_GET['idbook'])) {
    $id = $_GET['idbook'];

    $sql = "SELECT * FROM `books` WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $image = $row['image'];
    $price = $row['price'];
    $short_desc = $row['short_desc'];
    $full_desc = $row['full_desc'];
}
?>

<main class="wrapperDetails">
    <div class="ImgePrice">
        <div class="Imge"><img src="./uploads/<?php echo $image ?>" alt=""></div>
        <div class="Price">
            <h2><?php $title ?></h2>
            <h3>Price:<span> <?php echo $price ?></span></h3>
            <hr class="line">
            <p><?php echo $short_desc ?></p>
            <?php
            if (isset($_SESSION['user_email'])) {
                echo '
                    <a href="./AddToCart.php?idbook=' . $id . '">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Add To Cart
                </a>
                ';
            }
            if (!isset($_SESSION['user_email'])) {
                echo '';
            }
            ?>

        </div>
    </div>
    <div class="descriptoinBook">
        <h2>Description</h2>
        <p><?php echo $full_desc ?></p>
    </div>
</main>

<?php
include('footer.php');
?>