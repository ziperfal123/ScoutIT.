

window.onload = function () {

    var status = 0;
    var time = 0;
    var teams_list = document.getElementById("teams-list");
    var formation_list = document.getElementById("formation-list");
    var players_list = document.getElementById("players-list");
    var formation1 = document.getElementById("formation3_5_2");
    var formation2 = document.getElementById("formation4_3_3");
    const fills = document.querySelectorAll('.fill');
    const empties = document.querySelectorAll ('.empty');
    var dataClass;
    var dataSrc;
    var dropArea;
    


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
        teams_list.style.display = "none";
        formation_list.style.display = "none";
    };

    document.getElementById("Comments").onclick = function () {
        players_list.style.display = "none";
        teams_list.style.display = "none";
        formation_list.style.display = "none";
    };

    document.getElementById("area-Select").onclick = function () {
        players_list.style.display = "none";
        teams_list.style.display = "none";
        formation_list.style.display = "none";
    };


    document.getElementById("f2").onclick = function () {
        if (formation1.style.display === "none") {
            if (formation2.style.display = "block") {
                formation2.style.display = "none";
            }
            formation1.style.display = "block";
        } else {
            formation1.style.display = "none";
        }
    }

    document.getElementById("f1").onclick = function () {
        if (formation2.style.display === "none") {
            if (formation1.style.display = "block") {
                formation1.style.display = "none";
            }
            formation2.style.display = "block";
        } else {
            formation2.style.display = "none";
        }
    }


    for (const fill of fills){
        fill.addEventListener ('dragstart', dragStart);
        fill.addEventListener ('dragend', dragEnd);
    }


    for (const empty of empties) {
        empty.addEventListener ('dragover', dragOver);
        empty.addEventListener ('dragenter', dragEnter);
        empty.addEventListener ('dragleave', dragLeave);
        empty.addEventListener ('drop', dragDrop);
    }

    function dragStart (e) {
        this.className += ' hold';
        dataSrc = this.getAttribute("src");
        console.log (dataSrc);
    }

    function dragEnd() {
        this.className = 'fill';
        console.log ('End'); 
    }

    function dragOver(e) {
        e.preventDefault();
        console.log ('Over');  
    }
    
    function dragEnter(e) {
        e.preventDefault();
        dropArea = this.className[11];
        console.log (dropArea);
        console.log ("Enter");
    }
    
    function dragLeave() {
        /* this.className = 'empty'; */
        console.log ('Leave');
    }
    
    function dragDrop() {
       var newImg = document.createElement("img");
       newImg.src = dataSrc;
       newImg.draggable = "true";
       newImg.className = "largeFace";
       $(newImg).clone().appendTo(".fieldPlayer" + dropArea);
       console.log ("fieldPlayer" + dropArea);
       console.log (newImg.src); 
    }


    

    // game clock //


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

        swal({
            title: "The information has been succesfully saved to the game report",
            text: "click OK to open report",
            type: "success",
        }).then(function() {
            window.location = "matchReport.html";
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