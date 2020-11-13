<?php
include 'connect.php';
session_start();
$email=$_POST['email'];
$pass=md5($_POST['password']);


if(empty($email) || empty($pass))
{
    die("All fields are required");
    header('refresh:0.0000001;url=login.php');
}
else
{

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn)
    {
        echo "Connection established<br><br>";
    }
    else
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "select password,email from `user` where email='".$email."'"." and password='".$pass."'";
    $result=mysqli_query($conn,$sql);

    if($result){
        $row = mysqli_num_rows($result);
        $erow = mysqli_fetch_array($result);
        if($row){
            $_SESSION['email'] = $erow['email'];
            echo "Redirecting to home page";
            header('refresh:0.0000001;url=all-events.php');
        }
        else{
            echo "Wrong email or password";
            echo "Redirecting to login page";
            header('refresh:0.0000001;url=login.php');
        }
        mysqli_free_result($result);
    }

}

mysqli_close($conn);

?>