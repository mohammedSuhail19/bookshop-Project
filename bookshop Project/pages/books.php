<?php include('DashbordNav.php') ?>
<div class="content">
  <div class="add-cate">
    <h1>All Books</h1>
    <a href="./addBook.php">Add New Book</a>
  </div>
  <hr class="underLineDash">
</div>
<div class="books-table">
  <table>
    <thead>
      <tr>

        <th>Serial</th>
        <th>Title</th>
        <th>Image</th>
        <th>Price</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>

      <?php
      $sql = "Select * from `books`";
      $result = mysqli_query($con, $sql);
      if ($result) {
        $num = 0;
        while ($row = mysqli_fetch_assoc($result)) {
          $num = $num + 1;
          $id = $row['id'];
          $title = $row['title'];
          $image = $row['image'];
          $price = $row['price'];
          echo '<tr>
            <td>' . $num . '</td>
            <td>' . $title . '</td>
            <td><img src="./uploads/' . $image . '" alt=""></td>
            <td>' . $price . '</td>
            <td>
              <a href="./updatebook.php?idbook=' . $id . '"> <i class="fa-solid fa-pen-to-square"></i></a>
              <a href="./deletebook.php?idbook=' . $id . '"> <i class="fa-solid fa-trash"></i></a>
            </td>
          </tr>';
        }
      }
      ?>

    </tbody>
  </table>
</div>

</main>


</body>

</html>