<?php

    session_start();

    if( !isset($_SESSION['logged']) || $_SESSION['logged'] != TRUE ){

        header("Location: http://localhost/portfolio/ks-server/admin-panel/panel/error.php"); 

    }

    if( isset($_GET['post_added']) ){

        echo "<script src='../js/added.js'></script>";

    }

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Katecheza Systemowa | Admin panel</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Open+Sans:300,400,600,700,800|Roboto:300,400,500,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cms-choose-panel.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="dark-layer"></div>
    <div class="wrapper">
        <nav>
            <a href="../index.php?logged_out"><button class="btn btn-primary">Wyloguj się</button></a>
            <h1>Witaj Waldek</h1>
        </nav>
        <main>
            <header>
                <h1>Wybierz zakładkę do edycji:</h1>
            </header>
            <div class="main-container">
                <a href="./news.php"><button class="btn btn-primary">Aktualności</button></a>
                <a href="./courses.php"><button class="btn btn-primary">Kursy i szkolenia</button></a>
            </div>
        </main>
    </div>
</body>
</html>