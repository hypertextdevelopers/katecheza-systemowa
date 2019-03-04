<?php

    include 'database_connection.php';

    header("Access-Control-Allow-Origin: *");

    $show_posts_query = 'SELECT * FROM news ORDER BY id DESC';

    $posts_result = mysqli_query($conn, $show_posts_query);
    $json_array = array();

    while($row = mysqli_fetch_assoc($posts_result)){

        $json_array[] = $row;

    }

    echo json_encode($json_array);

?>