
    <?php
       include 'table_newtable.php';
       $valueName = "Меню";
        echo '<div  class="container d-flex justify-content-center">
        <form action="export_csv_newtable.php" method="post">
        <input required style="color: red" name="table_name" placeholder="Име на файла">
        <input type="submit" name="export" value="CSV Export" class="btn btn-success ">
    </form></div>';
        include 'inc_form_newtable.html';
    ?>
