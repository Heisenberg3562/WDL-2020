<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Catalog - Web4Hub</title>
    <meta name="description" content="Event Management made easy ...">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                        <div class="form-inline my-2 my-lg-0 justify-content-center" >
                            <br><br><br><br>
                            <input style="display:inline;" name="search" id="search" class="form-control mr-sm-1" type="text" placeholder="Search" aria-label="Search">
                            <button class="btn btn-secondary my-2 my-sm-0" name="submit" type="submit">Search</button>
                        </div>
                        <div class="col-md-5 " style="position: relative;margin-top: -29px;margin-left: 189px;">
                            <div class="list-group" id="show-list">

                            </div>
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function () {
                            // Send Search Text to the server
                            $("#search").keyup(function () {
                                var searchText = $(this).val();
                                console.log(searchText);
                                if (searchText != '') {
                                $.ajax({
                                    url: "action.php",
                                    method: "post",
                                    data: {
                                    query: searchText,
                                    },
                                    success: function (response) {
                                    $("#show-list").html(response);
                                    }
                                });
                                } else {
                                $("#show-list").html('');
                                }
                            });
                            // Set searched text in input field on click of search button
                            $(document).on("click", "a", function () {
                                $("#search").val($(this).text());
                                $("#show-list").html('');
                            });
                            });
                        </script>
                        <br>
                        <div class="card">
                        
                            <div class="card-header">Events</div>

                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Body</th>
                                        <th>Fees</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include 'connect.php';

                                    $email = $_SESSION['email'];
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    $sql = "select * from `event`";
                                    $result=mysqli_query($conn,$sql);
                                    while ($row = mysqli_fetch_array($result)){
                                        ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['title'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['description'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['fees'];?>
                                        </td>
                                        <td>
                                            <form method="get">
                                                <?php
                                                $url = "event-page.php?id=".$row['event_id'];
                                                echo'<a href="'.$url.'" class="btn btn-secondary">View</a>' ?>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>


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
