<?php
include('DashbordNav.php');

//updatebook function
$id = $_GET['idbook'];

$sql = "SELECT * FROM `books` WHERE  id = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$title = $row['title'];
$image = $row['image'];
$price = $row['price'];
$short_desc = $row['short_desc'];
$full_desc = $row['full_desc'];
$author = $row['author'];
$cate = $row['cate'];

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./uploads/" . $image;
    $price = $_POST['price'];
    $short_desc = $_POST['short_desc'];
    $full_desc = $_POST['full_desc'];
    $author = $_POST['author'];
    $cate = $_POST['cate'];
    move_uploaded_file($tempname, $folder);

    $sql = "update `books` set 
    id= $id,
    title='$title', 
    image='$image', 
    price='$price', 
    short_desc='$short_desc', 
    full_desc='$full_desc', 
    author='$author', 
    cate='$cate' 
    where id = $id";
    mysqli_query($con, $sql);
    header('location: books.php');
};

?>

<div class="content">
    <div class="add-cate">
        <h1>Update Book</h1>
        <a href="./books.php">All Books</a>
    </div>
    <hr class="underLineDash">
</div>

<form action="" method="post" class="AddNewBook" enctype="multipart/form-data" autocomplete="off">
    <label for="title">Title</label>
    <input id="title" type="text" placeholder="Title" name="title" value="<?php echo $title ?>">

    <label for="file">Image</label>
    <input id="file" type="file" accept="image/png, image/jpeg" name="image">

    <label for="price">Price</label>
    <input type="number" name="price" id="price" value="<?php echo $price ?>">

    <label for="shortdesc">Short Description</label>
    <textarea name="short_desc" id="shortdesc" cols="30" rows="2"><?php echo $short_desc ?></textarea>

    <label for="fulldesc">Full Description</label>
    <textarea name="full_desc" id="fulldesc" cols="30" rows="6"><?php echo $full_desc ?></textarea>

    <label for="author">Author</label>
    <input list="authors" name="author" id="author" placeholder="--SELECT--" value="<?php echo $author ?>">
    <datalist id="authors">
        <!-- <option value="yousef">
                <option value="abood">
                <option value="sama">
                <option value="yaser">
                <option value="Sofia"> -->
    </datalist>

    <label for="cate">cate</label>
    <input list="cates" name="cate" id="cate" placeholder="--SELECT--" value="<?php echo $cate ?>">
    <datalist id="cates">
        <option value="action">
        <option value="drama">
        <option value="romantic">
    </datalist>
    <button name="submit">Update</button>

</form>


</main>


</body>

</html>