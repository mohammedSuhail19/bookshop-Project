<?php
include('DashbordNav.php');
//create book function
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./uploads/" . $image;
    $price = $_POST['price'];
    $short_desc = $_POST['short_desc'];
    $full_desc = $_POST['full_desc'];
    move_uploaded_file($tempname, $folder);

    $sql = "insert into `books` (title,image,price,short_desc,full_desc,author,cate) 
    values('$title','$image','$price','$short_desc','$full_desc','$author','$cate')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location: books.php");
    } else {
        die(mysqli_error($con));
    };
};
?>


<div class="content">
    <div class="add-cate">
        <h1>Add New Book</h1>
        <a href="./books.php">All Books</a>
    </div>
    <hr class="underLineDash">
</div>

<form action="" method="post" class="AddNewBook" enctype="multipart/form-data" autocomplete="off">
    <label for="title">Title</label>
    <input id="title" type="text" placeholder="Title" name="title">

    <label for="file">Image</label>
    <input id="file" type="file" accept="image/png, image/jpeg" name="image">

    <label for="price">Price</label>
    <input type="number" name="price" id="price">

    <label for="shortdesc">Short Description</label>
    <textarea name="short_desc" id="shortdesc" cols="30" rows="2"></textarea>

    <label for="fulldesc">Full Description</label>
    <textarea name="full_desc" id="fulldesc" cols="30" rows="6"></textarea>

    <label for="author">Author</label>
    <input list="authors" name="author" id="author" placeholder="--SELECT--">
    <datalist id="authors">
        <!-- <option value="yousef">
                <option value="abood">
                <option value="sama">
                <option value="yaser">
                <option value="Sofia"> -->
    </datalist>

    <label for="cate">cate</label>
    <input list="cates" name="cate" id="cate" placeholder="--SELECT--">
    <datalist id="cates">

        <option value="drama">
        <option value="action">
        <option value="romantic">
        <option value="comedy">


    </datalist>

    <button name="submit">Add</button>

</form>


</main>


</body>

</html>