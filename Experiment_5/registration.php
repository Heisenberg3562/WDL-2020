<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Register - Web4Hub</title>
        <meta name="description" content="Event Management made easy ...">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
        <link rel="stylesheet" href="assets/css/styles.min.css">
    </head>

    <body>
        <?php 
            include 'navigation.php';
        ?>
        <main class="page registration-page">
            <section class="clean-block clean-form dark">
                <div class="container">
                    <div class="block-heading">
                        <h2 class="text-info">Registration</h2>
                        <p>Our event management system simplifies the entire event planning&nbsp;process. Starting with&nbsp;sourcing your venue and ending with dashboards and reports after your event. We have everything covered.<br></p>
                    </div>
                    <form action="regrequest.php" method=post>
                        <div class="form-group"><label for="ename">Name</label><input class="form-control item" type="text" id="ename" name="ename" inputmode="latin-name" required="" autofocus=""><span id="emsg" class="emsg hidden" style="color: rgb(255,0,0);" hidden="">* Enter a valid name</span></div>
                        <div
                            class="form-group"><label for="email">Email</label><input class="form-control item" type="email" id="email" name="email" required="" inputmode="email"><span id="emailmsg" style="color: rgb(250,6,6);" hidden="">* Enter a valid Email</span></div>
                <div class="form-group"><label for="password">Password</label><input class="form-control item" type="password" id="password" name="password" pattern="^[a-zA-Z0-9*]*$" required="" minlength="8"><span id="passmsg" style="color: rgb(250,6,6);" hidden="">* Enter a valid Password</span></div>
                <div
                    class="form-group"><label for="password">Confirm Password</label><input class="form-control item" type="password" id="rpassword" pattern="^[a-zA-Z0-9*]*$" required="" minlength="8"><span id="rpassmsg" style="color: rgb(250,6,6);" hidden="">* Password do not match</span></div>
                    <button
                        class="btn btn-primary btn-block" id="signup" type="submit">Sign Up</button>
                        </form>
                        </div>
            </section>
        </main>
        <?php include "footer.php"; ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script src="assets/js/script.min.js"></script>
        <script src="assets/js/theme.js"></script>
    </body>

</html>
