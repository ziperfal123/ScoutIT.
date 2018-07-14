
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="includes/jquery.min.js"></script>
    <script src="includes/script.js"></script>
    <link rel="stylesheet" href="includes/style.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <title>Game</title>
</head>

<body>
    <div id="wrapper">
        <section id="NewGame">
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
                                <a class="dropdown-item first" href="#"><i class="far fa-futbol"></i>New Game</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fas fa-arrow-left"></i>Previous Games</a>
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
                    <h1 id="notSupportingDesktopMessage"> You are trying to start a new game<br> on a non supporting device.</h1>
                    
                    <div id="field">
                    <img src="images/field.jpg">
                    <div id="formation4_3_3">
                        <div class="fieldPlayer0 empty"></div>
                        <div class="fieldPlayer1 empty"></div>
                        <div class="fieldPlayer2 empty"></div>
                        <div class="fieldPlayer3 empty"></div>
                        <div class="fieldPlayer4 empty"></div>
                        <div class="fieldPlayer5 empty"></div>
                        <div class="fieldPlayer6 empty"></div>
                        <div class="fieldPlayer7 empty"></div>
                        <div class="fieldPlayer8 empty"></div>
                        <div class="fieldPlayer9 empty"></div>
                        <div class="fieldPlayerA empty"></div>
                    </div>

                    <section id="formation3_5_2">
                        <article class="goalKeeper"></article>
                        <article class="fieldPlayer1"></article>
                        <article class="fieldPlayer2"></article>
                        <article class="fieldPlayer3"></article>
                        <article class="fieldPlayer4"></article>
                        <article class="fieldPlayer5"></article>
                        <article class="fieldPlayer6"></article>
                        <article class="fieldPlayer7"></article>
                        <article class="fieldPlayer8"></article>
                        <article class="fieldPlayer9"></article>
                        <article class="fieldPlayer10"></article>
                    </section>

                </div>
                
                <section id="functions">
                    <section id class="stopWatch">
                        <h1 class="title">Game Time</h1>
                        <h2 id="timer-lable">00:00</h2>
                        <button class="myButton" id="startBtn"><i class="fa fa-play-circle fa-2x" aria-hidden="true"></i></button>
                        <button class="myButton" id="pauseBtn"><i class="fa fa-pause-circle fa-2x" aria-hidden="true"></i></button>
                        <button class="myButton" id="stopBtn"><i class="fa fa-stop-circle fa-2x" aria-hidden="true"></i></button>
                    </section>

                    <section id="icons">
                        <ul>
                            <li><button id="rival-team" class="fa fa-futbol-o fa-2x iconsList" aria-hidden="true"><h4>Rival Team</h4></button></li>
                            <li><button id="formation" class="fa fa-braille fa-2x iconsList" aria-hidden="true"><h4>formation</h4></button></li>
                            <li><button id="players" class="fa fa-male fa-2x iconsList" aria-hidden="true"><h4>Players</h4></button></li>
                            <li><button id="subtitution" class="fas fa-exchange-alt fa-2x iconsList" aria-hidden="true"><h4>Subtitution</h4></button></li>
                            <li><button id="Comments" class="fa fa-comment fa-2x iconsList" aria-hidden="true"><h4>Comments</h4></button></li>
                            <li><button id="area-Select" class="fas fa-pencil-alt fa-2x iconsList" aria-hidden="true"><h4>Area Select</h4></button></li>
                        </ul>
                </section>
                    <section id="lists">
                        <ul id="teams-list">
                            <li><button><img src="images/ H. Beer Sheva.png"><span name="Beer-Sheva" class="team"> H. Beer Sheva</span></button></li>
                            <li><button><img src="images/ M. Tel Aviv.png"><span name="macabi-tlv" class="team"> M. Tel Aviv</span></button></li>
                            <li><button><img src="images/ Beitar Jerusalem.png"><span name="Beitar Jerusalem" class="team"> Beitar Jerusalem</span></button></li>
                            <li><button><img src="images/ Benei Yehuda.png"><span name="Benei Yehuda" class="team"> Benei Yehuda</span></button></li>
                            <li><button><img src="images/ H. Kyriat Shemona.png"><span name="H. Kyriat Shemona" class="team"> H. Kyriat Shemona</span></button></li>
                            <li><button><img src="images/ Benei Sakchnin.png"><span name="Benei Sakchnin" class="team"> Benei Sakchnin</span></button></li>
                            <li><button><img src="images/ M. Haifa.png"><span name="M. Haifa" class="team"> M. Haifa</span></li>
                            <li><button><img src="images/ M. Petach Tikva.png"><span name="M. Petach Tikva" class="team"> M. Petach Tikva</span></button></li>
                            <li><button><img src="images/ H. Ashkelon.png"><span name="H. Ashkelon" class="team"> H. Ashkelon</span></button></li>
                            <li><button><img src="images/ H. Raanana"><span name="H. Raanana" class="team"> H. Raanana</span></button></li>
                        </ul>

                        <div id="formation-list">
                            <ul>
                                <li><button>3-4-3</button></li>
                                <li><button id="f2">3-5-2</button></li>
                                <li><button>3-4-2-1</button></li>
                                <li><button id="f1">4-3-3</button></li>
                                <li><button>4-4-2</button></li>
                                <li><button>4-2-2-2</button></li>
                                <li><button>4-3-1-2</button></li>
                                <li><button>4-4-1-1</button></li>
                                <li><button>4-2-3-1</button></li>
                                <li><button>5-3-2</button></li>
                                <li><button>5-4-1</button></li>
                                <li><button>5-3-1-1</button></li>
                                <li><button>5-2-2-1</button></li>
                             </ul>

                        </div>                        
                        
                        <div id="players-list">
                            <div><img  src="images/largeHeads/tamasHead.png" class="fill" draggable="true">#30 G. Tamas</div>
                            <div><img  src="images/largeHeads/kapilotoHead.png" class="fill" draggable="true">#55 N. Kapiloto</div>
                            <div><img  src="images/largeHeads/FishlerHead.png" class="fill" draggable="true">#5 O. Fishler</div>
                            <div><img  src="images/largeHeads/sardalHead.png" class="fill" draggable="true">#24 L. Sardal</div>
                            <div><img  src="images/largeHeads/malulHead.png" class="fill" draggable="true">#4 D. Malul</div>
                            <div><img  src="images/largeHeads/magrashviHead.png" class="fill" draggable="true">#3 H. Magrashvil</div>
                            <div><img  src="images/largeHeads/barskiHead.png" class="fill" draggable="true">#77 R. Barski</div>
                            <div><img  src="images/largeHeads/mamanHead.png" class="fill" draggable="true">#15 H. Maman</div>
                            <div><img  src="images/largeHeads/shchterHead.png" class="fill" draggable="true">#12 A. Shechter</div>
                            <div><img  src="images/largeHeads/ciwanHead.png" class="fill" draggable="true">#8 H. Ciwan</div>
                            <div><img  src="images/largeHeads/maximHead.png" class="fill" draggable="true">#7 M. Flaku</div>
                            <div><img  src="images/largeHeads/arelHead.png" class="fill" draggable="true">#6 G. Arel</div>
                            <div><img  src="images/largeHeads/edenHead.png" class="fill" draggable="true">#9 E. Ben-Basat</div>
                            <div><img  src="images/largeHeads/ginsariHead.png" class="fill" draggable="true">#14 R. Ginsari</div>
                            <div><img  src="images/largeHeads/turjemanHead.png" class="fill" draggable="true">#17 A. Turjeman</div>
                        </div>     
                        
                        <div id="commentsBox">
                            <form action="" nethod="post" id="gameForm">
                                <label id="HhapoelScore" for="hapoelScore">Hapoel Haifa<br>
                                    <textarea id="hapoelScore" name="parameters[]" rows="1" cols="2"></textarea>
                                </label>

                                <label id="HrivalScore" for="rivalScore"> Rival team<br>
                                    <textarea id="rivalScore" name="parameters[]" rows="1" cols="2"></textarea>
                                </label>
                                
                                <label id="Hcorners" for="corners">Corners<br>
                                    <textarea id="corners" name="parameters[]" rows="1" cols="2"></textarea>
                                </label>

                                <label id="Hoffsides" for="offsides">Offsides<br>
                                    <textarea id="offsides" name="parameters[]" rows="1" cols="2"></textarea>
                                </label>

                                <label id="Hpenalties" for="penalties">Penalties<br>
                                    <textarea id="penalties" name="parameters[]" rows="1" cols="2"></textarea>
                                </label>
                                    
                                <label id="Hcomments">
                                    <textarea id="comments" name="parameters[]" placeholder="Write your comment here.." rows="7" cols="65"></textarea>
                                </label>
                                    
                                <button id="submit" type="submit">Save</button>
                            </form>
                        </div>
                        
        </main>
    </section>
    </div>
</body> 
</html>



