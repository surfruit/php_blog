<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Реєстрація</title>
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
    <a class="nav-link active" aria-current="page" href="#">Добавити</a>
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
            
        <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
            <label>ПІБ</label>
            <input type="text" name="full_name" placeholder="Введіть своє повне ім'я">
            <label>Логін</label>
            <input type="text" name="login" placeholder="Введіть свій логін">
            <label>Email</label>
            <input type="email" name="email" placeholder="Введіть свій email">
            <label>Фото профіля</label>
            <input type="file" name="avatar">
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введіть пароль">
            <label>Введіть пароль ще раз</label>
            <input type="password" name="password_confirm" placeholder="Підтвердіть пароль">
            <?php
             if ($_SESSION['message']){
                    echo '<p class="msg">' . $_SESSION['message'] . ' </p>';
                }
             unset($_SESSION['message']); 
             ?>
            <button type="submit">Зареєструватись</button>
            <p>
                У вас вже є аккаунт? - <a href="login.php">авторизуйтесь!</a>
            </p>
        </form>
        
        </div>
        
    </div>
</body>
</html>