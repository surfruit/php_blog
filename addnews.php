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
    <div class="main">
        <div class="auth">
      <form action="vendor/news.php" method="$_POST">
          <label>Введіть Заголовок</label>
          <input type="text" name="title">
          <label>Введіть текст</label>
          <input type="text" name="text"size="25" class="article_text">
          <label>Прикріпіть зображення</label>
          <input type="file" name="article_image">
          <button type="submit">Добавити</button>
      </form> 
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>