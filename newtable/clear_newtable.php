<?php
    include_once '../config.php';
    $sql = "DELETE FROM newtable WHERE ID";
    if ($conn->query($sql) === TRUE){
        header("Location: http://menu.sofimarten.com/index.php");
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>