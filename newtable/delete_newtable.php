<?php

    require_once '../config.php';
    require_once 'functions-newtable.php';
    
    $id = $_GET['id'];
    deleteRecord($conn, $id);
    header("Location: http://menu.sofimarten.com/index.php");


?>