<?php 
    include 'connect.php';
    session_start();

$name = $_POST["ename"];
    $email = $_POST["email"];
    $pass = md5($_POST["password"]);

//    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
    }
    $sql = "INSERT INTO user (user_id, name, email, password) VALUES (NULL, '$name', '$email', '$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header('refresh:0.0000001;url=all-events.php');
?>