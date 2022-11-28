<head>
    <link rel="stylesheet" href="../style/ForPass.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.0/axios.js" integrity="sha512-nNH8gXanGmEPnnK9/yhI3ETaIrujVVJ7dstiVIwMtcfbcj1zzTlnH5whbsYhg6ihg5mFe1xNkPPLwCwwvSAUdQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Forgot Password</title>
</head>

<body>
    <div class="row">
        <h1>Forgot Password</h1>
        <h6 class="information-text">Enter your registered email to reset your password.</h6><br>
        <div class="form-group">
            <form action="#" method="post">
                <p><label for="username">Enter your email address</label></p>
                <input type="text" name="email" id="user_email" required>
                <button type="submit" name="user_email">Submit</button><br><br>
            </form>
            <?php
            session_start();
            if (isset($_POST['user_email'])) {
                include('../../util/dbcon.php');

                $email = mysqli_real_escape_string($con, $_POST['email']);

                $query = mysqli_query($con, "SELECT * FROM login WHERE   email='$email'");
                $row = mysqli_fetch_array($query);
                $num_row = mysqli_num_rows($query);

                if ($num_row > 0) {
                    $_SESSION['email'] = $email;
                    header('location:Otp.php');
                } else {
                    echo "<h5 style='color: red'>Account doesn't exist</h5>";
                }
            }


            ?>
        </div>
        <div class="footer">
            <h5>New here? <a href="./signup.php">Sign Up</a></h5>
            <h5>Already have an account? <a href="./login.php">Log In</a></h5>
        </div>

    </div>
</body>