<?php

    require_once '../config.php';
    require_once 'functions-fish.php';
    
    $id = $_GET['id'];
    deleteRecord($conn, $id);
    header("Location: http://menu.sofimarten.com///fish/fish_index.php");


?>