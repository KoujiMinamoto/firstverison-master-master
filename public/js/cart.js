//检查是否cart里是否已经有了产品
function cartTableCheck() {

    let i = $("#cart_table").find("th").length;
    let n = $("#cart_table").find("td").length;
    if (i == 0) {

        $('#cart_haveProduct').append('<table id="cart_table"</table>');
        let add_table = document.getElementById("cart_table");
        // Insert a row into the table
        let row = add_table.insertRow(-1);
        // init th element
        let th = new Array('<th class="product-name">Product</th>',
                           '<th class="product-price">Price</th>',
                           '<th class="product-quantity">Kinds</th>', 
                           '<th class="product-description">Description</th>',
                           '<th class="product-subtotal">Quantity</th>',
                           '<th class="product-remove">Remove</th>',
        );
        // Insert table's header
        th.forEach(th => {
            row.innerHTML = row.innerHTML+th;
        });
        // confirm
        $('#cart_confirmOrder').append('<table id="confirm_table"</table>');
        let confirm_table = document.getElementById("confirm_table");
        row = confirm_table.insertRow(-1);
        // init th element
        th = new Array('<th class="product-name">Product</th>',
                           '<th class="product-price">Price</th>',
                           '<th class="product-quantity">Kinds</th>', 
                           '<th class="product-description">Description</th>',
                           '<th class="product-subtotal">Quantity</th>'
        );
        // Insert table's header
        th.forEach(th => {
            row.innerHTML = row.innerHTML+th;
        });

        $("#cart_onProduct").hide();
        $("#cart_haveProduct").show();
        $('.cart_price').show();
        $('.checkout_step').eq(0).addClass("cartOn");
        $(".cart_next").hide();
    } else {
        if(n == 0 ) {
            $("#cart_table").remove();
            $("#cart_onProduct").show();
            $("#cart_haveProduct").hide();
            $(".cart_price").hide();
            $(".cart_next").hide();
        }
    }
}



//My cart -> Delivery -> Confirm -> Upload ->   Payment

function cartProcess(process) {
    $('.checkout_step').attr('disabled','disabled');
    if (process == "myCart") {
        
        $("#cart_myCart").css('display','block');
        $("#cart_delivery").css('display','none');
        $('.checkout_step').eq(0).addClass("cartOn");
        $('.checkout_step').eq(1).removeClass("cartOn");

    } else if (process == "delivery") {
        $('.checkout_step').eq(0).removeClass("cartOn");
        $('.checkout_step').eq(1).addClass("cartOn");
        $('.checkout_step').eq(2).removeClass("cartOn");

        $("#cart_myCart").css('display','none');
        $("#cart_delivery").css('display','block');
        $("#cart_confirm").css('display','none');

        //  产品table



    } else if (process == "confirm") {
        let addressdetail = {
            "fullName":$("#information_name").val(),
            "email":$("#information_email").val(),
            'phoneNumber':$("#information_phone").val(),
            'address':$("#information_address").val(),
            'subrub':$("#information_subrub").val(),
            'state':$("#information_state").val(),
            'postcode':$("#information_zip").val(),
        };
        if(addressdetail.fullName == null || addressdetail.fullName ==""){
            document.getElementById('fullnameck').innerHTML=' cannot be empty';
        }else if(addressdetail.email == null || addressdetail.email ==""){
            document.getElementById('emailck').innerHTML=' cannot be empty';
        }else if(addressdetail.phoneNumber == null || addressdetail.phoneNumber ==""){
            document.getElementById('phoneck').innerHTML=' cannot be empty';
        }else if(addressdetail.address == null || addressdetail.address ==""){
            document.getElementById('addck').innerHTML=' cannot be empty';
        }else if(addressdetail.subrub == null || addressdetail.subrub ==""){
            document.getElementById('subck').innerHTML=' cannot be empty';
        }else if(addressdetail.state == null || addressdetail.state ==""){
            document.getElementById('stateck').innerHTML=' cannot be empty';
        }else if(addressdetail.postcode == null || addressdetail.postcode ==""){
            document.getElementById('zipck').innerHTML=' cannot be empty';
        }else{
            $('.checkout_step').eq(1).removeClass("cartOn");
            $('.checkout_step').eq(2).addClass("cartOn");
            $('.checkout_step').eq(3).removeClass("cartOn");

            $("#cart_delivery").css('display','none');
            $("#cart_confirm").css('display','block');
            $("#cart_upload").css('display','none');
        }

    } else if (process == "upload") {
        $('.checkout_step').eq(2).removeClass("cartOn");
        $('.checkout_step').eq(3).addClass("cartOn");
        $('.checkout_step').eq(4).removeClass("cartOn");

        $("#cart_confirm").css('display','none');
        $("#cart_upload").css('display','block');
        $("#cart_payment").css('display','none');

    } else if (process == "payment") {
        $('.checkout_step').eq(3).removeClass("cartOn");
        $('.checkout_step').eq(4).addClass("cartOn");

        $("#cart_upload").css('display','none');
        $("#cart_payment").css('display','block');

    }
}




// cartTable show
// cart里页面空切换
// dataDelete
// 
function cartDataInsert(productMessage) {

    let add_table = document.getElementById("cart_table");
    let i  = $("#cart_table").find("tr").length;
    if ( i >= 0) {
        // Traverse the input and insert the vmsServer information one by one
        productMessage.forEach(productMessage =>{
            let row = add_table.insertRow(-1);
            if (productMessage[0] == 'fridge') {
                productMessage[0] = 'Fridge Magnet'
            } else if(productMessage[0] == 'brochure') {
                productMessage[0] = 'Brochure';
            } else if(productMessage[0] == 'bcard') {
                productMessage[0] = 'Business Card';
            } else if(productMessage[0] == 'signage') {
                productMessage[0] = 'Signage';
            } else if(productMessage[0] == 'banner') {
                productMessage[0] = 'Banner';
            } else if(productMessage[0] == 'flyer') {
                productMessage[0] = 'Flyers';
            } else if(productMessage[0] == 'lw') {
                productMessage[0] = 'Letterhead';
            } else if(productMessage[0] == 'post') {
                productMessage[0] = 'Postcard';
            } else if(productMessage[0] == 'poster') {
                productMessage[0] = 'Poster';
            } else if(productMessage[0] == 'comps') {
                productMessage[0] = 'With Compliments';
            } 

            // product-name
            cell = row.insertCell(-1);
            cell.innerHTML = "<td class='product-name'><p>"+productMessage[0]+"</p></td>";
            // product-price
            cell = row.insertCell(-1);
            cell.innerHTML = "<td class='product-price'><span class='amounts'><p display='inline-block'>$"+productMessage[1]+"</p></span></td>";
            // product-quantity
            cell = row.insertCell(-1);
            cell.innerHTML = "<td class='product-quantity'><input type='text' disabled='disabled' value ='"+productMessage[3]+"'></td>";
            // product-description
            cell = row.insertCell(-1);
            cell.innerHTML = "<td class='product-description'>"+productMessage[4]+"</td>";
            // product-subtotal
            cell = row.insertCell(-1);
            cell.innerHTML = "<td class='product-description'>"+productMessage[2]+"</td>";
            // product-remove
            cell = row.insertCell(-1);
            cell.innerHTML = "<td class='product-remove'><a href='javascript:'><i class='fa fa-times' onclick='cartDelete($(this).parents().parents().parents().index())'> </i></a></td>";

            ++i;
        });
    } else {
        alert("error");
    }
    // confirm

    let confirm_table = document.getElementById("confirm_table");
    let n  = $("#cart_table").find("tr").length;
    if ( n >= 0) {
        // Traverse the input and insert the vmsServer information one by one
        productMessage.forEach(productMessage =>{
            let row = confirm_table.insertRow(-1);
            if (productMessage[0] == 'fridge') {
                productMessage[0] = 'Fridge Magnet'
            } else if(productMessage[0] == 'brochure') {
                productMessage[0] = 'Brochure';
            } else if(productMessage[0] == 'bcard') {
                productMessage[0] = 'Business Card';
            } else if(productMessage[0] == 'signage') {
                productMessage[0] = 'Docket Books';
            } else if(productMessage[0] == 'banner') {
                productMessage[0] = 'Express Printing';
            } else if(productMessage[0] == 'flyer') {
                productMessage[0] = 'Flyers';
            } else if(productMessage[0] == 'lw') {
                productMessage[0] = 'Letterhead';
            } else if(productMessage[0] == 'post') {
                productMessage[0] = 'Postcard';
            } else if(productMessage[0] == 'poster') {
                productMessage[0] = 'Poster';
            } else if(productMessage[0] == 'comps') {
                productMessage[0] = 'With Compliments';
            } 

            // product-name
            cell = row.insertCell(-1);
            cell.innerHTML = "<td class='product-name'><p>"+productMessage[0]+"</p></td>";
            // product-price
            cell = row.insertCell(-1);
            cell.innerHTML = "<td class='product-price'><span class='amounts'><p display='inline-block'>$"+productMessage[1]+"</p></span></td>";
            // product-quantity
            cell = row.insertCell(-1);
            cell.innerHTML = "<td class='product-quantity'><input type='text' disabled='disabled' value ='"+productMessage[3]+"'></td>";
            // product-description
            cell = row.insertCell(-1);
            cell.innerHTML = "<td class='product-description'>"+productMessage[4]+"</td>";
            // product-subtotal
            cell = row.insertCell(-1);
            cell.innerHTML = "<td class='product-description'>"+productMessage[2]+"</td>";
        
            ++n;
        });
    } else {
        alert("error");
    }


    // 显示next
    $(".cart_next").show();
} 




function cartDelete(cartNo) {
    
    // let cartNo = $(this).parents("tr").index();
    $("#cart_table").find("tr:eq("+cartNo+")").remove();
    $("#confirm_table").find("tr:eq("+cartNo+")").remove();
    cartTableCheck();
    totalPriceCal();
    // $("#confirm_price").text( $("#cart_price").text() );
}

function totalPriceCal() {
    // cart
    let length = $("#cart_table").find('tr').length;
    let cartTotal = 0;
    for (let i = 1; i < length; ++i ) {
        let price = $("#cart_table tr:eq("+i+") td:eq(1)").text();
        price = price.replace('$','');
        cartTotal = cartTotal + price * $("#cart_table tr:eq("+i+") td:eq(2) :input").val();
    }
    cartTotal = cartTotal.toFixed(2);
    $("#cart_price").text("$"+cartTotal);
    $("#confirm_price").text( $("#cart_price").text() );
    // confirm
}

function registerVMS_checkBoxClick(i) {

    $('.checkout_step').attr('disabled','disabled')
    // Set delete and save buttons to enabled
    $('.checkout_step').removeAttr("disabled");

}

// cart页面总价计算
function cartPriceCal() {

    $('#cart_price');
}
//展开新地址输入
function cartnewaddress(){
    $('.address_2_btn').addClass("active");
    $('.address_1').removeClass("active");
    document.getElementById("address_2_in_id").style.display = "block";
}
function cartaddress(){
    $('.address_1').addClass("active");
    $('.address_2_btn').removeClass("active");
    document.getElementById("address_2_in_id").style.display = "none";
}

//animate


// update file
function cartUpdateFile() {



}
// 支付
function ewayAjax(e) {
    // call eWAY to process the request 
    eWAY.process(
      document.getElementById("payment_form"), 
      { 
        autoRedirect: false, 
        onComplete: function (data) { 
          // this is a callback to hook into when the requests completes 
          alert('The JSONP request has completed.'); 
          if (data.Is3DSecure) { 
            //支付成功
            window.location.replace(data.RedirectUrl); 
          } 
        }, 
        onError: function (e) { 
          // this is a callback you can hook into when an error occurs 
          alert('There was an error processing the request'); 
        }, 
        onTimeout: function (e) { 
          // this is a callback you can hook into when the request times out
          alert('The request has timed out.'); 
        } 
      }
    );
    // Stop the form from submitting
    e.preventDefault();
  }

// 支付成功后，生成订单号，发送邮件
function cartSendEamil() {

    // 
    let username = $("#information_name").text()
    let email = $("#information_email").val();
    let phone = $("#information_phone").val();
    let address = $("#information_address").val();
    let subrub = $("#information_subrub").val();
    let state = $("#information_state").val();

    // get date
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
        url: "api/contactUs",
        dataType:'json',
        data:{
            username:username,
            email:email,
            phone:phone,
            address:address,
            subrub:subrub,
            state:state,
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






























//card verify



