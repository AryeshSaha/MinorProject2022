<?php session_start();
include('dbcon.php'); ?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="login_style.css">
</head>

<body>
    <div class="container">
        <form id="signup" action="#" method="post">
            <div class="header">
                <h3>Sign In</h3>
                <p>You have to fill out this form</p>
            </div>
            <div class="sep"></div>
            <div class="inputs">
                <input type="email" name="email" placeholder="e-mail" autofocus />
                <input type="password" name="pass" placeholder="Password" />

                <div class="button-panel">
                    <input type="submit" class="button" title="Log In" name="login" value="Login"></input>
                </div>
            </div>
            <?php
            if (isset($_POST['login'])) {
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['pass']);

                $query         = mysqli_query($con, "SELECT * FROM login WHERE  pass='$password' and email='$email'");
                $row        = mysqli_fetch_array($query);
                $num_row     = mysqli_num_rows($query);

                if ($num_row > 0) {
                    $_SESSION['email'] = $row['email'];
                    header('location:dashbord.php');
                } else {
                    echo "<script>alert('Invalid Username and Password Combination')</script>";
                }
            }
            ?>

            <div class="to__signup">
                <p>Don't have an account?<a href="signup.php"> Signup here</a></p>
            </div>
            <div class="forgot__password">
                <a href="#">Forgot password?</a>
            </div>
        </form>




    </div>

</body>

</html>