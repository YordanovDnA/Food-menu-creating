<?php

    require_once '../config.php';
    require_once 'functions-others.php';
    
    $id = $_GET['id'];
    deleteRecord($conn, $id);
    header("Location: http://menu.sofimarten.com/others/others_index.php");


?>
