<?php

    require_once '../config.php';
    require_once 'functions-soups.php';
    
    $id = $_GET['id'];
    deleteRecord($conn, $id);
    header("Location: http://menu.sofimarten.com/soups/soups_index.php");


?>