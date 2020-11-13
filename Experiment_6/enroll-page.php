<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Enroll - Web4Hub</title>
    <meta name="description" content="Event Management made easy ...">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body onload="myFunction();">
<?php 
include 'navigation.php';
?>
    <main class="page payment-page">
        <section class="clean-block payment-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Payment</h2>
                    <p>Event Name</p>
                </div>
                <form>
                    <div class="products">
                        <h3 class="title">Checkout</h3>
                        <div class="item"><span class="price">₹200</span>
                            <p class="item-name">Product 1</p>
                            <p class="item-description"><br></p>
                        </div>
                        <div class="item"><span class="price">₹120</span>
                            <p class="item-name">Product 2</p>
                            <p class="item-description"><br></p>
                        </div>
                        <div class="total"><span>Total</span><span class="price">₹320</span></div>
                    </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type = "checkbox" id="box" onclick="change();">
                                <label for = "box">I have read and agree to the Privacy Policy</label><br>
                            </div>

                            <div class="form-group"><button class="btn btn-primary btn-block" id="bttn" type="submit">Proceed</button><br></div>
                        </div>
                </form>
            </div>
        </section>
    </main>
    <?php
    include "footer.php";
    ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="assets/js/box.js"></script>
</body>

</html>
