<?php

    require_once '../config.php';
    require_once 'functions-desserts.php';
    
    $id = $_GET['id'];
    deleteRecord($conn, $id);
    header("Location: http://menu.sofimarten.com/desserts/desserts_index.php");


?>