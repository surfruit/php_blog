<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизація</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
<div class="container">
        <div class="auth">
        
        <form action="vendor/signin.php" method="post">
            <label>Логін</label>
            <input type="text" name="login" placeholder="Введіть логін">
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введіть пароль">
            <button type="submit">Увійти</button>
            <p>
                У вас немає аккаунту? - <a href="reg.php">зареєструйтесь!</a>
            </p>
            <?php
             if (isset($_SESSION['message'])){
                    echo '<p class="msg">' . $_SESSION['message'] . ' </p>';
                }
             unset($_SESSION['message']); 
             ?>
        </form>
        </div>
    </div>
</body>
</html>