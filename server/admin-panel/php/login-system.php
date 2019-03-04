<?php

    session_start();

    include '../../database_connection.php';

    if( !empty($_POST['login']) && !empty($_POST['password']) ){

        $login = $_POST['login'];
        $password = $_POST['password'];

        $check_db = "SELECT * FROM cms WHERE login = '$login' AND password = '$password'";

        $rsl = $conn -> query($check_db);

        if($rsl -> num_rows > 0){

            $_SESSION['logged'] = TRUE;
            header("Location: http://localhost/portfolio/ks-server/admin-panel/panel/main-panel.php?logged=true");

        }else{
            
            header("Location: http://localhost/portfolio/ks-server/admin-panel/index.php?undefined");

        }

    }

?>