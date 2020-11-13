
<?php
    session_start();
    function runMyFunction() {
        $_SESSION['email'] = null;
        header('refresh:0.000001;url=index.php');
    }

    if (isset($_GET['hello'])) {
        runMyFunction();
    }
?>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#" style="opacity: 1;">Web4Hub</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark clean-navbar">
            <div class="container"><a class="navbar-brand logo" href="#">Web4Hub</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">

                        <li class="nav-item item" role="presentation"><a class="nav-link active" href="index.php">HOME</a></li>
                        <li class="nav-item item" role="presentation"><a class="nav-link" href="features.php">FEATURES</a></li>

                    <?php

                    if(!$_SESSION['email']){

                        echo'<li class="nav-item item" role="presentation"><a class="nav-link" href="contact-us.php">CONTACT US</a></li>';
                        echo'<li class="nav-item item" role="presentation"><a class="btn btn-primary" role="button" href="login.php">Login</a></li>';
                        echo '</ul>';
                        echo'<a class="btn btn-primary" role="button" href="registration.php">Sign up</a>';
                    }
                    else {
                        echo'<li class="nav-item item" role="presentation"><a class="nav-link" href="create-event.php">CREATE</a></li>';
                        echo '<li class="nav-item item" role="presentation"><a class="nav-link" href="all-events.php">Dashboard</a></li>';
                        echo '<a class="btn btn-primary" role="button" href="navigation.php?hello=true">Logout</a>';
                    }
                        ?>
                </div>
            </div>
        </nav>
        </div>
    </nav>
<?php //session_abort() ?>