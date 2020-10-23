function cartTableCheck() {

    let i = $("#cart_table").find("th").length;

    if (i == 0) {

        $('#').append('<table id="cart_table"</table>');
        let add_table = document.getElementById("registerVMS_table_VMS");
        // Insert a row into the table
        let row = add_table.insertRow(-1);
        // init th element
        let th = new Array('<th style="width:5%"></th>',
                           '<th style="width:5%"></th>',
                           '<th style="width:10%">IP sddress</th>', 
                           '<th style="width:15%">Server name</th>',
                           '<th style="width:6%">Version</th>',
                           '<th style="width:26%">Alarm notification</th>',
                           '<th style="width:7%">Alarm port</th>',
                           '<th style="width:11%"></th>',
                           '<th style="width:15%"></th>'
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
    if($('#registerVMS_checkbox_vms'+i).is(':checked')) {
        // Set delete and save buttons to enabled
        $('.registerVMS_btn_delete1').removeAttr("disabled");
        $('.registerVMS_btn_save').removeAttr("disabled");

        $('.registerVMS_btn_delete1').removeClass("btnDisabled");
        $('.registerVMS_btn_save').removeClass("btnDisabled");

        $(".registerVMS_btn_delete1").addClass("deletebtnEnabled");
        $(".registerVMS_btn_save").addClass("savebtnEnabled");
        
    } else {
        // Set delete and save buttons to disabled
        let tableLength = $("#registerVMS_table_VMS").find("tr").length;
        for (let num = 1 ; num < tableLength ; num++ ) {
            if($("#registerVMS_table_VMS tr:eq("+num+") input[type='checkbox']").is(':checked')){
                break;
            };
            // No checkbox is currently selected
            if(num == tableLength-1) {
                $('.registerVMS_btn_delete1').removeClass("deletebtnEnabled");
                $('.registerVMS_btn_save').removeClass("savebtnEnabled");
                
                $(".registerVMS_btn_delete1").addClass("btnDisabled");
                $(".registerVMS_btn_save").addClass("btnDisabled");
            }
        };
    }
}