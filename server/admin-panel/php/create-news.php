<?php

    include '../../database_connection.php';

    $title = $_POST['title'];
    $content = $_POST['content'];
    
    $date = date("d.m.Y  H:i");

    $push_query = "INSERT INTO news VALUES('', '$title', '$content','$date')";

    $rsl = $conn -> query($push_query);

    if($rsl){

        header("Location: http://localhost/portfolio/ks-server/admin-panel/panel/news.php?post_added");

    } 

?>