<head>
    <link rel="stylesheet" href="../style/ResetPass.css">
    <title>Reset Password</title>
</head>

<body>
    <div class="row">
        <h1>Reset Password</h1>
        <div class="form-group">
            <form action="#" method="post">
                <p><label for="username">Enter New Password</label></p>
                <input type="new_password" name="newpassword" id="newpassword">
                <p><label for="username">Confirm New Password</label></p>
                <input type="confirm_password" name="confirmpassword" id="confirmpassword">
                <button type="submit" name="change_password">Reset Password</button>
            </form>
        </div>
        <?php
        session_start();
        if (isset($_POST['change_password'])) {
            include('../../util/dbcon.php');
            include('../../util/saveUser.php');
            $email = $_SESSION['email'];
            $new_password = mysqli_real_escape_string($con, $_POST['newpassword']);
            $old_password = mysqli_real_escape_string($con, $_POST['confirmpassword']);

            $query = mysqli_query($con, "UPDATE login SET pass='$new_password' WHERE  email='$email'");




            if ($query) {
                header('location:login.php');
            } else {
                echo "<h5 style='color: red'>Something wrong happen</h5>";
            }
        }
        ?>
    </div>
</body>