function sendEmail() {

    let product = $("#contact_product option:selected").text()
    let jobDescription = $("#contact_description").val();
    let postcode = $("#contact_postcode").val();
    let businessName = $("#contact_businessName").val();
    let name = $("#contact_name").val();
    let email = $("#contact_email").val();
    let telephone = $("#contact_tel").val();
    let mode = $("#contact_mode option:selected").text()
    let subscribe = $("#contact_subscribe").prop("checked");
    //get data
    //get data
    let date = new Date();
    let seperator1 = "-";
    let year = date.getFullYear();
    let month = date.getMonth() + 1;
    let strDate = date.getDate();
    if (month >= 1 && month <= 9) {
        month = "0" + month;
    }
    if (strDate >= 0 && strDate <= 9) {
        strDate = "0" + strDate;
    }
    let currentdate = year + seperator1 + month + seperator1 + strDate;

    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: "POST",
        url: "test1014/public/api/sendEmail",
        dataType:'json',
        data:{
            product:product,
            jobDescription:jobDescription,
            postcode:postcode,
            businessName:businessName,
            name:name,
            email:email,
            telephone:telephone,
            mode:mode,
            subscribe:subscribe,
            data:currentdate
        },
        success:function () {
            alert("send email success");
        },
        error:function () {
            alert("error");
        }
    });
}