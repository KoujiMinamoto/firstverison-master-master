//节点加载完毕后显示body
document.onreadystatechange = function () {
    if (document.readyState === "complete") {
        document.body.style.display = "block";
    } else {
        document.body.style.display = "none";
    };
};
window.onload=function(){

    var username;
    var usertype;
    var oDiv  =  document.getElementById('displayBox');
    var oUl = document.getElementsByTagName('ul')[0];
    var Li = oUl.getElementsByTagName('li');
    oUl.innerHTML = oUl.innerHTML+oUl.innerHTML;
    oUl.style.width = Li[0].offsetWidth*Li.length+'px';
    var speed = 2
    function move(){
        if(oUl.offsetLeft<-oUl.offsetWidth/speed){
            oUl.style.left = '0'
        }
        if(oUl.offsetLeft>0){
            oUl.style.left = -oUl.offsetWidth/speed+'px';
        }
        //oUl.style.left = oUl.offsetLeft-2+'px';//左
        oUl.style.left = oUl.offsetLeft+speed+'px';//右
    }
    var timer = setInterval(move,30)
    oDiv.onmouseover=function(){
        clearInterval(timer);
    }
    oDiv.onmouseout=function(){
         timer = setInterval(move,30)
    }
}

function initPage() {
    //判断是否登录状态
    window.localStorage.setItem('login', "logout");
    var storage=window.localStorage;
    var login =storage.login;
    console.log(login);
    if (login == "login"){
        $("#login_id").html('my account');
        $("#register_id").html('logout');
    }else{
        $("#login_id").html('login');
        $("#register_id").html('register');
    }
    footerPosition();
    $(window).resize(footerPosition);

    //二级菜单
    $("#product_id").hover(function() {
            $("#product_ul").show(200);
        } ,
        function() {
            $("#product_ul").hide(200);
        }
    );

    $("#design_id").hover(function() {
        $("#design_ul").show(200);
    } ,
        function() {
            $("#design_ul").hide(200);
        }
    );

    $("#gallary_id").hover(function() {
        $("#gallary_ul").show(200);
    } ,
        function() {
            $("#gallary_ul").hide(200);
        }
    );
    $("#support_id").hover(function() {
            $("#support_ul").show(200);
        } ,
        function() {
            $("#support_ul").hide(200);
        }
    );
    beforeInitPage();
}

function clickHeader(headerName) {
    reset();
    switch (headerName) {
        //product
        case 0:
            showHeaderPage(0);
            linkTo('home');
            break;
        // case 1:
        //     $(".product").addClass("clickOn");
        //     document.getElementById("product_div_id").style.display = "block";
        //     break;
        case 2:
            showHeaderPage(2);
            linkTo('design');
            break;
        case 3:
            showHeaderPage(3);
            linkTo('gallary');
            break;
        case 4:
            showHeaderPage(4);
            linkTo('support');
            break;
        case 5:
            showHeaderPage(5);
            linkTo('aboutUs');
            break;
        case 6:
            showHeaderPage(6)
            linkTo('contact');
            break;
        case 7:
            showHeaderPage(7);
            linkTo('cart');
            break;
        case 8:
            showHeaderPage(8);
            linkTo('login');
            break;
        case 9:
            showHeaderPage(9);
            linkTo('register');
            break;
        case 10:
            showHeaderPage(10);
            linkTo('forgetpasswd');
            break;
        case 11:
            showHeaderPage(11);
            linkTo('terms');
            break;
        case 12:
            showHeaderPage(12);
            linkTo('privacy');
            break;
        case 13:
            showHeaderPage(13);
            linkTo('sample');
            break;
        case 14:
            showHeaderPage(14);
            linkTo('orderprocess');
            break;
        case 15:
            showHeaderPage(15);
            linkTo('delivery');
            break;
        case 16:
            showHeaderPage(16);
            linkTo('fileGuidelines');
            break;
        default :
            break;
    }

}
function nextslide(){
    console.log("nexts");
    $('#myCarousel').carousel('next');
    console.log("nexts");
}
function reset() {
    topFunction();
    $(".home").removeClass("clickOn");
    $(".product").removeClass("clickOn");
    $(".design").removeClass("clickOn");
    $(".gallary").removeClass("clickOn");
    $(".support").removeClass("clickOn");
    $(".aboutUs").removeClass("clickOn");
    $(".contact").removeClass("clickOn");
    $(".cart").removeClass("clickOn");
    $(".login").removeClass("clickOn");
    $(".product0").removeClass("clickOnli");
    $(".product1").removeClass("clickOnli");
    $(".product2").removeClass("clickOnli");
    $(".product3").removeClass("clickOnli");
    $(".product4").removeClass("clickOnli");
    $(".product5").removeClass("clickOnli");
    $(".product6").removeClass("clickOnli");
    $(".product7").removeClass("clickOnli");
    $(".product8").removeClass("clickOnli");
    $(".product9").removeClass("clickOnli");
    $(".product10").removeClass("clickOnli");
    $(".product11").removeClass("clickOnli");
    $(".product12").removeClass("clickOnli")
    $(".product13").removeClass("clickOnli");
    $(".product14").removeClass("clickOnli");
    $(".product15").removeClass("clickOnli");
    $(".product15").removeClass("clickOnli");
    $(".support0").removeClass("clickOnli");
    $(".support1").removeClass("clickOnli");
    $(".support2").removeClass("clickOnli");
    $(".support3").removeClass("clickOnli");
    $(".support4").removeClass("clickOnli");
    document.getElementById("home_div_id").style.display = "none";
    document.getElementById("product_div_id").style.display = "none";
    document.getElementById("design_div_id").style.display = "none";
    document.getElementById("gallary_div_id").style.display = "none";
    document.getElementById("support_div_id").style.display = "none";
    document.getElementById("aboutUs_div_id").style.display = "none";
    document.getElementById("contact_div_id").style.display = "none";
    document.getElementById("login_div_id").style.display = "none";
    document.getElementById("register_div_id").style.display = "none";
    document.getElementById("cart_div_id").style.display = "none";
    document.getElementById("product_div_id_1").style.display = "none";
    document.getElementById("product_div_id_2").style.display = "none";
    document.getElementById("product_div_id_3").style.display = "none";
    document.getElementById("product_div_id_4").style.display = "none";
    document.getElementById("product_div_id_5").style.display = "none";
    document.getElementById("product_div_id_6").style.display = "none";
    document.getElementById("product_div_id_7").style.display = "none";
    document.getElementById("product_div_id_8").style.display = "none";
    document.getElementById("product_div_id_9").style.display = "none";
    document.getElementById("product_div_id_10").style.display = "none";
    document.getElementById("product_div_id_11").style.display = "none";
    document.getElementById("product_div_id_12").style.display = "none";
    document.getElementById("product_div_id_13").style.display = "none";
    document.getElementById("product_div_id_14").style.display = "none";
    document.getElementById("product_div_id_15").style.display = "none";
    document.getElementById("product_div_id_16").style.display = "none";
    document.getElementById("login_div_forgetpasswd_id").style.display = "none";
    document.getElementById("terms_div_id").style.display = "none";
    document.getElementById("privacy_div_id").style.display = "none";
    document.getElementById("sample_div_id").style.display = "none";
    document.getElementById("orderprocess_div_id").style.display = "none";
    document.getElementById("delivery_div_id").style.display = "none";
    document.getElementById("file_guidelines_div_id").style.display = "none";
    document.getElementById("a4dl_id").style.display = "none";
    document.getElementById("a3a4_id").style.display = "none";
    document.getElementById("a4a5_id").style.display = "none";
    document.getElementById("flyerlearnmore_div_id").style.display = "none";
    document.getElementById("posterlearnmore_div_id").style.display = "none";
    document.getElementById("postercardlearnmore_div_id").style.display = "none";
    document.getElementById("displayBox_id").style.display = "block";

}
function showHeaderPage(headerName) {
    reset();
    switch (headerName) {
        //product
        case 0:
            $(".home").addClass("clickOn");
            document.getElementById("home_div_id").style.display = "block";
            break;
        // case 1:
        //     $(".product").addClass("clickOn");
        //     document.getElementById("product_div_id").style.display = "block";
        //     break;
        case 2:
            $(".design").addClass("clickOn");
            document.getElementById("design_div_id").style.display = "block";
            break;
        case 3:
            $(".gallary").addClass("clickOn");
            document.getElementById("displayBox_id").style.display = "none";
            document.getElementById("gallary_div_id").style.display = "block";
            break;
        case 4:
            $(".support").addClass("clickOn");
            $(".support4").addClass("clickOnli");
            document.getElementById("support_div_id").style.display = "block";
            break;
        case 5:
            $(".aboutUs").addClass("clickOn");
            document.getElementById("aboutUs_div_id").style.display = "block";
            break;
        case 6:
            $(".contact").addClass("clickOn");
            document.getElementById("contact_div_id").style.display = "block";
            break;
        case 7:
            $(".cart").addClass("clickOn");
            document.getElementById("cart_div_id").style.display = "block";
            break;
        case 8:
            var storage=window.localStorage;
            var login =storage.login;
            if (login == "login"){
                var usertype = storage.usertype;
                var username = storage.username;
                document.getElementById("homepage_div_id").style.display = "none";
                if(usertype == '1'){
                    document.getElementById("dashboard_admin_div_id").style.display = "block";
                }
                else{
                    document.getElementById("dashboard_user_div_id").style.display = "block";
                }
            }else
            {
                $(".login").addClass("clickOn");
                document.getElementById("login_div_id").style.display = "block";
            }
            break;
        case 9:
            var storage=window.localStorage;
            var login =storage.login;
            if (login == "login"){
                window.localStorage.setItem('login', "logout");
                $(".home").addClass("clickOn");
                document.getElementById("home_div_id").style.display = "block";
                $("#login_id").html('login');
                $("#register_id").html('register');
            }
            else{
                $(".register").addClass("clickOn");
                document.getElementById("register_div_id").style.display = "block";
            }
            break;


        default :
            break;
        case 10:
            $(".login").addClass("clickOn");
            document.getElementById("login_div_forgetpasswd_id").style.display = "block";
            break;
        case 11:
            document.getElementById("terms_div_id").style.display = "block";
            break;
        case 12:
            document.getElementById("privacy_div_id").style.display = "block";
            break;
        case 13:
            $(".support3").addClass("clickOnli");
            $(".support").addClass("clickOn");
            document.getElementById("sample_div_id").style.display = "block";
            break;
        case 14:
            $(".support0").addClass("clickOnli");
            $(".support").addClass("clickOn");
            document.getElementById("orderprocess_div_id").style.display = "block";
            break;
        case 15:
            $(".support1").addClass("clickOnli");
            $(".support").addClass("clickOn");
            document.getElementById("delivery_div_id").style.display = "block";
            break;
        case 16:
            $(".support2").addClass("clickOnli");
            $(".support").addClass("clickOn");
            document.getElementById("file_guidelines_div_id").style.display = "block";
            break;
    }

}
function beforeInitPage() {
    switch (window.location.pathname) {
        case "/home":
            showHeaderPage(0);
            break;
        case "/design":
            showHeaderPage(2);
            break;
        case "/gallary":
            showHeaderPage(3);
            break;
        case "/support":
            showHeaderPage(4);
            break;
        case "/aboutUs":
            showHeaderPage(5);
            break;
        case "/contact":
            showHeaderPage(6);
            break;
        case "/cart":
            showHeaderPage(7);
            break;
        case "/login":
            showHeaderPage(8);
            break;
        case "/register":
            showHeaderPage(9);
            break;
        case "/product/booklets":
            showProductPage(0);
            break;
        case "/product/brochures":
            showProductPage(1);
            break;
        case "/product/businessCards":
            showProductPage(2);
            break;
        case "/product/deskpadsNotepads":
            showProductPage(3);
            break;
        case "/product/directMarketing":
            showProductPage(4);
            break;
        case "/product/docketBooks":
            showProductPage(5);
            break;
        case "/product/envelopes":
            showProductPage(6);
            break;
        case "/product/expressPrinting":
            showProductPage(7);
            break;
        case "/product/flyers":
            showProductPage(8);
            break;
        case "/product/fridgeMagnets":
            showProductPage(9);
            break;
        case "/product/letterheads":
            showProductPage(10);
            break;
        case "/product/postcards":
            showProductPage(11);
            break;
        case "/product/posters":
            showProductPage(12);
            break;
        case "/product/presentationFolders":
            showProductPage(13);
            break;
        case "/product/withCompliments":
            showProductPage(14);
            break;
        case "/product/websiteDesign":
            showProductPage(15);
            break;
        case "/terms":
            showHeaderPage(11);
            break;
        case "/privacy":
            showHeaderPage(12);
            break;
        case "/sample":
            showHeaderPage(13);
            break;
        case "/orderprocess":
            showHeaderPage(14);
            break;
        case "/delivery":
            showHeaderPage(15);
            break;
        case "/fileGuidelines":
            showHeaderPage(16);
            break;
        case "/product/brochures/a4-dl":
            showProductPage(16);
            break;

        case "/product/brochures/a4-a5":
            showProductPage(18);
            break;

        case "/product/brochures/a3-a4":
            showProductPage(17);
            break;
        case "/product/flyers/learnmore":
            showProductPage(19);
            break;
        case "/product/posters/learnmore":
            showProductPage(20);
            break;
        case "/product/postcards/learnmore":
            showProductPage(21);
            break;
            
    }
}

function footerPosition(){
        $("footer").removeClass("fixed-bottom");
        var contentHeight = document.body.scrollHeight,//网页正文全文高度
            winHeight = window.innerHeight;//可视窗口高度，不包括浏览器顶部工具栏
        if(!(contentHeight > winHeight)){
            //当网页正文高度小于可视窗口高度时，为footer添加类fixed-bottom
            $("footer").addClass("fixed-bottom");
        }
}

//user login  need to move to a new file
function userLogin(){
    if ($('.login_div_un').val() == "" || $('.login_div_pass').val() == "") {
        alert("username or password can't be space");
    } else {
        let logininfo = {"username":'',"password":''};
        logininfo.username = $('.login_div_un').val();
        logininfo.password = $('.login_div_pass').val();

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "POST",
            url: "api/userLogin",
            dataType:'json',
            data:
                    {
                        'username':logininfo.username,
                        'password':logininfo.password
                    },
            success: function (msg) {
                if (msg.logincheck == "success") {
                    window.localStorage.setItem('username', msg.username);
                    window.localStorage.setItem('usertype', msg.type);
                    window.localStorage.setItem('login', "login");
                    var storage=window.localStorage;
                    var usertype = storage.usertype;
                    let msgd = msg;
                    document.getElementById("homepage_div_id").style.display = "none";
                    //console.log(msgd);
                    if(usertype == "1"){
                        initDashboard(msg);
                        document.getElementById("dashboard_admin_div_id").style.display = "block";}
                    else{
                        initDashboard(msg);
                        document.getElementById("dashboard_user_div_id").style.display = "block";
                    }

                }else if (msg.logincheck == false) {
                    alert("username or password is wrong");
                }else {
                    alert("unknow error");
                }
            },
            error: function (XMLHttpRequest, textStatus, thrownError) {
            }
        });
    }
    let test = 1;
}

//user register need to move to a new file

function userRegister() {
    clearMsg();

    //get data
    let date = new Date();
    let seperator1 = "-";
    let year = date.getFullYear();
    let month = date.getMonth() + 1;
    let strDate = date.getDate();
    if (month >= 1 && month <= 9) {
        month = "0" + month;
    }
    if (strDate >= 0 && strDate <= 9) {
        strDate = "0" + strDate;
    }
    var currentdate = year + seperator1 + month + seperator1 + strDate;


    var regExp = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
    let register = {
        "userName":$(".register_div_form_input").eq(0).val(),
        "businessName":$(".register_div_form_input").eq(1).val(),
        "firstName":$(".register_div_form_input").eq(2).val(),
        "lastName":$(".register_div_form_input").eq(3).val(),
        "email":$(".register_div_form_input").eq(4).val(),
        "password":$(".register_div_form_input").eq(5).val(),
        'phoneNumber':$(".register_div_form_input").eq(6).val(),
        'address':$(".register_div_form_input").eq(7).val(),
        'subrub':$(".register_div_form_input").eq(8).val(),
        'state':$(".register_div_form_input").eq(9).val(),
        'country':'Australia',
        'postcode':$(".register_div_form_input").eq(11).val(),
        'registerDdata':currentdate
    };

    if(register.userName == null || register.userName ==""){
        document.getElementById('usernamecheckmsg').innerHTML='Please enter your username';
    }else if(register.email == null || register.email ==""){
        document.getElementById('emailcheckmsg').innerHTML='Please enter your email';
    }else if(!regExp.test(register.email)){
        document.getElementById('emailcheckmsg').innerHTML='Email Address must be valid';
    }else if(register.password == null || register.password ==""|| register.password.length < 8){
        document.getElementById('passwdcheckmsg').innerHTML='Password must be at least 8 characters long';
    }else if(register.phoneNumber == null || register.phoneNumber =="" || register.phoneNumber.length != 10){
        document.getElementById('phonenumcheckmsg').innerHTML='Please enter your phonenumber, should be in 10 numbers';
    }else if(register.address == null || register.address ==""){
        document.getElementById('addresscheckmsg').innerHTML='Please enter your address';
    }else if(register.subrub == null || register.subrub ==""){
        document.getElementById('suburbcheckmsg').innerHTML='Please enter your suburb';
    }else if(register.state == null || register.state ==""){
        document.getElementById('statecheckmsg').innerHTML='Please enter your state';
    }else if(register.postcode == null || register.postcode ==""){
        document.getElementById('postcodecheckmsg').innerHTML='Please enter your postcode';
    }else{
        $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: "POST",
        url: "api/userRegister",
        dataType:'json',
        data: register,
        success: function (msg) {
            if (msg == "success") {
                alert("register success")
            }else if (msg == "repeat") {
                alert("the username is used by others");
            }else {
                alert("unknow error");
            }
        },
        error: function (XMLHttpRequest, textStatus, thrownError) {
        }
    });
    }

}

function clearMsg() {
    document.getElementById('usernamecheckmsg').innerHTML='';

    document.getElementById('emailcheckmsg').innerHTML='';

    document.getElementById('passwdcheckmsg').innerHTML='';

    document.getElementById('phonenumcheckmsg').innerHTML='';

    document.getElementById('addresscheckmsg').innerHTML='';

    document.getElementById('suburbcheckmsg').innerHTML='';

    document.getElementById('statecheckmsg').innerHTML='';

    document.getElementById('postcodecheckmsg').innerHTML='';
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

