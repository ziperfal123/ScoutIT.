var status= 0;
var time= 0;
var teams = document.getElementById("rival-team");

window.onload = function () {
    document.getElementById("teams").style.display="none";
    document.getElementById("formation-list").style.display="none";
    document.getElementById("players-list").style.display="none";
}

function start () {
    status = 1;
    document.getElementById("startBtn").disabled = true;
    timer ();
}

function stop (){
    status = 0;
    document.getElementById("startBtn").disabled =  false;
}

function end_game () {
    status= 0;
    time= 0;
    document.getElementById("startBtn").disabled =  true;

}

function timer() {
    if (status==1){
        setTimeout(function () {
            time++;
            var min= Math.floor (time/100/60);
            var sec= Math.floor (time/100);

            if (min < 10){
                min = "0" + min;
            }

            if (sec < 10) {
                sec = "0" + sec;
            }

            document.getElementById("timer-lable").innerHTML= min + ":" + sec;
            timer();
        },10);
    }
}

function team () {
    var teams_list = document.getElementById("teams");
    var formation_list = document.getElementById("formation-list");
    var players_list = document.getElementById("players-list");
    if (teams_list.style.display === "none") {
        if ((formation_list.style.display = "block") || (players_list.style.display = "block")){
            (formation_list.style.display = "none") && (players_list.style.display = "none")
        }
        teams_list.style.display = "block";
    } else {
        teams_list.style.display = "none";
    }
}

function formation () {
    var teams_list = document.getElementById("teams");
    var formation_list = document.getElementById("formation-list");
    var players_list = document.getElementById("players-list");
    if (formation_list.style.display === "none") {
        if ((teams_list.style.display = "block") || (players_list.style.display = "block")){
            (teams_list.style.display = "none") && (players_list.style.display = "none")
        }
        formation_list.style.display = "block";
    } else {
        formation_list.style.display = "none";
    }
}

function players () {
    var teams_list = document.getElementById("teams");
    var formation_list = document.getElementById("formation-list");
    var players_list = document.getElementById("players-list");
    if (players_list.style.display === "none") {
        if ((teams_list.style.display = "block") || (formation_list.style.display = "block")){
            (teams_list.style.display = "none") && (formation_list.style.display = "none")
        }
        players_list.style.display = "block";
    } else {
        players_list.style.display = "none";
    }
}

function subtitution () {
    document.getElementById("teams").style.display = "none";
    document.getElementById("formation-list").style.display = "none";
    document.getElementById("players-list").style.display = "none";

}

function Comments() {
    document.getElementById("teams").style.display = "none";
    document.getElementById("formation-list").style.display = "none";
    document.getElementById("players-list").style.display = "none";
}

function area_Select() {
    document.getElementById("teams").style.display = "none";
    document.getElementById("formation-list").style.display = "none";
    document.getElementById("players-list").style.display = "none";
}
