<?php

    require_once '../config.php';
    require_once 'functions-chinees.php';
    
    $id = $_GET['id'];
    deleteRecord($conn, $id);
    header("Location: http://menu.sofimarten.com/chinees/chinees_index.php");


?>