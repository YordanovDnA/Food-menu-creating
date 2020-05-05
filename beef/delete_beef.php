<?php

    require_once '../config.php';
    require_once 'functions-beef.php';
    
    $id = $_GET['id'];
    deleteRecord($conn, $id);
    header("Location: http://menu.sofimarten.com//beef/beef_index.php");

?>