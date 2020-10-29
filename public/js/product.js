function clickProduct(headerName) {
    reset();
    switch (headerName) {
        //product
        case 0:
            showProductPage(0);
            linkTo('booklets');
            break;
        case 1:
            showProductPage(1);
            linkTo('brochures');
            break;
        case 2:
            showProductPage(2);
            linkTo('businessCards');
            break;
        case 3:
            showProductPage(3);
            linkTo('deskpadsNotepads');
            break;
        case 4:
            showProductPage(4);
            linkTo('directMarketing');
            break;
        case 5:
            showProductPage(5);
            linkTo('docketBooks');
            break;
        case 6:
            showProductPage(6);
            linkTo('envelopes');
            break;
        case 7:
            showProductPage(7);
            linkTo('expressPrinting');
            break;
        case 8:
            showProductPage(8);
            linkTo('flyers');
            break;
        case 9:
            showProductPage(9);
            linkTo('fridgeMagnets');
            break;
        case 10:
            showProductPage(10);
            linkTo('letterheads');
            break;
        case 11:
            showProductPage(11);
            linkTo('postcards');
            break;
        case 12:
            showProductPage(12);
            linkTo('posters');
            break;
        case 13:
            showProductPage(13);
            linkTo('presentationFolders');
            break;
        case 14:
            showProductPage(14);
            linkTo('withCompliments');
            break;
        case 15:
            showProductPage(15);
            linkTo('websiteDesign');
            break;
    }

}

function showProductPage(headerName) {
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
    let price = new Array;
    let length = brochurePrice.hfa5115.length;
    if(type == "size") {
        if ( $("#brochure_type option:selected").val() == "Folding in Half" ){
            document.getElementById("brochure_page1").style.display = "block";
            document.getElementById("brochure_page2").style.display = "none";
            document.getElementById("brochure_page3").style.display = "block";
            document.getElementById("brochure_page4").style.display = "none";
            if ( $("#brochure_page option:selected").val() == "A5" ){
                if ( $("#brochure_stock option:selected").val() == "115GSM Gloss or Matt" ){
                    price = brochurePrice.hfa5115;
                } else if (  $("#brochure_stock option:selected").val() == "150GSM Goss or Matt" ) {
                    price = brochurePrice.hfa5150;
                } else if (  $("#brochure_stock option:selected").val() == "170GSM Gloss or Matt" ) {
                    price = brochurePrice.hfa5170;
                } else if (  $("#brochure_stock option:selected").val() == "250GSM Gloss or Matt" ) {
                    price = brochurePrice.hfa5250;
                }

            } else if (  $("#brochure_page option:selected").val() == "A4" ) {
                if ( $("#brochure_stock option:selected").val() == "115GSM Gloss or Matt" ){
                    price = brochurePrice.hfa4115;
                } else if (  $("#brochure_stock option:selected").val() == "150GSM Goss or Matt" ) {
                    price = brochurePrice.hfa4150;
                } else if (  $("#brochure_stock option:selected").val() == "170GSM Gloss or Matt" ) {
                    price = brochurePrice.hfa4170;
                } else if (  $("#brochure_stock option:selected").val() == "250GSM Gloss or Matt" ) {
                    price = brochurePrice.hfa4250;
                }

            } else if (  $("#brochure_page option:selected").val() == "A3" ) {
                if ( $("#brochure_stock option:selected").val() == "115GSM Gloss or Matt" ){
                    price = brochurePrice.hfa3115;
                } else if (  $("#brochure_stock option:selected").val() == "150GSM Goss or Matt" ) {
                    price = brochurePrice.hfa3150;
                } else if (  $("#brochure_stock option:selected").val() == "170GSM Gloss or Matt" ) {
                    price = brochurePrice.hfa3170;
                } else if (  $("#brochure_stock option:selected").val() == "250GSM Gloss or Matt" ) {
                    price = brochurePrice.hfa3250;
                }

            }


        } else if (  $("#brochure_type option:selected").val() == "Roll Fold to DL" ) {
            document.getElementById("brochure_page1").style.display = "none";
            document.getElementById("brochure_page2").style.display = "block";
            document.getElementById("brochure_page3").style.display = "none";
            document.getElementById("brochure_page4").style.display = "block";

            if ( $("#brochure_stock option:selected").val() == "115GSM Gloss or Matt" ){
                price = brochurePrice.dla4115;
            } else if (  $("#brochure_stock option:selected").val() == "150GSM Goss or Matt" ) {
                price = brochurePrice.dla4150;
            } else if (  $("#brochure_stock option:selected").val() == "170GSM Gloss or Matt" ) {
                price = brochurePrice.dla4170;
            }

        }
        for (let i = 0; i<length ; ++i) {
            $("#brochure_td_"+PRODUCT_QTY.BROCHURE[i]).text("$"+price[i].toFixed(2) );
            $("#brochure_td_"+PRODUCT_QTY.BROCHURE[i]).append("<input type='hidden' id='brochure_price_"+PRODUCT_QTY.BROCHURE[i]+"' value='"+price[i].toFixed(2)+"'> ");
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
    let price = new Array;
    let length = bussinesscardPrice.nv4501side.length;
    if(type == "side") {

        if ( $("#bcard_side option:selected").val() == "PRINTED 2 SIDES" ){
            if ( $("#bcard_laminated option:selected").val() == "MATT LAMINATED 2 SIDES" ){
                price = bussinesscardPrice.matt3502side;
            } else if (  $("#bcard_laminated option:selected").val() == "NEW VELVET LAMINATES 2 SIDES" ) {
                price = bussinesscardPrice.nv4502side;
            }

        } else if (  $("#bcard_side option:selected").val() == "PRINTED 1 SIDE" ) {
            if ( $("#bcard_laminated option:selected").val() == "MATT LAMINATED 2 SIDES" ){
                price =bussinesscardPrice.matt3501side;
            } else if (  $("#bcard_laminated option:selected").val() == "NEW VELVET LAMINATES 2 SIDES" ) {
                price =bussinesscardPrice.nv4501side;
            }
        }
        for (let i = 0; i<length ; ++i) {
            $("#bcard_td_"+PRODUCT_QTY.BUSSINESSCARD[i]).text("$"+price[i].toFixed(2) );
            $("#bcard_td_"+PRODUCT_QTY.BUSSINESSCARD[i]).append("<input type='hidden' id='bcard_price_"+PRODUCT_QTY.BUSSINESSCARD[i]+"' value='"+price[i].toFixed(2)+"'> ");
        }

    }else if (type == "laminated") {
        if ( $("#bc_laminated option:selected").val() == "MATT LAMINATED 2 SIDES" ){

        } else if (  $("#bc_laminated option:selected").val() == "NEW VELVET LAMINATES 2 SIDES" ) {

        }

    }else if (type == "size") {
        if (  $("#bc_size option:selected").val() == "90 x 55mm" ) {

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
    let price = new Array;
    let length = flyerPrice.dl1115.length;
    if(type == "size") {
        if ( $("#flyer_size option:selected").val() == "DL" ){
            if ( $("#flyer_stock option:selected").val() == "115GSM Gloss or Matt" ){
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.dl1115;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.dl2115;
                }

            } else if (  $("#flyer_stock option:selected").val() == "150GSM Goss or Matt" ) {
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.dl1150;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.dl2150;
                }


            } else if (  $("#flyer_stock option:selected").val() == "170GSM Gloss or Matt" ) {
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.dl1170;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.dl2170;
                }

            } else if (  $("#flyer_stock option:selected").val() == "250GSM Gloss or Matt" ) {
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.dl1250;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.dl2250;
                }

            }

        } else if (  $("#flyer_size option:selected").val() == "A6" ) {
            if ( $("#flyer_stock option:selected").val() == "115GSM Gloss or Matt" ){
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.a61115;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.a62115;
                }

            } else if (  $("#flyer_stock option:selected").val() == "150GSM Goss or Matt" ) {
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.a61150;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.a62150;
                }


            } else if (  $("#flyer_stock option:selected").val() == "170GSM Gloss or Matt" ) {
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.a61170;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.a62170;
                }

            } else if (  $("#flyer_stock option:selected").val() == "250GSM Gloss or Matt" ) {
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.a61250;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.a62250;
                }

            }

        } else if ( $("#flyer_size option:selected").val() == "A5" )  {
            if ( $("#flyer_stock option:selected").val() == "115GSM Gloss or Matt" ){
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.a51115;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.a52115;
                }

            } else if (  $("#flyer_stock option:selected").val() == "150GSM Goss or Matt" ) {
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.a51150;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.a52150;
                }


            } else if (  $("#flyer_stock option:selected").val() == "170GSM Gloss or Matt" ) {
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.a51170;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.a52170;
                }

            } else if (  $("#flyer_stock option:selected").val() == "250GSM Gloss or Matt" ) {
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.a51250;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.a52250;
                }

            }

        } else if (  $("#flyer_size option:selected").val() == "A4" ) {
            if ( $("#flyer_stock option:selected").val() == "115GSM Gloss or Matt" ){
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.a41115;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.a42115;
                }

            } else if (  $("#flyer_stock option:selected").val() == "150GSM Goss or Matt" ) {
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.a41150;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.a42150;
                }


            } else if (  $("#flyer_stock option:selected").val() == "170GSM Gloss or Matt" ) {
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.a41170;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.a42170;
                }

            } else if (  $("#flyer_stock option:selected").val() == "250GSM Gloss or Matt" ) {
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.a41250;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.a42250;
                }

            }

        } else if (  $("#flyer_size option:selected").val() == "A3" ) {
            if ( $("#flyer_stock option:selected").val() == "115GSM Gloss or Matt" ){
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.a31115;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.a32115;
                }

            } else if (  $("#flyer_stock option:selected").val() == "150GSM Goss or Matt" ) {
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.a31150;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.a32150;
                }


            } else if (  $("#flyer_stock option:selected").val() == "170GSM Gloss or Matt" ) {
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.a31170;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.a32170;
                }

            } else if (  $("#flyer_stock option:selected").val() == "250GSM Gloss or Matt" ) {
                if ( $("#flyer_side option:selected").val() == "FULL COLOUR FRONT ONLY" ){
                    price= flyerPrice.a31250;
                } else if (  $("#flyer_side option:selected").val() == "FULL COLOUR BOTH SIDES" ) {
                    price=flyerPrice.a32250;
                }

            }

        }
        for (let i = 0; i<length ; ++i) {
            $("#flyer_td_"+PRODUCT_QTY.FLYER[i]).text("$"+price[i].toFixed(2) );
            $("#flyer_td_"+PRODUCT_QTY.FLYER[i]).append("<input type='hidden' id='flyer_price_"+PRODUCT_QTY.FLYER[i]+"' value='"+price[i].toFixed(2)+"'> ");
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
    let length = letterheadPrice.a41001.length;
        let price = new Array;
    if(type == "size") {
        //lw_size
        //A4 210 x 297

    }else if (type == "stock") {
        if ( $("#lw_stock option:selected").val() == "100GSM" ){
            if ( $("#lw_side option:selected").val() == "1 SIDE" ){
                price=letterheadPrice.a41001;
            } else if (  $("#lw_side option:selected").val() == "2 SIDES" ) {
                price=letterheadPrice.a41002;
            }

        } else if (  $("#lw_stock option:selected").val() == "120GSM" ) {
            if ( $("#lw_side option:selected").val() == "1 SIDE" ){
                price=letterheadPrice.a41201;
            } else if (  $("#lw_side option:selected").val() == "2 SIDES" ) {
                price=letterheadPrice.a41202;
            }

        }
        for (let i = 0; i<length ; ++i) {
            $("#lw_td_"+PRODUCT_QTY.LETTERHEAD[i]).text("$"+price[i].toFixed(2) );
            $("#lw_td_"+PRODUCT_QTY.LETTERHEAD[i]).append("<input type='hidden' id='lw_price_"+PRODUCT_QTY.LETTERHEAD[i]+"' value='"+price[i].toFixed(2)+"'> ");
        }

    }else if (type == "sides") {
        //FULL COLOUR
        //express_finish
        if ( $("#lw_sides option:selected").val() == "1 SIDE" ){

        } else if (  $("#lw_sides option:selected").val() == "2 SIDES" ) {

        }

    }
}
//Postcard Printing
function UpdatePostProductPrice(type) {
    let length = postercardPrice.a43501.length;
    let price = new Array;
    if(type == "size") {
        if ( $("#post_size option:selected").val() == "DL" ){
            document.getElementById("poststockfinishupdate").style.display = "none";
            document.getElementById("poststockfinish").style.display = "block";
            if ( $("#post_side option:selected").val() == "FULL COLOUR 1 SIDE" ){
                if ( $("#post_stock option:selected").val() == "250GSM Gloss or Matt" ){
                    price=postercardPrice.dl2501;
                }else if ( $("#post_stock option:selected").val() == "350GSM Gloss or Matt" ){
                    price=postercardPrice.dl3501;
                }

            } else if (  $("#post_side option:selected").val() == "FULL COLOUR 2 SIDES" ) {
                if ( $("#post_stock option:selected").val() == "250GSM Gloss or Matt" ){
                    price=postercardPrice.dl2502;
                }else if ( $("#post_stock option:selected").val() == "350GSM Gloss or Matt" ){
                    price=postercardPrice.dl3502;
                }
            }

        } else if (  $("#post_size option:selected").val() == "A6" ) {
            document.getElementById("poststockfinishupdate").style.display = "none";
            document.getElementById("poststockfinish").style.display = "block";
            if ( $("#post_side option:selected").val() == "FULL COLOUR 1 SIDE" ){
                if ( $("#post_stock option:selected").val() == "250GSM Gloss or Matt" ){
                    price=postercardPrice.a62501;
                }else if ( $("#post_stock option:selected").val() == "350GSM Gloss or Matt" ){
                    price=postercardPrice.a63501;
                }

            } else if (  $("#post_side option:selected").val() == "FULL COLOUR 2 SIDES" ) {
                if ( $("#post_stock option:selected").val() == "250GSM Gloss or Matt" ){
                    price=postercardPrice.a62502;
                }else if ( $("#post_stock option:selected").val() == "350GSM Gloss or Matt" ){
                    price=postercardPrice.a63502;
                }
            }

        } else if (  $("#post_size option:selected").val() == "A5" ) {
            document.getElementById("poststockfinishupdate").style.display = "block";
            document.getElementById("poststockfinish").style.display = "none";
            if ( $("#post_side option:selected").val() == "FULL COLOUR 1 SIDE" ){

                    price=postercardPrice.a53501;


            } else if (  $("#post_side option:selected").val() == "FULL COLOUR 2 SIDES" ) {

                    price=postercardPrice.a53502;

            }

        } else if (  $("#post_size option:selected").val() == "A4" ) {
            document.getElementById("poststockfinishupdate").style.display = "block";
            document.getElementById("poststockfinish").style.display = "none";
            if ( $("#post_side option:selected").val() == "FULL COLOUR 1 SIDE" ){

                price=postercardPrice.a43501;


            } else if (  $("#post_side option:selected").val() == "FULL COLOUR 2 SIDES" ) {

                price=postercardPrice.a43502;

            }

        }
        for (let i = 0; i<length ; ++i) {
            $("#post_td_"+PRODUCT_QTY.POSTERCARD[i]).text("$"+price[i].toFixed(2) );
            $("#post_td_"+PRODUCT_QTY.POSTERCARD[i]).append("<input type='hidden' id='post_price_"+PRODUCT_QTY.POSTERCARD[i]+"' value='"+price[i].toFixed(2)+"'> ");
        }

    }
}
//Posters Printing
function UpdatePosterProductPrice(type) {
    let length = posterPrice.a31115.length;
    let price = new Array;
    if(type == "size") {
        if ( $("#poster_size option:selected").val() == "A3" ) {
            if ( $("#poster_stock option:selected").val() == "115GSM Gloss or Matt" ){
                if ( $("#poster_side option:selected").val() == "FULL COLOUR 1 SIDE" ){
                    price=posterPrice.a31115;
                } else if (  $("#poster_side option:selected").val() == "FULL COLOUR 2 SIDES" ) {
                    price=posterPrice.a32115;
                }

            } else if (  $("#poster_stock option:selected").val() == "150GSM Gloss or Matt" ) {
                if ( $("#poster_side option:selected").val() == "FULL COLOUR 1 SIDE" ){
                    price=posterPrice.a31150;
                } else if (  $("#poster_side option:selected").val() == "FULL COLOUR 2 SIDES" ) {
                    price=posterPrice.a32150;
                }


            } else if (  $("#poster_stock option:selected").val() == "170GSM Gloss or Matt" ) {
                if ( $("#poster_side option:selected").val() == "FULL COLOUR 1 SIDE" ){
                    price=posterPrice.a31170;
                } else if (  $("#poster_side option:selected").val() == "FULL COLOUR 2 SIDES" ) {
                    price=posterPrice.a32170;
                }


            } else if (  $("#poster_stock option:selected").val() == "250GSM Gloss or Matt" ) {
                if ( $("#poster_side option:selected").val() == "FULL COLOUR 1 SIDE" ){
                    price=posterPrice.a31250;
                } else if (  $("#poster_side option:selected").val() == "FULL COLOUR 2 SIDES" ) {
                    price=posterPrice.a32250;
                }


            }

        } else if (  $("#poster_size option:selected").val() == "A2" ) {
            if ( $("#poster_stock option:selected").val() == "115GSM Gloss or Matt" ){
                if ( $("#poster_side option:selected").val() == "FULL COLOUR 1 SIDE" ){
                    price=posterPrice.a21115;
                } else if (  $("#poster_side option:selected").val() == "FULL COLOUR 2 SIDES" ) {
                    price=posterPrice.a22115;
                }

            } else if (  $("#poster_stock option:selected").val() == "150GSM Gloss or Matt" ) {
                if ( $("#poster_side option:selected").val() == "FULL COLOUR 1 SIDE" ){
                    price=posterPrice.a21150;
                } else if (  $("#poster_side option:selected").val() == "FULL COLOUR 2 SIDES" ) {
                    price=posterPrice.a22150;
                }


            } else if (  $("#poster_stock option:selected").val() == "170GSM Gloss or Matt" ) {
                if ( $("#poster_side option:selected").val() == "FULL COLOUR 1 SIDE" ){
                    price=posterPrice.a21170;
                } else if (  $("#poster_side option:selected").val() == "FULL COLOUR 2 SIDES" ) {
                    price=posterPrice.a22170;
                }


            } else if (  $("#poster_stock option:selected").val() == "250GSM Gloss or Matt" ) {
                if ( $("#poster_side option:selected").val() == "FULL COLOUR 1 SIDE" ){
                    price=posterPrice.a21250;
                } else if (  $("#poster_side option:selected").val() == "FULL COLOUR 2 SIDES" ) {
                    price=posterPrice.a22250;
                }


            }

        } else if (  $("#poster_size option:selected").val() == "A1" ) {
            if ( $("#poster_stock option:selected").val() == "115GSM Gloss or Matt" ){
                if ( $("#poster_side option:selected").val() == "FULL COLOUR 1 SIDE" ){
                    price=posterPrice.a11115;
                } else if (  $("#poster_side option:selected").val() == "FULL COLOUR 2 SIDES" ) {
                    price=posterPrice.a12115;
                }

            } else if (  $("#poster_stock option:selected").val() == "150GSM Gloss or Matt" ) {
                if ( $("#poster_side option:selected").val() == "FULL COLOUR 1 SIDE" ){
                    price=posterPrice.a11150;
                } else if (  $("#poster_side option:selected").val() == "FULL COLOUR 2 SIDES" ) {
                    price=posterPrice.a12150;
                }


            } else if (  $("#poster_stock option:selected").val() == "170GSM Gloss or Matt" ) {
                if ( $("#poster_side option:selected").val() == "FULL COLOUR 1 SIDE" ){
                    price=posterPrice.a11170;
                } else if (  $("#poster_side option:selected").val() == "FULL COLOUR 2 SIDES" ) {
                    price=posterPrice.a12170;
                }


            } else if (  $("#poster_stock option:selected").val() == "250GSM Gloss or Matt" ) {
                if ( $("#poster_side option:selected").val() == "FULL COLOUR 1 SIDE" ){
                    price=posterPrice.a11250;
                } else if (  $("#poster_side option:selected").val() == "FULL COLOUR 2 SIDES" ) {
                    price=posterPrice.a12250;
                }


            }

        }
        for (let i = 0; i<length ; ++i) {
            $("#poster_td_"+PRODUCT_QTY.POSTER[i]).text("$"+price[i].toFixed(2) );
            $("#poster_td_"+PRODUCT_QTY.POSTER[i]).append("<input type='hidden' id='poster_price_"+PRODUCT_QTY.POSTER[i]+"' value='"+price[i].toFixed(2)+"'> ");
        }

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
    let length = complimentPrice.dl1001.length;
    let price = new Array;
    if(type == "size") {
        //comps_size
        //DL 210 x 99

    }else if (type == "stock") {
        if ( $("#comps_stock option:selected").val() == "100GSM" ){
            if ( $("#comps_side option:selected").val() == "1 SIDE" ){
                price=complimentPrice.dl1001;
            } else if (  $("#comps_side option:selected").val() == "2 SIDES" ) {
                price=complimentPrice.dl1002;
            }

        } else if (  $("#comps_stock option:selected").val() == "120GSM" ) {
            if ( $("#comps_side option:selected").val() == "1 SIDE" ){
                price=complimentPrice.dl1201;
            } else if (  $("#comps_side option:selected").val() == "2 SIDES" ) {
                price=complimentPrice.dl1202;
            }
        }
        for (let i = 0; i<length ; ++i) {
            $("#comps_td_"+PRODUCT_QTY.COMPLIMENT[i]).text("$"+price[i].toFixed(2) );
            $("#comps_td_"+PRODUCT_QTY.COMPLIMENT[i]).append("<input type='hidden' id='comps_price_"+PRODUCT_QTY.COMPLIMENT[i]+"' value='"+price[i].toFixed(2)+"'> ");
        }

    }else if (type == "colour") {
        //4 COLOUR PROCESS
        //comps_colour

    }else if (type == "sides") {
        //1 SIDE
        //comps_sides

    }
}
//Banner 放在expressing里面了
function UpdateBannerProductPrice(type) {
    let length = bannerPrice.ss1200.length;
    let price = new Array;
    if(type == "size") {
        if( $("#banner_stock option:selected").val() == "Premium" ){
            document.getElementById("bannersizecontainer2").style.display = "block";
            document.getElementById("bannersizecontainer1").style.display = "none";
            document.getElementById("bannersizecontainer3").style.display = "none";
            if ( $("#banner_size option:selected").val() == "850" ){
                price=bannerPrice.pb850;
            }else if ( $("#banner_size option:selected").val() == "1200" ){
                price=bannerPrice.pb1200;
            }else if ( $("#banner_size option:selected").val() == "1800mm" ){
                console.log("test1234");
                price=bannerPrice.pb1800;
            }else if ( $("#banner_size option:selected").val() == "2400mm" ){
                price=bannerPrice.pb2400;
            }

        }else if ( $("#banner_stock option:selected").val() == "Standard" ){
            document.getElementById("bannersizecontainer1").style.display = "block";
            document.getElementById("bannersizecontainer2").style.display = "none";
            document.getElementById("bannersizecontainer3").style.display = "none";

            if ( $("#banner_size option:selected").val() == "850" ){
                price=bannerPrice.ss850;
            }else if ( $("#banner_size option:selected").val() == "1200" ){
                price = bannerPrice.ss1200;
            }
        }else if( $("#banner_stock option:selected").val() == "440GSM" ){
            document.getElementById("bannersizecontainer3").style.display = "block";
            document.getElementById("bannersizecontainer1").style.display = "none";
            document.getElementById("bannersizecontainer2").style.display = "none";
            price=bannerPrice.px600;

        }
        for (let i = 0; i<length ; ++i) {
            $("#banner_td_"+PRODUCT_QTY.BANNER[i]).text("$"+price[i].toFixed(2) );
            $("#banner_td_"+PRODUCT_QTY.BANNER[i]).append("<input type='hidden' id='banner_price_"+PRODUCT_QTY.BANNER[i]+"' value='"+price[i].toFixed(2)+"'> ");
        }
    }else if(type == "size2") {
        if ( $("#banner_stock option:selected").val() == "Standard" ){
            document.getElementById("bannersizecontainer1").style.display = "block";
            document.getElementById("bannersizecontainer2").style.display = "none";
            document.getElementById("bannersizecontainer3").style.display = "none";

            if ( $("#banner_size2 option:selected").val() == "850" ){
                price=bannerPrice.ss850;
            }else if ( $("#banner_size2 option:selected").val() == "1200" ){
                price = bannerPrice.ss1200;
            }
        }
        for (let i = 0; i<length ; ++i) {
            $("#banner_td_"+PRODUCT_QTY.BANNER[i]).text("$"+price[i].toFixed(2) );
            $("#banner_td_"+PRODUCT_QTY.BANNER[i]).append("<input type='hidden' id='banner_price_"+PRODUCT_QTY.BANNER[i]+"' value='"+price[i].toFixed(2)+"'> ");
        }

    }
}
//signage
function UpdateSignageProductPrice(type) {
    let length = signagePrice.only1.length;
    let price = new Array;
    if(type == "size") {
        price = signagePrice.only1;
        for (let i = 0; i<length ; ++i) {
            $("#signage_td_"+PRODUCT_QTY.SIGNAGE[i]).text("$"+price[i].toFixed(2) );
            $("#signage_td_"+PRODUCT_QTY.SIGNAGE[i]).append("<input type='hidden' id='signage_price_"+PRODUCT_QTY.SIGNAGE[i]+"' value='"+price[i].toFixed(2)+"'> ");
        }
    }


}

