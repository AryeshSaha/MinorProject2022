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
                <input id="name" name="name" type="text" placeholder="name" autofocus />
                <small id="usererror"></small>

                <input id="father" name="father" type="text" placeholder="father/husband name" />
                <small id="fherror"></small>

                <input id="dob" name="dob" type="date" />
                <small id="doberror"></small>

                <select name="gender">
                    <option value="none" selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">other</option>
                </select>

                <input id="mobile" name="mobile" type="number" placeholder="mobile" />
                <small id="mobileerror"></small>

                <input id="email" name="email" type="email" placeholder="e-mail" />
                <small id="emailerror"></small>

                <input id="password" name="password" type="password" placeholder="Password" />
                <small id="passworderror"></small>

                <a id="submit" onclick="validate()" href="#">SIGN UP NOW</a>
            </div>
            <?php
            if (isset($_POST['login'])) {
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['pass']);

                $query         = mysqli_query($con, "SELECT * FROM login WHERE  pass='$password' and email='$email'");
                $row        = mysqli_fetch_array($query);
                $num_row     = mysqli_num_rows($query);

                if ($num_row > 0) {
                    $_SESSION['user_id'] = $row['user_id'];
                    header('location:home.php');
                } else {
                    echo 'Invalid Username and Password Combination';
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