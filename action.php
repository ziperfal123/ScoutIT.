<?php
    include('db.php');
    
    $parameters = $_POST['parameters'];
    $game_date = date("Y-m-d");
    $rival_team = $_POST['rivalteam'];
    

    
    $query1 = "SELECT * FROM tb_games_216 order by rival_team desc";    
    $result = mysqli_query($connection, $query1);

    if(!$result) {
        die('DB QUERY FAILED.');
    }  
        if (isset($_POST['parameters']) ){

        $hapoelScore = mysqli_real_escape_string($connection, $parameters[0]);
        $rivalScore = mysqli_real_escape_string($connection, $parameters[1]);
        $corners = mysqli_real_escape_string($connection, $parameters[2]);
        $offsides = mysqli_real_escape_string($connection, $parameters[3]);
        $penalties = mysqli_real_escape_string($connection, $parameters[4]);
        $comments = mysqli_real_escape_string($connection, $parameters[5]);
        $rival_team = mysqli_real_escape_string($connection, $rival_team); 

        $query1 = "INSERT into tb_games_216 (rival_team,game_date,self_score,rival_score,corners,offsides,pendelties,comments)
        values ('$rival_team','$game_date',$hapoelScore,$rivalScore,$corners,$offsides,$penalties,'$comments')";


        if (!$query1)
            die('Invalid query: ' . mysql_error());
        
        $result = mysqli_query($connection, $query1);

        $query1 = "SELECT * FROM tb_games_216 order by rival_tean desc";
        $result = mysqli_query($connection, $query1);

        }

    mysqli_close($connection);
?>