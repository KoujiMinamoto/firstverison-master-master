<!DOCTYPE html>
<html>
<head>
    <link rel="styleSheet" href="{{URL::asset('/css/error.css') }}" type="text/css">
</head>
    <body>
    <div class="head">
        <a><span class="error_text" id="num">5</span> seconds back to homepage </a><br>
        <a onclick="clickToHome()">Click <span class="error_text" id="clickJump">here</span> to homepage</a>
    </div>
    <div class="error_box">
        <img class="error_img" src="{{URL::asset('/image/error.png')}}" style="margin: 0 auto">
    </div>
    </body>
</html>
<script>
    window.onload = function () {
        setInterval('countTime()',1000);
    }
    var time = 5;
    function countTime() {
        if(time>0){
            num.innerHTML = time--;
        }else{
            location='/home';
        }
    }

    function clickToHome() {
        location='/home';
    }
</script>
