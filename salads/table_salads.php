<?php
    require_once '../config.php';
    $question = "'Сигурен ли си, че искаш да изтриеш това ястие?'";

    $sql = "SELECT * FROM salads";
    $result = $conn->query($sql);

    echo "<h2 class='text-center'>Таблица - Пилешки Ястия</h2>";
    echo "<table class='container table table-bordered col-lg-6 col-mind-4 col-sm-12'>";
    
    echo "<th>ID</th>";
    echo "<th>Име</th>";
    echo "<th>Грамаж</th>";
    echo "<th>Цена</th>";
    if ($result->num_rows > 0 ){
        
        while($row = $result->fetch_assoc()){
            $IDno = $row["id"];
            $Name = $row["Name"];
            $Grams = $row["Gram"];
            $Price = $row["Price"];
            echo '
                <tr>
                    <td>'.$IDno.'</td>
                    <td>'.$Name.'
                    <a data-toggle="collapse" data-target="#edit-name-'.$IDno.'" id="edit-'.$IDno.'"  href="#"><i class="fas fa-pencil-alt"></i></a>
                    <form class="collapse" id="edit-name-'.$IDno.'" action="update_salads_table.php" method="post">
                    <input style="width:15rem;" name="new-name" value="'.$Name.'">
                    <input type="hidden" name="id" value='.$IDno.'>
                    <input class="btn-sm btn-success" type="submit" value="Промени"></form>
                    </td>
                    <td>'.$Grams.'
                    <a data-toggle="collapse" data-target="#edit-grams-'.$IDno.'" id="edit-'.$IDno.'"  href="#"><i class="fas fa-pencil-alt"></i></a>
                    <form class="collapse" id="edit-grams-'.$IDno.'" action="update_salads_table.php" method="post">
                    <input style="width:4rem;" name="new-grams" value='.$Grams.'>
                    <input type="hidden" name="id" value='.$IDno.'>
                    <input class="btn-sm btn-success" type="submit" value="Промени"></form>
                    </td>
                    
                    <td>'.$Price.'
                    <a data-toggle="collapse" data-target="#edit-price-'.$IDno.'" id="edit-'.$IDno.'"  href="#"><i class="fas fa-pencil-alt"></i></a>
                    <form class="collapse" id="edit-price-'.$IDno.'" action="update_salads_table.php" method="post">
                    <input style="width:4rem;" name="new-price" value='.$Price.'>
                    <input type="hidden" name="id" value='.$IDno.'>
                    <input class="btn-sm btn-success" type="submit" value="Промени"></form></td>
                    <td><a onclick="return confirm('.$question.')" class="btn btn-danger" href="delete_salads.php?id='.$IDno.'" >Изтрий</a></td>
                </tr>
            ';
        }
        echo "</table>";
    }
    else{
        echo "Таблицата е празна";
    }
?>
