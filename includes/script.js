swal({
    title: "Good job!",
    text: "Comment has been succesfully sent!",
    icon: "success",
  });
  

window.onload = function () {

    var status = 0;
    var time = 0;
    var teams_list = document.getElementById("teams-list");
    var formation_list = document.getElementById("formation-list");
    var players_list = document.getElementById("players-list");

    document.getElementById("rival-team").onclick = function () {
        if (teams_list.style.display === "none") {
            if ((formation_list.style.display = "block") || (players_list.style.display = "block")) {
                (formation_list.style.display = "none") && (players_list.style.display = "none")
            }
            teams_list.style.display = "block";
        } else {
            teams_list.style.display = "none";
        }
    };


    document.getElementById("formation").onclick = function () {
        if (formation_list.style.display === "none") {
            if ((teams_list.style.display = "block") || (players_list.style.display = "block")) {
                (teams_list.style.display = "none") && (players_list.style.display = "none")
            }
            formation_list.style.display = "block";
        } else {
            formation_list.style.display = "none";
        }
    };

    document.getElementById("players").onclick = function () {
        if (players_list.style.display === "none") {
            if ((teams_list.style.display = "block") || (formation_list.style.display = "block")) {
                (teams_list.style.display = "none") && (formation_list.style.display = "none")
            }
            players_list.style.display = "block";
        } else {
            players_list.style.display = "none";
        }
    };

    document.getElementById("subtitution").onclick = function () {
        players_list.style.display = "none";
        teams_list.style.display = "block";
        formation_list.style.display = "block";
    };

    document.getElementById("Comments").onclick = function () {
        players_list.style.display = "none";
        teams_list.style.display = "block";
        formation_list.style.display = "block";
    };

    document.getElementById("area-Select").onclick = function () {
        players_list.style.display = "none";
        teams_list.style.display = "block";
        formation_list.style.display = "block";
    };

    document.getElementById("startBtn").onclick = function ()  {
        status = 1;
        document.getElementById("startBtn").disabled = true;
        timer();
    };

    document.getElementById("pauseBtn").onclick = function () {
        status = 0;
        document.getElementById("startBtn").disabled = false;
    };

    document.getElementById("stopBtn").onclick = function (){
        status = 0;
        time = 0;
        document.getElementById("startBtn").disabled = true;

        swal("The information has been succesfully saved to the game report", {
            buttons: ["OK", "Open Report"],
          });
    };



    function timer() {
        if (status == 1) {
            setTimeout(function () {
                time++;
                var min = Math.floor(time / 100 / 60);
                var sec = Math.floor(time / 100);

                if (min < 10) {
                    min = "0" + min;
                }

                if (sec < 10) {
                    sec = "0" + sec;
                }

                document.getElementById("timer-lable").innerHTML = min + ":" + sec;
                timer();
            }, 10);
        }
    }

}