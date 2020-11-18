// booklest

function bookletsSendEmail() {

    let finishedBookSize = $("#booklets_size option:selected").val();
    let orientation = $("#booklets_orientation option:selected").val();

    let internalPages = $("#booklets_pages option:selected").val();
    let cover = $("#booklets_cover option:selected").val();
    let includingCover = $("#booklets_includingCover option:selected").val();
    let internalPages2 = $("#booklets_pages2 option:selected").val();
    let cover2 = $("#booklets_cover2 option:selected").val();
    let binding = $("#booklets_binding option:selected").val();
    let laminateCover = $("#booklets_lamineteCover option:selected").val();
    let coverSpecialFinish = $("#booklets_coverSpecialFinish option:selected").val();
    let artworkSuppliedIn = $("#booklets_artworkSuppliedIn option:selected").val();
    let proofRequired = $("#booklets_proofRequired option:selected").val();
    let quality = $("#booklets_quantity option:selected").val();

    let jobDescription = $("#booklets_jobDescription").val();
    let deliveryPostcode = $("#booklets_deliveryPostcode").val();
    let businessName = $("#booklets_businessName").val();
    let name = $("#booklets_name").val();
    let email = $("#booklets_email").val();
    let telephone = $("#booklets_telephone").val();

    let way = $("#booklets_way").val();
    let subscribe = $("#booklets_subscribe").prop("checked");

    
    // upload file
    let types = "file";
    let formData = new FormData();

  
    let file = $("#booklets_file").val();
    
    if (file == '') {

    } else {

        // type check
        let type = $("#booklets_file")[0].files[0].type;
        let typeChange = 0;
        for ( let i = 0 ; i < fileType.length ; ++i ) {
            // 判断一下格式对不对
            if ( type.indexOf(fileType[i]) != -1 ) {
                typeChange = 1;
            } else {
                
            }    
        };
        if ( typeChange != 1) {
            alert("Files in this format are not supported");
            return false;
        }
        // name check
        let fileName = $("#booklets_file")[0].files[0].name;
        let nameCheck = 0;
        for ( let i = 0 ; i < fileSuffix.length ; ++i ) {
            
            if ( fileName.indexOf(fileSuffix[i]) != -1 ) {
                nameCheck = 1;
            } else {
                
            }    
        };
        if ( nameCheck != 1) {
            alert("Files in this format are not supported");
            return false;
        }

        let size = $("#booklets_file")[0].files[0].size;
        if (size > 52428800) {
            alert("The uploaded file cannot exceed 50MB");
            return false;				
        } else {

            formData.append(types,$("#booklets_file")[0].files[0]);
            emailFileUp(formData);

        }
    }
     //get date
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
         url: "../api/booklets",
         // processData: false,
         // contentType: false,
         dataType:'json',
         data:{
             finishedBookSize:finishedBookSize,
             orientation:orientation,
             internalPages:internalPages,
             cover:cover,
             includingCover:includingCover,
             internalPages2:internalPages2,
             cover2:cover2,
             binding:binding,
             laminateCover:laminateCover,
             coverSpecialFinish:coverSpecialFinish,
             artworkSuppliedIn:artworkSuppliedIn,
             proofRequired:proofRequired,
             quality:quality,
             jobDescription:jobDescription,
             deliveryPostcode:deliveryPostcode,
             businessName:businessName,
             name:name,
             email:email,
             telephone:telephone,
             way:way,
             subscribe:subscribe,
             date:currentdate
         },
         success:function () {
             alert("send email success");
         },
         error:function () {
             alert("error");
         }
     });
}

// website design
function websiteSendEmail() {

    let contactName = $("#website_contactName").val();
    let businessName = $("#website_businessName").val();
    let phone = $("#website_phone").val();
    let email = $("#website_email").val();
    //get date
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
        url: "../api/websiteDesign",
        // processData: false,
        // contentType: false,
        dataType:'json',
        data:{
            contactName:contactName,
            businessName:businessName,
            phone:phone,
            email:email,
            date:currentdate
        },
        success:function () {
            alert("send email success");
        },
        error:function () {
            alert("error");
        }
    });
}

function packSendEmail() {
    let businessName = $("#pack_businessName").val();
    let name = $("#pack_name").val();
    let email = $("#pack_email").val();
    let address = $("#pack_address").val();
    let subrub = $("#pack_suburb").val();
    let state = $("#pack_state").val();
    let postcode = $("#pack_postcode").val();
    let phone = $("#pack_phone").val();

    let comment = $("#pack_comment").val();
    let subscribe = $("#pack_subscribe").prop("checked");
     //get date
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
        url: "../api/samplePack",
        dataType:'json',
        data:{
            businessName:businessName,
            name:name,
            email:email,
            address:address,
            subrub:subrub,
            state:state,

            postcode:postcode,
            phone:phone,
            comment:comment,
            subscribe:subscribe,
            date:currentdate
        },
        success:function () {
            alert("send email success");
        },
        error:function () {
            alert("error");
        }
    });
}


function emailFileUp(formData) {
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: "POST",
        url: "../api/uploadFile",
        processData: false,
        contentType: false,
        dataType:'json',
        data:formData,
        success:function () {
            alert("upload file success");
        },
        error:function () {
            alert("upload file error");
        }
    });
}