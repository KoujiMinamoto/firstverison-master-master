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

}

function clickHeader(headerName) {
    reset();
    switch (headerName) {
        //product
        case 0:
            $(".home").addClass("clickOn");
            document.getElementById("home_div_id").style.display = "block";
            linkTo('home');
            break;
        // case 1:
        //     $(".product").addClass("clickOn");
        //     document.getElementById("product_div_id").style.display = "block";
        //     break;
        case 2:
            $(".design").addClass("clickOn");
            document.getElementById("design_div_id").style.display = "block";
            linkTo('design');
            break;
        case 3:

            $(".gallary").addClass("clickOn");
            document.getElementById("displayBox_id").style.display = "none";
            document.getElementById("gallary_div_id").style.display = "block";
            linkTo('gallary');
            break;
        case 4:
            $(".support").addClass("clickOn");
            document.getElementById("support_div_id").style.display = "block";
            linkTo('support');
            break;
        case 5:
            $(".aboutUs").addClass("clickOn");
            document.getElementById("aboutUs_div_id").style.display = "block";
            linkTo('aboutUs');
            break;
        case 6:
            $(".contact").addClass("clickOn");
            document.getElementById("contact_div_id").style.display = "block";
            linkTo('contact');
            break;
        case 7:
            $(".cart").addClass("clickOn");
            document.getElementById("cart_div_id").style.display = "block";
            linkTo('cart');
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
            linkTo('login');
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
            linkTo('register');
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
            document.getElementById("sample_div_id").style.display = "block";
            break;
        case 14:
            document.getElementById("orderprocess_div_id").style.display = "block";
            break;
        case 15:
            document.getElementById("delivery_div_id").style.display = "block";
            break;
        case 16:
            document.getElementById("file_guidelines_div_id").style.display = "block";
            break;
    }

}
function reset() {
    topFunction();
    $(".home").removeClass("clickOn");
    $(".product").removeClass("clickOn");
    $(".design").removeClass("clickOn");
    $(".product").removeClass("clickOn");
    $(".gallary").removeClass("clickOn");
    $(".product").removeClass("clickOn");
    $(".support").removeClass("clickOn");
    $(".product").removeClass("clickOn");
    $(".aboutUs").removeClass("clickOn");
    $(".product").removeClass("clickOn");
    $(".contact").removeClass("clickOn");
    $(".cart").removeClass("clickOn");
    $(".login").removeClass("clickOn");
    $(".register").removeClass("clickOn");
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
    document.getElementById("displayBox_id").style.display = "block";

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

