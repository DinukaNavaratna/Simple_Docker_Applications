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
    $.ajax({
        url:"../backend/subscribe.php",
        type: "POST",
        data: {"email": email},
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