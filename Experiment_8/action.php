<?php
include "connect.php";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Failed to connect".$conn->connect_error);
}

if (isset($_POST['query'])) {
    $inpText=$_POST['query'];
 
    $query = "SELECT * FROM event WHERE title LIKE '%$inpText%' ";
    $result = $conn->query($query);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo "<a href='event-page.php?id=".$row['event_id']."' class='list-group-item list-group-item-action border-1'>".$row['title']."</a>";

        }
    }
    else{
    echo "<p class='list-group-item border-1'>No Record></p>";
    }
}
 
?>