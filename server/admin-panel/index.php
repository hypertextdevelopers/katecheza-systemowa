<?php

    session_start();

    if( isset($_GET['logged_out']) ){

        $_SESSION['logged'] = array();
        
        echo "<script src='./js/logged.out.js'></script>";

    }

    if( isset($_GET['undefined']) ){

        echo "<script src='./js/undefined.js'></script>";

    }

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel Admina | Logowanie</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Open+Sans:300,400,600,700,800|Roboto:300,400,500,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../admin-panel/css/login-panel.css">
</head>
<body>
    <div class="log">
        <header>
            <h1>Zaloguj się</h1>
        </header>
        <form action="./php/login-system.php" method="POST">
            <input type="text" class="form-control" placeholder="Podaj login" name="login" required>
            <input type="password" class="form-control" placeholder="Podaj hasło" name="password" required>
            <button type="submit" class="btn btn-success">Zaloguj</button>
        </form>
    </div>
    <div class="dark-layer"></div>
    <div class="alert-logged-out" id="logged-out">
        <h2>Wylogowano pomyślnie</h2>
    </div>
    <div class="alert-undefined" id="undefined">
        <h2>Błędny login lub hasło</h2>
    </div>
</body>
</html>