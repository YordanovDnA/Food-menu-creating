<?php

    require_once '../config.php';
    require_once 'functions-chicken.php';
    
    $id = $_GET['id'];
    deleteRecord($conn, $id);
    header("Location: http://menu.sofimarten.com/chicken/chicken_index.php");


?>