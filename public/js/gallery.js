function show_hidden() {

    if (document.getElementById("galleryfor15_id").style.display == 'block') {

        document.getElementById("galleryfor15_id").style.display = 'none';

    } else {

        document.getElementById("galleryfor15_id").style.display = 'block';

    }

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
            break;
        case 4:
            
            break;
        case 5:
            
            break;
        case 6:
            
            break;
        case 7:
        
            break;
        case 8:
            
            break;
        case 9:
            
            break;
        case 10:
            
            break;

    }
}
