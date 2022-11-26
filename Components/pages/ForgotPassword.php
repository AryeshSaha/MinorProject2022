<head>
    <link rel="stylesheet" href="../style/ForPass.css">
    <title>Forgot Password</title>
</head>

<body>
    <div class="row">
        <h1>Forgot Password</h1>
        <h6 class="information-text">Enter your registered email to reset your password.</h6><br>
        <div class="form-group">
            <form action="#" method="post">
                <p><label for="username">Enter your email address</label></p>
                <input type="email" name="user_email" id="user_email">
                <button name="enter_email">Submit</button><br><br>
            </form>
            <?php
            session_start();
            if (isset($_POST['enter_email'])) {
                include('../../util/dbcon.php');
                include('../../util/saveUser.php');
                include('../../util/getOtp.php');

                $email = mysqli_real_escape_string($con, $_POST['user_email']);


                $query = mysqli_query($con, "SELECT * FROM login WHERE  email='$email'");
                $row = mysqli_fetch_array($query);
                $num_row = mysqli_num_rows($query);

                if ($num_row > 0) {
                    $otp =  getOTP();
                    $_SESSION['otp'] = $otp;
                    $msg = "Your six digit OTP is $otp\n please verify this within\n 10 minutes or ignore this";

                    $to = 'sumandhali8420728705@gmail.com';
                    $subject = 'Password change!';

                    $headers = "From: dhalisuman001@gmail.com\r\n";
                    if (mail($to, $subject, $msg, $headers)) {
                        echo "SUCCESS";
                    } else {
                        echo "ERROR";
                    }
                } else {
                    echo "<h5 style='color: red'>Email does not exist</h5>";
                }
            }

            ?>
            <p><label for="otp">Enter the OTP</label></p>
            <input type="otp" name="otp" id="otp">
            <button>Verify</button>
        </div>
        <div class="footer">
            <h5>New here? <a href="signup.html" target="_blank">Sign Up</a></h5>
            <h5>Already have an account? <a href="login.html" target="_blank">Log In</a></h5>
        </div>
    </div>
</body>