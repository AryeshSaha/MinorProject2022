<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../style/courses.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Courses</title>
</head>

<body>
    <?php
    session_start();
    include('../../util/dbcon.php');
    include('../../util/time.php');
    $query  = mysqli_query($con, "SELECT * FROM courses");

    // $num_row = mysqli_num_rows($query);
    while ($row   = mysqli_fetch_array($query)) {
        $id = $row['crid'];
    ?>
        <div class="card" style="width: 18rem">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['crnaam']; ?></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> Price: <?php echo $row['amt']; ?></li>
                <li class="list-group-item">Duration: <?php
                                                        echo calcCourseDuration($row['dur']); ?> Days</li>



                <button type="button" class="btn btn-success"><a <?php echo 'href=" ./checkout.php?id=' . $id . '"';  ?>>Enroll</a></button>
            </ul>
        </div>
    <?php
    }
    ?>










</body>



</html>