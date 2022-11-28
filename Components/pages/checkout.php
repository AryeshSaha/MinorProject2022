<html lang="en">
<?php
session_start();
include('../../util/dbcon.php');
include('../../util/time.php');
$id =  $_GET["id"];
$query  = mysqli_query($con, "SELECT * FROM courses WHERE crid='$id'");
$row   = mysqli_fetch_array($query);
$_SESSION['course_name'] = $row['crnaam'];
$img = $row['crimg'];


?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/checkout.css">
    <title>Checkout</title>
</head>

<body>
    <main>
        <div class="basket">
            <div class="basket-module">
                <h1 id="heading-name"><?php echo $_SESSION['name'] ?></h1>
            </div>
            <div class="basket-labels">
                <ul>
                    <li class="item item-heading">Item</li>
                    <li class="price">Duration</li>
                    <li class="price">Price</li>
                    <!-- <li class="quantity">Quantity</li>
                    <li class="subtotal">Subtotal</li> -->
                </ul>
            </div>
            <div class="basket-product">
                <div class="item">
                    <div class="product-image">
                        <img src=<?php echo $img ?> alt="Placholder Image 2" class="product-frame">
                    </div>
                    <div class="product-details">
                        <h1><strong><?php echo $row['crnaam'] ?></strong></h1>
                    </div>
                </div>
                <div class="price"><?php echo calcCourseDuration($row['dur']); ?> Days</div>
                <div class="price">₹<?php echo $row['amt']; ?></div>
                <div class="remove">
                    <a href="dashbord.php"><button class="rem">Remove</button></a>
                </div>
            </div>

        </div>
        <aside>
            <div class="summary">
                <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
                <div class="summary-subtotal">
                    <div class="subtotal-title">Subtotal</div>
                    <div class="subtotal-value final-value" id="basket-subtotal">₹<?php echo $row['amt'] ?></div>
                    <div class="summary-promo hide">
                        <div class="promo-title">Promotion</div>
                        <div class="promo-value final-value" id="basket-promo"></div>
                    </div>
                </div>
                <div class="summary-total">
                    <div class="total-title">Total</div>
                    <div class="total-value final-value" id="basket-total">₹<?php echo $row['amt'] ?></div>
                </div>
                <div class="summary-checkout">
                    <a <?php echo 'href=" ./payment.php?id=' . $id . '"';  ?>><button class="checkout-cta">Make Payment</button></a>
                </div>
            </div>
        </aside>
    </main>
</body>

</html>