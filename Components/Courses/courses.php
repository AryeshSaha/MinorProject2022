<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="courses.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Courses</title>
</head>

<body>
    <?php
    session_start();
    include('dbcon.php');
    $query  = mysqli_query($con, "SELECT * FROM courses");

    // $num_row = mysqli_num_rows($query);
    while ($row   = mysqli_fetch_array($query)) {
        echo '<div class="card" style="width: 18rem">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row['crnaam'] . '</h5>';
        echo ' </div>';
        echo '<ul class="list-group list-group-flush">';
        echo ' <li class="list-group-item">Price:' . $row['amt'] . '</li>';
        echo '<li class="list-group-item">Duration: ' . $row['dur'] . ' Minutes</li>';
        echo '<button type="button" class="btn btn-success">Add</button>';
        echo ' </ul>';
        echo '</div>';
    }
    ?>










</body>



</html>