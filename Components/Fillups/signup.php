<html>

<head>
    <link rel="stylesheet" type="text/css" href="./login_style.css">
</head>

<body>
    <div class="container">

        <form id="signup" action="#" method="post">

            <div class="header">

                <h3>Sign Up</h3>

                <p>Fill out this Form</p>

            </div>

            <div class="sep"></div>

            <div class="inputs">

                <input type="text" placeholder="name" name="name" autofocus/>

                <input type="text" placeholder="father/husband name" name="fh_name" />

                <input id="dob" name="dob" type="date" />

                <select name="gender">
                    <option value="none" selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="intersex">Intersex</option>
                </select>

                <input type="number" placeholder="mobile" name="mobile">

                <input type="email" placeholder="e-mail" name="email" />

                <input type="password" placeholder="Password" name="pass" />


                <button id="submit" name="signup">SIGN UP NOW</button>


                <?php
                include('../../dbcon.php');
                session_start();

                // REGISTER USER
                if (isset($_POST['signup'])) {
                    // receive all input values from the form
                    $name = mysqli_real_escape_string($con, $_POST['name']);
                    $fh_name = mysqli_real_escape_string($con, $_POST['fh_name']);
                    $dob = mysqli_real_escape_string($con, $_POST['dob']);
                    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $password = mysqli_real_escape_string($con, $_POST['pass']);
                    $dp = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMCnKVdb6r65QZHqRYFJ8Bo_LK2_RmQH1quU0kEoKJEqxkHgJP53wS6tFUqAZD-0CY2GU&usqp=CAU";


                    //VALIDATION
                    if ($name == "" && $fh_name == "" && $dob == "" && $mobile == "" && $email == "" && $password == "") {

                        echo "<script>alert('Fields Can not be empty')</script>";

                    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {

                        echo "<script>alert('Only letters and white space allowed in Name fields')</script>";

                    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $fh_name)) {

                        echo "<script>alert('Only letters and white space allowed in Name fields')</script>";

                    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                        echo "<script>alert('Invalid email format')</script>";

                    } elseif (strlen($mobile) != 10) {

                        echo "<script>alert('Mobile Number must be 10 digits')</script>";

                    } elseif (strlen($password) < 8) {

                        echo "<script>alert('Password must be at least 8 digits')</script>";

                    } else {

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
                            $query = "INSERT INTO details (email, naam, fh_naam, dob, sex, phn, dp)
                              VALUES('$email','$name' , '$fh_name','$dob','$gender','$mobile', '$dp')";
                            mysqli_query($con, $query);
                            $_SESSION['name'] = $name;
                            $_SESSION['email'] = $email;
                            $_SESSION['success'] = "You are now logged in";
                            $_SESSION['image'] = $dp;
                            header('location: ../Dashboard/dashbord.php');
                        }
                    }
                }




                ?>

            </div>
            <div class="to__signup">
                <p>Already have account? <a href="./login.php"> Login here</a></p>
            </div>

        </form>


    </div>

</body>

</html>