var listLocation = document.getElementById("gpsNumbers");

window.onload = function() {
    var myRequest = new XMLHttpRequest();
    myRequest.open ('GET', './includes/data.json');
    myRequest.onload = function() {
        var data = JSON.parse(myRequest.responseText);
        pushData(data);
    };

    myRequest.send();
}





function pushData(data) {
    listLocation = document.getElementById("gpsNumbers");
    for(var i=0 ; i < data.theArr.length ; i++){
        var pTag = document.createElement("p");
    

        listLocation.appendChild(pTag);
        pTag.innerText = data.theArr[i];
    
    }



};