<?php 
echo "Your event title is: ".$_POST["cr-title"]."<br>"; 
echo "Your event date is: ".$_POST["cr-date"]."<br>";
echo "Your event description is: ".$_POST["cr-des"]."<br>";
echo "Your event entrollment fees is: ".$_POST["cr-enrol"]."<br>";
echo "Your event poster is: ".($_POST["cr-upload"]);
?>