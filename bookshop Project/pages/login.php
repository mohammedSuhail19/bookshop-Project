<?php
include('HomeNav.php');

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($con, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        if ($row['type'] == 'admin') {
            $_SESSION['user_email'] = $row['email'];
            header('location: dashboard.php');
        } elseif ($row['type'] == 'user') {
            $_SESSION['user_email'] = $row['email'];
            header('location: index.php');
        }
    } else {
        $error[] = 'incorrect email or password!';
    }
};
?>

<!-- content start form  -->
<main class="loginForm">
    <form method="post">
        <h3 class="addresForm"> Login to your account</h3>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Email">
        <label for="password" class="pass">Password</label>
        <input type="password" name="password" id="password" placeholder="password">
        <input type="submit" class="submitLogin" name="submit" id="">
    </form>
</main>
<!-- content finised form  -->
<!-- start footer  -->

<?php
include('footer.php');
?>