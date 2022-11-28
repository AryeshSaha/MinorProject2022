<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./Components/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>

    <title>Home Page</title>
</head>

<body>

    <nav class="navbar" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="https://kolkatahormonefoundation.org/wp-content/uploads/2021/06/Kolkata-Hormone-Foundation-304x61.png" alt="" srcset=""></a>
            <form class="d-flex" role="search">
                <button class="btn btn-outline-success" type="submit"><a href="./Components/pages/signup.php" id="register-btn">Register</a></button>
                <button class="btn btn-outline-primary" type="submit"><a href="./Components/pages/login.php" id="login-btn">Login</a></button>
                <button class="btn btn-outline-danger ms-4 me-3" type="submit"><a href="./Components/pages/adminLogin.php" id="admin-btn">Admin Login</a></button>
            </form>
        </div>
    </nav>

    </div>
    <div class="main-div">

        <div class="div1">
            <div class="banner--image">
                <img width="100%" height="400" alt="" src="https://img.freepik.com/free-vector/education-horizontal-typography-banner-set-with-learning-knowledge-symbols-flat-illustration_1284-29493.jpg?w=2000">
            </div>
        </div>
        <br>
        <div class="div2">
            <div id="typewriter">Our Goal</div>
            <br>
            <div class="about">

                <p>Education is the most powerful catalyst for mental, physical and social wellbeing. Kolkata Hormone
                    Foundation conducts patient education programs to incorporate lifestyle modification practices which
                    promote a genuine sense of integration & harmony among diabetic patient.

                    It is also the objective of the foundation, to encourage practising doctors to keep themselves
                    updated on current developments in medical practice (specially in the field of Diabetology &
                    Endocrinology), so as to maintain a high professional standard.
                </p>

            </div>
        </div>
        <br>
        <div class="div3">

            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="https://www.freestudy.com/wp-content/uploads/2021/03/Free-Microbiology-Online-Courses-image-1280x720.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://www.tangolearn.com/wp-content/uploads/2021/12/nutrition-courses-online.jpg" class="d-block w-100" alt="...">

                    </div>
                    <div class="carousel-item">                        
                        <img src="https://s3.amazonaws.com/coursesity-blog/2021/09/Psychology_classes.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

    </div>

    <footer>
        <div class="container text-container">
            <div class="row">
                <div class="col">
                    <h1>Address</h1>
                    <p>
                        1/1, Service Rd, DG Block(Newtown),<br>
                        Action Area I, Newtown, Chakpachuria,<br>
                        West Bengal, Kolkata- 700156
                    </p>
                </div>
                <div class="col">
                    <h1>Contact No.</h1>
                    <p>
                        (033) 2324 2050 / 2966 1221 <br>
                        Ms. Abanti Ghosh(Course Co-ordinator) <br>  
                        +91 12345 67890
                    </p>
                </div>
                <div class="col">
                    <h1>e-mail</h1>
                    <p>
                        kolkatahormonefoundation@gmail.com <br>
                        idec.desk@gmail.com (for IDEC)
                    </p>
                </div>
            </div>
            <div class="center">
                &copy; Copyright TEAM 4 BCA | All Rights Reserved | <span id="spanDate"></span>
            </div>
        </div>
    </footer>


    <script src="./Components/js/script.js"></script>
</body>

</html>