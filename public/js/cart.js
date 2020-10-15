// $("#product1_tr i").click(function() {
//     $("product1_tr").remove();
// });

function delete1() {
    $("#product1_tr").remove();
    deletePrice();
}
function delete2() {
    $("#product2_tr").remove();
    deletePrice();
}
function delete3() {
    $("#product3_tr").remove();
    deletePrice();
}
function delete4() {
    $("#product4_tr").remove();
    deletePrice();
}
function delete5() {
    $("#product5_tr").remove();
    deletePrice();
}
function deletePrice() {
    let price = $(".amount").text().split("$");
    let count = price[1].split(".");
    let counts = count[0];
    counts = parseInt(counts) - 300;
    $(".amount").text("$"+counts+".00");
}