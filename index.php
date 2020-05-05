<?php
    session_start();
    if(isset($_SESSION['user'])){
        include('menu_app.php');
    }
    else{
        echo'
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="css/style.css">
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
            <div class="background">
                <div class="container d-flex justify-content-center">
                    <div class="w-100 p-2 rounded shadow bg-warning text-dark text-center">
                    <span class="text-center">Нямате достъп до тази страница, защото не сте се вписали.</span>
                    <kbd class=""><a class="text-danger" href="login.php">Вход</a></kbd>
                    </div>
                </div>
                <div class="container d-flex justify-content-center">
                    <span class="p-2 mt-5 text-center ">Съжаляваме, но тази страница е достъпна само от администратори!</span>
                </div>
                <div class="container d-flex justify-content-center">
                <img class="col-12" style="height: 400px;" src="images/come_back_later.png" alt="Come back later" class="">
                </div>
            </div>
            <div class="container">
            <a href="login.php" class="btn-sm btn-dark btn-block text-danger text-center">Вход</a>
            </div>
        </body>
        </html>
        ';
        
    }
?>