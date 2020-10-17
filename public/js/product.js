function clickProduct(headerName) {
    reset();
    switch (headerName) {
        //product
        case 0:
            $(".product0").addClass("clickOn");
            $(".product").addClass("clickOn");
            document.getElementById("product_div_id_1").style.display = "block";
            break;
        case 1:
            $(".product1").addClass("clickOn");
            $(".product").addClass("clickOn");
            document.getElementById("product_div_id_2").style.display = "block";
            break;
        case 2:
            $(".product2").addClass("clickOn");
            $(".product").addClass("clickOn");
            document.getElementById("product_div_id_3").style.display = "block";
            break;
        case 3:        
            $(".product3").addClass("clickOn");
            $(".product").addClass("clickOn");
            document.getElementById("product_div_id_4").style.display = "block";
            break;
        case 4:        
            $(".product4").addClass("clickOn");
            $(".product").addClass("clickOn");
            document.getElementById("product_div_id_5").style.display = "block";
            break;
        case 5:        
            $(".product5").addClass("clickOn");
            $(".product").addClass("clickOn");
            document.getElementById("product_div_id_6").style.display = "block";
            break;
        case 6:        
            $(".product6").addClass("clickOn");
            $(".product").addClass("clickOn");
            document.getElementById("product_div_id_7").style.display = "block";
            break;
        case 7:        
            $(".product7").addClass("clickOn");
            $(".product").addClass("clickOn");
            document.getElementById("product_div_id_8").style.display = "block";
            break;
        case 8:
            $(".product8").addClass("clickOn");
            $(".product").addClass("clickOn");
            document.getElementById("product_div_id_9").style.display = "block";
            break;
        case 9:
            $(".product9").addClass("clickOn");
            $(".product").addClass("clickOn");
            document.getElementById("product_div_id_10").style.display = "block";
            break;
        case 10:
            $(".product10").addClass("clickOn");
            $(".product").addClass("clickOn");
            document.getElementById("product_div_id_11").style.display = "block";
            break;
        case 11:        
            $(".product11").addClass("clickOn");
            $(".product").addClass("clickOn");
            document.getElementById("product_div_id_12").style.display = "block";
            break;
        case 12:        
            $(".product12").addClass("clickOn");
            $(".product").addClass("clickOn");
            document.getElementById("product_div_id_13").style.display = "block";
            break;
        case 13:        
            $(".product13").addClass("clickOn");
            $(".product").addClass("clickOn");
            document.getElementById("product_div_id_14").style.display = "block";
            break;
        case 14:        
            $(".product14").addClass("clickOn");
            $(".product").addClass("clickOn");
            document.getElementById("product_div_id_15").style.display = "block";
            break;
 
    } 
    
}




function addCard(type) {
    if (type == 1) {
        addMessage1();
    }else if (type == 2) {
        addMessage2();
    }else if (type == 3) {
        addMessage3();
    }else if (type == 4) {
        addMessage4();
    }else if (type == 5) {
        addMessage5();
    }
}
function addMessage1() {

    if ($("#product1_tr input").val() === undefined) {
        $("#cart_table").append('<tr id="product1_tr"><td class="product-thumbnail"><img src="" alt=""></td><td class="product-name"><a href="#">CD Print1</a></td><td class="product-price"><span class="amounts">$300.00</span></td><td class="product-quantity"><input type="number" value="1" disabled="disabled"></td><td class="product-subtotal">$300.00</td><td class="product-remove"><a href="#"><i class="fa fa-times" onclick="delete1()"></i></a></td></tr>');
        let price = $(".amount").text().split("$");
        let count = price[1].split(".");
        let counts = count[0];
        counts = parseInt(counts) + 300;
        $(".amount").text("$"+counts+".00");
    } else {
        let num = parseInt( $("#product1_tr input").val() ) +1;
        $("#product1_tr input").val(num);
        let price = $(".amount").text().split("$");
        let count = price[1].split(".");
        let counts = count[0];
        counts = parseInt(counts) + 300;
        $(".amount").text("$"+counts+".00");
    }
    
}
function addMessage2() {
    if ($("#product2_tr input").val() === undefined) {
        $("#cart_table").append('<tr id="product2_tr"><td class="product-thumbnail"><img src="" alt=""></td><td class="product-name"><a href="#">CD Print2</a></td><td class="product-price"><span class="amounts">$300.00</span></td><td class="product-quantity"><input type="number" value="1" disabled="disabled"></td><td class="product-subtotal">$300.00</td><td class="product-remove"><a href="#"><i class="fa fa-times" onclick="delete2()"></i></a></td></tr>');
        let price = $(".amount").text().split("$");
        let count = price[1].split(".");
        let counts = count[0];
        counts = parseInt(counts) + 300;
        $(".amount").text("$"+counts+".00");
    } else {
        let num = parseInt( $("#product2_tr input").val() ) +1;
        $("#product2_tr input").val(num);
        let price = $(".amount").text().split("$");
        let count = price[1].split(".");
        let counts = count[0];
        counts = parseInt(counts) + 300;
        $(".amount").text("$"+counts+".00");
    }
}
function addMessage3() {
    if ($("#product3_tr input").val() === undefined) {
        $("#cart_table").append('<tr id="product3_tr"><td class="product-thumbnail"><img src="" alt=""></td><td class="product-name"><a href="#">CD Print3</a></td><td class="product-price"><span class="amounts">$300.00</span></td><td class="product-quantity"><input type="number" value="1" disabled="disabled"></td><td class="product-subtotal">$300.00</td><td class="product-remove"><a href="#"><i class="fa fa-times" onclick="delete3()"></i></a></td></tr>');
        let price = $(".amount").text().split("$");
        let count = price[1].split(".");
        let counts = count[0];
        counts = parseInt(counts) + 300;
        $(".amount").text("$"+counts+".00");
    } else {
        let num = parseInt( $("#product3_tr input").val() ) +1;
        $("#product3_tr input").val(num);
        let price = $(".amount").text().split("$");
        let count = price[1].split(".");
        let counts = count[0];
        counts = parseInt(counts) + 300;
        $(".amount").text("$"+counts+".00");
    }
}
function addMessage4() {
    if ($("#product4_tr input").val() === undefined) {
        $("#cart_table").append('<tr id="product4_tr"><td class="product-thumbnail"><img src="" alt=""></td><td class="product-name"><a href="#">CD Print4</a></td><td class="product-price"><span class="amounts">$300.00</span></td><td class="product-quantity"><input type="number" value="1" disabled="disabled"></td><td class="product-subtotal">$300.00</td><td class="product-remove"><a href="#"><i class="fa fa-times" onclick="delete4()"></i></a></td></tr>');
        let price = $(".amount").text().split("$");
        let count = price[1].split(".");
        let counts = count[0];
        counts = parseInt(counts) + 300;
        $(".amount").text("$"+counts+".00");
    } else {
        let num = parseInt( $("#product4_tr input").val() ) +1;
        $("#product4_tr input").val(num);
        let price = $(".amount").text().split("$");
        let count = price[1].split(".");
        let counts = count[0];
        counts = parseInt(counts) + 300;
        $(".amount").text("$"+counts+".00");
    }
}
function addMessage5() {
    if ($("#product5_tr input").val() === undefined) {
        $("#cart_table").append('<tr id="product5_tr"><td class="product-thumbnail"><img src="" alt=""></td><td class="product-name"><a href="#">CD Print5</a></td><td class="product-price"><span class="amounts">$300.00</span></td><td class="product-quantity"><input type="number" value="1" disabled="disabled"></td><td class="product-subtotal">$300.00</td><td class="product-remove"><a href="#"><i class="fa fa-times" onclick="delete5()"></i></a></td></tr>');
        let price = $(".amount").text().split("$");
        let count = price[1].split(".");
        let counts = count[0];
        counts = parseInt(counts) + 300;
        $(".amount").text("$"+counts+".00");
    } else {
        let num = parseInt( $("#product5_tr input").val() ) +1;
        $("#product5_tr input").val(num);
        let price = $(".amount").text().split("$");
        let count = price[1].split(".");
        let counts = count[0];
        counts = parseInt(counts) + 300;
        $(".amount").text("$"+counts+".00");
    }
}