<?php 
echo "Your email address is: ".$_POST["email"]."<br>"; 

echo "Your password is: ".md5($_POST["password"]);
?>