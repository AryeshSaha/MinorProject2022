<?php
include('../../util/dbcon.php');
session_start();
$name = $_SESSION['name'];
$query  = mysqli_query($con, "SELECT * FROM courses");
$row   = mysqli_fetch_array($query);
$crnaam = $row['crnaam'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>

<body>
    <h1><?php echo "Congrats $name, $crnaam is added to your Courses List!🥳" ?></h1>
    <button class="btn btn-succes"> <a href="./dashbord.php" class="a-tag">Go To Dashboard</a> </button>
</body>

</html>