<?php include('HomeNav.php') ?>
<main class="wrapperHome">
    <section class="searchBooks">
        <div class="searchContent">
            <h1>Search about any Book you need</h1>
            <div class="searchBox"> <input type="search"> <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="wrapper-searchNumber">

                <div class="searchNumber">
                    <i class=" icon fa-solid fa-book fa-2x"></i>
                    <h1>3</h1>
                    <p>Books</p>
                </div>
                <div class="searchNumber">
                    <i class="fa-solid fa-users fa-2x"></i>
                    <h1>2</h1>
                    <p>Authors</p>
                </div>
                <div class="searchNumber">
                    <i class="fa-solid fa-tags fa-2x"></i>
                    <h1>3</h1>
                    <p>Cateigories</p>
                </div>
            </div>

        </div>

    </section>
    <section class="aboutLibrary">
        <h2>About Our Library</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Quos optio nostrum alias delectus at fugiat accusamus harum
            esse commodi, dolores quod repudiandae, voluptatiate veniam
            ?</p>
    </section>
    <section class="categories">
        <h2>Explore Our lastest Categories</h2>
        <div class="wrapperCat">
            <div><a href="">action</a></div>
            <div><a href="">drama</a></div>
            <div><a href="">romantic</a></div>
        </div>

    </section>
    <section class="lastestBooks">
        <h2>Explore Our lastest Books</h2>
        <div class="wrapperCartBooks">

            <?php
            $sql = "SELECT * FROM `books` ORDER BY id DESC LIMIT 4";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $image = $row['image'];
                    $title = $row['title'];
                    $short_desc = $row['short_desc'];
                    echo '<div>
                        <img src="./uploads/' . $image . '" alt="">
                        <h2>' . $title . '</h2>
                        <p>' . $short_desc . '</p>
                        <a href="./details.php?idbook=' . $id . '">Read More</a>
                    </div>';
                }
            };
            ?>

        </div>
    </section>
</main>
<?php
include('footer.php');
?>