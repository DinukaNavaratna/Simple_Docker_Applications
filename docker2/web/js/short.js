function short(){
    var url = document.getElementById("url").value;
    if(url == "" || url == " "){
        alert("url cannot be empty!");
        return;
    }
    url = url.toLowerCase();

    var host = document.location.protocol + "//" + document.location.hostname + ":9000";
    var api = host + "/short.php?url="+url;
    $.ajax({
        url: api,
        type: "GET",
        success:function(response){
            console.log("Resss: "+response);
            if(response == "failed"){
                alert("Process Failed!");
            } else {
                alert("URL Shortned!");
		document.getElementById("short_url_lbl").style.visibility = "visible"; 
                document.getElementById("url").value = "";
                document.getElementById("short_url").innerHTML = document.location.protocol + "//" + document.location.hostname + ":8000/" + response;
            }
        },
        error: function (jqXHR, exception) {
            alert("Error");
        }
    });
}

function copyElementText(id) {
    var text = document.getElementById(id).innerText;
    var elem = document.createElement("textarea");
    document.body.appendChild(elem);
    elem.value = text;
    elem.select();
    document.execCommand("copy");
    document.body.removeChild(elem);
    alert("URL Copied!");
}
