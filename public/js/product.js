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
function UpdateExpProductPrice(type) {

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
function UpdateFlyerProductPrice(type) {

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
function UpdateFridgeProductPrice(type) {
    if(type == "size") {
        let length = fridgePrice.Squ55.length;
        let price = new Array;
        if ( $("#fridge_size option:selected").val() == "50x50mm Square cut" ){
            price = fridgePrice.Squ55;
        } else if (  $("#fridge_size option:selected").val() == "50x50mm Rounded corners cut" ) {
            price = fridgePrice.Rou55;
        } else if ( $("#fridge_size option:selected").val() == "70x50mm Square cut" )  {
            price = fridgePrice.Squ75;
        } else if (  $("#fridge_size option:selected").val() == "70x50mm Rounded corners cut" ) {
            price = fridgePrice.Rou75;
        } else if ( $("#fridge_size option:selected").val() == "90x50mm Square cut" )  {
            price = fridgePrice.Squ95;
        } else if (  $("#fridge_size option:selected").val() == "90x50mm Rounded corners cut" ) {
            price = fridgePrice.Rou95;
        }

        for (let i = 0; i<length ; ++i) {
            $("#fridge_td_"+PRODUCT_QTY.FRIDGE[i]).text("$"+price[i].toFixed(2) );
            $("#fridge_td_"+PRODUCT_QTY.FRIDGE[i]).append("<input type='hidden' id='fridge_price_"+PRODUCT_QTY.FRIDGE[i]+"' value='"+price[i].toFixed(2)+"'> ");
        }

    }else if (type == "sides") {
       //fridge_sides
       //1 SIDE

    }
}


//Letterhead Printing
function UpdateLWProductPrice(type) {
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
function UpdatePostProductPrice(type) {
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
function UpdatePosterProductPrice(type) {
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
function UpdateFolderProductPricePres(type) {
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
function UpdateCompsProductPrice(type) {
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
