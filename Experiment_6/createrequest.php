<?php

include 'connect.php';
session_start();
echo "Your event title is: ".$_POST["cr-title"]."<br>"; 
echo "Your event date is: ".$_POST["cr-date"]."<br>";
echo "Your event description is: ".$_POST["cr-des"]."<br>";
echo "Your event enrollment fees is: ".$_POST["cr-enrol"]."<br>";
echo "Your event poster is: ".$_FILES["cr-upload"]["name"];


$title= $_POST["cr-title"];
$date= $_POST["cr-date"];
$description= $_POST["cr-des"];
$fee= $_POST["cr-enrol"];
$poster= $_FILES["cr-upload"];
$email = $_SESSION['email'];

$conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
    }

    $sql = 'SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = "'.$dbname.'" AND TABLE_NAME = "event"';
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $eid = $row['AUTO_INCREMENT'];

    $sql = "SELECT * FROM user WHERE email = '$email'";
	$result = $conn->query($sql);

    $id = "";

    $name = $eid.$_FILES["cr-upload"]['name'];
    $target_dir = "assets/img/event/".$eid;
    $target_file = $target_dir . basename($_FILES["cr-upload"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");

    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){

        // Insert record
//        $query = "insert into event(name) values('".$name."')";
//        mysqli_query($conn,$query);

        // Upload file
        move_uploaded_file($_FILES['cr-upload']['tmp_name'],$target_dir.$name);
//echo $_FILES['cr-upload']['tmp_name'].'<br>';
//echo $target_dir.$name;
    }

	if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $_SESSION['userid']= $row['user_id'];
            $id = $row['user_id'];
            echo $id.'<br>';
        }
	}


//    echo $id;
    $sql = "INSERT INTO `event` (`event_id`, `created_by`, `title`, `date`, `description`, `fees`, `poster`) VALUES (NULL, '$id', '$title', '$date', '$description', '$fee','$name')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
header('refresh:5.0000001;url=all-events.php');
?>
