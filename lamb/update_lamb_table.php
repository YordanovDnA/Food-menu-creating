<?php

    require_once '../config.php';
    require_once 'functions-lamb.php';
    
    $id = $_POST['id'];
    $pr = $_POST['new-price'];
    $gr = $_POST['new-grams'];
    $name = $_POST['new-name'];
    $newId = $_POST['new-id'];
    updateRecordPrice($conn,$pr, $id);
    updateRecordGrams($conn,$gr, $id);
    updateRecordName($conn, $name, $id);
    updateRecordId($conn, $newId, $id);
    header("Location: http://menu.sofimarten.com/lamb/lamb_index.php");


?>