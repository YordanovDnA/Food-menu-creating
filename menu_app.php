
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню App - Софимартен</title>
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/d6c9141bcd.js" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
         <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="background">
    <div class="bg-mydark border pt-5 pb-2 fixed">
        <header class="container">
            <nav class="">
                <ul class="nav nav-justify justify-content-center nav-expand-sm ">
                    <li class="nav-item"><a href="#" class="btn-top nav-link text-uppercase btn btn-outline-success text-light m-1" data-toggle="collapse" data-target="#chicken">Пилешки</a></li>
                    <li class="nav-item"><a href="" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1" data-toggle="collapse" data-target="#main">Основни</a></li>
                    <li class="nav-item"><a href="" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1" data-toggle="collapse" data-target="#pork">Свински</a></li>
                    <li class="nav-item"><a href="" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1" data-toggle="collapse" data-target="#meetless">Постни</a></li>
                    <li class="nav-item"><a href="" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1" data-toggle="collapse" data-target="#beef">Телешки</a></li>
                    <li class="nav-item"><a href="" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1" data-toggle="collapse" data-target="#lamb">Агнешки</a></li>
                    <li class="nav-item"><a href="" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1" data-toggle="collapse" data-target="#soups">Супи</a></li>
                    <li class="nav-item"><a href="" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1" data-toggle="collapse" data-target="#chineese">Китайски</a></li>
                    <li class="nav-item"><a href="" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1" data-toggle="collapse" data-target="#fish">Риба</a></li>
                    <li class="nav-item"><a href="" class=" btn-top nav-link text-uppercase btn btn-outline-success text-light m-1" data-toggle="collapse" data-target="#desserts">Десерти</a></li>
                    <li class="nav-item"><a onclick="return confirm('Вниманиe!Искате ли да продължите към промяна на бутоните?')" href="chicken/chicken_index.php" class="m-2"><i class="fas fa-pencil-alt text-warning icon-size m-2"></i></a></li>
                    <li class="nav-item"><a onclick="return confirm('Вниманиe!Наистина ли искате да излезете от профила си?')" href="logout.php" class="m-2"><i class="fas fa-sign-out-alt text-danger icon-size m-2"></i></a></li>
                </ul>
            </nav>
        </header>
        <!-- Tab panes -->
        <div class="container mt-3">
        
            <div id="chicken" class="collapse container list-inline">
                <?php include 'chicken/chicken-buttons.php'; ?>                   
            </div>
            <div id="main" class="collapse">
            <?php include 'main/main-buttons.php'; ?>
            </div>
            <div id="pork" class="collapse">
            <?php include 'pork/pork-buttons.php'; ?>
            </div>
            <div id="meetless" class="collapse">
            <?php include 'meetless/meetless-buttons.php'; ?>
            </div>
            <div id="beef" class="collapse">
            <?php include 'beef/beef-buttons.php'; ?>
            </div>
            <div id="lamb" class="collapse">
            <?php include 'lamb/lamb-buttons.php'; ?>
            </div>
            <div id="soups" class="collapse">
            <?php include 'soups/soups-buttons.php'; ?>
            </div>
            <div id="chineese" class="collapse">
            <?php include 'chinees/chinees-buttons.php'; ?>
            </div>
            <div id="fish" class="collapse">
            <?php include 'fish/fish-buttons.php'; ?>
            </div>
            <div id="desserts" class="collapse">
            <?php include 'desserts/desserts-buttons.php'; ?>
            </div>
        </div>
    </div>
            
    <main class="">
    <?php include 'newtable/newtable_index.php'; ?>
    
        
    </main>
    <footer class="container">
    </footer>
</div>
</body>

</html>