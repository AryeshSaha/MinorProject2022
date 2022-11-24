<!DOCTYPE html>
<html lang="en">
<?php
session_start();
// echo $_SESSION['image'];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Photo Like FB DP</title>
    <link rel="stylesheet" href="../style/edit.css">
</head>

<body>
    <h1>Edit Profile</h1>
    <hr>
    <form action="#" method="post" enctype="multipart/form-data">

        <div class="profile-pic-div">
            <label for="file" id="uploadBtn">Profile Picture: </label>
            <input type="file" id="file" name="file">
            <img src="<?php echo $_SESSION['image'] ?>" id="photo">
            </input>
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
    include('../../util/dbcon.php');
    include('../../util/saveUser.php');

    // session_start();
    $email = $_SESSION['email'];
    // echo $email;

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
        $files = $_FILES['file'];

        //Image Name
        $fileName = $files['name'];
        //Image Error
        $fileErr = $files['error'];
        //Image Store Temp
        $fileTmp = $files['tmp_name'];

        //File extension
        $filesExt = explode('.', $fileName);
        //confirm to convert extension in lowercase
        $extCheck = strtolower(end($filesExt));
        //store extension
        $fileArr = array('png', 'jpg', 'jpeg');


        //VALIDATION
        if ($name == "" && $fh_name == "" && $phone == "" && $edu == "" && $aop == "" && $mrn == "" && $files == "") {
            echo "<script>alert('Fields Can not be empty')</script>";
        } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {

            echo "<script>alert('Only letters and white space allowed in Name fields')</script>";
        } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $fh_name)) {

            echo "<script>alert('Only letters and white space allowed in Name fields')</script>";
        } elseif (strlen($phone) != 10) {

            echo "<script>alert('Mobile Number must be 10 digits')</script>";
        } elseif (!in_array($extCheck, $fileArr)) {

            echo "<script>alert('Must be a file with .png, .jpg or .jpeg extension')</script>";
        } else {

            //DP upload
            $storeFile = '../../public/upload' . $fileName;
            move_uploaded_file($fileTmp, $storeFile);

            // first check the database to make sure
            // a user does not already exist with the same username and/or email
            $user_check_query = "UPDATE details SET naam='$name',fh_naam='$fh_name',dob='$dob',phn='$phone',edu='$edu',aop='$aop',med_regno='$mrn', dp='$storeFile' WHERE email='$email'  ";
            $result = mysqli_query($con, $user_check_query);
            // $_SESSION['name'] = $name;
            // $_SESSION['image'] = $storeFile;
            setName($name);
            setImage($storeFile);
            if ($result) {


                # code...
                header('location: dashbord.php');
            }

            echo "<script>alert('Can not update')</script>";
        }
    }


    ?>






    <script src=" ../js/edit.js"></script>

</body>

</html>