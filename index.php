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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>


    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>

    <title>Home Page</title>
</head>

<body>

    <nav class="navbar" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand"><img
                    src="https://kolkatahormonefoundation.org/wp-content/uploads/2021/06/Kolkata-Hormone-Foundation-304x61.png"
                    alt="" srcset=""></a>
            <form class="d-flex" role="search">
                <button class="btn btn-outline-success" type="submit"><a href="./Components/pages/login.php"
                    id="register-btn">Register</a></button>
                <button class="btn btn-outline-primary" type="submit"><a href="./Components/pages/login.php"
                        id="login-btn">Login</a></button>
            </form>
        </div>
    </nav>

    </div>
    <div class="main-div">

        <div class="div1">
            <div class="banner--image">
                <img width="100%" height="400" alt=""
                    src="https://img.freepik.com/free-vector/education-horizontal-typography-banner-set-with-learning-knowledge-symbols-flat-illustration_1284-29493.jpg?w=2000">
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
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="data:image/png;base64,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"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="data:image/jpeg;base64,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"
                            class="d-block w-100" alt="...">

                    </div>
                    <div class="carousel-item">
                        <img src="data:image/png;base64,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"
                            class="d-block w-100" alt="...">

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
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
                        Flat GB, Chhayaneer Apartment
                        26A, Gariahat Road (South), Dhakuria
                        Kolkata - 700031
                    </p>
                </div>
                <div class="col">
                    <h1>Contact No.</h1>
                    <p>
                        (033) 2414 8295 / 2966 1221
                        Mrs. Kheya Sarkar (Course Co-ordinator)
                        +91 98305 51903
                    </p>
                </div>
                <div class="col">
                    <h1>e-mail</h1>
                    <p>
                        kolkatahormonefoundation@gmail.com
                        idec.desk@gmail.com (for IDEC)
                    </p>
                </div>
            </div>
        </div>
        <div class="center">
            &copy; Copyright team4 | All rights reserved!
        </div>
    </footer>


    <script src="./Components/js/script.js"></script>
</body>

</html>