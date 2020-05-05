<?php

    require_once '../config.php';
    require_once 'functions-meetless.php';
    
    $id = $_GET['id'];
    deleteRecord($conn, $id);
    header("Location: http://menu.sofimarten.com/meetless/meetless_index.php");


?>