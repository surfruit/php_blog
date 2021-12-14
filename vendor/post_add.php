<?php

session_start();
require_once 'connect.php';


$article = $_POST['title'];
$text = $_POST['text'];

$path = 'uploads/' . time() . $_FILES['article_image']['name'];
if(!move_uploaded_file($_FILES['article_image']['tmp_name'], '../' . $path))
{
    $_SESSION['message'] = 'Помилка при завантажені зображення';
    header('Location: ../addnews.php');
}

mysqli_query($connect, "INSERT INTO `articles` (`id`, `title`, `text`, `article_image`, `pubdate`) VALUES (NULL, '$title', '$text', '$path', current_timestamp())");
$_SESSION['message'] = "Новина успішно додана!";
        header('Location: ../index.php');

?>