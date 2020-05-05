<?php

    require_once '../config.php';
    require_once 'functions-pork.php';
    
    $id = $_GET['id'];
    deleteRecord($conn, $id);
    header("Location: http://menu.sofimarten.com/pork/pork_index.php");


?>