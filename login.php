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
                <span class="text-center">Ако не сте администратор не бива да опитвате да влизате чрез тази форма!</span>
                <kbd class=""><a class="text-danger" href="https://food.sofimarten.com">Излез</a></kbd>
                </div>
                </div>
            </div>

    <div class="container d-flex justify-content-center">
    <form style="width: 360px; background-color: #222425;" class="was-validated m-5 p-5 rounded shadow-lg text-light" action="login_function.php" method="post">
        <h4 class="text-center">Вход:</h4>
        <div class="form-group">
        <lable for="username">Потребителско име:</lable>
        <input class="form-control" name="username" type="text" placeholder="Потребителско име" required>
        <div class="valid-feedback">Валидно</div>
        <div class="invalid-feedback">Това поле е задължително</div>
        </div>
        <div class="form-group">
        <lable for="password">Парола:</lable>
        <input class="form-control" name="password" type="password" placeholder="Парола" required>
        <div class="valid-feedback">Валидно</div>
        <div class="invalid-feedback">Това поле е задължително</div>
        </div>
        <input class="btn-block btn-success rounded" type="submit" value="Вход">
    </form>
    </div>
</div>
</body>
</html>