function subscribe(){
    var email = document.getElementById("nemail").value;
    if(email == "" || email == " "){
        alert("Email cannot be empty!");
        return;
    }
    email = email.toLowerCase();
    var re = /\S+@\S+\.\S+/;
    if(!re.test(email)){
        alert("Email address is invalid!");
        return;
    }

    var url = document.location.protocol + "//" + document.location.hostname + ":8001";
    var api = url + "/subscribe.php?email="+email;
    $.ajax({
        url: api,
        type: "GET",
        success:function(response){
            console.log("Resss: "+response);
            if(response == "success"){
                alert("Subscription Successful!");
                document.getElementById("nemail").value = "";
            } else {
                alert("Subscription Failed!");
            }
        },
        error: function (jqXHR, exception) {
            alert("Error");
        }
    });
}
