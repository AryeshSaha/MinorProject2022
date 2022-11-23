<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Photo Like FB DP</title>
    <link rel="stylesheet" href="/edit.css">
</head>

<body>
    <h1>Edit Profile</h1>
    <hr>
    <form action="#" method="post">

        <div class="profile-pic-div">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMCnKVdb6r65QZHqRYFJ8Bo_LK2_RmQH1quU0kEoKJEqxkHgJP53wS6tFUqAZD-0CY2GU&usqp=CAU" id="photo">
            <input type="file" id="file">
            <label for="file" id="uploadBtn">Choose Photo</label>
        </div>

        <div class="container">
            <input type="text" placeholder="name" name="name">
            <input type="text" placeholder="father/husband name" name="fh_name">
            <input type="date" name="dob">
            <input type="number" placeholder="phone" name="phone">
            <input type="text" placeholder="highest educational qualification" name="edu">
            <input type="text" placeholder="area of practice" name="aop">
            <input type="number" placeholder="medical registration number" name="mrn">

            <button type="submit" name="edit">Update</button>
        </div>
    </form>

    <?php
    include('dbcon.php');
    session_start();
    $email = $_SESSION['email'];
    echo $email;

    // REGISTER USER
    if (isset($_POST['edit'])) {
        // receive all input values from the form
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $fh_name = mysqli_real_escape_string($con, $_POST['fh_name']);
        $dob = mysqli_real_escape_string($con, $_POST['dob']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $edu = mysqli_real_escape_string($con, $_POST['edu']);
        $aop = mysqli_real_escape_string($con, $_POST['aop']);
        $mrn = mysqli_real_escape_string($con, $_POST['mrn']);


        //VALIDATION
        if ($name == "" && $fh_name == "" && $dob == "" && $phone == "" && $edu == "" && $aop == "" && $mrn == "") {
            echo "<script>alert('Fields Can not be empty')</script>";
        } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {

            echo "<script>alert('Only letters and white space allowed in Name fields')</script>";

        } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $fh_name)) {

            echo "<script>alert('Only letters and white space allowed in Name fields')</script>";

        } elseif (strlen($phone) != 10) {

            echo "<script>alert('Mobile Number must be 10 digits')</script>";

        } else {

            // first check the database to make sure
            // a user does not already exist with the same username and/or email
            $user_check_query = "UPDATE details SET naam='$name',fh_naam='$fh_name',dob='$dob',phn='$phone',edu='$edu',aop='$aop',med_regno='$mrn' WHERE email='$email'  ";
            $result = mysqli_query($con, $user_check_query);
    
            if ($result) {
                # code...
                header('location: dashbord.php');
            }
            
            echo "<script>alert('Can not update')</script>";

        }


    }


    ?>






    <script src=" edit.js"></script>

</body>

</html>