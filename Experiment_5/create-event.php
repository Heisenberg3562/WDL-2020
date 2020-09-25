<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Create Event - Web4Hub</title>
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
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Create Event</h2>
                    <p>Let's Make Something Awesome<br>Your account is all set up, it's time to create your Event!<br></p>
                </div>
                <form action= "createrequest.php" method= post>
                    <div class="form-group"><label for="tile">Title</label><input class="form-control" name="cr-title" id="cr-title" type="text"></div>
                    <div class="form-group"><label for="date">Date</label><input class="form-control" name="cr-date" id="cr-date" type="date"></div>
                    <div class="form-group"><label for="description">Description</label><textarea class="form-control" name="cr-des" id="cr-des"></textarea></div>
                    <div class="form-group"><label for="enrollment-fees">Enrollment Fees</label><input class="form-control" name="cr-enrol" id="cr-enrol" type="number"></div>
                    <div class="form-group"><label for="upload-poster">Upload Poster</label><input type="file" name="cr-upload" id="cr-upload" multiple="" accept="image/*"></div>
                    <button class="btn btn-primary btn-block" type="submit">Create</button></form>
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
