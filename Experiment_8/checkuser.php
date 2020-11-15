<?php
    session_start();
    include('connect.php');
                
        $login=$_POST['login'];
        $pwd = md5($_POST['pwd']);
        $_SESSION['email'] = $login;
        // $pwd = md5($pwd);

        $sql="select * from user where email ='$login' and password='$pwd'";
        // echo $sql;
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
            $_SESSION['email'] = $login;
            echo 'true';
        }
        else{
            echo 'false';
        }
        mysqli_close($conn);        
    
?>