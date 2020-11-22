<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Grayscale - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet"/>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet"/>
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">Добавление статьи:</h1>

        </div>
    </div>
</header>

<div class="footer bg-black small text-center text-white-50">
    <form action="" method="post">

        <h2> Заголовок </h2>
        <brr>
            <input type="text" name="title"/>
            <br>
            <h2>Вставка кратинки</h2>
            <br>
            <input type="file" name="img"/>
            <br>
            <h2> Статья </h2>
            <br>
            <textarea name="content" id="" cols="30" rows="10"></textarea>
            <br>
            <h2> ФИО автора </h2>
            <br>
            <input type="text" name="author"/>
            <br>
            <h2> Ктегория статьи </h2>
            <br>
            <input type="text" name="category"/>
            <br>
            <br>
            <button type="submit">Сохранить</button>
    </form>
</div>


<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50">
    <div class="container">Copyright © Your Website 2020</div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>


<?php
require_once 'admin.php';

if (!empty($_POST)) {
    $sql = "INSERT INTO `test_blog`.`pages` (`title`, `img`, `content`, `author`, `category`)
    VALUES ('{$_POST['title']}', '{$_POST['img']}', '{$_POST['content']}', '{$_POST['author']}',
    '{$_POST['category']}')
";
    mysqli_query($connection, $sql);
}