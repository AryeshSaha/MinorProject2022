<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../style/courses.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Courses</title>
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg">
    <div class="container-fluid">
      <a class="navbar-brand" href="./dashbord.php"><img src="https://kolkatahormonefoundation.org/wp-content/uploads/2021/06/Kolkata-Hormone-Foundation-304x61.png" alt="" srcset=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Available Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./dashbord.php">Dashboard</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search courses" aria-label="Search">
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
    $id = $row['crid'];
  ?>
    <div class="card" style="width: 18rem">
      <img src="<?php echo $row['crimg']; ?>" class="card-img-top" alt="courseImg">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['crnaam']; ?></h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"> Price: ₹<?php echo $row['amt']; ?>/-</li>
        <li class="list-group-item">Duration: <?php
                                              echo calcCourseDuration($row['dur']); ?> Days</li>



        <a class="btn btn-success" <?php echo 'href=" ./checkout.php?id=' . $id . '"';  ?>>Enroll</a>
      </ul>
    </div>
  <?php
  }
  ?>










</body>



</html>