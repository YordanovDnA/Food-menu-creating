<?php

    require_once '../config.php';
    require_once 'functions-salads.php';
    
    $id = $_GET['id'];
    deleteRecord($conn, $id);
    header("Location: http://menu.sofimarten.com/salads/salads_index.php");


?>
