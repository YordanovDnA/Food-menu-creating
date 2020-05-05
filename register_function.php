<?php
    include_once('config.php');

    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    if($password1 === $password2){
        echo "Passwords matched!";
        $password = $password1;
        $sql = "INSERT INTO users (Name, Password)VALUES('$username', md5('$password'))";
        if($conn->query($sql) === TRUE){
            echo "User is registered";
            
        }
        else{
            echo "Error";
        }
    }
    else{
        echo "Password doesn't match!";
        header("Location index.php");
    }


?>