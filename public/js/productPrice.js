// function设计理念

// 考虑到每个product有众多的input checkbox需要处理
// 设计两个function
// 1.选不同的规格，刷新价格使用
// selectBox的id设计为 产品_参数

// 例：UpdateFridgeProductPrice(type)
// type为参数类型


// 2.设计inputbox和checkbox的共用刷新价格方法

// UpdateProductPrice(product，type,qty)
// 通过产品名和数量区分
// type用来区分是input还是checkbox

// 从而完成价格刷新


// 相关id设计

// product_type_qty

// 价格的inputbox例外
// product_price_qty price是定死的


// 价格部分
// <p id="product_price" ></p>
// 设置css的display为inline-block

//Fridge部分的价格刷新


//Fridge Magnet
var fridgeArray = ("500","1000","2500","5000");

function UpdateProductPrice(product,type,qty,value) {

    if(type == "inputbox" ) {
        let checkNum = /^[1-9]+[0-9]*]*$/;
        if( checkNum.test(value) ) {
            if($("#"+product+"_checkbox_"+qty).is(":checked") ){
                
                // let price = parseInt( $('#'+product+'_'+'totalPrice').text() );
                // let addPrice = $('#'+product+'_price_'+qty).attr("value") * $('#'+product+"_"+type+"_"+qty).val();
                // let totalPrice = price + addPrice;
                totalPriceCal(product);
                $("#"+product+"_totalPrice").text(totalPrice);
            } else {

            }
        }
        
    } else if(type == 'checkbox') {
        if($("#"+product+"_"+type+"_"+qty).is(":checked") ){
            let price = parseInt( $('#'+product+'_'+'totalPrice').text() );
            let addPrice = $('#'+product+'_price_'+qty).attr("value") * $('#'+product+"_inputbox_"+qty).val();
            let totalPrice = price + addPrice;
            $("#"+product+"_totalPrice").text(totalPrice);
        } else {
            let price = parseInt( $('#'+product+'_'+'totalPrice').text() );
            let addPrice = $('#'+product+'_price_'+qty).attr("value") * $('#'+product+"_inputbox_"+qty).val();
            let totalPrice = price - addPrice;
            $("#"+product+"_totalPrice").text(totalPrice);
        }
    } else {
        alert('error');
    }

}

function totalPriceCal(product) {

    let totalPrice = 0;
    let qtyArray = product + 'Array';
    let test = fridgeArray;
    qtyArray.forEach(function(index){
        if($("#"+product+"_checkbox_"+qty).is(":checked") ) {
            totalPrice = $('#'+product+'_price_'+qtyArray[index]).attr("value") * $('#'+product+"_inputbox_"+qtyArray[index]).val();
        } 
    });
    return totalPrice;
}