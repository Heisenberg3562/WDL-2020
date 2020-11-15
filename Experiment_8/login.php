<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Web4Hub</title>
    <meta name="description" content="Event Management made easy ...">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>


</head>

<body>
<?php 

include 'navigation.php';

?>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Log In</h2>
                    <p>Easy-to-use, powerful online event management.</p>
                </div>
                <form id="loginform" method=post>
                    <div class="form-group"><label for="login">Email</label><input class="form-control item" type="email" id="login" name="login"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control" type="password" id="password" name="password">
                    <p>The password should contain at least one digit,one lower case,one upper case, 8 characters</p>
                    </div>
                    <div class="form-group">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label class="form-check-label" for="checkbox">Remember me</label></div>
                    </div><button class="btn btn-primary btn-block" type="submit">Log In</button>
                    <div id="usererr"></div>
                </form>
            </div>
        </section>
    </main>

<script type="text/javascript">

    $(function(){
        $("#loginform").on('submit',function(e) {
            e.preventDefault();
            var login = $('#login').val();
            var pwd = $('#password').val();

            $.ajax({
                type: 'POST',
                url: 'checkuser.php',
                data: {
                    login: login,
                    pwd: pwd
                },
                success: function (data, status, xhr) {
                    // alert(data);
                    // alert(status);
                    if(data == "false")
                    {
                        $("#usererr").html('<span class="alert alert-danger" role="alert">Invalid username / password </span>');

                    }
                    else {

                        // $("#usererr").html('<span class="alert alert-success role="alert"">Loggin you in</span>');

                        setTimeout(function() {
                            window.location.href = "all-events.php";
                        }, 2000);

                    }
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    alert('Error: ' + errorMessage);
                }
            });
        });


    });
</script>

<?php

include "footer.php";

 ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<!--    <script src="assets/js/script.min.js"></script>-->
<!--    <script src="assets/js/app.js"></script>-->
</body>

</html>
