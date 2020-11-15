<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin - Web4Hub</title>
    <meta name="description" content="Event Management made easy ...">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","getuser.php?q="+str,true);
                xmlhttp.send();
            }
        }
    </script>
</head>

<body>
<?php
include 'navigation.php';
?>
<main class="page catalog-page">
    <section class="clean-block clean-catalog dark">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-8">
                    <br><br>
                    <div class="card">

                        <div class="card-header">Users</div>

                        <div class="card-body">
<!--                            <table class="table">-->
<!--                                <thead>-->
<!--                                <tr>-->
<!--                                    <th>Title</th>-->
<!--                                    <th>Body</th>-->
<!--                                    <th>Fees</th>-->
<!--                                    <th>Action</th>-->
<!--                                </tr>-->
<!--                                </thead>-->
<!--                                <tbody>-->
<!--                                --><?php
//                                include 'connect.php';
//
//                                $email = $_SESSION['email'];
//                                $conn = new mysqli($servername, $username, $password, $dbname);
//                                $sql = "select * from `event`";
//                                $result=mysqli_query($conn,$sql);
//                                while ($row = mysqli_fetch_array($result)){
//                                    ?>
<!--                                    <tr>-->
<!--                                        <td>-->
<!--                                            --><?php //echo $row['title'];?>
<!--                                        </td>-->
<!--                                        <td>-->
<!--                                            --><?php //echo $row['description'];?>
<!--                                        </td>-->
<!--                                        <td>-->
<!--                                            --><?php //echo $row['fees'];?>
<!--                                        </td>-->
<!--                                        <td>-->
<!--                                            <form method="get">-->
<!--                                                --><?php
//                                                $url = "event-page.php?id=".$row['event_id'];
//                                                echo'<a href="'.$url.'" class="btn btn-secondary">View</a>' ?>
<!--                                            </form>-->
<!--                                        </td>-->
<!--                                    </tr>-->
<!--                                    --><?php
//                                }
//                                ?>
<!--                                </tbody>-->
<!--                            </table>-->
                            <form>
                                <select name="users" onchange="showUser(this.value)">
                                    <option value="">Select a person:</option>
                                    <?php
                                    include 'connect.php';
                                    $email = $_SESSION['email'];
                                    echo $email;
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    $sql = "select * from `user`";
                                    $result=mysqli_query($conn,$sql);
                                    while ($row = mysqli_fetch_array($result)){

                                    echo "<option value='".$row['user_id']."'>".$row['name']."</option>";
                                    }
                                    ?>
                                </select>
                            </form>
                            <br>
                            <div id="txtHint"><b></b></div>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="assets/js/script.min.js"></script>
</body>

</html>
