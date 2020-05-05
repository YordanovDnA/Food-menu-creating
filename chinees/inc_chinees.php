<?php
        require_once '../config.php';

        
        // Post method to collect information and store it in variables
        $productId = $_POST['product-id'];
        $productName = $_POST['product-name'];
        $productGrams = $_POST['product-grams'];
        $productPrice = $_POST['product-price'];
        
        //Insert to database
        $sql = "INSERT INTO chinees (id, Name, Gram, Price)
        VALUES ('$productId', '$productName', '$productGrams', '$productPrice')";

        if ($conn->query($sql) === TRUE){
            //Връщане към страницата от която идва Post метода
            header("Location: http://menu.sofimarten.com/chinees/chinees_index.php");
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        
?> 