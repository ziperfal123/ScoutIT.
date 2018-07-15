<?php
    include('db.php');
    
    $deletbutton = $_POST['buttonId'];

    $query1 = "DELETE FROM tb_games_216 WHERE game_id = $deletbutton";
    $result = mysqli_query($connection, $query1);
    
    if(!$result) {
        die('DB QUERY FAILED.');
    }  

    mysqli_close($connection);
?>