<?php 
    echo "Your Name is: ".$_POST["ename"]."<br>"; 
    echo "Your Email is: ".$_POST["email"]."<br>"; 
    echo "Your Password is: ".md5($_POST["password"]);
?>