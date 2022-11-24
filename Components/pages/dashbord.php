<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('../../util/dbcon.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/dashbord.css">
    <title>Profile</title>
</head>

<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a href="#">

                        <div class="user">
                            <div class="avatar col-md-4">
                                <img src="<?php echo $_SESSION['image'] ?>" id="photo" alt="Profile">
                            </div>

                            <div class="user-name col-md-8">
                                <h5><a href="#">
                                        <? echo $_SESSION['name']  ?>
                                    </a></h5>
                                <span><a href="#">
                                        <? echo $_SESSION['email']  ?>
                                    </a></span>
                            </div>
                            <a class="dropdown pull-right" href="#">
                                <i class="fa fa-chevron-down"></i>
                            </a>

                        </div>

                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="../Dashboard/dashbord.php"><i class="fa fa-dashboard" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>

                        <li><a href="./courses.php"><i class="fa fa-file-text" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Courses</span></a></li>

                        <!--<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Anforderungen</span></a></li>-->
                        <li><a href="./profileEdit.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Edit Profile</span></a></li>

                    </ul>
                </div>



            </div>
            <!--  -->
            <div class="user-dashboard">
                <h1>Hello, <?php echo $_SESSION['name'] ?>
                </h1>
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12 gutter">

                        <div class="sales">
                            <h2>Your Courses</h2>

                            <div class="btn-group">
                                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>Short by:</span> time
                                </button>
                                <div class="dropdown-menu">
                                    <a href="#">Java</a>
                                    <a href="#">Python</a>
                                    <a href="#">Full Stack</a>
                                    <a href="#">MongoDb</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12 gutter">

                        <div class="sales report">
                            <h2>Completed</h2>
                            <div class="btn-group">
                                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>Short by:</span> time
                                </button>
                                <div class="dropdown-menu">
                                    <a href="#">C</a>
                                    <a href="#">SE</a>
                                    <a href="#">Html, CSS, JS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>



    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal"><a href="../../util/Logout.php">Logout</a></button>
                    <!-- <button type="button" class="add-project" data-dismiss="modal">Save</button> -->
                </div>
            </div>

        </div>
    </div>

</body>

</html>