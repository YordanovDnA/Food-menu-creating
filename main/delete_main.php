<?php

    require_once '../config.php';
    require_once 'functions-main.php';
    
    $id = $_GET['id'];
    deleteRecord($conn, $id);
    header("Location: http://menu.sofimarten.com/main/main_index.php");


?>