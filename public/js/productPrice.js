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


function UpdateProductPrice(product,type,qty,value) {

    if(type == "inputbox" ) {
        let checkNum = /^[1-9]+[0-9]*]*$/;
        if( checkNum.test(value) ) {
            if($("#"+product+"_checkbox_"+qty).is(":checked") ) {
                let totalPrice = productPriceCal(product);
                $("#"+product+"_totalPrice").text(totalPrice);
            } else {

            }
        }
        
    } else if(type == 'checkbox') {
        
        if($("#"+product+"_"+type+"_"+qty).is(":checked") ) {
            let totalPrice = productPriceCal(product);
            $("#"+product+"_totalPrice").text(totalPrice);
        } else {
            let totalPrice = productPriceCal(product);
            $("#"+product+"_totalPrice").text(totalPrice);
        }
    } else {
        alert('error');
    }

}

function productPriceCal(product) {

    let totalPrice = 0;
    let qtyArray = new Array;
    if (product == 'fridge') {
        qtyArray = PRODUCT_QTY.FRIDGE;
    }
   
    if (product == 'bcard') {
        qtyArray = PRODUCT_QTY.BUSSINESSCARD;
    }

    if (product == 'brochure') {
        qtyArray = PRODUCT_QTY.BROCHURE;
    }
    if (product == 'flyer') {
        qtyArray = PRODUCT_QTY.FLYER;
    }
    if (product == 'poster') {
        qtyArray = PRODUCT_QTY.POSTER;
    }
    if (product == 'post') {
        qtyArray = PRODUCT_QTY.POSTERCARD;
    }
    if (product == 'comps') {
        qtyArray = PRODUCT_QTY.COMPLIMENT;
    }
    if (product == 'lw') {
        qtyArray = PRODUCT_QTY.LETTERHEAD;
    }
    if (product == 'banner') {
        qtyArray = PRODUCT_QTY.BANNER;
    }
    if (product == 'signage') {
        qtyArray = PRODUCT_QTY.SIGNAGE;
    }
    let length = qtyArray.length;

    for(let i = 0;i<length;++i){
        if($("#"+product+"_checkbox_"+qtyArray[i]).is(":checked") ) {
            totalPrice = totalPrice + $('#'+product+'_price_'+qtyArray[i]).attr("value") * $('#'+product+"_inputbox_"+qtyArray[i]).val();
            
        } 
    }
    
    totalPrice = totalPrice.toFixed(2);

    return totalPrice;
}

function clearPrice(product) {
    let qtyArray = new Array;
    if (product == 'fridge') {
        qtyArray = PRODUCT_QTY.FRIDGE;
    }
    if (product == 'bcard') {
        qtyArray = PRODUCT_QTY.BUSSINESSCARD;
    }
    if (product == 'brochure') {
        qtyArray = PRODUCT_QTY.BROCHURE;
    }
    if (product == 'flyer') {
        qtyArray = PRODUCT_QTY.FLYER;
    }
    if (product == 'poster') {
        qtyArray = PRODUCT_QTY.POSTER;
    }
    if (product == 'post') {
        qtyArray = PRODUCT_QTY.POSTERCARD;
    }
    if (product == 'comps') {
        qtyArray = PRODUCT_QTY.COMPLIMENT;
    }
    if (product == 'lw') {
        qtyArray = PRODUCT_QTY.LETTERHEAD;
    }
    if (product == 'banner') {
        qtyArray = PRODUCT_QTY.BANNER;
    }
    if (product == 'signage') {
        qtyArray = PRODUCT_QTY.SIGNAGE;
    }
    let length = qtyArray.length;

    for(let i = 0;i<length;++i) {
        $("#"+product+"_checkbox_"+qtyArray[i]).prop("checked",false);
        $('#'+product+"_inputbox_"+qtyArray[i]).val(1);
    }
    $("#"+product+"_totalPrice").text('0.00');
}

/**
 * 
 * product data格式
 * [0]:product name
 * [1]:qty 
 * [2]:kinds
 * [3]:options
 * 
 * @param {string} product 
 */
function addToCart (product) {

    let qtyArray = new Array;
    let option = new Array;
    if (product == 'fridge') {
        qtyArray = PRODUCT_QTY.FRIDGE;
        option = PRODUCT_OPTIONS.FRIDGE;
    }

    if (product == 'bcard') {
        qtyArray = PRODUCT_QTY.BUSSINESSCARD;
        option = PRODUCT_OPTIONS.BUSSINESSCARD;
    }
    if (product == 'brochure') {
        qtyArray = PRODUCT_QTY.BROCHURE;
        option = PRODUCT_OPTIONS.BROCHURE;
    }
    if (product == 'flyer') {
        qtyArray = PRODUCT_QTY.FLYER;
        option = PRODUCT_OPTIONS.FLYER;
    }
    if (product == 'poster') {
        qtyArray = PRODUCT_QTY.POSTER;
        option = PRODUCT_OPTIONS.POSTER;
    }
    if (product == 'post') {
        qtyArray = PRODUCT_QTY.POSTERCARD;
        option = PRODUCT_OPTIONS.POSTERCARD;
    }
    if (product == 'comps') {
        qtyArray = PRODUCT_QTY.COMPLIMENT;
        option = PRODUCT_OPTIONS.COMPLIMENT;
    }
    if (product == 'lw') {
        qtyArray = PRODUCT_QTY.LETTERHEAD;
        option = PRODUCT_OPTIONS.LETTERHEAD;
    }
    if (product == 'banner') {
        qtyArray = PRODUCT_QTY.BANNER;
        option = PRODUCT_OPTIONS.BANNER;
    }
    if (product == 'signage') {
        qtyArray = PRODUCT_QTY.SIGNAGE;
        option = PRODUCT_OPTIONS.SIGNAGE;
    }
    let productMessage = new Array;

    // for(let i = 0;i < option.length ;++i) {
        
    // }
    
    let Num = 0;
    let checked = false;
    for(let i = 0; i < qtyArray.length ; ++i ) {
        
        if($("#"+product+"_checkbox_"+qtyArray[i]).is(":checked") ) {
            productMessage[Num] = ['','','','',''];

            productMessage[Num][0] = product;
            productMessage[Num][1] = $('#'+product+'_price_'+qtyArray[i]).attr("value");
            productMessage[Num][2] = qtyArray[i];
            productMessage[Num][3] = $('#'+product+"_inputbox_"+qtyArray[i]).val();
            // productMessage[i][3] = ;
            for (let j = 0; j < option.length ; ++j ) {
                productMessage[Num][4] =  productMessage[Num][4] + $("#"+product+"_"+option[j]).val() + ";";
            }
            Num++;

            checked = true;
        }
         
    }

    if (checked == true) {
        //判断用户登录状态，如果已登录，则需要存入数据库，cart页面读取由数据库数据进行
        cartTableCheck();
        cartDataInsert(productMessage);
        totalPriceCal();
        cartProcess('myCart');
        alert('Successfully added to cart');
        clearPrice('fridge');
        clearPrice('bcard');
    } else {    
        alert('nothing to add');
    }
}
