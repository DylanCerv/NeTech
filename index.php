<?php require_once "app/config/core.php"; ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeTech</title>
    <link rel="stylesheet" href="assets/css/main.css">
	<link rel="icon" href="assets/img/n.ico">
    <script src="https://kit.fontawesome.com/6b6901710e.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- <?php //require_once "app/api.php"; ?> -->



    <!-- HEADER -->
    <?php require_once "app/public/template/header.php"; ?>
    
<!-- https://www.wired.com/category/artificial-intelligence/ -->
<!-- https://tubitv.com/home -->
    <main>
        <!-- FILTROS -->
        <div class="filtros">
            <?php //require_once "app/public/template/filtros/filtros.php"; ?>
            <hr>
            <h5> Tecnologia - Noticias</h5>
            <hr>
        </div>
        <!-- LIST OF NEWS -->
        <div class="all-news">
            <?php require_once "assets/entitys/news.php"; ?>
            <?php //require_once "app/public/template/body-test.php"; ?>
        </div>
    </main>
    <!-- FOOTERS -->
    <?php require_once "app/public/template/footer.php"; ?>
    <!-- SCRIPTS -->
    <script src="assets/js/appN.js"></script>
</body>
</html>