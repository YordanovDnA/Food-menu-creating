<?php
//Функция за изтриване по ID от таблица
    function deleteRecord(mysqli $db, $id){
        $sql = "DELETE FROM `newtable` WHERE ID = '".$id."'";
        $result = $db->query($sql);
        if(!$result){
            echo "Не мога да изтрия продукта";
        }
    }

    //Функция за промяна на цената
    function updateRecordPrice(mysqli $db, $pr, $id){
        if(!empty($pr)){
            $sql = "UPDATE `newtable` SET Price= '".$pr."' WHERE ID = '".$id."'";
            $result = $db->query($sql);
            if(!$result){
                echo "Не мога да променя цената.";
            }
        }   
    }

    //Функция за промяна на грамажа
    function updateRecordGrams(mysqli $db, $gr, $id){
        if(!empty($gr)){
            $sql = "UPDATE `newtable` SET Gram= '".$gr."' WHERE ID = '".$id."'";
            $result = $db->query($sql);
            if(!$result){
                echo "Не мога да променя грамажа.";
            }
        }
    }   
    
    //Функция за промяна на име
    function updateRecordName(mysqli $db, $name, $id){
        if(!empty($name)){
            $sql = "UPDATE `newtable` SET Name= '".$name."' WHERE ID = '".$id."'";
            $result = $db->query($sql);
            if(!$result){
                echo "Не мога да променя името.";
            }
        }
    }   
    
    //Функция за промяна на id
    function updateRecordId(mysqli $db, $newId, $id){
        if(!empty($newId)){
            $sql = "UPDATE `newtable` SET ID= '".$newId."' WHERE ID = '".$id."'";
            $result = $db->query($sql);
            if(!$result){
                echo "Не мога да променя ид.";
            }
        }
    }   
    

?>