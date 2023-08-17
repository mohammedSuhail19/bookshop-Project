<?php
include('HomeNav.php');
if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];

    $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($con, $select);

    if (mysqli_num_rows($result) > 0) {

        $error[] = 'user already exist!';
    } else {

        if ($pass != $cpass) {
            $error[] = 'password not matched!';
        } else {
            $insert = "INSERT INTO `users`(`email`, `password`, `type`) VALUES ('$email','$pass','user')";
            mysqli_query($con, $insert);
            header('location: Home.php');
        }
    }
};


?>

<!-- content start register  -->
<main class="registerForm">
    <form action="" method="post">

        <?php
        if (isset($error)) {
            foreach ($error as $error) {
                echo '<span class="error-msg">' . $error . '</span>';
            };
        };
        ?>

        <h3 class="addresForm"> Create new account</h3>
        <label for="name">Name</label>
        <input id="name" type="text" placeholder="Name">

        <label for="email">Email</label>
        <input name="email" id="email" type="email" placeholder="Email">

        <label for="url">URL</label>
        <input id="url" type="url" placeholder="https://example.com">
        <label for="age">Age</label>
        <input id="age" type="number" placeholder="18">
        <label for="phone">Phone Number</label>
        <input id="phone" type="text" placeholder="Phone Number">
        <label for="Country">Country</label>
        <input id="Country" type="text" placeholder="Country">

        <label for="Password">Password</label>
        <input name="password" id="Password" type="password" placeholder="Password">

        <label for="Confirm">Confirm Password</label>
        <input name="cpassword" id="Confirm" type="password" placeholder="Confirm Password">

        <input name="submit" type="submit" value="Register" class="submitRegister">
    </form>
</main>
<!-- content finised register  -->
<!-- start footer  -->

<?php
include('footer.php');
?>