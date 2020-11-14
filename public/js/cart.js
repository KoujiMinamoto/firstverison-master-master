


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

    } else if (process == "confirm") {
        $('.checkout_step').eq(1).removeClass("cartOn");
        $('.checkout_step').eq(2).addClass("cartOn");
        $('.checkout_step').eq(3).removeClass("cartOn");

        $("#cart_delivery").css('display','none');
        $("#cart_confirm").css('display','block');
        $("#cart_upload").css('display','none');

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
    // 显示next
    $(".cart_next").show();
} 




function cartDelete(cartNo) {
    
    // let cartNo = $(this).parents("tr").index();
    $("#cart_table").find("tr:eq("+cartNo+")").remove();
    cartTableCheck();
    totalPriceCal();
    // cart.remove();
    
}

function totalPriceCal() {
    
    let length = $("#cart_table").find('tr').length;
    let cartTotal = 0;
    for (let i = 1; i < length; ++i ) {
        let price = $("#cart_table tr:eq("+i+") td:eq(1)").text();
        price = price.replace('$','');
        cartTotal = cartTotal + price * $("#cart_table tr:eq("+i+") td:eq(2) :input").val();
    }
    cartTotal = cartTotal.toFixed(2);
    $("#cart_price").text("$"+cartTotal);
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
