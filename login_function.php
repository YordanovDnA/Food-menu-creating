<?php
    include_once('config.php');
    
    
        $name = $_POST["username"]; 
        $password = md5($_POST["password"]); 

        if ($result = $conn -> query("SELECT Name, Password FROM users WHERE Name = '".$name."' && Password = '".$password."'")) {
            if($result -> num_rows>0){
                header("Location: index.php");
                session_start();
                $_SESSION['user'] = "$name";
            }
            else {
                echo "Такъв потребител не съществува. Моля опитайте отново";
                echo '<a href="login.php">Назад</a>';
            }
        }
            
    
$conn->close();
?>