function updateUserMessage() {

    let message = $(".az-dashboard-title").text();
    message = message.split(',');
    let username = message[1].split(' ');

    var regExp = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
    let updateMessage = {
        "userName":username[0],
        "email":$("#email_change_user").val(),
        "password":$("#pass_change_user").val(),
        'phoneNumber':$("#phonenum_change_user").val(),
        'address':$("#address_change_user").val(),
        'subrub':$("#suburb_change_user").val(),
        'state':$("#state_change_user").val(),
        'postcode':$("#postcode_change_user").val()
    };
    if(updateMessage.email == null || updateMessage.email ==""){
        alert("Please enter your email");
    }else if(!regExp.test(updateMessage.email)){
        alert("Email Address must be valid");
    }else if(updateMessage.password == null || updateMessage.password ==""|| updateMessage.password.length < 8){
        alert("Password must be at least 8 characters long");
    }else if(updateMessage.phoneNumber == null || updateMessage.phoneNumber =="" || updateMessage.phoneNumber.length != 10){
        alert("Please enter your phonenumber, should be in 10 numbers");
    }else if(updateMessage.address == null || updateMessage.address ==""){
        alert("Please enter your address");
    }else if(updateMessage.subrub == null || updateMessage.subrub ==""){
        alert("Please enter your suburb");
    }else if(updateMessage.state == null || updateMessage.state ==""){
        alert("Please enter your state");
    }else if(updateMessage.postcode == null || updateMessage.postcode ==""){
        alert("Please enter your postcode");
    }else
    {
    $.ajax({
        type: "POST",
        url: "api/userUpdateMessage",
        dataType:'json',
        data: updateMessage,
        success: function (msg) {
            if (msg == "true") {
                alert("change success")
            }else if (msg == "false") {
                alert("change false");
            }else {
                alert("unknow error");
            }
        },
        error: function (XMLHttpRequest, textStatus, thrownError) {
        }
    });
}
}