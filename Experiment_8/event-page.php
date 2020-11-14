<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Event - Web4Hub</title>
    <meta name="description" content="Event Management made easy ...">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
<?php 

include 'navigation.php';
$id = $_GET['id'];
include 'connect.php';
$email = $_SESSION['email'];
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "select * from `event` WHERE event_id =".$id;
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result)
?>

    <main class="page product-page">
        <section class="clean-block clean-product dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Web4Hub</h2>
                    <p>Easy-to-use, powerful online event management.</p>
                </div>
            </div>
            <div class="block-content">
                <div class="product-info">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="gallery" >
                                <div class="sp-wrap"><a href="<?php echo 'assets/img/event/'.$row['poster'];?>"><img class="img-fluid d-block mx-auto" src="<?php echo 'assets/img/event/'.$row['poster'];?>"></a><a href="<?php echo 'assets/img/event/'.$row['poster'];?>"><img class="img-fluid d-block mx-auto" src="<?php echo 'assets/img/event/'.$row['poster'];?>"></a><a href="<?php echo 'assets/img/event/'.$row['poster'];?>"><img class="img-fluid d-block mx-auto" src="<?php echo 'assets/img/event/'.$row['poster'];?>"></a></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <h3><?php echo $row['title'];?></h3>
                                <div class="price">
                                    <h3>₹<?php echo $row['fees'];?></h3>
                                </div><a class="btn btn-primary btn-lg" type="button" href="#"><i class="icon-basket"></i>Enroll now</a><p></p>
                                <div class="summary">
<!--                                    <h6><b>Type : {{ $event->type }}</b></h6>-->
                                    <p>Date : <?php echo $row['date'];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <div>
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" id="description-tab" href="#description">Description</a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane active fade show description" role="tabpanel" id="description">
                                <p>
                                    <?php echo $row['description'];?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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
</body>

</html>
