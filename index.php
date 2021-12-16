<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Refresh" content="5">
    <title>Главная</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
<?php
        session_start();
    ?>
    <div class="container">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="addnews.php">Добавити</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Блог</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Вхід</a>
            </li>
</ul>
    </div>
    <hr>
     
        <div class="news">
            <div class="card" style="width: 18rem; margin:10px">
                <img src="https://dummyimage.com/300x200/5755e6/fff" class="card-img-top" alt="...">
                <div class="card-body">
                    <?php 
                   // <h5 class="card-title"></h5>

                    ?>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            
        </div>
        
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>