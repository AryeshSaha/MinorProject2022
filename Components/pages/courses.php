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

    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Company Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">All Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search Courses" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <?php
    session_start();
    include('../../util/dbcon.php');
    include('../../util/time.php');
    $query  = mysqli_query($con, "SELECT * FROM courses");

    // $num_row = mysqli_num_rows($query);
    while ($row   = mysqli_fetch_array($query)) {
    ?>
        <div class="card" style="width: 18rem">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['crnaam']; ?></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> Price: <?php echo $row['amt']; ?></li>
                <li class="list-group-item">Duration: <?php
                                                        echo calcCourseDuration($row['dur']); ?> Days</li>
                <?php
                $_SESSION['course_id'] = $row['crid'];
                ?>
                <button type="button" class="btn btn-success"><a href="./checkout.php">Enroll</a></button>
            </ul>
        </div>
    <?php
    }
    ?>










</body>



</html>