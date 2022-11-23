<html>

<head>
    <link rel="stylesheet" type="text/css" href="login_style.css">
</head>

<body>
    <div class="container">

        <form id="signup" action="#" method="post">

            <div class="header">

                <h3>Sign Up</h3>

                <p>You have to fill out this form</p>

            </div>

            <div class="sep"></div>

            <div class="inputs">

                <input type="text" placeholder="name" name="name" />

                <input type="text" placeholder="father/husband name" name="fh_name" />

                <input id="dob" name="dob" type="date" />

                <select name="gender">
                    <option value="none" selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">other</option>
                </select>

                <input type="number" placeholder="mobile" name="mobile">

                <input type="email" placeholder="e-mail" autofocus name="email" />

                <input type="password" placeholder="Password" name="pass" />


                <button id="submit" name="signup">SIGN UP NOW</button>


                <?php
                include('dbcon.php');
                session_start();

                // REGISTER USER
                if (isset($_POST['signup'])) {
                    // receive all input values from the form
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $password = mysqli_real_escape_string($con, $_POST['pass']);



                    // first check the database to make sure
                    // a user does not already exist with the same username and/or email
                    $user_check_query = "SELECT * FROM login WHERE email='$email'  LIMIT 1";
                    $result = mysqli_query($con, $user_check_query);
                    $user = mysqli_fetch_assoc($result);


                    if ($user) { // if user exists
                        echo "Email already exist";
                    } else {



                        $query1 = "INSERT INTO login (email, pass)
                          VALUES('$email', '$password')";
                        mysqli_query($con, $query1);

                        $name = mysqli_real_escape_string($con, $_POST['name']);
                        $dob = mysqli_real_escape_string($con, $_POST['dob']);
                        $gender = mysqli_real_escape_string($con, $_POST['gender']);
                        $fh_name = mysqli_real_escape_string($con, $_POST['fh_name']);
                        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);

                        // Finally, register user if there are no errors in the for
                        $query = "INSERT INTO details (email, naam, fh_naam,dob,sex,phn)
                          VALUES('$email','$name' , '$fh_name','$dob','$gender','$mobile')";
                        mysqli_query($con, $query);
                        $_SESSION['name'] = $name;
                        $_SESSION['email'] = $email;
                        $_SESSION['success'] = "You are now logged in";
                        header('location: dashbord.php');
                    }
                }

                ?>

            </div>
            <div class="to__signup">
                <p>Already have account? <a href="login.php"> Login here</a></p>
            </div>

        </form>


    </div>

</body>

</html>