var deleteButtonId;

window.onload = function () {
    
    const buttons = document.querySelectorAll ('.deleteButton');

    for (const deleteButton of buttons){
        deleteButton.addEventListener ('click', onclick);
    }
}

function onclick (event) {
    deleteButtonId= this.getAttribute("id");
    event.preventDefault();
    var dataString = "buttonId=" + deleteButtonId;
    console.log (dataString);

    $.ajax({
            type: "POST",
            url: "deleteForm.php",
            data: dataString,
            cache: true,
            success: function(data){
                console.log(data);
                // newFunction(data);
                // $("#functions").html(data);
            }
    });
    return false;
}