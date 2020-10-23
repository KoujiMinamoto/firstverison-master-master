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
        case 15:
            $(".product15").addClass("clickOn");
            $(".product").addClass("clickOn");
            document.getElementById("product_div_id_16").style.display = "block";
            break;
    }

}


//Brochure-style
function UpdateProductPriceBrochure(type) {

    if(type == "size") {
        if ( $("#brochure_type option:selected").val() == "DL 99 x 210" ){

        } else if (  $("#brochure_type option:selected").val() == "A5 148 x 210" ) {

        } else if ( $("#brochure_type option:selected").val() == "A4 210 x 297" )  {

        }

    }else if (type == "page") {
        if ( $("#brochure_page option:selected").val() == "4 PAGES" ){

        } else if (  $("#brochure_page option:selected").val() == "6 PAGES" ) {

        }

    }else if (type == "stock") {
        if ( $("#brochure_stock option:selected").val() == "150GSM GLOSS OR SILK" ){

        } else if (  $("#brochure_stock option:selected").val() == "170GSM GLOSS OR SILK" ) {

        } else if (  $("#brochure_stock option:selected").val() == "250GSM GLOSS OR SILK" ) {

        } else if (  $("#brochure_stock option:selected").val() == "350GSM GLOSS OR SILK" ) {

        }
    }else if (type == "colour") {
        //FULL COLOUR

    }

}

//BusinessCard
function UpdateBCPrice(type) {

    if(type == "side") {
        if ( $("#bc_side option:selected").val() == "PRINTED 2 SIDES" ){

        } else if (  $("#bc_side option:selected").val() == "PRINTED 1 SIDE" ) {

        }

    }else if (type == "laminated") {
        if ( $("#bc_laminated option:selected").val() == "MATT LAMINATED 2 SIDES" ){

        } else if (  $("#bc_laminated option:selected").val() == "UNLAMINATED" ) {

        }

    }else if (type == "size") {
        if ( $("#bc_size option:selected").val() == "150GSM GLOSS OR SILK" ){

        } else if (  $("#bc_size option:selected").val() == "90 x 55mm" ) {

        } else if (  $("#bc_size option:selected").val() == "89 x 54mm" ) {

        } else if (  $("#bc_size option:selected").val() == "90 x 50mm" ) {

        } else if (  $("#bc_size option:selected").val() == "90 x 45mm" ) {

        }
    }
}

//Deskpad & Notepad
function UpdateProductPriceNotePadDeskPadPrinting(type) {

    if(type == "size") {

        if ( $("#dn_size option:selected").val() == "DL 99 x 210" ){

        } else if (  $("#dn_size option:selected").val() == "A6 105 x 148" ) {

        } else if ( $("#dn_size option:selected").val() == "A5 148 x 210" )  {

        } else if (  $("#dn_size option:selected").val() == "A4 210 x 297" ) {

        } else if ( $("#dn_size option:selected").val() == "A3 297 x 420" )  {

        } else if (  $("#dn_size option:selected").val() == "A2 594 x 420" ) {

        }

    }else if (type == "page") {

        if ( $("#brochure_page option:selected").val() == "25 PAGES" ){

        } else if (  $("#brochure_page option:selected").val() == "50 PAGES" ) {

        }

    }else if (type == "stock") {
        //100GSM BOND
    }else if (type == "colour") {
        //FULL COLOUR
        if ( $("#brochure_colour option:selected").val() == "4 COLOUR 1 SIDE" ){

        } else if (  $("#brochure_colour option:selected").val() == "4 COLOUR 2 SIDES" ) {

        }
    }

}

//Docket Book
function UpdateDockProductPrice(type) {
    if(type == "size") {
        if ( $("#docket_size option:selected").val() == "A4" ){

        } else if (  $("#docket_size option:selected").val() == "A5" ) {

        }
    }else if (type == "copies") {
        if ( $("#docket_copies option:selected").val() == "DUPLICATE" ){

        } else if (  $("#docket_copies option:selected").val() == "TRIPLICATE" ) {

        }

    }else if (type == "carbonless") {
        if ( $("#docket_carbonless option:selected").val() == "Sets of 50" ){

        } else if (  $("#docket_carbonless option:selected").val() == "Sets of 100" ) {

        }
    }else if (type == "colour") {
        //1 COLOUR

    }else if (type == "side") {
        if ( $("#docket_side option:selected").val() == "1 SIDE" ){

        } else if (  $("#docket_side option:selected").val() == "CONDITIONS ON BACK" ) {

        }

    }
}

//Envelope
function UpdateEnvProductPrice(type) {
    if(type == "size") {
        if ( $("#env_type option:selected").val() == "DL PLAIN 110 x 220mm" ){

        } else if (  $("#env_type option:selected").val() == "DL WINDOW 110 x 220mm" ) {

        } else if (  $("#env_type option:selected").val() == "DLX PLAIN 120 x 235mm" ) {

        } else if (  $("#env_type option:selected").val() == "DLX WINDOW 120 x 235mm" ) {

        } else if (  $("#env_type option:selected").val() == "C5 PLAIN 162 x 229mm" ) {

        } else if (  $("#env_type option:selected").val() == "C5 WINDOW 162 x 229mm" ) {

        } else if (  $("#env_type option:selected").val() == "C4 PLAIN 229 x 324mm" ) {

        } else if (  $("#env_type option:selected").val() == "C4 WINDOW 229 x 324mm" ) {

        }
    }else if (type == "colour") {
        if ( $("#env_colour option:selected").val() == "FULL COLOUR" ){

        } else if (  $("#env_colour option:selected").val() == "2 PMS COLOURS" ) {

        } else if (  $("#env_colour option:selected").val() == "1 PMS COLOUR" ) {

        }

    }
}
//Express Printing
function UpdateExpProductPrice() {

    if(type == "size") {
        if ( $("#express_size option:selected").val() == "BUSINESS CARD 90 x 55" ){

        } else if (  $("#express_size option:selected").val() == "DL 99 x 210" ) {

        } else if ( $("#express_size option:selected").val() == "A6 105 x 148" )  {

        } else if (  $("#express_size option:selected").val() == "A5 148 x 210" ) {

        } else if ( $("#express_size option:selected").val() == "A4 210 x 297" )  {

        } else if ( $("#express_size option:selected").val() == "A3 297 x 420" )  {

        }

    }else if (type == "stock") {
        //400GSM GLOSS

    }else if (type == "sides") {
        if ( $("#express_sides option:selected").val() == "FULL COLOUR FRONT ONLY" ){

        } else if (  $("#express_sides option:selected").val() == "FULL COLOUR FRONT AND BACK" ) {

        }

    }else if (type == "finish") {
        //FULL COLOUR
        //express_finish
        if ( $("#express_finish option:selected").val() == "NO LAMINATION" ){

        } else if (  $("#express_finish option:selected").val() == "MATT OR GLOSS LAMINATED 1 SIDE" ) {

        } else if (  $("#express_finish option:selected").val() == "MATT OR GLOSS LAMINATED 2 SIDES" ) {

        }
    }

}
//Flyer
function UpdateFlyerProductPrice() {

    if(type == "size") {
        if ( $("#flyer_size option:selected").val() == "A4 210 x 297" ){

        } else if (  $("#flyer_size option:selected").val() == "A5 148 x 210" ) {

        } else if ( $("#flyer_size option:selected").val() == "A6 105 x 148" )  {

        } else if (  $("#flyer_size option:selected").val() == "DL 99 x 210" ) {

        }

    }else if (type == "stock") {
        if ( $("#flyer_stock option:selected").val() == "150GSM GLOSS OR SILK" ){

        } else if (  $("#flyer_stock option:selected").val() == "170GSM GLOSS OR SILK" ) {

        } else if (  $("#flyer_stock option:selected").val() == "250GSM GLOSS OR SILK" ) {

        }

    }else if (type == "colour") {
        //FULL COLOUR
        //express_finish
        if ( $("#flyer_colour option:selected").val() == "FULL COLOUR FRONT ONLY" ){

        } else if (  $("#flyer_colour option:selected").val() == "FULL COLOUR BOTH SIDES" ) {

        }
    }

}
//Fridge Magnet
function UpdateFridgeProductPrice() {
    if(type == "size") {
        if ( $("#fridge_size option:selected").val() == "50x50mm Square cut" ){

        } else if (  $("#fridge_size option:selected").val() == "50x50mm Rounded corners cut" ) {

        } else if ( $("#fridge_size option:selected").val() == "70x50mm Square cut" )  {

        } else if (  $("#fridge_size option:selected").val() == "70x50mm Rounded corners cut" ) {

        } else if ( $("#fridge_size option:selected").val() == "90x50mm Square cut" )  {

        } else if (  $("#fridge_size option:selected").val() == "90x50mm Rounded corners cut" ) {

        }

    }else if (type == "sides") {
       //fridge_sides
       //1 SIDE

    }
}
//Letterhead Printing
function UpdateLWProductPrice() {
    if(type == "size") {
        //lw_size
        //A4 210 x 297

    }else if (type == "stock") {
        if ( $("#lw_stock option:selected").val() == "100GSM LASER BOND" ){

        } else if (  $("#lw_stock option:selected").val() == "100GSM RECYCLED 100%" ) {

        }

    }else if (type == "colour") {
        //FULL COLOUR
        //express_finish
        if ( $("#lw_colour option:selected").val() == "1 PMS COLOUR" ){

        } else if (  $("#lw_colour option:selected").val() == "2 PMS COLOURS" ) {

        } else if (  $("#lw_colour option:selected").val() == "3 PMS COLOURS" ) {

        } else if (  $("#lw_colour option:selected").val() == "4 COLOUR PROCESS" ) {

        }
    } else if (type == "sides") {
        //FULL COLOUR
        //express_finish
        if ( $("#lw_sides option:selected").val() == "1 SIDE" ){

        } else if (  $("#lw_sides option:selected").val() == "2 SIDES" ) {

        }

    }
}
//Postcard Printing
function UpdatePostProductPrice() {
    if(type == "size") {
        if ( $("#post_size option:selected").val() == "A6 105 x 148" ){

        } else if (  $("#post_size option:selected").val() == "DL 99 x 210" ) {

        } else if (  $("#post_size option:selected").val() == "A5 148 x 210" ) {

        }

    }else if (type == "colour") {
        if ( $("#post_colour option:selected").val() == "FULL COLOUR 1 SIDE" ){

        } else if (  $("#post_colour option:selected").val() == "FULL COLOUR 2 SIDES" ) {

        }

    }else if (type == "finish") {
        //FULL COLOUR
        //express_finish
        if ( $("#post_finish option:selected").val() == "NOT LAMINATED" ){

        } else if (  $("#post_finish option:selected").val() == "MATT OR GLOSS LAMINATED 1 SIDE" ) {

        }
    }
}
//Posters Printing
function UpdatePosterProductPrice() {
    if(type == "size") {
        if ( $("#poster_size option:selected").val() == "A3" ) {

        } else if (  $("#poster_size option:selected").val() == "A2" ) {

        }

    }else if (type == "stock") {
        if ( $("#poster_stock option:selected").val() == "150GSM GLOSS" ){

        } else if (  $("#poster_stock option:selected").val() == "170GSM GLOSS" ) {

        } else if (  $("#poster_stock option:selected").val() == "200GSM GLOSS" ) {

        }

    }else if (type == "colour") {
        //FULL COLOUR
        //poster_colour

    }else if (type == "sides") {
        //FULL COLOUR 1 SIDE
        //poster_sides

    }
}


//Presentation Folder Printing
function UpdateFolderProductPricePres() {
    if(type == "stock") {
        if ( $("#folder_stock option:selected").val() == "310GSM ARTBOARD" ) {

        } else if (  $("#folder_stock option:selected").val() == "350GSM ARTBOARD" ) {

        } else if (  $("#folder_stock option:selected").val() == "400GSM ARTBOARD" ) {

        }

    }else if (type == "sides") {
        if ( $("#folder_sides option:selected").val() == "FULL COLOUR 1 SIDE" ){

        } else if (  $("#folder_sides option:selected").val() == "FULL COLOUR 2 SIDES" ) {

        }

    }else if (type == "finish") {
        if ( $("#folder_finish option:selected").val() == "FREE GLOSS OR MATT VARNISH" ) {

        } else if (  $("#folder_finish option:selected").val() == "GLOSS LAMINATED 1 SIDE" ) {

        } else if (  $("#folder_finish option:selected").val() == "MATT LAMINATED 1 SIDE" ) {

        }

    }
}
//With Compliments
function UpdateCompsProductPrice() {
    if(type == "size") {
        //comps_size
        //DL 210 x 99

    }else if (type == "stock") {
        if ( $("#comps_stock option:selected").val() == "100GSM LASER BOND" ){

        } else if (  $("#comps_stock option:selected").val() == "105GSM LASER 100% RECYCLED" ) {

        }

    }else if (type == "colour") {
        //4 COLOUR PROCESS
        //comps_colour

    }else if (type == "sides") {
        //1 SIDE
        //comps_sides

    }
}







//AddBroucherProduct(this.value, "usersetqty_50-productid_57")
//AddBCProduct(this.value, "usersetqty_250-productid_58")
/**
 *
 * @param {*} product
 * @param {*} qty
 * @param {*} price
 */
function AddBCProduct(value, price) {

}



function addToCard(type) {
    if (type =="brochure") {

    } else if(type =="bc") {

    } else if(type =="dn") {

    } else if(type =="docket") {

    } else if(type =="envelope") {

    } else if(type =="express") {

    } else if(type =="flyer") {

    } else if(type =="fridgeMagnet") {

    } else if(type =="letterhead") {

    } else if(type =="postcard") {

    } else if(type =="poster") {

    } else if(type =="presentation") {

    } else if(type =="compliments") {

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
