
<?php
    $servername = "localhost";
    $username = "user";
    $password = "@1Levzamen!";
    $dbname = "menu";
    $question = "'Сигурен ли си, че искаш да изтриеш това ястие?'";
    $questionformat = "'Внимание! Сигурни ли сте, че истате да нулирате таблицата?'";
    
    //Create connection with the database
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM newtable";
    $result = $conn->query($sql);

    echo "<h2 class='text-center'>Нова таблица</h2>";
    echo "<table class='container table table-bordered col-lg-6 col-mid-4 col-sm-12'>";
    
    
    echo '<th class="col-6">Име</th>';
    echo '<th class="col-2">Грамаж</th>';
    echo '<th class="col-2">Цена</th>';
    echo '<th class="col-2">
        <form action="newtable/clear_newtable.php" method="post">
        <input name="delete" value="delete" type="hidden">
        <input onclick="return confirm('.$questionformat.')" style="margin: 0px; padding: 1px;" type="submit" value="Нулирай" class="btn-sm btn-warning">
        </form>    
        
        </th>
        ';
    if ($result->num_rows > 0 ){
        
        while($row = $result->fetch_assoc()){
            $IDno = $row["ID"];
            $Name = $row["Name"];
            $Grams = $row["Gram"];
            $Price = $row["Price"];
            echo '
                <tr class="col-12">
                    
                    <td class="col-6">'.$Name.'
                    <a data-toggle="collapse" data-target="#edit-name-'.$IDno.'" id="edit-'.$IDno.'"  href="#"><i class="fas fa-pencil-alt"></i></a>
                    <form class="collapse" id="edit-name-'.$IDno.'" action="newtable/update_newtable.php" method="post">
                    <input class="col-lg-8" name="new-name" value="'.$Name.'">
                    <input type="hidden" name="id" value='.$IDno.'>
                    <input style="margin: 0px; padding: 1px;" class="btn-sm btn-success col-lg-3" type="submit" value="Промени"></form>
                    </td>
                    <td class="col-2">'.$Grams.'
                    <a data-toggle="collapse" data-target="#edit-grams-'.$IDno.'" id="edit-'.$IDno.'"  href="#"><i class="fas fa-pencil-alt"></i></a>
                    <form class="collapse" id="edit-grams-'.$IDno.'" action="newtable/update_newtable.php" method="post">
                    <input class="col-12" name="new-grams" value='.$Grams.'>
                    <input type="hidden" name="id" value='.$IDno.'>
                    <input style="margin: 0px; padding: 1px;" class="btn-sm btn-success col-12" type="submit" value="Промени"></form>
                    </td>
                    
                    
                    <td class="col-2">'.$Price.'
                    <a data-toggle="collapse" data-target="#edit-price-'.$IDno.'" id="edit-'.$IDno.'"  href="#"><i class="fas fa-pencil-alt"></i></a>
                    <form class="collapse" id="edit-price-'.$IDno.'" action="newtable/update_newtable.php" method="post">
                    <input class="col-12"  name="new-price" value='.$Price.'>
                    <input type="hidden" name="id" value='.$IDno.'>
                    <input style="margin: 0px; padding: 1px;" class="btn-sm btn-success col-12" type="submit" value="Промени"></form></td>
                    <td class="col-2"><a  onclick="return confirm('.$question.')" class="btn-sm btn-danger" href="newtable/delete_newtable.php?id='.$IDno.'" >Изтрий</a></td>
                </tr>
            ';
        }
        echo "</table>";
    }
    else{
        echo '<div class="container"><div class="alert alert-danger">
        Таблицата е празна
      </div></div>';
    }
?>
