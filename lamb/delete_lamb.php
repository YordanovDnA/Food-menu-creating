<?php

    require_once '../config.php';
    require_once 'functions-lamb.php';
    
    $id = $_GET['id'];
    deleteRecord($conn, $id);
    header("Location: http://menu.sofimarten.com/lamb/lamb_index.php");


?>