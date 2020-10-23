


//检查是否cart里是否已经有了产品
function cartTableCheck() {

    let i = $("#cart_table").find("th").length;

    if (i == 0) {

        $('#cart_haveProduct').append('<table id="cart_table"</table>');
        let add_table = document.getElementById("cart_table");
        // Insert a row into the table
        let row = add_table.insertRow(-1);
        // init th element
        let th = new Array('<th class="product-name">Product</th>',
                           '<th class="product-price">Price</th>',
                           '<th class="product-quantity">Quantity</th>', 
                           '<th class="product-description">Description</th>',
                           '<th class="product-subtotal">Total</th>',
                           '<th class="product-remove">Remove</th>',
        );
        // Insert table's header
        th.forEach(th => {
            row.innerHTML = row.innerHTML+th;
        });

    } else {

    }

}



//My cart -> Delivery -> Confirm -> Upload ->   Payment

function cartProcess() {
    let turn = 4;
    for (let i = 0; i >= turn; ++i) {
        
    }
}




// cartTable show
// cart里页面空切换
// dataDelete
// 
function cartDataInsert(productMessage) {

    let add_table = document.getElementById("registerVMS_table_VMS");
    let i  = $("#registerVMS_table_VMS").find("tr").length;
    if (i <= 12 && i > 0) {
        // Traverse the input and insert the vmsServer information one by one
        data.forEach(data =>{
            let row = add_table.insertRow(-1);
            // server id
            cell = row.insertCell(-1);
            cell.innerHTML = "<p>"+i+"</p>";
            // server's checkbox
            cell = row.insertCell(-1);
            cell.innerHTML = "<input type='checkBox' class='registerVMS_checkbox_vms' id='registerVMS_checkbox_vms"+i+"' \
                              onclick='registerVMS_checkBoxClick("+i+")'>";
            // ip
            cell = row.insertCell(-1);
            cell.innerHTML = data[0];
            // serverName
            cell = row.insertCell(-1);
            cell.innerHTML = data[1];
            // Version
            cell = row.insertCell(-1);
            cell.innerHTML = data[2];
            // alarm notification
            cell = row.insertCell(-1);
            cell.innerHTML = "<input type='checkBox' id='registerVMS_checkbox_system"+i+"'>System error<br>";
            // alarm port
            cell = row.insertCell(-1);
            cell.innerHTML = "<input type='text' class='registerVMS_input_port' \
                               id='registerVMS_input_port" +i+ "' value='"+data[3]+"' maxlength='5'>";
            $('#registerVMS_input_port' + i).on(getCheckEventHandler('registerVMS_input_port' + i,
            INPUT_CHECK_REG.NUMBER));
            
            // test button
            cell = row.insertCell(-1);
            cell.innerHTML = "<div class='registerVMS_table_test' id='registerVMS_table_test"+i+"' \
                               onclick='vmsServerTest("+i+")'><p>Test</p></div>";
            // test result
            cell = row.insertCell(-1);
            cell.innerHTML = "<p id='registerVMS_table_testResult"+i+"'></p>";
            
            ++i;
        });
    } else {
        alert("error");
    }
} 




function productDelete() {
    $("#product1_tr").remove();
    deletePrice();
}

function totalPriceCal() {
    
}

function registerVMS_checkBoxClick(i) {

    $('.checkout_step').attr('disabled','disabled')
    // Set delete and save buttons to enabled
    $('.checkout_step').removeAttr("disabled");

  
}