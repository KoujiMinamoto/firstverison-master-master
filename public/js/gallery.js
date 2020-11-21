function show_hidden() {
    //$('#galleryfor15_id').slideToggle(3000);
    var height = 0, display = false, timer;
    eleMore = document.getElementById("galleryfor15_id");
    var step = function() {
        height = display? (height + 20): (height - 20);
        if (height < 0) {
            height = 0;    
        } else if (height > 750) {
            height = 750;    
        }
        eleMore.style.height = height + "px";
        if (height > 0 && height < 750) {
            timer = setTimeout(step, 10);
        }
    };

 
    if (document.getElementById("galleryfor15_id").style.display == 'block') {

        document.getElementById("galleryfor15_id").style.display = 'none';


    } else {
        if (timer) clearTimeout(timer)
    display = !display;
    step();

        document.getElementById("galleryfor15_id").style.display = 'block';
        

    }
    
}
function hidden_15(){
    document.getElementById("galleryfor15_id").style.display = 'none';
    document.getElementById("loader").style.display="block";
    // document.getElementById("homepage_div_id").style.display = "none";
    //document.getElementById("loader").style.display="none";
    //showMain();
    setTimeout(function(){document.getElementById("loader").style.display="none";},500);
}
function showBgImg(e) {
    var modal = document.getElementById('modal');
    var bgImg = document.getElementById('bgImg');
    modal.style.display = 'block';
    bgImg.src = e.src;
}

function showPhotos(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < 6; i++) {
        x[i].style.display = "none";
    }
    x[n].style.display = "block";
    }
function clickPhoto(headerName){
    switch (headerName) {
        case 1:
            showPhotos(0);
            break;
        case 2:
            showPhotos(1);
            break;
        case 3:
            showPhotos(2);
            break;
        case 4:
            showPhotos(3);
            break;
        case 5:
            showPhotos(4);
            break;
        case 6:
            showPhotos(5);
            break;
    }

}
function clickGallery(headerName){
    var button = document.getElementsByClassName("gallery_page_next");
    switch (headerName) {
        case 1:
            document.getElementById("gallery_info_for6_1_id").style.backgroundImage="url(../image/gallery/bro-1.jpg)";
            document.getElementById("gallery_info_for6-1_id").style.backgroundImage="url(../image/gallery/bro-1.jpg)";
            document.getElementById("gallery_info_for6_2_id").style.backgroundImage="url(../image/gallery/bro-2.jpg)";
            document.getElementById("gallery_info_for6-2_id").style.backgroundImage="url(../image/gallery/bro-2.jpg)";
            document.getElementById("gallery_info_for6_3_id").style.backgroundImage="url(../image/gallery/bro-3.jpg)";
            document.getElementById("gallery_info_for6-3_id").style.backgroundImage="url(../image/gallery/bro-3.jpg)";
            document.getElementById("gallery_info_for6_4_id").style.backgroundImage="url(../image/gallery/bro-4.jpg)";
            document.getElementById("gallery_info_for6-4_id").style.backgroundImage="url(../image/gallery/bro-4.jpg)";
            document.getElementById("gallery_info_for6_5_id").style.backgroundImage="url(../image/gallery/bro-5.jpg)";
            document.getElementById("gallery_info_for6-5_id").style.backgroundImage="url(../image/gallery/bro-5.jpg)";
            document.getElementById("gallery_info_for6_6_id").style.backgroundImage="url(../image/gallery/bro-6.jpg)";
            document.getElementById("gallery_info_for6-6_id").style.backgroundImage="url(../image/gallery/bro-6.jpg)";
            document.getElementById("gallery_silde_note_id1").innerText = "Product directions1";
            document.getElementById("gallery_silde_note_id2").innerText = "Product directions2";
            document.getElementById("gallery_silde_note_id3").innerText = "Product directions3";
            document.getElementById("gallery_silde_note_id4").innerText = "Product directions4";
            document.getElementById("gallery_silde_note_id5").innerText = "Product directions5";
            document.getElementById("gallery_silde_note_id6").innerText = "Product directions6";
            for (var a=1; a < 7; a++) {
                document.getElementsByClassName("gallery_silde_title")[a-1].innerText="Booklet";
                document.getElementById("gallery_silde_note_id"+a).innerText ="150gsm Gloss Stock\n200gsm Cover Gloss Machine Varnish\nSaddlestitched";
            };
            for (var i=0; i < button.length; i++) {
                button[i].onclick = function(){
                    clickProduct(1);
                }
            };
            hidden_15();
            break;
        case 2:
            document.getElementById("gallery_info_for6_1_id").style.backgroundImage="url(../image/gallery/Brochure1.jpg)";
            document.getElementById("gallery_info_for6-1_id").style.backgroundImage="url(../image/gallery/Brochure1.jpg)";
            document.getElementById("gallery_info_for6_2_id").style.backgroundImage="url(../image/gallery/Brochure2.jpg)";
            document.getElementById("gallery_info_for6-2_id").style.backgroundImage="url(../image/gallery/Brochure2.jpg)";
            document.getElementById("gallery_info_for6_3_id").style.backgroundImage="url(../image/gallery/Brochure3.jpg)";
            document.getElementById("gallery_info_for6-3_id").style.backgroundImage="url(../image/gallery/Brochure3.jpg)";
            document.getElementById("gallery_info_for6_4_id").style.backgroundImage="url(../image/gallery/Brochure4.jpg)";
            document.getElementById("gallery_info_for6-4_id").style.backgroundImage="url(../image/gallery/Brochure4.jpg)";
            document.getElementById("gallery_info_for6_5_id").style.backgroundImage="url(../image/gallery/Brochure5.jpg)";
            document.getElementById("gallery_info_for6-5_id").style.backgroundImage="url(../image/gallery/Brochure5.jpg)";
            document.getElementById("gallery_info_for6_6_id").style.backgroundImage="url(../image/gallery/bro-1.jpg)";
            document.getElementById("gallery_info_for6-6_id").style.backgroundImage="url(../image/gallery/bro-1.jpg)";
            document.getElementById("gallery_silde_note_id1").innerText = "Product directions1";
            document.getElementById("gallery_silde_note_id2").innerText = "Product directions2";
            document.getElementById("gallery_silde_note_id3").innerText = "Product directions3";
            document.getElementById("gallery_silde_note_id4").innerText = "Product directions4";
            document.getElementById("gallery_silde_note_id5").innerText = "Product directions5";
            document.getElementById("gallery_silde_note_id6").innerText = "Product directions6";
            for (var a=1; a < 7; a++) {
                document.getElementsByClassName("gallery_silde_title")[a-1].innerText="Folded Brochure";
                document.getElementById("gallery_silde_note_id"+a).innerText ="We do 4 pages A5 and 4 pages A4 Size, 6 pages DL Size, and even Large Size 6 pages A4 Size\nPaper Type: 115GSM, 120GSM, 150GSM，170GSM，200GSM, 250GSM";
            };
            for (var i=0; i < button.length; i++) {
                button[i].onclick = function(){
                    clickProduct(1);
                }
            };
            hidden_15();
            break;
        case 3:
            document.getElementById("gallery_info_for6_1_id").style.backgroundImage="url(../image/gallery/bc1.jpg)";
            document.getElementById("gallery_info_for6-1_id").style.backgroundImage="url(../image/gallery/bc1.jpg)";
            document.getElementById("gallery_info_for6_2_id").style.backgroundImage="url(../image/gallery/bc2.jpg)";
            document.getElementById("gallery_info_for6-2_id").style.backgroundImage="url(../image/gallery/bc2.jpg)";
            document.getElementById("gallery_info_for6_3_id").style.backgroundImage="url(../image/gallery/bc3.jpg)";
            document.getElementById("gallery_info_for6-3_id").style.backgroundImage="url(../image/gallery/bc3.jpg)";
            document.getElementById("gallery_info_for6_4_id").style.backgroundImage="url(../image/gallery/bc4.jpg)";
            document.getElementById("gallery_info_for6-4_id").style.backgroundImage="url(../image/gallery/bc4.jpg)";
            document.getElementById("gallery_info_for6_5_id").style.backgroundImage="url(../image/gallery/bc5.jpg)";
            document.getElementById("gallery_info_for6-5_id").style.backgroundImage="url(../image/gallery/bc5.jpg)";
            document.getElementById("gallery_info_for6_6_id").style.backgroundImage="url(../image/gallery/bc6.jpg)";
            document.getElementById("gallery_info_for6-6_id").style.backgroundImage="url(../image/gallery/bc6.jpg)";
            document.getElementById("gallery_silde_note_id1").innerText = "Product directions1";
            document.getElementById("gallery_silde_note_id2").innerText = "Product directions2";
            document.getElementById("gallery_silde_note_id3").innerText = "Product directions3";
            document.getElementById("gallery_silde_note_id4").innerText = "Product directions4";
            document.getElementById("gallery_silde_note_id5").innerText = "Product directions5";
            document.getElementById("gallery_silde_note_id6").innerText = "Product directions6";
            for (var a=1; a < 7; a++) {
                document.getElementsByClassName("gallery_silde_title")[a-1].innerText="Business Card";
                document.getElementById("gallery_silde_note_id"+a).innerText ="We print business Card on 350GSM, 450GSM. \nAnd Matt and Gloss Lamination one sided or double sided.  \nNew Velvet Lamination";
            };
            for (var i=0; i < button.length; i++) {
                button[i].onclick = function(){
                    clickProduct(2);
                }
            };
            hidden_15();
            break;
        case 4:
            document.getElementById("gallery_info_for6_1_id").style.backgroundImage="url(../image/gallery/dl1.jpg)";
            document.getElementById("gallery_info_for6-1_id").style.backgroundImage="url(../image/gallery/dl1.jpg)";
            document.getElementById("gallery_info_for6_2_id").style.backgroundImage="url(../image/gallery/dl2.jpg)";
            document.getElementById("gallery_info_for6-2_id").style.backgroundImage="url(../image/gallery/dl2.jpg)";
            document.getElementById("gallery_info_for6_3_id").style.backgroundImage="url(../image/gallery/dl3.jpg)";
            document.getElementById("gallery_info_for6-3_id").style.backgroundImage="url(../image/gallery/dl3.jpg)";
            document.getElementById("gallery_info_for6_4_id").style.backgroundImage="url(../image/gallery/dl4.jpg)";
            document.getElementById("gallery_info_for6-4_id").style.backgroundImage="url(../image/gallery/dl4.jpg)";
            document.getElementById("gallery_info_for6_5_id").style.backgroundImage="url(../image/gallery/dl3.jpg)";
            document.getElementById("gallery_info_for6-5_id").style.backgroundImage="url(../image/gallery/dl3.jpg)";
            document.getElementById("gallery_info_for6_6_id").style.backgroundImage="url(../image/gallery/dl4.jpg)";
            document.getElementById("gallery_info_for6-6_id").style.backgroundImage="url(../image/gallery/dl4.jpg)";
            document.getElementById("gallery_silde_note_id1").innerText = "Product directions1";
            document.getElementById("gallery_silde_note_id2").innerText = "Product directions2";
            document.getElementById("gallery_silde_note_id3").innerText = "Product directions3";
            document.getElementById("gallery_silde_note_id4").innerText = "Product directions4";
            document.getElementById("gallery_silde_note_id5").innerText = "Product directions5";
            document.getElementById("gallery_silde_note_id6").innerText = "Product directions6";
            for (var a=1; a < 7; a++) {
                document.getElementsByClassName("gallery_silde_title")[a-1].innerText="DL With Compliments";
                document.getElementById("gallery_silde_note_id"+a).innerText ="We print the with compliments on 100GSM Laser Bond.  \nAlso we can order A5, A4 Pads available in 50 sheets or 100 sheets per pad";
            };
            for (var i=0; i < button.length; i++) {
                button[i].onclick = function(){
                    clickProduct(14);
                }
            };
            hidden_15();
            break;
        case 5:
            document.getElementById("gallery_info_for6_1_id").style.backgroundImage="url(../image/gallery/Poster1.jpg)";
            document.getElementById("gallery_info_for6-1_id").style.backgroundImage="url(../image/gallery/Poster1.jpg)";
            document.getElementById("gallery_info_for6_2_id").style.backgroundImage="url(../image/gallery/Poster2.jpg)";
            document.getElementById("gallery_info_for6-2_id").style.backgroundImage="url(../image/gallery/Poster2.jpg)";
            document.getElementById("gallery_info_for6_3_id").style.backgroundImage="url(../image/gallery/Poster3.jpg)";
            document.getElementById("gallery_info_for6-3_id").style.backgroundImage="url(../image/gallery/Poster3.jpg)";
            document.getElementById("gallery_info_for6_4_id").style.backgroundImage="url(../image/gallery/Poster4.jpg)";
            document.getElementById("gallery_info_for6-4_id").style.backgroundImage="url(../image/gallery/Poster4.jpg)";
            document.getElementById("gallery_info_for6_5_id").style.backgroundImage="url(../image/gallery/Poster3.jpg)";
            document.getElementById("gallery_info_for6-5_id").style.backgroundImage="url(../image/gallery/Poster3.jpg)";
            document.getElementById("gallery_info_for6_6_id").style.backgroundImage="url(../image/gallery/Poster4.jpg)";
            document.getElementById("gallery_info_for6-6_id").style.backgroundImage="url(../image/gallery/Poster4.jpg)";
            document.getElementById("gallery_silde_note_id1").innerText = "Product directions1";
            document.getElementById("gallery_silde_note_id2").innerText = "Product directions2";
            document.getElementById("gallery_silde_note_id3").innerText = "Product directions3";
            document.getElementById("gallery_silde_note_id4").innerText = "Product directions4";
            document.getElementById("gallery_silde_note_id5").innerText = "Product directions5";
            document.getElementById("gallery_silde_note_id6").innerText = "Product directions6";
            for (var a=1; a < 7; a++) {
                document.getElementsByClassName("gallery_silde_title")[a-1].innerText="Poster";
                document.getElementById("gallery_silde_note_id"+a).innerText ="Paper Weight: 200GSM , 250GSM Gloss or Matt \nWe also can do Custome Size";
            };
            for (var i=0; i < button.length; i++) {
                button[i].onclick = function(){
                    clickProduct(12);
                }
            };
            hidden_15();
            break;
        case 6:
            document.getElementById("gallery_info_for6_1_id").style.backgroundImage="url(../image/gallery/pc1.jpg)";
            document.getElementById("gallery_info_for6-1_id").style.backgroundImage="url(../image/gallery/pc1.jpg)";
            document.getElementById("gallery_info_for6_2_id").style.backgroundImage="url(../image/gallery/pc2.jpg)";
            document.getElementById("gallery_info_for6-2_id").style.backgroundImage="url(../image/gallery/pc2.jpg)";
            document.getElementById("gallery_info_for6_3_id").style.backgroundImage="url(../image/gallery/pc3.jpg)";
            document.getElementById("gallery_info_for6-3_id").style.backgroundImage="url(../image/gallery/pc3.jpg)";
            document.getElementById("gallery_info_for6_4_id").style.backgroundImage="url(../image/gallery/pc4.jpg)";
            document.getElementById("gallery_info_for6-4_id").style.backgroundImage="url(../image/gallery/pc4.jpg)";
            document.getElementById("gallery_info_for6_5_id").style.backgroundImage="url(../image/gallery/pc5.jpg)";
            document.getElementById("gallery_info_for6-5_id").style.backgroundImage="url(../image/gallery/pc5.jpg)";
            document.getElementById("gallery_info_for6_6_id").style.backgroundImage="url(../image/gallery/pc4.jpg)";
            document.getElementById("gallery_info_for6-6_id").style.backgroundImage="url(../image/gallery/pc4.jpg)";
            document.getElementById("gallery_silde_note_id1").innerText = "Product directions1";
            document.getElementById("gallery_silde_note_id2").innerText = "Product directions2";
            document.getElementById("gallery_silde_note_id3").innerText = "Product directions3";
            document.getElementById("gallery_silde_note_id4").innerText = "Product directions4";
            document.getElementById("gallery_silde_note_id5").innerText = "Product directions5";
            document.getElementById("gallery_silde_note_id6").innerText = "Product directions6";
            for (var a=1; a < 7; a++) {
                document.getElementsByClassName("gallery_silde_title")[a-1].innerText="Postcards";
                document.getElementById("gallery_silde_note_id"+a).innerText ="Paper Weight: 310GSM, 350GSM\nAvailable in customer Size\nMatt or Gloss Lamination.";
            };
            for (var i=0; i < button.length; i++) {
                button[i].onclick = function(){
                    clickProduct(13);
                }
            };
            hidden_15();
            break;
        case 7:
            document.getElementById("gallery_info_for6_1_id").style.backgroundImage="url(../image/gallery/ev1.jpg)";
            document.getElementById("gallery_info_for6-1_id").style.backgroundImage="url(../image/gallery/ev1.jpg)";
            document.getElementById("gallery_info_for6_2_id").style.backgroundImage="url(../image/gallery/ev2.jpg)";
            document.getElementById("gallery_info_for6-2_id").style.backgroundImage="url(../image/gallery/ev2.jpg)";
            document.getElementById("gallery_info_for6_3_id").style.backgroundImage="url(../image/gallery/ev3.jpg)";
            document.getElementById("gallery_info_for6-3_id").style.backgroundImage="url(../image/gallery/ev3.jpg)";
            document.getElementById("gallery_info_for6_4_id").style.backgroundImage="url(../image/gallery/ev4.jpg)";
            document.getElementById("gallery_info_for6-4_id").style.backgroundImage="url(../image/gallery/ev4.jpg)";
            document.getElementById("gallery_info_for6_5_id").style.backgroundImage="url(../image/gallery/ev3.jpg)";
            document.getElementById("gallery_info_for6-5_id").style.backgroundImage="url(../image/gallery/ev3.jpg)";
            document.getElementById("gallery_info_for6_6_id").style.backgroundImage="url(../image/gallery/ev4.jpg)";
            document.getElementById("gallery_info_for6-6_id").style.backgroundImage="url(../image/gallery/ev4.jpg)";
            document.getElementById("gallery_silde_note_id1").innerText = "Product directions1";
            document.getElementById("gallery_silde_note_id2").innerText = "Product directions2";
            document.getElementById("gallery_silde_note_id3").innerText = "Product directions3";
            document.getElementById("gallery_silde_note_id4").innerText = "Product directions4";
            document.getElementById("gallery_silde_note_id5").innerText = "Product directions5";
            document.getElementById("gallery_silde_note_id6").innerText = "Product directions6";
            for (var a=1; a < 7; a++) {
                document.getElementsByClassName("gallery_silde_title")[a-1].innerText="Envelopes";
                document.getElementById("gallery_silde_note_id"+a).innerText ="We print the DL, DLX, C4, C5, B4 Size";
            };
            for (var i=0; i < button.length; i++) {
                button[i].onclick = function(){
                    clickProduct(6);
                }
            };
            hidden_15();
            break;
        case 8:
            document.getElementById("gallery_info_for6_1_id").style.backgroundImage="url(../image/gallery/fy1.jpg)";
            document.getElementById("gallery_info_for6-1_id").style.backgroundImage="url(../image/gallery/fy1.jpg)";
            document.getElementById("gallery_info_for6_2_id").style.backgroundImage="url(../image/gallery/fy2.jpg)";
            document.getElementById("gallery_info_for6-2_id").style.backgroundImage="url(../image/gallery/fy2.jpg)";
            document.getElementById("gallery_info_for6_3_id").style.backgroundImage="url(../image/gallery/fy3.jpg)";
            document.getElementById("gallery_info_for6-3_id").style.backgroundImage="url(../image/gallery/fy3.jpg)";
            document.getElementById("gallery_info_for6_4_id").style.backgroundImage="url(../image/gallery/fy4.jpg)";
            document.getElementById("gallery_info_for6-4_id").style.backgroundImage="url(../image/gallery/fy4.jpg)";
            document.getElementById("gallery_info_for6_5_id").style.backgroundImage="url(../image/gallery/fy3.jpg)";
            document.getElementById("gallery_info_for6-5_id").style.backgroundImage="url(../image/gallery/fy3.jpg)";
            document.getElementById("gallery_info_for6_6_id").style.backgroundImage="url(../image/gallery/fy4.jpg)";
            document.getElementById("gallery_info_for6-6_id").style.backgroundImage="url(../image/gallery/fy4.jpg)";
            document.getElementById("gallery_silde_note_id1").innerText = "Product directions1";
            document.getElementById("gallery_silde_note_id2").innerText = "Product directions2";
            document.getElementById("gallery_silde_note_id3").innerText = "Product directions3";
            document.getElementById("gallery_silde_note_id4").innerText = "Product directions4";
            document.getElementById("gallery_silde_note_id5").innerText = "Product directions5";
            document.getElementById("gallery_silde_note_id6").innerText = "Product directions6";
            for (var a=1; a < 7; a++) {
                document.getElementsByClassName("gallery_silde_title")[a-1].innerText="Flyers";
                document.getElementById("gallery_silde_note_id"+a).innerText ="Paper Weight: 100GSM, 120GSM, 150GSM, 170GSM, 200GSM, 250GSM Gloss and Matt.\nEven Customer Size";
            };
            for (var i=0; i < button.length; i++) {
                button[i].onclick = function(){
                    clickProduct(8);
                }
            };
            hidden_15();
            break;
        case 9:
            document.getElementById("gallery_info_for6_1_id").style.backgroundImage="url(../image/gallery/lh1.jpg)";
            document.getElementById("gallery_info_for6-1_id").style.backgroundImage="url(../image/gallery/lh1.jpg)";
            document.getElementById("gallery_info_for6_2_id").style.backgroundImage="url(../image/gallery/lh2.jpg)";
            document.getElementById("gallery_info_for6-2_id").style.backgroundImage="url(../image/gallery/lh2.jpg)";
            document.getElementById("gallery_info_for6_3_id").style.backgroundImage="url(../image/gallery/lh3.jpg)";
            document.getElementById("gallery_info_for6-3_id").style.backgroundImage="url(../image/gallery/lh3.jpg)";
            document.getElementById("gallery_info_for6_4_id").style.backgroundImage="url(../image/gallery/lh4.jpg)";
            document.getElementById("gallery_info_for6-4_id").style.backgroundImage="url(../image/gallery/lh4.jpg)";
            document.getElementById("gallery_info_for6_5_id").style.backgroundImage="url(../image/gallery/lh5.jpg)";
            document.getElementById("gallery_info_for6-5_id").style.backgroundImage="url(../image/gallery/lh5.jpg)";
            document.getElementById("gallery_info_for6_6_id").style.backgroundImage="url(../image/gallery/lh6.jpg)";
            document.getElementById("gallery_info_for6-6_id").style.backgroundImage="url(../image/gallery/lh6.jpg)";
            document.getElementById("gallery_silde_note_id1").innerText = "Product directions1";
            document.getElementById("gallery_silde_note_id2").innerText = "Product directions2";
            document.getElementById("gallery_silde_note_id3").innerText = "Product directions3";
            document.getElementById("gallery_silde_note_id4").innerText = "Product directions4";
            document.getElementById("gallery_silde_note_id5").innerText = "Product directions5";
            document.getElementById("gallery_silde_note_id6").innerText = "Product directions6";
            for (var a=1; a < 7; a++) {
                document.getElementsByClassName("gallery_silde_title")[a-1].innerText="Letterhead";
                document.getElementById("gallery_silde_note_id"+a).innerText ="Paper Weight: 100GSM, 110GSM , 120GSM Laser Bond\nWe also can do Custome Name Data Printing.";
            };
            for (var i=0; i < button.length; i++) {
                button[i].onclick = function(){
                    clickProduct(10);
                }
            };
            hidden_15();
            break;
        case 10:
            document.getElementById("gallery_info_for6_1_id").style.backgroundImage="url(../image/gallery/s1.jpeg)";
            document.getElementById("gallery_info_for6-1_id").style.backgroundImage="url(../image/gallery/s1.jpeg)";
            document.getElementById("gallery_info_for6_2_id").style.backgroundImage="url(../image/gallery/s2.png)";
            document.getElementById("gallery_info_for6-2_id").style.backgroundImage="url(../image/gallery/s2.png)";
            document.getElementById("gallery_info_for6_3_id").style.backgroundImage="url(../image/gallery/s3.png)";
            document.getElementById("gallery_info_for6-3_id").style.backgroundImage="url(../image/gallery/s3.png)";
            document.getElementById("gallery_info_for6_4_id").style.backgroundImage="url(../image/gallery/Sign-6.jpg)";
            document.getElementById("gallery_info_for6-4_id").style.backgroundImage="url(../image/gallery/Sign-6.jpg)";
            document.getElementById("gallery_info_for6_5_id").style.backgroundImage="url(../image/gallery/Sign-4.jpg)";
            document.getElementById("gallery_info_for6-5_id").style.backgroundImage="url(../image/gallery/Sign-4.jpg)";
            document.getElementById("gallery_info_for6_6_id").style.backgroundImage="url(../image/gallery/Sign-5.jpg)";
            document.getElementById("gallery_info_for6-6_id").style.backgroundImage="url(../image/gallery/Sign-5.jpg)";
            document.getElementById("gallery_silde_note_id1").innerText = "Product directions1";
            document.getElementById("gallery_silde_note_id2").innerText = "Product directions2";
            document.getElementById("gallery_silde_note_id3").innerText = "Product directions3";
            document.getElementById("gallery_silde_note_id4").innerText = "Product directions4";
            document.getElementById("gallery_silde_note_id5").innerText = "Product directions5";
            document.getElementById("gallery_silde_note_id6").innerText = "Product directions6";
            for (var a=1; a < 7; a++) {
                document.getElementsByClassName("gallery_silde_title")[a-1].innerText="Signage";
                document.getElementById("gallery_silde_note_id"+a).innerText ="We do Roll Media, Rigid Media, Large Adhesives, Stickers";
            };
            for (var i=0; i < button.length; i++) {
                button[i].onclick = function(){
                    clickProduct(5);
                }
            };
            hidden_15();
            break;
        case 11:
            document.getElementById("gallery_info_for6_1_id").style.backgroundImage="url(../image/gallery/Banner-1.jpg)";
            document.getElementById("gallery_info_for6-1_id").style.backgroundImage="url(../image/gallery/Banner-1.jpg)";
            document.getElementById("gallery_info_for6_2_id").style.backgroundImage="url(../image/gallery/Banner-2.jpg)";
            document.getElementById("gallery_info_for6-2_id").style.backgroundImage="url(../image/gallery/Banner-2.jpg)";
            document.getElementById("gallery_info_for6_3_id").style.backgroundImage="url(../image/gallery/Banner-3.jpg)";
            document.getElementById("gallery_info_for6-3_id").style.backgroundImage="url(../image/gallery/Banner-3.jpg)";
            document.getElementById("gallery_info_for6_4_id").style.backgroundImage="url(../image/gallery/Banner-4.jpg)";
            document.getElementById("gallery_info_for6-4_id").style.backgroundImage="url(../image/gallery/Banner-4.jpg)";
            document.getElementById("gallery_info_for6_5_id").style.backgroundImage="url(../image/gallery/Banner-3.jpg)";
            document.getElementById("gallery_info_for6-5_id").style.backgroundImage="url(../image/gallery/Banner-3.jpg)";
            document.getElementById("gallery_info_for6_6_id").style.backgroundImage="url(../image/gallery/Banner-4.jpg)";
            document.getElementById("gallery_info_for6-6_id").style.backgroundImage="url(../image/gallery/Banner-4.jpg)";
            document.getElementById("gallery_silde_note_id1").innerText = "Pull-Up Banner \n Grey blockout back\n Size Also Available: 600 x 1600mm, 850 x 2000mm, 1000 x 2200mm";
            document.getElementById("gallery_silde_note_id2").innerText = "Product directions2";
            document.getElementById("gallery_silde_note_id3").innerText = "Product directions3";
            document.getElementById("gallery_silde_note_id4").innerText = "Product directions4";
            document.getElementById("gallery_silde_note_id5").innerText = "Product directions5";
            document.getElementById("gallery_silde_note_id6").innerText = "Product directions6";
            for (var a=1; a < 7; a++) {
                document.getElementsByClassName("gallery_silde_title")[a-1].innerText="Pull-Up Banner";
                document.getElementById("gallery_silde_note_id"+a).innerText ="Grey blockout back\n Size Also Available: 600 x 1600mm, 850 x 2000mm, 1000 x 2200mm";
            };
            for (var i=0; i < button.length; i++) {
                button[i].onclick = function(){
                    clickProduct(7);
                }
            };
            hidden_15();
            break;

    }
}
