<html>

<head>
    <link rel="stylesheet" type="text/css" href="../style/login_style.css">
</head>

<body>
    <div class="container">
        <form id="signup" action="#" method="post">
            <div class="header">
                <h3> Admin Login </h3>
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
            session_start();
            if (isset($_POST['login'])) {
                include('../../util/dbcon.php');
                include('../../util/saveUser.php');

                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['pass']);

                $query = mysqli_query($con, "SELECT * FROM login WHERE pass='$password' and email='$email'");
                $query1 = mysqli_query($con, "SELECT * FROM details WHERE email='$email'");
                $row = mysqli_fetch_array($query);
                $row1 = mysqli_fetch_array($query1);
                $num_row = mysqli_num_rows($query);

                if ($num_row > 0) {

                    setEmail($row['email']);
                    setName($row1['naam']);
                    setImage($row1['dp']);

                    header('location:dashbord.php');
                } else {
                    echo "<h5 style='color: red'>Invalid Username and Password Combination</h5>";
                }
            }
            ?>

            <div class="to__signup">
                <p>Don't have an account?<a href="./signup.php"> Signup here</a></p>
            </div>
            <div class="forgot__password">
                <a href="ForgotPassword.php">Forgot password?</a>
            </div>
        </form>




    </div>

</body>

</html>