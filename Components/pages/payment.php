<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/payment.css">
    <title>Payment</title>
</head>

<body>
    <div class="container">
        <form action="#" method="post">
            <div class="row">
                <div class="col">
                    <h3 class="title">billing address</h3>

                    <div class="inputBox">
                        <span>full name :</span>
                        <input type="text" name="name" placeholder="Enter your full name" required>
                    </div>

                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>

                    <div class="inputBox">
                        <span>address :</span>
                        <input type="text" name="address" placeholder="Enter your address" required>
                    </div>

                    <div class="inputBox">
                        <span>city :</span>
                        <input type="text" name="city" placeholder="Enter your city" required>
                    </div>

                    <div class="flex">

                        <div class="inputBox">
                            <span>state :</span>
                            <input type="text" name="state" placeholder="Enter your state" required>
                        </div>

                        <div class="inputBox">
                            <span>zip code :</span>
                            <input type="text" name="pin" placeholder="Enter your pin" required>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <h3 class="title">payment</h3>

                    <div class="inputBox">
                        <span>cards accepted :</span>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwiw9Wp26Quv9pWS1TClQ_OKvzhtgxEL02WA&usqp=CAU.png" alt="we accept these cards">
                    </div>

                    <div class="inputBox">
                        <span>name on the card :</span>
                        <input type="text" name="bill_name" placeholder="Your Name" required>
                    </div>

                    <div class="inputBox">
                        <span>credit/debit card number :</span>
                        <input type="number" placeholder="xxxx-xxxx-xxxx-xxxx" maxlength="19" required>
                    </div>

                    <div class="inputBox">
                        <span>exp month :</span>
                        <input type="text" placeholder="Month" required>
                    </div>

                    <div class="flex">

                        <div class="inputBox">
                            <span>exp year :</span>
                            <input type="number" placeholder="Year" required>
                        </div>

                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="number" placeholder="Must be 3 digits" maxlength="3" minlength="3" required>
                        </div>

                    </div>
                </div>
            </div>
            <input type="submit" value="proceed to checkout" name="pay" class="submit-btn">
        </form>
    </div>
    <?php
    if (isset($_POST['pay'])) {
        include('../../util/dbcon.php');
        session_start();
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $id =  $_GET["id"];

        $start = date_default_timezone_get();

        $query = "INSERT INTO candi_course (email, crid , start)
                              VALUES('$email','$id' ,'$start')";
        mysqli_query($con, $query);
        header('location: confirmation.php');
    }
    ?>

</body>

</html>