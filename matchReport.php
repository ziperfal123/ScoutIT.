<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="includes/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <link rel="stylesheet" href="includes/style.css">
    <title>Match Report</title>
</head>

<body>
    <div id="wrapper">
        <section id="matchReport">
            <header>
                    <p>Hello Reuven!</p>
                    <a id="logo" href="index.html"></a>
                    <article id="reuven"></article>      

                    <nav class="navbar navbar-expand-lg navbar-light bg-light theNav">
                        <li class="nav-item dropdown">


                            <a class="nav-link hamburger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bars"></i>
                            </a>
                            <div class="dropdown-menu dropDownMenu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item first" href="newGame.php"><i class="far fa-futbol"></i>New Game</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="reports.php"><i class="fas fa-arrow-left"></i>Previous Games</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fab fa-stack-exchange"></i>Statistics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="far fa-chart-bar"></i>Player Analysis</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fas fa-table"></i>League Table</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog"></i>Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="contactUs.html"><i class="fas fa-phone"></i>Contact Us</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item logout" href="#"><i class="fas fa-sign-out-alt"></i>Logout</a>
                            </div>
                        </li>
                    </nav>
                </header>
                <main>
                <h1>Match Report</h1>
                        <?php
                            include ("db.php");

                            $iconId= $_GET['id'];
                            
                            $query1 = "SELECT * FROM tb_games_216 WHERE game_id = $iconId";    
                            $result = mysqli_query($connection, $query1);

                            if(!$result) {
                                die('DB QUERY FAILED.');
                            }
                            
                            
                            $row = mysqli_fetch_assoc($result);

                            // (rival_team,game_date,self_score,rival_score,corners,offsides,pendelties,comments)

                            echo '<div class="rContainer">
                            <h4> H. Haifa - ' . $row['rival_team'] . '</h4>';
                        echo '<h4 class="theScore"> ' . $row['self_score'] . ' - ' . $row['rival_score'] . ' </h4>
                        <h5 class="theDate">' . $row['game_date'] . '</h5>';
                        echo '</div>';
                        echo '<div class="sContainer">';
                         
                        echo '<h6> Corners </h6>' .  $row['corners'] . '<h6> Offsides </h6>' .  $row['offsides'] . 
                        '<h6> Pendelties </h6>' . $row['pendelties'] . '<h6> Comments </h6>' . $row['comments'];
                        
                        echo '</div>';
                        
                        ?>

                </main>
    </div>
</body>
</html>