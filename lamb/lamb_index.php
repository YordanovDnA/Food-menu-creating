<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Icons -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/d6c9141bcd.js" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
         <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
</head>
<body>
<div class="bg-mydark border pt-5 pb-2 fixed">
        <header class="container">
            <nav class="">
                <ul class="nav nav-justify justify-content-center nav-expand-sm ">
                    <li class="nav-item"><a href="../chicken/chicken_index.php" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1" >Пилешки</a></li>
                    <li class="nav-item"><a href="../main/main_index.php" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1">Основни</a></li>
                    <li class="nav-item"><a href="../pork/pork_index.php" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1">Свински</a></li>
                    <li class="nav-item"><a href="../meetless/meetless_index.php" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1">Постни</a></li>
                    <li class="nav-item"><a href="..//beef/beef_index.php" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1">Телешки</a></li>
                    <li class="nav-item"><a href="lamb_index.php" class=" active btn-top nav-link text-uppercase btn btn-outline-success text-light m-1">Агнешки</a></li>
                    <li class="nav-item"><a href="../soups/soups_index.php" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1" >Супи</a></li>
                    <li class="nav-item"><a href="../chinees/chinees_index.php" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1">Китайски</a></li>
                    <li class="nav-item"><a href="../fish/fish_index.php" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1">Риба</a></li>
                    <li class="nav-item"><a href="../desserts/desserts_index.php" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1">Десерти</a></li>
                    <li class="nav-item"><a  href="../index.php" class="m-2">
                    <i class="fas fa-undo icon-size text-warning m-2"></i>
                    </a></li>
                    
                </ul>
            </nav>
        </header>
</div>    
    <?php
       include 'table_lamb.php';
    ?>
    <?php
        include 'inc_form_lamb.html';
    ?>
</body>
</html>