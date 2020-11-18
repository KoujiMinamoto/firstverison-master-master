<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}">
<html>
<head>
    <link rel="styleSheet" href="{{URL::asset('/css/home.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/design.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/aboutus.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/register.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/login.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/contact.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/gallary.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/bootstrap.min.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/style.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/product.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/flaticon.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/gallary.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/cart.css') }}" type="text/css">
    <script type="text/javascript" src="{{URL::asset('/js/home.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/jquery-3.5.1.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/jquery-3.5.1.min.js') }}"></script>
    <script src="https://static.pdflibr.com/SuperSlide/2.1.3/jquery.SuperSlide.2.1.3.js"></script>
    <script type="text/javascript" src="{{URL::asset('/js/dashboard.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/profile.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/product.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/cart.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/product_const.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/productPrice.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/gallery.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/router.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/contactUs.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/sendEmail.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>

    <link rel="icon" href="{{URL::asset('/image/title_yellowpress.png') }} " type="image/x-icon">
    <link rel="shortcut icon" href="{{URL::asset('/image/title_yellowpress.png') }} " type="image/x-icon">
    <!-- <link rel="shortcut icon" href="./image/title_yellowpress.png" type="image/x-icon"> -->
    <script src="https://secure.ewaypayments.com/scripts/eCrypt.min.js"></script>

    <script src="https://unpkg.com/imask"></script>
</head>
<body onload="initPage()" style="display:none">
<!-- <div id="container"> -->
<div class="homepage" id="homepage_div_id" style="display:block">
    <!-- header -->
    <div class="header_background" id="header_id" style="box-shadow: 0px 1px 8px 2px #eee!important;">
    <div class="header" id="header_id">
        <div class="companyLogo" id="companyLogo_id">
            <img src="{{URL::asset('/image/logonew.png') }} " width=440px height=64% style="margin-left: -25px;margin-top: 15px;">
        </div>
        <div class="home clickOn" id="home_id" onclick="clickHeader(0)">
            <p>home</p>
        </div>
        <div class="product" id="product_id">
            <p>product</p>
            <ul id="product_ul">
                <li class="product7" onclick="clickProduct(7)" id="product7_id">&nbsp;&nbsp;&nbsp;<a>Banner</a></li>
                <li class="product2" onclick="clickProduct(2)" id="product2_id">&nbsp;&nbsp;&nbsp;<a>Business Cards</a></li>
                <li class="product0" onclick="clickProduct(0)" id="product0_id">&nbsp;&nbsp;&nbsp;<a>Booklets</a></li>
                <li class="product14" onclick="clickProduct(14)" id="product14_id">&nbsp;&nbsp;&nbsp;<a>DL Compliments</a></li>
                <li class="product6" onclick="clickProduct(6)" id="product6_id">&nbsp;&nbsp;&nbsp;<a>Envelopes</a></li>
                <li class="product8" onclick="clickProduct(8)" id="product8_id">&nbsp;&nbsp;&nbsp;<a>Flyers</a></li>
                <li class="product1" onclick="clickProduct(1)" id="product1_id">&nbsp;&nbsp;&nbsp;<a>Folded Brochures</a></li>
{{--                <li class="product13" onclick="clickProduct(13)" id="product13_id">&nbsp;&nbsp;&nbsp;<a>Presentation Folders</a></li>--}}
                <li class="product10" onclick="clickProduct(10)" id="product10_id">&nbsp;&nbsp;&nbsp;<a>Letterheads</a></li>
                <li class="product11" onclick="clickProduct(11)" id="product11_id">&nbsp;&nbsp;&nbsp;<a>Postcards</a></li>
                <li class="product12" onclick="clickProduct(12)" id="product12_id">&nbsp;&nbsp;&nbsp;<a>Posters</a></li>
                {{--                <li class="product3" onclick="clickProduct(3)" id="product3_id">&nbsp;&nbsp;&nbsp;<a>Deskpads / Notepads</a></li>--}}
{{--                <li class="product4" onclick="clickProduct(4)" id="product4_id">&nbsp;&nbsp;&nbsp;<a>Direct Marketing</a></li>--}}
                <li class="product5" onclick="clickProduct(5)" id="product5_id">&nbsp;&nbsp;&nbsp;<a>Signage</a></li>
{{--                <li class="product9" onclick="clickProduct(9)" id="product9_id">&nbsp;&nbsp;&nbsp;<a>Fridge Magnets</a></li>--}}
{{--                <li class="product15" onclick="clickProduct(15)" id="product15_id">&nbsp;&nbsp;&nbsp;<a>Website Design</a></li>--}}
            </ul>
        </div>
        <div class="design" id="design_id" onclick="clickHeader(2)">
            <p>design</p>
            <!-- <ul id="design_ul">
                        <li>&nbsp;&nbsp;Logo Design</li>
                        <li>&nbsp;&nbsp;Brochure Design</li>
                        <li>&nbsp;&nbsp;Flyer Design</li>
                        <li>&nbsp;&nbsp;Signage Design</li>
                        <li>&nbsp;&nbsp;Company Stationary Design</li>
                        <li>&nbsp;&nbsp;Company Catalogue Design</li>
                        <li>&nbsp;&nbsp;Presentation Folder</li>
                        <li>&nbsp;&nbsp;more</li>
                    </ul> -- Kinds of Office>
        </div>
        <div class="gallary" id="gallary_id" onclick="clickHeader(3)">
            <p>gallary</p>
            <!-- <ul id="gallary_ul">
                        <li>&nbsp;&nbsp;gallary1</li>
                        <li>&nbsp;&nbsp;gallary2</li>
                        <li>&nbsp;&nbsp;gallary3</li>
                    </ul> -->
        </div>
        <div class="gallary" id="gallary_id" onclick="clickHeader(3)"><p>gallary</p></div>
        <div class="support" id="support_id">
            <p>support</p>
            <ul id="support_ul" style="left:84.6rem">
                <li class="support0" onclick="clickHeader(14)" id="support0_id">&nbsp;&nbsp;&nbsp;<a>Order Process</a></li>
{{--                <li class="support1" onclick="clickHeader(15)" id="support1_id">&nbsp;&nbsp;&nbsp;<a>Delivery</a></li>--}}
{{--                <li class="support2" onclick="clickHeader(16)" id="support2_id">&nbsp;&nbsp;&nbsp;<a>File Guidelines</a></li>--}}
{{--                <li class="support3" onclick="clickHeader(13)" id="support3_id">&nbsp;&nbsp;&nbsp;<a>Sample Pack</a></li>--}}
{{--                <li class="support4" onclick="clickHeader(4)" id="support4_id">&nbsp;&nbsp;&nbsp;<a>FAQ</a></li>--}}
{{--                <li class="support5" onclick="clickHeader(17)" id="support5_id">&nbsp;&nbsp;&nbsp;<a>Pre-flight Checks</a></li>--}}
                <li class="support6" onclick="clickHeader(18)" id="support6_id">&nbsp;&nbsp;&nbsp;<a>Colour Critical</a></li>
            </ul>
        </div>
        <div class="aboutUs" id="aboutUs_id" onclick="clickHeader(5)"><p>about us</p></div>
        <div class="contact" id="contact_id" onclick="clickHeader(6)"><p>contact</p></div>
        <div class="cart" id="cart_id" onclick="clickHeader(7)"><p>cart</p><div class="checkbutton" id="checkbutton_id"></div></div>
        <div class="login" id="login_id" onclick="clickHeader(8)"><p>login</p></div>
        <div class="register" id="register_id" onclick="clickHeader(9)"><p>register</p></div>
    </div>
    <!-- <div id="header_shadow" style="display: block;"></div> -->
    </div>



    <!-- diaplayBox -->
    <div class="displayBox" id="displayBox_id">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">


            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" >
                    <span class= "c-banner" style="display:inline-block;">
                        <p style="font-size:42px; color: #fff; margin-bottom: 20px;">premium<br style="">business cards</p>
                        <ul style="font-size:23px; color:#fff; line-height:28px;">
                            <li style="list-style-type:disc;">400gsm premium artboard</li>
                            <li style="list-style-type:disc;">full colour printing 2 sides</li>
                            <li style="list-style-type:disc;">matt lamination 2 sides</li>
                        </ul>
                        <div style="margin-top: 20px;">
                            <div style="display:inline-block; overflow: hidden; border-right: 1px solid #29ABE2; width: 90px; min-height: 60px;">
                                <p style="font-size:21px; color: #fff;">250</p>
                                <p style="font-size:42px; color: #fff; line-height: 35px; letter-spacing: -2px; margin-bottom:15px">$65</p>
                            </div>
                            <div style="display:inline-block; overflow: hidden; border-right: 1px solid #29ABE2; width: 90px; min-height: 60px;">
                                <p style="font-size:21px; color: #fff;">500</p>
                                <p style="font-size:42px; color: #fff; line-height: 35px; letter-spacing: -2px; margin-bottom:15px">$69</p>
                            </div>
                            <div style="display:inline-block; overflow: hidden; width: 90px; min-height: 60px;">
                                <p style="font-size:21px; color: #fff;">1000</p>
                                <p style="font-size:42px; color: #fff; line-height: 35px; letter-spacing: -2px; margin-bottom:15px">$74</p>
                            </div>
                        </div>

                        <!-- <p style="font-size:42px; color: #323232; line-height: 45px; letter-spacing: -2px; margin-bottom:15px">250 $65<br/>500 $69<br/>1000 $75</p> -->

                        <p style="margin-top:15px; margin-left:10px">
                            <span class="button_click_here" href="/product/businessCards">
                                <span style="color:#fff">click here</span>
                            </span>
                        </p>
                    </span>

                    <img src="{{URL::asset('/image/1.jpg') }}" alt="Los Angeles" style="width:100%;">
                </div>

                <div class="carousel-item">
                    <span class= "c-banner" style="display:inline-block;">
                        <p style="font-size:42px; color: #fff; margin-bottom: 20px;">premium<br style="">business cards</p>
                        <ul style="font-size:23px; color:#fff; line-height:28px;">
                            <li style="list-style-type:disc;">400gsm premium artboard</li>
                            <li style="list-style-type:disc;">full colour printing 2 sides</li>
                            <li style="list-style-type:disc;">matt lamination 2 sides</li>
                        </ul>
                        <div style="margin-top: 20px;">
                            <div style="display:inline-block; overflow: hidden; border-right: 1px solid #29ABE2; width: 90px; min-height: 60px;">
                                <p style="font-size:21px; color: #fff;">250</p>
                                <p style="font-size:42px; color: #fff; line-height: 35px; letter-spacing: -2px; margin-bottom:15px">$65</p>
                            </div>
                            <div style="display:inline-block; overflow: hidden; border-right: 1px solid #29ABE2; width: 90px; min-height: 60px;">
                                <p style="font-size:21px; color: #fff;">500</p>
                                <p style="font-size:42px; color: #fff; line-height: 35px; letter-spacing: -2px; margin-bottom:15px">$69</p>
                            </div>
                            <div style="display:inline-block; overflow: hidden; width: 90px; min-height: 60px;">
                                <p style="font-size:21px; color: #fff;">1000</p>
                                <p style="font-size:42px; color: #fff; line-height: 35px; letter-spacing: -2px; margin-bottom:15px">$74</p>
                            </div>
                        </div>

                        <!-- <p style="font-size:42px; color: #323232; line-height: 45px; letter-spacing: -2px; margin-bottom:15px">250 $65<br/>500 $69<br/>1000 $75</p> -->

                        <p style="margin-top:15px; margin-left:10px">
                            <span class="button_click_here" href="/product/businessCards">
                                <span style="color:#fff">click here</span>
                            </span>
                        </p>
                    </span>
                    <img src="{{URL::asset('/image/2.jpg') }}" alt="Chicago" style="width:100%;">
                </div>

                <div class="carousel-item">
                <span class= "c-banner" style="display:inline-block;">
                        <p style="font-size:42px; color: #fff; margin-bottom: 20px;">premium<br style="">business cards</p>
                        <ul style="font-size:23px; color:#fff; line-height:28px;">
                            <li style="list-style-type:disc;">400gsm premium artboard</li>
                            <li style="list-style-type:disc;">full colour printing 2 sides</li>
                            <li style="list-style-type:disc;">matt lamination 2 sides</li>
                        </ul>
                        <div style="margin-top: 20px;">
                            <div style="display:inline-block; overflow: hidden; border-right: 1px solid #29ABE2; width: 90px; min-height: 60px;">
                                <p style="font-size:21px; color: #fff;">250</p>
                                <p style="font-size:42px; color: #fff; line-height: 35px; letter-spacing: -2px; margin-bottom:15px">$65</p>
                            </div>
                            <div style="display:inline-block; overflow: hidden; border-right: 1px solid #29ABE2; width: 90px; min-height: 60px;">
                                <p style="font-size:21px; color: #fff;">500</p>
                                <p style="font-size:42px; color: #fff; line-height: 35px; letter-spacing: -2px; margin-bottom:15px">$69</p>
                            </div>
                            <div style="display:inline-block; overflow: hidden; width: 90px; min-height: 60px;">
                                <p style="font-size:21px; color: #fff;">1000</p>
                                <p style="font-size:42px; color: #fff; line-height: 35px; letter-spacing: -2px; margin-bottom:15px">$74</p>
                            </div>
                        </div>

                        <!-- <p style="font-size:42px; color: #323232; line-height: 45px; letter-spacing: -2px; margin-bottom:15px">250 $65<br/>500 $69<br/>1000 $75</p> -->

                        <p style="margin-top:15px; margin-left:10px">
                            <span class="button_click_here" href="/product/businessCards">
                                <span style="color:#fff">click here</span>
                            </span>
                        </p>
                    </span>
                    <img src="{{URL::asset('/image/gallery/pc1.jpg') }}" alt="New york" style="width:100%;">
                </div>

                <div class="carousel-item">
                <span class= "c-banner" style="display:inline-block; padding-left: 76%; ">
                        <p style="font-size:42px; color: #fff; margin-bottom: 20px;">premium<br style="">business cards</p>
                        <ul style="font-size:23px; color:#fff; line-height:28px;">
                            <li style="list-style-type:disc;">400gsm premium artboard</li>
                            <li style="list-style-type:disc;">full colour printing 2 sides</li>
                            <li style="list-style-type:disc;">matt lamination 2 sides</li>
                        </ul>
                        <div style="margin-top: 20px;">
                            <div style="display:inline-block; overflow: hidden; border-right: 1px solid #29ABE2; width: 90px; min-height: 60px;">
                                <p style="font-size:21px; color: #fff;">250</p>
                                <p style="font-size:42px; color: #fff; line-height: 35px; letter-spacing: -2px; margin-bottom:15px">$65</p>
                            </div>
                            <div style="display:inline-block; overflow: hidden; border-right: 1px solid #29ABE2; width: 90px; min-height: 60px;">
                                <p style="font-size:21px; color: #fff;">500</p>
                                <p style="font-size:42px; color: #fff; line-height: 35px; letter-spacing: -2px; margin-bottom:15px">$69</p>
                            </div>
                            <div style="display:inline-block; overflow: hidden; width: 90px; min-height: 60px;">
                                <p style="font-size:21px; color: #fff;">1000</p>
                                <p style="font-size:42px; color: #fff; line-height: 35px; letter-spacing: -2px; margin-bottom:15px">$74</p>
                            </div>
                        </div>

                        <!-- <p style="font-size:42px; color: #323232; line-height: 45px; letter-spacing: -2px; margin-bottom:15px">250 $65<br/>500 $69<br/>1000 $75</p> -->

                        <p style="margin-top:15px; margin-left:10px">
                            <span class="button_click_here" href="/product/businessCards">
                                <span style="color:#fff">click here</span>
                            </span>
                        </p>
                    </span>
                    <img src="{{URL::asset('/image/gallery/test23.jpg') }}" alt="New york" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->

        </div>


    </div>
    <div class="slider-controls">
            <button type="button" class="displayBox_next" onclick="$('#myCarousel').carousel('next')"><i class="fas fa-chevron-right"></i></button>
            <button type="button" class="displayBox_previous" onclick="$('#myCarousel').carousel('prev')"><i class="fas fa-chevron-left"></i></button>
    </div>

    <div class="home_background">
    <!-- home container -->
    <!-- home -->

    <div class="home_div" id="home_div_id" style="display:block">

        <div class="home_icon_holder">
            <div class="booklets_holder home_menu">
                <a  href="javascript:void(0);" onclick="clickProduct(7)" title="Online Booklet Printing Services">
                    <div class="home_panel_img booklets_img"></div>
                    Banner
                </a>
            </div>


            <div class="brochures_holder home_menu">
                <a href="javascript:void(0);" onclick="clickProduct(2)" title="Online Business Cards Printing Services">
                    <div class="home_panel_img brochures_img"></div>
                    Business Cards
                </a>
            </div>

            <div class="business_cards_holder home_menu">
                <a href="javascript:void(0);" onclick="clickProduct(0)" title="Online DL Compliment Printing Services">
                    <div class="home_panel_img business_cards_img"></div>
                    DL Compliment
                </a>
            </div>

{{--            <div class="notepads_holder home_menu">--}}
{{--                <a href="javascript:void(0);" onclick="clickProduct(3)" title="Online Notepad Printing Services">--}}
{{--                    <div class="home_panel_img notepads_img"></div>--}}
{{--                    Deskpads / Notepads--}}
{{--                </a>--}}
{{--            </div>--}}
            <div class="envelopes_holder home_menu">
                <a href="javascript:void(0);" onclick="clickProduct(6)" title="Online Envelope Printing Services">
                    <div class="home_panel_img envelopes_img"></div>
                    Envelopes
                </a>
            </div>
            <div class="flyers_holder home_menu">
                <a href="javascript:void(0);" onclick="clickProduct(8)" title="Online Flyer Printing Services">
                    <div class="home_panel_img flyers_img"></div>
                    Flyers
                </a>
            </div>

            <div class="docketbooks_holder home_menu">
                <a href="javascript:void(0);" onclick="clickProduct(1)" title="Online Brochures Printing Services">
                    <div class="home_panel_img docketbooks_img"></div>
                    Folded Brochures
                </a>
            </div>
{{--            <div class="magnets_holder home_menu">--}}
{{--                <a href="javascript:void(0);" onclick="clickProduct(9)" title="Buy Fridge Magnets Online">--}}
{{--                    <div class="home_panel_img magnets_img"></div>--}}
{{--                    Fridge Magnets--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="presentation_folders_holder home_menu">--}}
{{--                <a href="javascript:void(0);" onclick="clickProduct(13)" title="Online Presentation Folder">--}}
{{--                    <div class="home_panel_img presentation_folders_img"></div>--}}
{{--                    Presentation Folders--}}
{{--                </a>--}}
{{--            </div>--}}
            <div class="letterheads_holder home_menu">
                <a href="javascript:void(0);" onclick="clickProduct(10)" title="Online Letterhead Printing Services">
                    <div class="home_panel_img letterheads_img"></div>
                    Letterheads
                </a>
            </div>
            <div class="postcards_holder home_menu">
                <a href="javascript:void(0);" onclick="clickProduct(11)" title="Online Postcard Printing Services">
                    <div class="home_panel_img postcards_img"></div>
                    Postcards
                </a>
            </div>
            <div class="posters_holder home_menu">
                <a href="javascript:void(0);" onclick="clickProduct(12)" title="Online Poster Printing Services">
                    <div class="home_panel_img posters_img"></div>
                    Posters
                </a>
            </div>
            <div class="with_comps_holder home_menu">
                <a href="javascript:void(0);" onclick="clickProduct(5)" title="Online Poster Printing Services">
                    <div class="home_panel_img with_comps_img"></div>
                    Signage
                </a>
            </div>
{{--            <div class="with_comps_holder home_menu">--}}
{{--                <a href="javascript:void(0);" onclick="clickProduct(14)">--}}
{{--                    <div class="home_panel_img with_comps_img"></div>--}}
{{--                    With Compliments--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="web_design_holder home_menu">--}}
{{--                <a href="javascript:void(0);" onclick="clickProduct(15)">--}}
{{--                    <div class="home_panel_img web_design_img"></div>--}}
{{--                    Website Design--}}
{{--                </a>--}}
{{--            </div>--}}

            <div style="clear: both;"></div>
        </div>
        {{-- <div class="home_content_left">
                    <div class="home_img_place">
                        <div class="home_img_1">
                            <img src="{{URL::asset('/image/Home2.jpg') }} " width=100% height=100%>
                        </div>
                        <div class="home_img_2">
                            <img src="{{URL::asset('/image/Home3.jpg') }} " width=100% height=100%>
                        </div>
                        <div class="home_img_3">
                            <img src="{{URL::asset('/image/Home4.jpg') }} " width=100% height=100%>
                        </div>
                        <div class="home_img_4">
                            <img src="{{URL::asset('/image/Home5.jpg') }} " width=100% height=100%>
                        </div>
                    </div>
                </div>
                <div class="home_content_right">
                    <p class="home_content_p1">Yellow Star Press offers full colour offset printing and short run digital printing service for those urgent jobs.</p>
                    <p class="home_content_p2">You send it, We Print It. It's That Easy!</p>
                    <p >Our printing service is of the highest quality, at the lowest possible price.</p>
                    <p >Design your own graphics and send the file to us ordering process. Our printing services are the </p>
                    <p >21st century way of producing customised business stationary at reduced cost.</p>
                </div> --}}
        <div class="home_content_holder">
            <div class="home_content_left">
                <h1 class="hp_title">we deliver quality printing <br>at the lowest possible price.</h1>
                <p>Find the most cost effective solution for your business with our instant online pricing.</p>
                <p>&nbsp;</p>
                <p>Supply your print ready artwork and upload your file using our online ordering system. Alternatively,
                    call or email our friendly staff who can assist you with your order.</p>
                <span class="latest-articles">Latest Articles</span>
{{--                主页的latest article底下三个文章都删掉--}}
                <div class="blog_article">
                    <div class="blog_post_container">
                        <div class="blog_post_title">
                            <a href="">Christmas</a>
                        </div>
                        <div class="blog_post_content">
{{--                            <p>It’s often been speculated that eventually, computers will--}}
{{--                                replace the functions of paper stationary in the office. Whilst this prediction has--}}
{{--                                ce...</p>--}}
                        </div>
                        <div class="blog_post_view">
{{--                            <a href="">view post</a>--}}
                        </div>
                    </div>
{{--                    <div class="blog_post_container">--}}
{{--                        <div class="blog_post_title"><a--}}
{{--                                href="">Business--}}
{{--                                Card Etiquette: When And How To Hand Them Out</a></div>--}}
{{--                        <div class="blog_post_content"><p>For those who have had business cards for a while, the concept--}}
{{--                                of networking and distributing them is a no-brainer. But for those who are new to--}}
{{--                                th...</p></div>--}}
{{--                        <div class="blog_post_view"><a--}}
{{--                                href="">view--}}
{{--                                post</a></div>--}}
{{--                    </div>--}}
{{--                    <div class="blog_post_container">--}}
{{--                        <div class="blog_post_title"><a--}}
{{--                                href="">2018--}}
{{--                                Business Card Trends </a></div>--}}
{{--                        <div class="blog_post_content"><p>Looking to upgrade your business cards to something cutting--}}
{{--                                edge? Is it your first time printing business cards and your feeling a little lost--}}
{{--                                when...</p></div>--}}
{{--                        <div class="blog_post_view"><a--}}
{{--                                href="">view--}}
{{--                                post</a></div>--}}
{{--                    </div>--}}
{{--                    <div class="clear: both;"></div>--}}
                </div>
            </div>
            <div class="home_content_right">
                <div class="home_subtitle">an online store with a difference...</div>
                <div class="home_panel1">
                    <a href="javascript:void(0);" onclick="clickHeader(14)">
                        <div class="home_panel1_img">
                        </div>
                        <h4>Easy Ordering</h4>
                        <p>Shopping cart, email, FTP or Dropbox services available.</p>
                        <a class="blue_link" href="javascript:void(0);"
                        onclick="clickHeader(14)">read
                            more+</a>
                    </a>
                </div>
{{--                <div class="home_panel2">--}}
{{--                    <a href="javascript:void(0);" onclick="clickHeader(15)">--}}
{{--                        <div class="home_panel2_img">--}}
{{--                        </div>--}}
{{--                        <h4>Free Delivery</h4>--}}
{{--                        <p>Free delivery Australia wide for all products.</p>--}}
{{--                        <a class="blue_link" href="javascript:void(0);"--}}
{{--                        onclick="clickHeader(15)">read--}}
{{--                            more+</a>--}}
{{--                </div>--}}
{{--                <div class="home_panel3">--}}
{{--                    <a href="javascript:void(0);" onclick="clickHeader(4)">--}}
{{--                        <div class="home_panel3_img">--}}
{{--                        </div>--}}
{{--                        <h4>Need Help?</h4>--}}
{{--                        <p>Our friendly team is ready to offer you industry help or advice.</p>--}}
{{--                        <a class="blue_link" href="javascript:void(0);"--}}
{{--                        onclick="clickHeader(4)">read--}}
{{--                            more+</a>--}}
{{--                </div>--}}
                {{--                        <p class="home_content_p1">Yellow Star Press offers full colour offset printing and short run digital printing service for those urgent jobs.</p>--}}
                {{--                        <p class="home_content_p2">You send it, We Print It. It's That Easy!</p>--}}
                {{--                        <p >Our printing service is of the highest quality, at the lowest possible price.</p>--}}
                {{--                        <p >Design your own graphics and send the file to us ordering process. Our printing services are the </p>--}}
                {{--                        <p >21st century way of producing customised business stationary at reduced cost.</p>--}}
            </div>
            <div class="clear: both;"></div>
        </div>

        <div style="clear: both;"></div>
    </div>

    <!-- product -->
    <div class="product_div" id="product_div_id" style="display:none">
        <!-- shop-details-area -->
    {{-- <section class="shop-details-area pt-100 pb-100">
                    <div class="home_content_left">
                        <div class="product_div_display1">
                            <img src="{{URL::asset('/image/Product1.jpg') }} " width=70% height=50%>
                        </div>
                        <div class="product_div_display2">
                            <img src="{{URL::asset('/image/Product2.jpg') }} " width=70% height=50%>
                        </div>
                    </div>
                    <div class="home_content_right">
                        <div class="product_div_display1">
                            <div class="shop-details-content">
                                <h2>Book Design</h2>
                                <div class="shop-details-price">
                                    <h2>$290.00 <del>$490.00</del></h2>
                                </div>
                                <p>Design Book for your company</p>

                                <div class="perched-info">
                                    <a href="#" class="btn add-card-btn">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                        <div class="product_div_display3">
                            <div class="shop-details-content">
                                <h2>Invitation card Design</h2>
                                <div class="shop-details-price">
                                    <h2>$390.00 <del>$400.00</del></h2>
                                </div>
                                <p>Design Invitation card for your company</p>

                                <div class="perched-info">
                                    <a href="#" class="btn add-card-btn">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                </section> --}}
    <!-- shop-details-area-end -->
        <div class="product_div_main">
            <div class="product_div_first">
                <div class="product_div_img1">

                </div>
                <div class="product_div_message">
                    <div class="product_div_name">
                        <p class="product_name">CD Print1</p>
                        <p class="product_price">$300</p>
                        <div class="product_describe">
                            <div class="product_describe_message">
                                <p>Our booklets are produced on top-of-the-line offset and digital machines, ensuring
                                    you receive a quality product at the lowest possible price.</p>
                                <p>Our booklets can be printed on a range of paper weights (ranging from 80gsm -
                                    170gsm), as well as different paper sizes (A4, A5, A6, DL or a custom size).</p>
                            </div>
                        </div>
                    </div>
                    <div id="product_addCart1" onclick="addCard(1)">
                        <p>ADD TO CART</p>
                    </div>
                </div>
            </div>

            <div class="product_div_second">
                <div class="product_div_img2"></div>
                <div class="product_div_message">
                    <div class="product_div_name">
                        <p class="product_name">CD Print2</p>
                        <p class="product_price">$300</p>
                        <div class="product_describe">
                            <div class="product_describe_message">
                                <p>Here are some text to describe the product</p>
                                <p>Our booklets are produced on top-of-the-line offset and digital machines, ensuring
                                    you receive a quality product at the lowest possible price.</p>
                                <p>Our booklets can be printed on a range of paper weights (ranging from 80gsm -
                                    170gsm), as well as different paper sizes (A4, A5, A6, DL or a custom size).</p>
                            </div>
                        </div>
                    </div>
                    <div id="product_addCart2" onclick="addCard(2)">
                        <p>ADD TO CART</p>
                    </div>
                </div>
            </div>

            <div class="product_div_third">
                <div class="product_div_img3"></div>
                <div class="product_div_message">
                    <div class="product_div_name">
                        <p class="product_name">CD Print3</p>
                        <p class="product_price">$300</p>
                        <div class="product_describe">
                            <div class="product_describe_message">
                                <p>Here are some text to describe the product</p>
                                <p>Our booklets are produced on top-of-the-line offset and digital machines, ensuring
                                    you receive a quality product at the lowest possible price.</p>
                                <p>Our booklets can be printed on a range of paper weights (ranging from 80gsm -
                                    170gsm), as well as different paper sizes (A4, A5, A6, DL or a custom size).</p>
                            </div>
                        </div>
                    </div>
                    <div id="product_addCart3" onclick="addCard(3)">
                        <p>ADD TO CART</p>
                    </div>
                </div>
            </div>

            <div class="product_div_forth">
                <div class="product_div_img4"></div>
                <div class="product_div_message">
                    <div class="product_div_name">
                        <p class="product_name">CD Print4</p>
                        <p class="product_price">$300</p>
                        <div class="product_describe">
                            <div class="product_describe_message">
                                <p>Here are some text to describe the product</p>
                                <p>Our booklets are produced on top-of-the-line offset and digital machines, ensuring
                                    you receive a quality product at the lowest possible price.</p>
                                <p>Our booklets can be printed on a range of paper weights (ranging from 80gsm -
                                    170gsm), as well as different paper sizes (A4, A5, A6, DL or a custom size).</p>
                            </div>
                        </div>
                    </div>
                    <div id="product_addCart4" onclick="addCard(4)">
                        <p>ADD TO CART</p>
                    </div>
                </div>
            </div>

            <div class="product_div_fivth">
                <div class="product_div_img5"></div>
                <div class="product_div_message">
                    <div class="product_div_name">
                        <p class="product_name">CD Print5</p>
                        <p class="product_price">$300</p>
                        <div class="product_describe">
                            <div class="product_describe_message">
                                <p>Here are some text to describe the product</p>
                                <p>Our booklets are produced on top-of-the-line offset and digital machines, ensuring
                                    you receive a quality product at the lowest possible price.</p>
                                <p>Our booklets can be printed on a range of paper weights (ranging from 80gsm -
                                    170gsm), as well as different paper sizes (A4, A5, A6, DL or a custom size).</p>
                            </div>
                        </div>
                    </div>
                    <div id="product_addCart5" onclick="addCard(5)">
                        <p>ADD TO CART</p>
                    </div>
                </div>
            </div>

            <div style="clear:both"></div>


        </div>
        <div style="clear:both"></div>
    </div>

    <div class="product_div" id="product_div_id_1" style="display:none">
        <div class="text_holder">
            <div class="main_product_container booklet_holder">
                <div id="breadcrumbs">
                    You are here:
                    <span itemprop="breadcrumb" itemscope="itemscope" itemtype="http://schema.org/Breadcrumb">
                        <a href="/home" itemprop="url"><span itemprop="title">YellowStar Press</span></a>
                        »
                        <span itemprop="child" itemscope="itemscope" itemtype="http://schema.org/Breadcrumb">
                            <a href="/product/booklets" itemprop="url">
                                <span itemprop="title">
                                    Booklets Printing </span>
                            </a>
                        </span>
                    </span>
                </div>
                <div class="product_main_left">
                    <div class="product_main_left_left">
                        <h1>Online Booklets Printing</h1>
                        <h2>Promote your company's products and services with quality booklets.</h2>
                        <p>Our booklets are produced on top-of-the-line offset and digital machines, ensuring you
                            receive a quality product at the lowest possible price.
                        </p>
                        <p>&nbsp;</p>
                        <p>
                            Our booklets can be printed on a range of paper weights (ranging from 80gsm - 170gsm), as
                            well as different paper sizes (A4, A5, A6, DL or a custom size).
                        </p>
                        <p>&nbsp;</p>
                        <p>
                            Choose from three standard finishes on our booklets: Gloss, Matt and Uncoated.
                        </p>
                        <p>&nbsp;</p>
                        <p>
                            To further enhance the look and feel of your finished product, we also offer the option to
                            select a different paper weight or finish for your cover.
                        </p>
                        <p>&nbsp;</p>
                        <p>
                            A selection of additional options are also available to further enhance your booklet, call
                            us to discuss any further details or send a quote request using the form provided.</p>
                        </p>
                        <br/>
                        <div class="product_main_left_right">
                            <h4>Booklet Options</h4>
                            <div class="option_holder paper_option">
                                <div class="option_icon_holder"></div>
                                <div class="option_text_holder">
                                    <div class="option_heading">Paper</div>
                                    <ul>
                                        <li>Gloss, Matt or Bond stock</li>
                                        <li>Various weights ranging from 80-170gsm</li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="option_holder finish_option">
                                <div class="option_icon_holder"></div>
                                <div class="option_text_holder">
                                    <div class="option_heading">Finished Sizes</div>
                                    <ul>
                                        <li>DL, A6, A5, A4 and custom sizes</li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>


                        </div>



                    </div>
                    <div class="clear"></div>
                </div>
                <div class="product_main_right">
                    <div class="booklets_button_holder">

                        <div class="booklet-quote-left">
                            <h2><span>Request </span>a quote</h2>
                        </div>
                        <div class="booklet-quote-right">
                            <form method="post" name="customquotes" id="customquotes" enctype="multipart/form-data">
                                <div class="create-account-table3 quotes_table">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td colspan="2">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td style="padding-bottom:0" class="quote_list_table"
                                                            colspan="2">
                                                            <div id="custom_table">
                                                                <table width="100%">
                                                                    <tr>
                                                                        <td class="option_first_col">
                                                                            Finished Book Size
                                                                            <input type="hidden" value="49"
                                                                                   name="quote_fields[]"/>
                                                                            <input type="hidden"
                                                                                   value="Finished Book Size"
                                                                                   name="field_name_49"
                                                                                   id="field_name_49"/>
                                                                            <input type="hidden" value="49"
                                                                                   name="field_id_49" id="field_id_49"/>
                                                                        </td>
                                                                        <td class="option_second_col"><select
                                                                                style="width:100%;" name="field_49"
                                                                                id="booklets_size"
                                                                                >
                                                                                <option value="A4 210X297mm">A4
                                                                                    210X297mm
                                                                                </option>
                                                                                <option value="A5 148x210mm">A5
                                                                                    148x210mm
                                                                                </option>
                                                                                <option value="A6 105x148mm">A6
                                                                                    105x148mm
                                                                                </option>
                                                                                <option value="DL 99x210mm">DL
                                                                                    99x210mm
                                                                                </option>
                                                                                <option value="-1">Custom</option>
                                                                                <input type="hidden" value="49"
                                                                                       name="custom_field[]"/>
                                                                                <div class="extra_option">
                                                                                    <div id="div_custom_49"
                                                                                         style="display:none;"><input
                                                                                            type="text"
                                                                                            name="field_custom_49"
                                                                                            value=""
                                                                                            id="field_custom_49"
                                                                                            style="width:100%;"
                                                                                            maxlength="80"/></div>
                                                                                </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="option_first_col">
                                                                            Orientation
                                                                            <input type="hidden" value="50"
                                                                                   name="quote_fields[]"/>
                                                                            <input type="hidden" value="Orientation"
                                                                                   name="field_name_50"
                                                                                   id="field_name_50"/>
                                                                            <input type="hidden" value="50"
                                                                                   name="field_id_50" id="field_id_50"/>
                                                                        </td>
                                                                        <td class="option_second_col"><select
                                                                                style="width:100%;" name="field_50"
                                                                                id="booklets_orientation"
                                                                                >
                                                                                <option value="Portrait">Portrait
                                                                                </option>
                                                                                <option value="Landscape">Landscape
                                                                                </option>
                                                                                <input type="hidden" value="50"
                                                                                       name="custom_field[]"/>
                                                                                <div class="extra_option">
                                                                                    <div id="div_custom_50"
                                                                                         style="display:none;"><input
                                                                                            type="text"
                                                                                            name="field_custom_50"
                                                                                            value=""
                                                                                            id="field_custom_50"
                                                                                            style="width:100%;"
                                                                                            maxlength="80"/></div>
                                                                                </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="option_first_col">
                                                                            Internal Pages
                                                                            <input type="hidden" value="52"
                                                                                   name="quote_fields[]"/>
                                                                            <input type="hidden" value="Internal Pages"
                                                                                   name="field_name_52"
                                                                                   id="field_name_52"/>
                                                                            <input type="hidden" value="52"
                                                                                   name="field_id_52" id="field_id_52"/>
                                                                        </td>
                                                                        <td class="option_second_col"><select
                                                                                style="width:100%;" name="field_52"
                                                                                id="booklets_pages"
                                                                                >
                                                                                <option value="150gsm Gloss">150gsm
                                                                                    Gloss
                                                                                </option>
                                                                                <option value="150gsm Silk">150gsm
                                                                                    Silk
                                                                                </option>
                                                                                <option value="130gsm Gloss">130gsm
                                                                                    Gloss
                                                                                </option>
                                                                                <option value="130gsm Silk">130gsm
                                                                                    Silk
                                                                                </option>
                                                                                <option value="115gsm Gloss">115gsm
                                                                                    Gloss
                                                                                </option>
                                                                                <option value="115gsm Silk">115gsm
                                                                                    Silk
                                                                                </option>
                                                                                <option value="170gsm Gloss">170gsm
                                                                                    Gloss
                                                                                </option>
                                                                                <option value="170gsm Silk">170gsm
                                                                                    Silk
                                                                                </option>
                                                                                <option value="100gsm Offset Uncoated">
                                                                                    100gsm Offset Uncoated
                                                                                </option>
                                                                                <option value="200gsm Silk">200gsm
                                                                                    Silk
                                                                                </option>
                                                                                <option value="200gsm Gloss">200gsm
                                                                                    Gloss
                                                                                </option>
                                                                                <option value="-1">Custom</option>
                                                                                <input type="hidden" value="52"
                                                                                       name="custom_field[]"/>
                                                                                <div class="extra_option">
                                                                                    <div id="div_custom_52"
                                                                                         style="display:none;"><input
                                                                                            type="text"
                                                                                            name="field_custom_52"
                                                                                            value=""
                                                                                            id="field_custom_52"
                                                                                            style="width:100%;"
                                                                                            maxlength="80"/></div>
                                                                                </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="option_first_col">
                                                                            Cover
                                                                            <input type="hidden" value="51"
                                                                                   name="quote_fields[]"/>
                                                                            <input type="hidden" value="Cover"
                                                                                   name="field_name_51"
                                                                                   id="field_name_51"/>
                                                                            <input type="hidden" value="51"
                                                                                   name="field_id_51" id="field_id_51"/>
                                                                        </td>
                                                                        <td class="option_second_col"><select
                                                                                style="width:100%;" name="field_51"
                                                                                id="booklets_cover"
                                                                                >
                                                                                <option value="Same as Internal Pages">
                                                                                    Same as Internal Pages
                                                                                </option>
                                                                                <option value="250gsm Gloss">250gsm
                                                                                    Gloss
                                                                                </option>
                                                                                <option value="250gsm Silk">250gsm
                                                                                    Silk
                                                                                </option>
                                                                                <option value="300gsm Gloss">300gsm
                                                                                    Gloss
                                                                                </option>
                                                                                <option value="300gsm Silk">300gsm
                                                                                    Silk
                                                                                </option>
                                                                                <option value="250gsm Uncoated">250gsm
                                                                                    Uncoated
                                                                                </option>
                                                                                <option value="-1">Custom</option>
                                                                                <input type="hidden" value="51"
                                                                                       name="custom_field[]"/>
                                                                                <div class="extra_option">
                                                                                    <div id="div_custom_51"
                                                                                         style="display:none;"><input
                                                                                            type="text"
                                                                                            name="field_custom_51"
                                                                                            value=""
                                                                                            id="field_custom_51"
                                                                                            style="width:100%;"
                                                                                            maxlength="80"/></div>
                                                                                </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="option_first_col">
                                                                            Number of pages including cover
                                                                            <input type="hidden" value="53"
                                                                                   name="quote_fields[]"/>
                                                                            <input type="hidden"
                                                                                   value="Number of pages including cover"
                                                                                   name="field_name_53"
                                                                                   id="field_name_53"/>
                                                                            <input type="hidden" value="53"
                                                                                   name="field_id_53" id="field_id_53"/>
                                                                        </td>
                                                                        <td class="option_second_col"><select
                                                                                style="width:100%;" name="field_53"
                                                                                id="booklets_includingCover"
                                                                                >
                                                                                <option value="8">8</option>
                                                                                <option value="12">12</option>
                                                                                <option value="16">16</option>
                                                                                <option value="20">20</option>
                                                                                <option value="24">24</option>
                                                                                <option value="28">28</option>
                                                                                <option value="32">32</option>
                                                                                <option value="36">36</option>
                                                                                <option value="40">40</option>
                                                                                <option value="44">44</option>
                                                                                <option value="48">48</option>
                                                                                <option value="52">52</option>
                                                                                <option value="56">56</option>
                                                                                <option value="60">60</option>
                                                                                <option value="64">64</option>
                                                                                <option value="68">68</option>
                                                                                <option value="72">72</option>
                                                                                <option value="76">76</option>
                                                                                <option value="80">80</option>
                                                                                <option value="84">84</option>
                                                                                <option value="88">88</option>
                                                                                <option value="92">92</option>
                                                                                <option value="96">96</option>
                                                                                <option value="100">100</option>
                                                                                <option value="104">104</option>
                                                                                <option value="108">108</option>
                                                                                <option value="112">112</option>
                                                                                <option value="116">116</option>
                                                                                <option value="120">120</option>
                                                                                <option value="-1">Custom</option>
                                                                                <input type="hidden" value="53"
                                                                                       name="custom_field[]"/>
                                                                                <div class="extra_option">
                                                                                    <div id="div_custom_53"
                                                                                         style="display:none;"><input
                                                                                            type="text"
                                                                                            name="field_custom_53"
                                                                                            value=""
                                                                                            id="field_custom_53"
                                                                                            style="width:100%;"
                                                                                            maxlength="80"/></div>
                                                                                </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="option_first_col">
                                                                            Internal Pages
                                                                            <input type="hidden" value="54"
                                                                                   name="quote_fields[]"/>
                                                                            <input type="hidden" value="Internal Pages"
                                                                                   name="field_name_54"
                                                                                   id="field_name_54"/>
                                                                            <input type="hidden" value="54"
                                                                                   name="field_id_54" id="field_id_54"/>
                                                                        </td>
                                                                        <td class="option_second_col"><select
                                                                                style="width:100%;" name="field_54"
                                                                                id="booklets_pages2"
                                                                                >
                                                                                <option value="Printed Full Colour">
                                                                                    Printed Full Colour
                                                                                </option>
                                                                                <option value="Printed Black/White">
                                                                                    Printed Black/White
                                                                                </option>
                                                                                <option value="Printed 1PMS Colours">
                                                                                    Printed 1PMS Colours
                                                                                </option>
                                                                                <option value="Printed 2PMS Colours">
                                                                                    Printed 2PMS Colours
                                                                                </option>
                                                                                <option value="-1">Custom</option>
                                                                                <input type="hidden" value="54"
                                                                                       name="custom_field[]"/>
                                                                                <div class="extra_option">
                                                                                    <div id="div_custom_54"
                                                                                         style="display:none;"><input
                                                                                            type="text"
                                                                                            name="field_custom_54"
                                                                                            value=""
                                                                                            id="field_custom_54"
                                                                                            style="width:100%;"
                                                                                            maxlength="80"/></div>
                                                                                </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="option_first_col">
                                                                            Cover
                                                                            <input type="hidden" value="55"
                                                                                   name="quote_fields[]"/>
                                                                            <input type="hidden" value="Cover"
                                                                                   name="field_name_55"
                                                                                   id="field_name_55"/>
                                                                            <input type="hidden" value="55"
                                                                                   name="field_id_55" id="field_id_55"/>
                                                                        </td>
                                                                        <td class="option_second_col"><select
                                                                                style="width:100%;" name="field_55"
                                                                                id="booklets_cover2"
                                                                                >
                                                                                <option value="Printed Full Colour">
                                                                                    Printed Full Colour
                                                                                </option>
                                                                                <option value="Printed Black/White">
                                                                                    Printed Black/White
                                                                                </option>
                                                                                <option value="-1">Custom</option>
                                                                                <input type="hidden" value="55"
                                                                                       name="custom_field[]"/>
                                                                                <div class="extra_option">
                                                                                    <div id="div_custom_55"
                                                                                         style="display:none;"><input
                                                                                            type="text"
                                                                                            name="field_custom_55"
                                                                                            value=""
                                                                                            id="field_custom_55"
                                                                                            style="width:100%;"
                                                                                            maxlength="80"/></div>
                                                                                </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="option_first_col">
                                                                            Binding
                                                                            <input type="hidden" value="58"
                                                                                   name="quote_fields[]"/>
                                                                            <input type="hidden" value="Binding"
                                                                                   name="field_name_58"
                                                                                   id="field_name_58"/>
                                                                            <input type="hidden" value="58"
                                                                                   name="field_id_58" id="field_id_58"/>
                                                                        </td>
                                                                        <td class="option_second_col"><select
                                                                                style="width:100%;" name="field_58"
                                                                                id="booklets_binding"
                                                                                >
                                                                                <option
                                                                                    value="Saddlestitch (2 staples in middle)">
                                                                                    Saddlestitch (2 staples in middle)
                                                                                </option>
                                                                                <option
                                                                                    value="Burst Bound or Perfect Bound">
                                                                                    Burst Bound or Perfect Bound
                                                                                </option>
                                                                                <option value="Wiro Binding">Wiro
                                                                                    Binding
                                                                                </option>
                                                                                <option value="-1">Custom</option>
                                                                                <input type="hidden" value="58"
                                                                                       name="custom_field[]"/>
                                                                                <div class="extra_option">
                                                                                    <div id="div_custom_58"
                                                                                         style="display:none;"><input
                                                                                            type="text"
                                                                                            name="field_custom_58"
                                                                                            value=""
                                                                                            id="field_custom_58"
                                                                                            style="width:100%;"
                                                                                            maxlength="80"/></div>
                                                                                </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="option_first_col">
                                                                            Laminate Cover
                                                                            <input type="hidden" value="56"
                                                                                   name="quote_fields[]"/>
                                                                            <input type="hidden" value="Laminate Cover"
                                                                                   name="field_name_56"
                                                                                   id="field_name_56"/>
                                                                            <input type="hidden" value="56"
                                                                                   name="field_id_56" id="field_id_56"/>
                                                                        </td>
                                                                        <td class="option_second_col"><select
                                                                                style="width:100%;" name="field_56"
                                                                                id="booklets_lamineteCover"
                                                                                >
                                                                                <option value="None">None</option>
                                                                                <option value="Machine varnish 1 side">
                                                                                    Machine varnish 1 side
                                                                                </option>
                                                                                <option value="Machine varnish 2 sides">
                                                                                    Machine varnish 2 sides
                                                                                </option>
                                                                                <option value="Matt lamianted 1 side">
                                                                                    Matt lamianted 1 side
                                                                                </option>
                                                                                <option value="Matt laminated 2 sides">
                                                                                    Matt laminated 2 sides
                                                                                </option>
                                                                                <option value="Gloss laminated 1 sides">
                                                                                    Gloss laminated 1 sides
                                                                                </option>
                                                                                <option value="Gloss laminated 2 sides">
                                                                                    Gloss laminated 2 sides
                                                                                </option>
                                                                                <option value="-1">Custom</option>
                                                                                <input type="hidden" value="56"
                                                                                       name="custom_field[]"/>
                                                                                <div class="extra_option">
                                                                                    <div id="div_custom_56"
                                                                                         style="display:none;"><input
                                                                                            type="text"
                                                                                            name="field_custom_56"
                                                                                            value=""
                                                                                            id="field_custom_56"
                                                                                            style="width:100%;"
                                                                                            maxlength="80"/></div>
                                                                                </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="option_first_col">
                                                                            Cover Special Finish
                                                                            <input type="hidden" value="57"
                                                                                   name="quote_fields[]"/>
                                                                            <input type="hidden"
                                                                                   value="Cover Special Finish"
                                                                                   name="field_name_57"
                                                                                   id="field_name_57"/>
                                                                            <input type="hidden" value="57"
                                                                                   name="field_id_57" id="field_id_57"/>
                                                                        </td>
                                                                        <td class="option_second_col"><select
                                                                                style="width:100%;" name="field_57"
                                                                                id="booklets_coverSpecialFinish"
                                                                                >
                                                                                <option value="None">None</option>
                                                                                <option value="Spot UV 1 Side">Spot UV 1
                                                                                    Side
                                                                                </option>
                                                                                <option value="Spot UV 2 Sides">Spot UV
                                                                                    2 Sides
                                                                                </option>
                                                                                <option value="Embossing">Embossing
                                                                                </option>
                                                                                <option value="Foil">Foil</option>
                                                                                <option value="-1">Custom</option>
                                                                                <input type="hidden" value="57"
                                                                                       name="custom_field[]"/>
                                                                                <div class="extra_option">
                                                                                    <div id="div_custom_57"
                                                                                         style="display:none;"><input
                                                                                            type="text"
                                                                                            name="field_custom_57"
                                                                                            value=""
                                                                                            id="field_custom_57"
                                                                                            style="width:100%;"
                                                                                            maxlength="80"/></div>
                                                                                </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="option_first_col">
                                                                            Artwork Supplied In
                                                                            <input type="hidden" value="59"
                                                                                   name="quote_fields[]"/>
                                                                            <input type="hidden"
                                                                                   value="Artwork Supplied In"
                                                                                   name="field_name_59"
                                                                                   id="field_name_59"/>
                                                                            <input type="hidden" value="59"
                                                                                   name="field_id_59" id="field_id_59"/>
                                                                        </td>
                                                                        <td class="option_second_col"><select
                                                                                style="width:100%;" name="field_59"
                                                                                id="booklets_artworkSuppliedIn"
                                                                                >
                                                                                <option value="Ready to print PDF">Ready
                                                                                    to print PDF
                                                                                </option>
                                                                                <option
                                                                                    value="Ready to print Illustrator">
                                                                                    Ready to print Illustrator
                                                                                </option>
                                                                                <option
                                                                                    value="Ready to print photoshop">
                                                                                    Ready to print photoshop
                                                                                </option>
                                                                                <option value="Power Point">Power
                                                                                    Point
                                                                                </option>
                                                                                <option value="Microsoft Word">Microsoft
                                                                                    Word
                                                                                </option>
                                                                                <option
                                                                                    value="Design to be created by YellowStar Press">
                                                                                    Design to be created by YellowStar Press
                                                                                </option>
                                                                                <option value="-1">Custom</option>
                                                                                <input type="hidden" value="59"
                                                                                       name="custom_field[]"/>
                                                                                <div class="extra_option">
                                                                                    <div id="div_custom_59"
                                                                                         style="display:none;"><input
                                                                                            type="text"
                                                                                            name="field_custom_59"
                                                                                            value=""
                                                                                            id="field_custom_59"
                                                                                            style="width:100%;"
                                                                                            maxlength="80"/></div>
                                                                                </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="option_first_col">
                                                                            Proof Required
                                                                            <input type="hidden" value="62"
                                                                                   name="quote_fields[]"/>
                                                                            <input type="hidden" value="Proof Required"
                                                                                   name="field_name_62"
                                                                                   id="field_name_62"/>
                                                                            <input type="hidden" value="62"
                                                                                   name="field_id_62" id="field_id_62"/>
                                                                        </td>
                                                                        <td class="option_second_col"><select
                                                                                style="width:100%;" name="field_62"
                                                                                id="booklets_proofRequired"
                                                                                >
                                                                                <option value="None">None</option>
                                                                                <option value="Soft Copy PDF">Soft Copy
                                                                                    PDF
                                                                                </option>
                                                                                <option value="High Res Hard Copy">High
                                                                                    Res Hard Copy
                                                                                </option>
                                                                                <option value="-1">Custom</option>
                                                                                <input type="hidden" value="62"
                                                                                       name="custom_field[]"/>
                                                                                <div class="extra_option">
                                                                                    <div id="div_custom_62"
                                                                                         style="display:none;"><input
                                                                                            type="text"
                                                                                            name="field_custom_62"
                                                                                            value=""
                                                                                            id="field_custom_62"
                                                                                            style="width:100%;"
                                                                                            maxlength="80"/></div>
                                                                                </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="option_first_col">
                                                                            Quantity
                                                                            <input type="hidden" value="66"
                                                                                   name="quote_fields[]"/>
                                                                            <input type="hidden" value="Quantity"
                                                                                   name="field_name_66"
                                                                                   id="field_name_66"/>
                                                                            <input type="hidden" value="66"
                                                                                   name="field_id_66" id="field_id_66"/>
                                                                        </td>
                                                                        <td class="option_second_col"><select
                                                                                style="width:100%;" name="field_66"
                                                                                id="booklets_quantity"
                                                                                >
                                                                                <option value="100">100</option>
                                                                                <option value="150">150</option>
                                                                                <option value="200">200</option>
                                                                                <option value="250">250</option>
                                                                                <option value="300">300</option>
                                                                                <option value="400">400</option>
                                                                                <option value="500">500</option>
                                                                                <option value="750">750</option>
                                                                                <option value="1000">1000</option>
                                                                                <option value="2000">2000</option>
                                                                                <option value="2500">2500</option>
                                                                                <option value="3000">3000</option>
                                                                                <option value="3500">3500</option>
                                                                                <option value="4000">4000</option>
                                                                                <option value="4500">4500</option>
                                                                                <option value="5000">5000</option>
                                                                                <option value="6000">6000</option>
                                                                                <option value="7000">7000</option>
                                                                                <option value="8000">8000</option>
                                                                                <option value="9000">9000</option>
                                                                                <option value="10000">10000</option>
                                                                                <option value="-1">Custom</option>
                                                                                <input type="hidden" value="66"
                                                                                       name="custom_field[]"/>
                                                                                <div class="extra_option">
                                                                                    <div id="div_custom_66"
                                                                                         style="display:none;"><input
                                                                                            type="text"
                                                                                            name="field_custom_66"
                                                                                            value=""
                                                                                            id="field_custom_66"
                                                                                            style="width:100%;"
                                                                                            maxlength="80"/></div>
                                                                                </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                        </tr>
                                        <tr>
                                            <td valign="top" style="padding-top:3px; vertical-align:top"
                                                class="one-line one-line-title"><strong>Job Description: </strong></td>
                                            <td valign="top" class="one-line one-text st-input"><input type="hidden"
                                                                                                       name="custom_product"
                                                                                                       value="5"><textarea
                                                    name="comments" wrap="" cols="" rows="8" id = "booklets_jobDescription"
                                                    style="font-size: 13px; font-family: Arial; "></textarea></td>
                                        </tr>
                                        <tr>
                                            <td height="25" class="one-line one-line-title"><strong>Delivery
                                                    Postcode:</strong></td>
                                            <td class="one-line st-input"><input type="text" name="delivery_location"
                                                                                 id="booklets_deliveryPostcode" maxlength="80">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25" class="one-line one-line-title"><strong>Business
                                                    Name:</strong></td>
                                            <td class="one-line st-input"><input type="text" name="company" id="booklets_businessName"
                                                                                 maxlength="80"></td>
                                        </tr>
                                        <tr>
                                            <td class="one-line one-line-title">Your
                                                Name: </font><span style="color:red">*</span></td>
                                            <td class="one-line st-input"><input type="text" name="name" id="booklets_name"
                                                                                 maxlength="80"></td>
                                        </tr>
                                        <tr>
                                            <td height="25" class="one-line one-line-title">Email:<span
                                                    style="color:red">*</span></td>
                                            <td class="one-line st-input"><input type="text" name="email" id="booklets_email"
                                                                                 maxlength="80"></td>
                                        </tr>
                                        <tr>
                                            <td height="25" class="one-line one-line-title">Telephone:<span
                                                    style="color:red">*</span></td>
                                            <td class="one-line st-input"><input type="text" name="phone" id="booklets_telephone"
                                                                                 maxlength="80"></td>
                                        </tr>
                                        <tr class="tr-pt15">
                                            <td colspan="2" class="one-line one-line-title"
                                                style="padding-bottom:20px;">By previewing your artwork we can quote
                                                your job precisely
                                            </td>
                                        </tr>

                                        <tr>
                                            <td height="25" align="left" class="one-line one-line-title">Preview</td>
                                            <td class="one-line" style="padding:5px;"><input type="file" name="file1"
                                                                                             id="booklets_file"></td>
                                        </tr>
                                        {{-- <tr>
                                            <td height="25" align="left" class="one-line one-line-title">Preview 2</td>
                                            <td class="one-line" style="padding:5px;"><input type="file" name="file2"
                                                                                             id="file2"></td>
                                        </tr>
                                        <tr>
                                            <td height="25" align="left" class="one-line one-line-title">Preview 3</td>
                                            <td class="one-line" style="padding:5px;"><input type="file" name="file3"
                                                                                             id="file3"></td>
                                        </tr> --}}
                                        <tr class="tr-pt15">
                                            <td height="25" align="left" class="one-line one-line-title">How did you
                                                find us?
                                            </td>
                                            <td class="one-line"><select name="select" id="booklets_way">
                                                    <option value="1">Google</option>
                                                    <option value="2">Yellow Pages</option>
                                                    <option value="3">Yahoo</option>
                                                    <option value="4">Bing/MSN</option>
                                                    <option value="5">Link from another site</option>
                                                    <option value="6">Referral</option>
                                                    <option value="7">Mail Drop</option>
                                                    <option value="8">Other</option>
                                                </select></td>
                                        </tr>

                                        <tr class="tr-pt15">
                                            <td valign="top" colspan="3" class="one-line">
                                                <div class="subscribe_holder">
                                                    <input class="newsletter_subscribe" type="checkbox"
                                                           name="sigin_in_newsletter" id="sigin_in_newsletter"
                                                           value="yes" checked/>
                                                </div>
                                                <div class="subscribe_text">
                                                    Subscribe to our newsletter for special offers
                                                </div>
                                                <div style="display:none"><input type="checkbox" name="validate_form"
                                                                                 id="booklets_subscribe" value="yes"/></div>
                                                <div class="clear"></div>
                                            </td>
                                        </tr>
                                        <tr class="tr-pt15">
                                            <td class="one-line" style="margin-top:10px;" colspan="2">
                                                <input type="button" class="submit_btn blue_button"
                                                       onclick="bookletsSendEmail()" id="postemail" value="submit"/>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </form>
                            <div class="quotes_login" style="padding-top:20px; padding-bottom:20px; text-align:right"><a
                                    class="black_link" href="/login"> Login &raquo;</a></div>

                        </div>
                        <div class="clear"></div>


                    </div>
                </div>
                <div class="clear"></div>
                <div class="main_left_bottom1">
                    <div class="product_info_design no_margin">
                        <a href="/design">
                            <div class="product_info_design_img">
                            </div>
                            <h4>Design Services</h4>
                            <p>Need artwork setup? Our team of experienced designers can help</p>
                            <a class="blue_link"
                               href="/design">read
                                more+</a>
                        </a>
                    </div>
                    <div class="product_info_gallery">
                        <a href="/gallary">
                            <div class="product_info_gallery_img">
                            </div>
                            <h4>Gallery</h4>
                            <p>Looking for design inspiration? See examples of our work</p>
                            <a class="blue_link"
                               href="/gallary">read
                                more+</a>
                        </a>
                    </div>
                    <div class="product_info_order">
                        <a href="/orderprocess">
                            <div class="product_info_order_img">
                            </div>
                            <h4>Order process</h4>
                            <p>The ordering process explained</p>
                            <a class="blue_link"
                               href="/orderprocess">read
                                more+</a>
                        </a>
                    </div>
{{--                    <div class="product_info_guidelines">--}}
{{--                        <a href="/fileGuidelines">--}}
{{--                            <div class="product_info_guidelines_img">--}}
{{--                            </div>--}}
{{--                            <h4>File Guidelines</h4>--}}
{{--                            <p>Print specifications to achieve best printing results</p>--}}
{{--                            <a class="blue_link"--}}
{{--                               href="/fileGuidelines">read--}}
{{--                                more+</a>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                    <div class="clear"></div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>

    <div class="product_div" id="product_div_id_2" style="display:none">
        <div class="text_holder">
            <div class="main_product_container brochure_holder">
                <div id="breadcrumbs">
                    You are here:
                    <span itemprop="breadcrumb" itemscope="itemscope" itemtype="http://schema.org/Breadcrumb">
                        <a href="/home" itemprop="url"><span itemprop="title">YellowStar Press</span></a>
                        »
                        <span itemprop="child" itemscope="itemscope" itemtype="http://schema.org/Breadcrumb">
                            <a href="/product/brochures" itemprop="url">
                                <span itemprop="title">
                                    Brochures Printing </span>
                            </a>
                        </span>
                    </span>
                </div>

                <div class="main_left">
                    <div class="main_left_left">
                        <h1>Online Folded Brochure Printing</h1>
                        <h3>Make a lasting impression with a professionally printed brochure.</h3>
                        <p>Brochures are used for everything from targeted letterbox drops, direct mail marketing, to
                            customer acquisition via handouts. They can effectively express what your company does
                            quickly and professionally.
                        </p>
                        <p>&nbsp;</p>
                        <p>
                            Our brochure printing service offers our customers quality results that resonate with their
                            audience. We design in-house and print directly from our own offset printing machines.
                        </p>
                        <p>&nbsp;</p>
                        <p>
                            Brochure printing is available in sizes A2, A3, A4, A5 or DL in full colour, and may be
                            single or double sided. Our brochures are produced on high quality matt or gloss stocks.
                        </p>
                        <h3 class="padding_top">Machine varnish for a superior finish (offset only)</h3>
                        <p>
                            Machine vanishing ensures a silky smooth finish. We use this finish on booklets that have
                            large areas of ink coverage to protect the product and reduce finger marking and scuffing or
                            simply to enhance the look and feel of the finished product.
                            <br style="">
                            <a class="black_link_underline"
                               href="/contact">Contact
                                us for more information</a>
                        </p>
                        <br/>
                        <a href="/product/flyers"
                           class="flyer_link">
                            <div id="u56029-7">
                                <img src="{{URL::asset('/image/design icons-04.png')}}" width="40" height="40"
                                     style="float:left">
                                <div style="float:left;height:46px">
                                    <span class="span_looking">Are you looking for flyers (flat sheets)?</span> Click
                                    here
                                </div>
                            </div>
                        </a>

                        <div class="clear"></div>

                        <div class="size_menu">
                            <div class="size_4pages size_row">
                                <div class="size_col1">
                                    <img src="{{URL::asset('/image/brochure-4pages-single.png') }} "
                                         alt="4 Pages Single Fold" title="4 Pages Single Fold">
                                    <div class="fold_title">4 Pages</div>
                                    <div class="fold_info">Single Fold</div>
                                </div>
                                <div class="bro_setup">
                                    <div class="bro_sizing">A5</div>
                                    <div class="bro_title">4 Pages</div>
                                    <div class="bro_sizing_sml">148 x 210m(folded)</div>
                                </div>
                                <div class="bro_setup">
                                    <div class="bro_sizing">A4</div>
                                    <div class="bro_title">4 Pages</div>
                                    <div class="bro_sizing_sml">210 x 297mm (folded)</div>
                                </div>
                                <div class="bro_setup">
                                    <div class="bro_sizing">A3</div>
                                    <div class="bro_title">4 Pages</div>
                                    <div class="bro_sizing_sml">297 x 420m(folded)</div>
                                </div>
                                <div class="clear"></div>
                                <div style="clear: both;"></div>
                            </div>

                            <div class="size_6rpages size_row">
                                <div class="size_col1">
                                    <img src="{{URL::asset('/image/brochure folds-09.jpg') }} " alt="4 Page Landscape"
                                         title="4 Page Landscape">
                                    <div class="fold_title">4 Page</div>
                                    <div class="fold_info">Landscape</div>
                                </div>
                                <div class="bro_setup">
                                    <div class="bro_sizing">A5</div>
                                    <div class="bro_title">4 Page Landscape</div>
                                    <div class="bro_sizing_sml">148 x 420m(folded)</div>
                                </div>
                                <div class="bro_setup">
                                    <div class="bro_sizing">A4</div>
                                    <div class="bro_title">4 Page Landscape</div>
                                    <div class="bro_sizing_sml">210 x 594mm (folded)</div>
                                </div>
                                <div class="bro_setup">
                                    <div class="bro_sizing">A3</div>
                                    <div class="bro_title">4 Page Landscape</div>
                                    <div class="bro_sizing_sml">297 x 840m(folded)</div>
                                </div>
                                <div class="clear"></div>
                                <div style="clear: both;"></div>
                            </div>

                            <div class="size_6rpages size_row">
                                <div class="size_col1">
                                    <img src="{{URL::asset('/image/brochure-6pages-roll.png') }} "
                                         alt="6 Pages Roll Fold" title="6 Pages Roll Fold">
                                    <div class="fold_title">6 Pages</div>
                                    <div class="fold_info">Roll Fold</div>
                                </div>
                                <div class="bro_setup">
                                    <div class="bro_sizing">A5</div>
                                    <div class="bro_title">6 Pages</div>
                                    <div class="bro_sizing_sml">148 x 210m(folded)</div>
                                </div>
                                <div class="bro_setup">
                                    <div class="bro_sizing">A4</div>
                                    <div class="bro_title">6 Pages</div>
                                    <div class="bro_sizing_sml">210 x 297mm (folded)</div>
                                </div>
                                <div class="bro_setup">
                                    <div class="bro_sizing">A3</div>
                                    <div class="bro_title">6 Pages</div>
                                    <div class="bro_sizing_sml">297 x 420m(folded)</div>
                                </div>
                                <div class="clear"></div>
                                <div style="clear: both;"></div>
                            </div>


                            <div class="size_6zpages size_row">
                                <div class="size_col1">
                                    <img src="{{URL::asset('/image/brochure-6pages-z.png') }} " alt="6 Pages Z Fold"
                                         title="6 Pages Z Fold">
                                    <div class="fold_title">6 Pages</div>
                                    <div class="fold_info">Z Fold</div>
                                </div>
                                <div class="bro_setup">
                                    <div class="bro_sizing">A5</div>
                                    <div class="bro_title">6 Pages</div>
                                    <div class="bro_sizing_sml">148 x 210m(folded)</div>
                                </div>
                                <div class="bro_setup">
                                    <div class="bro_sizing">A4</div>
                                    <div class="bro_title">6 Pages</div>
                                    <div class="bro_sizing_sml">210 x 297mm (folded)</div>
                                </div>
                                <div class="bro_setup">
                                    <div class="bro_sizing">A3</div>
                                    <div class="bro_title">6 Pages</div>
                                    <div class="bro_sizing_sml">297 x 420m(folded)</div>
                                </div>
                                <div class="clear"></div>
                                <div style="clear: both;"></div>
                            </div>







                        </div>

                    </div>
                    <div class="main_left_right">
                        <a>
                            <div class="advertisement2"></div>
                        </a>
{{--                        <div class="panel_pricing">--}}
{{--                            <h4>Pricing includes</h4>--}}
{{--                            <span class="option_indent"><a--}}
{{--                                    href="/pre-flight-checks">Free Flight Check</a></span>--}}
{{--                            <span class="option_indent"><a--}}
{{--                                    href="/pre-flight-checks">PDF Proof for your approval*</a></span>--}}
{{--                            <span class="option_indent"><a--}}
{{--                                    href="/pre-flight-checks">Free Job Tracking</a></span>--}}
{{--                            <span class="option_indent"><a--}}
{{--                                    href="/delivery">Free Delivery</a></span>--}}
{{--                            <p>&nbsp;</p>--}}
{{--                            <p class="small">* Limited to one PDF proof per print job.--}}
{{--                                Additional proofs will incur extra charges.</p>--}}
{{--                        </div>--}}
{{--                        <div class="panel_extras">--}}
{{--                            <h4 class="padding_top">Optional Extras</h4>--}}
{{--                            <p class="black">These options can be selected once your items have been added to your--}}
{{--                                shopping cart</p>--}}
{{--                            <p>&nbsp;</p>--}}
{{--                            <span class="option_indent"><a--}}
{{--                                    href="/support">Machine Varnish - Gloss or Matt</a></span>--}}
{{--                            <span class="option_indent"><a--}}
{{--                                    href="/pre-flight-checks">Convert your files to a print ready format</a></span>--}}
{{--                            <span class="option_indent"><a--}}
{{--                                    href="/design">Graphic Design Services</a></span>--}}
{{--                            <span class="option_indent"><a--}}
{{--                                    href="/pre-flight-checks">Hard Copy Proofs</a></span>--}}
{{--                            <p>&nbsp;</p>--}}
{{--                        </div>--}}
                        <div class="clear"></div>
                        <h4>Brochure Folding</h4>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-01.png') }} ">
                            <strong>Single Fold</strong>
                            <span>4 Pages</span>
                        </div>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-04.png') }} ">
                            <strong>Roll Fold</strong>
                            <span>6 Pages</span>
                        </div>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-05.png') }} ">
                            <strong>Z Fold</strong>
                            <span>6 Pages</span>
                        </div>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-02.png') }} ">
                            <strong>Roll Fold</strong>
                            <span>8 Pages</span>
                        </div>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-03.png') }} ">
                            <strong>Concertina</strong>
                            <span>8 Pages</span>
                        </div>
                        <div class="clear"></div>

                        <a>
                            <div class="bcards500 notop"></div>
                        </a>

                    </div>

                    <div class="clear"></div>
                    <div style="clear: both;"></div>


                    <div class="main_left_bottom1">

                        <div class="product_info_design no_margin">
                            <a href="javascript:void(0);" onclick="clickHeader(2)">
                                <div class="product_info_design_img">
                                </div>
                                <h4>Design Services</h4>
                                <p>Need artwork setup? Our team of experienced designers can help</p>
                            </a><a class="blue_link"
                            href="javascript:void(0);" onclick="clickHeader(2)">read
                                more+</a>

                        </div>
                        <div class="product_info_gallery gallery_brochure">
                            <a href="javascript:void(0);" onclick="clickHeader(3)">
                                <div class="product_info_gallery_img">
                                </div>
                                <h4>Gallery</h4>
                                <p>Looking for design inspiration? See examples of our work</p>
                            </a><a class="blue_link"
                                href="javascript:void(0);" onclick="clickHeader(3)">read
                                more+</a>

                        </div>
                        <div class="product_info_order">
                            <a href="javascript:void(0);" onclick="clickHeader(14)">
                                <div class="product_info_order_img">
                                </div>
                                <h4>Order process</h4>
                                <p>The ordering process explained</p>
                                <a class="blue_link"
                                   href="javascript:void(0);" onclick="clickHeader(14)">read
                                    more+</a>
                            </a>
                        </div>
{{--                        <div class="product_info_guidelines">--}}
{{--                            <a href="javascript:void(0);" onclick="clickHeader(16)">--}}
{{--                                <div class="product_info_guidelines_img">--}}
{{--                                </div>--}}
{{--                                <h4>File Guidelines</h4>--}}
{{--                                <p>Print specifications to achieve best printing results</p>--}}
{{--                                <a class="blue_link"--}}
{{--                                   href="javascript:void(0);" onclick="clickHeader(16)">read--}}
{{--                                    more+</a>--}}
{{--                            </a>--}}
{{--                        </div>--}}

                        <div class="clear"></div>


                    </div>

                </div>
                <div class="main_right">
                    <div class="clearfix grpelem" id="ppu4866-6"><!-- column -->
                        <div class="product_option_panel">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="product_options_header">Options &amp; Prices</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product_options_price_bkgrd" align="left">

                                        <table cellpadding="0" cellspacing="0" border="0" width="236"
                                               class="product_option_holder">
                                            <tbody>
                                            <tr>

                                                <td colspan="2" align="left" style="padding-top:5px;">
                                                    <div class="prooption_desc">Your price will automatically update
                                                        according to your options chosen.

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pulldown">

                                                    <strong>Folded Size:</strong>


                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content_left"><select name="productsizelist"
                                                                                 id="brochure_type"
                                                                                 style="width: 225px; font-size: 12px;"
                                                                                 onchange="UpdateProductPriceBrochure('size')">
                                                        <option value="Folding in Half">Folding in Half</option>
                                                        <option value="Roll Fold to DL">Roll Fold to DL (6PP DL)</option>
                                                    </select></td>
                                            </tr>

                                            <tr>
                                                <td class="pulldown"
                                                '=""><strong>No. of Pages:</strong></td>
                                            </tr>
                                            <tr id="brochure_page1">
                                                <!--Gabriel Modification - Change default Brochures 57 DL Size -->
                                                <td class="content_left" id="brouchernopages"><select
                                                        name="productpagelist2" id="brochure_page"
                                                        style="width: 225px; font-size: 12px;"
                                                        onchange="UpdateProductPriceBrochure('size')">
                                                        <span><option value="A5">A5</option></span>
                                                        <option value="A4">A4</option>
                                                        <span><option value="A3">A3</option></span>
                                                    </select></td>
                                            </tr>




                                            <tr>
                                                <td class="pulldown"><strong>Stock:</strong></td>
                                            </tr>
                                            <tr id="brochure_page3">
                                                <td class="content_left"><select name="productstocklist"
                                                                                 id="brochure_stock"
                                                                                 style="width: 225px; font-size: 12px;"
                                                                                 onchange="UpdateProductPriceBrochure('size')">
                                                        <option value="115GSM Gloss or Matt">115GSM Gloss or Matt
                                                        </option>
                                                        <option value="150GSM Goss or Matt">150GSM Goss or Matt
                                                        </option>
                                                        <option value="170GSM Gloss or Matt">170GSM Gloss or Matt
                                                        </option>
                                                        <span><option value="250GSM Gloss or Matt">250GSM Gloss or Matt
                                                        </option></span>
                                                    </select></td>
                                            </tr>







                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- custom quote panel -->
                        <div class="product_quote_panel">
                            <table class="product_quote_holder" cellpadding="0" cellspacing="0">
                                <tbody>
                                <tr>
                                    <td class="product_options_quote">
                                        <div class="product_quote_text">Looking for more options?</div>
                                        <div class="product_quote_link"><a href="/contact">Custom Quote</a>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="price_holder_spacer"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class="product_price_panel">
                            <table class="product_price_holder" cellpadding="0" cellspacing="0">
                                <tbody>
                                <tr>
                                    <td class="product_options_price_bkgrd" style="padding-top:5px;" align="left">
                                        <div class="price_desc">Select items you would like to purchase, then press "Add
                                            to Cart"
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product_options_price_bkgrd" align="left">


                                        <div id="productpriceupdate">
                                            <div id="refreshselectproduct">
                                                <form name="frmSetProductPrice"
                                                      data-function-name="class_product_php_update_booklets_price"
                                                      method="post" action="cart.php"
                                                      onsubmit="return submitadd2cart(this)">
                                                    <table width="230" align="left">
                                                        <tbody>
                                                        <tr>
                                                            <td class="qty_header"><strong>Qty</strong></td>
                                                            <td class="kinds_header"><strong>Kinds</strong></td>
                                                            <td class="price_header"><strong>Price</strong></td>
                                                            <td class="buy_header"><strong>Buy</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="qty_left">250</td>
                                                            <td class="kinds_input"><input type="text"
                                                                                           name="usersetqty_50-productid_57"
                                                                                           id="brochure_inputbox_250"
                                                                                           value="1" maxlength="2"
                                                                                           style="width:30px"
                                                                                           oninput="UpdateProductPrice('brochure','inputbox','250',value);
                                                                                                this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                                value = value.replace(/[^0-9]/g,'');
                                                                                       ">&nbsp;
                                                            </td>
                                                            <td id="brochure_td_250" width="50px">
                                                                $95.00<input type="hidden"
                                                                             name="updateselectedproductprice50"
                                                                             id="brochure_price_250"
                                                                             value="95.00"></td>
                                                            <td><input type="checkbox" id="brochure_checkbox_250"
                                                                       name="selectproduct[]"
                                                                       value="usersetqty_50-productid_57-price_95.00"
                                                                       onclick="UpdateProductPrice('brochure','checkbox','250')">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="qty_left">500</td>
                                                            <td class="kinds_input"><input type="text"
                                                                                           name="usersetqty_100-productid_57"
                                                                                           id="brochure_inputbox_500"
                                                                                           value="1" maxlength="2"
                                                                                           style="width:30px"
                                                                                           oninput="UpdateProductPrice('brochure','inputbox','500',value);
                                                                                                this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                                value = value.replace(/[^0-9]/g,'');
                                                                                       ">&nbsp;
                                                            </td>
                                                            <td id="brochure_td_500" width="50px">
                                                                $124.00<input type="hidden"
                                                                              name="updateselectedproductprice100"
                                                                              id="brochure_price_500"
                                                                              value="124.00"></td>
                                                            <td><input type="checkbox" id="brochure_checkbox_500"
                                                                       name="selectproduct[]"
                                                                       value="usersetqty_100-productid_57-price_124.00"
                                                                       onclick="UpdateProductPrice('brochure','checkbox','500')">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="qty_left">1000</td>
                                                            <td class="kinds_input"><input type="text"
                                                                                           name="usersetqty_150-productid_57"
                                                                                           id="brochure_inputbox_1000"
                                                                                           value="1" maxlength="2"
                                                                                           style="width:30px"
                                                                                           oninput="UpdateProductPrice('brochure','inputbox','1000',value);
                                                                                                this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                                value = value.replace(/[^0-9]/g,'');
                                                                                       ">&nbsp;
                                                            </td>
                                                            <td id="brochure_td_1000" width="50px">
                                                                $144.00<input type="hidden"
                                                                              name="updateselectedproductprice150"
                                                                              id="brochure_price_1000"
                                                                              value="144.00"></td>
                                                            <td><input type="checkbox" id="brochure_checkbox_1000"
                                                                       name="selectproduct[]"
                                                                       value="usersetqty_150-productid_57-price_144.00"
                                                                       onclick="UpdateProductPrice('brochure','checkbox','1000')">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="qty_left">1500</td>
                                                            <td class="kinds_input"><input type="text"
                                                                                           name="usersetqty_200-productid_57"
                                                                                           id="brochure_inputbox_1500"
                                                                                           value="1" maxlength="2"
                                                                                           style="width:30px"
                                                                                           oninput="UpdateProductPrice('brochure','inputbox','1500',value);
                                                                                                this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                                value = value.replace(/[^0-9]/g,'');
                                                                                       ">&nbsp;
                                                            </td>
                                                            <td id="brochure_td_1500" width="50px">
                                                                $158.00<input type="hidden"
                                                                              name="updateselectedproductprice200"
                                                                              id="brochure_price_1500"
                                                                              value="158.00"></td>
                                                            <td><input type="checkbox" id="brochure_checkbox_1500"
                                                                       name="selectproduct[]"
                                                                       value="usersetqty_200-productid_57-price_158.00"
                                                                       onclick="UpdateProductPrice('brochure','checkbox','1500')">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="qty_left">2000</td>
                                                            <td class="kinds_input"><input type="text"
                                                                                           name="usersetqty_250-productid_57"
                                                                                           id="brochure_inputbox_2000"
                                                                                           value="1" maxlength="2"
                                                                                           style="width:30px"
                                                                                           oninput="UpdateProductPrice('brochure','inputbox','2000',value);
                                                                                                this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                                value = value.replace(/[^0-9]/g,'');
                                                                                       ">&nbsp;
                                                            </td>
                                                            <td id="brochure_td_2000" width="50px">
                                                                $170.00<input type="hidden"
                                                                              name="updateselectedproductprice250"
                                                                              id="brochure_price_2000"
                                                                              value="170.00"></td>
                                                            <td><input type="checkbox" id="brochure_checkbox_2000"
                                                                       name="selectproduct[]"
                                                                       value="usersetqty_250-productid_57-price_170.00"
                                                                       onclick="UpdateProductPrice('brochure','checkbox','2000')">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="qty_left">5000</td>
                                                            <td class="kinds_input"><input type="text"
                                                                                           name="usersetqty_500-productid_57"
                                                                                           id="brochure_inputbox_5000"
                                                                                           value="1" maxlength="2"
                                                                                           style="width:30px"
                                                                                           oninput="UpdateProductPrice('brochure','inputbox','5000',value);
                                                                                                this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                                value = value.replace(/[^0-9]/g,'');
                                                                                       ">&nbsp;
                                                            </td>
                                                            <td id="brochure_td_5000" width="50px">
                                                                $210.00<input type="hidden"
                                                                              name="updateselectedproductprice500"
                                                                              id="brochure_price_5000"
                                                                              value="210.00"></td>
                                                            <td><input type="checkbox" id="brochure_checkbox_5000"
                                                                       name="selectproduct[]"
                                                                       value="usersetqty_500-productid_57-price_210.00"
                                                                       onclick="UpdateProductPrice('brochure','checkbox','5000')">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="qty_left">10000</td>
                                                            <td class="kinds_input"><input type="text"
                                                                                           name="usersetqty_1000-productid_57"
                                                                                           id="brochure_inputbox_10000"
                                                                                           value="1" maxlength="2"
                                                                                           style="width:30px"
                                                                                           oninput="UpdateProductPrice('brochure','inputbox','10000',value);
                                                                                                this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                                value = value.replace(/[^0-9]/g,'');
                                                                                       ">&nbsp;
                                                            </td>
                                                            <td id="brochure_td_10000" width="50px">$220.00<input
                                                                    type="hidden" name="updateselectedproductprice1000"
                                                                    id="brochure_price_10000" value="220.00">
                                                            </td>
                                                            <td><input type="checkbox" id="brochure_checkbox_10000"
                                                                       name="selectproduct[]"
                                                                       value="usersetqty_1000-productid_57-price_220.00"
                                                                       onclick="UpdateProductPrice('brochure','checkbox','10000')">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="4"><input type="hidden" id="productid"
                                                                                   name="productid" value="57"><input
                                                                    type="hidden" id="totalprice" name="totalprice"
                                                                    value="0.00"><input type="hidden" id="productsize"
                                                                                        name="productsize"
                                                                                        value="DL 99 x 210"><input
                                                                    type="hidden" id="productstock" name="productstock"
                                                                    value="150GSM GLOSS OR SILK"><input type="hidden"
                                                                                                        id="productcolor"
                                                                                                        name="productcolor"
                                                                                                        value="FULL COLOUR"><input
                                                                    type="hidden" id="productpage" name="productpage"
                                                                    value="4 PAGES"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" id="totalpriceupdate">
                                                                <center><span style="font-weight: bold;">Total Price: AUD <p id="brochure_totalPrice">0.00</p></span> <div id="flyItem_brochure" class="fly-item"><img src="{{URL::asset('/image/shopping-cart.png')}} "></div>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" class="price_msg_1">
                                                                <center><span class="price_msg_first">Price include GST and delivery</span>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" class="price_msg_2">
                                                                <center><span class="price_msg">All YellowStar Press prices are based on final artwork supplied</span>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" align="right"><br style="">
                                                                <table>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><a href="javascript:void(0);"
                                                                               class="clear_btn"
                                                                               onclick="clearPrice('brochure');"></a>
                                                                        </td>
                                                                        <td><input type="text" class="add_to_cart" id="add_to_cart_id"
                                                                        onclick="addToCart('brochure')"></td>
                                                                        <!-- <div id="flyItem" class="fly-item"><img src="{{URL::asset('/image/btn_add_to_cart_hover.jpg')}} "></div> -->
                                                                    </tr>

                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" class="price_msg_1">
                                                                <center><span class="price_msg_first" id="alert_msg_brochure" style="color:red;"></span>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="product_options_price_footer"></td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- <div id="flyItem" class="fly-item"><img src="{{URL::asset('/image/cart_step_icon.png')}} "></div> -->
                        </div>
                        <!-- email your order in 3 steps -->
                        <a class="nonblock nontext clip_frame grpelem" id="u76951"
                           href="javascript:void(0);" onclick="clickHeader(14)"
                           data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 13px;">
                            <img class="block" id="u76951_img"
                                 src="{{URL::asset('/image/1print - email order banner-01.jpg')}} " alt="" width="290"
                                 height="146"
                                 data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-01.jpg?crc=3906882500">
                        </a>

                        <!-- corporate accounts call image -->
                        <a class="nonblock nontext clip_frame grpelem" id="u76951" href="tel:0398786999"
                           data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 10px;">
                            <!-- image -->
                            <img class="block" id="u76951_img"
                                 src="{{URL::asset('/image/1print - email order banner-02.jpg')}} " alt="" width="290"
                                 height="113"
                                 data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-02.jpg?crc=3866292113">
                        </a>

                    </div>
                    <!--end product_right_option-->
                    <!-- setting up own side bar bottom -->


                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>


    <div class="product_div" id="product_div_id_3" style="display:none">
        <div class="text_holder">
            <div class="main_product_container bcards_holder">

                <div id="breadcrumbs">
                    You are here:
                        <a href="/home" >YellowStar Press</a>
                        »
                            <a href="/product/businessCards" >
                                 BusinessCards Printing
                            </a>
                </div>

            <div class="main_left">
                <div class="main_left_left">
                    <h1 class="card_title">Online Business Card Printing</h1>
                    <h3>We are dedicated to creating high quality business cards at the cheapest price possible.</h3>
                    <p>YellowStar Press Premium Business cards are printed on thick, heavy premium 400gsm and are trimmed to the
                        size you request. Express, gloss and unlaminated Business cards are printed on 310gsm.<br
                            style=""><br style="">
                        Our cards can be either matt or gloss laminated, printed on one or both sides and are available
                        in full CMYK colour. Make a great first impression with a custom business card that expresses
                        your brand identity. Submit your order by filling out the form on the right or contact us for
                        your business card printing needs.
                        <!-- <div class="bcards_stock_left">
                                    <div class="bcards_stock_bkgrd">
                                        <span>400</span><br/>
                                        gsm
                                    </div>
                                    <p class="black_heading">400gsm Hi Bulk Artboard</p>
                                    <p>Business Cards are matt laminated both sides for order quantities over 500.</p>
                                </div>
                                <div class="bcards_stock_right">
                                    <div class="bcards_stock_bkgrd">
                                        <span>310</span><br/>
                                        gsm
                                    </div>
                                    <p class="black_heading">310gsm Hi Bulk Artboard</p>
                                    <p>Used on all other Business Cards incl. Express Printing and Gloss Laminated cards.</p>
                                </div> -->
                    </p>
                    <div class="clear"></div>
                    <a href="/contact"
                       class="setup_banner_wrapper">

                    </a>

                </div>


                <div class="main_left_right">
                    <a>
                        <div class="advertisement2"></div>
                    </a>
{{--                    <div class="panel_pricing">--}}
{{--                        <h4>Pricing includes</h4>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/contact">Free Flight Check</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/contact">Free Job Tracking</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/delivery">Free Delivery</a></span>--}}

{{--                    </div>--}}
{{--                    <div class="panel_extras">--}}
{{--                        <h4 class="padding_top">Optional Extras</h4>--}}
{{--                        <p class="black">These options can be selected once your items have been added to your shopping--}}
{{--                            cart</p>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/fileGuidelines">Convert your file to a print ready format including basic artwork changes</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/design">Graphic Design Services</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/delivery">PDF Proof</a></span>--}}
{{--                        <span class="option_indent black">Priority Delivery</span>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                    </div>--}}
                    <div class="clear"></div>

                    <a>
                        <div class="bcards500"></div>
                    </a>
                </div>
                <div class="clear"></div>
                <div style="clear: both;"></div>
                <div class="main_left_bottom1">

                    <div class="product_info_design no_margin">
                        <a href="javascript:void(0);" onclick="clickHeader(2)">
                            <div class="product_info_design_img">
                            </div>
                            <h4>Design Services</h4>
                            <p>Need artwork setup? Our team of experienced designers can help</p>
                        </a><a class="blue_link"
                        href="javascript:void(0);" onclick="clickHeader(2)">read
                            more+</a>

                    </div>
                    <div class="product_info_gallery gallery_bcards">
                        <a href="javascript:void(0);" onclick="clickHeader(3)">
                            <div class="product_info_gallery_img">
                            </div>
                            <h4>Gallery</h4>
                            <p>Looking for design inspiration? See examples of our work</p>
                        </a><a class="blue_link"
                            href="javascript:void(0);" onclick="clickHeader(3)">read
                            more+</a>

                    </div>
                    <div class="product_info_order">
                        <a href="javascript:void(0);" onclick="clickHeader(14)">
                            <div class="product_info_order_img">
                            </div>
                            <h4>Order process</h4>
                            <p>The ordering process explained</p>
                        </a><a class="blue_link"
                               href="javascript:void(0);" onclick="clickHeader(14)">read
                            more+</a>

                    </div>
{{--                    <div class="product_info_guidelines">--}}
{{--                        <a href="javascript:void(0);" onclick="clickHeader(16)">--}}
{{--                            <div class="product_info_guidelines_img">--}}
{{--                            </div>--}}
{{--                            <h4>File Guidelines</h4>--}}
{{--                            <p>Print specifications to achieve best printing results</p>--}}
{{--                        <a class="blue_link"--}}
{{--                        href="javascript:void(0);" onclick="clickHeader(16)">read--}}
{{--                            more+</a>--}}
{{--                        <br/>--}}

{{--                    </div>--}}

                    <div class="clear"></div>

                    <div style="width:95%;text-align:justify">
                        <p>
                            Even in today's digitally-driven world, business cards are still hugely popular, and are
                            used by virtually every business. They're still considered a
                            vital part of a business's marketing arsenal: as well as simply providing a potential client
                            with your contact details, they do much more. The quality
                            of your business card says a lot about what a client can expect from your business, what you
                            stand for and the type and quality of the products and
                            services you offer.
                        </p>
                        <br style="">
                        <p>
                            A special, high quality business card shows your clients that you're serious about yourself
                            and your business. When they're comparing your
                            business card with the multitude of other business cards they've accumulated, you want yours
                            to stand out to them.
                        </p>
                        <br style="">
                        <p style="color:black">
                            <b>
                                Through the use of innovative materials and careful management we develop business cards
                                that our customers are proud to hand to
                                their potential clients.
                            </b>
                        </p>
                        <br style="">
                        <p>
                            We start with a thick 400gsm premium stock. Both sides are printed in full colour as
                            standard. We then apply an ultra thin layer of matt finish
                            laminate to the front and back surfaces. This matt lamination gives the card a unique
                            texture while offering protection against discolouration and
                            fading.
                        </p>
                    </div>


                </div>

            </div>
            <div class="main_right">
                <div class="clearfix grpelem" id="ppu4866-6"><!-- column -->
                    <div class="product_option_panel">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="product_options_header">Options &amp; Prices</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">

                                    <table cellpadding="0" cellspacing="0" border="0" width="236"
                                           class="product_option_holder">
                                        <tbody>
                                        <tr>

                                            <td colspan="2" align="left" style="padding-top:5px;">
                                                <div class="prooption_desc">Your price will automatically update
                                                    according to your options chosen.
                                                </div>
                                            </td>
                                        </tr>


                                        <tr style="display:none; ">
                                            <td class="content_left"><select name="productqtylist" id="productqtylist"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateProductPrice(58)">
                                                    <option value="250">250</option>
                                                    <option value="500">500</option>
                                                    <option value="1000">1000</option>
                                                    <option value="2000">2000</option>
                                                    <option value="3000">3000</option>
                                                    <option value="4000">4000</option>
                                                    <option value="5000">5000</option>
                                                </select></td>
                                        </tr>

                                        <tr>
                                            <td class="pulldown"><strong>Printed Sides:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select onchange="UpdateBCPrice('side')"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             id="bcard_side" name="productprintedsidelist">
                                                    <option value="PRINTED 2 SIDES">PRINTED 2 SIDES</option>
                                                    <option value="PRINTED 1 SIDE">PRINTED 1 SIDE</option>
                                                </select>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="pulldown"><strong>Laminated:</strong></td>
                                        </tr>

                                        <tr>
                                            <td class="content_left" id="bcfinish"><select id="bcard_laminated"
                                                                                           onchange="UpdateBCPrice('side')"
                                                                                           style="width: 225px; font-size: 12px;"
                                                                                           name="productstocklist">
                                                    <option value="MATT LAMINATED 2 SIDES">350 GSM MATT LAMINATED
                                                    </option>
                                                    <option value="NEW VELVET LAMINATES 2 SIDES">450+ GSM NEW VELVET LAMINATES</option>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td class="pulldown"><strong>Finished Trimmed Size:<br style="">(Square
                                                    Corners)</strong></td>
                                        </tr>

                                        <tr>
                                            <td class="content_left">
                                                <script style="">
                                                    function changeTrimmedSize() {
                                                        $("#producttrimmedsize").val($("#producttrimmedsizelist").val())
                                                    }
                                                </script>
                                                <select id="bcard_size" onchange="UpdateBCPrice(size);"
                                                        style="width: 225px; font-size: 12px;"
                                                        name="producttrimmedsizelist">
                                                    <option value="90 x 55mm">90 x 55mm</option>
                                                    <option value="90 x 50mm">90 x 50mm</option>
                                                    <option value="90 x 45mm">90 x 45mm</option>
                                                </select>
                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- custom quote panel -->
                    <div class="product_quote_panel">
                        <table class="product_quote_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_quote">
                                    <div class="product_quote_text">Looking for more options?</div>
                                    <div class="product_quote_link"><a href="custom-quotes.php">Custom Quote</a></div>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="price_holder_spacer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="product_price_panel">
                        <table class="product_price_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_price_bkgrd" style="padding-top:5px;" align="left">
                                    <div class="price_desc">Select items you would like to purchase, then press "Add to
                                        Cart"
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">


                                    <div id="productpriceupdate">
                                        <div id="refreshselectproduct">
                                            <form name="frmSetProductPrice" method="post" action="cart.php"
                                                  onsubmit="return submitadd2cart(this)">
                                                <table width="230" align="left">
                                                    <tbody>
                                                    <tr>
                                                        <td class="qty_header"><strong>Qty</strong></td>
                                                        <td class="kinds_header"><strong>Kinds</strong></td>
                                                        <td class="price_header"><strong>Price</strong></td>
                                                        <td class="buy_header"><strong>Buy</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">250</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_250-productid_58"
                                                                                       id="bcard_inputbox_250"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       oninput="UpdateProductPrice('bcard','inputbox','250',value);
                                                                                                this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                                value = value.replace(/[^0-9]/g,'');
                                                                                       ">&nbsp;
                                                        </td>
                                                        <td id="bcard_td_250" width="50px">$65.00<input
                                                                type="hidden" name="updateselectedproductprice250"
                                                                id="bcard_price_250" value="65.00"></td>
                                                        <td><input type="checkbox" id="bcard_checkbox_250"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_250-productid_58-price_65.00"
                                                                   onclick="UpdateProductPrice('bcard','checkbox','250')">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_500-productid_58"
                                                                                       id="bcard_inputbox_500"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       oninput="UpdateProductPrice('bcard','inputbox','500',value);
                                                                                                this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                                value = value.replace(/[^0-9]/g,'');
                                                                                       ">&nbsp;
                                                        </td>
                                                        <td id="bcard_td_500" width="50px">$69.00<input
                                                                type="hidden" name="updateselectedproductprice500"
                                                                id="bcard_price_500" value="69.00"></td>
                                                        <td><input type="checkbox" id="bcard_checkbox_500"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_500-productid_58-price_69.00"
                                                                   onclick="UpdateProductPrice('bcard','checkbox','500')">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">1000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_1000-productid_58"
                                                                                       id="bcard_inputbox_1000"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       oninput="UpdateProductPrice('bcard','inputbox','1000',value);
                                                                                                this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                                value = value.replace(/[^0-9]/g,'');">&nbsp;
                                                        </td>
                                                        <td id="bcard_td_1000" width="50px">
                                                            $74.00<input type="hidden"
                                                                         name="updateselectedproductprice1000"
                                                                         id="bcard_price_1000"
                                                                         value="74.00"></td>
                                                        <td><input type="checkbox" id="bcard_checkbox_1000"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_1000-productid_58-price_74.00"
                                                                   onclick="UpdateProductPrice('bcard','checkbox','1000')">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">1500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_2000-productid_58"
                                                                                       id="bcard_inputbox_1500"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       oninput="UpdateProductPrice('bcard','inputbox','1500',value);
                                                                                                this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                                value = value.replace(/[^0-9]/g,'');">&nbsp;
                                                        </td>
                                                        <td id="bcard_td_1500" width="50px">
                                                            $148.00<input type="hidden"
                                                                          name="updateselectedproductprice2000"
                                                                          id="bcard_price_1500"
                                                                          value="148.00"></td>
                                                        <td><input type="checkbox" id="bcard_checkbox_1500"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_2000-productid_58-price_148.00"
                                                                   onclick="UpdateProductPrice('bcard','checkbox','1500')">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">2000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_3000-productid_58"
                                                                                       id="bcard_inputbox_2000"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       oninput="UpdateProductPrice('bcard','inputbox','2000',value);
                                                                                                this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                                value = value.replace(/[^0-9]/g,'');">&nbsp;
                                                        </td>
                                                        <td id="bcard_td_2000" width="50px">
                                                            $222.00<input type="hidden"
                                                                          name="updateselectedproductprice3000"
                                                                          id="bcard_price_2000"
                                                                          value="222.00"></td>
                                                        <td><input type="checkbox" id="bcard_checkbox_2000"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_3000-productid_58-price_222.00"
                                                                   onclick="UpdateProductPrice('bcard','checkbox','2000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td colspan="4"><input type="hidden" id="productid"
                                                                               name="productid" value="58"><input
                                                                type="hidden" id="totalprice" name="totalprice"
                                                                value="0.00"><input type="hidden" id="productstock"
                                                                                    name="productstock"
                                                                                    value="MATT LAMINATED 2 SIDES"><input
                                                                type="hidden" id="productprintedside"
                                                                name="productprintedside" value="PRINTED 2 SIDES"><input
                                                                type="hidden" id="producttrimmedsize"
                                                                name="producttrimmedsize" value="90 x 55mm">
                                                            <hr>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" id="totalpriceupdate">
                                                            <center><span style="font-weight: bold;">Total Price: AUD <p id="bcard_totalPrice">0.00</p></span><div id="flyItem1" class="fly-item"><img src="{{URL::asset('/image/shopping-cart.png')}} "></div>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_1">
                                                            <center><span style="class=" price_msg_first'="">Price
                                                                include GST and delivery</span></center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_2">
                                                            <center><span class="price_msg">All YellowStar Press prices are based on final artwork supplied</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" align="right"><br style="">
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                    <td><a href="javascript:void(0);" class="clear_btn"
                                                                        onclick="clearPrice('bcard');"></a></td>
                                                                    <td><input type="text" class="add_to_cart" id="add_to_cart_id"
                                                                            onclick="addToCart('bcard')"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                            <td colspan="4" class="price_msg_1">
                                                                <center><span class="price_msg_first" id="alert_msg_bcard" style="color:red;"></span>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_footer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- email your order in 3 steps -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951"
                       type="button" onclick="clickHeader(14)"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 13px;">
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-01.jpg')}} " alt="" width="290"
                             height="146"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-01.jpg?crc=3906882500">
                    </a>

                    <!-- corporate accounts call image -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951" href="tel:0398786999"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 10px;">
                        <!-- image -->
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-02.jpg')}} " alt="" width="290"
                             height="113"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-02.jpg?crc=3866292113">
                    </a>

                </div>
                <!--end product_right_option-->
                <!-- setting up own side bar bottom -->


            </div>
            <div class="clear"></div>
        </div>
        </div>
        <div style="clear: both;"></div>
    </div>
<!-- 弃用 4 -->
    <div class="product_div" id="product_div_id_4" style="display:none">
        <div class="text_holder">
        <div class="main_product_container notepad_holder">
            <div id="breadcrumbs">
                    You are here:
                        <a href="/home" >YellowStar Press</a>
                        »
                        <a href="/product/businessCards" >
                                BusinessCards Printing
                        </a>
            </div>

            <div class="main_left">
                <div class="main_left_left">


                    <h1>Online Deskpad &amp; Notepad Printing</h1>
                    <br/>
                    <h3>Few things represent professionalism quite like custom branded stationery.</h3>
                    <p>Print custom desktop pads and note pads with your own company logo, for your staff's use,
                        outbound meeting notes or internal communication. Make a big impression, as a company that pays
                        attention to details.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        We can print your office pads in a range of colours, sizes, finishes, and on a range of
                        different paper stocks. Whether you need an order of 50 or 5000, we can create the professional
                        product for your business.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        Choose from A2, A3, A4, A6 or DL sized notepads or deskpads, and YellowStar Press will find the single or
                        full colour solution for your business. All our notepads and deskpads are printed on high
                        quality 100gsm bond paper.
                    </p>


                </div>
                <div class="main_left_right">

                    <div class="panel_pricing">
                        <h4>FREE Setup</h4>
                        <span class="option_indent"><a
                                href="/contact">If print ready artwork is required, send us your logo and details and we'll setup your artwork for FREE*</a></span>
                        <p>&nbsp;</p>
                        <p class="small">
                            * Digital files remain the property of YellowStar Press, files can be purchased once the design is
                            approved. This offer cannot be used in conjunction with any other promotion.
                        </p>
                        <p>&nbsp;</p>
                    </div>
                    <div class="panel_pricing">
                        <h4>Pricing includes</h4>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Free Flight Check</a></span>
                        <span class="option_indent"><a
                                href="/contact">PDF Proof for your approval*</a></span>
                        <span class="option_indent"><a
                                href="/support">Free Job Tracking</a></span>
                        <span class="option_indent"><a
                                href="/delivery">Free Delivery</a></span>
                        <p>&nbsp;</p>
                        <p class="small">* Limited to one PDF proof per print job.<br>
                            Additional proofs will incur extra charges.</p>
                    </div>

                    <div class="clear"></div>
                    <br>
                    <a>
                        <div class="bcards500"></div>
                    </a>
                </div>
                <div class="clear"></div>
                <div style="clear: both;"></div>


                <div class="notepad_template_list">

                    <div class="bro_setup" style="margin-left: 0rem">
                        <div class="bro_sizing">DL</div>
                        <div class="bro_title">Notepad</div>
                        <div class="bro_sizing_sml">99 x 210m<br/>(50 pages per pad)</div>
                    </div>
                    <div class="bro_setup">
                        <div class="bro_sizing">A6</div>
                        <div class="bro_title">Notepad</div>
                        <div class="bro_sizing_sml">105 x 148mm<br/>(50 pages per pad)</div>
                    </div>
                    <div class="bro_setup">
                        <div class="bro_sizing">A5</div>
                        <div class="bro_title">Notepad</div>
                        <div class="bro_sizing_sml">148 x 210mm<br/>(50 pages per pad)</div>
                    </div>
                    <div class="bro_setup">
                        <div class="bro_sizing">A4</div>
                        <div class="bro_title">Notepad</div>
                        <div class="bro_sizing_sml">210 x 297mm<br/>(50 pages per pad)</div>
                    </div>
                    <div class="bro_setup">
                        <div class="bro_sizing">A3</div>
                        <div class="bro_title">Deskpad</div>
                        <div class="bro_sizing_sml">297 x 420mm<br/>(25 pages per pad)</div>
                    </div>
                    <div class="bro_setup">
                        <div class="bro_sizing">A2</div>
                        <div class="bro_title">Deskpad</div>
                        <div class="bro_sizing_sml">420 x 594mm<br/>(25 pages per pad)</div>
                    </div>
                </div>
                <div style="clear: both;"></div>


                <div class="main_left_bottom1">


                    <div class="product_info_design" style="margin-left: 0rem">
                        <a href="javascript:void(0);" onclick="clickHeader(2)">
                            <div class="product_info_design_img">
                            </div>
                            <h4>Design Services</h4>
                            <p>Need artwork setup? Our team of experienced designers can help</p>
                        </a><a class="blue_link"
                               href="javascript:void(0);" onclick="clickHeader(2)">read
                            more+</a>

                    </div>
                    <div class="product_info_gallery gallery_notepad">
                        <a href="javascript:void(0);" onclick="clickHeader(3)">
                            <div class="product_info_gallery_img">
                            </div>
                            <h4>Gallery</h4>
                            <p>Looking for design inspiration? See examples of our work</p>
                        </a><a class="blue_link"
                        href="javascript:void(0);" onclick="clickHeader(3)">read
                            more+</a>

                    </div>
                    <div class="product_info_order">
                        <a href="javascript:void(0);" onclick="clickHeader(14)">
                            <div class="product_info_order_img">
                            </div>
                            <h4>Order process</h4>
                            <p>The ordering process explained</p>
                        </a><a class="blue_link"
                        href="javascript:void(0);" onclick="clickHeader(14)">read
                            more+</a>

                    </div>
{{--                    <div class="product_info_guidelines">--}}
{{--                        <a href="javascript:void(0);" onclick="clickHeader(16)">--}}
{{--                            <div class="product_info_guidelines_img"></div>--}}
{{--                            <h4>File Guidelines</h4>--}}
{{--                            <p>Print specifications to achieve best printing results</p>--}}
{{--                        <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(16)">read more+</a>--}}
{{--                    </div>--}}

{{--                    <div class="product_info_delivery">--}}
{{--                        <a href="javascript:void(0);" onclick="clickHeader(15)">--}}
{{--                            <div class="product_info_delivery_img">--}}
{{--                            </div>--}}
{{--                            <h4>Free Delivery</h4>--}}
{{--                            <p>Free delivery Australia wide for all products</p>--}}
{{--                        <a class="blue_link"--}}
{{--                        href="javascript:void(0);" onclick="clickHeader(15)">read--}}
{{--                            more+</a>--}}

{{--                    </div>--}}


                    <div class="clear"></div>


                </div>


            </div>
            <div class="main_right">
                <div class="clearfix grpelem" id="ppu4866-6"><!-- column -->
                    <div class="product_option_panel">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="product_options_header">Options &amp; Prices</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">

                                    <table cellpadding="0" cellspacing="0" border="0" width="236"
                                           class="product_option_holder">
                                        <tbody>
                                        <tr>

                                            <td colspan="2" align="left" style="padding-top:5px;">
                                                <div class="prooption_desc">Your price will automatically update
                                                    according to your options chosen.
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pulldown">
                                                <strong>Size:</strong>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productsizelist" id="dn_size"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateProductPriceNotePadDeskPadPrinting(size)">
                                                    <option value="DL 99 x 210">DL 99 x 210</option>
                                                    <option value="A6 105 x 148">A6 105 x 148</option>
                                                    <option value="A5 148 x 210">A5 148 x 210</option>
                                                    <option value="A4 210 x 297">A4 210 x 297</option>
                                                    <option value="A3 297 x 420">A3 297 x 420</option>
                                                    <option value="A2 594 x 420">A2 594 x 420</option>
                                                </select></td>
                                        </tr>

                                        <tr>
                                            <td class="pulldown"
                                            '=""><strong>No. of Pages:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productpagelist" id="dn_page"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateProductPriceNotePadDeskPadPrinting(page)">
                                                    <option value="25 PAGES">25 PAGES</option>
                                                    <option value="50 PAGES">50 PAGES</option>
                                                </select></td>
                                        </tr>


                                        <tr>
                                            <td class="pulldown"><strong>Stock:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productstocklist" id="dn_stock"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateProductPriceNotePadDeskPadPrinting(stock)">
                                                    <option value="100GSM BOND">100GSM BOND</option>
                                                </select></td>
                                        </tr>

                                        <tr>
                                            <td class="pulldown"><strong>Colour:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productcolorlist" id="dn_colour"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateProductPriceNotePadDeskPadPrinting(colour)">
                                                    <option value="4 COLOUR 1 SIDE">4 COLOUR 1 SIDE</option>
                                                    <option value="4 COLOUR 2 SIDES">4 COLOUR 2 SIDES</option>
                                                </select></td>
                                        </tr>

                                        <tr style="display:none; ">
                                            <td class="content_left"><select name="productqtylist" id="productqtylist"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateProductPrice(67)">
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                    <option value="150">150</option>
                                                    <option value="200">200</option>
                                                    <option value="300">300</option>
                                                    <option value="400">400</option>
                                                    <option value="500">500</option>
                                                </select></td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- custom quote panel -->
                    <div class="product_quote_panel">
                        <table class="product_quote_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_quote">
                                    <div class="product_quote_text">Looking for more options?</div>
                                    <div class="product_quote_link"><a href="custom-quotes.php">Custom Quote</a></div>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="price_holder_spacer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="product_price_panel">
                        <table class="product_price_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_price_bkgrd" style="padding-top:5px;" align="left">
                                    <div class="price_desc">Select items you would like to purchase, then press "Add to
                                        Cart"
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">


                                    <div id="productpriceupdate">
                                        <div id="refreshselectproduct">
                                            <form name="frmSetProductPrice"
                                                  data-function-name="class_product_php_update_booklets_price"
                                                  method="post" action="cart.php"
                                                  onsubmit="return submitadd2cart(this)">
                                                <table width="230" align="left">
                                                    <tbody>
                                                    <tr>
                                                        <td class="qty_header"><strong>Qty</strong></td>
                                                        <td class="kinds_header"><strong>Kinds</strong></td>
                                                        <td class="price_header"><strong>Price</strong></td>
                                                        <td class="buy_header"><strong>Buy</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">25</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_25-productid_67"
                                                                                       id="usersetqty_25-productid_67"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_25-productid_67&quot;, &quot;4 COLOUR 1 SIDE&quot;, &quot;100GSM BOND&quot;, &quot;25&quot;, &quot;DL 99 x 210&quot;, &quot;25 PAGES&quot;, &quot;67&quot;, &quot;115.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice25" width="50px">$115.00<input
                                                                type="hidden" name="updateselectedproductprice25"
                                                                id="updateselectedproductprice25" value="115.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_25-productid_67-price_115.00"
                                                                   onclick="AddBookletProduct(this.value, &quot;usersetqty_25-productid_67&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">50</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_50-productid_67"
                                                                                       id="usersetqty_50-productid_67"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_50-productid_67&quot;, &quot;4 COLOUR 1 SIDE&quot;, &quot;100GSM BOND&quot;, &quot;50&quot;, &quot;DL 99 x 210&quot;, &quot;25 PAGES&quot;, &quot;67&quot;, &quot;130.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice50" width="50px">$130.00<input
                                                                type="hidden" name="updateselectedproductprice50"
                                                                id="updateselectedproductprice50" value="130.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_50-productid_67-price_130.00"
                                                                   onclick="AddBookletProduct(this.value, &quot;usersetqty_50-productid_67&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">100</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_100-productid_67"
                                                                                       id="usersetqty_100-productid_67"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_100-productid_67&quot;, &quot;4 COLOUR 1 SIDE&quot;, &quot;100GSM BOND&quot;, &quot;100&quot;, &quot;DL 99 x 210&quot;, &quot;25 PAGES&quot;, &quot;67&quot;, &quot;173.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice100" width="50px">
                                                            $173.00<input type="hidden"
                                                                          name="updateselectedproductprice100"
                                                                          id="updateselectedproductprice100"
                                                                          value="173.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_100-productid_67-price_173.00"
                                                                   onclick="AddBookletProduct(this.value, &quot;usersetqty_100-productid_67&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">150</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_150-productid_67"
                                                                                       id="usersetqty_150-productid_67"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_150-productid_67&quot;, &quot;4 COLOUR 1 SIDE&quot;, &quot;100GSM BOND&quot;, &quot;150&quot;, &quot;DL 99 x 210&quot;, &quot;25 PAGES&quot;, &quot;67&quot;, &quot;220.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice150" width="50px">
                                                            $220.00<input type="hidden"
                                                                          name="updateselectedproductprice150"
                                                                          id="updateselectedproductprice150"
                                                                          value="220.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_150-productid_67-price_220.00"
                                                                   onclick="AddBookletProduct(this.value, &quot;usersetqty_150-productid_67&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">200</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_200-productid_67"
                                                                                       id="usersetqty_200-productid_67"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_200-productid_67&quot;, &quot;4 COLOUR 1 SIDE&quot;, &quot;100GSM BOND&quot;, &quot;200&quot;, &quot;DL 99 x 210&quot;, &quot;25 PAGES&quot;, &quot;67&quot;, &quot;255.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice200" width="50px">
                                                            $255.00<input type="hidden"
                                                                          name="updateselectedproductprice200"
                                                                          id="updateselectedproductprice200"
                                                                          value="255.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_200-productid_67-price_255.00"
                                                                   onclick="AddBookletProduct(this.value, &quot;usersetqty_200-productid_67&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">300</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_300-productid_67"
                                                                                       id="usersetqty_300-productid_67"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_300-productid_67&quot;, &quot;4 COLOUR 1 SIDE&quot;, &quot;100GSM BOND&quot;, &quot;300&quot;, &quot;DL 99 x 210&quot;, &quot;25 PAGES&quot;, &quot;67&quot;, &quot;365.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice300" width="50px">
                                                            $365.00<input type="hidden"
                                                                          name="updateselectedproductprice300"
                                                                          id="updateselectedproductprice300"
                                                                          value="365.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_300-productid_67-price_365.00"
                                                                   onclick="AddBookletProduct(this.value, &quot;usersetqty_300-productid_67&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">400</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_400-productid_67"
                                                                                       id="usersetqty_400-productid_67"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_400-productid_67&quot;, &quot;4 COLOUR 1 SIDE&quot;, &quot;100GSM BOND&quot;, &quot;400&quot;, &quot;DL 99 x 210&quot;, &quot;25 PAGES&quot;, &quot;67&quot;, &quot;440.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice400" width="50px">
                                                            $440.00<input type="hidden"
                                                                          name="updateselectedproductprice400"
                                                                          id="updateselectedproductprice400"
                                                                          value="440.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_400-productid_67-price_440.00"
                                                                   onclick="AddBookletProduct(this.value, &quot;usersetqty_400-productid_67&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_500-productid_67"
                                                                                       id="usersetqty_500-productid_67"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductBooklet(&quot;usersetqty_500-productid_67&quot;, &quot;4 COLOUR 1 SIDE&quot;, &quot;100GSM BOND&quot;, &quot;500&quot;, &quot;DL 99 x 210&quot;, &quot;25 PAGES&quot;, &quot;67&quot;, &quot;510.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice500" width="50px">
                                                            $510.00<input type="hidden"
                                                                          name="updateselectedproductprice500"
                                                                          id="updateselectedproductprice500"
                                                                          value="510.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_500-productid_67-price_510.00"
                                                                   onclick="AddBookletProduct(this.value, &quot;usersetqty_500-productid_67&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"><input type="hidden" id="productid"
                                                                               name="productid" value="67"><input
                                                                type="hidden" id="totalprice" name="totalprice"
                                                                value="0.00"><input type="hidden" id="productsize"
                                                                                    name="productsize"
                                                                                    value="DL 99 x 210"><input
                                                                type="hidden" id="productstock" name="productstock"
                                                                value="100GSM BOND"><input type="hidden"
                                                                                           id="productcolor"
                                                                                           name="productcolor"
                                                                                           value="4 COLOUR 1 SIDE"><input
                                                                type="hidden" id="productpage" name="productpage"
                                                                value="25 PAGES"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" id="totalpriceupdate">
                                                            <center><span style="font-weight: bold;">Total Price: AUD 0.00</span><div id="flyItem" class="fly-item"><img src="{{URL::asset('/image/shopping-cart.png')}} "></div>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_1">
                                                            <center><span class="price_msg_first">Price include GST and delivery</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_2">
                                                            <center><span class="price_msg">All YellowStar Press prices are based on final artwork supplied</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" align="right"><br>
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                    <td><a href="javascript:void(0);" class="clear_btn"
                                                                           onclick="ClearBookletsCache(&quot;4 COLOUR 1 SIDE&quot;, &quot;100GSM BOND&quot;, &quot;500&quot;, &quot;DL 99 x 210&quot;, &quot;25 PAGES&quot;, &quot;67&quot;, &quot;0&quot;);"></a>
                                                                    </td>
                                                                    <td><input type="submit" class="add_to_cart" id="add_to_cart_id"
                                                                               onclick="addToCard(dn)"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                            <td colspan="4" class="price_msg_1">
                                                                <center><span class="price_msg_first" id="alert_msg" style="color:red;"></span>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_footer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- email your order in 3 steps -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951"
                       type="button" onclick="clickHeader(14)"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 13px;">
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-01.jpg')}} " alt="" width="290"
                             height="146"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-01.jpg?crc=3906882500">
                    </a>

                    <!-- corporate accounts call image -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951" href="tel:0398786999"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 10px;">
                        <!-- image -->
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-02.jpg')}} " alt="" width="290"
                             height="113"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-02.jpg?crc=3866292113">
                    </a>


                    <!-- price match panel -->
                    <div class="price_match_banner">
                    </div>


                </div>
                <!--end product_right_option-->
                <!-- setting up own side bar bottom -->

            </div>
            <div class="clear"></div>
        </div>
        </div>
        <div style="clear: both;"></div>
    </div>


    <div class="product_div" id="product_div_id_5" style="display:none">

        <div class="text_holder">
            <div class="main_container">
                <div id="breadcrumbs"style="padding-left: 2rem;">
                    You are here:
                        <a href="/home" >YellowStar Press</a>
                        »
                            <a href="/product/directMarketing" >
                            DirectMarketing
                            </a>
                </div>
                <div class="container_left">
                    <h1>Direct Marketing</h1>
                    <p>In addition to offering you quality printing, YellowStar Press also have the experience and infrastructure
                        required to provide comprehensive direct marketing services to Australian and international
                        clients, for all aspects of advertising and bulk mailing.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        Direct mail marketing helps your company spread awareness about your products, services,
                        upcoming events, product launches or other promotions. A well-targeted direct mail campaign
                        finds the right demographics for your business and delivers a relevant call to action right to
                        their mailbox.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        Direct marketing is widely used by small to large businesses alike, because it works. This
                        low-cost marketing channel distributes your branded messaging to the right audience at the right
                        time, in a way that they cannot ignore.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        We can help you formulate creative marketing strategies, manage the graphic design and provide
                        copywriting and editing services prior to launch. Once the concept is completed we can manage
                        printing and/or distributing of your advertising mail.
                    </p>
                    <p>&nbsp;</p>
                    <p class="black">
                        For more information <b>Call</b> (03)  or <b>email</b> <a
                            href="mailto:sales@yellowstarpress.com.au"
                            class="black_link">sales@yellowstarpress.com.au</a>
                    </p>
                </div>
                <div class="container_right">
                    <h2>Data Solutions</h2>
                    <p>Choose the target audience for your bus
                        iness and your direct marketing campaigns. We have an
                        extensive list of names and addresses that you can choose by industries and demographics.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        Tell us the outcome you need, the audience you desire, and we will provide the very best
                        customer database and marketing lists for your target market.
                    </p>
                    <h2 class="padding_top">Additional Services</h2>
                    <ul class="black_bullets">
                        <li>Mailing of promotional advertising material, invoices, statements, product launches, events,
                            reminder notices, prospectuses.
                        </li>
                        <li>
                            Supply and printing of the envelopes of your choice.
                        </li>
                        <li>Addressing, labelling, inserting.
                        </li>
                        <li>Plastic and shrink wrapping.
                        </li>
                        <li>Packing and fulfillment, including hand-line assembly.
                        </li>
                        <li>Barcoding addresses.
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>

        </div>
        <div style="clear: both;"></div>
    </div>

<!-- signage -->
    <div class="product_div" id="product_div_id_6" style="display:none">
        <div class="text_holder">
        <div class="main_product_container docket_holder">
             <div id="breadcrumbs">
                    You are here:
                        <a href="/home" >YellowStar Press</a>
                        »
                            <a href="/product/docketBooks" >
                            Signage
                            </a>
            </div>

            <div class="main_left">
                <div class="main_left_left">
                    <h1>Online Signage Printing</h1>
                    <h3>Brand your invoice books, signage or receipt books with your company logo and custom
                        design.</h3>
                    <p>Docket booklets are typically used for receipt forms and invoices, with perforated pages that are
                        easy to remove. A copy of the form can be easily torn from the booklet and given to the
                        customer, while a copy can be left in the booklet for the business. A sturdy cover wrap
                        maintains the booklet's integrity and can be inserted between forms to prevent transfer when
                        completing the form.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        Purchase your order, signage, receipt or invoice books, which can all be designed and printed
                        with numbering, perforated pages and colour coding if required.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        If you'd like YellowStar Press to setup your artwork this option can be added into your shopping cart.
                    </p>


                    <div class="option_size_list docket_templates">

                        <div class="bro_setup" style="height:7rem">
                            <div class="bro_sizing" style="font-size:22px;line-height:20px;padding-top:10px;">Metal with TEKflute</div>
                            <div class="bro_sizing_sml">600 x 900mm</div>
                        </div>
                        <div class="clear"></div>

                    </div>


                </div>
                <div class="main_left_right">
                    <a>
                        <div class="advertisement2"></div>
                    </a>
{{--                    <div class="panel_pricing">--}}
{{--                        <h4>Pricing includes</h4>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">Free Flight Check</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">PDF Proof for your approval*</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/delivery">Free Delivery</a></span>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                        <p class="small">* Limited to one PDF proof per print job.--}}
{{--                            Additional proofs will incur extra charges.</p>--}}
{{--                    </div>--}}
{{--                    <div class="panel_extras">--}}
{{--                        <h4 class="padding_top">Optional Extras</h4>--}}
{{--                        <p class="black">These options can be selected once your items have been added to your shopping--}}
{{--                            cart</p>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">Convert your files to a print ready format</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                        href="/design">Graphic Design Services</a></span>--}}

{{--                        <p>&nbsp;</p>--}}
{{--                    </div>--}}
                    <div class="clear"></div>
                    <div class="bx-up" style="margin-top:25%">
                        <div class="bcards500 notop">
                            <a
                               class="bcards500link"></a>
                        </div>

                    </div>

                </div>
                <div style="clear: both;"></div>
                <div class="clear"></div>


                <div class="main_left_bottom1">

                    <div class="product_info_design no_margin" style="margin-left: 0rem">
                        <a href="javascript:void(0);" onclick="clickHeader(2)">
                            <div class="product_info_design_img">
                            </div>
                            <h4>Design Services</h4>
                            <p>Need artwork setup? Our team of experienced designers can help</p>
                            <a class="blue_link"
                            href="javascript:void(0);" onclick="clickHeader(2)">read
                                more+</a>
                        </a>
                    </div>
                    <div class="product_info_gallery gallery_docket">
                        <a href="javascript:void(0);" onclick="clickHeader(3)">
                            <div class="product_info_gallery_img">
                            </div>
                            <h4>Gallery</h4>
                            <p>Looking for design inspiration? See examples of our work</p>
                            <a class="blue_link"
                                href="javascript:void(0);" onclick="clickHeader(3)">read
                                more+</a>
                        </a>
                    </div>
                    <div class="product_info_order">
                        <a href="javascript:void(0);" onclick="clickHeader(14)">
                            <div class="product_info_order_img">
                            </div>
                            <h4>Order process</h4>
                            <p>The ordering process explained</p>
                            <a class="blue_link"
                               href="javascript:void(0);" onclick="clickHeader(14)">read
                                more+</a>
                        </a>
                    </div>
{{--                    <div class="product_info_guidelines">--}}
{{--                        <a href="javascript:void(0);" onclick="clickHeader(16)">--}}
{{--                            <div class="product_info_guidelines_img">--}}
{{--                            </div>--}}
{{--                            <h4>File Guidelines</h4>--}}
{{--                            <p>Print specifications to achieve best printing results</p>--}}
{{--                            <a class="blue_link"--}}
{{--                            href="javascript:void(0);" onclick="clickHeader(16)">read--}}
{{--                                more+</a>--}}
{{--                    </div>--}}


                    <div class="clear"></div>


                </div>

            </div>
            <div class="main_right">
                <div class="clearfix grpelem" id="ppu4866-6"><!-- column -->
                    <div class="product_option_panel" data-product-id="68" id="product_id_68">
                        <script type="text/javascript" style="">
                            jQuery(document).ready(function ($) {
                                hideTwoColour();
                                $("body").on("change", "#product_id_68 select", function () {
                                    hideTwoColour();
                                });
                            });

                            function hideTwoColour() {
                                $("#productcolorlist option").each(function () {
                                    console.log($(this).val());
                                    if ($(this).val() == "2 COLOURS") {
                                        $(this).remove();
                                    }
                                });
                            }
                        </script>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="product_options_header">Options &amp; Prices</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">

                                    <table cellpadding="0" cellspacing="0" border="0" width="236"
                                           class="product_option_holder">
                                        <tbody>
                                        <tr>

                                            <td colspan="2" align="left" style="padding-top:5px;">
                                                <div class="prooption_desc">Your price will automatically update
                                                    according to your options chosen.
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pulldown">
                                                <strong>Stock:</strong>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productsizelist" id="signage_stock"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateSignageProductPrice('size')">
                                                    <option value="A-Frame & Bollard Signs">A-Frame & Bollard Signs</option>
                                                </select></td>
                                        </tr>


                                        <tr>
                                            <td class="pulldown"><strong>Printed Sides:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productcopylist" id="signage_side"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateSignageProductPrice('size')">
                                                    <option value="2 SIDES">2 SIDES</option>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td class="pulldown"><strong>Size:</strong></td>
                                        </tr>
                                        <tr id="carbonlessBookslist1">
                                            <td class="content_left">
                                                <select name="productcarbonlist" id="signage_size"
                                                        style="width: 225px; font-size: 12px;"
                                                        onchange="UpdateSignageProductPrice('size')">
                                                    <option value="Metal with TEKflute Inserts 600 x 900mm">Metal with TEKflute Inserts 600 x 900mm</option>

                                                </select></td>
                                        </tr>



                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- custom quote panel -->
                    <div class="product_quote_panel">
                        <table class="product_quote_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_quote">
                                    <div class="product_quote_text">Looking for more options?</div>
                                    <div class="product_quote_link"><a href="custom-quotes.php">Custom Quote</a></div>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="price_holder_spacer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="product_price_panel">
                        <table class="product_price_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_price_bkgrd" style="padding-top:5px;" align="left">
                                    <div class="price_desc">Select items you would like to purchase, then press "Add to
                                        Cart"
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">


                                    <div id="productpriceupdate">
                                        <div id="refreshselectproduct">
                                            <form name="frmSetProductPrice" method="post" action="cart.php"
                                                  onsubmit="return submitadd2cart(this)">
                                                <table width="230" align="left">
                                                    <tbody>
                                                    <tr>
                                                        <td class="qty_header"><strong>Qty</strong></td>
                                                        <td class="kinds_header"><strong>Kinds</strong></td>
                                                        <td class="price_header"><strong>Price</strong></td>
                                                        <td class="buy_header"><strong>Buy</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">1</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="signage_inputbox_1"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('signage','inputbox','1',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="signage_td_1" width="50px">
                                                            $151.25<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="signage_price_1"
                                                                        value="151.25"></td>
                                                        <td><input type="checkbox" id="signage_checkbox_1"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('signage','checkbox','1')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">5</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="signage_inputbox_5"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('signage','inputbox','5',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="signage_td_5" width="50px">
                                                            $673.75<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="signage_price_5"
                                                                        value="673.75"></td>
                                                        <td><input type="checkbox" id="signage_checkbox_5"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('signage','checkbox','5')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">10</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="signage_inputbox_10"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('signage','inputbox','10',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="signage_td_10" width="50px">
                                                            $1326.88<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="signage_price_10"
                                                                        value="1326.88"></td>
                                                        <td><input type="checkbox" id="signage_checkbox_10"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('signage','checkbox','10')">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"><input type="hidden" id="productid"
                                                                               name="productid" value="68"><input
                                                                type="hidden" id="totalprice" name="totalprice"
                                                                value="0.00"><input type="hidden" id="productsize"
                                                                                    name="productsize" value="A4"><input
                                                                type="hidden" id="productcolor" name="productcolor"
                                                                value="1 COLOUR">
                                                            <input type="hidden" id="productprintedside"
                                                                   name="productprintedside" value="1 SIDE"><input
                                                                type="hidden" id="productcopy" name="productcopy"
                                                                value="DUPLICATE"><input type="hidden"
                                                                                         id="productcarbon"
                                                                                         name="productcarbon"
                                                                                         value="Sets of 50"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" id="totalpriceupdate">
                                                            <center><span style="font-weight: bold;">Total Price: AUD <p id="signage_totalPrice">0.00</p></span><div id="flyItem_signage" class="fly-item"><img src="{{URL::asset('/image/shopping-cart.png')}} "></div>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_1">
                                                            <center><span class="price_msg_first">Price include GST and delivery</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_2">
                                                            <center><span class="price_msg">All YellowStar Press prices are based on final artwork supplied</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" align="right"><br style="">
                                                            <table>
                                                                <tbody>
                                                                <tr>

                                                                    <td>
                                                                        <a href="javascript:void(0);" class="clear_btn" onclick="clearPrice('signage');"></a>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="add_to_cart" id="add_to_cart_id" onclick="addToCart('signage')">
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                            <td colspan="4" class="price_msg_1">
                                                                <center><span class="price_msg_first" id="alert_msg_signage" style="color:red;"></span>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_footer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- email your order in 3 steps -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951"
                       type="button" onclick="clickHeader(14)"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 13px;">
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-01.jpg')}} " alt="" width="290"
                             height="146"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-01.jpg?crc=3906882500">
                    </a>

                    <!-- corporate accounts call image -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951" href="tel:0398786999"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 10px;">
                        <!-- image -->
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-02.jpg')}} " alt="" width="290"
                             height="113"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-02.jpg?crc=3866292113">
                    </a>

                </div>
                <!--end product_right_option-->
                <!-- setting up own side bar bottom -->

            </div>
            <div class="clear"></div>
        </div>
        </div>

        <div style="clear: both;"></div>
    </div>

    <div class="product_div" id="product_div_id_7" style="display:none">
        <div class="text_holder">
        <div class="main_product_container envelope_holder">

            <div id="breadcrumbs">
                    You are here:
                        <a href="/home" >YellowStar Press</a>
                        »
                            <a href="/product/envelopes" >
                            Envelopes Printing
                            </a>
            </div>

            <div class="main_left">
                <div class="main_left_left">
                    <h1>Online Envelope Printing</h1>
                    <h3>Make your company envelopes official with your own printed design.</h3>
                    <p>YellowStar Press is renowned for our reliability and consistency in envelope printing as well as for using
                        the most appropriate and effective equipment in the business. Our envelopes are printed using
                        premium grade materials. We also have a range of sizes to suit your needs. For a smaller
                        envelope, choose our DL (110 x 220mm) or opt for the B4 envelope (353 x 250mm) if you're after a
                        larger size. YellowStar Press also stocks a selection of styles, including both plain and window
                        envelopes.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        For all your direct mail marketing needs, our envelopes are the perfect choice. Printed on high
                        quality paper using our state-of-the-art printing facilities, you can be sure that YellowStar Press will
                        deliver clean and beautifully designed envelopes. </p>
                </div>
                <div class="main_left_right">
                    <a>
                        <div class="advertisement2"></div>
                    </a>
{{--                    <div class="panel_pricing">--}}
{{--                        <h4>Pricing includes</h4>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">Free Flight Check</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">PDF Proof for your approval*</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/support">Free Job Tracking</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/delivery">Free Delivery</a></span>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                        <p class="small">* Limited to one PDF proof per print job.--}}
{{--                            Additional proofs will incur extra charges.</p>--}}
{{--                    </div>--}}

                    <div class="clear"></div>
                    <br style="">
                    <div class="bcards500 notop">
                        <a class="bcards500link"></a>
                    </div>

                </div>
                <div class="clear"></div>
                <div style="clear: both;"></div>


                <div class="option_size_list envelope_templates">

                    <div class="size_4pages size_row">
                        {{--                        <div class="size_col1">--}}
                        {{--                            <img src="{{URL::asset('/image/brochure-4pages-single.png') }} " alt="4 Pages Single Fold"--}}
                        {{--                                 title="4 Pages Single Fold">--}}
                        {{--                            <div class="fold_title">Envelope</div>--}}
                        {{--                            <div class="fold_info">Plain</div>--}}
                        {{--                        </div>--}}
                        <div class="bro_setup">
                            <div class="bro_sizing">DL</div>
                            <div class="bro_title">Envelope</div>
                            <div class="bro_sizing_sml">110 x 220m(folded)</div>
                        </div>
                        <div class="bro_setup">
                            <div class="bro_sizing">DLX</div>
                            <div class="bro_title">Envelope</div>
                            <div class="bro_sizing_sml">120 x 235m(folded)</div>
                        </div>
                        <div class="bro_setup">
                            <div class="bro_sizing">C5</div>
                            <div class="bro_title">Envelope</div>
                            <div class="bro_sizing_sml">162 x 229mm (folded)</div>
                        </div>
                        <div class="bro_setup">
                            <div class="bro_sizing">C4</div>
                            <div class="bro_title">Envelope</div>
                            <div class="bro_sizing_sml">229 x 324m(folded)</div>
                        </div>
                        <div class="clear"></div>
                        <div style="clear: both;"></div>
                    </div>

                    {{--                    <div class="size_6rpages size_row">--}}
                    {{--                        <div class="size_col1">--}}
                    {{--                            <img src="{{URL::asset('/image/brochure folds-09.jpg') }} " alt="4 Page Landscape"--}}
                    {{--                                 title="4 Page Landscape">--}}
                    {{--                            <div class="fold_title">Envelope</div>--}}
                    {{--                            <div class="fold_info">Window</div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="bro_setup">--}}
                    {{--                            <a href="templates/1print_brochure_landscape_4pp_dl_420x99.pdf" target="_blank"--}}
                    {{--                               class="bro_link">--}}
                    {{--                            </a>--}}
                    {{--                            <div class="bro_sizing">DL</div>--}}
                    {{--                            <div class="bro_title">4 Page Landscape</div>--}}
                    {{--                            <div class="bro_sizing_sml">99 x 420m(folded)</div>--}}
                    {{--                            <div class="bro_dl"><a href="templates/1print_brochure_landscape_4pp_dl_420x99.pdf"--}}
                    {{--                                                   target="_blank">Download Template</a></div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="bro_setup">--}}
                    {{--                            <a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf" target="_blank"--}}
                    {{--                               class="bro_link">--}}
                    {{--                            </a>--}}
                    {{--                            <div class="bro_sizing">A5</div>--}}
                    {{--                            <div class="bro_title">4 Page Landscape</div>--}}
                    {{--                            <div class="bro_sizing_sml">148 x 420m(folded)</div>--}}
                    {{--                            <div class="bro_dl"><a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf"--}}
                    {{--                                                   target="_blank">Download Template</a></div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="bro_setup">--}}
                    {{--                            <a href="templates/1print_brochure_landscape_4pp_a4_594x210.pdf" target="_blank"--}}
                    {{--                               class="bro_link">--}}
                    {{--                            </a>--}}
                    {{--                            <div class="bro_sizing">A4</div>--}}
                    {{--                            <div class="bro_title">4 Page Landscape</div>--}}
                    {{--                            <div class="bro_sizing_sml">210 x 594mm (folded)</div>--}}
                    {{--                            <div class="bro_dl"><a href="templates/1print_brochure_landscape_4pp_a4_594x210.pdf"--}}
                    {{--                                                   target="_blank">Download Template</a></div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="bro_setup">--}}
                    {{--                            <a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf" target="_blank"--}}
                    {{--                               class="bro_link">--}}
                    {{--                            </a>--}}
                    {{--                            <div class="bro_sizing">A5</div>--}}
                    {{--                            <div class="bro_title">4 Page Landscape</div>--}}
                    {{--                            <div class="bro_sizing_sml">148 x 420m(folded)</div>--}}
                    {{--                            <div class="bro_dl"><a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf"--}}
                    {{--                                                   target="_blank">Download Template</a></div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="clear"></div>--}}
                    {{--                        <div style="clear: both;"></div>--}}
                    {{--                    </div>--}}

                </div>

                <div class="description-box">
                    <div>
                    </div>
                </div>

                <div>
                    <p>&nbsp;</p>
                    <h3>A powerful marketing tool</h3>
                    <p>
                        Whether you're leading a major marketing campaign or organising a local project, envelopes in
                        the form of direct mail, continue to be a staple in the printing and advertising world. As
                        inhabitants of the information society, we're constantly being bombarded by advertisements and
                        content. Due to this, qualities such as, engagement and retention have never been more
                        important. In fact, this is a major challenge many businesses and marketers are facing today:
                        how can a business penetrate through the enormous bulk of advertisements that consumers are
                        receiving to ensure your message is seen and heard?
                    </p>
                    <p>&nbsp;</p>
                    Although digital marketing offers several benefits, such as its ability to quickly and widely access
                    a large number of people, much of the content that is distributed through the online world is
                    ineffective. This is one of the benefits of traditional forms of advertising, such as direct mail:
                    it encourages undivided attention from your target market. It also provides a sensory, tangible
                    experience that digital marketing cannot compete with. So if you're looking for a form of marketing
                    which commands your customers' complete concentration, traditional forms of marketing such as
                    envelopes in the form of direct mail, are the way to go. Make an impact on your clients with 1Print
                    custom printed envelopes.
                    <p></p>
                    <p>&nbsp;</p>
                    <h3>Why choose us?</h3>
                    <p>
                        For envelope printing at a minimum price but maximum convenience, YellowStar Press is the company for you.
                        We're proud to make life as easy as possible for our clients. That's why we offer free delivery
                        Australia-wide. Envelope printing will be dispatched in 5-7 working days after we have received
                        your order or artwork approval. The dispatch time will depend on the quantity and type of
                        printing. If you're in need of express printing, we have a guaranteed 48 hour dispatch express
                        factory. Orders must be placed daily by 2pm, excluding Saturday &amp; Sunday. Pickup is also
                        available from our production facility daily between 8.00am to 5.00pm. For more information
                        regarding the printing and delivery of your envelopes, click here.
                    </p>
                    <p>&nbsp;</p>
                    If you'd like to request a quote, simply click here and fill out the form. Upon receiving your
                    details, YellowStar Press will contact you promptly to discuss the best solutions for your marketing needs.
                    <p></p>
                </div>


                <div style="clear: both;"></div>
                <div class="main_left_bottom1">


                    <div class="product_info_design" style="margin-left: 0rem">
                        <a href="javascript:void(0);" onclick="clickHeader(2)">
                            <div class="product_info_design_img">
                            </div>
                            <h4>Design Services</h4>
                            <p>Need artwork setup? Our team of experienced designers can help</p>
                            <a class="blue_link"
                               href="javascript:void(0);" onclick="clickHeader(2)">read
                                more+</a>
                        </a>
                    </div>
                    <div class="product_info_gallery gallery_envelope">
                        <a href="javascript:void(0);" onclick="clickHeader(3)">
                            <div class="product_info_gallery_img">
                            </div>
                            <h4>Gallery</h4>
                            <p>Looking for design inspiration? See examples of our work</p>
                            <a class="blue_link"
                            href="javascript:void(0);" onclick="clickHeader(3)">read
                                more+</a>
                        </a>
                    </div>
                    <div class="product_info_order">
                        <a href="javascript:void(0);" onclick="clickHeader(14)">
                            <div class="product_info_order_img">
                            </div>
                            <h4>Order process</h4>
                            <p>The ordering process explained</p>
                            <a class="blue_link"
                            href="javascript:void(0);" onclick="clickHeader(14)">read
                                more+</a>
                        </a>
                    </div>
{{--                    <div class="product_info_guidelines">--}}
{{--                        <a href="javascript:void(0);" onclick="clickHeader(16)">--}}
{{--                            <div class="product_info_guidelines_img">--}}
{{--                            </div>--}}
{{--                            <h4>File Guidelines</h4>--}}
{{--                            <p>Print specifications to achieve best printing results</p>--}}
{{--                            <a class="blue_link"--}}
{{--                            href="javascript:void(0);" onclick="clickHeader(16)">read--}}
{{--                                more+</a>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="product_info_delivery">--}}
{{--                        <a href="javascript:void(0);" onclick="clickHeader(15)">--}}
{{--                            <div class="product_info_delivery_img">--}}
{{--                            </div>--}}
{{--                            <h4>Free Delivery</h4>--}}
{{--                            <p>Free delivery Australia wide for all products</p>--}}
{{--                            <a class="blue_link"--}}
{{--                            href="javascript:void(0);" onclick="clickHeader(15)">read--}}
{{--                                more+</a>--}}
{{--                    </div>--}}


                    <div class="clear"></div>


                </div>

            </div>
            <div class="main_right">
                <div class="clearfix grpelem" id="ppu4866-6"><!-- column -->
                    <div class="product_option_panel">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="product_options_header">Options &amp; Prices</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">

                                    <table cellpadding="0" cellspacing="0" border="0" width="236"
                                           class="product_option_holder">
                                        <tbody>
                                        <tr>

                                            <td colspan="2" align="left" style="padding-top:5px;">
                                                <div class="prooption_desc">Your price will automatically update
                                                    according to your options chosen.
                                                </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="pulldown"><strong>Envelope Type:&nbsp;</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productenvlist" id="env_type"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateEnvProductPrice('type')">
                                                    <option value="DL(110x220mm) Wallet Peel & Seal">DL(110x220mm) Wallet Peel & Seal</option>
                                                    <option value="DL(110x220mm) Banker Moist Seal">DL(110x220mm) Banker Moist Seal</option>
                                                    <option value="DLX(120x235mm) Wallet Peel & Seal">DLX(120x235mm) Wallet Peel & Seal</option>
                                                    <option value="DLX(120x235mm) Banker Moist Seal">DLX(120x235mm) Banker Moist Seal</option>
                                                    <option value="B4 Plain Pocket">B4 Plain Pocket</option>
                                                    <option value="C5(229x162mm) Pocket Peel & Seal">C5(229x162mm) Pocket Peel & Seal</option>
                                                    <option value="C5(169x229mm) Wallet Peel & Seal">C5(169x229mm) Wallet Peel & Seal</option>
                                                    <option value="C5(169x229mm) Wallet Moist Seal">C5(169x229mm) Wallet Moist Seal</option>
                                                </select></td>
                                        </tr>


                                        <tr>
                                            <td class="pulldown"><strong>Colour:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left" id="envcolor"><select name="productcolorlist"
                                                                                           id="env_colour"
                                                                                           style="width: 225px; font-size: 12px;"
                                                                                           onchange="UpdateEnvProductPrice('type')">
                                                    <span><option value="Plain printed full colour">Plain printed full colour </option></span>
                                                    <span><option value="Plain Secretive Printed Full Colour">Plain Secretive Printed Full Colour </option></span>
                                                    <span><option value="Window(28x95) Secretive printed full colour">Window(28x95) Secretive printed full colour</option></span>
                                                    <span><option value="Plain printed 1 PMS">Plain printed 1 PMS </option></span>
                                                    <span> <option value="Plain Secretive printed 1 PMS">Plain Secretive printed 1 PMS</option></span>
                                                    <span><option value="Window(28x95) Secretive Printed 1 PMS">Window(28x95) Secretive Printed 1 PMS</option></span>
                                                    <span><option value="Plain printed 2 PMS">Plain printed 2 PMS </option></span>
                                                    <span><option value="Plain Secretive Printed 2 PMS">Plain Secretive Printed 2 PMS </option></span>
                                                    <span><option value="Window(28x95) Secretive Printed 2 PMS">Window(28x95) Secretive Printed 2 PMS</option></span>
                                                    <span ><option value="Printed 1S + Strip Seal">Printed 1S + Strip Seal </option></span>
                                                    <span ><option value="Window(38x95) Secretive printed full colour">Window(38x95) Secretive printed full colour</option></span>
                                                    <span ><option value="Window(38x95) Secretive printed 1 PMS">Window(38x95) Secretive printed 1 PMS</option></span>
                                                    <span ><option value="Window(38x95) Secretive printed 2 PMS">Window(38x95) Secretive printed 2 PMS</option></span>
                                                </select></td>
                                        </tr>
                                        <tr style="display: none;">
                                            <td id="envcolorupdate" class="content_left"><select name="productcolorlist"
                                                                                                 id="env_colour"
                                                                                                 style="width: 225px; font-size: 12px;"
                                                                                                 onchange="UpdateEnvProductPrice('type')">
                                                    <option value="1">Plain printed full colour </option>
                                                    <option value="2">Window(38x95) Secretive printed full colour</option>
                                                    <option value="3">Plain printed 1 PMS </option>
                                                    <option value="4">Window(38x95) Secretive printed 1 PMS 1 side</option>
                                                    <option value="5">Plain printed 2 PMS </option>
                                                    <option value="6">Window(38x95) Secretive printed full colour </option>
                                                    <option value="7">Window(38x95) Secretive printed 2 PMS 1 side</option>
                                                </select></td>
                                        </tr>
                                        <tr style="display: none;">
                                            <td id="envcolorupdate1" class="content_left"><select
                                                    name="productcolorlist" id="env_colour"
                                                    style="width: 225px; font-size: 12px;"
                                                    onchange="UpdateEnvProductPrice(colour)">
                                                    <option value="1">Plain printed full colour </option>

                                                    <option value="2">Plain printed 1 PMS </option>

                                                    <option value="3">Plain printed 2 PMS </option>

                                                </select></td>
                                        </tr>
                                        <tr style="display: none;">
                                            <td id="envcolorupdate2" class="content_left"><select
                                                    name="productcolorlist" id="env_colour"
                                                    style="width: 225px; font-size: 12px;"
                                                    onchange="UpdateEnvProductPrice(colour)">
                                                    <option value="1">Printed 1S + Strip Seal </option>
                                                </select></td>
                                        </tr>





                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- custom quote panel -->
                    <div class="product_quote_panel">
                        <table class="product_quote_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_quote">
                                    <div class="product_quote_text">Looking for more options?</div>
                                    <div class="product_quote_link"><a href="custom-quotes.php">Custom Quote</a></div>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="price_holder_spacer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="product_price_panel">
                        <table class="product_price_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_price_bkgrd" style="padding-top:5px;" align="left">
                                    <div class="price_desc">Select items you would like to purchase, then press "Add to
                                        Cart"
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">


                                    <div id="productpriceupdate">
                                        <div id="refreshselectproduct">
                                            <form name="frmSetProductPrice" method="post" action="cart.php"
                                                  onsubmit="return submitadd2cart(this)">
                                                <table class="2" width="230" align="left">
                                                    <tbody>
                                                    <tr>
                                                        <td class="qty_header"><strong>Qty</strong></td>
                                                        <td class="kinds_header"><strong>Kinds</strong></td>
                                                        <td class="price_header"><strong>Price</strong></td>
                                                        <td class="buy_header"><strong>Buy</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="env_inputbox_500"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('env','inputbox','500',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="env_td_500" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="env_price_500"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="env_checkbox_500"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('env','checkbox','500')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">1000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="env_inputbox_1000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('env','inputbox','1000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="env_td_1000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="env_price_1000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="env_checkbox_1000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('env','checkbox','1000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">2000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="env_inputbox_2000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('env','inputbox','2000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="env_td_2000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="env_price_2000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="env_checkbox_2000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('env','checkbox','2000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">5000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="env_inputbox_5000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('env','inputbox','5000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="env_td_5000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="env_price_5000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="env_checkbox_5000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('env','checkbox','5000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">10000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="env_inputbox_10000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('env','inputbox','10000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="env_td_10000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="env_price_10000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="env_checkbox_10000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('env','checkbox','10000')">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"><input type="hidden" id="productid"
                                                                               name="productid" value="62"><input
                                                                type="hidden" id="totalprice" name="totalprice"
                                                                value="0.00"><input type="hidden" id="productenvtype"
                                                                                    name="productenvtype"
                                                                                    value="DL PLAIN"><input
                                                                type="hidden" id="productcolor" name="productcolor"
                                                                value="FULL COLOUR"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" id="totalpriceupdate">
                                                            <center><span style="font-weight: bold;">Total Price: AUD<p id="env_totalPrice">0.00</p></span><div id="flyItem_env" class="fly-item"><img src="{{URL::asset('/image/shopping-cart.png')}} "></div>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_1">
                                                            <center><span class="price_msg_first">Price include GST and delivery</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_2">
                                                            <center><span class="price_msg">All YellowStar Press prices are based on final artwork supplied</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" align="right"><br style="">
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="clear_btn" onclick="clearprice('env');"></a>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="add_to_cart" onclick="addToCart('env')">
                                                                </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                            <td colspan="4" class="price_msg_1">
                                                                <center><span class="price_msg_first" id="alert_msg_env" style="color:red;"></span>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_footer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- email your order in 3 steps -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951"
                       type="button" onclick="clickHeader(14)"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 13px;">
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-01.jpg')}} " alt="" width="290"
                             height="146"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-01.jpg?crc=3906882500">
                    </a>

                    <!-- corporate accounts call image -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951" href="tel:0398786999"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 10px;">
                        <!-- image -->
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-02.jpg')}} " alt="" width="290"
                             height="113"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-02.jpg?crc=3866292113">
                    </a>

                </div>
                <!--end product_right_option-->
                <!-- setting up own side bar bottom -->

            </div>
            <div class="clear"></div>
        </div>
        </div>
        <div style="clear: both;"></div>
    </div>

<!-- Banner -->
    <div class="product_div" id="product_div_id_8" style="display:none">
        <div class="text_holder">
        <div class="main_product_container express_holder">

            <div id="breadcrumbs">
                    You are here:
                        <a href="/home" >YellowStar Press</a>
                        »
                            <a href="/product/expressPrinting" >
                                Banner
                            </a>
            </div>
            <div class="main_left">
                <div class="main_left_left">
                    <h1>Banner</h1>
                    <h3>Guaranteed 48 Hours Despatch Ex Factory*</h3>
                    <p>*Orders must be placed daily by 2pm, excluding Saturday &amp; Sunday. Despatch will occur 48
                        Hours upon receipt of your order. Despatch ex. factory does not guarantee a delivery time and
                        our nominated courier company cannot hold us responsible for delays, damage or loss of goods.
                    </p>
                    <p>&nbsp;</p>
                    <p>Pickup is available from our production facility daily between 8.00am to 5.00pm.</p>
                    <p>&nbsp;</p>
                    <p><a class="click_a"
                          href="/contact"
                          target="_blank">Click here to view our factory location.</a></p>

                </div>
                <div class="main_left_right">
                    <a>
                        <div class="advertisement2"></div>
                    </a>
{{--                    <div class="panel_pricing">--}}
{{--                        <h4>Pricing includes</h4>--}}
{{--                        <span class="option_indent"><a--}}
{{--                        href="/pre-flight-checks">Free Flight Check</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/support">Free Job Tracking</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/delivery">Free Delivery</a></span>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                    </div>--}}
{{--                    <div class="panel_extras">--}}
{{--                        <h4 class="padding_top">Can't find the product?</h4>--}}
{{--                        <p class="black"> If you need a job printed urgently and can't find it on this page - contact us--}}
{{--                            through our <a class="blue_link"--}}
{{--                                           href="/contact">custom--}}
{{--                                quote form</a> or call us</p>--}}
{{--                    </div>--}}
                    <div class="clear"></div>
                    <br style="">
                    <div class="bcards500 notop">
                        <a
                           class="bcards500link"></a>
                    </div>


                </div>
                <div class="clear"></div>
                <div style="clear: both;"></div>

                <div class="option_size_list express_templates" style="padding-top: 2rem">
                    <div class="bro_setup" style="height:7rem">
                        <div class="small_bro_sizing" style="font-size: 2rem;line-height: 2rem;color: #7F7F7F">Business<br/>Cards
                        </div>
                        <div class="bro_sizing_sml">850mm</div>
                    </div>
                    <div class="bro_setup" style="height:7rem">
                        <div class="small_bro_sizing" style="font-size: 2rem;line-height: 2rem;color: #7F7F7F">Business<br/>Cards
                        </div>
                        <div class="bro_sizing_sml">1200mm</div>
                    </div>
                    <div class="bro_setup" style="height:7rem">
                        <div class="small_bro_sizing" style="font-size: 2rem;line-height: 2rem;color: #7F7F7F">Business<br/>Cards
                        </div>
                        <div class="bro_sizing_sml">1800mm</div>
                    </div>
                    <div class="bro_setup" style="height:7rem">
                        <div class="small_bro_sizing" style="font-size: 2rem;line-height: 2rem;color: #7F7F7F">Business<br/>Cards
                        </div>
                        <div class="bro_sizing_sml">2400mm</div>
                    </div>
                    <div style="clear: both;"></div>
                </div>


                <div class="main_left_bottom1">


                    <div class="product_info_design"style="margin-left: 0rem">
                        <a href="javascript:void(0);" onclick="clickHeader(2)">
                            <div class="product_info_design_img">
                            </div>
                            <h4>Design Services</h4>
                            <p>Need artwork setup? Our team of experienced designers can help</p>
                            <a class="blue_link"
                               href="javascript:void(0);" onclick="clickHeader(2)">read
                                more+</a>
                        </a>
                    </div>
                    <div class="product_info_gallery gallery_urgent">
                        <a href="javascript:void(0);" onclick="clickHeader(3)">
                            <div class="product_info_gallery_img">
                            </div>
                            <h4>Gallery</h4>
                            <p>Looking for design inspiration? See examples of our work</p>
                            <a class="blue_link"
                            href="javascript:void(0);" onclick="clickHeader(3)">read
                                more+</a>
                        </a>
                    </div>
                    <div class="product_info_order">
                        <a href="javascript:void(0);" onclick="clickHeader(14)">
                            <div class="product_info_order_img">
                            </div>
                            <h4>Order process</h4>
                            <p>The ordering process explained</p>
                            <a class="blue_link"
                            href="javascript:void(0);" onclick="clickHeader(14)">read
                                more+</a>
                        </a>
                    </div>
{{--                    <div class="product_info_guidelines">--}}
{{--                        <a href="javascript:void(0);" onclick="clickHeader(16)">--}}
{{--                            <div class="product_info_guidelines_img">--}}
{{--                            </div>--}}
{{--                            <h4>File Guidelines</h4>--}}
{{--                            <p>Print specifications to achieve best printing results</p>--}}
{{--                            <a class="blue_link"--}}
{{--                            href="javascript:void(0);" onclick="clickHeader(16)">read--}}
{{--                                more+</a>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="product_info_delivery">--}}
{{--                        <a href="javascript:void(0);" onclick="clickHeader(15)">--}}
{{--                            <div class="product_info_delivery_img">--}}
{{--                            </div>--}}
{{--                            <h4>Free Delivery</h4>--}}
{{--                            <p>Free delivery Australia wide for all products</p>--}}
{{--                            <a class="blue_link"--}}
{{--                            href="javascript:void(0);" onclick="clickHeader(15)">read--}}
{{--                                more+</a>--}}
{{--                    </div>--}}

                    <div class="clear"></div>


                </div>

            </div>
            <div class="main_right">
                <div class="clearfix grpelem" id="ppu4866-6"><!-- column -->
                    <div class="product_option_panel">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="product_options_header">Options &amp; Prices</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">

                                    <table cellpadding="0" cellspacing="0" border="0" width="236"
                                           class="product_option_holder">
                                        <tbody>
                                        <tr>

                                            <td colspan="2" align="left" style="padding-top:5px;">
                                                <div class="prooption_desc">Your price will automatically update
                                                    according to your options chosen.
                                                    <script style="">
                                                        //#add jquery for product_id 72 to hide 350GSM for Business card/ hide 400GSM for other SIZE
                                                        //100dfdccec5db05c2d62228c9ef312f4

                                                        jQuery(document).ready(function () {
                                                            hide400();
                                                        });

                                                        function hide400() {

                                                            if (jQuery('#productsizelist').val() == 32) {
                                                                console.log(jQuery('#productsizelist').val());
                                                                console.log(' start working ...');
                                                                var i = 0;
                                                                jQuery('#productstocklist2 option[value="36"]').remove();
                                                                swap_exp_printing('72');
                                                            } else {
                                                                jQuery('#productstocklist option[value="51"]').remove();
                                                            }
                                                        }


                                                    </script>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pulldown"><strong>Stock:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left" id="stockcontainer2">
                                                <select name="productstocklist2"
                                                        onchange="UpdateBannerProductPrice('size');"
                                                        style="width: 225px; font-size: 12px;" id="banner_stock">
                                                    <option value="Premium">Premium Pullup Banner + Black Base</option>
                                                    <option value="Standard">Standard Pullup Banner + Silver Base </option>
                                                    <option value="440GSM">440GSM Polyester X-Frame</option>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td class="pulldown"><strong>Size:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left" id="bannersizecontainer2">
                                                <select name="productsizelist" onchange="UpdateBannerProductPrice('size')"
                                                        style="width: 225px; font-size: 12px;" id="banner_size">
                                                    <option value="850">850mm</option>
                                                    <option value="1200">1200mm</option>
                                                    <span><option value="1800mm">1800mm</option></span>
                                                    <span><option value="2400mm">2400mm</option></span>
                                                    <span><option value="600x1600mm">600x1600mm + Eyelets + Frame + Carry Bag</option></span>

                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left" id="bannersizecontainer1" style="display:none; ">
                                                <select name="productsizelist" onchange="UpdateBannerProductPrice('size2')"
                                                        style="width: 225px; font-size: 12px;" id="banner_size2">
                                                    <option value="850">850mm</option>
                                                    <option value="1200">1200mm</option>

                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left" id="bannersizecontainer3" style="display:none; ">
                                                <select name="productsizelist" onchange="UpdateBannerProductPrice('size')"
                                                        style="width: 225px; font-size: 12px;" id="banner_size">
                                                    <option value="600">600x1600mm + Eyelets + Frame + Carry Bag</option>

                                                </select></td>
                                        </tr>





                                        <tr style="display:none; ">
                                            <td class="content_left"><select name="productqtylist" id="productqtylist"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="swap_exp_printing(72)">
                                                    <option value="150">150</option>
                                                    <option value="250">250</option>
                                                    <option value="500">500</option>
                                                    <option value="1000">1000</option>
                                                    <option value="2000">2000</option>
                                                    <option value="2500">2500</option>
                                                    <option value="3000">3000</option>
                                                    <option value="4000">4000</option>
                                                    <option value="5000">5000</option>
                                                    <option value="6000">6000</option>
                                                    <option value="7000">7000</option>
                                                    <option value="8000">8000</option>
                                                    <option value="9000">9000</option>
                                                    <option value="10000">10000</option>
                                                </select></td>
                                        </tr>




                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- custom quote panel -->
                    <div class="product_quote_panel">
                        <table class="product_quote_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_quote">
                                    <div class="product_quote_text">Looking for more options?</div>
                                    <div class="product_quote_link"><a href="custom-quotes.php">Custom Quote</a></div>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="price_holder_spacer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="product_price_panel">
                        <table class="product_price_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_price_bkgrd" style="padding-top:5px;" align="left">
                                    <div class="price_desc">Select items you would like to purchase, then press "Add to
                                        Cart"
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">


                                    <div id="productpriceupdate">
                                        <div id="refreshselectproduct">
                                            <form name="frmSetProductPrice" method="post" action="cart.php"
                                                  onsubmit="return submitadd2cart(this)">
                                                <table width="230" align="left">
                                                    <tbody>
                                                    <tr>
                                                        <td class="qty_header"><strong>Qty</strong></td>
                                                        <td class="kinds_header"><strong>Kinds</strong></td>
                                                        <td class="price_header"><strong>Price</strong></td>
                                                        <td class="buy_header"><strong>Buy</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">1</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="banner_inputbox_1"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('banner','inputbox','1',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="banner_td_1" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="banner_price_1"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="banner_checkbox_1"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('banner','checkbox','1')">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"><input type="hidden" id="productid"
                                                                               name="productid" value="72"><input
                                                                type="hidden" id="totalprice" name="totalprice"
                                                                value="0.00"><input type="hidden"
                                                                                    id="productprintedside"
                                                                                    name="productprintedside"
                                                                                    value="19"><input type="hidden"
                                                                                                      id="productsize"
                                                                                                      name="productsize"
                                                                                                      value="32"><input
                                                                type="hidden" id="productstock" name="productstock"
                                                                value="36"><input type="hidden" id="productfinish"
                                                                                  name="productfinish" value="7"><input
                                                                type="hidden" id="productfolding" name="productfolding"
                                                                value="1"><input type="hidden" id="productscoring"
                                                                                 name="productscoring" value="2"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" id="totalpriceupdate">
                                                            <center><span style="font-weight: bold;">Total Price: AUD <p id="banner_totalPrice"></span><div id="flyItem_banner" class="fly-item"><img src="{{URL::asset('/image/shopping-cart.png')}} "></div>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_1">
                                                            <center><span class="price_msg_first">Price include GST and delivery</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_2">
                                                            <center><span class="price_msg">All YellowStar Press prices are based on final artwork supplied</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" align="right"><br style="">
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="clear_btn" onclick="clearPrice('banner');"></a>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="add_to_cart" id="add_to_cart_id" onclick="addToCart('banner')">
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                            <td colspan="4" class="price_msg_1">
                                                                <center><span class="price_msg_first" id="alert_msg_banner" style="color:red;"></span>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_footer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- email your order in 3 steps -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951"
                       type="button" onclick="clickHeader(14)"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 13px;">
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-01.jpg')}} " alt="" width="290"
                             height="146"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-01.jpg?crc=3906882500">
                    </a>

                    <!-- corporate accounts call image -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951" href="tel:0398786999"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 10px;">
                        <!-- image -->
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-02.jpg')}} " alt="" width="290"
                             height="113"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-02.jpg?crc=3866292113">
                    </a>

                </div>
                <!--end product_right_option-->
                <!-- setting up own side bar bottom -->

            </div>
            <div class="clear"></div>
        </div>
        </div>
        <div style="clear: both;"></div>
    </div>


    <div class="product_div" id="product_div_id_9" style="display:none">
        <div class="text_holder">
        <div class="main_product_container flyer_holder">
            <div id="breadcrumbs">
                    You are here:
                        <a href="/home" >YellowStar Press</a>
                        »
                            <a href="/product/flyers" >
                            Flyers Printing
                            </a>
            </div>
            <div class="main_left">
                <div class="main_left_left">
                    <h1>Online Flyer Printing</h1>
                    <h3>Quality flyers are a fantastic way to make great impact on your clients.</h3>
                    <p>The difference between a new lead and a lost opportunity can come down to the quality of your
                        marketing materials.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        Our flyers are printed on high GSM printing stock that will compliment your design and reinforce
                        the professionalism of your brand.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        Reach potential customers with the right marketing message using cost effective, full colour
                        flyers or economical, single colour flyer printing.
                    </p>
                    <br style="">
                    <a href="/product/brochures">
                        <div id="u56029-6">
                            <img src="{{URL::asset('image/design icons-05.png')}}" width="40" height="40"
                                 style="float:left">
                            <div style="float:left;height:46px">
                                <span class="span_looking">Are you looking for folded brochures?</span> Click here
                            </div>
                        </div>
                    </a>
                        <div class="clear"></div>

                        <div class="option_size_list flyer_templates" style="display:inline-flex;margin-top:10rem">
                            <div class="bro_setup" style="height:7rem;margin:0rem">
                                <div class="small_bro_sizing">DL</div>
                                <div class="bro_sizing_sml">99 x 210mm</div>
                            </div>
                            <div class="bro_setup" style="height:7rem">
                                <div class="small_bro_sizing">A6</div>
                                <div class="bro_sizing_sml">105 x 148.5mm</div>
                            </div>
                            <div class="bro_setup" style="height:7rem">
                                <div class="small_bro_sizing">A5</div>
                                <div class="bro_sizing_sml">148.5 x 210mm</div>
                            </div>
                            <div class="bro_setup" style="height:7rem">
                                <div class="small_bro_sizing">A4</div>
                                <div class="bro_sizing_sml">210 x 297mm</div>
                            </div>
                            <div class="bro_setup" style="height:7rem">
                                <div class="small_bro_sizing">A3</div>
                                <div class="bro_sizing_sml">297 x 420mm</div>
                            </div>
                        </div>
                        <div class="clear"></div>
                </div>
                <div class="main_left_right">
                    <a>
                        <div class="advertisement2"></div>
                    </a>
{{--                    <div class="panel_pricing">--}}
{{--                        <h4>Pricing includes</h4>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">Free Flight Check</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">PDF Proof for your approval*</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/delivery">Free Delivery</a></span>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                        <p class="small">* Limited to one PDF proof per print job.--}}
{{--                            Additional proofs will incur extra charges.</p>--}}
{{--                    </div>--}}
{{--                    <div class="panel_extras">--}}
{{--                        <h4 class="padding_top">Optional Extras</h4>--}}
{{--                        <p class="black">These options can be selected once your items have been added to your shopping--}}
{{--                            cart</p>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">Convert your files to a print ready format</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                        href="javascript:void(0);" onclick="clickHeader(2)">Graphic Design Services</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                        href="/pre-flight-checks">Hard Copy Proofs</a></span>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                    </div>--}}
                    <div class="clear"></div>
                    <div class="bcards500 notop">
                        <a
                           class="bcards500link"></a>
                    </div>


                </div>
                <div class="clear"></div>
                <div style="clear: both;"></div>


                <div class="main_left_bottom1">

                    <div class="product_info_design no_margin">
                        <a href="javascript:void(0);" onclick="clickHeader(2)">
                            <div class="product_info_design_img">
                            </div>
                            <h4>Design Services</h4>
                            <p>Need artwork setup? Our team of experienced designers can help</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(2)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_gallery gallery_flyer">
                        <a href="javascript:void(0);" onclick="clickHeader(3)">
                            <div class="product_info_gallery_img">
                            </div>
                            <h4>Gallery</h4>
                            <p>Looking for design inspiration? See examples of our work</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(3)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_order">
                        <a href="javascript:void(0);" onclick="clickHeader(14)">
                            <div class="product_info_order_img">
                            </div>
                            <h4>Order process</h4>
                            <p>The ordering process explained</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(14)">read more+</a>
                        </a>
                    </div>
{{--                    <div class="product_info_guidelines">--}}
{{--                        <a href="javascript:void(0);" onclick="clickHeader(16)">--}}
{{--                            <div class="product_info_guidelines_img">--}}
{{--                            </div>--}}
{{--                            <h4>File Guidelines</h4>--}}
{{--                            <p>Print specifications to achieve best printing results</p>--}}
{{--                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(16)">read more+</a>--}}
{{--                        </a>--}}
{{--                    </div>--}}


                    <div class="clear"></div>


                </div>

            </div>
            <div class="main_right">
                <div class="clearfix grpelem" id="ppu4866-6"><!-- column -->
                    <div class="product_option_panel">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="product_options_header">Options &amp; Prices</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">

                                    <table cellpadding="0" cellspacing="0" border="0" width="236"
                                           class="product_option_holder">
                                        <tbody>
                                        <tr>

                                            <td colspan="2" align="left" style="padding-top:5px;">
                                                <div class="prooption_desc">Your price will automatically update
                                                    according to your options chosen.
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- products_id -->
                                        <tr>
                                            <td class="pulldown"><strong>Size:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left" id="flyersize"><select name="productsizelist"
                                                                                            id="flyer_size"
                                                                                            style="width: 225px; font-size: 12px;"
                                                                                            onchange="UpdateFlyerProductPrice('size')">

                                                    <option value="DL">DL </option>
                                                    <option value="A6">A6 </option>
                                                    <option value="A5">A5 </option>
                                                    <option value="A4">A4 </option>
                                                    <option value="A3">A3 </option>
                                                </select></td>
                                        </tr>



                                        <tr>
                                            <td class="pulldown"><strong>Stock:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left" id="productflyer"><select id="flyer_stock"
                                                                                               onchange="UpdateFlyerProductPrice('size')"
                                                                                               style="width: 225px; font-size: 12px;"
                                                                                               name="productstocklist">
                                                        <option value="115GSM Gloss or Matt">115GSM Gloss or Matt
                                                        </option>
                                                        <option value="150GSM Goss or Matt">150GSM Goss or Matt
                                                        </option>
                                                        <option value="170GSM Gloss or Matt">170GSM Gloss or Matt
                                                        </option>
                                                        <option value="250GSM Gloss or Matt">250GSM Gloss or Matt
                                                        </option>
                                                </select></td>
                                        </tr>

                                        <tr>
                                            <td class="pulldown"><strong>Sides:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left" id="flyercolor"><select name="productcolorlist"
                                                                                             id="flyer_side"
                                                                                             style="width: 225px; font-size: 12px;"
                                                                                             onchange="UpdateFlyerProductPrice('size')">
                                                    <option value="FULL COLOUR FRONT ONLY">FULL COLOUR FRONT ONLY
                                                    </option>
                                                    <option value="FULL COLOUR BOTH SIDES">FULL COLOUR BOTH SIDES
                                                    </option>
                                                </select></td>
                                        </tr>



                                        <tr style="display:none; ">
                                            <td class="content_left"><select name="productqtylist" id="productqtylist"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateProductPrice(63)">
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                    <option value="150">150</option>
                                                    <option value="200">200</option>
                                                    <option value="250">250</option>
                                                    <option value="500">500</option>
                                                    <option value="750">750</option>
                                                    <option value="1000">1000</option>
                                                    <option value="1500">1500</option>
                                                    <option value="2000">2000</option>
                                                    <option value="2500">2500</option>
                                                    <option value="3000">3000</option>
                                                    <option value="4000">4000</option>
                                                    <option value="5000">5000</option>
                                                    <option value="6000">6000</option>
                                                    <option value="7000">7000</option>
                                                    <option value="8000">8000</option>
                                                    <option value="9000">9000</option>
                                                    <option value="10000">10000</option>
                                                </select></td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- custom quote panel -->
                    <div class="product_quote_panel">
                        <table class="product_quote_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_quote">
                                    <div class="product_quote_text">Looking for more options?</div>
                                    <div class="product_quote_link"><a href="custom-quotes.php">Custom Quote</a></div>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="price_holder_spacer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="product_price_panel">
                        <table class="product_price_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_price_bkgrd" style="padding-top:5px;" align="left">
                                    <div class="price_desc">Select items you would like to purchase, then press "Add to
                                        Cart"
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">


                                    <div id="productpriceupdate">
                                        <div id="refreshselectproduct">
                                            <form name="frmSetProductPrice" method="post" action="cart.php"
                                                  onsubmit="return submitadd2cart(this)">
                                                <table width="230" align="left">
                                                    <tbody>
                                                    <tr>
                                                        <td class="qty_header"><strong>Qty</strong></td>
                                                        <td class="kinds_header"><strong>Kinds</strong></td>
                                                        <td class="price_header"><strong>Price</strong></td>
                                                        <td class="buy_header"><strong>Buy</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">250</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="flyer_inputbox_250"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('flyer','inputbox','250',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="flyer_td_250" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="flyer_price_250"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="flyer_checkbox_250"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('flyer','checkbox','250')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="flyer_inputbox_500"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('flyer','inputbox','500',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="flyer_td_500" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="flyer_price_500"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="flyer_checkbox_500"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('flyer','checkbox','500')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">1000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="flyer_inputbox_1000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('flyer','inputbox','1000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="flyer_td_1000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="flyer_price_1000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="flyer_checkbox_1000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('flyer','checkbox','1000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">1500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="flyer_inputbox_1500"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('flyer','inputbox','1500',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="flyer_td_1500" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="flyer_price_1500"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="flyer_checkbox_1500"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('flyer','checkbox','1500')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">2000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="flyer_inputbox_2000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('flyer','inputbox','2000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="flyer_td_2000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="flyer_price_2000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="flyer_checkbox_2000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('flyer','checkbox','2000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">5000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="flyer_inputbox_5000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('flyer','inputbox','5000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="flyer_td_5000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="flyer_price_5000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="flyer_checkbox_5000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('flyer','checkbox','5000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">10000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="flyer_inputbox_10000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('flyer','inputbox','10000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="flyer_td_10000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="flyer_price_10000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="flyer_checkbox_10000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('flyer','checkbox','10000')">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"><input type="hidden" id="productid"
                                                                               name="productid" value="63"><input
                                                                type="hidden" id="totalprice" name="totalprice"
                                                                value="0.00"><input type="hidden" id="productsize"
                                                                                    name="productsize"
                                                                                    value="A4 210 x 297"><input
                                                                type="hidden" id="productstock" name="productstock"
                                                                value="150GSM GLOSS OR SILK"><input type="hidden"
                                                                                                    id="productcolor"
                                                                                                    name="productcolor"
                                                                                                    value="FULL COLOUR FRONT ONLY">
                                                            <hr>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" id="totalpriceupdate">
                                                        <center><span style="font-weight: bold;">Total Price: AUD <p id="flyer_totalPrice">0.00</p></span><div id="flyItem_flyer" class="fly-item"><img src="{{URL::asset('/image/shopping-cart.png')}} "></div>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_1">
                                                            <center><span style="class=" price_msg_first'="">Price
                                                                include GST and delivery</span></center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_2">
                                                            <center><span class="price_msg">All YellowStar Press prices are based on final artwork supplied</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" align="right"><br style="">
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="clear_btn" onclick="clearPrice('flyer');"></a>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="add_to_cart" id="add_to_cart_id" onclick="addToCart('flyer')">
                                                                </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                            <td colspan="4" class="price_msg_1">
                                                                <center><span class="price_msg_first" id="alert_msg_flyer" style="color:red;"></span>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_footer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- email your order in 3 steps -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951"
                       type="button" onclick="clickHeader(14)"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 13px;">
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-01.jpg')}} " alt="" width="290"
                             height="146"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-01.jpg?crc=3906882500">
                    </a>

                    <!-- corporate accounts call image -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951" href="tel:0398786999"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 10px;">
                        <!-- image -->
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-02.jpg')}} " alt="" width="290"
                             height="113"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-02.jpg?crc=3866292113">
                    </a>

                </div>
                <!--end product_right_option-->
                <!-- setting up own side bar bottom -->

            </div>
            <div class="clear"></div>
        </div>
        </div>
        <div style="clear: both;"></div>
    </div>

<!-- 弃用 10 -->
    <div class="product_div" id="product_div_id_10" style="display:none">
        <div class="text_holder">
        <div class="main_product_container magnet_holder">
            <div id="breadcrumbs">
                    You are here:
                        <a href="/home" >YellowStar Press</a>
                        »
                            <a href="/product/flyers" >
                            Flyers Printing
                            </a>
            </div>

            <div class="main_left">
                <div class="main_left_left">
                    <h1>Online Fridge Magnet Printing</h1>
                    <h3>Fridge magnets will keep your brand top-of-mind with your customers.</h3>
                    <p>Just consider how ubiquitous the humble fridge magnet is in the home, and how comfortable we are
                        with this branded presence in our offices and kitchens. Your customers visit their fridges
                        numerous times within 24 hours, and they will be reminded of your services each time they do.
                        This is the main reason that branded magnets continue to drive impressive ROI.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        Use our free magnet DIY template or liaise with our internal design team to create the right
                        marketing message for you.
                    </p>
                    <p>&nbsp;</p>

                </div>
                <div class="main_left_right">
                    <a>
                        <div class="advertisement2"></div>
                    </a>
{{--                    <div class="panel_pricing">--}}
{{--                        <h4>Pricing includes</h4>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">Free Flight Check</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">PDF Proof for your approval*</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/support">Free Job Tracking</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/delivery">Free Delivery</a></span>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                        <p class="small">* Limited to one PDF proof per print job.--}}
{{--                            Additional proofs will incur extra charges.</p>--}}
{{--                    </div>--}}
{{--                    <div class="panel_extras">--}}
{{--                        <h4 class="padding_top">Optional Extras</h4>--}}
{{--                        <p class="black">These options can be selected once your items have been added to your shopping--}}
{{--                            cart</p>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">Convert your files to a print ready format</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/design">Graphic Design Services</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/colour-critical">Hard Copy Proofs</a></span>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                    </div>--}}
                    <div class="clear"></div>

                    <div class="bcards500 notop">
                        <a
                           class="bcards500link"></a>
                    </div>

                </div>
                <div class="clear"></div>
                <div style="clear: both;"></div>
                <div class="main_left_bottom1">

                    <div class="product_info_design"style="margin-left: 0rem">
                        <a href="javascript:void(0);" onclick="clickHeader(2)">
                            <div class="product_info_design_img">
                            </div>
                            <h4>Design Services</h4>
                            <p>Need artwork setup? Our team of experienced designers can help</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(2)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_gallery gallery_magnet">
                        <a href="javascript:void(0);" onclick="clickHeader(3)">
                            <div class="product_info_gallery_img">
                            </div>
                            <h4>Gallery</h4>
                            <p>Looking for design inspiration? See examples of our work</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(3)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_order">
                        <a href="javascript:void(0);" onclick="clickHeader(14)">
                            <div class="product_info_order_img">
                            </div>
                            <h4>Order process</h4>
                            <p>The ordering process explained</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(14)">read more+</a>
                        </a>
                    </div>
{{--                    <div class="product_info_guidelines">--}}
{{--                        <a href="javascript:void(0);" onclick="clickHeader(16)">--}}
{{--                            <div class="product_info_guidelines_img">--}}
{{--                            </div>--}}
{{--                            <h4>File Guidelines</h4>--}}
{{--                            <p>Print specifications to achieve best printing results</p>--}}
{{--                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(16)">read more+</a>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                    <div class="product_info_templates">
                        <a href="templates/1print_sample_magnet_templates.pdf" target="_blank">
                            <div class="product_info_templates_img">
                            </div>
                            <h4>Artwork Templates</h4>
                            <p>Need artwork setup? Our team of experienced designers can help</p>
                            <a class="blue_link" href="templates/1print_sample_magnet_templates.pdf" target="_blank">read more+</a>
                        </a>
                    </div>


                    <div class="clear"></div>


                </div>

            </div>
            <div class="main_right">
                <div class="clearfix grpelem" id="ppu4866-6"><!-- column -->
                    <div class="product_option_panel">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="product_options_header">Options &amp; Prices</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">

                                    <table cellpadding="0" cellspacing="0" border="0" width="236"
                                           class="product_option_holder">
                                        <tbody>
                                        <tr>

                                            <td colspan="2" align="left" style="padding-top:5px;">
                                                <div class="prooption_desc">Your price will automatically update
                                                    according to your options chosen.
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pulldown">
                                                <strong>Finished Size:</strong>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productsizelist" id="fridge_size"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onclick="UpdateFridgeProductPrice('size')">
                                                    <option value="50x50mm Square cut">50x50mm Square cut</option>
                                                    <option value="50x50mm Rounded corners cut">50x50mm Rounded corners cut</option>
                                                    <option value="70x50mm Square cut">70x50mm Square cut</option>
                                                    <option value="70x50mm Rounded corners cut">70x50mm Rounded corners cut</option>
                                                    <option value="90x50mm Square cut">90x50mm Square cut</option>
                                                    <option value="90x50mm Rounded corners cut">90x50mm Rounded corners cut</option>
                                                </select></td>
                                        </tr>


                                        <tr style="display:none; ">
                                            <td class="content_left"><select name="productqtylist" id="productqtylist"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateProductPrice(74)">
                                                    <option value="500">500</option>
                                                    <option value="1000">1000</option>
                                                    <option value="2500">2500</option>
                                                    <option value="5000">5000</option>
                                                </select></td>
                                        </tr>

                                        <tr>
                                            <td class="pulldown"><strong>Printed Sides:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productprintedsidelist"
                                                                             id="fridge_sides"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateFridgeProductPrice('sides')">
                                                    <option value="1 SIDE">1 SIDE</option>
                                                </select></td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- custom quote panel -->
                    <div class="product_quote_panel">
                        <table class="product_quote_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_quote">
                                    <div class="product_quote_text">Looking for more options?</div>
                                    <div class="product_quote_link"><a href="custom-quotes.php">Custom Quote</a></div>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="price_holder_spacer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="product_price_panel">
                        <table class="product_price_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_price_bkgrd" style="padding-top:5px;" align="left">
                                    <div class="price_desc">Select items you would like to purchase, then press "Add to
                                        Cart"
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">


                                    <div id="productpriceupdate">
                                        <div id="refreshselectproduct">
                                            <form name="frmSetProductPrice" method="post" action="cart.php"
                                                  onsubmit="return submitadd2cart(this)">
                                                <table width="230" align="left">
                                                    <tbody>
                                                    <tr>
                                                        <td class="qty_header"><strong>Qty</strong></td>
                                                        <td class="kinds_header"><strong>Kinds</strong></td>
                                                        <td class="price_header"><strong>Price</strong></td>
                                                        <td class="buy_header"><strong>Buy</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_500-productid_74"
                                                                                       id="fridge_inputbox_500"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       oninput="UpdateProductPrice('fridge','inputbox','500',value);
                                                                                                this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                                value = value.replace(/[^0-9]/g,'');
                                                                                       ">
                                                        </td>
                                                        <td id="fridge_td_500" width="50px">
                                                            $209.00<input type="hidden"
                                                                          name="updateselectedproductprice500"
                                                                          id="fridge_price_500"
                                                                          value="209.00"></td>
                                                        <td><input type="checkbox" id="fridge_checkbox_500"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_500-productid_74-price_209.00"
                                                                   onclick="UpdateProductPrice('fridge','checkbox','500')">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">1000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_1000-productid_74"
                                                                                       id="fridge_inputbox_1000"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       oninput="UpdateProductPrice('fridge','inputbox','1000',value);
                                                                                                this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                                value = value.replace(/[^0-9]/g,'');
                                                                                        ">
                                                        </td>
                                                        <td id="fridge_td_1000" width="50px">
                                                            $275.00<input type="hidden"
                                                                          name="updateselectedproductprice1000"
                                                                          id="fridge_price_1000"
                                                                          value="275.00"></td>
                                                        <td><input type="checkbox" id="fridge_checkbox_1000"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_1000-productid_74-price_275.00"
                                                                   onclick="UpdateProductPrice('fridge','checkbox','1000')">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">2500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_2500-productid_74"
                                                                                       id="fridge_inputbox_2500"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       oninput="UpdateProductPrice('fridge','inputbox','2500',value);
                                                                                                this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                                value = value.replace(/[^0-9]/g,'');
                                                                                       ">
                                                        </td>
                                                        <td id="fridge_td_2500" width="50px">
                                                            $577.00<input type="hidden"
                                                                          name="updateselectedproductprice2500"
                                                                          id="fridge_price_2500"
                                                                          value="577.00"></td>
                                                        <td><input type="checkbox" id="fridge_checkbox_2500"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_2500-productid_74-price_577.00"
                                                                   onclick="UpdateProductPrice('fridge','checkbox','2500')">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">5000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_5000-productid_74"
                                                                                       id="fridge_inputbox_5000"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       oninput="UpdateProductPrice('fridge','inputbox','5000',value)
                                                                                                this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                                value = value.replace(/[^0-9]/g,'');
                                                                                       ">
                                                        </td>
                                                        <td id="fridge_td_5000" width="50px">
                                                            $880.00<input type="hidden"
                                                                          name="updateselectedproductprice5000"
                                                                          id="fridge_price_5000"
                                                                          value="880.00"></td>
                                                        <td><input type="checkbox" id="fridge_checkbox_5000"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_5000-productid_74-price_880.00"
                                                                   onclick="UpdateProductPrice('fridge','checkbox','2500')">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"><input type="hidden" id="productid"
                                                                               name="productid" value="74"><input
                                                                type="hidden" id="totalprice" name="totalprice"
                                                                value="0.00"><input type="hidden" id="productsize"
                                                                                    name="productsize"
                                                                                    value="50x50mm Square cut"><input
                                                                type="hidden" id="productstock" name="productstock"
                                                                value=""><input type="hidden" id="productcolor"
                                                                                name="productcolor" value=""><input
                                                                type="hidden" id="productprintedside"
                                                                name="productprintedside" value="1 SIDE"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" id="totalpriceupdate">
                                                            <center><span style="font-weight: bold;">Total Price: $ <p id="fridge_totalPrice">0.00</p></span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_1">
                                                            <center><span class="price_msg_first">Price include GST and delivery</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_2">
                                                            <center><span class="price_msg">All YellowStar Press prices are based on final artwork supplied</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" align="right"><br style="">
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                    <td><a href="javascript:void(0);" class="clear_btn"
                                                                           onclick="clearPrice('fridge');"></a></td>
                                                                    <td><input type="text" class="add_to_cart" id="add_to_cart_id"
                                                                               onclick="addToCart('fridge')"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                            <td colspan="4" class="price_msg_1">
                                                                <center><span class="price_msg_first" id="alert_msg_fridge" style="color:red;"></span>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_footer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- email your order in 3 steps -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951"
                       type="button" onclick="clickHeader(14)"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 13px;">
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-01.jpg')}} " alt="" width="290"
                             height="146"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-01.jpg?crc=3906882500">
                    </a>

                    <!-- corporate accounts call image -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951" href="tel:0398786999"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 10px;">
                        <!-- image -->
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-02.jpg')}} " alt="" width="290"
                             height="113"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-02.jpg?crc=3866292113">
                    </a>
                </div>
                <!--end product_right_option-->
                <!-- setting up own side bar bottom -->

            </div>
            <div class="clear"></div>
        </div>
        </div>
        <div style="clear: both;"></div>
    </div>

    <div class="product_div" id="product_div_id_11" style="display:none">
        <div class="text_holder">
        <div class="main_product_container letterhead_holder">
            <div id="breadcrumbs">
                    You are here:
                        <a href="/home" >YellowStar Press</a>
                        »
                            <a href="/product/letterheads" >
                            Letterheads Printing
                            </a>
            </div>

            <div class="main_left">
                <div class="main_left_left">
                    <h1>Online Letterhead Printing</h1>
                    <h3>When an official company letterhead, the printing quality needs to be consistently high.</h3>
                    <p>Trust YellowStar Press to print your letterhead as it was intended to appear, replicated perfectly on every
                        sheet, every time. We will print your letterheads on time, and deliver them for FREE within
                        Australia.
                    </p>
                    <br/>
                    <div class="option_size_list letterhead_templates">
                        <div class="bro_setup" style="height:7rem;margin-left:0rem;margin-top:2rem">
                            <div class="small_bro_sizing">A4</div>
                            <div class="bro_sizing_sml">210 x 297mm</div>
                        </div>

                    </div>


                </div>
                <div class="main_left_right">
                    <a>
                        <div class="advertisement2"></div>
                    </a>
                    <div class="clear"></div>
                    <div class="bcards500 notop">
                        <a class="bcards500link"></a>
                    </div>

                </div>
                <div class="clear"></div>
                <div style="clear: both;"></div>
                <div class="main_left_bottom1">


                    <div class="product_info_design" style="margin-left:0rem">
                        <a href="javascript:void(0);" onclick="clickHeader(2)">
                            <div class="product_info_design_img">
                            </div>
                            <h4>Design Services</h4>
                            <p>Need artwork setup? Our team of experienced designers can help</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(2)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_gallery gallery_letterhead">
                        <a href="javascript:void(0);" onclick="clickHeader(3)">
                            <div class="product_info_gallery_img">
                            </div>
                            <h4>Gallery</h4>
                            <p>Looking for design inspiration? See examples of our work</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(3)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_order">
                        <a href="javascript:void(0);" onclick="clickHeader(14)">
                            <div class="product_info_order_img">
                            </div>
                            <h4>Order process</h4>
                            <p>The ordering process explained</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(14)">read more+</a>
                        </a>
                    </div>
{{--                    <div class="product_info_guidelines">--}}
{{--                        <a href="javascript:void(0);" onclick="clickHeader(16)">--}}
{{--                            <div class="product_info_guidelines_img">--}}
{{--                            </div>--}}
{{--                            <h4>File Guidelines</h4>--}}
{{--                            <p>Print specifications to achieve best printing results</p>--}}
{{--                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(16)">read more+</a>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="product_info_delivery">--}}
{{--                        <a href="javascript:void(0);" onclick="clickHeader(15)">--}}
{{--                            <div class="product_info_delivery_img">--}}
{{--                            </div>--}}
{{--                            <h4>Free Delivery</h4>--}}
{{--                            <p>Free delivery Australia wide for all products</p>--}}
{{--                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(15)">read more+</a>--}}
{{--                    </div>--}}


                    <div class="clear"></div>


                </div>

            </div>
            <div class="main_right">
                <div class="clearfix grpelem" id="ppu4866-6"><!-- column -->
                    <div class="product_option_panel">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="product_options_header">Options &amp; Prices</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">

                                    <table cellpadding="0" cellspacing="0" border="0" width="236"
                                           class="product_option_holder">
                                        <tbody>
                                        <tr>

                                            <td colspan="2" align="left" style="padding-top:5px;">
                                                <div class="prooption_desc">Your price will automatically update
                                                    according to your options chosen.
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pulldown">
                                                <strong>Size:</strong>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productsizelist" id="lw_size"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateLWProductPrice('size')">
                                                    <option value="A4 210 x 297">A4 210 x 297</option>
                                                </select></td>
                                        </tr>


                                        <tr>
                                            <td class="pulldown"><strong>Stock:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left" id="lw_stock"><select
                                                    onchange="UpdateLWProductPrice('stock')"
                                                    style="width: 225px; font-size: 12px;" id="productstocklist"
                                                    name="productstocklist">
                                                    <option value="100GSM">100GSM LASER BOND</option>
                                                    <option value="120GSM">120GSM RECYCLED 100%</option>
                                                </select></td>
                                        </tr>



                                        <tr>
                                            <td class="pulldown"><strong>Printed Sides:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left" id="lhprintedside"><select
                                                    name="productprintedsidelist" id="lw_side"
                                                    style="width: 225px; font-size: 12px;"
                                                    onchange="UpdateLWProductPrice('stock')">
                                                    <option value="1 SIDE">1 SIDE</option>
                                                    <option value="2 SIDES">2 SIDES</option>
                                                </select></td>
                                        </tr>



                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- custom quote panel -->
                    <div class="product_quote_panel">
                        <table class="product_quote_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_quote">
                                    <div class="product_quote_text">Looking for more options?</div>
                                    <div class="product_quote_link"><a href="custom-quotes.php">Custom Quote</a></div>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="price_holder_spacer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="product_price_panel">
                        <table class="product_price_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_price_bkgrd" style="padding-top:5px;" align="left">
                                    <div class="price_desc">Select items you would like to purchase, then press "Add to
                                        Cart"
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">


                                    <div id="productpriceupdate">
                                        <div id="refreshselectproduct">
                                            <form name="frmSetProductPrice" method="post" action="cart.php"
                                                  onsubmit="return submitadd2cart(this)">
                                                <table width="230" align="left">
                                                    <tbody>
                                                    <tr>
                                                        <td class="qty_header"><strong>Qty</strong></td>
                                                        <td class="kinds_header"><strong>Kinds</strong></td>
                                                        <td class="price_header"><strong>Price</strong></td>
                                                        <td class="buy_header"><strong>Buy</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">250</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="lw_inputbox_250"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('lw','inputbox','250',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="lw_td_250" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="lw_price_250"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="lw_checkbox_250"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('lw','checkbox','250')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="lw_inputbox_500"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('lw','inputbox','500',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="lw_td_500" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="lw_price_500"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="lw_checkbox_500"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('lw','checkbox','500')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">1000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="lw_inputbox_1000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('lw','inputbox','1000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="lw_td_1000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="lw_price_1000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="lw_checkbox_1000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('lw','checkbox','1000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">1500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="lw_inputbox_1500"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('lw','inputbox','1500',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="lw_td_1500" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="lw_price_1500"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="lw_checkbox_1500"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('lw','checkbox','1500')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">2000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="lw_inputbox_2000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('lw','inputbox','2000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="lw_td_2000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="lw_price_2000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="lw_checkbox_2000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('lw','checkbox','2000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">5000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="lw_inputbox_5000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('lw','inputbox','5000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="lw_td_5000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="lw_price_5000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="lw_checkbox_5000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('lw','checkbox','5000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">10000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="lw_inputbox_10000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('lw','inputbox','10000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="lw_td_10000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="lw_price_10000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="lw_checkbox_10000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('lw','checkbox','10000')">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"><input type="hidden" id="productid"
                                                                               name="productid" value="60"><input
                                                                type="hidden" id="totalprice" name="totalprice"
                                                                value="0.00"><input type="hidden" id="productsize"
                                                                                    name="productsize"
                                                                                    value="A4 210 x 297"><input
                                                                type="hidden" id="productstock" name="productstock"
                                                                value="100GSM LASER BOND"><input type="hidden"
                                                                                                 id="productcolor"
                                                                                                 name="productcolor"
                                                                                                 value="4 COLOUR PROCESS"><input
                                                                type="hidden" id="productprintedside"
                                                                name="productprintedside" value="1 SIDE"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" id="totalpriceupdate">
                                                            <center><span style="font-weight: bold;">Total Price: AUD <p id="lw_totalPrice">0.00</p></span><div id="flyItem_lw" class="fly-item"><img src="{{URL::asset('/image/shopping-cart.png')}} "></div>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_1">
                                                            <center><span class="price_msg_first">Price include GST and delivery</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_2">
                                                            <center><span class="price_msg">All YellowStar Press prices are based on final artwork supplied</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" align="right"><br style="">
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="clear_btn" onclick="clearPrice('lw');"></a>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="add_to_cart"  id="add_to_cart_id"onclick="addToCart('lw')">
                                                                </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                            <td colspan="4" class="price_msg_1">
                                                                <center><span class="price_msg_first" id="alert_msg_lw" style="color:red;"></span>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_footer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- email your order in 3 steps -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951"
                       type="button" onclick="clickHeader(14)"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 13px;">
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-01.jpg')}} " alt="" width="290"
                             height="146"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-01.jpg?crc=3906882500">
                    </a>

                    <!-- corporate accounts call image -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951" href="tel:0398786999"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 10px;">
                        <!-- image -->
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-02.jpg')}} " alt="" width="290"
                             height="113"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-02.jpg?crc=3866292113">
                    </a>

                </div>
                <!--end product_right_option-->
                <!-- setting up own side bar bottom -->

            </div>
            <div class="clear"></div>
        </div>
        </div>
        <div style="clear: both;"></div>
    </div>

    <div class="product_div" id="product_div_id_12" style="display:none">
        <div class="text_holder">
        <div class="main_product_container postcard_holder">
            <div id="breadcrumbs">
                    You are here:
                        <a href="/home" >YellowStar Press</a>
                        »
                            <a href="/product/postcards" >
                            Postcards Printing
                            </a>
            </div>

            <div class="main_left">
                <div class="main_left_left">
                    <h1>Online Postcard Printing</h1>
                    <h3>Our postcard printing will help to gain your audience's attention.</h3>
                    <p>This unique marketing tool can be used to generate interest for personal or professional use with
                        your own custom designs. High quality, durable full colour postcards are ideal for special
                        offers and discounts, announcements, invitations, for events and thank you messages.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        If you already have a design team, use our postcard template and simply upload your finished
                        design for us to print.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        At 1Print, we pride ourselves on producing the highest quality postcards at the lowest prices
                        possible, with FREE delivery to anywhere in Australia.
                    </p>

                    <div class="bcards_stock_left">
                        <div class="bcards_stock_bkgrd">
                            <span>350</span><br style="">
                            gsm
                        </div>
                        <p class="black_heading">350gsm</p>
                        <p>Used on all Postcards for a superior finish.<br style="">For more stock options send us a <a class="click_a"
                                href="/contact">custom
                                quote.</a></p>
                    </div>

                    <div class="option_size_list postcard_templates" style="display:inline-flex">

                        <div class="bro_setup" style="margin-left:0rem;height:7rem;">
                            <div class="small_bro_sizing">DL</div>
                            <div class="bro_sizing_sml">99 x 210mm</div>
                        </div>
                        <div class="bro_setup" style="height:7rem;">
                            <div class="small_bro_sizing">A6</div>
                            <div class="bro_sizing_sml">105 x 148mm</div>
                        </div>
                        <div class="bro_setup" style="height:7rem;">
                            <div class="small_bro_sizing">A5</div>
                            <div class="bro_sizing_sml">148 x 210mm</div>
                        </div>
                        <div class="bro_setup" style="height:7rem;">
                            <div class="small_bro_sizing">A4</div>
                            <div class="bro_sizing_sml">210 x 297mm</div>
                        </div>
                    </div>


                </div>
                <div class="main_left_right">
                    <a>
                        <div class="advertisement2"></div>
                    </a>
{{--                    <div class="panel_pricing">--}}
{{--                        <h4>Pricing includes</h4>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">Free Flight Check</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">PDF Proof for your approval*</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/support">Free Job Tracking</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/delivery">Free Delivery</a></span>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                        <p class="small">* Limited to one PDF proof per print job.--}}
{{--                            Additional proofs will incur extra charges.</p>--}}
{{--                    </div>--}}
{{--                    <div class="panel_extras">--}}
{{--                        <h4 class="padding_top">Optional Extras</h4>--}}
{{--                        <p class="black">These options can be selected once your items have been added to your shopping--}}
{{--                            cart</p>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">Convert your files to a print ready format</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/design">Graphic Design Services</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/colour-critical">Hard Copy Proofs</a></span>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                    </div>--}}
                    <div class="clear"></div>
                    <div class="bcards500 notop">
                        <a class="bcards500link"></a>
                    </div>

                </div>
                <div class="clear"></div>

                <div style="clear: both;"></div>

                <div class="main_left_bottom1">

                    <div class="product_info_design no_margin">
                        <a href="javascript:void(0);" onclick="clickHeader(2)">
                            <div class="product_info_design_img">
                            </div>
                            <h4>Design Services</h4>
                            <p>Need artwork setup? Our team of experienced designers can help</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(2)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_gallery gallery_postcard">
                        <a href="javascript:void(0);" onclick="clickHeader(3)">
                            <div class="product_info_gallery_img">
                            </div>
                            <h4>Gallery</h4>
                            <p>Looking for design inspiration? See examples of our work</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(3)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_order">
                        <a href="javascript:void(0);" onclick="clickHeader(14)">
                            <div class="product_info_order_img">
                            </div>
                            <h4>Order process</h4>
                            <p>The ordering process explained</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(14)">read more+</a>
                        </a>
                    </div>
{{--                    <div class="product_info_guidelines">--}}
{{--                        <a type="button" onclick="clickHeader(16)">--}}
{{--                            <div class="product_info_guidelines_img">--}}
{{--                            </div>--}}
{{--                            <h4>File Guidelines</h4>--}}
{{--                            <p>Print specifications to achieve best printing results</p>--}}
{{--                            <a class="blue_link" type="button" onclick="clickHeader(16)">read more+</a>--}}
{{--                        </a>--}}
{{--                    </div>--}}



                    <div class="clear"></div>


                </div>

            </div>
            <div class="main_right">
                <div class="clearfix grpelem" id="ppu4866-6"><!-- column -->
                    <div class="product_option_panel">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="product_options_header">Options &amp; Prices</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">

                                    <table cellpadding="0" cellspacing="0" border="0" width="236"
                                           class="product_option_holder">
                                        <tbody>
                                        <tr>

                                            <td colspan="2" align="left" style="padding-top:5px;">
                                                <div class="prooption_desc">Your price will automatically update
                                                    according to your options chosen.

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pulldown">
                                                <strong>Size:</strong>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productsizelist" id="post_size"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdatePostProductPrice('size')">
                                                    <option value="DL">DL </option>
                                                    <option value="A6">A6 </option>
                                                    <option value="A5">A5 </option>
                                                    <option value="A4">A4 </option>
                                                </select></td>
                                        </tr>


                                        <tr>
                                            <td class="pulldown"><strong>Sides:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left" id="postcodecolor"><select name="productcolorlist"
                                                                                                id="post_side"
                                                                                                style="width: 225px; font-size: 12px;"
                                                                                                onchange="UpdatePostProductPrice('size')">
                                                    <option value="FULL COLOUR 1 SIDE">FULL COLOUR 1 SIDE</option>
                                                    <option value="FULL COLOUR 2 SIDES">FULL COLOUR 2 SIDES</option>
                                                </select></td>
                                        </tr>



                                        <tr>
                                            <td class="pulldown"><strong>Stock:</strong></td>
                                        </tr>

                                        <tr>
                                            <td class="content_left" id="poststockfinish"><select name="productstocklist2"
                                                                                              id="post_stock"
                                                                                              style="width: 225px; font-size: 12px;"
                                                                                              onchange="UpdatePostProductPrice('size')">
                                                        <span><option value="250GSM Gloss or Matt">250GSM Gloss or Matt
                                                        </option></span>
                                                        <option value="350GSM Gloss or Matt">350GSM Gloss or Matt
                                                        </option>
                                                </select></td>
                                            <td id="poststockfinishupdate" class="content_left" style="display: none;">
                                                <select name="productstocklist" id="post_stock"
                                                        style="width: 225px; font-size: 12px;"
                                                        onchange="UpdatePostProductPrice('size')">
                                                        <option value="350GSM Gloss or Matt">350GSM Gloss or Matt
                                                        </option>

                                                </select></td>

                                        </tr>


                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- custom quote panel -->
                    <div class="product_quote_panel">
                        <table class="product_quote_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_quote">
                                    <div class="product_quote_text">Looking for more options?</div>
                                    <div class="product_quote_link"><a href="custom-quotes.php">Custom Quote</a></div>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="price_holder_spacer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="product_price_panel">
                        <table class="product_price_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_price_bkgrd" style="padding-top:5px;" align="left">
                                    <div class="price_desc">Select items you would like to purchase, then press "Add to
                                        Cart"
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">


                                    <div id="productpriceupdate">
                                        <div id="refreshselectproduct">
                                            <form name="frmSetProductPrice" method="post" action="cart.php"
                                                  onsubmit="return submitadd2cart(this)">
                                                <table width="230" align="left">
                                                    <tbody>
                                                    <tr>
                                                        <td class="qty_header"><strong>Qty</strong></td>
                                                        <td class="kinds_header"><strong>Kinds</strong></td>
                                                        <td class="price_header"><strong>Price</strong></td>
                                                        <td class="buy_header"><strong>Buy</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">250</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="post_inputbox_250"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('post','inputbox','250',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="post_td_250" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="post_price_250"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="post_checkbox_250"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('post','checkbox','250')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="post_inputbox_500"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('post','inputbox','500',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="post_td_500" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="post_price_500"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="post_checkbox_500"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('post','checkbox','500')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">1000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="post_inputbox_1000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('post','inputbox','1000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="post_td_1000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="post_price_1000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="post_checkbox_1000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('post','checkbox','1000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">1500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="post_inputbox_1500"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('post','inputbox','1500',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="post_td_1500" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="post_price_1500"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="post_checkbox_1500"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('post','checkbox','1500')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">2000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="post_inputbox_2000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('post','inputbox','2000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="post_td_2000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="post_price_2000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="post_checkbox_2000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('post','checkbox','2000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">5000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="post_inputbox_5000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('post','inputbox','5000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="post_td_5000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="post_price_5000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="post_checkbox_5000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('post','checkbox','5000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">10000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="post_inputbox_10000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('post','inputbox','10000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="post_td_10000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="post_price_10000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="post_checkbox_10000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('post','checkbox','10000')">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"><input type="hidden" id="productid"
                                                                               name="productid" value="59"><input
                                                                type="hidden" id="totalprice" name="totalprice"
                                                                value="0.00"><input type="hidden" id="productsize"
                                                                                    name="productsize"
                                                                                    value="A6 105 x 148"><input
                                                                type="hidden" id="productstock" name="productstock"
                                                                value="NOT LAMINATED"><input type="hidden"
                                                                                             id="productcolor"
                                                                                             name="productcolor"
                                                                                             value="FULL COLOUR 1 SIDE">
                                                            <hr>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" id="totalpriceupdate">
                                                            <center><span style="font-weight: bold;">Total Price: AUD  <p id="post_totalPrice">0.00</p></span><div id="flyItem_post" class="fly-item"><img src="{{URL::asset('/image/shopping-cart.png')}} "></div>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_1">
                                                            <center><span style="class=" price_msg_first'="">Price
                                                                include GST and delivery</span></center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_2">
                                                            <center><span class="price_msg">All YellowStar Press prices are based on final artwork supplied</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" align="right"><br style="">
                                                            <table>
                                                                <tbody>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="clear_btn" onclick="clearPrice('post');"></a>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="add_to_cart" id="add_to_cart_id" onclick="addToCart('post')">
                                                                </td>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                            <td colspan="4" class="price_msg_1">
                                                                <center><span class="price_msg_first" id="alert_msg_post" style="color:red;"></span>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_footer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- email your order in 3 steps -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951"
                       type="button" onclick="clickHeader(14)"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 13px;">
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-01.jpg')}} " alt="" width="290"
                             height="146"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-01.jpg?crc=3906882500">
                    </a>

                    <!-- corporate accounts call image -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951" href="tel:0398786999"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 10px;">
                        <!-- image -->
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-02.jpg')}} " alt="" width="290"
                             height="113"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-02.jpg?crc=3866292113">
                    </a>

                </div>
                <!--end product_right_option-->
                <!-- setting up own side bar bottom -->

            </div>
            <div class="clear"></div>
        </div>
        </div>
        <div style="clear: both;"></div>
    </div>

    <div class="product_div" id="product_div_id_13" style="display:none">
        <div class="text_holder">
        <div class="main_product_container poster_holder">

            <div id="breadcrumbs">
                    You are here:
                        <a href="/home" >YellowStar Press</a>
                        »
                            <a href="/product/posters" >
                            Posters Printing
                            </a>
            </div>
            <div class="main_left">
                <div class="main_left_left">
                    <h1>Online Poster Printing</h1>
                    <h3>Make a great impact with posters.</h3>
                    <p>Posters are perfect for marketing events, businesses, merchandising in-store or as souvenirs. Our
                        poster printing services ensure that you achieve your desired design.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        We can help you create custom posters designed for trade shows, exhibits or even street
                        advertising campaigns.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        Available in sizes B0, A0, A1, A2 and A3, our posters arrive with a glossy finish in anything
                        from one to full colour. Make a statement about your business; say it with posters.
                    </p>


                </div>
                <div class="main_left_right">
                    <a>
                        <div class="advertisement2"></div>
                    </a>
{{--                    <div class="panel_pricing">--}}
{{--                        <h4>Pricing includes</h4>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">Free Flight Check</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">PDF Proof for your approval*</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/support">Free Job Tracking</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/delivery">Free Delivery</a></span>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                        <p class="small">* Limited to one PDF proof per print job.--}}
{{--                            Additional proofs will incur extra charges.</p>--}}
{{--                    </div>--}}
{{--                    <div class="panel_extras">--}}
{{--                        <h4 class="padding_top">Optional Extras</h4>--}}
{{--                        <p class="black">These options can be selected once your items have been added to your shopping--}}
{{--                            cart</p>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">Convert your files to a print ready format</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/design">Graphic Design Services</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/colour-critical">Hard Copy Proofs</a></span>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                    </div>--}}
                    <div class="clear"></div>
                    <div class="bcards500 notop">
                        <a
                           class="bcards500link"></a>
                    </div>


                </div>
                <div class="clear"></div>

                <div style="clear: both;"></div>
                <div class="option_size_list poster_templates">
                    <div class="bro_setup" style="height:7rem;margin-left:0rem">
                        <div class="small_bro_sizing">A3</div>
                        <div class="bro_sizing_sml">297 x 420mm</div>
                    </div>
                    <div class="bro_setup" style="height:7rem">
                        <div class="small_bro_sizing">A2</div>
                        <div class="bro_sizing_sml">420 x 594mm</div>
                    </div>
                    <div class="bro_setup" style="height:7rem">
                        <div class="small_bro_sizing">A1</div>
                        <div class="bro_sizing_sml">594 x 841mm</div>
                    </div>
                </div>


                <div style="clear: both;"></div>


                <div class="main_left_bottom1">


                    <div class="product_info_design" style="margin-left:0rem">
                        <a href="javascript:void(0);" onclick="clickHeader(2)">
                            <div class="product_info_design_img">
                            </div>
                            <h4>Design Services</h4>
                            <p>Need artwork setup? Our team of experienced designers can help</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(2)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_gallery gallery_poster">
                        <a href="javascript:void(0);" onclick="clickHeader(3)">
                            <div class="product_info_gallery_img">
                            </div>
                            <h4>Gallery</h4>
                            <p>Looking for design inspiration? See examples of our work</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(3)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_order">
                        <a href="javascript:void(0);" onclick="clickHeader(14)">
                            <div class="product_info_order_img">
                            </div>
                            <h4>Order process</h4>
                            <p>The ordering process explained</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(14)">read more+</a>
                        </a>
                    </div>
{{--                    <div class="product_info_guidelines">--}}
{{--                        <a type="button" onclick="clickHeader(16)">--}}
{{--                            <div class="product_info_guidelines_img">--}}
{{--                            </div>--}}
{{--                            <h4>File Guidelines</h4>--}}
{{--                            <p>Print specifications to achieve best printing results</p>--}}
{{--                            <a class="blue_link" type="button" onclick="clickHeader(16)">read more+</a>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="product_info_delivery">--}}
{{--                        <a href="javascript:void(0);" onclick="clickHeader(15)">--}}
{{--                            <div class="product_info_delivery_img">--}}
{{--                            </div>--}}
{{--                            <h4>Free Delivery</h4>--}}
{{--                            <p>Free delivery Australia wide for all products</p>--}}
{{--                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(15)">read more+</a>--}}
{{--                    </div>--}}


                    <div class="clear"></div>


                </div>

            </div>
            <div class="main_right">
                <div class="clearfix grpelem" id="ppu4866-6"><!-- column -->
                    <div class="product_option_panel">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="product_options_header">Options &amp; Prices</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">

                                    <table cellpadding="0" cellspacing="0" border="0" width="236"
                                           class="product_option_holder">
                                        <tbody>
                                        <tr>

                                            <td colspan="2" align="left" style="padding-top:5px;">
                                                <div class="prooption_desc">Your price will automatically update
                                                    according to your options chosen.
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pulldown">
                                                <strong>Size:</strong>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productsizelist" id="poster_size"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdatePosterProductPrice('size')">
                                                    <option value="A3">A3</option>
                                                    <option value="A2">A2</option>
                                                    <option value="A1">A1</option>
                                                </select></td>
                                        </tr>


                                        <tr>
                                            <td class="pulldown"><strong>Stock:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productstocklist" id="poster_stock"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdatePosterProductPrice('size')">

                                                        <option value="115GSM Gloss or Matt">115GSM Gloss or Matt
                                                        </option>
                                                        <option value="150GSM Gloss or Matt">150GSM Gloss or Matt
                                                        </option>
                                                        <option value="170GSM Gloss or Matt">170GSM Gloss or Matt
                                                        </option>
                                                        <option value="250GSM Gloss or Matt">250GSM Gloss or Matt
                                                        </option>
                                                </select></td>
                                        </tr>





                                        <tr>
                                            <td class="pulldown"><strong>Printed Sides:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productprintedsidelist"
                                                                             id="poster_side"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdatePosterProductPrice('size')">
                                                    <option value="FULL COLOUR 1 SIDE">FULL COLOUR 1 SIDE</option>
                                                    <option value="FULL COLOUR 2 SIDES">FULL COLOUR 2 SIDES</option>
                                                </select></td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- custom quote panel -->
                    <div class="product_quote_panel">
                        <table class="product_quote_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_quote">
                                    <div class="product_quote_text">Looking for more options?</div>
                                    <div class="product_quote_link"><a href="custom-quotes.php">Custom Quote</a></div>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="price_holder_spacer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="product_price_panel">
                        <table class="product_price_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_price_bkgrd" style="padding-top:5px;" align="left">
                                    <div class="price_desc">Select items you would like to purchase, then press "Add to
                                        Cart"
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">


                                    <div id="productpriceupdate">
                                        <div id="refreshselectproduct">
                                            <form name="frmSetProductPrice" method="post" action="cart.php"
                                                  onsubmit="return submitadd2cart(this)">
                                                <table width="230" align="left">
                                                    <tbody>
                                                    <tr>
                                                        <td class="qty_header"><strong>Qty</strong></td>
                                                        <td class="kinds_header"><strong>Kinds</strong></td>
                                                        <td class="price_header"><strong>Price</strong></td>
                                                        <td class="buy_header"><strong>Buy</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">250</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="poster_inputbox_250"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('poster','inputbox','250',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="poster_td_250" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="poster_price_250"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="poster_checkbox_250"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('poster','checkbox','250')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="poster_inputbox_500"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('poster','inputbox','500',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="poster_td_500" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="poster_price_500"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="poster_checkbox_500"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('poster','checkbox','500')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">1000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="poster_inputbox_1000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('poster','inputbox','1000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="poster_td_1000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="poster_price_1000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="poster_checkbox_1000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('poster','checkbox','1000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">1500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="poster_inputbox_1500"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('poster','inputbox','1500',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="poster_td_1500" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="poster_price_1500"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="poster_checkbox_1500"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('poster','checkbox','1500')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">2000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="poster_inputbox_2000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('poster','inputbox','2000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="poster_td_2000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="poster_price_2000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="poster_checkbox_2000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('poster','checkbox','2000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">5000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="poster_inputbox_5000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('poster','inputbox','5000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="poster_td_5000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="poster_price_5000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="poster_checkbox_5000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('poster','checkbox','5000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">10000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="poster_inputbox_10000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('poster','inputbox','10000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="poster_td_10000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="poster_price_10000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="poster_checkbox_10000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('poster','checkbox','10000')">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"><input type="hidden" id="productid"
                                                                               name="productid" value="66"><input
                                                                type="hidden" id="totalprice" name="totalprice"
                                                                value="0.00"><input type="hidden" id="productsize"
                                                                                    name="productsize" value="A3"><input
                                                                type="hidden" id="productstock" name="productstock"
                                                                value="150GSM GLOSS"><input type="hidden"
                                                                                            id="productcolor"
                                                                                            name="productcolor"
                                                                                            value="FULL COLOUR"><input
                                                                type="hidden" id="productprintedside"
                                                                name="productprintedside" value="FULL COLOUR 1 SIDE">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" id="totalpriceupdate">
                                                            <center><span style="font-weight: bold;">Total Price: AUD <p id="poster_totalPrice">0.00</p></span><div id="flyItem_poster" class="fly-item"><img src="{{URL::asset('/image/shopping-cart.png')}} "></div>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_1">
                                                            <center><span class="price_msg_first">Price include GST and delivery</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_2">
                                                            <center><span class="price_msg">All YellowStar Press prices are based on final artwork supplied</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" align="right"><br style="">
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="clear_btn" onclick="clearPrice('poster');"></a>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="add_to_cart" id="add_to_cart_id" onclick="addToCart('poster')">
                                                                </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                            <td colspan="4" class="price_msg_1">
                                                                <center><span class="price_msg_first" id="alert_msg_poster" style="color:red;"></span>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_footer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- email your order in 3 steps -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951"
                       type="button" onclick="clickHeader(14)"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 13px;">
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-01.jpg')}} " alt="" width="290"
                             height="146"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-01.jpg?crc=3906882500">
                    </a>

                    <!-- corporate accounts call image -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951" href="tel:0398786999"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 10px;">
                        <!-- image -->
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-02.jpg')}} " alt="" width="290"
                             height="113"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-02.jpg?crc=3866292113">
                    </a>

                </div>
                <!--end product_right_option-->
                <!-- setting up own side bar bottom -->

            </div>
            <div class="clear"></div>
        </div>
        </div>
        <div style="clear: both;"></div>
    </div>
<!-- 弃用 14 -->
    <div class="product_div" id="product_div_id_14" style="display:none">
        <div class="text_holder">
        <div class="main_product_container folder_holder">

        <div id="breadcrumbs">
                    You are here:
                        <a href="/home" >YellowStar Press</a>
                        »
                            <a href="/product/posters" >
                            Posters Printing
                            </a>
            </div>
            <div class="main_left">
                <div class="main_left_left">
                    <h1>Presentation Folder Printing</h1>
                    <h3 class="padding_top" style="padding-bottom: 0;">Machine varnish for a superior finish</h3>
                    <p>
                        Machine vanishing ensures a silky smooth finish. We use this finish on booklets that have large
                        areas of ink coverage to protect the product and reduce finger marking and scuffing or simply to
                        enhance the look and feel of the finished product.
                        <br style="">
                        <a class="black_link_underline"
                           href="/contact">Contact
                            us for more information</a>
                    </p>
                    <div style="height:150px">
                        <div style="float:left;width:100%">
                            <h2 class="folder_title">Folder Styles / Templates</h2>
                            <span class="option_indent">Choose your preferred folder size / style from the templates below. All A4 folder styles are priced the same. A5, DL, Glued and Folded prices are available through <a
                                    href="/contact"
                                    class="blue_link">custom quotes</a>.</span>
                            <span class="option_indent">Download a PDF template to setup your own design or send us your logo and details and we'll setup your artwork for FREE*</span>
                        </div>


                    </div>
                    <br style="">
                    <h3 style="padding-bottom: 0;">Short run presentation folders.</h3>
                    <p>For orders below our minimum quantity of 250 we now offer <a class="blue_link"
                                                                                    >Short
                            Run Presentation Folders</a>. Custom quotes and special artwork templates are available <a
                            class="blue_link"
                            >here</a>.
                    </p>
                    <br style="">
                    <h3 style="padding-bottom: 0;">First impressions count.</h3>
                    <p>This is why using custom branded presentation folders to package your printed marketing materials
                        like brochures, flyers, booklets, and business cards, are a great way to give your presentation
                        a professional look.
                    </p>
                    <br style="">
                    <p>
                        Custom Printed presentation folders are perfect for promotional packs, welcome packs, media
                        kits, job applications or any other documents that you want to bundle into one convenient
                        folder, keeping it all together in one place.
                    </p>
                    <br style="">
                    <p>
                        <span class="black">Please note:</span> A5, DL, Glued and Folded prices are available through <a
                            href="/contact"
                            class="blue_link">custom quotes</a>
                    </p>
                </div>

                <div class="main_left_right">
                    <a>
                        <div class="advertisement2"></div>
                    </a>
{{--                    <div class="panel_pricing">--}}
{{--                        <h4>Pricing includes</h4>--}}
{{--                        <span class="option_indent"><a href="javascript:void(0)">Free folder setup included. Maximum of 2 copy changes</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/support">Free Machine Varnish</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">Free Flight Check</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">Make your file press ready (if required)</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">PDF Proof for your approval*</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/support">Free Job Tracking</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/delivery">Free Delivery</a></span>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                        <p class="small">* Limited to one PDF proof per print job.--}}
{{--                            Additional proofs will incur extra charges.</p>--}}
{{--                    </div>--}}
{{--                    <div class="panel_extras">--}}
{{--                        <h4 class="padding_top">Optional Extras</h4>--}}
{{--                        <p class="black">These options can be selected once your items have been added to your shopping--}}
{{--                            cart</p>--}}
{{--                        <p>&nbsp;</p>--}}

{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">Convert your files to a print ready format</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/design">Graphic Design Services</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/colour-critical">Hard Copy Proofs</a></span>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                    </div>--}}
                    <div class="clear"></div>
                    <div class="bcards500 notop">
                        <a
                           class="bcards500link"></a>
                    </div>

                </div>
                <div class="clear"></div>
                <div id="u71355-10">
                    <p id="u71355-8"><span id="u71355">short run presentation folders now available.</span><span id="u71355-3"><br></span><span id="u71355-6">with minimum quantities starting at 50 units.<br></span>
                        <span id="u71386">
            			<a class="nonblock nontext Button actAsDiv  excludeFromNormalFlow" id="buttonu71387" ><span class="actAsDiv clearfix grpelem" id="u71388-4"><span class="actAsPara">click here</span></span></a>
            		</span>
                    </p>
                </div>
                <div class="main_left_bottom1" id="left_bottom_anchor">

                    <div class="product_info_design" style="margin-left:0rem">
                        <a href="javascript:void(0);" onclick="clickHeader(2)">
                            <div class="product_info_design_img">
                            </div>
                            <h4>Design Services</h4>
                            <p id="folders_anchor">Need artwork setup? Our team of experienced designers can help</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(2)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_gallery gallery_folder">
                        <a href="javascript:void(0);" onclick="clickHeader(3)">
                            <div class="product_info_gallery_img">
                            </div>
                            <h4>Gallery</h4>
                            <p>Looking for design inspiration? See examples of our work</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(3)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_order">
                        <a href="javascript:void(0);" onclick="clickHeader(14)">
                            <div class="product_info_order_img">
                            </div>
                            <h4>Order process</h4>
                            <p>The ordering process explained</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(14)">read more+</a>
                        </a>
                    </div>
{{--                    <div class="product_info_guidelines">--}}
{{--                        <a type="button" onclick="clickHeader(16)">--}}
{{--                            <div class="product_info_guidelines_img">--}}
{{--                            </div>--}}
{{--                            <h4>File Guidelines</h4>--}}
{{--                            <p>Print specifications to achieve best printing results</p>--}}
{{--                            <a class="blue_link" type="button" onclick="clickHeader(16)">read more+</a>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="product_info_delivery">--}}
{{--                        <a href="javascript:void(0);" onclick="clickHeader(15)">--}}
{{--                            <div class="product_info_delivery_img">--}}
{{--                            </div>--}}
{{--                            <h4>Free Delivery</h4>--}}
{{--                            <p>Free delivery Australia wide for all products</p>--}}
{{--                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(15)">read more+</a>--}}
{{--                    </div>--}}
                    <div class="clear" id="anchor"></div>




                </div>

            </div>
            <div class="main_right">
                <div class="clearfix grpelem" id="ppu4866-6"><!-- column -->
                    <div class="product_option_panel">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="product_options_header">Options &amp; Prices</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">

                                    <table cellpadding="0" cellspacing="0" border="0" width="236"
                                           class="product_option_holder">
                                        <tbody>
                                        <tr>

                                            <td colspan="2" align="left" style="padding-top:5px;">
                                                <div class="prooption_desc">Your price will automatically update
                                                    according to your options chosen.
                                                </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="pulldown"><strong>Stock:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productstocklist" id="folder_stock"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateFolderProductPricePres(stock)">
                                                    <option value="310GSM ARTBOARD">310GSM ARTBOARD</option>
                                                    <option value="350GSM ARTBOARD">350GSM ARTBOARD</option>
                                                    <option value="400GSM ARTBOARD">400GSM ARTBOARD</option>
                                                </select></td>
                                        </tr>


                                        <tr style="display:none; ">
                                            <td class="content_left"><select name="productqtylist" id="productqtylist"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateProductPrice(65)">
                                                    <option value="100">100</option>
                                                    <option value="250">250</option>
                                                    <option value="500">500</option>
                                                    <option value="1000">1000</option>
                                                    <option value="1500">1500</option>
                                                    <option value="2000">2000</option>
                                                    <option value="2500">2500</option>
                                                    <option value="3000">3000</option>
                                                    <option value="4000">4000</option>
                                                    <option value="5000">5000</option>
                                                </select></td>
                                        </tr>

                                        <tr>
                                            <td class="pulldown"><strong>Printed Sides:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left" id="lhprintedside">
                                                <select id="folder_sides" onchange="UpdateFolderProductPricePres(sides)"
                                                        style="width: 225px; font-size: 11px;"
                                                        name="productprintedsidelist">
                                                    <option value="FULL COLOUR 1 SIDE">FULL COLOUR 1 SIDE</option>
                                                    <option value="FULL COLOUR 2 SIDES">FULL COLOUR 2 SIDES</option>
                                                </select>
                                                <select id="productprintedsidelist2"
                                                        onchange="UpdateProductPricePres(65)"
                                                        style="width: 225px; font-size: 11px;display:none"
                                                        name="productprintedsidelist">
                                                    <option value="FULL COLOUR 1 SIDE">FULL COLOUR 1 SIDE</option>
                                                    <option value="FULL COLOUR 2 SIDES">FULL COLOUR 2 SIDES</option>
                                                    <!-- <option value="1 PMS COLOUR 1 SIDE">1 PMS COLOUR 1 SIDE</option>
                                                                                    <option value="2 PMS COLOURS 1 SIDE">2 PMS COLOURS 1 SIDE</option> -->
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="pulldown"><strong>Finish:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left" id="presfolderfinish"><select
                                                    name="productoptionlist" id="folder_finish"
                                                    style="width: 225px; font-size: 12px;"
                                                    onchange="UpdateFolderProductPricePres(finish)">
                                                    <option value="FREE GLOSS OR MATT VARNISH">FREE GLOSS OR MATT
                                                        VARNISH
                                                    </option>
                                                    <option value="GLOSS LAMINATED 1 SIDE">GLOSS LAMINATED 1 SIDE
                                                    </option>
                                                    <option value="MATT LAMINATED 1 SIDE">MATT LAMINATED 1 SIDE</option>
                                                </select></td>
                                        </tr>
                                        <tr style="display: none;">
                                            <td id="presfolderfinishupdate" class="content_left"><select
                                                    name="productoptionlist" id="productoptionlist"
                                                    style="width: 225px; font-size: 12px;"
                                                    onchange="UpdateProductPricePresFinish(65)">
                                                    <option value="FREE GLOSS OR MATT VARNISH">FREE GLOSS OR MATT
                                                        VARNISH
                                                    </option>
                                                    <option value="GLOSS LAMINATED 1 SIDE">GLOSS LAMINATED 1 SIDE
                                                    </option>
                                                    <option value="MATT LAMINATED 1 SIDE">MATT LAMINATED 1 SIDE</option>
                                                    <option value="GLOSS LAMINATED 2 SIDES">GLOSS LAMINATED 2 SIDES
                                                    </option>
                                                    <option value="MATT LAMINATED 2 SIDES">MATT LAMINATED 2 SIDES
                                                    </option>
                                                </select></td>
                                        </tr>
                                        <tr style="display: none;">
                                            <td id="presfolderfinishupdate1" class="content_left"><select
                                                    name="productoptionlist" id="productoptionlist"
                                                    style="width: 225px; font-size: 12px;"
                                                    onchange="UpdateProductPricePresFinish(65)">
                                                    <option value="FREE GLOSS OR MATT VARNISH">FREE GLOSS OR MATT
                                                        VARNISH
                                                    </option>
                                                    <option value="GLOSS LAMINATED 1 SIDE">GLOSS LAMINATED 1 SIDE
                                                    </option>
                                                    <option value="MATT LAMINATED 1 SIDE">MATT LAMINATED 1 SIDE</option>
                                                </select></td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- custom quote panel -->
                    <div class="product_quote_panel">
                        <table class="product_quote_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_quote">
                                    <div class="product_quote_text">Looking for more options?</div>
                                    <div class="product_quote_link"><a href="custom-quotes.php">Custom Quote</a></div>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="price_holder_spacer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="product_price_panel">
                        <table class="product_price_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_price_bkgrd" style="padding-top:5px;" align="left">
                                    <div class="price_desc">Select items you would like to purchase, then press "Add to
                                        Cart"
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">


                                    <div id="productpriceupdate">
                                        <div id="refreshselectproduct">
                                            <form name="frmSetProductPrice"
                                                  data-function-name="class_product_php_update_pres_price" method="post"
                                                  action="cart.php" onsubmit="return submitadd2cart(this)">
                                                <table width="230" align="left">
                                                    <tbody>
                                                    <tr>
                                                        <td class="qty_header"><strong>Qty</strong></td>
                                                        <td class="kinds_header"><strong>Kinds</strong></td>
                                                        <td class="price_header"><strong>Price</strong></td>
                                                        <td class="buy_header"><strong>Buy</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">250</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_250-productid_65"
                                                                                       id="usersetqty_250-productid_65"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductPres(&quot;usersetqty_250-productid_65&quot;, &quot;310GSM ARTBOARD&quot;, &quot;FULL COLOUR 1 SIDE&quot;, &quot;250&quot;, &quot;FREE GLOSS OR MATT VARNISH&quot;, &quot;65&quot;, &quot;499.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice250" width="50px">
                                                            $499.00<input type="hidden"
                                                                          name="updateselectedproductprice250"
                                                                          id="updateselectedproductprice250"
                                                                          value="499.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_250-productid_65-price_499.00"
                                                                   onclick="AddPresProduct(this.value, &quot;usersetqty_250-productid_65&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_500-productid_65"
                                                                                       id="usersetqty_500-productid_65"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductPres(&quot;usersetqty_500-productid_65&quot;, &quot;310GSM ARTBOARD&quot;, &quot;FULL COLOUR 1 SIDE&quot;, &quot;500&quot;, &quot;FREE GLOSS OR MATT VARNISH&quot;, &quot;65&quot;, &quot;600.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice500" width="50px">
                                                            $600.00<input type="hidden"
                                                                          name="updateselectedproductprice500"
                                                                          id="updateselectedproductprice500"
                                                                          value="600.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_500-productid_65-price_600.00"
                                                                   onclick="AddPresProduct(this.value, &quot;usersetqty_500-productid_65&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">1000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_1000-productid_65"
                                                                                       id="usersetqty_1000-productid_65"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductPres(&quot;usersetqty_1000-productid_65&quot;, &quot;310GSM ARTBOARD&quot;, &quot;FULL COLOUR 1 SIDE&quot;, &quot;1000&quot;, &quot;FREE GLOSS OR MATT VARNISH&quot;, &quot;65&quot;, &quot;795.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice1000" width="50px">
                                                            $795.00<input type="hidden"
                                                                          name="updateselectedproductprice1000"
                                                                          id="updateselectedproductprice1000"
                                                                          value="795.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_1000-productid_65-price_795.00"
                                                                   onclick="AddPresProduct(this.value, &quot;usersetqty_1000-productid_65&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">1500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_1500-productid_65"
                                                                                       id="usersetqty_1500-productid_65"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductPres(&quot;usersetqty_1500-productid_65&quot;, &quot;310GSM ARTBOARD&quot;, &quot;FULL COLOUR 1 SIDE&quot;, &quot;1500&quot;, &quot;FREE GLOSS OR MATT VARNISH&quot;, &quot;65&quot;, &quot;985.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice1500" width="50px">
                                                            $985.00<input type="hidden"
                                                                          name="updateselectedproductprice1500"
                                                                          id="updateselectedproductprice1500"
                                                                          value="985.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_1500-productid_65-price_985.00"
                                                                   onclick="AddPresProduct(this.value, &quot;usersetqty_1500-productid_65&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">2000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_2000-productid_65"
                                                                                       id="usersetqty_2000-productid_65"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductPres(&quot;usersetqty_2000-productid_65&quot;, &quot;310GSM ARTBOARD&quot;, &quot;FULL COLOUR 1 SIDE&quot;, &quot;2000&quot;, &quot;FREE GLOSS OR MATT VARNISH&quot;, &quot;65&quot;, &quot;1135.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice2000" width="50px">
                                                            $1135.00<input type="hidden"
                                                                           name="updateselectedproductprice2000"
                                                                           id="updateselectedproductprice2000"
                                                                           value="1135.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_2000-productid_65-price_1135.00"
                                                                   onclick="AddPresProduct(this.value, &quot;usersetqty_2000-productid_65&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">2500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_2500-productid_65"
                                                                                       id="usersetqty_2500-productid_65"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductPres(&quot;usersetqty_2500-productid_65&quot;, &quot;310GSM ARTBOARD&quot;, &quot;FULL COLOUR 1 SIDE&quot;, &quot;2500&quot;, &quot;FREE GLOSS OR MATT VARNISH&quot;, &quot;65&quot;, &quot;1330.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice2500" width="50px">
                                                            $1330.00<input type="hidden"
                                                                           name="updateselectedproductprice2500"
                                                                           id="updateselectedproductprice2500"
                                                                           value="1330.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_2500-productid_65-price_1330.00"
                                                                   onclick="AddPresProduct(this.value, &quot;usersetqty_2500-productid_65&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">3000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_3000-productid_65"
                                                                                       id="usersetqty_3000-productid_65"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductPres(&quot;usersetqty_3000-productid_65&quot;, &quot;310GSM ARTBOARD&quot;, &quot;FULL COLOUR 1 SIDE&quot;, &quot;3000&quot;, &quot;FREE GLOSS OR MATT VARNISH&quot;, &quot;65&quot;, &quot;1495.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice3000" width="50px">
                                                            $1495.00<input type="hidden"
                                                                           name="updateselectedproductprice3000"
                                                                           id="updateselectedproductprice3000"
                                                                           value="1495.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_3000-productid_65-price_1495.00"
                                                                   onclick="AddPresProduct(this.value, &quot;usersetqty_3000-productid_65&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">4000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_4000-productid_65"
                                                                                       id="usersetqty_4000-productid_65"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductPres(&quot;usersetqty_4000-productid_65&quot;, &quot;310GSM ARTBOARD&quot;, &quot;FULL COLOUR 1 SIDE&quot;, &quot;4000&quot;, &quot;FREE GLOSS OR MATT VARNISH&quot;, &quot;65&quot;, &quot;1720.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice4000" width="50px">
                                                            $1720.00<input type="hidden"
                                                                           name="updateselectedproductprice4000"
                                                                           id="updateselectedproductprice4000"
                                                                           value="1720.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_4000-productid_65-price_1720.00"
                                                                   onclick="AddPresProduct(this.value, &quot;usersetqty_4000-productid_65&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">5000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_5000-productid_65"
                                                                                       id="usersetqty_5000-productid_65"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductPres(&quot;usersetqty_5000-productid_65&quot;, &quot;310GSM ARTBOARD&quot;, &quot;FULL COLOUR 1 SIDE&quot;, &quot;5000&quot;, &quot;FREE GLOSS OR MATT VARNISH&quot;, &quot;65&quot;, &quot;2130.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice5000" width="50px">
                                                            $2130.00<input type="hidden"
                                                                           name="updateselectedproductprice5000"
                                                                           id="updateselectedproductprice5000"
                                                                           value="2130.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_5000-productid_65-price_2130.00"
                                                                   onclick="AddPresProduct(this.value, &quot;usersetqty_5000-productid_65&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"><input type="hidden" id="productid"
                                                                               name="productid" value="65"><input
                                                                type="hidden" id="totalprice" name="totalprice"
                                                                value="0.00"><input type="hidden"
                                                                                    id="productprintedside"
                                                                                    name="productprintedside"
                                                                                    value="FULL COLOUR 1 SIDE"><input
                                                                type="hidden" id="productstock" name="productstock"
                                                                value="310GSM ARTBOARD"><input type="hidden"
                                                                                               id="productoption"
                                                                                               name="productoption"
                                                                                               value="FREE GLOSS OR MATT VARNISH">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" id="totalpriceupdate">
                                                            <center><span style="font-weight: bold;">Total Price: AUD 0.00</span><div id="flyItem" class="fly-item"><img src="{{URL::asset('/image/shopping-cart.png')}} "></div>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_1">
                                                            <center><span class="price_msg_first">Price include GST and delivery</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_2">
                                                            <center><span class="price_msg">All YellowStar Press prices are based on final artwork supplied</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" align="right"><br style="">
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                    <td><a href="javascript:void(0);" class="clear_btn"
                                                                           onclick="ClearPresCache(&quot;310GSM ARTBOARD&quot;, &quot;FULL COLOUR 1 SIDE&quot;, &quot;500&quot;, &quot;FREE GLOSS OR MATT VARNISH&quot;, &quot;65&quot;, &quot;0&quot;);"></a>
                                                                    </td>
                                                                    <td><input type="submit" class="add_to_cart" id="add_to_cart_id"
                                                                               onclick="addToCard(presentation)"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                            <td colspan="4" class="price_msg_1">
                                                                <center><span class="price_msg_first" id="alert_msg" style="color:red;"></span>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_footer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- email your order in 3 steps -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951"
                       type="button" onclick="clickHeader(14)"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 13px;">
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-01.jpg')}} " alt="" width="290"
                             height="146"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-01.jpg?crc=3906882500">
                    </a>

                    <!-- corporate accounts call image -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951" href="tel:0398786999"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 10px;">
                        <!-- image -->
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-02.jpg')}} " alt="" width="290"
                             height="113"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-02.jpg?crc=3866292113">
                    </a>

                </div>
                <!--end product_right_option-->
                <!-- setting up own side bar bottom -->

            </div>
            <div class="clear"></div>
            <div class="folder_templates1" name="folder_templates1">
                <h3>A4 Folder Templates</h3>

                    <div class="pf_temp">
                        <div class="pf_img">
                            <img src="{{URL::asset('/image/a4_s1-01.jpg')}}">
                        </div>
                        <h5>A4 Single Pocket S1</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            226 x 302mm<br/>
                            Yes<br/>
                            5mm
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A4_single_pocket_s1.pdf" target="_blank">Download Template (PDF)</a>
                    </div>




                    <div class="pf_temp">
                        <div class="pf_img">
                            <img src="{{URL::asset('/image/a4_s2-01.jpg')}}">
                        </div>
                        <h5>A4 Single Pocket S2</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            222 x 311mm<br/>
                            Yes<br/>
                            No Gusset
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A4_single_pocket_s2.pdf" target="_blank">Download Template (PDF)</a>
                    </div>


                    <div class="pf_temp">
                        <div class="pf_img">
                            <img src="{{URL::asset('/image/a4_s3-01.jpg')}}">
                        </div>
                        <h5>A4 Single Pocket S3</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            226 x 302mm<br/>
                            Yes<br/>
                            10mm
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A4_single_pocket_s3.pdf" target="_blank">Download Template (PDF)</a>
                    </div>

                    <div class="pf_temp">
                        <div class="pf_img">
                            <img src="{{URL::asset('/image/a4_s4-01.jpg')}}">
                        </div>
                        <h5>A4 Single Pocket S4</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            225 x 310mm<br/>
                            Yes<br/>
                            10mm
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A4_single_pocket_s4.pdf" target="_blank">Download Template (PDF)</a>
                    </div>



                    <div class="pf_temp">
                        <div class="pf_img">
                            <img src="{{URL::asset('/image/a4_s5-01.jpg')}}">
                        </div>
                        <h5>A4 Single Pocket S5</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            220 x 315mm<br/>
                            Yes<br/>
                            No Gusset
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A4_single_pocket_s5.pdf" target="_blank">Download Template (PDF)</a>
                    </div>


                    <div class="pf_temp">
                        <div class="pf_img">
                            <img src="{{URL::asset('/image/a4_s6-01.jpg')}}">
                        </div>
                        <h5>A4 Single Pocket S6</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            220 x 311mm<br/>
                            Yes<br/>
                            10mm
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A4_single_pocket_s6.pdf" target="_blank">Download Template (PDF)</a>
                    </div>



                    <div class="pf_temp">
                        <div class="pf_img">
                            <img src="{{URL::asset('/image/a4_s7-01.jpg')}}">
                        </div>
                        <h5>A4 Single Pocket S7</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            225 x 302mm<br/>
                            Yes<br/>
                            5mm
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A4_single_pocket_s7.pdf" target="_blank">Download Template (PDF)</a>
                    </div>

                    <div class="pf_temp">
                        <div class="pf_img">
                            <img src="{{URL::asset('/image/a4_s8-01.jpg')}}">
                        </div>
                        <h5>A4 Single Pocket S8</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            225 x 302mm<br/>
                            Yes (2 x slots)<br/>
                            5mm
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A4_single_pocket_s8.pdf" target="_blank">Download Template (PDF)</a>
                    </div>

                    <div class="pf_temp">
                        <div class="pf_img">
                            <img src="{{URL::asset('/image/a4_s9-01.jpg')}}">
                        </div>
                        <h5>A4 Single Pocket S9</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            220 x 311mm<br/>
                            Yes<br/>
                            6mm
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A4_single_pocket_s9.pdf" target="_blank">Download Template (PDF)</a>
                    </div>

                    <div class="pf_temp">
                        <div class="pf_img">
                            <img src="{{URL::asset('/image/a4_s10-01.jpg')}}">
                        </div>
                        <h5>A4 Single Pocket S10</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            220 x 320mm<br/>
                            Yes<br/>
                            No Gusset
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A4_single_pocket_s10.pdf" target="_blank">Download Template (PDF)</a>
                    </div>

                    <div class="pf_temp">
                        <div class="pf_img">
                            <img src="{{URL::asset('/image/a4_s11-01.jpg')}}">
                        </div>
                        <h5>A4 Single Pocket S11</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            220 x 306mm<br/>
                            Yes<br/>
                            6mm
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A4_single_pocket_s11.pdf" target="_blank">Download Template (PDF)</a>
                    </div>

                    <div class="pf_temp">
                        <div class="pf_img">
                            <img src="{{URL::asset('/image/a4_s12-01.jpg')}}">
                        </div>
                        <h5>A4 Single Pocket S12</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            225 x 317mm<br/>
                            Yes<br/>
                            5mm
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A4_single_pocket_s12.pdf" target="_blank">Download Template (PDF)</a>
                    </div>

                    <div class="pf_temp">
                        <div class="pf_img">
                            <img src="{{URL::asset('/image/a4_s13-01.jpg')}}">
                        </div>
                        <h5>A4 Single Pocket S13</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            225 x 318mm<br/>
                            Yes<br/>
                            5mm
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A4_single_pocket_s13.pdf" target="_blank">Download Template (PDF)</a>
                    </div>

                    <div class="pf_temp">
                        <div class="pf_img">
                            <img src="{{URL::asset('/image/a4_s14-01.jpg')}}">
                        </div>
                        <h5>A4 Single Pocket S14</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            215 x 303mm<br/>
                            Yes<br/>
                            No Gusset
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A4_single_pocket_s14.pdf" target="_blank">Download Template (PDF)</a>
                    </div>
            </div>


            <div class="folder_templates2" style="min-width: 16.5%;height: 100px; clear:both;float:left;">
                <h3>Wide</h3>
                    <div class="pf_temp" style="margin-top:35px">
                        <div class="pf_img">
                            <div style="padding-top:10%">
                                <img src="{{URL::asset('/image/a4_l1-01.jpg')}}"/></div>
                        </div>
                        <h5>A4 Landscape L1</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            300 x 225mm<br/>
                            Yes<br/>
                            No Gusset
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A4_landscape_l1.pdf" target="_blank">Download Template (PDF)</a>
                    </div>
            </div>


            <div class="folder_templates2" style="min-width: 16.5%;min-height: 100px; clear:none;float:left;">
                <h3>Double</h3>

                    <div class="pf_temp" style="margin-top:35px">
                        <div class="pf_img">
                            <div class="pf_badge pf_badge2">
                                Double<br/>Pockets
                            </div>
                            <img src="{{URL::asset('/image/a5_d2-01.jpg')}}"/>
                        </div>
                        <h5>A4 Double Pocket D1</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            227 x 321mm<br/>
                            Yes<br/>
                            10mm
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A4_double_pocket_d1.pdf" target="_blank">Download Template (PDF)</a>
                    </div>
            </div>
            <div class="clear"></div>


            <div class="folder_templates2" style="min-width:66%;float:left;clear:none">
                <h3>A5 Folder Templates</h3>
                    <p>
                        <a href="/contact" class="nonblock nontext actAsDiv gradient clearfix excludeFromNormalFlow" id="u69312-6">Pricing for all A5 Folded Templates available through CUSTOM QUOTES (click here)</a>
                    </p>
                    <div class="clearfix"></div>
                    <div class="pf_temp">
                        <div class="pf_img">
                            <div class="pf_badge pf_badge2">
                                Includes<br/>Pen<br/>Holder
                            </div>
                            <img src="{{URL::asset('/image/a5_s1-01.jpg')}}"/>
                        </div>
                        <h5>A5 Single Pocket S1</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            170 x 223mm<br/>
                            No<br/>
                            10mm
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A5_single_pocket_s1.pdf" target="_blank">Download Template (PDF)</a>
                    </div>

                    <div class="pf_temp">
                        <div class="pf_img">
                            <img src="{{URL::asset('/image/a5_s2-01.jpg')}}"/>
                        </div>
                        <h5>A5 Single Pocket S2</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            160 x 220mm<br/>
                            Yes<br/>
                            No Gusset
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A5_single_pocket_s2.pdf" target="_blank">Download Template (PDF)</a>
                    </div>

                    <div class="pf_temp">
                        <div class="pf_img">
                            <img src="{{URL::asset('/image/a5_s3-01.jpg')}}"/>
                        </div>
                        <h5>A5 Single Pocket S3</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            160 x 220mm<br/>
                            Yes<br/>
                            No Gusset
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A5_single_pocket_s3.pdf" target="_blank">Download Template (PDF)</a>
                    </div>

                    <div class="pf_temp">
                        <div class="pf_img">
                            <div class="pf_badge">
                                Double<br/>Pockets
                            </div>
                            <img src="{{URL::asset('/image/a5_d1-01.jpg')}}"/>
                        </div>
                        <h5>A5 Double Pocket D1</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            158 x 222mm<br/>
                            Yes<br/>
                            4.5mm
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/A5_double_pocket_d1.pdf" target="_blank">Download Template (PDF)</a>
                    </div>



            </div>

            <div class="folder_templates3" style="float:left">
                <h3>DL Folder Templates</h3>
                <p>
                    <a href="/contact" class="nonblock nontext actAsDiv gradient clearfix excludeFromNormalFlow" id="u69312-6">Pricing for all DL Folded Templates available through CUSTOM QUOTES (click here)</a>
                </p>
                <div class="clearfix"></div>
                <div class="pf_temp">
                    <div class="pf_img">
                        <img src="{{URL::asset('/image/dl_portrait_dl1-01.jpg')}}"/>
                    </div>
                    <h5>DL Portrait DL1</h5>
                    <div class="pf_l">
                        Finished Size<br/>
                        Business Card<br/>
                        Gusset / Spine
                    </div>
                    <div class="pf_r">
                        110 x 220mm<br/>
                        Yes<br/>
                        5mm
                    </div>
                    <div class="clear"></div>
                    <a class="pf_dl" href="templates/dl_portrait_dl1.pdf" target="_blank">Download Template (PDF)</a>
                </div>
                <div class="pf_temp">
                    <div class="pf_img">
                        <img src="{{URL::asset('/image/dl_landscape_dl2-01.jpg')}}"/>
                    </div>
                    <h5>DL Landscape DL2</h5>
                    <div class="pf_l">
                        Finished Size<br/>
                        Business Card<br/>
                        Gusset / Spine
                    </div>
                    <div class="pf_r">
                        210 x 100mm<br/>
                        No<br/>
                        No Gusset
                    </div>
                    <div class="clear"></div>
                    <a class="pf_dl" href="templates/dl_landscape_dl2.pdf" target="_blank">Download Template (PDF)</a>
                </div>
                <div class="pf_temp">
                    <div class="pf_img">
                        <img src="{{URL::asset('/image/dl_portrait_dl3-01.png')}}"/>
                    </div>
                    <h5>DL Portrait DL3</h5>
                    <div class="pf_l">
                        Finished Size<br/>
                        Business Card<br/>
                        Gusset / Spine
                    </div>
                    <div class="pf_r">
                        110 x 220mm<br/>
                        No<br/>
                        No Gusset
                    </div>
                    <div class="clear"></div>
                    <a class="pf_dl" href="templates/dl_portrait_dl3.pdf" target="_blank">Download Template (PDF)</a>
                </div>
                <div class="pf_temp">
                    <div class="pf_img">
                        <img src="{{URL::asset('/image/dl_landscape_dl3-01.png')}}"/>
                    </div>
                    <h5>DL Folder DL4</h5>
                    <div class="pf_l">
                        Finished Size<br/>
                        Business Card<br/>
                        Gusset / Spine
                    </div>
                    <div class="pf_r">
                        109 x 220mm<br/>
                        Yes<br/>
                        5mm
                    </div>
                    <div class="clear"></div>
                    <a class="pf_dl" href="templates/dl_folder_dl4.pdf" target="_blank">Download Template (PDF)</a>
                </div>
            </div>


            <div class="folder_templates3" style="float:left">
                <h3>Glued Folder Templates</h3>
                <p>
                    <a href="/contact" class="nonblock nontext actAsDiv gradient clearfix excludeFromNormalFlow" id="u69312-6">Pricing for all Glued Folded Templates available through CUSTOM QUOTES (click here)</a>
                </p>
                <div class="clearfix"></div>
                <div class="pf_temp">
                    <div class="pf_img">
                        <div class="pf_badge_glued">
                            Glued
                        </div>
                        <img src="{{URL::asset('/image/g1-image-01.jpg')}}"/>
                    </div>
                    <h5>A4 Single Pocket G1</h5>
                    <div class="pf_l">
                        Finished Size<br/>
                        Business Card<br/>
                        Gusset / Spine
                    </div>
                    <div class="pf_r">
                        225 x 310mm<br/>
                        Yes<br/>
                        No Gusset
                    </div>
                    <div class="clear"></div>
                    <a class="pf_dl" href="templates/g1.pdf" target="_blank">Download Template (PDF)</a>
                </div>

                <div class="pf_temp">
                    <div class="pf_img">
                        <div class="pf_badge_glued">
                            Glued
                        </div>
                        <img src="{{URL::asset('/image/g2-01.jpg')}}"/>
                    </div>
                    <h5>A4 Single Pocket G2</h5>
                    <div class="pf_l">
                        Finished Size<br/>
                        Business Card<br/>
                        Gusset / Spine
                    </div>
                    <div class="pf_r">
                        216 x 310mm<br/>
                        No<br/>
                        10mm
                    </div>
                    <div class="clear"></div>
                    <a class="pf_dl" href="templates/g2.pdf" target="_blank">Download Template (PDF)</a>
                </div>

                <div class="pf_temp">
                    <div class="pf_img">
                        <div class="pf_badge_glued">
                            Glued
                        </div>
                        <img src="{{URL::asset('/image/g3-01.jpg')}}"/>
                    </div>
                    <h5>A4 Single Pocket G3</h5>
                    <div class="pf_l">
                        Finished Size<br/>
                        Business Card<br/>
                        Gusset / Spine
                    </div>
                    <div class="pf_r">
                        225 x 302mm<br/>
                        Yes<br/>
                        10mm
                    </div>
                    <div class="clear"></div>
                    <a class="pf_dl" href="templates/g3.pdf" target="_blank">Download Template (PDF)</a>
                </div>

                <div class="pf_temp">
                    <div class="pf_img">
                        <div class="pf_badge_glued">
                            Glued
                        </div>
                        <img src="{{URL::asset('/image/g4-01.jpg')}}"/>
                    </div>
                    <h5>A4 Single Pocket G4</h5>
                    <div class="pf_l">
                        Finished Size<br/>
                        Business Card<br/>
                        Gusset / Spine
                    </div>
                    <div class="pf_r">
                        220 x 315mm<br/>
                        No<br/>
                        5mm
                    </div>
                    <div class="clear"></div>
                    <a class="pf_dl" href="templates/g4.pdf" target="_blank">Download Template (PDF)</a>
                </div>

                <div class="pf_temp">
                    <div class="pf_img">
                        <div class="pf_badge_glued">
                            Glued
                        </div>
                        <img src="{{URL::asset('/image/g5-01.jpg')}}"/>
                    </div>
                    <h5>6 Page A4 G5</h5>
                    <div class="pf_l">
                        Finished Size<br/>
                        Business Card<br/>
                        Gusset / Spine
                    </div>
                    <div class="pf_r">
                        213 x 300mm<br/>
                        No<br/>
                        5mm
                    </div>
                    <div class="clear"></div>
                    <a class="pf_dl" href="templates/g5.pdf" target="_blank">Download Template (PDF)</a>
                </div>


                <div class="pf_temp">
                    <div class="pf_img">
                        <div class="pf_badge_glued">
                            Glued
                        </div>
                        <img src="{{URL::asset('/image/g6-01.jpg')}}"/>
                    </div>
                    <h5>6 Page A4 G6</h5>
                    <div class="pf_l">
                        Finished Size<br/>
                        Business Card<br/>
                        Gusset / Spine
                    </div>
                    <div class="pf_r">
                        216 x 300mm<br/>
                        Yes<br/>
                        5mm
                    </div>
                    <div class="clear"></div>
                    <a class="pf_dl" href="templates/g6.pdf" target="_blank">Download Template (PDF)</a>
                </div>

                <div class="pf_temp">
                    <div class="pf_img">
                        <div class="pf_badge_glued">
                            Glued
                        </div>
                        <img src="{{URL::asset('/image/g7-01.png')}}"/>
                    </div>
                    <h5>A4 Single Pocket G7</h5>
                    <div class="pf_l">
                        Finished Size<br/>
                        Business Card<br/>
                        Gusset / Spine
                    </div>
                    <div class="pf_r">
                        215 x 309mm<br/>
                        Yes<br/>
                        6mm
                    </div>
                    <div class="clear"></div>
                    <a class="pf_dl" href="templates/g7.pdf" target="_blank">Download Template (PDF)</a>
                </div>

                <div class="pf_temp">
                    <div class="pf_img">
                        <div class="pf_badge_glued">
                            Glued
                        </div>
                        <img src="{{URL::asset('/image/g8-01.png')}}"/>
                    </div>
                    <h5>A4 Single Pocket G8</h5>
                    <div class="pf_l">
                        Finished Size<br/>
                        Business Card<br/>
                        Gusset / Spine
                    </div>
                    <div class="pf_r">
                        215 x 309mm<br/>
                        Yes<br/>
                        No
                    </div>
                    <div class="clear"></div>
                    <a class="pf_dl" href="templates/g8.pdf" target="_blank">Download Template (PDF)</a>
                </div>

                <div class="pf_temp">
                    <div class="pf_img">
                        <div class="pf_badge_glued">
                            Glued
                        </div>
                        <img src="{{URL::asset('/image/g9-01.png')}}"/>
                    </div>
                    <h5>A4 Single Pocket G9</h5>
                    <div class="pf_l">
                        Finished Size<br/>
                        Business Card<br/>
                        Gusset / Spine
                    </div>
                    <div class="pf_r">
                        230 x 333mm<br/>
                        Yes<br/>
                        13mm
                    </div>
                    <div class="clear"></div>
                    <a class="pf_dl" href="templates/g9.pdf" target="_blank">Download Template (PDF)</a>
                </div>
            </div>

            <div class="folder_templates4" style="float:left">
                <h3>Folded Panel Templates</h3>
                    <p>
                        <a href="/contact" class="nonblock nontext actAsDiv gradient clearfix excludeFromNormalFlow" id="u69312-6">Pricing for all Folded Templates available through CUSTOM QUOTES (click here)</a>
                    <div class="clearfix"></div><br/>
                    <span class="black">Please note:</span> Folded Folder Templates do not include glued or interlocking panels.
                    <div class="clearfix"></div><br/>
                    </p>
                    <div class="pf_temp">
                        <div class="pf_img">
                            <img src="{{URL::asset('/image/6_page_a4_folded_folder_f1-01.jpg')}}"/>
                        </div>
                        <h5>6 Page A4 Folded F1</h5>
                        <div class="pf_l">
                            Finished Size<br/>
                            Business Card<br/>
                            Gusset / Spine
                        </div>
                        <div class="pf_r">
                            220 x 310mm<br/>
                            Yes<br/>
                            No Gusset
                        </div>
                        <div class="clear"></div>
                        <a class="pf_dl" href="templates/6_page_a4_folded_panel_f1.pdf" target="_blank">Download Template (PDF)</a>
                    </div>
            </div>

            <div class="clear"></div>
        </div>
        </div>
        <div style="clear: both;"></div>
    </div>

    <div class="product_div" id="product_div_id_15" style="display:none">
        <div class="text_holder">
        <div class="main_product_container comp_holder">
            <div id="breadcrumbs">
                    You are here:
                        <a href="/home" >YellowStar Press</a>
                        »
                            <a href="/product/withCompliments" >
                            Compliments Printing
                            </a>
            </div>

            <div class="main_left">
                <div class="main_left_left">
                    <h1>Online With Compliments Printing</h1>
                    <h3>For a handwritten show of appreciation or a quick reminder message, a compliment slip is an
                        ideal addition to your company's collateral.</h3>
                    <p>Compliment slips are a useful business stationary item that is akin to the company letterhead.
                        Merge your businesses advertising with the power of a "thank you".
                    </p>
                    <p>&nbsp;</p>
                    <p>


                        When sending a promotional pack, thanking someone or sending a gift on behalf of your business,
                        add a personal touch with a compliment slip.</p>
                    <p>&nbsp;</p>


                    <div class="option_size_list comp_templates">

                        <div class="bro_setup"style="height:7rem;margin-left:0rem;margin-top:2rem">
                            <div class="small_bro_sizing">DL</div>
                            <div class="bro_sizing_sml">210 x 99mm</div>
                        </div>

                    </div>


                </div>
                <div class="main_left_right">
                    <a>
                        <div class="advertisement2"></div>
                    </a>
{{--                    <div class="panel_pricing">--}}
{{--                        <h4>Pricing includes</h4>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">Free Flight Check</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">PDF Proof for your approval*</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/support">Free Job Tracking</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/delivery">Free Delivery</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">Free text corrections to your supplied file (if requested)</a></span>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                        <p class="small">* Limited to one PDF proof per print job.--}}
{{--                            Additional proofs will incur extra charges.</p>--}}
{{--                    </div>--}}
{{--                    <div class="panel_extras">--}}
{{--                        <h4 class="padding_top">Optional Extras</h4>--}}
{{--                        <p class="black">These options can be selected once your items have been added to your shopping--}}
{{--                            cart</p>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/pre-flight-checks">Convert your files to a print ready format</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/design">Graphic Design Services</a></span>--}}
{{--                        <span class="option_indent"><a--}}
{{--                                href="/colour-critical">Hard Copy Proofs</a></span>--}}
{{--                        <p>&nbsp;</p>--}}
{{--                    </div>--}}
                    <div class="clear"></div>
                    <div class="bcards500 notop">
                        <a class="bcards500link"></a>
                    </div>

                </div>
                <div class="clear"></div>
                <div class="main_left_bottom1">


                    <div class="product_info_design" style="margin-left: 0rem">
                        <a href="javascript:void(0);" onclick="clickHeader(2)">
                            <div class="product_info_design_img">
                            </div>
                            <h4>Design Services</h4>
                            <p>Need artwork setup? Our team of experienced designers can help</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(2)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_gallery gallery_comp">
                        <a href="javascript:void(0);" onclick="clickHeader(3)">
                            <div class="product_info_gallery_img">
                            </div>
                            <h4>Gallery</h4>
                            <p>Looking for design inspiration? See examples of our work</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(3)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_order">
                        <a href="javascript:void(0);" onclick="clickHeader(14)">
                            <div class="product_info_order_img">
                            </div>
                            <h4>Order process</h4>
                            <p>The ordering process explained</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(14)">read more+</a>
                        </a>
                    </div>
{{--                    <div class="product_info_guidelines">--}}
{{--                        <a href="javascript:void(0);" onclick="clickHeader(16)">--}}
{{--                            <div class="product_info_guidelines_img">--}}
{{--                            </div>--}}
{{--                            <h4>File Guidelines</h4>--}}
{{--                            <p>Print specifications to achieve best printing results</p>--}}
{{--                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(16)">read more+</a>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="product_info_delivery">--}}
{{--                        <a href="javascript:void(0);" onclick="clickHeader(15)">--}}
{{--                            <div class="product_info_delivery_img">--}}
{{--                            </div>--}}
{{--                            <h4>Free Delivery</h4>--}}
{{--                            <p>Free delivery Australia wide for all products</p>--}}
{{--                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(15)">read more+</a>--}}
{{--                    </div>--}}


                    <div class="clear"></div>


                </div>

            </div>
            <div class="main_right">
                <div class="clearfix grpelem" id="ppu4866-6"><!-- column -->
                    <div class="product_option_panel">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="product_options_header">Options &amp; Prices</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">

                                    <table cellpadding="0" cellspacing="0" border="0" width="236"
                                           class="product_option_holder">
                                        <tbody>
                                        <tr>

                                            <td colspan="2" align="left" style="padding-top:5px;">
                                                <div class="prooption_desc">Your price will automatically update
                                                    according to your options chosen.
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pulldown">
                                                <strong>Size:</strong>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productsizelist" id="comps_size"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateCompsProductPrice('size')">
                                                    <option value="DL 210 x 99">DL 210 x 99</option>
                                                </select></td>
                                        </tr>


                                        <tr>
                                            <td class="pulldown"><strong>Stock:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productstocklist" id="comps_stock"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateCompsProductPrice('stock')">
                                                    <option value="100GSM">100GSM LASER BOND</option>
                                                    <option value="120GSM">120GSM LASER 100%
                                                        RECYCLED
                                                    </option>
                                                </select></td>
                                        </tr>



                                        <tr>
                                            <td class="pulldown"><strong>Printed Sides:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productprintedsidelist"
                                                                             id="comps_side"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateCompsProductPrice('stock')">
                                                    <option value="1 SIDE">1 SIDE</option>
                                                    <option value="2 SIDES">2 SIDES</option>
                                                </select></td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- custom quote panel -->
                    <div class="product_quote_panel">
                        <table class="product_quote_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_quote">
                                    <div class="product_quote_text">Looking for more options?</div>
                                    <div class="product_quote_link"><a href="custom-quotes.php">Custom Quote</a></div>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="price_holder_spacer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="product_price_panel">
                        <table class="product_price_holder" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="product_options_price_bkgrd" style="padding-top:5px;" align="left">
                                    <div class="price_desc">Select items you would like to purchase, then press "Add to
                                        Cart"
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_bkgrd" align="left">


                                    <div id="productpriceupdate">
                                        <div id="refreshselectproduct">
                                            <form name="frmSetProductPrice" method="post" action="cart.php"
                                                  onsubmit="return submitadd2cart(this)">
                                                <table width="230" align="left">
                                                    <tbody>
                                                    <tr>
                                                        <td class="qty_header"><strong>Qty</strong></td>
                                                        <td class="kinds_header"><strong>Kinds</strong></td>
                                                        <td class="price_header"><strong>Price</strong></td>
                                                        <td class="buy_header"><strong>Buy</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">250</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="comps_inputbox_250"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('comps','inputbox','250',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="comps_td_250" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="comps_price_250"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="comps_checkbox_250"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('comps','checkbox','250')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="comps_inputbox_500"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('comps','inputbox','500',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="comps_td_500" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="comps_price_500"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="comps_checkbox_500"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('comps','checkbox','500')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">1000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="comps_inputbox_1000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('comps','inputbox','1000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="comps_td_1000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="comps_price_1000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="comps_checkbox_1000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('comps','checkbox','1000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">1500</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="comps_inputbox_1500"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('comps','inputbox','1500',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="comps_td_1500" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="comps_price_1500"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="comps_checkbox_1500"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('comps','checkbox','1500')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">2000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="comps_inputbox_2000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('comps','inputbox','2000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="comps_td_2000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="comps_price_2000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="comps_checkbox_2000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('comps','checkbox','2000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">5000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="comps_inputbox_5000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('comps','inputbox','5000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="comps_td_5000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="comps_price_5000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="comps_checkbox_5000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('comps','checkbox','5000')">
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="qty_left">10000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                    name="usersetqty_50-productid_57"
                                                                                    id="comps_inputbox_10000"
                                                                                    value="1" maxlength="2"
                                                                                    style="width:30px"
                                                                                    oninput="UpdateProductPrice('comps','inputbox','10000',value);
                                                                                            this.value=this.value.replace(/^[0]+[0-9]*$/gi,'');
                                                                                            value = value.replace(/[^0-9]/g,'');
                                                                                ">&nbsp;
                                                        </td>
                                                        <td id="comps_td_10000" width="50px">
                                                            $95.00<input type="hidden"
                                                                        name="updateselectedproductprice50"
                                                                        id="comps_price_10000"
                                                                        value="95.00"></td>
                                                        <td><input type="checkbox" id="comps_checkbox_10000"
                                                                name="selectproduct[]"
                                                                value="usersetqty_50-productid_57-price_95.00"
                                                                onclick="UpdateProductPrice('comps','checkbox','10000')">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"><input type="hidden" id="productid"
                                                                               name="productid" value="61"><input
                                                                type="hidden" id="totalprice" name="totalprice"
                                                                value="0.00"><input type="hidden" id="productsize"
                                                                                    name="productsize"
                                                                                    value="DL 210 x 99"><input
                                                                type="hidden" id="productstock" name="productstock"
                                                                value="100GSM LASER BOND"><input type="hidden"
                                                                                                 id="productcolor"
                                                                                                 name="productcolor"
                                                                                                 value="4 COLOUR PROCESS"><input
                                                                type="hidden" id="productprintedside"
                                                                name="productprintedside" value="1 SIDE"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" id="totalpriceupdate">
                                                            <center><span style="font-weight: bold;">Total Price: AUD <p id="comps_totalPrice">0.00</p></span><div id="flyItem_comps" class="fly-item"><img src="{{URL::asset('/image/shopping-cart.png')}} "></div>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_1">
                                                            <center><span class="price_msg_first">Price include GST and delivery</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="price_msg_2">
                                                            <center><span class="price_msg">All YellowStar Press prices are based on final artwork supplied</span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" align="right"><br style="">
                                                            <table>
                                                                <tbody>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="clear_btn" onclick="clearPrice('comps');"></a>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="add_to_cart"  id="add_to_cart_id"onclick="addToCart('comps')">
                                                                </td>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="product_options_price_footer"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- email your order in 3 steps -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951"
                       type="button" onclick="clickHeader(14)"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 13px;">
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-01.jpg')}} " alt="" width="290"
                             height="146"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-01.jpg?crc=3906882500">
                    </a>

                    <!-- corporate accounts call image -->
                    <a class="nonblock nontext clip_frame grpelem" id="u76951" href="tel:0398786999"
                       data-muse-uid="U76951" data-muse-type="img_frame" style="margin-top: 10px;">
                        <!-- image -->
                        <img class="block" id="u76951_img"
                             src="{{URL::asset('/image/1print - email order banner-02.jpg')}} " alt="" width="290"
                             height="113"
                             data-muse-src="http://web.archive.org/web/20180903152038/http://www.1print.com.au/newsite_2014/images/1print%20-%20email%20order%20banner-02.jpg?crc=3866292113">
                    </a>

                </div>
                <!--end product_right_option-->
                <!-- setting up own side bar bottom -->

            </div>
            <div class="clear"></div>
        </div>
        </div>
        <div style="clear: both;"></div>
    </div>

    <div class="product_div" id="product_div_id_16" style="display:none">
        <div class="text_holder">
        <div class="main_container web-design" style="overflow:hidden;padding-top:4rem">
            <div class="main_left" style="float: left;">


            <div id="breadcrumbs">
                    You are here:
                        <a href="/home" >YellowStar Press</a>
                        »
                            <a href="/product/websiteDesign" >
                            Website Design/Digital Marketing
                            </a>
            </div>
                <h1 style="display:inline-block;">Website Design / Digital Marketing</h1>
                <h4>

                    AWD has been our technology partner for over 15 years. This partnership enables us to offer all of our customers a comprehensive range of online marketing services to complement our offline marketing solutions. AWD specialises in web design and digital marketing.
                </h4>
                <br style="">
                <p>
                    AWD's  highly experienced teams can assist you with every aspect of your digital strategy from creating a website to developing a full-scale online marketing campaign. AWD have been helping Australian businesses succeed in the digital space for nearly two decades.
                </p>
                <div class="onefifth">
                    <img src="{{URL::asset('image/web-design.jpg')}}">
                    Website Design and Development
                </div>
                <div class="onefifth">
                    <img src="{{URL::asset('image/web-ecommerce.jpg')}}">
                    Online Store
                </div>
                <div class="onefifth">
                    <img src="{{URL::asset('image/web-custom.jpg')}}">
                    Custom Software/Application
                </div>
                <div class="onefifth">
                    <img src="{{URL::asset('image/web-mobile.jpg')}}">
                    Mobile Website
                </div>
                <div class="onefifth">
                    <img src="{{URL::asset('image/web-seo.jpg')}}">
                    Search Engine Optimisation(SEO)
                </div>



                <div class="clear"></div>
            </div>

            <div class="main_right" style="float: right; width: 400px;">
                <div class="login_form web-design-form">
                    <form id="awd_partnership" name="awd_partnership" method="post">
                        <div class="login_field_holder" style="width:100%">
                            <h4>Request More Info</h4>
                            <p>Please fill out the form and one of web consultants will be in contact with you.</p>
                            <div class="field_title field_title_first">Contact Name <span style="color:red">*</span></div>
                            <div class="field_holder"><input id="website_contactName" type="text" maxlength="80" name="name"></div>
                            <div class="field_title">Business Name <span style="color:red">*</span></div>
                            <div class="field_holder"><input id="website_businessName" type="text" maxlength="80" name="company"></div>
                            <div class="field_title">Telephone <span style="color:red">*</span></div>
                            <div class="field_holder"><input id="website_phone" type="text" maxlength="80" name="phone"></div>
                            <div class="field_title">Email Address<span style="color:red">*</span></div>
                            <div class="field_holder"><input id="website_email" type="text" maxlength="80" name="email"></div>
                        </div>
                        <input id="postemail" class="submit_btn blue_button" type="button" name="postemail" value="Submit"
                            onclick="websiteSendEmail()" style="margin:20px 0; width:98%;">
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>


    <!-- design -->
    <div class="design_div" id="design_div_id" style="display:none">
        <div class="text_holder">
            <div class="main_container">
                <div class="container_left">
                    <h1>Design Services</h1>
                    <p>Our design team has extensive experience in producing brand identities' for any industry from scratch for use in your business stationery. Whether your project is a simple promotional flyer or business card through to a complete suite of high end marketing materials, YellowStar Press have the expertise to provide crisp, clean design that will add value to your organisation.
                    </p>
                    <p>&nbsp;</p>
                    <h3 class="no_padding">Services offered</h3>
                    <ul class="black_bullets">
                        <li>Logo / Image Design
                        </li><li>
                            Business Card &amp; Stationery Design
                        </li><li>
                            Postcard / Flyer Design
                        </li><li>
                            Promotional Brochure and Booklet Design
                        </li><li>
                            Presentation Folder and Marketing Material Design
                        </li><li>
                            Correct or add new details to existing artwork
                        </li><li>
                            Convert supplied files to a print ready format
                        </li><li>
                            Signage Design and more..
                        </li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>
                        We work closely with our clients to ensure a smooth transition from design to the finished product. YellowStar Press charge an hourly rate for our services and always provide an estimate for each project, whether it's the first for an individual client or the hundredth - No suprises and no problems.
                    </p><p>&nbsp;</p>
                    <p>
                        Call (03) 9878 6999 or email <a href="mailto:sales@yellowstarpress.com.au" class="black_link">sales@yellowstarpress.com.au</a> for more information and prices.
                    </p>

                </div>
                <div class="container_right">

                    <a class="gallery_link" href="javascript:void(0);" onclick="clickHeader(3)">
                        <div class="gallery_button"></div>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <!-- gallary -->
    <div class="gallary_div" id="gallary_div_id" style="display:none">
        <div class="gallery_left" id="gallery_left_id">
            <div>
                <button class="gallery_span"id="gallery_span_id" type="button" onclick="show_hidden()"></button>
                <div style="clear: both;"></div>
            </div>
            <div class="galleryfor6">
                <div class="size_rowfor2">
                    <div class="gallery_info_for6_1 no_margin" id="gallery_info_for6_1_id">
                        <a href="javascript:void(0);" onclick="clickPhoto(1)">
                        <div class="mask"></div>
                        </a>
                    </div>
                    <div class="gallery_info_for6_2 margin_left20" id="gallery_info_for6_2_id">
                        <a href="javascript:void(0);" onclick="clickPhoto(2)">
                        <div class="mask"></div>
                        </a>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div class="size_rowfor2">
                    <div class="gallery_info_for6_3 no_margin" id="gallery_info_for6_3_id">
                        <a href="javascript:void(0);" onclick="clickPhoto(3)">
                        <div class="mask"></div>
                        </a>
                    </div>
                    <div class="gallery_info_for6_4 margin_left20" id="gallery_info_for6_4_id">
                        <a href="javascript:void(0);" onclick="clickPhoto(4)">
                        <div class="mask"></div>
                        </a>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div class="size_rowfor2">
                    <div class="gallery_info_for6_5 no_margin" id="gallery_info_for6_5_id">
                        <a href="javascript:void(0);" onclick="clickPhoto(5)">
                        <div class="mask"></div>
                        </a>
                    </div>
                    <div class="gallery_info_for6_6 margin_left20" id="gallery_info_for6_6_id">
                        <a href="javascript:void(0);" onclick="clickPhoto(6)">
                        <div class="mask"></div>
                        </a>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div class="galleryfor15" id ="galleryfor15_id" style="display:none">
                    <div class="size_rowfor3">
                        <div class="gallery_info_for15_1 no_margin">
                            <a href="javascript:void(0);" onclick="clickGallery(1)">
                            <div class="mask1"><p>booklets</p></div>
                            </a>
                        </div>
                        <div class="gallery_info_for15_2 margin_left20">
                            <a href="javascript:void(0);" onclick="clickGallery(2)">
                            <div class="mask2"><p>brochure</p></div>
                            </a>
                        </div>
                        <div class="gallery_info_for15_3 margin_left20">
                            <a href="javascript:void(0);" onclick="clickGallery(3)">
                            <div class="mask3"><p>bussinesscard</p></div>
                            </a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="size_rowfor3">
                        <div class="gallery_info_for15_4 no_margin">
                            <a href="javascript:void(0);" onclick="clickGallery(4)">
                            <div class="mask4"><p>DL Compliment</p></div>
                            </a>
                        </div>
                        <div class="gallery_info_for15_5 margin_left20">
                            <a href="javascript:void(0);" onclick="clickGallery(5)">
                            <div class="mask5"><p>posters</p></div>
                            </a>
                        </div>
                        <div class="gallery_info_for15_6 margin_left20">
                            <a href="javascript:void(0);" onclick="clickGallery(6)">
                            <div class="mask6"><p>postercards</p></div>
                            </a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="size_rowfor3">
                        <div class="gallery_info_for15_7 no_margin">
                            <a href="javascript:void(0);" onclick="clickGallery(7)">
                            <div class="mask7"><p>envelopers</p></div>
                            </a>
                        </div>
                        <div class="gallery_info_for15_8 margin_left20">
                            <a href="javascript:void(0);" onclick="clickGallery(8)">
                            <div class="mask8"><p>flyers</p></div>
                            </a>
                        </div>
                        <div class="gallery_info_for15_9 margin_left20">
                            <a href="javascript:void(0);" onclick="clickGallery(9)">
                            <div class="mask9"><p>letterhead</p></div>
                            </a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="size_rowfor3">
                        <div class="gallery_info_for15_10 no_margin">
                            <a href="javascript:void(0);" onclick="clickGallery(10)">
                            <div class="mask10"><p>signage</p></div>
                            </a>
                        </div>
                        <div class="gallery_info_for15_11 margin_left20">
                            <a href="javascript:void(0);" onclick="clickGallery(11)">
                            <div class="mask11"><p>banner</p></div>
                            </a>
                        </div>
                        <div class="gallery_info_for15_12 margin_left20">
                            <a href="javascript:void(0);" >
                            <div class="mask1"><p>Coming Soon</p></div>
                            </a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="size_rowfor3">
                        <div class="gallery_info_for15_13 no_margin">
                            <a href="javascript:void(0);" >
                            <div class="mask1"><p>Coming Soon</p></div>
                            </a>
                        </div>
                        <div class="gallery_info_for15_14 margin_left20">
                            <a href="javascript:void(0);" >
                            <div class="mask1"><p>Coming Soon</p></div>
                            </a>
                        </div>
                        <div class="gallery_info_for15_15 margin_left20">
                            <a href="javascript:void(0);" >
                            <div class="mask1"><p>Coming Soon</p></div>
                            </a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </div>

        </div>

        <div class="gallery_right" id="gallery_right_id">

            <div class="gallery_silde" id ="gallery_silde_id">
                <div class="mySlides" >
                    <div class="gallery_info_for6-1" id="gallery_info_for6-1_id"></div><div class="gallery_silde_note" ><p id ="gallery_silde_note_id1">
                    Booklet<br/>
                    150gsm Gloss Stock<br/>
                    200gsm Cover Gloss Machine Varnish<br/>
                    Saddlestitched
                </p></div>
                    <button type="button" class="gallery_page_next" onclick="clickProduct(1)"><a href="/product/brochures"></a><i class="fas fa-chevron-right"></i></button>
                </div>
                <div class="mySlides" ><div class="gallery_info_for6-2"  id="gallery_info_for6-2_id"></div><div class="gallery_silde_note"><p id ="gallery_silde_note_id2">
                Booklet<br/>
                    150gsm Gloss Stock<br/>
                    200gsm Cover Gloss Machine Varnish<br/>
                    Saddlestitched
                </p></div>
            <button type="button" class="gallery_page_next" ><i class="fas fa-chevron-right"></i></button></div>
                <div class="mySlides" ><div class="gallery_info_for6-3"  id="gallery_info_for6-3_id"></div><div class="gallery_silde_note"><p id ="gallery_silde_note_id3">
                Booklet<br/>
                    150gsm Gloss Stock<br/>
                    200gsm Cover Gloss Machine Varnish<br/>
                    Saddlestitched
                </p></div>
            <button type="button" class="gallery_page_next" ><i class="fas fa-chevron-right"></i></button></div>
                <div class="mySlides" ><div class="gallery_info_for6-4"  id="gallery_info_for6-4_id"></div><div class="gallery_silde_note" ><p id ="gallery_silde_note_id4">
                Booklet<br/>
                    150gsm Gloss Stock<br/>
                    200gsm Cover Gloss Machine Varnish<br/>
                    Saddlestitched
                </p></div>
            <button type="button" class="gallery_page_next" ><i class="fas fa-chevron-right"></i></button></div>
                <div class="mySlides" ><div class="gallery_info_for6-5" id="gallery_info_for6-5_id"></div><div class="gallery_silde_note"><p id ="gallery_silde_note_id5">
                Booklet<br/>
                    150gsm Gloss Stock<br/>
                    200gsm Cover Gloss Machine Varnish<br/>
                    Saddlestitched
                </p></div>
            <button type="button" class="gallery_page_next" ><i class="fas fa-chevron-right"></i></button></div>
                <div class="mySlides" ><div class="gallery_info_for6-6" id="gallery_info_for6-6_id"></div><div class="gallery_silde_note" ><p id ="gallery_silde_note_id6">
                Booklet<br/>
                    150gsm Gloss Stock<br/>
                    200gsm Cover Gloss Machine Varnish<br/>
                    Saddlestitched
                </p></div>
            <button type="button" class="gallery_page_next" ><i class="fas fa-chevron-right"></i></button></div>
            </div>
            <div class="slider-controls1">
                <button type="button" class="gallery_next" onclick="plusDivs(1)"><i class="fas fa-chevron-right"></i></button>
                <button type="button" class="gallery_previous" onclick="plusDivs(-1)"><i class="fas fa-chevron-left"></i></button>
            </div>

        </div>

        <div style="clear: both;"></div>

    </div>


    <!-- support -->
    <div class="support_div" id="support_div_id" style="display:none">
        <div class="main_container_au">
            <div class="container_left">
            <h1>Frequently Asked Questions</h1>
            <p class="black_bold">What colour settings should my artwork use?</p>
            <p>
                All images must be saved in CYMK mode between 300-500dpi
                Please make sure all colours are nominated correctly
                as PMS or CYMK and are relevant to the job you are submitting.
            </p>
            <p>&nbsp;</p>
            <p class="black_bold">
                What file formats to you accept when submitting artwork?
            </p>
            <p>
                YellowStar Press will only accept the following formats as final artwork.
                Artwork which does not adhere to these specifications will incur artwork charges.
            </p>
            <p>&nbsp;</p>
            <ul class="black_bullets">
                <li><span class="black">Adobe Acrobat</span> (PDF) version XI or below (PDF)</li>
                <li><span class="black">Adobe Photoshop</span> version CC or below (PSD or TIFF)</li>
                <li><span class="black">Adobe Illustrator</span> version CC or below (AI, EPS, PDF)</li>
                <li><span class="black">Adobe InDesign</span> version CC or below (INDD)</li>
                <li><span class="black">Quark Xpress</span> version 9 or below (QXD)</li>
            </ul>
            <p>&nbsp;</p>
            <ul class="black_bullets">
                <li>YellowStar Press accepts files in PC or MAC format.</li>
                <li>All images must be saved in CMYK at 300dpi.</li>
                <li>Make sure all colours are nominated correctly as PMS or CMYK.</li>
                <li>OVERPRINTS MUST BE TURNED OFF.</li>
                <li>All artwork must include a minimum of 2mm bleed and crop marks.</li>
                <li>Where possible, please convert your text to outlines or curves.</li>
                <li>Please supply us with all relevant files, including fonts and links (graphics).</li>
            </ul>
            <p>&nbsp;</p>
            <p class="black_bold">Does YellowStar Press provide artwork design services?</p>
            <p>
                Yes, we do provide artwork design services upon request. If you want us to design your artwork for
                printing, please use our <a
                    href="/contact"
                    class="blue_link">Custom Quote Form</a> and let us know. We will contact you to discuss your
                requirements further. Business Card Design is available as an option when ordering from the Business
                Card Special page.
            </p>
            <p>&nbsp;</p>
            <p class="black_bold">
                I want a greater quantity than is available using your shopping cart. Am I out of luck?</p>
            <p>
                We are more than happy to do large offset printing runs above the maximum set number offered on the
                website shopping cart facility. If you have an extra large printing order, complete the <a
                    href="/contact"
                    class="blue_link">Custom Quote Form</a> and we will offer you a special price.
            </p>
            <p>&nbsp;</p>
            <p class="black_bold">
                What is Offset Printing?</p>
            <p>
                Offset Printing uses large scale printing machines that use liquid inks. The large scale machinery used
                in offset printing is reserved for big printing jobs with a minimum of 1000 sheets.
            </p>
            <p>&nbsp;</p>
            <p class="black_bold">What is Digital Printing?</p>
            Digital Printing uses toner instead of ink. This method of printing is far more economical for short run
            print jobs than offset printing.
            <p class="black_bold">What is Machine Varnish?</p>
            Machine Varnish is a gloss finish that is applied by the printing press as a liquid on top of the printing.
            It is great for printing jobs with photos or large areas of ink coverage as it enhances the finish and
            prevents finger marking.
            <p></p></div>
            <div class="container_right">
            <p class="black_bold">You mention highest quality for lowest possible price. How can you claim highest
                quality?</p>
            <p>
                We run our own industrial grade printing equipment in-house, ensuring all jobs are closely monitored and
                a high standard of quality is consistently maintained. We use the best, highest quality artboard. Our
                entry level business cards, for example, are printed on 400gsm artboard, while most of our competitors
                offer 210-230gsm for a higher price.
            </p>
            <p>&nbsp;</p>
            <p class="black_bold">Can I receive a free printing sample to see the quality of your services?</p>
            <p>
                You certainly can. Simply complete the <a
                    href="/sample"
                    class="blue_link">Free Sample Request</a> Form on this website with your details and we will send
                you a printing sample pack so you can see the value of our printing services for yourself.
            </p>
            <p>&nbsp;</p>
            <p class="black_bold">I have an urgent printing job. How quickly can I receive the finished product?</p>
            <p>If you need your printing job completed and delivered in the shortest time possible, simply complete the
                Urgent Printing Form on the website before 3pm on a work day and the finished product will be dispatched
                in 2 working days by priority delivery. You will be contacted to confirm dispatch.
            </p>
            <p>&nbsp;</p>
            <p class="black_bold">Where can I view your privacy policy?</p>
            <p>We value your privacy and you can view our policy on how we use the information you share with us <a
                    href="/privacy"
                    class="blue_link">here</a>.
            </p>
            <p>&nbsp;</p>
            <p class="black_bold">I want to print something that does not appear as a choice in your ordering facility.
                Can you still help me?</p>
            We are more than willing to accommodate anything your printing job requires. The more of our customers that
            ask for something, the more likely we will be to make the option available from the website. If the options
            you want are not available from the ordering facility, you can request it by filling out our <a
                href="/contact"
                class="blue_link">Custom Quote Form</a>.
            <p></p>
            <p>&nbsp;</p>
            <p class="black_bold">What payment methods do you accept?</p>
            <p>If you are making an order online using our secure shopping cart facility, you may only pay via
                Mastercard, Visa or Paypal.
            </p>
            <p>&nbsp;</p>
            <p>If you wish to make your order via email, over the phone or in person, we can be very flexible as to how
                you make payment, including credit card payments. Please be aware that we require a successful payment
                before your printing job commences. Payment methods are listed below.
            </p>
            <p>&nbsp;</p>
            <ul class="black_bullets">
                <li>Electronic Funds Transfer (EFT)</li>
                <li>Credit Cards (Visa and Master Card)</li>
                <li>Cheque (made out to YellowStar Press Pty Ltd)</li>
                <li>PayPal</li>
            </ul>
            <p>&nbsp;</p>
            <p>
                <a href="javascript:void(0);" onclick="clickHeader(14)"
                   class="blue_link">Click here for further information</a>
            </p>
            <p>&nbsp;</p>
            <p class="black_bold">I Want to use metallic or specialty colours For my print job. Do you offer this?</p>
            <p>Yes we do. If you want to use specialty colours like metallic silver or gold you can request this by
                completing and submitting the <a
                    href="/contact"
                    class="blue_link">Custom Quote Form</a>.
            </p>
        </div>
            <div style="clear: both;"></div>
        </div>
    </div>

    <!-- aboutUs -->
    <div class="aboutUs_div" id="aboutUs_div_id" style="display:none">
        <div class="main_container_au">
            <div class="container_left">
            <h1>About us</h1>
            <p>YellowStar Press has a state the art production facility to meet all your demands, from short digital to large
                commercial runs. More importantly, we have the people with the skills and creativity to meet your
                needs.</p>
            <p>&nbsp;</p>
            <p class="black_heading">Our Printing facilities include</p>
            <ul class="black_bullets">
                <li>A1, A2 and A3 offset pressess</li>
                <li>Full colour on Demand Digital Print System</li>
                <li>Inhouse Design Services</li>
                <li>Computer to Plate Technology (CTP)</li>
                <li>Two Cylinders for inhouse formcuting and scoring</li>
                <li>A4, A3 and A2 Laminating</li>
                <li>Binding, collating and saddlestitching Services</li>
                <li> Signage Design and more..</li>
            </ul>
            <p>&nbsp;</p>
            <p>Our vibrant, full colour, offset printing is of exceptional quality and our highly trained operators
                possess a keen eye for detail.</p>
        </div>

        <div class="container_right">
            <h2 class="large">We Print</h2>

            <div class="about_col1">
                <ul class="black_bullets">
                    <li>Annual Reports</li>
                    <li>Business Forms</li>
                    <li>Envelopes</li>
                    <li>Folders</li>
                    <li>Labels</li>
                    <li>Manuals</li>
                    <li>NCR Books</li>
                    <li>Posters</li>
                    <li>Postcards</li>
                </ul>
            </div>
            <div class="about_col2">
                <ul class="black_bullets">
                    <li>ads</li>
                    <li>Presentation Folders</li>
                    <li>Booklets</li>
                    <li>Books</li>
                    <li>Calendars</li>
                    <li>Catalogues</li>
                    <li>Desk Pads</li>
                    <li>Flyers</li>
                    <li>Greeting Cards</li>
                </ul>
            </div>
            <div class="about_col3">
                <ul class="black_bullets">
                    <li>Invitations</li>
                    <li>Leaflets</li>
                    <li>Magazines</li>
                    <li>Pamphlets</li>
                    <li>Brochures</li>
                    <li>Business Cards</li>
                    <li>Cards</li>
                    <li>Newsletters</li>
                    <li>Docket Books</li>
                </ul>
            </div>
            <div class="about_col4">
                <ul class="black_bullets">
                    <li>Forms</li>
                    <li>Gift Vouchers</li>
                    <li>Invoice Books</li>
                    <li>Letterheads</li>
                    <li>Menus</li>
                    <li>Notebooks</li>
                </ul>
            </div>
            <!-- <div class="clear"></div> -->
        </div>
            </div>
    </div>

    <!-- contact -->
    <div class="contact_div" id="contact_div_id" style="display:none">
        <div class="text_holder">
            <div class="main_container">
                <div class="contact_div_leftContainer">
                    <h1>Contact us</h1>
                    <div class="contact_phone">
                        <!-- <span class="black_bold ">Call</span>--> <span class="phone_lg">(03) 9878 6999</span>
                    </div>
                    <div class="contact_fax">
                        <span class="black_bold">Fax</span> (03) 9878 6999
                    </div>


                    <div class="contact_email">
                        <span class="contact-align-left">Quotes</span>
                        <span class="contact-align"><a
                                href="mailto:sales@yellowstarpress.com.au"
                                class="black_link">sales@yellowstarpress.com.au</a></span>
                    </div>
                    <div class="contact_email">
                        <span class="contact-align-left">Orders</span>
                        <span class="contact-align"><a
                        href="mailto:sales@yellowstarpress.com.au"
                                class="black_link">sales@yellowstarpress.com.au</a></span>
                    </div>
                    <div class="contact_email_last">
                        <span class="contact-align-left">Accounts</span>
                        <span class="contact-align"><a
                        href="mailto:sales@yellowstarpress.com.au"
                                class="black_link">sales@yellowstarpress.com.au</a></span>
                    </div>
                    <p class="black_heading">You can visit us at:</p>
                    <p style="color: #323232;"> 26 Metropolitan Av, Nunawarding 3131 Australia</p>
{{--                    <img src="{{URL::asset('/image/Contact.jpg') }}" width=90% height=80%>--}}
                </div>
                <div class="contact_right_quote">
                    <div class="contact_form_left">
                    <h2>Request</h2>
                    <h2>a quote</h2>
                    </div>
                    <div class="contact_form_right">

                    <br style="">
                    <form method="post" name="customquotes" id="customquotes" enctype="text/plain" action="mailto:sy135673@gmail.com">
                    <div class="create-account-table3 quotes_table">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                        <td height="25" class="quotes_form_td1 quote_pro_list quote_col_first" valign="middle"><div class="quote_for_holder">I would like a quote on:</div></td>
                        <td height="25" valign="top">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="quote_product_list">
                                <tbody><tr>
                                    <td><select name="custom_product" id="contact_product"><option value="Select Product" selected="">Select Product</option><option value="Booklets">Booklets</option><option value="Brochures">Brochures</option><option value="Business Cards">Business Cards</option><option value="Flyers">Flyers</option><option value="Letterheads">Letterheads</option><option value="Notepads/Deskpads">Notepads/Deskpads</option><option value="Postcards">Postcards</option><option value="Posters">Posters</option><option value="Presentation Folders">Presentation Folders</option><option value="With Compliment Slips">With Compliment Slips</option><option value="Envelopes">Envelopes</option><option value="Calendars">Calendars</option><option value="Swing Tags">Swing Tags</option><option value="Other Products">Other Products</option></select></td>
                                </tr>
                            </tbody></table>
                        </td>
                        </tr><tr>
                        <td colspan="2">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody><tr>
                                <td style="padding-bottom:0" class="quote_list_table" colspan="2"><div id="custom_table"></div></td>
                            </tr>
                        </tbody></table>
                    </td></tr><tr>
                        <td valign="top" style="padding-top:3px; vertical-align:top">Job Description: </td>
                        <td style="padding-top:3px" valign="top"><textarea name="Job Description" wrap="" cols="" rows="8" style="font-size: 13px; font-family: Arial;" id="contact_description"></textarea></td>
                    </tr>
                    <tr>
                        <td height="25"> Delivery Postcode:</td>
                        <td><input type="text" name="Delivery Postcode" id="contact_postcode" maxlength="80"></td>
                    </tr>
                    <tr>
                        <td height="25">Business Name:</td>
                        <td><input type="text" name="Business Name" id="contact_businessName" maxlength="80"></td>
                    </tr>
                    <tr>
                        <td>Your
                        Name: <span style="color:red">*</span></td>
                        <td><input type="text" name="Name" id="contact_name" maxlength="80"></td>
                    </tr>
                    <tr>
                        <td height="25">Email:<span style="color:red">*</span></td>
                        <td><input type="text" name="Email" id="contact_email" maxlength="80"></td>
                    </tr>
                    <tr>
                        <td height="25">Telephone:<span style="color:red">*</span> </td>
                        <td><input type="text" name="Phone" id="contact_tel" maxlength="80"></td>
                    </tr>
                    <tr>
                        <td colspan="2" height="25">By previewing your artwork we can quote your job precisely</td>
                    </tr>

                    <tr>
                    <td height="25" align="left">Preview</td>
                        <td><input type="file" name="file1" id="contact_file1" ></td>
                    </tr>
                    {{-- <tr>
                    <td height="25" align="left">Preview 2</td>
                        <td><input type="file" name="file2" id="contact_file2"></td>
                    </tr>
                    <tr>
                    <td height="25" align="left">Preview 3</td>
                        <td><input type="file" name="file3" id="contact_file3"></td>
                    </tr> --}}
                    <tr>
                    <td height="25" align="left">How did you find us?</td>
                        <td><select name="How did you find us" id="contact_mode"><option value="Google">Google</option><option value="Yellow Pages">Yellow Pages</option><option value="Yahoo">Yahoo</option><option value="Bing/MSN">Bing/MSN</option><option value="Link from another site">Link from another site</option><option value="Referral">Referral</option><option value="Mail Drop">Mail Drop</option><option value="Other">Other</option></select></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td valign="top" colspan="3">
                            <div style="display:inline-flex;">
                        <div class="subscribe_holder" style="width:2rem;position:relative;top:1rem;">
                        <input class="newsletter_subscribe" type="checkbox" name="sigin_in_newsletter" id="contact_subscribe" value="yes" checked="">
                        </div>
                        <div class="subscribe_text" style="padding-left:0.5rem;">
                            Subscribe to our newsletter for special offers
                        </div>
                            </div>
                        <div style="display:none"><input type="checkbox" name="validate_form" id="validate_form" value="yes"></div>
                        <div class="clear"></div>
                        </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>
                    <input type="button" class="submit_btn blue_button" value="Submit" name="postemail" id="postemail" onclick="contactSendEmail()">
                    </td>
                    </tr>
                    </tbody></table></div>
                </form>
                </div>
            </div>




                <div style="clear: both;"></div>

                <!-- <h3 align="center">Address</h3> -->
                <!--The div element for the map -->
                <div id="map" style="width:100%;height:400px;margin:auto;">
                    <div style="overflow:hidden;width: 80%;position: relative;margin:auto;">
                        <iframe width="1000" height="440"
                                src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=26%20Metropolital%20Ave%20Nunawading%20VIC%203131+(%E6%A0%87%E9%A2%98)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <div
                            style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;">
                            <small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a
                                    href="https://embedgooglemaps.com/it/">embedgooglemaps IT</a> & <a
                                    href="http://trovalink.it">Trova link</a></small></div>
                        <style>#gmap_canvas img {
                                max-width: none !important;
                                background: none !important
                            }</style>
                    </div>
                    <br/>
                </div>


            </div>
        </div>
    </div>

    <!-- cart -->
    <div class="cart_div" id="cart_div_id" style="display:none">
        <div class="text_holder" style="padding-top:11rem">
        <div class="main_product_container checkout_holder">
            <div class="cart_left">
                <span class="checkout_step"><span class="step_cart">My Cart</span></span>
                <span class="checkout_step"><span class="step_cart">Delivery Information</span></span>
                <span class="checkout_step"><span class="step_cart">Confirm your Order</span></span>
                <span class="checkout_step"><span class="step_cart">Upload your Files</span></span>
                <span class="checkout_step"><span class="step_cart">Payment</span></span>
            </div>
            <div class="cart_right">
                <div id="cart_myCart" style="display: block;">
                    <h1>My Cart</h1>
                    <div id="cart_onProduct" style="display: block;">No product found in cart!</div>
                    <div id="cart_haveProduct" style="display: none;">

                    </div>

                    <div class="cart_price" style="display:none">
                        <div class="cart_totals">
                            <h2>Cart Totals</h2>
                            <table>
                                <tbody>

                                <tr class="order-total">
                                    <th>Total</th>
                                    <td>
                                        <strong><p class="amount" id="cart_price">$0.00</p></strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class = "cart_next" onclick = "cartProcess('delivery')" style="display:none">Next</div>
                </div>

                <div id="cart_delivery" style="display: none;">
                    <h1>Delivery Information</h1>
                    <div id="cart_userInfomation" >
                        <div  class="address_1" onclick = "cartaddress()">
                            Use Current Address
                        </div>
                        <div href="#" class="address_2">
                            <div  class="address_2_btn" onclick = "cartnewaddress()">
                                Use New Address
                            </div>
                            <div class="address_2_in" id = "address_2_in_id"style="display: none;">
                                <div class="col-50">
                                    <h3>New Address</h3>
                                    <label for="fname fa-u"> Full Name</label>
                                    <input type="text" id="information_name" name="firstname">
                                    <div class="checkmsg" id="fullnameck"></div>
                                    <label for="email">Email</label>
                                    <input type="text" id="information_email" name="email">
                                    <div class="checkmsg" id="emailck"></div>
                                    <label for="adr"> Phone Number</label>
                                    <input type="text" id="information_phone" name="address">
                                    <div class="checkmsg" id="phoneck"></div>
                                    <label for="adr"> Address</label>
                                    <input type="text" id="information_address" name="address">
                                    <div class="checkmsg" id="addck"></div>
                                    <label for="suburb"> Suburb</label>
                                    <input type="text" id="information_subrub" name="suburb" >
                                    <div class="checkmsg" id="subck"></div>

                                    <div class="rowcart">
                                    <div class="col-50">
                                        <label for="state">State</label>
                                        <input type="text" id="information_state" name="state">
                                        <div class="checkmsg" id="stateck"></div>
                                    </div>
                                    <div class="col-50">
                                        <label for="zip">Zip</label>
                                        <input type="text" id="information_zip" name="zip">
                                        <div class="checkmsg" id="zipck"></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "cart_next" onclick = "cartProcess('confirm')">Next</div>
                    <div class = "cart_back" onclick = "cartProcess('myCart')">Back</div>
                </div>

                <div id="cart_confirm" style="display: none;">
                    <h1>Confirm your Order</h1>
                    <div id="cart_confirmOrder"></div>
                    <div class="cart_price">
                        <div class="cart_totals">
                            <h2>Cart Totals</h2>
                            <table>
                                <tbody>

                                <tr class="order-total">
                                    <th>Total</th>
                                    <td>
                                        <strong><p class="amount" id="confirm_price">$0.00</p></strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class = "cart_next" onclick = "cartProcess('upload')">Next</div>
                    <div class = "cart_back" onclick = "cartProcess('delivery')">Back</div>
                </div>

                <div id="cart_upload" style="display: none;">
                    <h1>Upload your Files</h1>
                    <div>
                        <button class="cart_a">select your file
                            <input type="file" id="cart_uploadFile" >
                        </button>
                    </div>
                    <div class = "cart_next" onclick = "cartProcess('payment')">Next</div>
                    <div class = "cart_back" onclick = "cartProcess('confirm')">Back</div>
                </div>

                <div id="cart_payment" style="display: none;">
                    <h1>Payment</h1>
                    <div class="payment-title">
                        <h1>Payment Information</h1>
                    </div>
                    <div class="container preload">
                        <div class="creditcard">
                            <div class="front">
                                <div id="ccsingle"></div>
                                <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                                    <g id="Front">
                                        <g id="CardBackground">
                                            <g id="Page-1_1_">
                                                <g id="amex_1_">
                                                    <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                                            C0,17.9,17.9,0,40,0z" />
                                                </g>
                                            </g>
                                            <path class="darkcolor greydark" d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                                        </g>
                                        <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4">0123 4567 8910 1112</text>
                                        <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6">JOHN DOE</text>
                                        <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8">cardholder name</text>
                                        <text transform="matrix(1 0 0 1 479.7754 388.8793)" class="st7 st5 st8">expiration</text>
                                        <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8">card number</text>
                                        <g>
                                            <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9">01/23</text>
                                            <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11">VALID</text>
                                            <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">THRU</text>
                                            <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9 		" />
                                        </g>
                                        <g id="cchip">
                                            <g>
                                                <path class="st2" d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                                        c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="82" y="70" class="st12" width="1.5" height="60" />
                                                </g>
                                                <g>
                                                    <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
                                                </g>
                                                <g>
                                                    <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                                            c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                                            C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                                            c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                                            c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
                                                </g>
                                                <g>
                                                    <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
                                                </g>
                                                <g>
                                                    <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
                                                </g>
                                                <g>
                                                    <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
                                                </g>
                                                <g>
                                                    <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="Back">
                                    </g>
                                </svg>
                            </div>
                            <div class="back">
                                <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                                    <g id="Front">
                                        <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                                    </g>
                                    <g id="Back">
                                        <g id="Page-1_2_">
                                            <g id="amex_2_">
                                                <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                                        C0,17.9,17.9,0,40,0z" />
                                            </g>
                                        </g>
                                        <rect y="61.6" class="st2" width="750" height="78" />
                                        <g>
                                            <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
                                    C707.1,246.4,704.4,249.1,701.1,249.1z" />
                                            <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
                                            <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
                                            <path class="st5" d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
                                        </g>
                                        <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7">985</text>
                                        <g class="st8">
                                            <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10">security code</text>
                                        </g>
                                        <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
                                        <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
                                        <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13">John Doe</text>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="form-container">
                        <div class="field-container">
                            <label for="name">Name</label>
                            <input id="name" maxlength="20" type="text">
                        </div>
                        <div class="field-container">
                            <label for="cardnumber">Card Number</label><span id="generatecard">generate random</span>
                            <input id="cardnumber" type="text" pattern="[0-9]*" inputmode="numeric">
                            <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">

                            </svg>
                        </div>
                        <div class="field-container">
                            <label for="expirationdate">Expiration (mm/yy)</label>
                            <input id="expirationdate" type="text" pattern="[0-9]*" inputmode="numeric">
                        </div>
                        <div class="field-container">
                            <label for="securitycode">Security Code</label>
                            <input id="securitycode" type="text" pattern="[0-9]*" inputmode="numeric">
                        </div>
                    </div>
                    
                    <div class = "cart_back" onclick = "cartProcess('upload')">Back</div>
                </div>

            </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>


    <!-- login -->
    <div class="login_div" id="login_div_id" style="display:none">
        <div class="login_title">
		    <h3>welcome.</h3>
		    <h1>please sign in</h1>
		</div>
        <div class="login_div_main">
            <p class="login_div_sign" align="center">Log in</p>
            <form class="login_div_form1">

                <input id="login_username_id" class="login_div_un " type="text" align="center" placeholder="Username">
                <div class="checkmsg" id="usernamecheck"></div>
                <input id="login_password_id" class="login_div_pass" type="password" align="center"
                       placeholder="Password">
                <div class="checkmsg" id="passwordnamecheck"></div>
                <p class="login_div_forgot" align="center" onclick="clickHeader(10)"><a href="#">Forgot Password?</a></p>
                <button class="login_div_submit" id="login_btn" align="center" onclick="userLogin()" type="button">Log in</button>
            </form>

        </div>
        <div class="login_div_register_form">
			<div class="login_field_holder">
            <p class="login_div_sign" align="center">New Customer</p>
				<p>&nbsp;</p>
				<p>I am a new customer.</p>
				<p>&nbsp;</p>
				<p>Creating a new account will allow you to process your order quickly.</p>
				<p>&nbsp;</p>
				<p>You are also provided with the opportunity to update your personal details if necessary, and you can check any previous orders made.</p>
				<p>&nbsp;</p>
            </div>
            <button class="login_div_submit" align="center" onclick="">Register</button>
		</div>
    </div>


    <!-- forget passwd -->
    <div class="login_div_forgetpasswd" id="login_div_forgetpasswd_id" style="display:none">
        <div class="login_title">
		    <h3>welcome.</h3>
		    <h1>please enter your details</h1>
		</div>
        <div class="login_div_main">
            <p class="login_div_sign" align="center">Forget Password</p>


            <div class="clear" style="padding-top: 40px"></div>
            <input id="forget_username_id" class="login_div_un " type="text" align="center" placeholder="Username">
            <div class="checkmsg" id="usernamecheck"></div>
            <input id="forget_email_id" class="login_div_un" type="email" align="center" placeholder="Email">
            <div class="checkmsg" id="passwordnamecheck"></div>
            <p class="login_div_forgot" align="center" onclick="clickHeader(8)"><a href="#">Back to Log in</a></p>
            <button class="login_div_submit" align="center" onclick="forgetPassword()">Send</button>

        </div>
    </div>

    <!-- register -->
    <div class="register_div" id="register_div_id" style="display:none">
        <div class="login_title">
		    <h3>welcome.</h3>
		    <h1>please register</h1>
		</div>
        <div class="register_div_user">
            <!-- <header class="register_div_user_header">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
                        <h1 class="register_div_user_title">Register form</h1>
                    </header> -->
            <p class="login_div_sign" align="center">Register</p>
            <p class="login_div_forgot" align="center" onclick="clickHeader(8)"><a href="#">Have registered? Back to Log in</a></p>

            <form class="register_div_form">
                <div class="register_div_form_group">
                    <label class="reg_col1"><a>UserName</a></label>
                    <input type="text" placeholder="Enter Your Username" class="register_div_form_input"/>
                    <div class="checkmsg" id="usernamecheckmsg"></div>
                </div>

                <div class="register_div_form_group">
                    <label class="reg_col1"><a>Business Name</a></label>
                    <input type="text" placeholder="Enter Your Business Name" class="register_div_form_input"/>
                    <div class="checkmsg" id="businessnamecheckmsg"></div>
                </div>

                <div class="register_div_form_group">
                    <label class="reg_col1"><a>First Name</a></label>
                    <input type="text" placeholder="Enter Your First Name" class="register_div_form_input"/>
                    <div class="checkmsg" id="firstnamecheckmsg"></div>
                </div>

                <div class="register_div_form_group">
                    <label class="reg_col1"><a>Last Name</a></label>
                    <input type="text" placeholder="Enter Your Last Name" class="register_div_form_input"/>
                    <div class="checkmsg" id="firstnamecheckmsg"></div>
                </div>


                <div class="register_div_form_group">
                    <label class="reg_col1"><a>Email</a></label>
                    <input type="email" placeholder="Enter Your Email" class="register_div_form_input"/>
                    <div class="checkmsg" id="emailcheckmsg"></div>
                </div>

                <div class="register_div_form_group">
                    <label class="reg_col1"><a>Password</a></label>
                    <input type="password" placeholder="Enter Your Password" class="register_div_form_input"/>
                    <div class="checkmsg" id="passwdcheckmsg"></div>
                </div>
                <div class="register_div_form_group">
                    <label class="reg_col1"><a>Repeat Password</a></label>
                    <input type="password" placeholder="Enter Your Password" class="register_div_form_input"/>
                    <div class="checkmsg" id="passwdcheckmsg1"></div>
                </div>

                <div class="register_div_form_group">
                    <label class="reg_col1"><a>Phone number</a></label>
                    <input type="tel" placeholder="Enter Your Phone number" class="register_div_form_input"/>
                    <div class="checkmsg" id="phonenumcheckmsg"></div>
                </div>

                <div class="register_div_form_group">
                    <label class="reg_col1"><a>Address</a></label>
                    <input type="text" placeholder="Enter Your Address" class="register_div_form_input"/>
                    <div class="checkmsg" id="addresscheckmsg"></div>
                </div>

                <div class="register_div_form_group">
                    <label class="reg_col1"><a>Suburb</a></label>
                    <input type="text" placeholder="Enter Your Suburb" class="register_div_form_input"/>
                    <div class="checkmsg" id="suburbcheckmsg"></div>
                </div>

                <div class="register_div_form_group">
                    <label class="reg_col1"><a>State</a></label>
                    <input type="text" placeholder="Enter Your State" class="register_div_form_input"/>
                    <div class="checkmsg" id="statecheckmsg"></div>
                </div>

                <div class="register_div_form_group">
                    <label class="reg_col1"><a>Country</a></label>
                    <input type="text" placeholder="Australia" class="register_div_form_input" readonly="readonly"/>
                    <div class="checkmsg" id="statecheckmsg"><p class="login_div_forgot" align="center" onclick="clickHeader(6)"><a class="blue_link" href="#">Not in Australia? Please contact us</a></p></div>
                </div>

                <div class="register_div_form_group">
                    <label class="reg_col1"><a>Postcode</a></label>
                    <input type="text" placeholder="Enter Your Postcode" class="register_div_form_input"/>
                    <div class="checkmsg" id="postcodecheckmsg"></div>
                </div>

                <button class="register_div_btn" type="button" onclick="userRegister()">Register</button>
            </form>
        </div>
    </div>

    <!-- privacy -->
    <div class="privacy_div" id="privacy_div_id" style="display:none">
        <div class="main_container_au">
            <div class="container_left">
                <h1>Privacy Policy</h1>
                <p>YellowStar Press Pty Ltd is committed to protecting and respecting your privacy. This Privacy Statement sets
                    out our privacy policy and explains what we do with personal information that we collect from our
                    customers. Please read the following to understand our views and practices regarding personal
                    information, and how they pertain to you as you use our various products and services. This
                    statement discloses our current privacy practices, if we make any changes to this policy, we will
                    announce it via an e-mail and on our web site. If you have any questions or concerns regarding this
                    statement, please e-mail <a
                        href="mailto:sales@yellowstarpress.com.au" class="blue_link">sales@yellowstarpress.com.au</a>
                </p>
                <p>&nbsp;</p>
                <p class="black_bold">What information does YellowStar Press gather about it's customers?</p>
                <p>
                    The bulk of information YellowStar Press has about its customers is the information we get through the
                    "Registration Form" you complete when you first become a customer of YellowStar Press. We may also gather
                    information from your website, from the Australian Securities Commission and by querying a "Whois"
                    tool on the Internet.
                </p>
                <p>&nbsp;</p>
                <p>
                    Sometimes we conduct surveys, and although these can be anonymous, we prefer to get your contact
                    details so that we can follow-up on any issues that need clarification.
                </p>
                <p>&nbsp;</p>
                <p class="black_bold">
                    Data Security</p>
                <p>
                    YellowStar Press takes reasonable steps to keep any Personal Information in its possession secure and to
                    protect that Personal Information from misuse or loss and from unauthorised access, modification or
                    disclosure.
                </p>
                <p>&nbsp;</p>
                <p>Credit Card details, where supplied, are encrypted during transmission to our bank for processing.
                    YellowStar Press stores credit card details to enable confirmation of payments to customers, however access to
                    this Personal Information is controlled requiring executive approval.
                </p>
                <p>&nbsp;</p>
                <p>
                    Personal Information provided by customers on various forms or for specific transactions, including
                    name and address and credit card details are accessible only to authorised personnel such as those
                    staff involved in the processing of these forms/transactions.
                </p>
                <p>&nbsp;</p>
                <p>
                    When using the website you should be aware that no information transmitted over the internet can be
                    guaranteed as totally secure. Although YellowStar Press strives to protect such information, YellowStar Press does not
                    warrant the security of any information transmitted to it over the internet and you do so at your
                    own risk.
                </p>


            </div>

            <div class="container_right">
                <p class="black_bold">
                    How do we handle email and Contact Us/Feedback information or other electronic messages?
                </p>
                <p>&nbsp;</p>
                <p>
                    We may preserve the content of any email or "Contact us/Feedback" or other electronic message that
                    we receive. Any Personal Information contained in those messages will only be used or disclosed in
                    ways set out in this Privacy Statement. The message content may be monitored by our service
                    providers or our employees for purposes including troubleshooting, compliance auditing and
                    maintenance or where email abuse is suspected.
                </p>
                <p>&nbsp;</p>
                <p class="black_bold">
                    How does YellowStar Press use your personal information?
                </p>
                <p>&nbsp;</p>
                <p>
                    YellowStar Press uses the information it has about its customers to:
                </p>
                <p>&nbsp;</p>
                <ul class="black_bullets">
                    <li>Fulfil requests for products and services as requested by the customer.</li>
                    <li>Develop internal marketing programs and initiatives</li>
                </ul>
                <p>&nbsp;</p>
                <p class="black_bold">
                    Will YellowStar Press disclose any of your personal information?
                </p>
                <p>&nbsp;</p>
                <p>
                    YellowStar Press will not disclose any information about its clients or prospective clients to any third party
                    without consent.
                </p>
                <p>&nbsp;</p>
                <p class="black_bold">
                    Will YellowStar Press use your information for direct mailings?
                </p>
                <p>&nbsp;</p>
                <p>
                    YellowStar Press will, from time to time, e-mail its customers with information that we believe is important
                    for the smooth operation of the service, or is information which will improve the performance or
                    value of the customer's website
                </p>
                <p>&nbsp;</p>
                <p class="black_bold">
                    How can you deactivate your account, or correct or revise information YellowStar Press has about you or your
                    business?
                </p>
                <p>&nbsp;</p>
                <p>
                    To change your account details simply email sales@yellowstarpress.com.au with your new details. To cancel your
                    account with YellowStar Press you must make your request in writing or facsimile on company letterhead.
                </p>
                <p>&nbsp;</p>
                <p class="black_bold">

                    How does YellowStar Press use Cookies on its website
                </p>
                <p>&nbsp;</p>
                <p>
                    Ensure that only registered users gain access to the member area of the website, track, log and
                    collate the use of the website so that we can improve the user experience.
                </p>
                <p>&nbsp;</p>
                <p>
                    If you have any further questions regarding your privacy policy of YellowStar Press please <b
                        class="black_bold">email</b> sales@yellowstarpress.com.au
                </p>


                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <!-- Terms and Conditions -->
    <div class="terms_div" id="terms_div_id" style="display:none">
        <div class="main_container_au">
            <div class="container_left">
            <h1>Terms and Conditions</h1>
                <p>
            Welcome to YellowStar Press website. If you continue to browse and use this website you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern YellowStar Press Pty Ltd relationship with your in relation to this website
            </p>
        <p>&nbsp;</p>
        <p>
        YellowStar Press Pty Ltd is a full colour commercial and digital printer committed to providing the highest quality products at the best possible prices.
            </p>
        <p>&nbsp;</p>
        <p>
        The use of this website is subject to the following terms of use:
        </p>
        <p>&nbsp;</p>
        <p>
        The content of the pages of this website is for your general information and use only. It is subject to change without notice.
        </p>
        <p>&nbsp;</p>
        <p>


        Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.
        </p>
        <p>&nbsp;</p>
        <p>


        Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable.  It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.
        </p>
        <p>&nbsp;</p>
        <p>


        This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.
        </p>
        <p>&nbsp;</p>
        <p>


        All trademarks reproduced in this website which are not the property of, or licensed to, the operator are acknowledged on the website.
        </p>
        <p>&nbsp;</p>
        <p>


        Unauthorised use of the website may give rise to a claim for damages and/ or be a criminal offence.
        </p>
        <p>&nbsp;</p>
        <p>


        From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).
        </p>
        <p>&nbsp;</p>
        <p class="black_bold">
        Placing or approving an order
        </p>
        <p>
        YellowStar Press requires full payment when an order is placed. Once an order has been placed or approved, your credit card will be immediately debited. Please do not place an order if you do not agree. If you decide to cancel your order a cancellation fee is applicable. Please see section on Cancellation of an order.  YellowStar Press is not obliged to attend to any changes or variations to the goods unless agreed in writing by both parties. PLEASE FOLLOW OUR GUIDELINES ON ARTWORK SPECIFICATIONS. IF YOU ARE NOT SURE OF HOW TO SETUP A GRAPHIC FILE AND TO AVOID PRINTING ISSUES PLEASE DO NOT PROCEED WITH THE ORDER. USE A PROFESSIONAL GRAPHIC DESIGNER TO SETUP THE ARTWORK FOR COMMERCIAL PRINTING. IF YOU ARE NOT SURE ABOUT COLOUR OUTCOME AND ACTUAL IMAGE SIZE A HARD COPY PROOF IS RECOMMENDED.
        </p>
        <p>&nbsp;</p>


            </div>

            <div class="container_right">
            <p class="black_bold">
        Cancellation of an order
        </p>
        <p>
        Once an order has been placed it cannot be cancelled under any way circumstances without incurring a cancellation fee. Cancellation or alteration order fee is 10% of the value of the print job. Minimum fee will be $50 + GST plus any costs on graphic design/plates/proofs if applicable.
        </p>
        <p>&nbsp;</p>
        <p>


        Any claims for faulty goods must be placed within 7 days after receiving your order.
        </p>
        <p>&nbsp;</p>
        <p class="black_bold">
        Payment  Methods
        </p>
        <p>
        We accept Visa, Mastercard, EFT and company cheques.
        </p>
        <p>&nbsp;</p>
        <p class="black_bold">
        Specifications
        </p>
        <p>
        It is the customers responsibility to make sure that all electronic files supplied comply with YellowStar Press's file specifications requirements and that the files supplied are correct and able to be printed as soon as they are supplied. It is the customers responsibility to ensure that any graphic material supplied for printing do not breach relevant copyright legislation. YellowStar Press Pty Ltd accepts no responsibility for any copyright issues. Artwork supplied incomplete will require a re-quotation and the print price shown for the product will not apply.  Although we try our best to achieve best possible colour matching, due to the print process colour variations will occur from reprint to reprint. Marginal variation will occur from one run print run to the other. Please do not order from YellowStar Press if you require an exact colour match for a reprint job. Electronic files are not kept for future use for the customer and they have to be supplied with each and every order. If yor are not sure about your colour output, you can order a hard copy high resolution for a close indication of how colours will look like.

        </p>
        <p>&nbsp;</p>
        <p>

        Acceptance of orders is subject to credit approval.
        </p>
        <p>&nbsp;</p>
        <p>


        All prices are subject to change without notice.
        </p>
        <p>&nbsp;</p>
        <p class="black_bold">
        Deliveries:
        </p>
        <p>
        Our transport people deliver to - Street/Residential address only,
        </p>
        <p>&nbsp;</p>
        <p>
        If you have a Street/Residential address and its unattended we can leave your goods at the door, if your request this type of delivery , please note we are not responsible for any lost or stolen property.
        </p>
        <p>&nbsp;</p>
        <p>
        Also we cannot deliver to Apartment blocks that have Security Entrances, if they are unattended. (If this happens and the goods are returned to us , you will be asked to arrange your own courier or pay an additional delivery fee).
        </p>
        <p>&nbsp;</p>
        <p class="black_bold">
        Please let us know beforehand, if you require "Authority to Leave with no signature".
        </p>
        <p>&nbsp;</p>
        <p class="black_bold">
        Please note in such a case, 1 Print will not be held responsible for lost or damaged goods in any condition.
        </p>
        <p>&nbsp;</p>

        <p>


        Terms and conditions are subject to change without notice.
        </p>

            </div>
            <div class="clear"></div>
        </div>

    </div>

    <!-- Sample Pack -->
    <div class="sample_div" id="sample_div_id" style="display:none">
        <div class="text_holder">
        <div class="main_container">
        <div class="container_left">
        <h1>Sample Pack</h1>
        <h3 class="sample_pack_title">Unsure about the quality of our printing services?</h3>
        <p>We understand that choosing an online printer is difficult without seeing the quality for yourself. To ensure you are making the right choice by investing in a quality printing service, order a FREE sample pack from YellowStar Press.</p>
        <p>&nbsp;</p>
        <p>To receive a FREE sample pack with your choice of printed products, simply complete the form with your details. Our standard turnaround is 2-3 Days.  This may vary based on the type of products requested.
        </p>
        <p>&nbsp;</p>
        <p>*Please Note: Only 1 free sample pack per customer.</p>
        </div>

        <div class="samplepack_container_right">
            <div class="sample_pack_left">
            <h2>Yes! Please send me a sample pack!</h2>
            <p>Fill out the form with your details. Sample packs are usually delivered within 2-3 working days.</p>
            </div>
            <div class="sample_pack_right">

            <form method="post" name="customquotes" id="customquotes" onsubmit="">
                    <div class="create-account-table3"><table width="378" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                        <td colspan="2" valign="top">
                            <table width="100%" cellpadding="3" cellspacing="0">
                            <tbody><tr>
                            <td class="sample_td1" height="25">Business Name</td>
                            <td><input name="company" type="text" id="pack_businessName" maxlength="80" value=""></td>
                            </tr>
                            <tr>
                            <td>Your Name</td>
                            <td><input name="name" type="text" id="pack_name" maxlength="80" value=""></td>
                            </tr>
                            <tr>
                            <td>Email</td>
                            <td><input name="email" type="text" id="pack_email" maxlength="80" value=""></td>
                            </tr>
                            <tr>
                            <td>Address</td>
                            <td><input name="address" type="text" id="pack_address" maxlength="80" value=""></td>
                            </tr>
                            <tr>
                            <td>Suburb</td>
                            <td><input name="suburb" type="text" id="pack_suburb" maxlength="80" value=""></td>
                            </tr>
                            <tr>
                            <td>State</td>
                            <td><select name="state" id="pack_state">

                            <option value="VIC" selected="selected">VIC</option>

                            <option value="WA">WA</option>

                            <option value="NSW">NSW</option>

                            <option value="ACT">ACT</option>

                            <option value="SA">SA</option>

                            <option value="QLD">QLD</option>

                            <option value="TAS">TAS</option>

                            <option value="NT">NT</option>

                            </select></td>
                            </tr>
                            <tr>
                            <td>Postcode</td>
                            <td><input name="postcode" type="text" id="pack_postcode" maxlength="4" value=""></td>
                            </tr>
                            <tr>
                            <td>Telephone</td>
                            <td><input name="phone" type="text" id="pack_phone" maxlength="25" value=""></td>
                            </tr>
                            <tr>
                            <td valign="top">Comment</td>
                            <td><textarea name="comments" rows="6" id="pack_comment"></textarea></td>
                            </tr>



                    <tr>
                        <td></td>
                        <td valign="top"><input type="checkbox" name="sigin_in_newsletter" id="pack_subscribe" value="yes" checked=""> Subscribe to our newsletter for special offers </td>
                        </tr>
                    </tbody></table>
                        </td></tr><tr>
                        <td colspan="5" style="padding-right:15px">
                        <table width="150" border="0" cellspacing="0" cellpadding="0" align="right">
                            <tbody><tr>
                                <td><div style="display:none"><input type="checkbox" name="validate_form" id="validate_form" value="yes"></div></td>
                            </tr>
                            <tr>

                            <td align="right"><input type="button" class="sample_submit blue_button " onclick="packSendEmail()" value="Submit" id="postemail"></td>
                            </tr>
                        </tbody></table></td>
                    </tr>
                </tbody></table></div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        </div>
        </div>
    </div>

    <!-- orderprocess -->
    <div class="orderprocess_div" id="orderprocess_div_id" style="display:none">
        <div class="text_holder">
        <div class="main_container">
            <div class="container_left">
            <h1>Ordering Options</h1>
            <p>YellowStar Press makes every effort to be flexible and make it as easy as possible to do business with us. Choose your preferred ordering method from the options below. If you require any further assistance please email <a class="black_link" href="mailto:sales@yellowstarpress.com.au">sales@yellowstarpress.com.au</a> or call us <span class="black">(03) 9878 6999</span>.</p>
            <h2 class="order_title_cart">Shopping Cart</h2>
            <p>You can use our safe and secure online ordering facility if you wish to pay by MasterCard, Visa or Paypal. This is the fastest way to get your order processed.
            </p>

            <p class="black_heading padding_top">Payment Methods Accepted</p>
            <div class="pay_method_list">
            <img src="{{URL::asset('/image/mastercard-curved-64px.png') }}" alt="" width="61" height="38">
            <img src="{{URL::asset('/image/visa-curved-64px.png') }}" alt="" width="61" height="38">
            <img src="{{URL::asset('/image/paypal-curved-64px.png') }}" alt="" width="61" height="38">

            </div>
            <div class="new_customer">
                <h5>New Customers</h5>
                <p>You will need to create an account before proceeding with your order. You will be automatically logged in after you register.
                </p>
                <a onclick="clickHeader(9)" class="blue_button">Click here to Register</a>
            </div>
            <div class="existing_customer">
                <h5>Existing Customers</h5>
                <p>If you have already created an account, login to your account before proceeding with your order.
                </p>
                <a onclick="clickHeader(8)" class="blue_button">Login</a>
            </div>
            <div class="clear"></div>

            <div class="order_number">
                <div class="order_number_holder">
                1
                </div>
                <div class="order_number_text">
                <p>Select the product and quantity of your choice and click 'add to cart'.<br style="">
                    If you have finished shopping proceed to checkout...</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="order_number">
                <div class="order_number_holder">
                2
                </div>
                <div class="order_number_text">
                <p>Confirm your order and update your delivery and billing address if necessary. If you have any specific instructions, you can  include this in the comment box provided.</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="order_number">
                <div class="order_number_holder">
                3
                </div>
                <div class="order_number_text">
                <p>Upload your artwork files and enter any relevant information to those files.</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="order_number">
                <div class="order_number_holder">
                4
                </div>
                <div class="order_number_text">
                <p>Make your payment through the secure ANZ Gateway.</p>
                </div>
                <div class="clear"></div>
            </div>
            <p>Once you have completed these 4 easy steps, you will receive an email confirming your delivery address, product details, payment confirmation and receipt number.</p>



            </div>
            <div class="container_right">.
            <h2 class="order_title_email">Email Orders</h2>
            <p>If you'd prefer to email your order, or simply choose not to use your credit card when ordering, send an email to <a class="black_link" href="mailto:sales@yellowstarpress.com.au">sales@yellowstarpress.com.au</a>, detailing what you require along with the attached print ready file.</p>
            <p>&nbsp;</p>
            <p>Upon receiving your email, our office will generate an invoice and contact you to process your payment. Payment methods for email orders are shown below.</p>
            <p class="black_heading padding_top">Payment Methods Accepted</p>
            <div class="pay_method_list">

            <img src="{{URL::asset('/image/eft.png') }}" alt="" width="61" height="38">
            <img src="{{URL::asset('/image/cheque.png') }}" alt="" width="61" height="38">
            <img src="{{URL::asset('/image/mastercard-curved-64px.png') }}" alt="" width="61" height="38">
            <img src="{{URL::asset('/image/visa-curved-64px.png') }}" alt="" width="61" height="38">
            <img src="{{URL::asset('/image/paypal-curved-64px.png') }}" alt="" width="61" height="38">

            </div>
            <p class="black_heading padding_top">File Transfers</p>
            <p>When using email orders, the file attachment cannot exceed 8mb. If the attachment is larger than 8mb we require you to use one of our other accepted file transfer methods (see below)</p>


            <p class="black_heading" style="margin-top:2rem">Our accepted file transfer methods</p>
            <img src="{{URL::asset('/image/artwork methods-01.jpg') }}" alt="" width="55" height="55">
            <img src="{{URL::asset('/image/artwork methods-02.jpg') }}" alt="" width="55" height="55">
            <img src="{{URL::asset('/image/artwork methods-03.jpg') }}" alt="" width="55" height="55">
            <img src="{{URL::asset('/image/artwork methods-04.jpg') }}" alt="" width="55" height="55">

            <p>Please contact us for more information.</p>
            <p>&nbsp;</p>
            <p>We are Here to Help! If you have any questions, you can always contact us first and we can guide you through the registering and online ordering process.
            Please email <a class="black_link" href="mailto:sales@yellowstarpress.com.au">sales@yellowstarpress.com.au</a> or call us <span class="black">(03) 9878 6999</span>.
            </p>
            </div>
        <div class="clear"></div>
        </div>
        </div>
    </div>

    <!-- Delivery -->
    <div class="delivery_div" id="delivery_div_id" style="display:none">
        <div class="text_holder">
        <div class="main_container">
            <div class="container_left">
                <h1 class="no_padding">YellowStar Press Delivers FREE<br style="">Within Australia</h1>
                <p>At YellowStar Press, we believe in making things as simple as possible for our clients.<br style="">
                    That's why we include Australia-wide delivery in the price of our services to you.</p>

                <h2 class="delivery_title">Estimated Dispatch Times</h2>
                <div class="delivery_title">Booklets</div>
                <p>Printing will be dispatched in 7-10 working Days after we have received your order or artwork approval. Dispatch time depends on quantities and the type of printing.
                </p>
                <div class="delivery_title">Brochures*</div>
                <p>Printing will be dispatched in 5-7 working Days after we have received your order or artwork approval. Dispatch time depends on quantities and the type of printing.
                </p>
                <div class="delivery_title">Business Cards*</div>
                <p>Printing will be dispatched in 5-7 working Days after we have received your order or artwork approval.
                </p>
                <div class="delivery_title">Deskpads / Notepads</div>
                <p>Printing will be dispatched in 5-10 working Days after we have received your order or artwork approval. Dispatch time depends on quantities and the type of printing.
                </p>
                <div class="delivery_title">Docket books</div>
                <p>Printing will be dispatched in 7-10 working Days after we have received your order or artwork approval. Dispatch time depends on quantities and the type of printing.
                </p>
                <div class="delivery_title">Envelopes</div>
                <p>Printing will be dispatched in 5-7 working Days after we have received your order or artwork approval. Dispatch time depends on quantities and the type of printing.
                </p>
                <div class="delivery_title">Express Printing (Guaranteed 48 Hours Despatch Ex Factory)*</div>
                <p>*Orders must be placed daily by 2pm, excluding Saturday &amp; Sunday. Despatch will occur 48 Hours upon receipt of your order. Despatch ex. factory does not guarantee a delivery time and our nominated courier company cannot hold us responsible for delays, damage or loss of goods.
                </p>
                <p>Pickup is available from our production facility daily between 8.00am to 5.00pm.
                </p>
                <div class="delivery_title">Flyers*</div>
                <p>Printing will be dispatched in 3-7 working Days after we have received your order or artwork approval. Dispatch time depends on quantities and the type of printing.
                </p>
                <div class="delivery_title">Fridge Magnets</div>
                <p>Printing will be dispatched in 5-7 working Days after we have received your order or artwork approval. Dispatch time depends on quantities and the type of printing.
                </p>
                <div class="delivery_title">Letterheads</div>
                <p>Printing will be dispatched in 7-10 working Days after we have received your order or artwork approval. Dispatch time depends on quantities and the type of printing.
                </p>
                <div class="delivery_title">Postcards*</div>
                <p>Printing will be dispatched in 3-7 working Days after we have received your order or artwork approval. Dispatch time depends on quantities and the type of printing.
                </p>
                <div class="delivery_title">Posters</div>
                <p>Printing will be dispatched in 3-7 working Days after we have received your order or artwork approval. Dispatch time depends on quantities and the type of printing.
                </p>
                <div class="delivery_title">Presentations Folders</div>
                <p>Printing will be dispatched in 5-7 working Days after we have received your order or artwork approval. Dispatch time depends on quantities and the type of printing.
                </p>
                <div class="delivery_title">With Compliments</div>
                <p>Printing will be dispatched in 3-5 working Days after we have received your order or artwork approval. Dispatch time depends on quantities and the type of printing.
                </p>
                <p>&nbsp;</p>
                <p>*Please note this does not apply to urgent printing.</p>



            </div>
            <div class="container_right">
                <h2 class="large no_padding">Delivery Conditions</h2>
                <p>There are a few conditions that are placed on the delivery services, which you should be aware of before placing an order.
                </p>
                <h4 class="delivery_conditions">Delivery conditions are listed below:</h4>
                <ul class="black_bullets delivery_list">
                    <li>Our despatch time will be between 2-10 working days, which starts the first day after we receive your artwork approval.
                    </li>
                    <li>All representations by YellowStar Press, as to the date and /or time for delivery are made in good faith, but are not guaranteed.
                    </li>
                    <li>YellowStar Press and its directors, account managers, employees and associated companies shall not be liable for late deliveries or lost goods.
                    </li>
                    <li>Lost goods will be fully refundable or replaced.
                    </li>
                    <li>Do not place an order if exact delivery times are crucial to you, without obtaining verification from our office. Delays may be caused by manufacturing or delivery.
                    </li>
                    <li>Deliveries will ONLY be made to your nominated delivery address between 9:00 am and 5:30 pm, Monday to Friday.
                    </li>
                    <li>An authorised person must sign for the delivery.
                    </li>
                    <li>If a delivery is to be made to an address other than your business address, we require the full name of the person who will be accepting the delivery and a complete address for the delivery.
                    </li>
                    <li>If the incorrect address is given to YellowStar Press, a $25.00 administration fee applies to redirect the goods to the correct shipping address.
                    </li>
                    <li>If there is no-one available to sign for the goods and they are subsequently lost or damaged, we will not be liable for the loss.
                    </li>
                    <li>Deliveries will not be made to a PO Box.
                    </li>
                    <li>Once goods are delivered, YellowStar Press Pty Ltd is not liable for any loss or damage.
                    </li>
                    <li>Advance notification of delivery day, date or time by phone or email is not possible.
                    </li>
                    <li>Upon receipt, the customer will inspect the goods and notify YellowStar Press of any errors within three days after delivery, quoting all relevant details.
                    </li>
                    <li>If you have a Street/Residential address and it's unattended we can leave your goods at the door,  if your request this type of delivery, please note we are not responsible for any lost or stolen property.
                    </li>
                    <li>We cannot deliver to Apartment blocks that have Security Entrances, if they are unattended. (If this happens and the goods are returned to us, you will be asked to arrange your own courier or pay an additional delivery fee).
                    </li>
                    <li>
                        If address is unattended our courier companies have authority to leave at your door.
                        If couriers can't get access in units / apartments or shopfronts on major roads parcels will be taken back to depo,
                        a card will be left at your premises notifying of depo location.
                        Orders can picked up from depo within 5 working days or they can be redelivered. A redelivery fee will apply.
                    </li>
                </ul>

            </div>
            <div class="clear"></div>
        </div>
        </div>

    </div>

    <!-- fileguide -->
    <div class="file_guidelines_div" id="file_guidelines_div_id" style="display:none">
        <div class="text_holder">
        <div class="main_container">
                <div class="container_left">
                <h1>Artwork Specifications</h1>
            <p>&nbsp;</p>
            <p class="black_heading">Image Text and Trims</p>
            <p>All non bleed images and text should be kept at least 3mm from the trim to ensure trim tolerances are maintained.
            </p>
            <p>&nbsp;</p>
            <p class="black_heading">Blacks</p>
            <p>Solid black areas should be made up of 40% Cyan, 20% Magenta, 20% Yellow and 100% Black to give a strong deep colour.
            </p>
            <p>&nbsp;</p>
            <p class="black_heading">Booklet Creep</p>
            <p>Page creep will occur on booklet jobs. To help with finishing all page numbers, non bleed images and text should be kept at least 10mm from the trims. We advise you to allocate a 5mm bleed on all booklet jobs.
            </p>
            <p>&nbsp;</p>
            <p class="black_heading">Folding</p>
            <p>Fold panels for A4-DL should be set from left to right 98-99-100 (outside) and 100-99-98 (inside). Supplied PSD artwork always remains the responsibility of the customer. YellowStar Press will not accept responsibility for errors due to out of specification files.
            </p>
            <div class="folding_list">
                <img src="{{URL::asset('/image/brochure folds-01.png') }} ">
                <strong>Single Fold</strong><br style="">
                <span>4 Page Brochure</span>
            </div>
            <div class="folding_list">
                <img src="{{URL::asset('/image/brochure folds-04.png') }} ">
                <strong>Roll Fold</strong><br style="">
                <span>6 Page Brochure</span>
            </div>
            <div class="folding_list">
                <img src="{{URL::asset('/image/brochure folds-05.png') }} ">
                <strong>Z Fold</strong><br style="">
                <span>6 Page Brochure</span>
            </div>
            <div class="folding_list">
                <img src="{{URL::asset('/image/brochure folds-02.png') }} ">
                <strong>Roll Fold</strong><br style="">
                <span>8 Page Brochure</span>
            </div>
            <div class="folding_list">
                <img src="{{URL::asset('/image/brochure folds-03.png') }} ">
                <strong>Concertina</strong><br style="">
                <span>8 Page Brochure</span>
            </div>
            <div class="clear"></div>

            <p class="black_heading">Standard Product Sizes</p>
            <ul class="black_bullets">
            <li><span class="black">Business Cards</span> - 90 x 55mm, 89 x 54mm, 90 x 50mm or 90 x 45mm</li>
            <li><span class="black">DL</span> - 210 x 99mm</li>
            <li><span class="black">2DL</span> - 210 x 198mm</li>
            <li><span class="black">A6</span> - 148 x 105mm</li>
            <li><span class="black">A5</span> - 210 x 148mm</li>
            <li><span class="black">A4</span> - 210 x 297mm</li>
            <li><span class="black">A3</span> - 420 x 297mm</li>
            <li><span class="black">A2</span> - 594 x 420mm</li>
            <li><span class="black">A1</span> - 840 x 594mm</li>
            </ul>
            <p>&nbsp;</p><p>&nbsp;</p>
            <h2 class="large">Filetype Specifications</h2>
            <p class="black">YellowStar Press will only accept the following formats as final artwork. Artwork which does not adhere to these specifications will incur artwork charges.
            </p>
            <p>&nbsp;</p>
            <ul class="black_bullets">
            <li><span class="black">Adobe Acrobat</span> (PDF) version XI or below (PDF)</li>
            <li><span class="black">Adobe Photoshop</span> version CC or below (PSD or TIFF)</li>
            <li><span class="black">Adobe Illustrator</span> version CC or below (AI, EPS, PDF)</li>
            <li><span class="black">Adobe InDesign</span> version CC or below (INDD)</li>
            </ul>
            <p>&nbsp;</p>
            <ul class="black_bullets">
            <li>YellowStar Press accepts files in PC or MAC format.</li>
            <li>All images must be saved in CMYK at 300dpi.</li>
            <li>Make sure all colours are nominated correctly as PMS or CMYK.</li>
            <li>OVERPRINTS MUST BE TURNED OFF</li>
            <li style="font-weight: bold;">All artwork must include a minimum of 2mm bleed and crop marks.</li>
            <li>Where possible, please convert your text to outlines or curves.</li>
            <li>Please supply us with all relevant files, including fonts and links (graphics)</li>
            </ul>
            </div>

            <div class="container_right">
            <h2 class="large">Pre Press Guidelines</h2>
            <p>&nbsp;</p>
            <p class="black_heading">Templates</p>
            <p>Acrobat Distiller settings and InDesign templates for standard products are available from our Prepress department.
            </p><p>&nbsp;</p>
            <p class="black_heading">PDF Compliance</p>
            <p>Please use PDF Version 1.4.<br style="">
            Ensure all files are flattened (flattening options turned on).<br style="">
            Supply multiple page PDF with 1 up artwork on each page.<br style="">
            Use CMYK not RGB. OVERPRINTS MUST BE TURNED OFF.<br style="">
            Supply with crop marks and 2mm minimum bleed.<br style="">
            Ensure artwork is centered in document.<br style="">
            Text and non-bleed images should be kept 3mm from trims.</p>
            <p>&nbsp;</p>
            <p class="black_heading">Font Usage</p>
            <p>All fonts must be embedded, or you can outline fonts before creating a PDF to avoid issues.</p>
            <p>&nbsp;</p>
            <p class="black_heading">Graphic/Images elements checklist</p>
            <p>Bitmaps images supplied at 400dpi.<br style="">
            CMYK images supplied (no RGB, LAB, PMS colours).<br style="">
            Combined colour ink density should not exceed 300%.<br style="">
            No ICC colour profiles will be used.</p>
            <p>&nbsp;</p>
            <p class="black_heading">Flight Check</p>
            <p>We strongly recommend that a flight checking application is used to check the integrity of the PDF prior to sending to YellowStar Press.
            </p><p>&nbsp;</p>
            <p class="black_heading">Storage of Files</p>
            <p>PDF's will remain on our system for 1 week following printing. YellowStar Press does not undertake archiving and retrieval of customer data.
            </p>
            </div>
                <div class="clear"></div>
        </div>
        </div>
    </div>

    <!-- pre-flight -->
    <div class="pre_flight_div" id="pre_flight_div_id" style="display:none">
        <div class="text_holder">
            <div class="main_container">
            <div class="container_left">
            <h1 >pre-flight checks</h1>
            <p>What exactly is a Pre-Flight check? Pre-Flight is checking your supplied files to make sure they are ready to print.
        </p>
            <p>&nbsp;</p>
            <p>
        Without carefully going over your files and running thorough checks, there may be a chance that something could go wrong and mistakes will be missed. You can be assured that we're looking to catch problems and help you fix them before any printing begins.
        </p>

        <h4 class="pre_flight_title">When we receive your files we check to ensure:</h4>

        <p><span class="black_bold">The trim size specifications match the print order.</span> For example, if you're ordering a DL flyer we will make sure your supplied file matches the correct dimensions.
        </p>
        <p>&nbsp;</p>
        <p>
        <span class="black_bold">
        The files are properly set up with the correct amount of  bleed.</span> If the pages are not set up correctly, images or text could get cut off when trimming the job to size.
        </p>
        <p>&nbsp;</p>
        <p>
        <span class="black_bold">
        All fonts, graphics, and other inserted elements are properly embedded into the PDF.</span> If we receive a file that contains fonts that we don't have, the job may not print correctly
        </p><p>&nbsp;</p>
        <p>
        <span class="black_bold">
        Color elements are saved in CMYK color mode.</span> Most graphical programs have the RGB setting as the default. Printing is a four-color (full-color) process. Make sure you're using CMYK.
        </p>
        <p>&nbsp;</p>
        <h4 class="pre_flight_title no_padding">If we do notice errors on your files...</h4>
        <p>We will notify you and ask that your files be submitted again with the necessary corrections made. If required, YellowStar Press can convert your files to a print ready format for a small fee. Some of our products do include converting your files to a press ready format. Please contact us for further information.
        </p><p>&nbsp;</p>
{{--        <p class="black_bold">Terms &amp; Conditions</p>--}}
{{--        <p>YellowStar Press go to great measures to ensure your files are print ready - however, --}}
{{--            it is ultimately the responsibility of the person supplying the files to ensure they are in accordance with --}}
{{--            <a href="/fileGuidelines" class="blue_link">--}}
{{--                YellowStar Press file guidelines</a>. --}}
{{--            YellowStar Press does not accept responsibility if a job is printed faulty due to supplied files setup incorrectly. Pre-flight does not include checking / correcting spelling errors.--}}
{{--        </p>--}}








            </div>
        <div class="container_right">
        <h2 class="large no_padding">the proofing process</h2>
        <p>Prior to printing, YellowStar Press will send you a PDF proof*. We ask that you check this proof thoroughly before we proceed to printing.
        </p><p>&nbsp;</p>
        <p>If you have a colour critical job we suggest you order a hard copy proof. <a href="/colour-critical" class="blue_link">Click here for more information</a>.
        </p><p>&nbsp;</p>
        <p class="pre_flight_small">* PDF proofs are sent for all YellowStar Press jobs excluding business cards - business card proofs can be organised when specifically requested.
        </p>
        <h3 class="pre_flight_title">free setup</h3>
        <p>YellowStar Press offer free setup on some of our products. Free setup includes setting up basic print ready artwork based on your existing branding (supplied logo, text, photos etc.)<br style="">
        Free setup does not include creating new logo's or creating complex imagery. If you are unsure of what you require falls under our free setup terms, please call or email us at <a href="mailto:sales@yellowstarpress.com.au" class="blue_link">sales@yellowstarpress.com.au</a>
        </p>

{{--        <h3 class="pre_flight_title">converting files to a press ready format</h3>--}}
{{--        <p>We understand that not everyone can supply 100% press ready artwork, <a href="/fileGuidelines" class="blue_link">see YellowStar Press file guidelines</a>. If required, YellowStar Press can convert your supplied files for a small fee. On selected products we offer this service free of charge.--}}
{{--        </p>--}}
        <p>&nbsp;</p>
        <p>
        For more information <span class="black_bold">Call</span> (03) 9878 6999 or <span class="black_bold">email</span> sales@yellowstarpress.com.au
        </p>


            </div>
            <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- color -->
    <div class="color_div" id="color_div_id" style="display:none">
                <div class="text_holder">
                <div class="main_container">
                <div class="container_left">
                <h1>Colour Critical</h1>
                <p>Our experienced print operators take extra measures to ensure colour integrity is maintained on every job. If you have a colour critical job and want a clear approximation of what your finished job will look like, we suggest ordering a hard copy proof.
            </p><p>&nbsp;</p><p>
            Looking at hard proofs also has the added benefit of helping you anticipate what the screen can't display. This means you'll have fewer surprises as a result of your experience.
            </p><p>&nbsp;</p><p>
            <span class="black">Please Note:</span> Our proofs represent the colour of your supplied file on either a coated or uncoated paper, providing a close approximation of how your finished job will print. They do not however allow for every variation in stock ink-absorbtion or stock whiteness.
            </p><p>&nbsp;</p>
{{--                    <p>--}}
{{--            If you want to ensure your job will print accurately, please refer to our <a href="/fileGuidelines" class="black_link">file guidelines</a> for tips and print specifications.--}}
{{--            </p>--}}

                    </div>
                <div class="container_right">
                <h2 class="large">How to order a proof</h2>
                <p>
                To order your hard copy proof, add your chosen product to your shopping cart. Once you are in your shopping cart, you can then select a High resolution hard copy proof. Alternatively, you can order your hard copy proof by emailing us at <a href="mailto:sales@yellowstarpress.com.au" class="black_link">sales@yellowstarpress.com.au</a>.
            </p><p>&nbsp;</p><p>
            We will send your proof to you in the mail and wait for your confirmation before we proceed with the final product.
            </p><p>&nbsp;</p><p>
            For more information <b class="black">Call</b> (03) 9878 6999 or <b class="black">email</b> sales@yellowstarpress.com.au
            </p>
                </div>
                <div class="clear"></div>
                </div>
                </div>
    </div>
    <!-- a4-dl -->
    <div class="a4dl_div" id="a4dl_id" style="display:none">
        <div class="text_holder">
            <div class="main_product_container brochure_holder">
                <div id="breadcrumbs">
                    You are here:
                    <span itemprop="breadcrumb" itemscope="itemscope" itemtype="http://schema.org/Breadcrumb">
                        <a href="/home" itemprop="url"><span itemprop="title">YellowStar Press Online Printing</span></a>
                        »
                        <span itemprop="child" itemscope="itemscope" itemtype="http://schema.org/Breadcrumb">
                            <a href="/product/brochures" itemprop="url">
                                <span itemprop="title">
                                    Brochure Printing </span>
                            </a>
                            »
                            <a href="/product/brochures/a4-dl" itemprop="url">
                                <span itemprop="title">
                                    a4-a5 </span>
                            </a>
                        </span>
                    </span>
                </div>

                <div class="main_left">
                    <div class="main_left_left">
                        <div class="cms_pro_content"><h1>4, 6 or 8 Page DL Brochure</h1>
                        <p>&nbsp;</p>
                        <p>
                        <img src="{{URL::asset('/image/product/brochure_folding_options_A4_to_DL.jpg')}}" border="0" alt="4 or 6 Page DL Brochure"></p>
                        <p>DL
                        printing is a quick and economical option to get your marketing out there.
                        Perfectly suited to use as pamphlets or leaflets, DL measures in at 210 x 99mm.
                        </p>
                        <p>&nbsp;</p>
                        <p>Often
                        used for letterbox drops and general unaddressed mail, the DL's slim profile,
                        and low cost make it perfect for local area marketing.</p>
                        <p>&nbsp;</p>
                        <p><a href="/product/brochures">A
                        well designed brochure</a> should entice readers to look inside, it should describe
                        your products and services clearly with supporting images and it should include
                        information which encourages readers to keep it. Be sure to include your
                        contact details and a strong call-to-action that gives readers a strong
                        motivation to contact your company and "buy now". </p>
                        <p>&nbsp;</p>
                        <p>For
                        a greater impact, consider a custom design or shape that stands out from the
                        crowd or a stronger colour pallette. </p>
                        <p>&nbsp;</p>
                        <p>Available
                        in 150gsm, 170gsm and 200gsm gloss or stain in Full Colour on one or two sides.</p>
                        <p>&nbsp;</p>
                        <p>Dispatched in 3-10 days from artwork &amp; order received.</p>
                        <p>&nbsp;</p>
                        <p><b><span style="color:#323232">Please note</span></b>: Custom sizes are available, please contact us for more information.</p>
                        <p>&nbsp;</p>
                        <div class="cms_template_holder">
                        <p style="font-size:17px;font-weight:bold;color:#323232">Templates</p>
                        <p><span style="float:left"><img src="{{URL::asset('/image/brochure folds-01.png') }}" border="0" width="28" height="28"></span><span style="float:left;margin-top:4px"><a href="templates/1print_brochure_4pgdl_198x210mm.pdf">Page A5 Template (Roll Fold)</a></span></p>
                        <p style="clear: both;"><span style="float:left"><img src="{{URL::asset('/image/brochure folds-04.png') }}" border="0" width="28" height="28"></span><span style="float:left;margin-top:4px"><a href="templates/1print_brochure_6pgdl_210x297mm.pdf">6 Page A5 Template (Roll Fold)</a></span></p>
                        <p style="clear: both;"><span style="float:left"><img src="{{URL::asset('/image/brochure folds-05.png') }}" border="0" width="28" height="28"></span><span style="float:left;margin-top:4px"><a href="templates/1print_brochure_6pgdl_210x297mm.pdf">6 Page A5 Template (Z-Fold)</a></span></p>
                        <p style="clear: both;"><span style="float:left"><img src="{{URL::asset('/image/brochure folds-02.png') }}" border="0" width="28" height="28"></span><span style="float:left;margin-top:4px"><a href="templates/1print_brochure_6pgdl_210x297mm.pdf">8 Page A5 Template (Roll Fold)</a></span></p>
                        <p style="clear: both;"><span style="float:left"><img src="{{URL::asset('/image/brochure folds-03.png') }}" border="0" width="28" height="28"></span><span style="float:left;margin-top:4px"><a href="templates/1print_brochure_6pgdl_210x297mm.pdf">8 Page A5 Template (Concertina Fold)</a></span></p>
                        </div>
                        <p>&nbsp;</p></div>

                        <div class="clear"></div>



                    </div>
                    <div class="main_left_right">

                        <h4>Brochure Folding</h4>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-01.png') }} ">
                            <strong>Single Fold</strong>
                            <span>4 Pages</span>
                        </div>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-04.png') }} ">
                            <strong>Roll Fold</strong>
                            <span>6 Pages</span>
                        </div>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-05.png') }} ">
                            <strong>Z Fold</strong>
                            <span>6 Pages</span>
                        </div>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-02.png') }} ">
                            <strong>Roll Fold</strong>
                            <span>8 Pages</span>
                        </div>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-03.png') }} ">
                            <strong>Concertina</strong>
                            <span>8 Pages</span>
                        </div>
                        <div class="clear"></div>



                    </div>

                    <div class="clear"></div>
                    <div style="clear: both;"></div>




                </div>

                <div class="clear"></div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>

    <!-- a3-a4 -->
    <div class="a3a4_div" id="a3a4_id" style="display:none">
        <div class="text_holder">
            <div class="main_product_container brochure_holder">
                <div id="breadcrumbs">
                    You are here:
                    <span itemprop="breadcrumb" itemscope="itemscope" itemtype="http://schema.org/Breadcrumb">
                        <a href="/home" itemprop="url"><span itemprop="title">YellowStar Press Online Printing</span></a>
                        »
                        <span itemprop="child" itemscope="itemscope" itemtype="http://schema.org/Breadcrumb">
                            <a href="/product/brochures" itemprop="url">
                                <span itemprop="title">
                                    Brochure Printing </span>
                            </a>
                            »
                            <a href="/product/brochures/a3-a4" itemprop="url">
                                <span itemprop="title">
                                    a3-a4 </span>
                            </a>
                        </span>
                    </span>
                </div>

                <div class="main_left">
                    <div class="main_left_left">

                        <div class="cms_pro_content"><h1>4 &amp; 6 Page A4 Brochure</h1>
                        <p>&nbsp;</p>
                        <p>
                        <img src="{{URL::asset('/image/product/brochure_folding_options_A3_to_A4.jpg')}}" border="0" alt="4 Page A4 Brochure"></p>
                        <p>The A4 Brochure is ideally suited to company price lists, product catalogue and retail presentations.</p>
                        <p>&nbsp;</p>
                        <p>ts larger size ensures added impact and greater capacity for high-quality images, articulating your unique service proposition. The larger format allows businesses to use this product for <a href="/product/brochures">sales presentation supplements</a> and other purposes where later reading helps to reinforce the product and services being offered therein.</p>
                        <p>&nbsp;</p>
                        <p>The
                        familiar size of A4 brochures make them a popular choice with businesses across
                        verticals. The larger prefold size allows designers the option to add larger
                        scale imagery for the front/back cover to reinforce branding. </p>
                        <p>&nbsp;</p>
                        <p>our designs come with a free flight check and PDF proof to ensure the presentation and quality of your designs prior to printing. This product can be ordered in full colour on single or both sides in 150, 170 or 200gsm on either satin or gloss paper.</p>
                        <p>&nbsp;</p>
                        <p>Depending on order quantity deliveries are dispatched in 3-10 working days. If you need your order fast-tracked request <a href="/expressPrinting">urgent
                        shipping</a>.</p>
                        <p>&nbsp;</p>
                        <p><b>Please note</b>: Custom sizes are available, please contact us for more information.</p>
                        <p>&nbsp;</p>
                        <div class="cms_template_holder">
                        <p style="font-size:17px;font-weight:bold;color:#323232">Templates</p>
                        <p>&nbsp;</p>
                        <p><span style="float:left"><img src="{{URL::asset('/image/brochure folds-01.png') }}" border="0" width="28" height="28"></span><span style="float:left;margin-top:4px"><a href="templates/1print_brochure_4pga4_420x297mm.pdf">Page A4 Template (Roll Fold)</a></span></p>
                        <p style="clear: both;"><span style="float:left"><img src="{{URL::asset('/image/brochure folds-04.png') }}" border="0" width="28" height="28"></span><span style="float:left;margin-top:4px"><a href="templates/1print_brochure_6pga4_627x297mm.pdf">6 Page A4 Template (Roll Fold)</a></span></p>
                        <p style="clear: both;"><span style="float:left"><img src="{{URL::asset('/image/brochure folds-05.png') }}" border="0" width="28" height="28"></span><span style="float:left;margin-top:4px"><a href="templates/1print_brochure_6pga4_627x297mm.pdf">6 Page A4 Template (Z-Fold)</a></span></p>
                        </div>
                        <p>&nbsp;</p></div>





                        <div class="clear"></div>



                    </div>
                    <div class="main_left_right">

                        <h4>Brochure Folding</h4>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-01.png') }} ">
                            <strong>Single Fold</strong>
                            <span>4 Pages</span>
                        </div>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-04.png') }} ">
                            <strong>Roll Fold</strong>
                            <span>6 Pages</span>
                        </div>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-05.png') }} ">
                            <strong>Z Fold</strong>
                            <span>6 Pages</span>
                        </div>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-02.png') }} ">
                            <strong>Roll Fold</strong>
                            <span>8 Pages</span>
                        </div>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-03.png') }} ">
                            <strong>Concertina</strong>
                            <span>8 Pages</span>
                        </div>
                        <div class="clear"></div>



                    </div>

                    <div class="clear"></div>
                    <div style="clear: both;"></div>




                </div>

                <div class="clear"></div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <!-- a4-a5 -->
    <div class="a4a5_div" id="a4a5_id" style="display:none">
        <div class="text_holder">
            <div class="main_product_container brochure_holder">
                <div id="breadcrumbs">
                    You are here:
                    <span itemprop="breadcrumb" itemscope="itemscope" itemtype="http://schema.org/Breadcrumb">
                        <a href="/home" itemprop="url"><span itemprop="title">YellowStar Press Online Printing</span></a>
                        »
                        <span itemprop="child" itemscope="itemscope" itemtype="http://schema.org/Breadcrumb">
                            <a href="/product/brochures" itemprop="url">
                                <span itemprop="title">
                                    Brochure Printing </span>
                            </a>
                            »
                            <a href="/product/brochures/a4-z5" itemprop="url">
                                <span itemprop="title">
                                    a4-a5 </span>
                            </a>
                        </span>
                    </span>
                </div>

                <div class="main_left">
                    <div class="main_left_left">


                        <div class="cms_pro_content"><h1>4, 6 or 8 Page A5 Brochure</h1>
                        <p>&nbsp;</p>
                        <p>
                        <img src="{{URL::asset('/image/product/brochure_folding_options_A4_to_A5.jpg')}}" border="0" alt="4 Page A5 Brochure"></p>
                        <p>The A5 brochure is perfectly suited for <a href="/product/brochures" target="_blank">full colour tradeshow pamphlets</a>, premium letterbox drops or to function as flyer handouts in your target region.</p>
                        <p>&nbsp;</p>
                        <p>Due
                        to the relatively comfortable carrying size, this product is well suited to
                        marketing forthcoming cultural festivals, Real Estate, tourist attractions or
                        anything where the reader is likely to be in motion whilst consuming its
                        content. </p>
                        <p>&nbsp;</p>
                        <p>Get
                        maximum impact for your investment by using a targeted strategy that focuses on
                        qualified leads, use unique designs with bold colour palettes and high quality
                        photography and always include an strong call-to-action for the reader.</p>
                        <p>&nbsp;</p>
                        <p>Available in 150gsm, 170gsm and 200gsm gloss or matt stocks. Printed Full Colour on one or two sides.</p>
                        <p>gloss
                        or satin paper.</p>
                        <p>&nbsp;</p>
                        <p>Delivery is 3-10 working days depending on the quantity purchases.</a>.
                        </p>
                        <p>&nbsp;</p>
                        <p><span style="color:black;"><b>Please note:</b></span> Custom sizes are available, please contact us for more information.
                        </p>
                        <p>&nbsp;</p>
                        <div class="cms_template_holder">
                        <p style="font-size:17px;font-weight:bold;color:#323232">Templates</p>
                        <p>&nbsp;</p>
                        <p><span style="float:left"><img src="{{URL::asset('/image/brochure folds-01.png') }}" border="0" width="28" height="28"></span><span style="float:left;margin-top:4px"><a href="templates/1print_brochure_4pga5_296x210mm.pdf">Page A5 Template (Roll Fold)</a></span></p>
                        <p style="clear: both;"><span style="float:left"><img src="{{URL::asset('/image/brochure folds-04.png') }}" border="0" width="28" height="28"></span><span style="float:left;margin-top:4px"><a href="templates/1print_brochure_6pga5_296x210mm.pdf">6 Page A5 Template (Roll Fold)</a></span></p>
                        <p style="clear: both;"><span style="float:left"><img src="{{URL::asset('/image/brochure folds-05.png') }}" border="0" width="28" height="28"></span><span style="float:left;margin-top:4px"><a href="templates/1print_brochure_6pga5_296x210mm.pdf">6 Page A5 Template (Z-Fold)</a></span></p>
                        <p style="clear: both;"><span style="float:left"><img src="{{URL::asset('/image/brochure folds-02.png') }}" border="0" width="28" height="28"></span><span style="float:left;margin-top:4px"><a href="templates/1print_brochure_6pga5_296x210mm.pdf">8 Page A5 Template (Roll Fold)</a></span></p>
                        <p style="clear: both;"><span style="float:left"><img src="{{URL::asset('/image/brochure folds-03.png') }}" border="0" width="28" height="28"></span><span style="float:left;margin-top:4px"><a href="templates/1print_brochure_6pga5_296x210mm.pdf">8 Page A5 Template (Concertina Fold)</a></span></p>
                        </div>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p></div>


                        <div class="clear"></div>



                    </div>
                    <div class="main_left_right">

                        <h4>Brochure Folding</h4>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-01.png') }} ">
                            <strong>Single Fold</strong>
                            <span>4 Pages</span>
                        </div>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-04.png') }} ">
                            <strong>Roll Fold</strong>
                            <span>6 Pages</span>
                        </div>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-05.png') }} ">
                            <strong>Z Fold</strong>
                            <span>6 Pages</span>
                        </div>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-02.png') }} ">
                            <strong>Roll Fold</strong>
                            <span>8 Pages</span>
                        </div>
                        <div class="folding_list">
                            <img src="{{URL::asset('/image/brochure folds-03.png') }} ">
                            <strong>Concertina</strong>
                            <span>8 Pages</span>
                        </div>
                        <div class="clear"></div>



                    </div>

                    <div class="clear"></div>
                    <div style="clear: both;"></div>




                </div>

                <div class="clear"></div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>

    <!-- flyerlearnmore -->
    <div class="flyerlearnmore_div" id="flyerlearnmore_div_id" style="display:none">
        <div class="text_holder">
            <div class="main_product_container brochure_holder">
                <div id="breadcrumbs">
                    You are here:
                    <span itemprop="breadcrumb" itemscope="itemscope" itemtype="http://schema.org/Breadcrumb">
                        <a href="/home" itemprop="url"><span itemprop="title">YellowStar Press Online Printing</span></a>
                        »
                        <span itemprop="child" itemscope="itemscope" itemtype="http://schema.org/Breadcrumb">
                            <a href="/product/flyers" itemprop="url">
                                <span itemprop="title">
                                    Flyer Printing </span>
                            </a>
                            »
                            <a href="/product/flyers/learnmore" itemprop="url">
                                <span itemprop="title">
                                    learnmore </span>
                            </a>
                        </span>
                    </span>
                </div>

                <div class="main_left">
                    <div class="main_left_left">

                        <div class="cms_pro_content"><h1>DL Flyers &amp; Leaflets</h1>
                            <p>Flyers are one of
                            the most popular marketing tools out there due to their cost-effectiveness,
                            versatility and easy design. Whether you wish to promote a one-off event,
                            special offer, competition or new product/service <a href="/product/flyers">promotional flyers</a> can be a
                            highly effective way of spreading your marketing message. </p>
                            <p>&nbsp;</p>
                            <p>Our DL flyers are
                            a handy size for a marketing message which recipients can easily fold up and
                            pop into their pocket. Captivate your audience with full colour imagery that
                            perfectly compliments your campaign theme and brand identity.</p>
                            <p>&nbsp;</p>
                            <p>Our high quality flyers are printed on high GSM printing
                            stock (choose from 150gsm , 170gsm or 200gsm gloss) that will enhance your design and
                            reinforce the professionalism of your brand. Reach your target market with the right marketing message
                            on cost-effective full colour flyers or more economical single colour flyer
                            printing. Flyers can be printed on both sides or one side only.</p>
                            <p>&nbsp;</p>
                            <p>Let
                            us create a customised flyer design for you which is both exciting and visually
                            striking, or send us your own 210mm x 99m designs. A minimum of 2mm bleed (the
                            amount that will be trimmed off during the printing process) is applied. We
                            carry out free flight checks and provide&nbsp;
                            PDF proofs prior to going ahead with any printing job. Upon approval we
                            commence printing and dispatch your order within 3-10 days working days
                            (delivery times depend on the size and type of order).&nbsp; Note: custom sizing available, please
                            contact us to learn more.</p>
                            <p>&nbsp;</p>
                            <div class="cms_template_holder">
                            <p>Template</p>
                            <p><a href="templates/1print_flyer_dl_210x99mm.pdf" target="_blank">DL Template</a>
                            </p>
                            </div>
                            <p>&nbsp;</p>
                        </div>

                        <div class="cms_pro_content"><h1>A6 Flyers &amp; Leaflets</h1>
                            <p>Do you need to
                            promote a product, spruik a special offer or expose an event? A6 promotional
                            flyers can act as a highly effective marketing tool which can enable you to
                            grab your target audience's attention quickly and economically. </p>
                            <p>&nbsp;</p>
                            <p>1Print's A6 flyers
                            are the perfect size and weight for an advertising message which you want
                            potential customers to pop into their pocket or handbag and take away with
                            them. </p>
                            <p>&nbsp;</p>
                            <p>Our <a href="/product/flyers">high quality flyers</a> are printed on GSM printing stock
                            including 150gsm , 170gsm and 200gsm gloss. Let your brand's voice be heard with a
                            powerful message and professional design on impressive full colour flyers or
                            more cost-effective single colour flyer printing.</p>
                            <p>&nbsp;</p>
                            <p>We
                            can create an attractive flyer design tailored to suit your marketing campaign,
                            or alternatively, you can provide us with your own 105mm x148mm designs. Please
                            remember a minimum of 2mm bleed (the amount that will be trimmed off when the
                            flyers are printed) is required. Once we have received your design and files we
                            will perform a flight check and send you a PDF proof for your approval. Upon
                            approval we will begin the printing process and dispatch your order within 3-10
                            days working days (depending on the quantity requested).&nbsp; Note: custom sizing available, please
                            contact us to learn more.</p>
                            <p>&nbsp;</p>
                            <div class="cms_template_holder">
                            <p>Template</p>
                            <p><a href="templates/1print_flyer_a6_105x148mm.pdf" target="_blank">A6 Template</a>
                            </p>
                            </div>
                            <p>&nbsp;</p>
                        </div>
                        <div class="cms_pro_content"><h1>A5 Flyers &amp; Leaflets</h1>
                            <p>Eye-catching,
                            <a href="/product/flyers">professionally designed flyers</a> are a cost-effective solution to instantly
                            grabbing the attention of large numbers of potential customers in a very short
                            amount of time. </p>
                            <p>&nbsp;</p>
                            <p>The size of A5
                            flyers allows for large, captivating images to accompany your compelling
                            advertising message whilst still making them a suitable size for letterbox
                            drops and in-store promotions.</p>
                            <p>&nbsp;</p>
                            <p>YellowStar Press's flyers are printed on high quality GSM printing
                            stock&nbsp; - 150gsm , 170gsm or 200gsm gloss. You can choose to have your flyers
                            printed on one or two sides in single to full colour.</p>
                            <p>&nbsp;</p>
                            <p>Let
                            YellowStar Press create a customised flyer design that will stand out from the crowd and
                            boost your brand, or alternatively, you can provide us with your own 148mm x
                            210mm designs. We apply a minimum of 2mm bleed (the edge that will be trimmed
                            off when the flyers are printed). As soon as we receive your designs we conduct
                            a flight check, at no additional cost and provide you with you a PDF proof.
                            Upon approval we initiate printing and your order is dispatched within 3-10
                            days working days. Delivery times may vary according to the product and order
                            size. <a href="/contact">Contact
                            the YellowStar Press team</a> if you require urgent printing (within 48 hours).</p>
                            <p>&nbsp;</p>
                            <p>Note:
                            custom sizing available, please contact us to learn more.</p>
                            <p>&nbsp;</p>
                            <div class="cms_template_holder">
                            <p>Template</p>
                            <p><a href="templates/1print_flyer_a5_148x210mm.pdf" target="_blank">A5 Template</a>
                            </p>
                            </div>
                            <p>&nbsp;</p>
                        </div>


                        <div class="cms_pro_content"><h1>A4 Flyers &amp; Leaflets</h1>
                            <p>There are 3 key
                            reasons why flyers are still one of the most widely used marketing tools: they
                            are extremely versatile, easy to design and very cost-effective compared to
                            most other advertising methods. Professionally designed promotional flyers
                            offer a highly effective means of communicating your marketing message, whether
                            you need to get the word out about an event, special offer, competition or new
                            product or service.&nbsp; </p>
                            <p>&nbsp;</p>
                            <p>A4 flyers allow
                            for high visual impact, significant branding and an eye-catching marketing
                            message whilst still being easy for potential customers to fold and tuck away.
                            To ensure you capture your audience's attention take advantage of YellowStar Press's <a href="/product/flyers">full
                            colour flyer printing</a> and craft a call to action that will resonate with your
                            target market.</p>
                            <p>&nbsp;</p>
                            <p>Our flyers are printed on high quality 150gsm, 170gsm or
                            200gsm gloss that will compliment your clean and elegant design and bring your
                            images to life. Impress your prospective customers with striking full colour
                            flyers or more cost-effective single colour flyer printing.</p>
                            <p>&nbsp;</p>
                            <p>Let
                            YellowStar Press create a customised flyer design that will stand out from the crowd and
                            boost your brand, or alternatively, you can provide us with your own 148mm x
                            210mm designs. Please note: we require a minimum of 2mm bleed. Once we have all
                            your designs and associated files in hand we carry out a flight check and
                            forward you a proof in PDF format. Printing begins upon approval and delivery
                            takes 3-10 days working days (depending on the size of your order). Should you
                            require urgent printing or custom sizing please <a href="/contact">contact
                            us</a>.</p>
                            <p>&nbsp;</p>
                            <div class="cms_template_holder">
                            <p>Template</p>
                            <p><a href="templates/1print_flyer_a4_210x297mm.pdf" target="_blank">A4 Template</a>
                            </p>
                            </div>
                            <p>&nbsp;</p>
                        </div>



                        <div class="clear"></div>



                    </div>


                    <div class="clear"></div>
                    <div style="clear: both;"></div>




                </div>

                <div class="clear"></div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <!-- flyerlearnmore -->
    <div class="posterlearnmore_div" id="posterlearnmore_div_id" style="display:none">
        <div class="text_holder">
            <div class="main_product_container brochure_holder">
                <div id="breadcrumbs">
                    You are here:
                    <span itemprop="breadcrumb" itemscope="itemscope" itemtype="http://schema.org/Breadcrumb">
                        <a href="/home" itemprop="url"><span itemprop="title">YellowStar Press Online Printing</span></a>
                        »
                        <span itemprop="child" itemscope="itemscope" itemtype="http://schema.org/Breadcrumb">
                            <a href="/product/flyers" itemprop="url">
                                <span itemprop="title">
                                    Flyer Printing </span>
                            </a>
                            »
                            <a href="/product/flyers/learnmore" itemprop="url">
                                <span itemprop="title">
                                    learnmore </span>
                            </a>
                        </span>
                    </span>
                </div>

                <div class="main_left">
                    <div class="main_left_left">

                        <div class="cms_pro_content"><h1>DL Flyers &amp; Leaflets</h1>
                            <p>Flyers are one of
                            the most popular marketing tools out there due to their cost-effectiveness,
                            versatility and easy design. Whether you wish to promote a one-off event,
                            special offer, competition or new product/service <a href="/product/flyers">promotional flyers</a> can be a
                            highly effective way of spreading your marketing message. </p>
                            <p>&nbsp;</p>
                            <p>Our DL flyers are
                            a handy size for a marketing message which recipients can easily fold up and
                            pop into their pocket. Captivate your audience with full colour imagery that
                            perfectly compliments your campaign theme and brand identity.</p>
                            <p>&nbsp;</p>
                            <p>Our high quality flyers are printed on high GSM printing
                            stock (choose from 150gsm , 170gsm or 200gsm gloss) that will enhance your design and
                            reinforce the professionalism of your brand. Reach your target market with the right marketing message
                            on cost-effective full colour flyers or more economical single colour flyer
                            printing. Flyers can be printed on both sides or one side only.</p>
                            <p>&nbsp;</p>
                            <p>Let
                            us create a customised flyer design for you which is both exciting and visually
                            striking, or send us your own 210mm x 99m designs. A minimum of 2mm bleed (the
                            amount that will be trimmed off during the printing process) is applied. We
                            carry out free flight checks and provide&nbsp;
                            PDF proofs prior to going ahead with any printing job. Upon approval we
                            commence printing and dispatch your order within 3-10 days working days
                            (delivery times depend on the size and type of order).&nbsp; Note: custom sizing available, please
                            contact us to learn more.</p>
                            <p>&nbsp;</p>
                            <div class="cms_template_holder">
                            <p>Template</p>
                            <p><a href="templates/1print_flyer_dl_210x99mm.pdf" target="_blank">DL Template</a>
                            </p>
                            </div>
                            <p>&nbsp;</p>
                        </div>

                        <div class="cms_pro_content"><h1>A6 Flyers &amp; Leaflets</h1>
                            <p>Do you need to
                            promote a product, spruik a special offer or expose an event? A6 promotional
                            flyers can act as a highly effective marketing tool which can enable you to
                            grab your target audience's attention quickly and economically. </p>
                            <p>&nbsp;</p>
                            <p>YellowStar Press's A6 flyers
                            are the perfect size and weight for an advertising message which you want
                            potential customers to pop into their pocket or handbag and take away with
                            them. </p>
                            <p>&nbsp;</p>
                            <p>Our <a href="/product/flyers">high quality flyers</a> are printed on GSM printing stock
                            including 150gsm , 170gsm and 200gsm gloss. Let your brand's voice be heard with a
                            powerful message and professional design on impressive full colour flyers or
                            more cost-effective single colour flyer printing.</p>
                            <p>&nbsp;</p>
                            <p>We
                            can create an attractive flyer design tailored to suit your marketing campaign,
                            or alternatively, you can provide us with your own 105mm x148mm designs. Please
                            remember a minimum of 2mm bleed (the amount that will be trimmed off when the
                            flyers are printed) is required. Once we have received your design and files we
                            will perform a flight check and send you a PDF proof for your approval. Upon
                            approval we will begin the printing process and dispatch your order within 3-10
                            days working days (depending on the quantity requested).&nbsp; Note: custom sizing available, please
                            contact us to learn more.</p>
                            <p>&nbsp;</p>
                            <div class="cms_template_holder">
                            <p>Template</p>
                            <p><a href="templates/1print_flyer_dl_210x99mm.pdf" target="_blank">A6 Template</a>
                            </p>
                            </div>
                            <p>&nbsp;</p>
                        </div>
                        <div class="cms_pro_content"><h1>A5 Flyers &amp; Leaflets</h1>
                            <p>Eye-catching,
                            <a href="/product/flyers">professionally designed flyers</a> are a cost-effective solution to instantly
                            grabbing the attention of large numbers of potential customers in a very short
                            amount of time. </p>
                            <p>&nbsp;</p>
                            <p>The size of A5
                            flyers allows for large, captivating images to accompany your compelling
                            advertising message whilst still making them a suitable size for letterbox
                            drops and in-store promotions.</p>
                            <p>&nbsp;</p>
                            <p>YellowStar Press's flyers are printed on high quality GSM printing
                            stock&nbsp; - 150gsm , 170gsm or 200gsm gloss. You can choose to have your flyers
                            printed on one or two sides in single to full colour.</p>
                            <p>&nbsp;</p>
                            <p>Let
                            YellowStar Press create a customised flyer design that will stand out from the crowd and
                            boost your brand, or alternatively, you can provide us with your own 148mm x
                            210mm designs. We apply a minimum of 2mm bleed (the edge that will be trimmed
                            off when the flyers are printed). As soon as we receive your designs we conduct
                            a flight check, at no additional cost and provide you with you a PDF proof.
                            Upon approval we initiate printing and your order is dispatched within 3-10
                            days working days. Delivery times may vary according to the product and order
                            size. <a href="/contact">Contact
                            the YellowStar Press team</a> if you require urgent printing (within 48 hours).</p>
                            <p>&nbsp;</p>
                            <p>Note:
                            custom sizing available, please contact us to learn more.</p>
                            <p>&nbsp;</p>
                            <div class="cms_template_holder">
                            <p>Template</p>
                            <p><a href="templates/1print_flyer_a5_148x210mm.pdf" target="_blank">A5 Template</a>
                            </p>
                            </div>
                            <p>&nbsp;</p>
                        </div>


                        <div class="cms_pro_content"><h1>A4 Flyers &amp; Leaflets</h1>
                            <p>There are 3 key
                            reasons why flyers are still one of the most widely used marketing tools: they
                            are extremely versatile, easy to design and very cost-effective compared to
                            most other advertising methods. Professionally designed promotional flyers
                            offer a highly effective means of communicating your marketing message, whether
                            you need to get the word out about an event, special offer, competition or new
                            product or service.&nbsp; </p>
                            <p>&nbsp;</p>
                            <p>A4 flyers allow
                            for high visual impact, significant branding and an eye-catching marketing
                            message whilst still being easy for potential customers to fold and tuck away.
                            To ensure you capture your audience's attention take advantage of YellowStar Press's <a href="/product/flyers">full
                            colour flyer printing</a> and craft a call to action that will resonate with your
                            target market.</p>
                            <p>&nbsp;</p>
                            <p>Our flyers are printed on high quality 150gsm, 170gsm or
                            200gsm gloss that will compliment your clean and elegant design and bring your
                            images to life. Impress your prospective customers with striking full colour
                            flyers or more cost-effective single colour flyer printing.</p>
                            <p>&nbsp;</p>
                            <p>Let
                            YellowStar Press create a customised flyer design that will stand out from the crowd and
                            boost your brand, or alternatively, you can provide us with your own 148mm x
                            210mm designs. Please note: we require a minimum of 2mm bleed. Once we have all
                            your designs and associated files in hand we carry out a flight check and
                            forward you a proof in PDF format. Printing begins upon approval and delivery
                            takes 3-10 days working days (depending on the size of your order). Should you
                            require urgent printing or custom sizing please <a href="/contact">contact
                            us</a>.</p>
                            <p>&nbsp;</p>
                            <div class="cms_template_holder">
                            <p>Template</p>
                            <p><a href="templates/1print_flyer_a4_210x297mm.pdf" target="_blank">A4 Template</a>
                            </p>
                            </div>
                            <p>&nbsp;</p>
                        </div>



                        <div class="clear"></div>



                    </div>


                    <div class="clear"></div>
                    <div style="clear: both;"></div>




                </div>

                <div class="clear"></div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <!-- flyerlearnmore -->
    <div class="postercardlearnmore_div" id="postercardlearnmore_div_id" style="display:none">
        <div class="text_holder">
            <div class="main_product_container brochure_holder">
                <div id="breadcrumbs">
                    You are here:
                    <span itemprop="breadcrumb" itemscope="itemscope" itemtype="http://schema.org/Breadcrumb">
                        <a href="/home" itemprop="url"><span itemprop="title">YellowStar Press Online Printing</span></a>
                        »
                        <span itemprop="child" itemscope="itemscope" itemtype="http://schema.org/Breadcrumb">
                            <a href="/product/flyers" itemprop="url">
                                <span itemprop="title">
                                    Flyer Printing </span>
                            </a>
                            »
                            <a href="/product/flyers/learnmore" itemprop="url">
                                <span itemprop="title">
                                    learnmore </span>
                            </a>
                        </span>
                    </span>
                </div>

                <div class="main_left">
                    <div class="main_left_left">

                        <div class="cms_pro_content"><h1>DL Flyers &amp; Leaflets</h1>
                            <p>Flyers are one of
                            the most popular marketing tools out there due to their cost-effectiveness,
                            versatility and easy design. Whether you wish to promote a one-off event,
                            special offer, competition or new product/service <a href="/product/flyers">promotional flyers</a> can be a
                            highly effective way of spreading your marketing message. </p>
                            <p>&nbsp;</p>
                            <p>Our DL flyers are
                            a handy size for a marketing message which recipients can easily fold up and
                            pop into their pocket. Captivate your audience with full colour imagery that
                            perfectly compliments your campaign theme and brand identity.</p>
                            <p>&nbsp;</p>
                            <p>Our high quality flyers are printed on high GSM printing
                            stock (choose from 150gsm , 170gsm or 200gsm gloss) that will enhance your design and
                            reinforce the professionalism of your brand. Reach your target market with the right marketing message
                            on cost-effective full colour flyers or more economical single colour flyer
                            printing. Flyers can be printed on both sides or one side only.</p>
                            <p>&nbsp;</p>
                            <p>Let
                            us create a customised flyer design for you which is both exciting and visually
                            striking, or send us your own 210mm x 99m designs. A minimum of 2mm bleed (the
                            amount that will be trimmed off during the printing process) is applied. We
                            carry out free flight checks and provide&nbsp;
                            PDF proofs prior to going ahead with any printing job. Upon approval we
                            commence printing and dispatch your order within 3-10 days working days
                            (delivery times depend on the size and type of order).&nbsp; Note: custom sizing available, please
                            contact us to learn more.</p>
                            <p>&nbsp;</p>
                            <div class="cms_template_holder">
                            <p>Template</p>
                            <p><a href="templates/1Print_Flyer_DL_210x99mm.pdf" target="_blank">DL Template</a>
                            </p>
                            </div>
                            <p>&nbsp;</p>
                        </div>

                        <div class="cms_pro_content"><h1>A6 Flyers &amp; Leaflets</h1>
                            <p>Do you need to
                            promote a product, spruik a special offer or expose an event? A6 promotional
                            flyers can act as a highly effective marketing tool which can enable you to
                            grab your target audience's attention quickly and economically. </p>
                            <p>&nbsp;</p>
                            <p>YellowStar Press's A6 flyers
                            are the perfect size and weight for an advertising message which you want
                            potential customers to pop into their pocket or handbag and take away with
                            them. </p>
                            <p>&nbsp;</p>
                            <p>Our <a href="/product/flyers">high quality flyers</a> are printed on GSM printing stock
                            including 150gsm , 170gsm and 200gsm gloss. Let your brand's voice be heard with a
                            powerful message and professional design on impressive full colour flyers or
                            more cost-effective single colour flyer printing.</p>
                            <p>&nbsp;</p>
                            <p>We
                            can create an attractive flyer design tailored to suit your marketing campaign,
                            or alternatively, you can provide us with your own 105mm x148mm designs. Please
                            remember a minimum of 2mm bleed (the amount that will be trimmed off when the
                            flyers are printed) is required. Once we have received your design and files we
                            will perform a flight check and send you a PDF proof for your approval. Upon
                            approval we will begin the printing process and dispatch your order within 3-10
                            days working days (depending on the quantity requested).&nbsp; Note: custom sizing available, please
                            contact us to learn more.</p>
                            <p>&nbsp;</p>
                            <div class="cms_template_holder">
                            <p>Template</p>
                            <p><a href="templates/1print_flyer_a5_148x210mm.pdf" target="_blank">A6 Template</a>
                            </p>
                            </div>
                            <p>&nbsp;</p>
                        </div>
                        <div class="cms_pro_content"><h1>A5 Flyers &amp; Leaflets</h1>
                            <p>Eye-catching,
                            <a href="/product/flyers">professionally designed flyers</a> are a cost-effective solution to instantly
                            grabbing the attention of large numbers of potential customers in a very short
                            amount of time. </p>
                            <p>&nbsp;</p>
                            <p>The size of A5
                            flyers allows for large, captivating images to accompany your compelling
                            advertising message whilst still making them a suitable size for letterbox
                            drops and in-store promotions.</p>
                            <p>&nbsp;</p>
                            <p>YellowStar Press's flyers are printed on high quality GSM printing
                            stock&nbsp; - 150gsm , 170gsm or 200gsm gloss. You can choose to have your flyers
                            printed on one or two sides in single to full colour.</p>
                            <p>&nbsp;</p>
                            <p>Let
                            YellowStar Press create a customised flyer design that will stand out from the crowd and
                            boost your brand, or alternatively, you can provide us with your own 148mm x
                            210mm designs. We apply a minimum of 2mm bleed (the edge that will be trimmed
                            off when the flyers are printed). As soon as we receive your designs we conduct
                            a flight check, at no additional cost and provide you with you a PDF proof.
                            Upon approval we initiate printing and your order is dispatched within 3-10
                            days working days. Delivery times may vary according to the product and order
                            size. <a href="/contact">Contact
                            the YellowStar Press team</a> if you require urgent printing (within 48 hours).</p>
                            <p>&nbsp;</p>
                            <p>Note:
                            custom sizing available, please contact us to learn more.</p>
                            <p>&nbsp;</p>
                            <div class="cms_template_holder">
                            <p>Template</p>
                            <p><a href="templates/1print_flyer_a5_148x210mm.pdf" target="_blank">A5 Template</a>
                            </p>
                            </div>
                            <p>&nbsp;</p>
                        </div>


                        <div class="cms_pro_content"><h1>A4 Flyers &amp; Leaflets</h1>
                            <p>There are 3 key
                            reasons why flyers are still one of the most widely used marketing tools: they
                            are extremely versatile, easy to design and very cost-effective compared to
                            most other advertising methods. Professionally designed promotional flyers
                            offer a highly effective means of communicating your marketing message, whether
                            you need to get the word out about an event, special offer, competition or new
                            product or service.&nbsp; </p>
                            <p>&nbsp;</p>
                            <p>A4 flyers allow
                            for high visual impact, significant branding and an eye-catching marketing
                            message whilst still being easy for potential customers to fold and tuck away.
                            To ensure you capture your audience's attention take advantage of YellowStar Press's <a href="/product/flyers">full
                            colour flyer printing</a> and craft a call to action that will resonate with your
                            target market.</p>
                            <p>&nbsp;</p>
                            <p>Our flyers are printed on high quality 150gsm, 170gsm or
                            200gsm gloss that will compliment your clean and elegant design and bring your
                            images to life. Impress your prospective customers with striking full colour
                            flyers or more cost-effective single colour flyer printing.</p>
                            <p>&nbsp;</p>
                            <p>Let
                            YellowStar Press create a customised flyer design that will stand out from the crowd and
                            boost your brand, or alternatively, you can provide us with your own 148mm x
                            210mm designs. Please note: we require a minimum of 2mm bleed. Once we have all
                            your designs and associated files in hand we carry out a flight check and
                            forward you a proof in PDF format. Printing begins upon approval and delivery
                            takes 3-10 days working days (depending on the size of your order). Should you
                            require urgent printing or custom sizing please <a href="/contact">contact
                            us</a>.</p>
                            <p>&nbsp;</p>
                            <div class="cms_template_holder">
                            <p>Template</p>
                            <p><a href="templates/1print_flyer_a5_148x210mm.pdf" target="_blank">A4 Template</a>
                            </p>
                            </div>
                            <p>&nbsp;</p>
                        </div>



                        <div class="clear"></div>



                    </div>


                    <div class="clear"></div>
                    <div style="clear: both;"></div>




                </div>

                <div class="clear"></div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>


    </div><!-- home_background end -->
    <!-- footer -->
    <div class="footer_background">
    <div class="footer" id="footer_id">

        <div class="footer_width_holder">
            <div class="footer_col1">
                <div class="footer_phone" href="tel:0398786999">
                    <img src="{{URL::asset('/image/tel.png')}}" alt="Call 03 9878 6999" href="tel:0398786999" class="footer_phone_number">
                    <a href="tel:0398786999"><h1>&nbsp;&nbsp;03 9878 6999</h1></a>
                </div>
            </div>
            <div class="footer_col2">
                <div class="footer_menu1">
                    <div class="footer_heading">Printing Services</div>
                    <ul>
                        <li><a onclick="clickProduct(2)">Business Card Printing</a></li>
                        <li><a onclick="clickProduct(0)">Booklet Printing</a></li>
                        <li><a onclick="clickProduct(1)">Brochure Printing</a></li>
                        <li><a onclick="clickProduct(14)">Compliment Slip Printing</a></li>
                        <li><a onclick="clickProduct(5)">Docket Book Printing</a></li>
                        <li><a onclick="clickProduct(6)">Envelope Printing</a></li>
                        <li><a onclick="clickProduct(8)">Flyer Printing</a></li>
                    </ul>
                </div>
                <div class="footer_menu2">
                    <ul>
                        <li><a onclick="clickProduct(10)">Letterhead Printing</a></li>
{{--                        <li><a onclick="clickProduct(3)">Notepad/Desk Pad Printing</a></li>--}}
                        <li><a onclick="clickProduct(11)">Postcard Printing</a></li>
                        <li><a onclick="clickProduct(12)">Posters Printing</a></li>
                        <li><a onclick="clickProduct(13)">Presentation Folder Printing</a></li>
                        <li><a onclick="clickProduct(7)">Express Printing</a></li>
                        <li><a onclick="clickHeader(6)">Custom Quotes</a></li>
{{--                        <li><a onclick="clickProduct(15)">Website Design</a></li>--}}
                    </ul>
                </div>
                <div class="footer_menu3">
                    <div class="footer_heading">Company Info</div>
                    <ul>
                        <li><a onclick="clickHeader(5)">About Us</a></li>
                        <li><a onclick="clickProduct(6)">Contact</a></li>
                        <li ><a onclick="clickHeader(12)">Privacy Policy</a></li>
                        <li ><a onclick="clickHeader(11)">Terms and Conditions</a></li>
                        <!-- <li><a>Testimonials</a></li> -->
                    </ul>
                </div>
                <div class="footer_menu4">
                    <div class="footer_heading">Support</div>
                    <ul>
                        <li><a onclick="clickHeader(14)">Order Process</a></li>
{{--                        <li><a onclick="clickHeader(15)">Delivery</a></li>--}}
{{--                        <li><a onclick="clickHeader(16)">File Guidelines</a></li>--}}
                        <!-- <li><a>FTP Accounts</a></li>
                        <li><a>Colour Critical</a></li> -->
{{--                        <li><a onclick="clickHeader(13)">Sample Pack</a></li>--}}
{{--                        <li><a onclick="clickHeader(4)">FAQ</a></li>--}}
{{--                        <li><a onclick="clickHeader(17)">Pre-flight Checks</a></li>--}}
                        <li><a onclick="clickHeader(18)">Colour Critical</a></li>

                        <li><a>Sitemap</a></li>
                    </ul>
                </div>
                <div class="footer_menu5">
                    <div class="footer_heading">Community</div>
                    <ul>
                        <li><a>Blog</a></li>
                    </ul>
                </div>
                <div class="social_media_holder">
                    <a class="footer_facebook" href="" target="_blank" rel="nofollow"></a>
                    <a class="footer_twitter" href="" target="_blank" rel="nofollow"></a>
                </div>
                <div style="clear: both;"></div>
                <div class="credentials">
                    Copyright © YellowStar 2020-2023. All Rights Reserved.&nbsp;&nbsp;
                    <a href="" target="_blank">Web Design</a> by <strong>XXX</strong>
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
    </div>


</div>


<div class="dashboard_admin" id="dashboard_admin_div_id" style="display:none">
    <div class="az-header">
        <div class="container">
            <div class="az-header-left">
                <a href="/index.html">
                    <div class="companyLogo" id="companyLogo_id">
                        <img src="{{URL::asset('/image/logonew.png') }} "style="margin-left: -65px;margin-top: 5px;">
                    </div>
                </a>
                <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
            </div><!-- az-header-left -->
            <div class="az-header-menu">
                <ul class="nav">
                    <li class="nav-item" id="nav-dashboard_id" onclick="onclickHeader(0)">
                        <a class="nav-link" type="button"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>
                    </li>
                    <li class="nav-item" id="nav-profile_id" onclick="onclickHeader(1)">
                        <a class="nav-link" type="button"><i class="typcn typcn-chart-bar-outline"></i> Profile</a>
                    </li>
                    <li class="nav-item" id="nav-home_id" onclick="onclickHeader(2)">
                        <a class="nav-link" type="button"><i class="typcn typcn-chart-bar-outline"></i> HomePage</a>
                    </li>
                </ul>
            </div><!-- az-header-menu -->

        </div><!-- container -->
    </div>


    <div class="az-content az-content-dashboard" id="dashboard_div_id" style="display:block">
        <div class="container">
            <div class="az-content-body">
                <div class="az-dashboard-one-title">
                    <div>
                        <h2 class="az-dashboard-title" id="usernametitle">Hi, welcome back!</h2>
                        <p class="az-dashboard-text">Your web analytics dashboard</p>
                    </div>
                    <div class="az-content-header-right">

                        <div class="media">
                            <div class="media-body">
                                <label>Now</label>
                                <h6 id="nowdate"></h6>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </div>
                </div><!-- az-dashboard-one-title -->


                <div class="row row-sm mg-b-20">
                    <div class="col-lg-7 ht-lg-100p">
                        <div class="card card-dashboard-one">
                            <div class="card-header">
                                <div>
                                    <h6 class="card-title">Recent Orders</h6>
                                    <p class="card-text">Orders by month</p>
                                </div>

                            </div><!-- card-header -->
                            <div class="card-body">

                                <div class="flot-chart-wrapper">
                                    <div class="text_holder1"
                                         style="padding: 0px; position: relative; margin-left: auto; margin-right: auto; width: 90%;">
                                        <canvas id="income-month-bar-chart"></canvas>
                                    </div>
                                </div><!-- flot-chart-wrapper -->
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-lg-5 mg-t-20 mg-lg-t-0">
                        <div class="row row-sm">
                            <div class="col-sm-6">
                                <div class="card card-dashboard-two">
                                    <div class="card-header">
                                        <h6 id="totalOrder"></h6>
                                        <p>Total Orders</p>
                                    </div><!-- card-header -->
                                    <div class="card-body">
                                        <div class="chart-wrapper">
                                            <div id="flotChart1" class="flot-chart"
                                                 style="padding: 0px; position: relative;">
                                                <canvas class="flot-base" width="239" height="100"
                                                        style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 239.656px; height: 100px;"></canvas>
                                                <canvas class="flot-overlay" width="239" height="100"
                                                        style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 239.656px; height: 100px;"></canvas>
                                            </div>
                                        </div><!-- chart-wrapper -->
                                    </div><!-- card-body -->
                                </div><!-- card -->
                            </div><!-- col -->
                            <div class="col-sm-6 mg-t-20 mg-sm-t-0">
                                <div class="card card-dashboard-two">
                                    <div class="card-header">
                                        <h6 id="totalUser"></h6>
                                        <p>Total Users</p>
                                    </div><!-- card-header -->
                                    <div class="card-body">
                                        <div class="chart-wrapper">
                                            <div id="flotChart2" class="flot-chart"
                                                 style="padding: 0px; position: relative;">
                                                <canvas class="flot-base" width="239" height="100"
                                                        style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 239.656px; height: 100px;"></canvas>
                                                <canvas class="flot-overlay" width="239" height="100"
                                                        style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 239.656px; height: 100px;"></canvas>
                                            </div>
                                        </div><!-- chart-wrapper -->
                                    </div><!-- card-body -->
                                </div><!-- card -->
                            </div><!-- col -->
                            <div class="col-sm-12 mg-t-20">
                                <div class="card card-dashboard-three">
                                    <div class="card-header">
                                        <p>Total Amount</p>
                                        <h6 id="totalAmount"></h6>
                                        <small></small>
                                    </div><!-- card-header -->
                                    <div class="card-body">
                                        <div class="chart">
                                            <div class="chartjs-size-monitor"
                                                 style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                <div class="chartjs-size-monitor-expand"
                                                     style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                    <div
                                                        style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink"
                                                     style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                    <div
                                                        style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                                </div>
                                            </div>
                                            <canvas id="chartBar5" width="353" height="200"
                                                    class="chartjs-render-monitor"
                                                    style="display: block; width: 353px; height: 200px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- row -->
                    </div><!--col -->
                </div><!-- row -->

                <div class="table1"
                     style="padding: 0px;margin: 15px; position: relative; margin-left: auto; margin-right: auto; width: 100%;border:0.5px solid gray;">
                    <div class="card-header">
                        <h6 class="card-title">Page Views by All Orders</h6>
                        <p class="card-text">This report is based on 100% of sessions.</p>
                    </div><!-- card-header -->
                    <div class="card-body">
                        <table id="table_orders" class="display">
                            <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Order Price</th>
                                <th>Order Id</th>
                                <th>Order Description</th>
                                <th>Order Email</th>
                                <th>Order Type</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                        </table>
                    </div><!-- card-body -->
                </div>

                <div class="table1"
                     style="padding: 0px;margin: 15px; position: relative; margin-left: auto; margin-right: auto; width: 100%;border:0.5px solid gray;">
                    <div class="card-header">
                        <h6 class="card-title">Page Views by All users</h6>
                        <p class="card-text">This report is based on 100% of sessions.</p>
                    </div><!-- card-header -->
                    <div class="card-body">
                        <table id="table_users" class="display">
                            <thead>
                            <tr>
                                <th>User</th>
                                <th>User Type</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                            </tr>
                            </thead>
                        </table>
                    </div><!-- card-body -->

                </div><!-- row -->
            </div><!-- az-content-body -->
        </div>
    </div>
    <!-- profile -->
    <div class="pro_div" id="profile_div_id" style="display:none">
        <div class="container">
            <h6 class="card-title">Edit Account</h6>

            <form>


                <div class="form-group">

                    <label for=pass>Password</label>
                    <input type="password" class="form-control" id="pass_change">

                </div>

                <div class="row mt-5">

                    <div class="col">

                        <button type="button" class="btn btn-primary btn-block">Save Changes</button>

                    </div>

                    <div class="col">

                        <button type="button" class="btn btn-default btn-block">Cancel</button>

                    </div>

                </div>

            </form>
        </div>
    </div>
</div>


<div class="dashboard_user_div" id="dashboard_user_div_id" style="display:none">

    <div class="az-header">
        <div class="container">
            <div class="az-header-left">
                <a href="index.html" class="az-logo"><span></span> YELLOWSTARPress</a>
                <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
            </div><!-- az-header-left -->
            <div class="az-header-menu">
                <div class="az-header-menu-header">
                    <a href="index.html" class="az-logo"><span></span> YELLOWSTARPress</a>
                    <a href="" class="close">×</a>
                </div><!-- az-header-menu-header -->
                <ul class="nav">
{{--                    <li class="nav-item" id="nav-dashboard_id" onclick="onclickHeader(4)">--}}
{{--                        <a class="nav-link" type="button"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>--}}
{{--                    </li>--}}

                    <li class="nav-item" id="nav-profile_id" onclick="onclickHeader(3)">
                        <a class="nav-link" type="button"><i class="typcn typcn-chart-bar-outline"></i> Profile</a>
                    </li>
                    <li class="nav-item" id="nav-home_id" onclick="onclickHeader(2)">
                        <a class="nav-link" type="button"><i class="typcn typcn-chart-bar-outline"></i> HomePage</a>
                    </li>
                </ul>
            </div><!-- az-header-menu -->

        </div><!-- container -->
    </div>


    <div class="az-content az-content-dashboard" id="dashboard_user_div_div_id" style="display:block">
        <div class="container">
            <div class="az-content-body">
                <div class="az-dashboard-one-title">
                    <div>
                        <h2 class="az-dashboard-title">Hi, welcome back!</h2>
                        <p class="az-dashboard-text">Your web analytics dashboard</p>
                    </div>
                    <div class="az-content-header-right">

                        <div class="media">
                            <div class="media-body">
                                <label>Now</label>
                                <h6 id="nowuserdate"></h6>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </div>
                </div><!-- az-dashboard-one-title -->


                <div class="row row-sm mg-b-20">
                    <div class="col-lg-7 ht-lg-100p">
                        <div class="card card-dashboard-one">
                            <div class="card-header">
                                <div>
                                    <h6 class="card-title">Recent Orders</h6>
                                    <p class="card-text">Orders by month</p>
                                </div>

                            </div><!-- card-header -->
                            <div class="card-body">

                                <div class="flot-chart-wrapper">
                                    <div class="text_holder1"
                                         style="padding: 0px; position: relative; margin-left: auto; margin-right: auto; width: 90%;">
                                        <canvas id="income-month-bar-chart-user"></canvas>
                                    </div>
                                </div><!-- flot-chart-wrapper -->
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-lg-5 mg-t-20 mg-lg-t-0">
                        <div class="row row-sm">

                            <div class="col-sm-12 mg-t-0">
                                <div class="card card-dashboard-three">
                                    <div class="card-header">
                                        <p>Total Amount</p>
                                        <h6 id="totalAmount_user"></h6>
                                        <small></small>
                                    </div><!-- card-header -->
                                    <div class="card-body">
                                        <div class="chart">
                                            <div class="chartjs-size-monitor"
                                                 style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                <div class="chartjs-size-monitor-expand"
                                                     style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                    <div
                                                        style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink"
                                                     style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                    <div
                                                        style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                                </div>
                                            </div>
                                            <canvas id="chartBar5" width="353" height="200"
                                                    class="chartjs-render-monitor"
                                                    style="display: block; width: 353px; height: 200px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 mg-t-20">
                                <div class="card card-dashboard-three">
                                    <div class="card-header">
                                        <p>Total Orders</p>
                                        <h6 id="totalOrder_user"></h6>
                                        <small></small>
                                    </div><!-- card-header -->
                                    <div class="card-body">
                                        <div class="chart">
                                            <div class="chartjs-size-monitor"
                                                 style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                <div class="chartjs-size-monitor-expand"
                                                     style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                    <div
                                                        style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink"
                                                     style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                    <div
                                                        style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                                </div>
                                            </div>
                                            <canvas id="chartBar5" width="353" height="200"
                                                    class="chartjs-render-monitor"
                                                    style="display: block; width: 353px; height: 200px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- row -->
                    </div><!--col -->
                </div><!-- row -->

                <div class="table1"
                     style="padding: 0px;margin: 15px; position: relative; margin-left: auto; margin-right: auto; width: 100%;border:0.5px solid gray;">
                    <div class="card-header">
                        <h6 class="card-title">Page Views by All Orders</h6>
                        <p class="card-text">This report is based on 100% of sessions.</p>
                    </div><!-- card-header -->
                    <div class="card-body">
                        <table id="table_orders_user" class="display">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Order Price</th>
                                <th>Order Id</th>
                                <th>Order Description</th>
                                <th>Order Email</th>
                                <th>Order Type</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                        </table>
                    </div><!-- card-body -->
                </div>


            </div><!-- row -->
        </div><!-- az-content-body -->
    </div>


    <!-- profile -->
    <div class="pro_div" id="profile_user_div_id" style="display:none">
        <div class="container">
            <h6 class="card-title">Page Views by Page Title</h6>

            <form>


                <div class="form-group">

                    <label for=email>Email</label>
                    <input type="email" class="form-control" id="email_change_user">

                </div>
                <div class="form-group">

                    <label for=pass>Password</label>
                    <input type="password" class="form-control" id="pass_change_user">

                </div>
                <div class="form-group">

                    <label for=pass>Repeat Password</label>
                    <input type="password" class="form-control" id="pass_change_user_repeat">

                </div>
                <div class="form-group">

                    <label for=phone>Phone Number</label>
                    <input type="text" class="form-control" id="phonenum_change_user">

                </div>
                <div class="form-group ">

                    <label for=birthday>Address</label>
                    <input type="text" class="form-control" id="address_change_user">

                </div>
                <div class="form-group ">

                    <label for=birthday>Suburb</label>
                    <input type="text" class="form-control" id="suburb_change_user">

                </div>
                <div class="form-group ">

                    <label for=birthday>State</label>
                    <input type="text" class="form-control" id="state_change_user">

                </div>
                <div class="form-group ">

                    <label for=birthday>Postcode</label>
                    <input type="text" class="form-control" id="postcode_change_user">

                </div>

                <div class="row mt-5">

                    <div class="col">

                        <button type="button" class="btn btn-primary btn-block" onclick="updateUserMessage()">Save
                            Changes
                        </button>

                    </div>

                    <div class="col">

                        <button type="button" class="btn btn-default btn-block">Cancel</button>

                    </div>

                </div>

            </form>
        </div>
    </div>
</div>

<script type="text/javascript" style="">
 $(document).scroll(function() {
//  var $buttonslide = $('.slider-controls')
//  $buttonslide.css({display: $(this).scrollTop() < 300? "block":"none"});
 var $logo = $('.header_background');
 var  x =document.getElementsByClassName("header_background");
    // $logo.css({box-shadow: $(this).scrollTop() > 300? "0 1px 8px 2px #eee!important;":"0 5px 15px 1px #777777!important;"});
    //$logo.style({['box-shadow']: $(this).scrollTop() > 300? "0 1px 8px 2px #eee!important;":"0 5px 15px 1px #777777!important;"});
    if ($(this).scrollTop() > 300){
        //$logo.style['box-shadow']='0 5px 15px 1px #777777!important';
        x[0].setAttribute('style', 'box-shadow: 0 5px 15px 1px #777777!important');
    }else{
        x[0].setAttribute('style', 'box-shadow: 0 1px 8px 2px #eee!important');
    }
	});
</script>
<script type="text/javascript">
    $(".gallary_div_option").click(function () {
        $(".gallary_div_option").removeClass("active");
        $(this).addClass("active");

    });
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
    showDivs(slideIndex += n);
    }

    function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
    }


    //轮播


    $(document).ready(function () {
        $('.dropdown').hover(
            function () {
                $(this).children('.sub-menu').slideDown(200);
            },
            function () {
                $(this).children('.sub-menu').slideUp(200);
            }
        );
    }); // end ready



    $(function(){

	$('#login_username_id').keydown(function(event) {
		if (event.keyCode == 13) {
            $('#login_btn').click();
		}
    });
    $('#login_password_id').keydown(function(event) {
		if (event.keyCode == 13) {
            $('#login_btn').click();
		}
	});
    });

//     window.onload = function () {

// const name = document.getElementById('name');
// const cardnumber = document.getElementById('cardnumber');
// const expirationdate = document.getElementById('expirationdate');
// const securitycode = document.getElementById('securitycode');
// const output = document.getElementById('output');
// const ccicon = document.getElementById('ccicon');
// const ccsingle = document.getElementById('ccsingle');
// const generatecard = document.getElementById('generatecard');


// let cctype = null;

// //Mask the Credit Card Number Input
// var cardnumber_mask = new IMask(cardnumber, {
//     mask: [
//         {
//             mask: '0000 000000 00000',
//             regex: '^3[47]\\d{0,13}',
//             cardtype: 'american express'
//         },
//         {
//             mask: '0000 0000 0000 0000',
//             regex: '^(?:6011|65\\d{0,2}|64[4-9]\\d?)\\d{0,12}',
//             cardtype: 'discover'
//         },
//         {
//             mask: '0000 000000 0000',
//             regex: '^3(?:0([0-5]|9)|[689]\\d?)\\d{0,11}',
//             cardtype: 'diners'
//         },
//         {
//             mask: '0000 0000 0000 0000',
//             regex: '^(5[1-5]\\d{0,2}|22[2-9]\\d{0,1}|2[3-7]\\d{0,2})\\d{0,12}',
//             cardtype: 'mastercard'
//         },
//         // {
//         //     mask: '0000-0000-0000-0000',
//         //     regex: '^(5019|4175|4571)\\d{0,12}',
//         //     cardtype: 'dankort'
//         // },
//         // {
//         //     mask: '0000-0000-0000-0000',
//         //     regex: '^63[7-9]\\d{0,13}',
//         //     cardtype: 'instapayment'
//         // },
//         {
//             mask: '0000 000000 00000',
//             regex: '^(?:2131|1800)\\d{0,11}',
//             cardtype: 'jcb15'
//         },
//         {
//             mask: '0000 0000 0000 0000',
//             regex: '^(?:35\\d{0,2})\\d{0,12}',
//             cardtype: 'jcb'
//         },
//         {
//             mask: '0000 0000 0000 0000',
//             regex: '^(?:5[0678]\\d{0,2}|6304|67\\d{0,2})\\d{0,12}',
//             cardtype: 'maestro'
//         },
//         // {
//         //     mask: '0000-0000-0000-0000',
//         //     regex: '^220[0-4]\\d{0,12}',
//         //     cardtype: 'mir'
//         // },
//         {
//             mask: '0000 0000 0000 0000',
//             regex: '^4\\d{0,15}',
//             cardtype: 'visa'
//         },
//         {
//             mask: '0000 0000 0000 0000',
//             regex: '^62\\d{0,14}',
//             cardtype: 'unionpay'
//         },
//         {
//             mask: '0000 0000 0000 0000',
//             cardtype: 'Unknown'
//         }
//     ],
//     dispatch: function (appended, dynamicMasked) {
//         var number = (dynamicMasked.value + appended).replace(/\D/g, '');

//         for (var i = 0; i < dynamicMasked.compiledMasks.length; i++) {
//             let re = new RegExp(dynamicMasked.compiledMasks[i].regex);
//             if (number.match(re) != null) {
//                 return dynamicMasked.compiledMasks[i];
//             }
//         }
//     }
// });

// //Mask the Expiration Date

// var expirationdate_mask = new IMask(expirationdate, {
//     mask: 'MM/YY',
//     // groups: {
//     //     YY: from:1, to:99,maxLength: 2,autofix: true,lazy: false,
//     //     MM: new IMask.MaskedPattern.Group.Range([1, 12]),
//     // }
//     blocks: {
//     YY: {
//       mask: '00',
//     },

//     MM: {
//       mask: IMask.MaskedRange,
//       from: 1,
//       to: 12
//     }}
// });

// //Mask the security code
// var securitycode_mask = new IMask(securitycode, {
//     mask: '000',
// });

// // SVGICONS
// let amex = `<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="amex" fill-rule="nonzero"> <rect id="Rectangle-1" fill="#2557D6" x="0" y="0" width="750" height="471" rx="40"></rect> <path d="M0.002688,221.18508 L36.026849,221.18508 L44.149579,201.67506 L62.334596,201.67506 L70.436042,221.18508 L141.31637,221.18508 L141.31637,206.26909 L147.64322,221.24866 L184.43894,221.24866 L190.76579,206.04654 L190.76579,221.18508 L366.91701,221.18508 L366.83451,189.15941 L370.2427,189.15941 C372.62924,189.24161 373.3263,189.46144 373.3263,193.38516 L373.3263,221.18508 L464.43232,221.18508 L464.43232,213.72973 C471.78082,217.6508 483.21064,221.18508 498.25086,221.18508 L536.57908,221.18508 L544.78163,201.67506 L562.96664,201.67506 L570.98828,221.18508 L644.84844,221.18508 L644.84844,202.65269 L656.0335,221.18508 L715.22061,221.18508 L715.22061,98.67789 L656.64543,98.67789 L656.64543,113.14614 L648.44288,98.67789 L588.33787,98.67789 L588.33787,113.14614 L580.80579,98.67789 L499.61839,98.67789 C486.02818,98.67789 474.08221,100.5669 464.43232,105.83121 L464.43232,98.67789 L408.40596,98.67789 L408.40596,105.83121 C402.26536,100.40529 393.89786,98.67789 384.59383,98.67789 L179.90796,98.67789 L166.17407,130.3194 L152.07037,98.67789 L87.59937,98.67789 L87.59937,113.14614 L80.516924,98.67789 L25.533518,98.67789 L-2.99999999e-06,156.92445 L-2.99999999e-06,221.18508 L0.002597,221.18508 L0.002688,221.18508 Z M227.39957,203.51436 L205.78472,203.51436 L205.70492,134.72064 L175.13228,203.51436 L156.62,203.51436 L125.96754,134.6597 L125.96754,203.51436 L83.084427,203.51436 L74.982981,183.92222 L31.083524,183.92222 L22.8996,203.51436 L4.7e-05,203.51436 L37.756241,115.67692 L69.08183,115.67692 L104.94103,198.84086 L104.94103,115.67692 L139.35289,115.67692 L166.94569,175.26406 L192.29297,115.67692 L227.39657,115.67692 L227.39657,203.51436 L227.39957,203.51436 Z M67.777214,165.69287 L53.346265,130.67606 L38.997794,165.69287 L67.777214,165.69287 Z M313.41947,203.51436 L242.98611,203.51436 L242.98611,115.67692 L313.41947,115.67692 L313.41947,133.96821 L264.07116,133.96821 L264.07116,149.8009 L312.23551,149.8009 L312.23551,167.80606 L264.07116,167.80606 L264.07116,185.34759 L313.41947,185.34759 L313.41947,203.51436 Z M412.67528,139.33321 C412.67528,153.33782 403.28877,160.57326 397.81863,162.74575 C402.43206,164.49434 406.37237,167.58351 408.24808,170.14281 C411.22525,174.51164 411.73875,178.41416 411.73875,186.25897 L411.73875,203.51436 L390.47278,203.51436 L390.39298,192.43732 C390.39298,187.1518 390.90115,179.55074 387.0646,175.32499 C383.98366,172.23581 379.28774,171.56552 371.69714,171.56552 L349.06363,171.56552 L349.06363,203.51436 L327.98125,203.51436 L327.98125,115.67692 L376.47552,115.67692 C387.25084,115.67692 395.18999,115.9604 402.00639,119.88413 C408.67644,123.80786 412.67529,129.53581 412.67529,139.33321 L412.67528,139.33321 Z M386.02277,152.37632 C383.1254,154.12756 379.69859,154.18584 375.59333,154.18584 L349.97998,154.18584 L349.97998,134.67583 L375.94186,134.67583 C379.61611,134.67583 383.44999,134.8401 385.94029,136.26016 C388.67536,137.53981 390.36749,140.26337 390.36749,144.02548 C390.36749,147.86443 388.75784,150.95361 386.02277,152.37632 Z M446.48908,203.51436 L424.97569,203.51436 L424.97569,115.67692 L446.48908,115.67692 L446.48908,203.51436 Z M696.22856,203.51436 L666.35032,203.51436 L626.38585,137.58727 L626.38585,203.51436 L583.44687,203.51436 L575.24166,183.92222 L531.44331,183.92222 L523.48287,203.51436 L498.81137,203.51436 C488.56284,203.51436 475.58722,201.25709 468.23872,193.79909 C460.82903,186.3411 456.97386,176.23903 456.97386,160.26593 C456.97386,147.23895 459.27791,135.33 468.33983,125.91941 C475.15621,118.90916 485.83044,115.67692 500.35982,115.67692 L520.77174,115.67692 L520.77174,134.49809 L500.78818,134.49809 C493.0938,134.49809 488.74909,135.63733 484.564,139.70147 C480.96957,143.4 478.50322,150.39171 478.50322,159.59829 C478.50322,169.00887 480.38158,175.79393 484.30061,180.22633 C487.5465,183.70232 493.445,184.75677 498.99495,184.75677 L508.46393,184.75677 L538.17987,115.67957 L569.77152,115.67957 L605.46843,198.76138 L605.46843,115.67957 L637.5709,115.67957 L674.6327,176.85368 L674.6327,115.67957 L696.22856,115.67957 L696.22856,203.51436 Z M568.07051,165.69287 L553.47993,130.67606 L538.96916,165.69287 L568.07051,165.69287 Z" id="Path" fill="#FFFFFF"></path> <path d="M749.95644,343.76716 C744.83485,351.22516 734.85504,355.00582 721.34464,355.00582 L680.62723,355.00582 L680.62723,336.1661 L721.17969,336.1661 C725.20248,336.1661 728.01736,335.63887 729.71215,333.99096 C731.18079,332.63183 732.2051,330.65804 732.2051,328.26036 C732.2051,325.70107 731.18079,323.66899 729.62967,322.45028 C728.09984,321.10969 725.87294,320.50033 722.20135,320.50033 C702.40402,319.83005 677.70592,321.10969 677.70592,293.30714 C677.70592,280.56363 685.83131,267.14983 707.95664,267.14983 L749.95379,267.14983 L749.95644,249.66925 L710.93382,249.66925 C699.15812,249.66925 690.60438,252.47759 684.54626,256.84375 L684.54626,249.66925 L626.83044,249.66925 C617.60091,249.66925 606.76706,251.94771 601.64279,256.84375 L601.64279,249.66925 L498.57751,249.66925 L498.57751,256.84375 C490.37496,250.95154 476.53466,249.66925 470.14663,249.66925 L402.16366,249.66925 L402.16366,256.84375 C395.67452,250.58593 381.24357,249.66925 372.44772,249.66925 L296.3633,249.66925 L278.95252,268.43213 L262.64586,249.66925 L148.99149,249.66925 L148.99149,372.26121 L260.50676,372.26121 L278.447,353.20159 L295.34697,372.26121 L364.08554,372.32211 L364.08554,343.48364 L370.84339,343.48364 C379.96384,343.62405 390.72054,343.25845 400.21079,339.17311 L400.21079,372.25852 L456.90762,372.25852 L456.90762,340.30704 L459.64268,340.30704 C463.13336,340.30704 463.47657,340.45011 463.47657,343.92344 L463.47657,372.25587 L635.71144,372.25587 C646.64639,372.25587 658.07621,369.46873 664.40571,364.41107 L664.40571,372.25587 L719.03792,372.25587 C730.40656,372.25587 741.50913,370.66889 749.95644,366.60475 L749.95644,343.76712 L749.95644,343.76716 Z M408.45301,296.61266 C408.45301,321.01872 390.16689,326.05784 371.7371,326.05784 L345.42935,326.05784 L345.42935,355.52685 L304.44855,355.52685 L278.48667,326.44199 L251.5058,355.52685 L167.9904,355.52685 L167.9904,267.66822 L252.79086,267.66822 L278.73144,296.46694 L305.55002,267.66822 L372.92106,267.66822 C389.6534,267.66822 408.45301,272.28078 408.45301,296.61266 Z M240.82781,337.04655 L188.9892,337.04655 L188.9892,319.56596 L235.27785,319.56596 L235.27785,301.64028 L188.9892,301.64028 L188.9892,285.66718 L241.84947,285.66718 L264.91132,311.27077 L240.82781,337.04655 Z M324.3545,347.10668 L291.9833,311.3189 L324.3545,276.6677 L324.3545,347.10668 Z M372.2272,308.04117 L344.98027,308.04117 L344.98027,285.66718 L372.47197,285.66718 C380.08388,285.66718 385.36777,288.75636 385.36777,296.43956 C385.36777,304.03796 380.32865,308.04117 372.2272,308.04117 Z M514.97053,267.66815 L585.34004,267.66815 L585.34004,285.83764 L535.96778,285.83764 L535.96778,301.81074 L584.1348,301.81074 L584.1348,319.73642 L535.96778,319.73642 L535.96778,337.21701 L585.34004,337.29641 L585.34004,355.52678 L514.97053,355.52678 L514.97053,267.66815 Z M487.91724,314.6973 C492.61049,316.42205 496.44703,319.51387 498.24559,322.07317 C501.22276,326.36251 501.65378,330.36571 501.73891,338.10985 L501.73891,355.52685 L480.5714,355.52685 L480.5714,344.53458 C480.5714,339.24908 481.08223,331.42282 477.1632,327.33748 C474.08226,324.19002 469.38635,323.4376 461.69463,323.4376 L439.16223,323.4376 L439.16223,355.52685 L417.97609,355.52685 L417.97609,267.66822 L466.65393,267.66822 C477.32816,267.66822 485.10236,268.13716 492.02251,271.81449 C498.6766,275.8177 502.86168,281.30191 502.86168,291.3245 C502.85868,305.34765 493.46719,312.50362 487.91724,314.6973 Z M475.99899,303.59022 C473.17879,305.25668 469.69077,305.39975 465.58817,305.39975 L439.97483,305.39975 L439.97483,285.66718 L465.9367,285.66718 C469.69077,285.66718 473.4475,285.74658 475.99899,287.25416 C478.7314,288.67687 480.36499,291.39779 480.36499,295.15725 C480.36499,298.91672 478.7314,301.94496 475.99899,303.59022 Z M666.33539,309.1866 C670.44067,313.41766 672.64095,318.7588 672.64095,327.80112 C672.64095,346.70178 660.78278,355.5242 639.51948,355.5242 L598.45353,355.5242 L598.45353,336.68449 L639.35453,336.68449 C643.35337,336.68449 646.18954,336.15726 647.9668,334.50934 C649.41681,333.15021 650.45709,331.17643 650.45709,328.77875 C650.45709,326.21944 649.33167,324.18738 647.88433,322.96866 C646.27201,321.62807 644.04778,321.01872 640.37619,321.01872 C620.65868,320.34843 595.9659,321.62807 595.9659,293.82551 C595.9659,281.08201 604.00615,267.66822 626.11019,267.66822 L668.37872,267.66822 L668.37872,286.36752 L629.70196,286.36752 C625.86809,286.36752 623.37512,286.51059 621.25464,287.9545 C618.94527,289.37721 618.08856,291.48876 618.08856,294.2759 C618.08856,297.59028 620.04941,299.8449 622.702,300.81987 C624.92624,301.59084 627.31543,301.81603 630.9072,301.81603 L642.25722,302.12071 C653.703,302.39889 661.55967,304.37003 666.33539,309.1866 Z M750,285.66718 L711.57335,285.66718 C707.7368,285.66718 705.18797,285.81025 703.04088,287.25416 C700.81665,288.67687 699.95995,290.78843 699.95995,293.57558 C699.95995,296.88994 701.83831,299.14456 704.57071,300.11953 C706.79495,300.8905 709.18415,301.1157 712.6961,301.1157 L724.12327,301.42038 C735.65419,301.70387 743.35123,303.67765 748.04448,308.49157 C748.89852,309.16186 749.41202,309.91428 750,310.6667 L750,285.66718 Z" id="path13" fill="#FFFFFF"></path> </g> </g>`;
// let visa = `<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="visa" fill-rule="nonzero"> <rect id="Rectangle-1" fill="#0E4595" x="0" y="0" width="750" height="471" rx="40"></rect> <polygon id="Shape" fill="#FFFFFF" points="278.1975 334.2275 311.5585 138.4655 364.9175 138.4655 331.5335 334.2275"></polygon> <path d="M524.3075,142.6875 C513.7355,138.7215 497.1715,134.4655 476.4845,134.4655 C423.7605,134.4655 386.6205,161.0165 386.3045,199.0695 C386.0075,227.1985 412.8185,242.8905 433.0585,252.2545 C453.8275,261.8495 460.8105,267.9695 460.7115,276.5375 C460.5795,289.6595 444.1255,295.6545 428.7885,295.6545 C407.4315,295.6545 396.0855,292.6875 378.5625,285.3785 L371.6865,282.2665 L364.1975,326.0905 C376.6605,331.5545 399.7065,336.2895 423.6355,336.5345 C479.7245,336.5345 516.1365,310.2875 516.5505,269.6525 C516.7515,247.3835 502.5355,230.4355 471.7515,216.4645 C453.1005,207.4085 441.6785,201.3655 441.7995,192.1955 C441.7995,184.0585 451.4675,175.3575 472.3565,175.3575 C489.8055,175.0865 502.4445,178.8915 512.2925,182.8575 L517.0745,185.1165 L524.3075,142.6875" id="path13" fill="#FFFFFF"></path> <path d="M661.6145,138.4655 L620.3835,138.4655 C607.6105,138.4655 598.0525,141.9515 592.4425,154.6995 L513.1975,334.1025 L569.2285,334.1025 C569.2285,334.1025 578.3905,309.9805 580.4625,304.6845 C586.5855,304.6845 641.0165,304.7685 648.7985,304.7685 C650.3945,311.6215 655.2905,334.1025 655.2905,334.1025 L704.8025,334.1025 L661.6145,138.4655 Z M596.1975,264.8725 C600.6105,253.5935 617.4565,210.1495 617.4565,210.1495 C617.1415,210.6705 621.8365,198.8155 624.5315,191.4655 L628.1385,208.3435 C628.1385,208.3435 638.3555,255.0725 640.4905,264.8715 L596.1975,264.8715 L596.1975,264.8725 Z" id="Path" fill="#FFFFFF"></path> <path d="M232.9025,138.4655 L180.6625,271.9605 L175.0965,244.8315 C165.3715,213.5575 135.0715,179.6755 101.1975,162.7125 L148.9645,333.9155 L205.4195,333.8505 L289.4235,138.4655 L232.9025,138.4655" id="path16" fill="#FFFFFF"></path> <path d="M131.9195,138.4655 L45.8785,138.4655 L45.1975,142.5385 C112.1365,158.7425 156.4295,197.9015 174.8155,244.9525 L156.1065,154.9925 C152.8765,142.5965 143.5085,138.8975 131.9195,138.4655" id="path18" fill="#F2AE14"></path> </g> </g>`;
// let diners = `<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="diners" fill-rule="nonzero"> <rect id="rectangle" fill="#0079BE" x="0" y="0" width="750" height="471" rx="40"></rect> <path d="M584.933911,237.947339 C584.933911,138.53154 501.952976,69.8140806 411.038924,69.8471464 L332.79674,69.8471464 C240.793699,69.8140806 165.066089,138.552041 165.066089,237.947339 C165.066089,328.877778 240.793699,403.587432 332.79674,403.150963 L411.038924,403.150963 C501.952976,403.586771 584.933911,328.857939 584.933911,237.947339 Z" id="Shape-path" fill="#FFFFFF"></path> <path d="M333.280302,83.9308394 C249.210378,83.9572921 181.085889,152.238282 181.066089,236.510581 C181.085889,320.768331 249.209719,389.042708 333.280302,389.069161 C417.370025,389.042708 485.508375,320.768331 485.520254,236.510581 C485.507715,152.238282 417.370025,83.9572921 333.280302,83.9308394 Z" id="Shape-path" fill="#0079BE"></path> <path d="M237.066089,236.09774 C237.145288,194.917524 262.812421,159.801587 299.006443,145.847134 L299.006443,326.327183 C262.812421,312.380667 237.144628,277.283907 237.066089,236.09774 Z M368.066089,326.372814 L368.066089,145.847134 C404.273312,159.767859 429.980043,194.903637 430.046043,236.103692 C429.980043,277.316312 404.273312,312.425636 368.066089,326.372814 Z" id="Path" fill="#FFFFFF"></path> </g> </g>`;
// let discover = `<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="discover" fill-rule="nonzero"> <path d="M52.8771038,0 C23.6793894,0 -4.55476115e-15,23.1545612 0,51.7102589 L0,419.289737 C0,447.850829 23.671801,471 52.8771038,471 L697.122894,471 C726.320615,471 750,447.845433 750,419.289737 L750,252.475404 L750,51.7102589 C750,23.1491677 726.328202,-4.4533018e-15 697.122894,0 L52.8771038,0 Z" id="Shape" fill="#4D4D4D"></path> <path d="M314.569558,152.198414 C323.06625,152.198414 330.192577,153.9309 338.865308,158.110254 L338.865308,180.197198 C330.650269,172.563549 323.523875,169.368926 314.100058,169.368926 C295.577115,169.368926 281.009615,183.944539 281.009615,202.424438 C281.009615,221.911997 295.126279,235.620254 315.018404,235.620254 C323.972798,235.620254 330.967135,232.591128 338.865308,225.080186 L338.865308,247.178497 C329.883538,251.197965 322.604577,252.785079 314.100058,252.785079 C284.025202,252.785079 260.655798,230.849701 260.655798,202.560947 C260.655798,174.577103 284.647269,152.198414 314.569558,152.198414 Z M221.191404,152.807038 C232.293048,152.807038 242.451462,156.418802 250.944635,163.479831 L240.609981,176.340655 C235.465019,170.859895 230.599394,168.547945 224.682615,168.547945 C216.169885,168.547936 209.970327,173.154235 209.970327,179.215049 C209.970327,184.413218 213.450798,187.164422 225.302356,191.332621 C247.768529,199.141028 254.426462,206.064868 254.426462,221.354473 C254.426462,239.986821 240.026981,252.955721 219.503077,252.955721 C204.47426,252.955721 193.548154,247.330452 184.44824,234.636213 L197.205529,222.956624 C201.754702,231.315341 209.342452,235.792799 218.763144,235.792799 C227.573971,235.792799 234.097058,230.014421 234.097058,222.217168 C234.097058,218.175392 232.121269,214.709536 228.175702,212.259183 C226.189231,211.099073 222.254519,209.369382 214.522615,206.777734 C195.973058,200.43062 189.609,193.646221 189.609,180.386799 C189.609,164.636126 203.275981,152.807038 221.191404,152.807038 Z M446.886269,154.485036 L468.460788,154.485036 L495.464615,219.130417 L522.815885,154.485036 L544.22701,154.485036 L500.482644,253.198414 L489.855019,253.198414 L446.886269,154.485036 Z M64.8212135,154.632923 L93.811974,154.632923 C125.842394,154.632923 148.170827,174.418596 148.170827,202.822609 C148.170827,216.985567 141.340038,230.679389 129.788913,239.766893 C120.068962,247.437722 108.994192,250.877669 93.6598558,250.877669 L64.8212135,250.877669 L64.8212135,154.632923 Z M157.25849,154.632923 L177.009462,154.632923 L177.009462,250.877669 L157.25849,250.877669 L157.25849,154.632923 Z M553.156923,154.632923 L609.168423,154.632923 L609.168423,170.940741 L572.892875,170.940741 L572.892875,192.303392 L607.831279,192.303392 L607.831279,208.603619 L572.892875,208.603619 L572.892875,234.583122 L609.168423,234.583122 L609.168423,250.877669 L553.156923,250.877669 L553.156923,154.632923 Z M622.250596,154.632923 L651.534327,154.632923 C674.313452,154.632923 687.366663,165.030007 687.366663,183.048838 C687.366663,197.784414 679.179923,207.454847 664.302885,210.332805 L696.176385,250.877669 L671.888144,250.877669 L644.551904,212.213673 L641.977163,212.213673 L641.977163,250.877669 L622.250596,250.877669 L622.250596,154.632923 Z M641.977163,169.791736 L641.977163,198.939525 L647.748269,198.939525 C660.360308,198.939525 667.044769,193.734406 667.044769,184.05942 C667.044769,174.693052 660.359106,169.791736 648.060019,169.791736 L641.977163,169.791736 Z M84.5571663,170.940741 L84.5571663,234.583122 L89.8568962,234.583122 C102.619538,234.583122 110.679663,232.259105 116.885144,226.934514 C123.71575,221.152572 127.824519,211.920423 127.824519,202.684197 C127.824519,193.462833 123.71575,184.505917 116.885144,178.723975 C110.361615,173.113074 102.619538,170.940741 89.8568962,170.940741 L84.5571663,170.940741 Z" id="Shape" fill="#FFFFFF"></path> <path d="M399.164288,151.559424 C428.914452,151.559424 453.031096,173.727429 453.031096,201.112187 L453.031096,201.143399 C453.031096,228.528147 428.914452,250.727374 399.164288,250.727374 C369.414125,250.727374 345.297481,228.528147 345.297481,201.143399 L345.297481,201.112187 C345.297481,173.727429 369.414125,151.559424 399.164288,151.559424 Z M749.982612,271.093939 C724.934651,288.327133 537.408564,411.490963 212.719237,470.985071 L697.105507,470.985071 C726.303228,470.985071 749.982612,447.830504 749.982612,419.274807 L749.982612,271.093939 Z" id="Shape" fill="#F47216"></path> </g> </g>`;
// let jcb = `<defs> <linearGradient x1="0.031607858%" y1="49.9998574%" x2="99.9743153%" y2="49.9998574%" id="linearGradient-1"> <stop stop-color="#007B40" offset="0%"></stop> <stop stop-color="#55B330" offset="100%"></stop> </linearGradient> <linearGradient x1="0.471693172%" y1="49.999826%" x2="99.9860086%" y2="49.999826%" id="linearGradient-2"> <stop stop-color="#1D2970" offset="0%"></stop> <stop stop-color="#006DBA" offset="100%"></stop> </linearGradient> <linearGradient x1="0.113880772%" y1="50.0008964%" x2="99.9860003%" y2="50.0008964%" id="linearGradient-3"> <stop stop-color="#6E2B2F" offset="0%"></stop> <stop stop-color="#E30138" offset="100%"></stop> </linearGradient> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="jcb" fill-rule="nonzero"> <rect id="Rectangle-1" fill="#0E4C96" x="0" y="0" width="750" height="471" rx="40"></rect> <path d="M617.243183,346.766281 C617.243183,388.380887 583.514892,422.125974 541.88349,422.125974 L132.756823,422.125974 L132.756823,124.244916 C132.756823,82.6186826 166.489851,48.8744567 208.121683,48.8744567 L617.243183,48.874026 L617.242752,346.766281 L617.243183,346.766281 Z" id="path3494" fill="#FFFFFF"></path> <path d="M483.858874,242.044797 C495.542699,242.298285 507.296188,241.528806 518.936004,242.444883 C530.723244,244.645678 533.563915,262.487874 523.09234,268.332511 C515.950746,272.182115 507.459496,269.764696 499.713328,270.446208 L483.858874,270.446208 L483.858874,242.044797 Z M525.691826,209.900487 C528.288491,219.064679 519.453903,227.292118 510.625917,226.030566 L483.858874,226.030566 C484.043758,217.388441 483.491345,208.008973 484.131053,199.821663 C494.854942,200.123386 505.679576,199.205849 516.340394,200.301853 C520.921799,201.451558 524.753935,205.217712 525.691826,209.900487 Z M590.120412,73.9972254 C590.617872,91.498454 590.191471,109.92365 590.33359,127.780192 C590.299137,200.376358 590.405942,272.974174 590.278896,345.569303 C589.81042,372.776592 565.696524,396.413678 538.678749,396.956694 C511.63292,397.068451 484.584297,396.972628 457.537396,397.004497 L457.537396,287.253291 C487.007,287.099803 516.49604,287.561 545.953521,287.021594 C559.62072,286.162769 574.586027,277.145695 575.22328,262.107374 C576.833661,247.005483 562.592128,236.557185 549.071096,234.905684 C543.872773,234.770542 544.027132,233.390846 549.071096,232.788972 C561.96307,230.002483 572.090675,216.655787 568.296786,203.290229 C565.06052,189.232374 549.523839,183.79142 536.600366,183.817768 C510.248548,183.638612 483.891299,183.792359 457.537396,183.74111 C457.708585,163.252408 457.182916,142.740653 457.82271,122.267364 C459.910361,95.5513766 484.628603,73.5195319 511.269759,73.997656 C537.553166,73.9973692 563.837737,73.9982301 590.120412,73.9972254 Z" id="path3496" fill="url(#linearGradient-1)"></path> <path d="M159.740429,125.040498 C160.413689,97.8766592 184.628619,74.4290299 211.614797,74.0325398 C238.559493,73.9499686 265.506204,74.0209119 292.451671,73.9972254 C292.37764,164.882488 292.599905,255.773672 292.340301,346.655222 C291.302298,373.488802 267.350548,396.488661 240.661356,396.962292 C213.665015,397.060957 186.666275,396.976074 159.669012,397.004497 L159.669012,283.550875 C185.891623,289.745491 213.391138,292.382518 240.142406,288.272242 C256.134509,285.697368 273.629935,277.848026 279.044261,261.257567 C283.030122,247.066267 280.785723,232.131602 281.378027,217.566465 L281.378027,183.741541 L235.081246,183.741541 C234.873106,206.112145 235.507258,228.522447 234.746146,250.867107 C233.49785,264.601214 219.900147,273.326996 206.946428,272.861801 C190.879747,273.030535 159.04755,261.221796 159.04755,261.221796 C158.967492,219.3048 159.514314,166.814385 159.740429,125.040498 Z" id="path3498" fill="url(#linearGradient-2)"></path> <path d="M309.719995,197.390136 C307.285788,197.90738 309.229141,189.089459 308.606298,185.743964 C308.772233,164.593637 308.260045,143.420951 308.889718,122.285827 C310.972541,95.4570827 335.881262,73.3701105 362.628748,73.997656 L441.39456,73.997656 C441.320658,164.882346 441.542493,255.77294 441.283406,346.653934 C440.244412,373.488027 416.291344,396.487102 389.602087,396.962292 C362.604605,397.061991 335.604707,396.976504 308.606298,397.004928 L308.606298,272.707624 C327.04641,287.835846 352.105738,290.192248 375.077953,290.233484 C392.39501,290.227455 409.611861,287.557865 426.428143,283.562934 L426.428143,260.790297 C407.474658,270.236609 385.194808,276.235815 364.184745,270.807966 C349.529051,267.157367 338.89089,252.996683 339.128513,237.872204 C337.43001,222.143684 346.652631,205.536885 362.110237,200.860855 C381.300923,194.852545 402.217787,199.448454 420.206344,207.258795 C424.060526,209.27695 427.97066,211.780342 426.428143,205.338044 L426.428143,187.438358 C396.343581,180.280951 364.326644,177.646405 334.099438,185.433619 C325.351193,187.901774 316.82819,191.644647 309.719995,197.390136 Z" id="path3500" fill="url(#linearGradient-3)"></path> </g> </g>`;
// let maestro = `<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="maestro" fill-rule="nonzero"> <rect id="Rectangle-1" fill="#000000" x="0" y="0" width="750" height="471" rx="40"></rect> <g id="Group" transform="translate(133.000000, 48.000000)"> <path d="M146.8,373.77 L146.8,349 C146.8,339.65 140.8,333.36 131.25,333.28 C126.25,333.2 120.99,334.77 117.35,340.28 C114.62,335.9 110.35,333.28 104.28,333.28 C99.6528149,333.047729 95.2479974,335.280568 92.7,339.15 L92.7,334.27 L84.09,334.27 L84.09,373.82 L92.78,373.82 L92.78,351.85 C92.78,344.98 96.59,341.34 102.46,341.34 C108.17,341.34 111.07,345.06 111.07,351.76 L111.07,373.76 L119.76,373.76 L119.76,351.85 C119.76,344.98 123.76,341.34 129.44,341.34 C135.31,341.34 138.13,345.06 138.13,351.76 L138.13,373.76 L146.8,373.77 Z M195.28,354 L195.28,334.23 L186.67,334.23 L186.67,339 C183.94,335.44 179.8,333.21 174.18,333.21 C163.09,333.21 154.41,341.9 154.41,353.98 C154.41,366.06 163.1,374.75 174.18,374.75 C179.81,374.75 183.94,372.52 186.67,368.96 L186.67,373.76 L195.28,373.76 L195.28,354 Z M163.28,354 C163.28,347.05 167.83,341.34 175.28,341.34 C182.4,341.34 187.19,346.8 187.19,354 C187.19,361.2 182.39,366.66 175.28,366.66 C167.81,366.66 163.26,360.95 163.26,354 L163.28,354 Z M379.4,333.19 C382.306602,333.161358 385.190743,333.701498 387.89,334.78 C390.404719,335.784654 392.697997,337.272736 394.64,339.16 C396.553063,341.035758 398.069744,343.276773 399.1,345.75 C401.246003,351.047587 401.246003,356.972413 399.1,362.27 C398.069744,364.743227 396.553063,366.984242 394.64,368.86 C392.698322,370.747671 390.404958,372.235809 387.89,373.24 C382.423165,375.368264 376.356835,375.368264 370.89,373.24 C368.379501,372.23863 366.092168,370.749994 364.16,368.86 C362.258485,366.978798 360.749319,364.738843 359.72,362.27 C357.573997,356.972413 357.573997,351.047587 359.72,345.75 C360.749788,343.28141 362.258895,341.041542 364.16,339.16 C366.092334,337.270213 368.379623,335.781606 370.89,334.78 C373.595493,333.69893 376.486681,333.158743 379.4,333.19 Z M379.4,341.33 C377.718221,341.315441 376.049964,341.631425 374.49,342.26 C373.019746,342.850363 371.685751,343.735156 370.57,344.86 C369.447092,346.008077 368.563336,347.367702 367.97,348.86 C366.704271,352.169784 366.704271,355.830216 367.97,359.14 C368.562861,360.632544 369.446675,361.992258 370.57,363.14 C371.685751,364.264844 373.019746,365.149637 374.49,365.74 C377.649488,366.979283 381.160512,366.979283 384.32,365.74 C385.794284,365.146098 387.134154,364.26192 388.26,363.14 C389.392829,361.995929 390.283848,360.635594 390.88,359.14 C392.145729,355.830216 392.145729,352.169784 390.88,348.86 C390.283848,347.364406 389.392829,346.004071 388.26,344.86 C387.134154,343.73808 385.794284,342.853902 384.32,342.26 C382.757613,341.626714 381.085807,341.307304 379.4,341.32 L379.4,341.33 Z M242.1,354 C242.02,341.67 234.41,333.23 223.32,333.23 C211.74,333.23 203.63,341.67 203.63,354 C203.63,366.58 212.07,374.77 223.9,374.77 C229.9,374.77 235.32,373.28 240.12,369.23 L235.9,362.86 C232.633262,365.479648 228.586894,366.936341 224.4,367 C218.86,367 213.81,364.44 212.57,357.32 L241.94,357.32 C242,356.23 242.1,355.16 242.1,354 Z M212.65,350.53 C213.56,344.82 217.03,340.93 223.16,340.93 C228.7,340.93 232.26,344.4 233.16,350.53 L212.65,350.53 Z M278.34,344.33 C274.582803,342.165547 270.335565,340.995319 266,340.93 C261.28,340.93 258.47,342.67 258.47,345.56 C258.47,348.21 261.47,348.95 265.17,349.45 L269.22,350.03 C277.83,351.27 283.04,354.91 283.04,361.86 C283.04,369.39 276.42,374.77 265.04,374.77 C258.59,374.77 252.63,373.11 247.91,369.64 L251.96,362.94 C255.757785,365.757702 260.39304,367.215905 265.12,367.08 C270.99,367.08 274.12,365.34 274.12,362.28 C274.12,360.05 271.89,358.81 267.17,358.14 L263.12,357.56 C254.27,356.32 249.47,352.35 249.47,345.89 C249.47,338.03 255.92,333.23 265.93,333.23 C272.22,333.23 277.93,334.64 282.06,337.37 L278.34,344.33 Z M319.69,342.1 L305.62,342.1 L305.62,360 C305.62,364 307.03,366.62 311.33,366.62 C314.014365,366.531754 316.632562,365.76453 318.94,364.39 L321.42,371.75 C318.192475,373.761602 314.463066,374.822196 310.66,374.81 C300.48,374.81 296.93,369.35 296.93,360.16 L296.93,342.16 L288.93,342.16 L288.93,334.3 L296.93,334.3 L296.93,322.3 L305.62,322.3 L305.62,334.3 L319.68,334.3 L319.69,342.1 Z M349.47,333.25 C351.556514,333.260012 353.62609,333.625232 355.59,334.33 L352.94,342.44 C351.229904,341.756022 349.401653,341.416198 347.56,341.44 C341.93,341.44 339.12,345.08 339.12,351.62 L339.12,373.79 L330.52,373.79 L330.52,334.23 L339,334.23 L339,339 C341.149726,335.306198 345.148028,333.084492 349.42,333.21 L349.47,333.25 Z" id="Shape" fill="#FFFFFF"></path> <g id="_Group_"> <rect id="Rectangle-path" fill="#7673C0" x="176.95" y="32.39" width="130.5" height="234.51"></rect> <path d="M185.24,149.64 C185.20514,103.86954 206.225386,60.6268374 242.24,32.38 C181.092968,-15.6818249 93.2777189,-8.68578574 40.5116372,48.4512353 C-12.2544445,105.588256 -12.2544445,193.681744 40.5116372,250.818765 C93.2777189,307.955786 181.092968,314.951825 242.24,266.89 C206.228151,238.645328 185.208215,195.406951 185.24,149.64 Z" id="_Path_" fill="#EB001B"></path> <path d="M483.5,149.64 C483.501034,206.73874 450.90156,258.826356 399.545558,283.782862 C348.189556,308.739368 287.092343,302.183759 242.2,266.9 C278.166584,238.620187 299.164715,195.398065 299.164715,149.645 C299.164715,103.891935 278.166584,60.669813 242.2,32.39 C287.090924,-2.89264477 348.185845,-9.44904288 399.541061,15.5049525 C450.896277,40.4589479 483.497206,92.543064 483.5,149.64 Z" id="Shape" fill="#00A1DF"></path> </g> </g> </g> </g>`;
// let mastercard = `<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="mastercard" fill-rule="nonzero"> <rect id="Rectangle-1" fill="#000000" x="0" y="0" width="750" height="471" rx="40"></rect> <g id="Group" transform="translate(133.000000, 48.000000)"> <path d="M88.13,373.67 L88.13,348.82 C88.13,339.29 82.33,333.08 72.81,333.08 C67.81,333.08 62.46,334.74 58.73,340.08 C55.83,335.52 51.73,333.08 45.48,333.08 C40.7599149,332.876008 36.2525337,335.054575 33.48,338.88 L33.48,333.88 L25.61,333.88 L25.61,373.64 L33.48,373.64 L33.48,350.89 C33.48,343.89 37.62,340.54 43.42,340.54 C49.22,340.54 52.53,344.27 52.53,350.89 L52.53,373.67 L60.4,373.67 L60.4,350.89 C60.4,343.89 64.54,340.54 70.34,340.54 C76.14,340.54 79.45,344.27 79.45,350.89 L79.45,373.67 L88.13,373.67 Z M217.35,334.32 L202.85,334.32 L202.85,322.32 L195,322.32 L195,334.32 L186.72,334.32 L186.72,341.32 L195,341.32 L195,360 C195,369.11 198.31,374.5 208.25,374.5 C212.015784,374.421483 215.705651,373.426077 219,371.6 L216.51,364.6 C214.275685,365.996557 211.684475,366.715565 209.05,366.67 C204.91,366.67 202.84,364.18 202.84,360.04 L202.84,341 L217.34,341 L217.34,334.37 L217.35,334.32 Z M291.07,333.08 C286.709355,332.982846 282.618836,335.185726 280.3,338.88 L280.3,333.88 L272.43,333.88 L272.43,373.64 L280.3,373.64 L280.3,351.31 C280.3,344.68 283.61,340.54 289,340.54 C290.818809,340.613783 292.62352,340.892205 294.38,341.37 L296.87,333.91 C294.971013,333.43126 293.02704,333.153071 291.07,333.08 Z M179.66,337.22 C175.52,334.32 169.72,333.08 163.51,333.08 C153.57,333.08 147.36,337.64 147.36,345.51 C147.36,352.14 151.92,355.86 160.61,357.11 L164.75,357.52 C169.31,358.35 172.21,360.01 172.21,362.08 C172.21,364.98 168.9,367.08 162.68,367.08 C157.930627,367.177716 153.278889,365.724267 149.43,362.94 L145.29,369.15 C151.09,373.29 158.13,374.15 162.29,374.15 C173.89,374.15 180.1,368.77 180.1,361.31 C180.1,354.31 175.1,350.96 166.43,349.71 L162.29,349.3 C158.56,348.89 155.29,347.64 155.29,345.16 C155.29,342.26 158.6,340.16 163.16,340.16 C168.16,340.16 173.1,342.23 175.59,343.47 L179.66,337.22 Z M299.77,353.79 C299.77,365.79 307.64,374.5 320.48,374.5 C326.28,374.5 330.42,373.26 334.56,369.94 L330.42,363.73 C327.488758,366.10388 323.841703,367.41823 320.07,367.46 C313.07,367.46 307.64,362.08 307.64,354.21 C307.64,346.34 313,341 320.07,341 C323.841703,341.04177 327.488758,342.35612 330.42,344.73 L334.56,338.52 C330.42,335.21 326.28,333.96 320.48,333.96 C308.05,333.13 299.77,341.83 299.77,353.84 L299.77,353.79 Z M244.27,333.08 C232.67,333.08 224.8,341.36 224.8,353.79 C224.8,366.22 233.08,374.5 245.09,374.5 C250.932775,374.623408 256.638486,372.722682 261.24,369.12 L257.1,363.32 C253.772132,365.898743 249.708598,367.349004 245.5,367.46 C240.12,367.46 234.32,364.15 233.5,357.11 L262.91,357.11 L262.91,353.8 C262.91,341.37 255.45,333.09 244.27,333.09 L244.27,333.08 Z M243.86,340.54 C249.66,340.54 253.8,344.27 254.21,350.48 L232.68,350.48 C233.92,344.68 237.68,340.54 243.86,340.54 Z M136.59,353.79 L136.59,333.91 L128.72,333.91 L128.72,338.91 C125.82,335.18 121.72,333.11 115.88,333.11 C104.7,333.11 96.41,341.81 96.41,353.82 C96.41,365.83 104.69,374.53 115.88,374.53 C121.68,374.53 125.82,372.46 128.72,368.73 L128.72,373.73 L136.59,373.73 L136.59,353.79 Z M104.7,353.79 C104.7,346.33 109.26,340.54 117.13,340.54 C124.59,340.54 129.13,346.34 129.13,353.79 C129.13,361.66 124.13,367.04 117.13,367.04 C109.26,367.45 104.7,361.24 104.7,353.79 Z M410.78,333.08 C406.419355,332.982846 402.328836,335.185726 400.01,338.88 L400.01,333.88 L392.14,333.88 L392.14,373.64 L400,373.64 L400,351.31 C400,344.68 403.31,340.54 408.7,340.54 C410.518809,340.613783 412.32352,340.892205 414.08,341.37 L416.57,333.91 C414.671013,333.43126 412.72704,333.153071 410.77,333.08 L410.78,333.08 Z M380.13,353.79 L380.13,333.91 L372.26,333.91 L372.26,338.91 C369.36,335.18 365.26,333.11 359.42,333.11 C348.24,333.11 339.95,341.81 339.95,353.82 C339.95,365.83 348.23,374.53 359.42,374.53 C365.22,374.53 369.36,372.46 372.26,368.73 L372.26,373.73 L380.13,373.73 L380.13,353.79 Z M348.24,353.79 C348.24,346.33 352.8,340.54 360.67,340.54 C368.13,340.54 372.67,346.34 372.67,353.79 C372.67,361.66 367.67,367.04 360.67,367.04 C352.8,367.45 348.24,361.24 348.24,353.79 Z M460.07,353.79 L460.07,318.17 L452.2,318.17 L452.2,338.88 C449.3,335.15 445.2,333.08 439.36,333.08 C428.18,333.08 419.89,341.78 419.89,353.79 C419.89,365.8 428.17,374.5 439.36,374.5 C445.16,374.5 449.3,372.43 452.2,368.7 L452.2,373.7 L460.07,373.7 L460.07,353.79 Z M428.18,353.79 C428.18,346.33 432.74,340.54 440.61,340.54 C448.07,340.54 452.61,346.34 452.61,353.79 C452.61,361.66 447.61,367.04 440.61,367.04 C432.73,367.46 428.17,361.25 428.17,353.79 L428.18,353.79 Z" id="Shape" fill="#FFFFFF"></path> <g> <rect id="Rectangle-path" fill="#FF5F00" x="170.55" y="32.39" width="143.72" height="234.42"></rect> <path d="M185.05,149.6 C185.05997,103.912554 205.96046,60.7376085 241.79,32.39 C180.662018,-15.6713968 92.8620037,-8.68523415 40.103462,48.4380037 C-12.6550796,105.561241 -12.6550796,193.638759 40.103462,250.761996 C92.8620037,307.885234 180.662018,314.871397 241.79,266.81 C205.96046,238.462391 185.05997,195.287446 185.05,149.6 Z" id="Shape" fill="#EB001B"></path> <path d="M483.26,149.6 C483.30134,206.646679 450.756789,258.706022 399.455617,283.656273 C348.154445,308.606523 287.109181,302.064451 242.26,266.81 C278.098424,238.46936 299.001593,195.290092 299.001593,149.6 C299.001593,103.909908 278.098424,60.7306402 242.26,32.39 C287.109181,-2.86445052 348.154445,-9.40652324 399.455617,15.5437274 C450.756789,40.493978 483.30134,92.5533211 483.26,149.6 Z" id="Shape" fill="#F79E1B"></path> </g> </g> </g> </g>`;
// let unionpay = `<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="unionpay" fill-rule="nonzero"> <rect id="Rectangle-path" fill="#FFFFFF" x="0" y="0" width="750" height="471" rx="40"></rect> <path d="M201.809581,55 L344.203266,55 C364.072152,55 376.490206,71.4063861 371.833436,91.4702467 L305.500331,378.94775 C300.843561,399.011611 280.871191,415.417997 261.002305,415.417997 L118.60862,415.417997 C98.7397339,415.417997 86.32168,399.011611 90.9784502,378.94775 L157.311555,91.4702467 C161.968325,71.3018868 181.837211,55 201.706097,55 L201.809581,55 Z" id="Shape" fill="#D10429"></path> <path d="M331.750074,55 L495.564902,55 C515.433788,55 506.430699,71.4063861 501.773929,91.4702467 L435.440824,378.94775 C430.784054,399.011611 432.232827,415.417997 412.363941,415.417997 L248.549113,415.417997 C228.576743,415.417997 216.262173,399.011611 221.022427,378.94775 L287.355531,91.4702467 C292.012302,71.3018868 311.881188,55 331.853558,55 L331.750074,55 Z" id="Shape" fill="#022E64"></path> <path d="M489.814981,55 L632.208666,55 C652.077552,55 664.495606,71.4063861 659.838836,91.4702467 L593.505731,378.94775 C588.848961,399.011611 568.876591,415.417997 549.007705,415.417997 L406.61402,415.417997 C386.64165,415.417997 374.32708,399.011611 378.98385,378.94775 L445.316955,91.4702467 C449.973725,71.3018868 469.842611,55 489.711498,55 L489.814981,55 Z" id="Shape" fill="#076F74"></path> <path d="M465.904754,326.014514 L479.357645,326.014514 L483.186545,312.952104 L469.837137,312.952104 L465.904754,326.014514 Z M476.667067,290.066763 L472.010297,305.532656 C472.010297,305.532656 477.081002,302.920174 479.875064,302.08418 C482.669126,301.457184 486.808478,300.934688 486.808478,300.934688 L490.016475,290.171263 L476.563583,290.171263 L476.667067,290.066763 Z M483.393513,267.912917 L478.94371,282.751814 C478.94371,282.751814 483.910932,280.45283 486.704994,279.721335 C489.499056,278.98984 493.638407,278.780842 493.638407,278.780842 L496.846405,268.017417 L483.496997,268.017417 L483.393513,267.912917 Z M513.093359,267.912917 L495.708083,325.910015 L500.364853,325.910015 L496.742921,337.927431 L492.086151,337.927431 L490.947829,341.584906 L474.390424,341.584906 L475.528745,337.927431 L442,337.927431 L445.311481,326.850508 L448.726446,326.850508 L466.318689,267.912917 L469.837137,256 L486.704994,256 L484.94577,261.956459 C484.94577,261.956459 489.395572,258.716981 493.741891,257.567489 C497.984726,256.417997 522.406899,256 522.406899,256 L518.784967,267.808418 L512.989875,267.808418 L513.093359,267.912917 Z" id="Shape" fill="#FEFEFE"></path> <path d="M520,256 L538.006178,256 L538.213146,262.792453 C538.109662,263.941945 539.041016,264.464441 541.214175,264.464441 L544.836108,264.464441 L541.524627,275.645864 L531.797151,275.645864 C523.414965,276.272859 520.206968,272.615385 520.413935,268.539913 L520.103484,256.104499 L520,256 Z M522.216235,309.20029 L505.037927,309.20029 L507.935473,299.272859 L527.597391,299.272859 L530.391454,290.181422 L511.039986,290.181422 L514.351467,279 L568.163034,279 L564.851553,290.181422 L546.741891,290.181422 L543.947829,299.272859 L562.057491,299.272859 L559.056461,309.20029 L539.498026,309.20029 L535.979578,313.380261 L543.947829,313.380261 L545.914021,325.920174 C546.120989,327.174165 546.120989,328.01016 546.534924,328.532656 C546.948859,328.950653 549.328986,329.159652 550.674275,329.159652 L553.054402,329.159652 L549.328986,341.386067 L543.223443,341.386067 C542.292089,341.386067 540.843316,341.281567 538.877124,341.281567 C537.014416,341.072569 535.77261,340.027576 534.530805,339.400581 C533.392483,338.878084 531.736743,337.519594 531.322808,335.11611 L529.4601,322.576197 L520.560494,334.907112 C517.766432,338.773585 513.937532,341.804064 507.418054,341.804064 L495,341.804064 L498.311481,330.936139 L503.071735,330.936139 C504.417024,330.936139 505.65883,330.413643 506.590184,329.891147 C507.521538,329.473149 508.349408,329.055152 509.177278,327.696662 L522.216235,309.20029 Z M334.31354,282 L379.742921,282 L376.43144,292.972424 L358.321778,292.972424 L355.527716,302.272859 L374.154797,302.272859 L370.739832,313.558781 L352.216235,313.558781 L347.662948,328.711176 C347.145529,330.383164 352.112751,330.592163 353.871975,330.592163 L363.185516,329.338171 L359.4601,341.878084 L338.556375,341.878084 C336.900635,341.878084 335.65883,341.669086 333.796122,341.251089 C332.036897,340.833091 331.209027,339.997097 330.48464,338.847605 C329.760254,337.593614 328.518449,336.65312 329.346319,333.936139 L335.348378,313.872279 L325,313.872279 L328.414965,302.377358 L338.763343,302.377358 L341.557405,293.076923 L331.209027,293.076923 L334.520508,282.104499 L334.31354,282 Z M365.700875,262.165457 L384.327956,262.165457 L380.912991,273.555878 L355.455981,273.555878 L352.661919,275.959361 C351.420113,277.108853 351.109662,276.690856 349.557405,277.526851 C348.108632,278.258345 345.107603,279.721335 341.175219,279.721335 L333,279.721335 L336.311481,268.748911 L338.795092,268.748911 C340.864767,268.748911 342.31354,268.539913 343.037927,268.121916 C343.865797,267.599419 344.797151,266.449927 345.728505,264.56894 L350.385275,256 L368.908872,256 L365.700875,262.269956 L365.700875,262.165457 Z M400.808726,280.975327 C400.808726,280.975327 405.879431,276.272859 414.572069,274.809869 C416.538261,274.391872 428.956314,274.600871 428.956314,274.600871 L430.819023,268.330914 L404.637626,268.330914 L400.808726,281.079826 L400.808726,280.975327 Z M425.437866,285.782293 L399.463436,285.782293 L397.91118,291.111756 L420.470644,291.111756 C423.161223,290.798258 423.678642,291.216255 423.885609,291.007257 L425.54135,285.782293 L425.437866,285.782293 Z M391.702153,256.104499 L407.535171,256.104499 L405.258528,264.150943 C405.258528,264.150943 410.22575,260.075472 413.744198,258.612482 C417.262647,257.358491 425.127414,256.104499 425.127414,256.104499 L450.791393,256 L441.995271,285.468795 C440.546498,290.484761 438.787274,293.724238 437.752436,295.291727 C436.821082,296.754717 435.68276,298.113208 433.406117,299.367199 C431.232958,300.516691 429.266766,301.248186 427.404058,301.352685 C425.748317,301.457184 423.057739,301.561684 419.53929,301.561684 L394.806666,301.561684 L387.873253,324.865022 C387.25235,327.164006 386.941899,328.313498 387.355834,328.940493 C387.666285,329.46299 388.597639,330.089985 389.735961,330.089985 L400.601758,329.044993 L396.876342,341.793904 L384.665256,341.793904 C380.732872,341.793904 377.93881,341.689405 375.972618,341.584906 C374.10991,341.375907 372.143718,341.584906 370.798429,340.539913 C369.660107,339.49492 367.900883,338.13643 368.004367,336.777939 C368.10785,335.523948 368.625269,333.433962 369.45314,330.507983 L391.702153,256.104499 Z" id="Shape" fill="#FEFEFE"></path> <path d="M437.840227,303 L436.391454,310.105951 C435.770551,312.300435 435.253132,313.972424 433.597391,315.435414 C431.838167,316.898403 429.871975,318.465893 425.111721,318.465893 L416.3156,318.88389 L416.212116,326.825835 C416.108632,329.020319 416.729535,328.811321 417.039986,329.229318 C417.453921,329.647315 417.764373,329.751814 418.178308,329.960813 L420.97237,329.751814 L429.354556,329.333817 L425.836108,341.037736 L416.212116,341.037736 C409.48567,341.037736 404.414965,340.828737 402.862708,339.574746 C401.206968,338.529753 401,337.275762 401,334.976778 L401.620903,303.835994 L417.039986,303.835994 L416.833019,310.21045 L420.558435,310.21045 C421.80024,310.21045 422.731594,310.105951 423.249013,309.792453 C423.766432,309.478955 424.076883,308.956459 424.283851,308.224964 L425.836108,303.208999 L437.94371,303.208999 L437.840227,303 Z M218.470396,147 C217.952978,149.507983 208.018534,195.592163 208.018534,195.592163 C205.845375,204.892598 204.293118,211.580552 199.118929,215.865022 C196.117899,218.373004 192.599451,219.522496 188.563583,219.522496 C182.044105,219.522496 178.318689,216.283019 177.697786,210.117562 L177.594302,208.027576 C177.594302,208.027576 179.560494,195.592163 179.560494,195.487663 C179.560494,195.487663 189.908872,153.478955 191.771581,147.940493 C191.875064,147.626996 191.875064,147.417997 191.875064,147.313498 C171.695727,147.522496 168.073794,147.313498 167.866827,147 C167.763343,147.417997 167.245924,150.030479 167.245924,150.030479 L156.690578,197.36865 L155.759224,201.339623 L154,214.506531 C154,218.373004 154.724386,221.612482 156.276643,224.224964 C161.140381,232.793904 174.903724,234.047896 182.665008,234.047896 C192.702935,234.047896 202.119959,231.853411 208.43247,227.986938 C219.505234,221.403483 222.40278,211.058055 224.886391,201.966618 L226.128196,197.264151 C226.128196,197.264151 236.787026,153.687954 238.649734,148.044993 C238.753218,147.731495 238.753218,147.522496 238.856702,147.417997 C224.162004,147.522496 219.919169,147.417997 218.470396,147.104499 L218.470396,147 Z M277.499056,233.622642 C270.358675,233.518142 267.771581,233.518142 259.389394,233.936139 L259.078943,233.309144 C259.803329,230.069666 260.6312,226.934688 261.252102,223.69521 L262.28694,219.306241 C263.839197,212.513788 265.28797,204.467344 265.494937,202.063861 C265.701905,200.600871 266.11584,196.943396 261.976489,196.943396 C260.217264,196.943396 258.45804,197.77939 256.595332,198.615385 C255.560494,202.272859 253.594302,212.513788 252.559465,217.111756 C250.489789,226.934688 250.386305,228.08418 249.454951,232.891147 L248.834048,233.518142 C241.4867,233.413643 238.899605,233.413643 230.413935,233.83164 L230,233.100145 C231.448773,227.248186 232.794062,221.396226 234.139351,215.544267 C237.6578,199.764877 238.589154,193.703919 239.520508,185.657475 L240.244894,185.239478 C248.523597,184.089985 250.489789,183.776488 259.492878,182 L260.217264,182.835994 L258.871975,187.851959 C260.424232,186.911466 261.873005,185.970972 263.425262,185.239478 C267.668097,183.149492 272.324867,182.522496 274.911962,182.522496 C278.844345,182.522496 283.190664,183.671988 284.949888,188.269956 C286.605629,192.345428 285.570791,197.361393 283.294148,207.288824 L282.155826,212.30479 C279.879183,223.381713 279.465248,225.367199 278.223443,232.891147 L277.395572,233.518142 L277.499056,233.622642 Z M306.558435,233.650218 C302.212116,233.650218 299.418054,233.545718 296.727476,233.650218 C294.036897,233.650218 291.449803,233.859216 287.413935,233.963716 L287.206968,233.650218 L287,233.232221 C288.138322,229.05225 288.655741,227.58926 289.276643,226.12627 C289.794062,224.66328 290.311481,223.20029 291.346319,218.91582 C292.588124,213.377358 293.415995,209.510885 293.933413,206.062409 C294.554316,202.822932 294.864767,200.001451 295.278703,196.761974 L295.589154,196.552975 L295.899605,196.239478 C300.245924,195.612482 302.936502,195.194485 305.730565,194.776488 C308.524627,194.358491 311.422173,193.835994 315.871975,193 L316.078943,193.417997 L316.182427,193.835994 C315.354556,197.28447 314.526686,200.732946 313.698816,204.181422 C312.870946,207.629898 312.043075,211.078374 311.318689,214.526851 C309.766432,221.8418 309.042046,224.558781 308.731594,226.544267 C308.317659,228.425254 308.214175,229.365747 307.593273,233.127721 L307.179338,233.441219 L306.765402,233.754717 L306.558435,233.650218 Z M352.499319,207.975327 C352.188868,209.856313 350.533127,216.857765 348.359968,219.783745 C346.807711,221.978229 345.048487,223.33672 342.978811,223.33672 C342.357909,223.33672 338.83946,223.33672 338.735976,218.007257 C338.735976,215.394775 339.253395,212.677794 339.874298,209.751814 C341.737006,201.287373 344.013649,194.285922 349.705257,194.285922 C354.15506,194.285922 354.465511,199.510885 352.499319,207.975327 Z M371.229884,208.811321 C373.713495,197.734398 371.747303,192.509434 369.367176,189.374456 C365.64176,184.567489 359.018798,183 352.188868,183 C348.049517,183 338.322041,183.417997 330.664241,190.523948 C325.179601,195.644412 322.592506,202.645864 321.143733,209.333817 C319.591476,216.12627 317.832252,228.352685 329.008501,232.950653 C332.423466,234.413643 337.390687,234.83164 340.598684,234.83164 C348.773903,234.83164 357.156089,232.532656 363.4686,225.844702 C368.332338,220.41074 370.505497,212.259797 371.333368,208.811321 L371.229884,208.811321 Z M545.661919,234.891147 C536.969281,234.786647 534.48567,234.786647 526.517419,235.204644 L526,234.577649 C528.173159,226.322206 530.346319,217.962264 532.312511,209.602322 C534.796122,198.734398 535.417024,194.13643 536.244894,187.761974 L536.865797,187.239478 C545.454951,185.985486 547.835078,185.671988 556.838167,184 L557.045135,184.731495 C555.389394,191.628447 553.837137,198.4209 552.181397,205.213353 C548.869916,219.529753 547.731594,226.844702 546.489789,234.36865 L545.661919,234.995646 L545.661919,234.891147 Z" id="Shape" fill="#FEFEFE"></path> <path d="M533.159909,209.373777 C532.745974,211.150265 531.090233,218.256216 528.917074,221.182195 C527.468301,223.272181 523.949852,224.630672 521.983661,224.630672 C521.362758,224.630672 517.947793,224.630672 517.740826,219.405708 C517.740826,216.793226 518.258244,214.076245 518.879147,211.150265 C520.741855,202.894822 523.018498,195.893371 528.710106,195.893371 C533.159909,195.893371 535.126101,201.013836 533.159909,209.478277 L533.159909,209.373777 Z M550.234733,210.209772 C552.718344,199.132849 542.576933,209.269278 541.024677,205.611804 C538.541066,199.864344 540.093322,188.369423 530.158879,184.50295 C526.329979,182.935461 517.32689,184.920947 509.66909,192.026898 C504.287934,197.042863 501.597355,204.044315 500.148582,210.732268 C498.596326,217.420222 496.837101,229.751136 507.909866,234.035606 C511.428315,235.603095 514.636312,236.021092 517.844309,235.812094 C529.020558,235.185098 537.506228,218.151717 543.818739,211.463763 C548.682476,206.1343 549.510347,213.449249 550.234733,210.209772 Z M420.292089,233.622642 C413.151708,233.518142 410.668097,233.518142 402.28591,233.936139 L401.975459,233.309144 C402.699846,230.069666 403.527716,226.934688 404.252102,223.69521 L405.183456,219.306241 C406.735713,212.513788 408.28797,204.467344 408.391454,202.063861 C408.598421,200.600871 409.012356,196.943396 404.976489,196.943396 C403.217264,196.943396 401.354556,197.77939 399.595332,198.615385 C398.663978,202.272859 396.594302,212.513788 395.559465,217.111756 C393.593273,226.934688 393.386305,228.08418 392.454951,232.891147 L391.834048,233.518142 C384.4867,233.413643 381.899605,233.413643 373.413935,233.83164 L373,233.100145 C374.448773,227.248186 375.794062,221.396226 377.139351,215.544267 C380.6578,199.764877 381.48567,193.703919 382.520508,185.657475 L383.141411,185.239478 C391.420113,184.089985 393.489789,183.776488 402.389394,182 L403.113781,182.835994 L401.871975,187.851959 C403.320748,186.911466 404.873005,185.970972 406.321778,185.239478 C410.564613,183.149492 415.221383,182.522496 417.808478,182.522496 C421.740862,182.522496 425.983697,183.671988 427.846405,188.269956 C429.502145,192.345428 428.363824,197.361393 426.08718,207.288824 L424.948859,212.30479 C422.568732,223.381713 422.25828,225.367199 421.016475,232.891147 L420.188605,233.518142 L420.292089,233.622642 Z M482.293118,147.104499 L476.291059,147.208999 C460.768492,147.417997 454.559465,147.313498 452.075854,147 C451.868886,148.149492 451.454951,150.134978 451.454951,150.134978 C451.454951,150.134978 445.866827,176.050798 445.866827,176.155298 C445.866827,176.155298 432.620903,231.330914 432,233.943396 C445.556375,233.734398 451.041016,233.734398 453.421143,234.047896 C453.938562,231.435414 457.043075,216.07402 457.146559,216.07402 C457.146559,216.07402 459.837137,204.788099 459.940621,204.370102 C459.940621,204.370102 460.768492,203.22061 461.596362,202.698113 L462.838167,202.698113 C474.531835,202.698113 487.674275,202.698113 498.022653,195.069666 C505.05955,189.844702 509.819804,182.007257 511.992964,172.602322 C512.510383,170.303338 512.924318,167.586357 512.924318,164.764877 C512.924318,161.107402 512.199931,157.554427 510.130256,154.732946 C504.852583,147.313498 494.400721,147.208999 482.293118,147.104499 Z M490.054402,174.169811 C488.812597,179.917271 485.08718,184.828737 480.326926,187.127721 C476.394543,189.113208 471.634289,189.322206 466.667067,189.322206 L463.45907,189.322206 L463.666037,188.068215 C463.666037,188.068215 469.564613,162.152395 469.564613,162.256894 L469.771581,160.898403 L469.875064,159.853411 L472.255191,160.062409 C472.255191,160.062409 484.466278,161.107402 484.673245,161.107402 C489.433499,162.988389 491.503175,167.795356 490.054402,174.169811 Z M617.261369,182.835994 L616.536983,182 C607.740862,183.776488 606.085121,184.089985 598.013386,185.239478 L597.392483,185.866473 C597.392483,185.970972 597.288999,186.075472 597.288999,186.28447 L597.288999,186.179971 C591.28694,200.287373 591.390424,197.256894 586.526686,208.333817 C586.526686,207.811321 586.526686,207.497823 586.423202,206.975327 L585.181397,182.940493 L584.45701,182.104499 C575.14347,183.880987 574.936502,184.194485 566.450832,185.343977 L565.82993,185.970972 C565.726446,186.28447 565.726446,186.597968 565.726446,186.911466 L565.82993,187.015965 C566.864767,192.554427 566.6578,191.300435 567.692638,199.973875 C568.210057,204.258345 568.830959,208.542816 569.348378,212.722787 C570.176248,219.828737 570.693667,223.277213 571.728505,234.040639 C565.933413,243.654572 564.588124,247.312046 559,255.776488 L559.310451,256.612482 C567.692638,256.298984 569.555346,256.298984 575.764373,256.298984 L577.109662,254.731495 C581.766432,244.595065 617.364853,182.940493 617.364853,182.940493 L617.261369,182.835994 Z M314.543608,189.75837 C319.303862,186.414394 319.924765,181.816425 315.888897,179.412942 C311.85303,177.009459 304.712649,177.740954 299.952395,181.084931 C295.192141,184.324408 294.674722,188.922376 298.71059,191.430359 C302.642973,193.729343 309.783354,193.102347 314.543608,189.75837 Z" id="Shape" fill="#FEFEFE"></path> <path d="M575.734683,256.104499 L568.80127,268.121916 C566.628111,272.197388 562.488759,275.332366 556.072765,275.332366 L545,275.123367 L548.207997,264.255443 L550.381157,264.255443 C551.519478,264.255443 552.347349,264.150943 552.968251,263.837446 C553.589154,263.628447 553.899605,263.21045 554.417024,262.583454 L558.556375,256 L575.838167,256 L575.734683,256.104499 Z" id="Shape" fill="#FEFEFE"></path> </g> </g>`;

// let amex_single = `<svg version="1.1" id="Layer_1" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="750" height="471" viewBox="0 0 750 471" enable-background="new 0 0 752 471" xml:space="preserve"><title>Slice 1</title><desc>Created with Sketch.</desc><g><g><path fill="#2557D6" d="M554.594,130.608l-14.521,35.039h29.121L554.594,130.608z M387.03,152.321c2.738-1.422,4.349-4.515,4.349-8.356c0-3.764-1.693-6.49-4.431-7.771c-2.492-1.42-6.328-1.584-10.006-1.584h-25.978v19.523h25.63C380.7,154.134,384.131,154.074,387.03,152.321z M54.142,130.608l-14.357,35.039h28.8L54.142,130.608z M722.565,355.08h-40.742v-18.852h40.578c4.023,0,6.84-0.525,8.537-2.177c1.471-1.358,2.494-3.336,2.494-5.733c0-2.562-1.023-4.596-2.578-5.813c-1.529-1.342-3.76-1.953-7.434-1.953c-19.81-0.67-44.523,0.609-44.523-27.211c0-12.75,8.131-26.172,30.27-26.172h42.025v-17.492h-39.045c-11.783,0-20.344,2.81-26.406,7.181v-7.181h-57.752c-9.233,0-20.074,2.279-25.201,7.181v-7.181H499.655v7.181c-8.207-5.898-22.057-7.181-28.447-7.181H403.18v7.181c-6.492-6.262-20.935-7.181-29.734-7.181h-76.134l-17.42,18.775l-16.318-18.775H149.847v122.675h111.586l17.95-19.076l16.91,19.076l68.78,0.059v-28.859h6.764c9.125,0.145,19.889-0.223,29.387-4.311v33.107h56.731v-31.976h2.736c3.492,0,3.838,0.146,3.838,3.621v28.348h172.344c10.941,0,22.38-2.786,28.712-7.853v7.853h54.668c11.375,0,22.485-1.588,30.938-5.653v-22.853C746.069,351.297,736.079,355.08,722.565,355.08z M372.734,326.113h-26.325v29.488h-41.006L279.425,326.5l-26.997,29.102h-83.569v-87.914h84.855l25.955,28.818l26.835-28.818h67.414c16.743,0,35.555,4.617,35.555,28.963C409.473,321.072,391.176,326.113,372.734,326.113z M499.323,322.127c2.98,4.291,3.41,8.297,3.496,16.047v17.428h-21.182v-10.998c0-5.289,0.512-13.121-3.41-17.209c-3.08-3.149-7.781-3.901-15.48-3.901h-22.545v32.108h-21.198v-87.914h48.706c10.685,0,18.462,0.472,25.386,4.148c6.658,4.006,10.848,9.494,10.848,19.523c-0.002,14.031-9.399,21.19-14.953,23.389C493.684,316.473,497.522,319.566,499.323,322.127z M586.473,285.869h-49.404v15.982h48.197v17.938h-48.197v17.492l49.404,0.078v18.242h-70.414v-87.914h70.414V285.869z M640.686,355.6h-41.09v-18.852h40.926c4.002,0,6.84-0.527,8.619-2.178c1.449-1.359,2.492-3.336,2.492-5.73c0-2.564-1.129-4.598-2.574-5.818c-1.615-1.34-3.842-1.948-7.514-1.948c-19.73-0.673-44.439,0.606-44.439-27.212c0-12.752,8.047-26.174,30.164-26.174h42.297v18.709h-38.703c-3.836,0-6.33,0.146-8.451,1.592c-2.313,1.423-3.17,3.535-3.17,6.322c0,3.316,1.963,5.574,4.615,6.549c2.228,0.771,4.617,0.996,8.211,0.996l11.359,0.308c11.449,0.274,19.313,2.25,24.092,7.069c4.105,4.232,6.311,9.578,6.311,18.625C673.829,346.771,661.963,355.6,640.686,355.6z M751.192,343.838L751.192,343.838L751.192,343.838L751.192,343.838z M477.061,287.287c-2.549-1.508-6.311-1.588-10.066-1.588h-25.979v19.744h25.631c4.104,0,7.594-0.144,10.414-1.812c2.734-1.646,4.371-4.678,4.371-8.438C481.432,291.434,479.795,288.711,477.061,287.287z M712.784,285.697c-3.838,0-6.389,0.145-8.537,1.588c-2.227,1.426-3.081,3.537-3.081,6.326c0,3.315,1.879,5.572,4.612,6.549c2.228,0.771,4.615,0.996,8.129,0.996l11.437,0.303c11.537,0.285,19.242,2.262,23.938,7.08c0.855,0.668,1.369,1.42,1.957,2.174v-25.014h-38.453L712.784,285.697L712.784,285.697z M373.47,285.697h-27.509v22.391h27.265c8.105,0,13.146-4.006,13.149-11.611C386.372,288.789,381.086,285.697,373.47,285.697z M189.872,285.697v15.984h46.315v17.938h-46.315v17.49h51.87l24.1-25.791l-23.076-25.621H189.872L189.872,285.697z M325.321,347.176v-70.482l-32.391,34.673L325.321,347.176z M191.649,206.025v15.148h176.263l-0.082-32.046h3.411c2.39,0.083,3.084,0.302,3.084,4.229v27.818h91.164v-7.461c7.353,3.924,18.789,7.461,33.838,7.461h38.353l8.209-19.522h18.197l8.026,19.522h73.906V202.63l11.189,18.543h59.227V98.59h-58.611v14.477l-8.207-14.477h-60.143v14.477l-7.537-14.477h-81.24c-13.6,0-25.551,1.89-35.207,7.158V98.59h-56.063v7.158c-6.146-5.43-14.519-7.158-23.826-7.158H180.784l-13.742,31.662L152.928,98.59H88.417v14.477L81.329,98.59H26.312L0.763,156.874v46.621l37.779-87.894h31.346l35.88,83.217v-83.217h34.435l27.61,59.625l25.365-59.625h35.126v87.894h-21.625l-0.079-68.837l-30.593,68.837h-18.524l-30.671-68.898v68.898H83.899l-8.106-19.605H31.865l-8.19,19.605H0.762v17.682h36.049l8.128-19.523h18.198l8.106,19.523h70.925V206.25l6.33,14.989h36.819L191.649,206.025z M469.401,125.849c6.818-7.015,17.5-10.25,32.039-10.25h20.424v18.833h-19.996c-7.696,0-12.047,1.14-16.233,5.208c-3.599,3.7-6.066,10.696-6.066,19.908c0,9.417,1.881,16.206,5.801,20.641c3.248,3.478,9.152,4.533,14.705,4.533h9.478l29.733-69.12h31.611l35.719,83.134v-83.133h32.123l37.086,61.213v-61.213h21.611v87.891h-29.898l-39.989-65.968v65.968h-42.968l-8.209-19.605h-43.827l-7.966,19.605h-24.688c-10.254,0-23.238-2.258-30.59-9.722c-7.416-7.462-11.271-17.571-11.271-33.553C458.026,147.182,460.329,135.266,469.401,125.849z M426.006,115.6h21.526v87.894h-21.526V115.6z M328.951,115.6h48.525c10.779,0,18.727,0.285,25.547,4.21c6.674,3.926,10.676,9.658,10.676,19.46c0,14.015-9.393,21.254-14.864,23.429c4.614,1.75,8.559,4.841,10.438,7.401c2.979,4.372,3.492,8.277,3.492,16.126v17.267h-21.279l-0.08-11.084c0-5.29,0.508-12.896-3.33-17.122c-3.082-3.09-7.782-3.763-15.379-3.763H350.05v31.97h-21.098L328.951,115.6L328.951,115.6z M243.902,115.6h70.479v18.303h-49.379v15.843h48.193v18.017h-48.193v17.553h49.379v18.177h-70.479V115.6L243.902,115.6z"/></g></g></svg>`;
// let visa_single = `<svg version="1.1" id="Layer_1" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="750px" height="471px" viewBox="0 0 750 471" enable-background="new 0 0 750 471" xml:space="preserve"><title>Slice 1</title><desc>Created with Sketch.</desc><g id="visa" sketch:type="MSLayerGroup"><path id="Shape" sketch:type="MSShapeGroup" fill="#0E4595" d="M278.198,334.228l33.36-195.763h53.358l-33.384,195.763H278.198L278.198,334.228z"/><path id="path13" sketch:type="MSShapeGroup" fill="#0E4595" d="M524.307,142.687c-10.57-3.966-27.135-8.222-47.822-8.222c-52.725,0-89.863,26.551-90.18,64.604c-0.297,28.129,26.514,43.821,46.754,53.185c20.77,9.597,27.752,15.716,27.652,24.283c-0.133,13.123-16.586,19.116-31.924,19.116c-21.355,0-32.701-2.967-50.225-10.274l-6.877-3.112l-7.488,43.823c12.463,5.466,35.508,10.199,59.438,10.445c56.09,0,92.502-26.248,92.916-66.884c0.199-22.27-14.016-39.216-44.801-53.188c-18.65-9.056-30.072-15.099-29.951-24.269c0-8.137,9.668-16.838,30.559-16.838c17.447-0.271,30.088,3.534,39.936,7.5l4.781,2.259L524.307,142.687"/><path id="Path" sketch:type="MSShapeGroup" fill="#0E4595" d="M661.615,138.464h-41.23c-12.773,0-22.332,3.486-27.941,16.234l-79.244,179.402h56.031c0,0,9.16-24.121,11.232-29.418c6.123,0,60.555,0.084,68.336,0.084c1.596,6.854,6.492,29.334,6.492,29.334h49.512L661.615,138.464L661.615,138.464z M596.198,264.872c4.414-11.279,21.26-54.724,21.26-54.724c-0.314,0.521,4.381-11.334,7.074-18.684l3.607,16.878c0,0,10.217,46.729,12.352,56.527h-44.293V264.872L596.198,264.872z"/><path id="path16" sketch:type="MSShapeGroup" fill="#0E4595" d="M232.903,138.464L180.664,271.96l-5.565-27.129c-9.726-31.274-40.025-65.157-73.898-82.12l47.767,171.204l56.455-0.064l84.004-195.386L232.903,138.464"/><path id="path18" sketch:type="MSShapeGroup" fill="#F2AE14" d="M131.92,138.464H45.879l-0.682,4.073c66.939,16.204,111.232,55.363,129.618,102.415l-18.709-89.96C152.877,142.596,143.509,138.896,131.92,138.464"/></g></svg>`;
// let diners_single = `<svg version="1.1" id="Layer_1" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="750" height="471" viewBox="0 0 750 471" enable-background="new 0 0 750 471" xml:space="preserve"><title>diners</title><desc>Created with Sketch.</desc><g id="diners" sketch:type="MSLayerGroup"><path id="Shape-path" sketch:type="MSShapeGroup" fill="#0079BE" d="M584.934,236.947c0-99.416-82.98-168.133-173.896-168.1h-78.241c-92.003-0.033-167.73,68.705-167.73,168.1c0,90.931,75.729,165.641,167.73,165.203h78.241C501.951,402.587,584.934,327.857,584.934,236.947L584.934,236.947z"/><path id="Shape-path_1_" sketch:type="MSShapeGroup" fill="#FFFFFF" d="M333.281,82.932c-84.069,0.026-152.193,68.308-152.215,152.58c0.021,84.258,68.145,152.532,152.215,152.559c84.088-0.026,152.229-68.301,152.239-152.559C485.508,151.238,417.369,82.958,333.281,82.932L333.281,82.932z"/><path id="Path" sketch:type="MSShapeGroup" fill="#0079BE" d="M237.066,235.098c0.08-41.18,25.747-76.296,61.94-90.25v180.479C262.813,311.381,237.145,276.283,237.066,235.098z M368.066,325.373V144.848c36.208,13.921,61.915,49.057,61.981,90.256C429.981,276.316,404.274,311.426,368.066,325.373z"/></g></svg>`;
// let discover_single = `<svg version="1.1" id="Layer_1" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="780px" height="501px" viewBox="0 0 780 501" enable-background="new 0 0 780 501" xml:space="preserve"><title>discover</title><desc>Created with Sketch.</desc><g id="Page-1" sketch:type="MSPage"><g id="discover" sketch:type="MSLayerGroup"><path fill="#F47216" d="M409.412,197.758c30.938,0,56.02,23.58,56.02,52.709v0.033c0,29.129-25.082,52.742-56.02,52.742c-30.941,0-56.022-23.613-56.022-52.742v-0.033C353.39,221.338,378.471,197.758,409.412,197.758L409.412,197.758z"/><path d="M321.433,198.438c8.836,0,16.247,1.785,25.269,6.09v22.752c-8.544-7.863-15.955-11.154-25.757-11.154c-19.265,0-34.413,15.015-34.413,34.051c0,20.074,14.681,34.195,35.368,34.195c9.313,0,16.586-3.12,24.802-10.856v22.764c-9.343,4.141-16.912,5.775-25.757,5.775c-31.277,0-55.581-22.597-55.581-51.737C265.363,221.49,290.314,198.438,321.433,198.438L321.433,198.438z"/><path d="M224.32,199.064c11.546,0,22.109,3.721,30.942,10.994l-10.748,13.248c-5.351-5.646-10.411-8.027-16.563-8.027c-8.854,0-15.301,4.745-15.301,10.988c0,5.354,3.618,8.188,15.944,12.482c23.364,8.043,30.289,15.176,30.289,30.926c0,19.193-14.976,32.554-36.319,32.554c-15.631,0-26.993-5.795-36.457-18.871l13.268-12.031c4.73,8.609,12.622,13.223,22.42,13.223c9.163,0,15.947-5.951,15.947-13.984c0-4.164-2.056-7.733-6.158-10.258c-2.066-1.195-6.158-2.977-14.199-5.646c-19.292-6.538-25.91-13.527-25.91-27.186C191.474,211.25,205.688,199.064,224.32,199.064L224.32,199.064z"/><polygon points="459.043,200.793 481.479,200.793 509.563,267.385 538.01,200.793 560.276,200.793 514.783,302.479 503.729,302.479 "/><polygon points="157.83,200.945 178.371,200.945 178.371,300.088 157.83,300.088 "/><polygon points="569.563,200.945 627.815,200.945 627.815,217.744 590.09,217.744 590.09,239.75 626.426,239.75 626.426,256.541 590.09,256.541 590.09,283.303 627.815,283.303 627.815,300.088 569.563,300.088 "/><path d="M685.156,258.322c15.471-2.965,23.984-12.926,23.984-28.105c0-18.562-13.576-29.271-37.266-29.271H641.42v99.143h20.516V260.26h2.68l28.43,39.828h25.26L685.156,258.322z M667.938,246.586h-6.002v-30.025h6.326c12.791,0,19.744,5.049,19.744,14.697C688.008,241.224,681.055,246.586,667.938,246.586z"/><path d="M91.845,200.945H61.696v99.143h29.992c15.946,0,27.465-3.543,37.573-11.445c12.014-9.36,19.117-23.467,19.117-38.057C148.379,221.327,125.157,200.945,91.845,200.945z M115.842,275.424c-6.454,5.484-14.837,7.879-28.108,7.879H82.22v-65.559h5.513c13.271,0,21.323,2.238,28.108,8.018c7.104,5.956,11.377,15.183,11.377,24.682C127.219,259.957,122.945,269.468,115.842,275.424z"/></g></g></svg>`;
// let jcb_single = `<svg version="1.1" id="Layer_1" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="750px" height="471px" viewBox="0 0 750 471" enable-background="new 0 0 750 471" xml:space="preserve"><title>Slice 1</title><desc>Created with Sketch.</desc><g><path id="path3494" sketch:type="MSShapeGroup" fill="#FFFFFF" d="M617.242,346.766c0,41.615-33.729,75.36-75.357,75.36H132.759V124.245c0-41.626,33.73-75.371,75.364-75.371h409.12V346.766L617.242,346.766L617.242,346.766z"/><linearGradient id="path3496_1_" gradientUnits="userSpaceOnUse" x1="824.7424" y1="333.7813" x2="825.7424" y2="333.7813" gradientTransform="matrix(132.8743 0 0 -323.0226 -109129.5313 108054.6016)"><stop offset="0" style="stop-color:#007B40"/><stop offset="1" style="stop-color:#55B330"/></linearGradient><path id="path3496" sketch:type="MSShapeGroup" fill="url(#path3496_1_)" d="M483.86,242.045c11.686,0.254,23.439-0.516,35.078,0.4c11.787,2.199,14.627,20.043,4.156,25.887c-7.145,3.85-15.633,1.434-23.379,2.113H483.86V242.045L483.86,242.045z M525.694,209.9c2.596,9.164-6.238,17.392-15.064,16.13h-26.77c0.188-8.642-0.367-18.022,0.273-26.209c10.723,0.302,21.547-0.616,32.209,0.48C520.922,201.452,524.756,205.218,525.694,209.9L525.694,209.9z M590.119,73.997c0.498,17.501,0.072,35.927,0.215,53.783c-0.033,72.596,0.07,145.195-0.057,217.789c-0.469,27.207-24.582,50.847-51.6,51.39c-27.045,0.11-54.094,0.017-81.143,0.047v-109.75c29.471-0.153,58.957,0.308,88.416-0.231c13.666-0.858,28.635-9.875,29.271-24.914c1.609-15.103-12.631-25.551-26.152-27.201c-5.197-0.135-5.045-1.515,0-2.117c12.895-2.787,23.021-16.133,19.227-29.499c-3.234-14.058-18.771-19.499-31.695-19.472c-26.352-0.179-52.709-0.025-79.063-0.077c0.17-20.489-0.355-41,0.283-61.474c2.088-26.716,26.807-48.748,53.447-48.27C537.555,73.998,563.838,73.998,590.119,73.997L590.119,73.997z"/><linearGradient id="path3498_1_" gradientUnits="userSpaceOnUse" x1="824.7551" y1="333.7822" x2="825.7484" y2="333.7822" gradientTransform="matrix(133.4307 0 0 -323.0203 -109887.6875 108053.8203)"><stop offset="0" style="stop-color:#1D2970"/><stop offset="1" style="stop-color:#006DBA"/></linearGradient><path id="path3498" sketch:type="MSShapeGroup" fill="url(#path3498_1_)" d="M159.742,125.041c0.673-27.164,24.888-50.611,51.872-51.008c26.945-0.083,53.894-0.012,80.839-0.036c-0.074,90.885,0.146,181.776-0.111,272.657c-1.038,26.834-24.989,49.834-51.679,50.309c-26.996,0.098-53.995,0.014-80.992,0.041V283.551c26.223,6.195,53.722,8.832,80.474,4.723c15.991-2.574,33.487-10.426,38.901-27.016c3.984-14.191,1.741-29.126,2.334-43.691v-33.825h-46.297c-0.208,22.371,0.426,44.781-0.335,67.125c-1.248,13.734-14.849,22.46-27.802,21.994c-16.064,0.17-47.897-11.641-47.897-11.641C158.969,219.305,159.515,166.814,159.742,125.041L159.742,125.041z"/><linearGradient id="path3500_1_" gradientUnits="userSpaceOnUse" x1="824.7424" y1="333.7813" x2="825.741" y2="333.7813" gradientTransform="matrix(132.9583 0 0 -323.0276 -109347.9219 108056.2656)"><stop offset="0" style="stop-color:#6E2B2F"/><stop offset="1" style="stop-color:#E30138"/></linearGradient><path id="path3500" sketch:type="MSShapeGroup" fill="url(#path3500_1_)" d="M309.721,197.39c-2.437,0.517-0.491-8.301-1.114-11.646c0.166-21.15-0.346-42.323,0.284-63.458c2.082-26.829,26.991-48.916,53.738-48.288h78.767c-0.074,90.885,0.145,181.775-0.111,272.657c-1.039,26.834-24.992,49.833-51.682,50.309c-26.998,0.101-53.998,0.015-80.997,0.042V272.707c18.44,15.129,43.5,17.484,66.472,17.525c17.318-0.006,34.535-2.676,51.353-6.67V260.79c-18.953,9.446-41.234,15.446-62.244,10.019c-14.656-3.649-25.294-17.813-25.057-32.937c-1.698-15.729,7.522-32.335,22.979-37.011c19.192-6.008,40.108-1.413,58.096,6.398c3.855,2.018,7.766,4.521,6.225-1.921v-17.899c-30.086-7.158-62.104-9.792-92.33-2.005C325.352,187.902,316.828,191.645,309.721,197.39L309.721,197.39z"/></g></svg>`;
// let maestro_single = `<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="482.6" height="374.31" viewBox="0 0 482.6 374.31"> <title>maestro</title> <g> <path d="M278.8,421.77V397c0-9.35-6-15.64-15.55-15.72-5-.08-10.26,1.49-13.9,7-2.73-4.38-7-7-13.07-7a13.08,13.08,0,0,0-11.58,5.87v-4.88h-8.61v39.55h8.69V399.85c0-6.87,3.81-10.51,9.68-10.51,5.71,0,8.61,3.72,8.61,10.42v22h8.69V399.85c0-6.87,4-10.51,9.68-10.51,5.87,0,8.69,3.72,8.69,10.42v22ZM327.28,402V382.23h-8.61V387c-2.73-3.56-6.87-5.79-12.49-5.79-11.09,0-19.77,8.69-19.77,20.77s8.69,20.77,19.77,20.77c5.63,0,9.76-2.23,12.49-5.79v4.8h8.61Zm-32,0c0-6.95,4.55-12.66,12-12.66,7.12,0,11.91,5.46,11.91,12.66s-4.8,12.66-11.91,12.66C299.81,414.66,295.26,408.95,295.26,402ZM511.4,381.19a22.29,22.29,0,0,1,8.49,1.59,20.71,20.71,0,0,1,6.75,4.38,20,20,0,0,1,4.46,6.59,22,22,0,0,1,0,16.52,20,20,0,0,1-4.46,6.59,20.69,20.69,0,0,1-6.75,4.38,23.43,23.43,0,0,1-17,0,20.47,20.47,0,0,1-6.73-4.38,20.21,20.21,0,0,1-4.44-6.59,22,22,0,0,1,0-16.52,20.23,20.23,0,0,1,4.44-6.59,20.48,20.48,0,0,1,6.73-4.38A22.29,22.29,0,0,1,511.4,381.19Zm0,8.14a12.84,12.84,0,0,0-4.91.93,11.62,11.62,0,0,0-3.92,2.6,12.13,12.13,0,0,0-2.6,4,14.39,14.39,0,0,0,0,10.28,12.11,12.11,0,0,0,2.6,4,11.62,11.62,0,0,0,3.92,2.6,13.46,13.46,0,0,0,9.83,0,11.86,11.86,0,0,0,3.94-2.6,12,12,0,0,0,2.62-4,14.39,14.39,0,0,0,0-10.28,12,12,0,0,0-2.62-4,11.86,11.86,0,0,0-3.94-2.6A12.84,12.84,0,0,0,511.4,389.32ZM374.1,402c-.08-12.33-7.69-20.77-18.78-20.77-11.58,0-19.69,8.44-19.69,20.77,0,12.58,8.44,20.77,20.27,20.77,6,0,11.42-1.49,16.22-5.54l-4.22-6.37A18.84,18.84,0,0,1,356.4,415c-5.54,0-10.59-2.56-11.83-9.68h29.37C374,404.23,374.1,403.16,374.1,402Zm-29.45-3.47c.91-5.71,4.38-9.6,10.51-9.6,5.54,0,9.1,3.47,10,9.6Zm65.69-6.2A25.49,25.49,0,0,0,398,388.93c-4.72,0-7.53,1.74-7.53,4.63,0,2.65,3,3.39,6.7,3.89l4.05.58c8.61,1.24,13.82,4.88,13.82,11.83,0,7.53-6.62,12.91-18,12.91-6.45,0-12.41-1.66-17.13-5.13l4.05-6.7a21.07,21.07,0,0,0,13.16,4.14c5.87,0,9-1.74,9-4.8,0-2.23-2.23-3.47-6.95-4.14l-4.05-.58c-8.85-1.24-13.65-5.21-13.65-11.67,0-7.86,6.45-12.66,16.46-12.66,6.29,0,12,1.41,16.13,4.14Zm41.35-2.23H437.62V408c0,4,1.41,6.62,5.71,6.62a15.89,15.89,0,0,0,7.61-2.23l2.48,7.36a20.22,20.22,0,0,1-10.76,3.06c-10.18,0-13.73-5.46-13.73-14.65v-18h-8v-7.86h8v-12h8.69v12h14.06Zm29.78-8.85a18.38,18.38,0,0,1,6.12,1.08l-2.65,8.11a14,14,0,0,0-5.38-1c-5.63,0-8.44,3.64-8.44,10.18v22.17h-8.6V382.23H471V387a11.66,11.66,0,0,1,10.42-5.79Z" transform="translate(-132.9 -48.5)"/> <g id="_Group_" data-name="&lt;Group&gt;"> <rect x="176.05" y="31.89" width="130.5" height="234.51" fill="#7673c0"/> <path id="_Path_" data-name="&lt;Path&gt;" d="M317.24,197.64a148.88,148.88,0,0,1,57-117.26,149.14,149.14,0,1,0,0,234.51A148.88,148.88,0,0,1,317.24,197.64Z" transform="translate(-132.9 -48.5)" fill="#eb001b"/> <path d="M615.5,197.64A149.14,149.14,0,0,1,374.2,314.9a149.16,149.16,0,0,0,0-234.51A149.14,149.14,0,0,1,615.5,197.64Z" transform="translate(-132.9 -48.5)" fill="#00a1df"/> </g> </g></svg>`;
// let mastercard_single = `<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="482.51" height="374" viewBox="0 0 482.51 374"> <title>mastercard</title> <g> <path d="M220.13,421.67V396.82c0-9.53-5.8-15.74-15.32-15.74-5,0-10.35,1.66-14.08,7-2.9-4.56-7-7-13.25-7a14.07,14.07,0,0,0-12,5.8v-5h-7.87v39.76h7.87V398.89c0-7,4.14-10.35,9.94-10.35s9.11,3.73,9.11,10.35v22.78h7.87V398.89c0-7,4.14-10.35,9.94-10.35s9.11,3.73,9.11,10.35v22.78Zm129.22-39.35h-14.5v-12H327v12h-8.28v7H327V408c0,9.11,3.31,14.5,13.25,14.5A23.17,23.17,0,0,0,351,419.6l-2.49-7a13.63,13.63,0,0,1-7.46,2.07c-4.14,0-6.21-2.49-6.21-6.63V389h14.5v-6.63Zm73.72-1.24a12.39,12.39,0,0,0-10.77,5.8v-5h-7.87v39.76h7.87V399.31c0-6.63,3.31-10.77,8.7-10.77a24.24,24.24,0,0,1,5.38.83l2.49-7.46a28,28,0,0,0-5.8-.83Zm-111.41,4.14c-4.14-2.9-9.94-4.14-16.15-4.14-9.94,0-16.15,4.56-16.15,12.43,0,6.63,4.56,10.35,13.25,11.6l4.14.41c4.56.83,7.46,2.49,7.46,4.56,0,2.9-3.31,5-9.53,5a21.84,21.84,0,0,1-13.25-4.14l-4.14,6.21c5.8,4.14,12.84,5,17,5,11.6,0,17.81-5.38,17.81-12.84,0-7-5-10.35-13.67-11.6l-4.14-.41c-3.73-.41-7-1.66-7-4.14,0-2.9,3.31-5,7.87-5,5,0,9.94,2.07,12.43,3.31Zm120.11,16.57c0,12,7.87,20.71,20.71,20.71,5.8,0,9.94-1.24,14.08-4.56l-4.14-6.21a16.74,16.74,0,0,1-10.35,3.73c-7,0-12.43-5.38-12.43-13.25S445,389,452.07,389a16.74,16.74,0,0,1,10.35,3.73l4.14-6.21c-4.14-3.31-8.28-4.56-14.08-4.56-12.43-.83-20.71,7.87-20.71,19.88h0Zm-55.5-20.71c-11.6,0-19.47,8.28-19.47,20.71s8.28,20.71,20.29,20.71a25.33,25.33,0,0,0,16.15-5.38l-4.14-5.8a19.79,19.79,0,0,1-11.6,4.14c-5.38,0-11.18-3.31-12-10.35h29.41v-3.31c0-12.43-7.46-20.71-18.64-20.71h0Zm-.41,7.46c5.8,0,9.94,3.73,10.35,9.94H364.68c1.24-5.8,5-9.94,11.18-9.94ZM268.59,401.79V381.91h-7.87v5c-2.9-3.73-7-5.8-12.84-5.8-11.18,0-19.47,8.7-19.47,20.71s8.28,20.71,19.47,20.71c5.8,0,9.94-2.07,12.84-5.8v5h7.87V401.79Zm-31.89,0c0-7.46,4.56-13.25,12.43-13.25,7.46,0,12,5.8,12,13.25,0,7.87-5,13.25-12,13.25-7.87.41-12.43-5.8-12.43-13.25Zm306.08-20.71a12.39,12.39,0,0,0-10.77,5.8v-5h-7.87v39.76H532V399.31c0-6.63,3.31-10.77,8.7-10.77a24.24,24.24,0,0,1,5.38.83l2.49-7.46a28,28,0,0,0-5.8-.83Zm-30.65,20.71V381.91h-7.87v5c-2.9-3.73-7-5.8-12.84-5.8-11.18,0-19.47,8.7-19.47,20.71s8.28,20.71,19.47,20.71c5.8,0,9.94-2.07,12.84-5.8v5h7.87V401.79Zm-31.89,0c0-7.46,4.56-13.25,12.43-13.25,7.46,0,12,5.8,12,13.25,0,7.87-5,13.25-12,13.25-7.87.41-12.43-5.8-12.43-13.25Zm111.83,0V366.17h-7.87v20.71c-2.9-3.73-7-5.8-12.84-5.8-11.18,0-19.47,8.7-19.47,20.71s8.28,20.71,19.47,20.71c5.8,0,9.94-2.07,12.84-5.8v5h7.87V401.79Zm-31.89,0c0-7.46,4.56-13.25,12.43-13.25,7.46,0,12,5.8,12,13.25,0,7.87-5,13.25-12,13.25C564.73,415.46,560.17,409.25,560.17,401.79Z" transform="translate(-132.74 -48.5)"/> <g> <rect x="169.81" y="31.89" width="143.72" height="234.42" fill="#ff5f00"/> <path d="M317.05,197.6A149.5,149.5,0,0,1,373.79,80.39a149.1,149.1,0,1,0,0,234.42A149.5,149.5,0,0,1,317.05,197.6Z" transform="translate(-132.74 -48.5)" fill="#eb001b"/> <path d="M615.26,197.6a148.95,148.95,0,0,1-241,117.21,149.43,149.43,0,0,0,0-234.42,148.95,148.95,0,0,1,241,117.21Z" transform="translate(-132.74 -48.5)" fill="#f79e1b"/> </g> </g></svg>`;
// let unionpay_single = `<svg xmlns="http://www.w3.org/2000/svg" width="750" height="471" viewBox="0 0 750 471"> <g fill="none" fill-rule="evenodd"> <rect width="750" height="471" rx="40"/> <path fill="#D10429" d="M201.809581,55 L344.203266,55 C364.072152,55 376.490206,71.4063861 371.833436,91.4702467 L305.500331,378.94775 C300.843561,399.011611 280.871191,415.417997 261.002305,415.417997 L118.60862,415.417997 C98.7397339,415.417997 86.32168,399.011611 90.9784502,378.94775 L157.311555,91.4702467 C161.968325,71.3018868 181.837211,55 201.706097,55 L201.809581,55 Z"/> <path fill="#022E64" d="M331.750074,55 L495.564902,55 C515.433788,55 506.430699,71.4063861 501.773929,91.4702467 L435.440824,378.94775 C430.784054,399.011611 432.232827,415.417997 412.363941,415.417997 L248.549113,415.417997 C228.576743,415.417997 216.262173,399.011611 221.022427,378.94775 L287.355531,91.4702467 C292.012302,71.3018868 311.881188,55 331.853558,55 L331.750074,55 Z"/> <path fill="#076F74" d="M489.814981,55 L632.208666,55 C652.077552,55 664.495606,71.4063861 659.838836,91.4702467 L593.505731,378.94775 C588.848961,399.011611 568.876591,415.417997 549.007705,415.417997 L406.61402,415.417997 C386.64165,415.417997 374.32708,399.011611 378.98385,378.94775 L445.316955,91.4702467 C449.973725,71.3018868 469.842611,55 489.711498,55 L489.814981,55 Z"/> <path fill="#FEFEFE" d="M465.904754,326.014514 L479.357645,326.014514 L483.186545,312.952104 L469.837137,312.952104 L465.904754,326.014514 L465.904754,326.014514 Z M476.667067,290.066763 L476.667067,290.066763 L472.010297,305.532656 C472.010297,305.532656 477.081002,302.920174 479.875064,302.08418 C482.669126,301.457184 486.808478,300.934688 486.808478,300.934688 L490.016475,290.171263 L476.563583,290.171263 L476.667067,290.066763 Z M483.393513,267.912917 L483.393513,267.912917 L478.94371,282.751814 C478.94371,282.751814 483.910932,280.45283 486.704994,279.721335 C489.499056,278.98984 493.638407,278.780842 493.638407,278.780842 L496.846405,268.017417 L483.496997,268.017417 L483.393513,267.912917 Z M513.093359,267.912917 L513.093359,267.912917 L495.708083,325.910015 L500.364853,325.910015 L496.742921,337.927431 L492.086151,337.927431 L490.947829,341.584906 L474.390424,341.584906 L475.528745,337.927431 L442,337.927431 L445.311481,326.850508 L448.726446,326.850508 L466.318689,267.912917 L469.837137,256 L486.704994,256 L484.94577,261.956459 C484.94577,261.956459 489.395572,258.716981 493.741891,257.567489 C497.984726,256.417997 522.406899,256 522.406899,256 L518.784967,267.808418 L512.989875,267.808418 L513.093359,267.912917 Z"/> <path fill="#FEFEFE" d="M520 256L538.006178 256 538.213146 262.792453C538.109662 263.941945 539.041016 264.464441 541.214175 264.464441L544.836108 264.464441 541.524627 275.645864 531.797151 275.645864C523.414965 276.272859 520.206968 272.615385 520.413935 268.539913L520.103484 256.104499 520 256zM522.216235 309.20029L505.037927 309.20029 507.935473 299.272859 527.597391 299.272859 530.391454 290.181422 511.039986 290.181422 514.351467 279 568.163034 279 564.851553 290.181422 546.741891 290.181422 543.947829 299.272859 562.057491 299.272859 559.056461 309.20029 539.498026 309.20029 535.979578 313.380261 543.947829 313.380261 545.914021 325.920174C546.120989 327.174165 546.120989 328.01016 546.534924 328.532656 546.948859 328.950653 549.328986 329.159652 550.674275 329.159652L553.054402 329.159652 549.328986 341.386067 543.223443 341.386067C542.292089 341.386067 540.843316 341.281567 538.877124 341.281567 537.014416 341.072569 535.77261 340.027576 534.530805 339.400581 533.392483 338.878084 531.736743 337.519594 531.322808 335.11611L529.4601 322.576197 520.560494 334.907112C517.766432 338.773585 513.937532 341.804064 507.418054 341.804064L495 341.804064 498.311481 330.936139 503.071735 330.936139C504.417024 330.936139 505.65883 330.413643 506.590184 329.891147 507.521538 329.473149 508.349408 329.055152 509.177278 327.696662L522.216235 309.20029 522.216235 309.20029zM334.31354 282L379.742921 282 376.43144 292.972424 358.321778 292.972424 355.527716 302.272859 374.154797 302.272859 370.739832 313.558781 352.216235 313.558781 347.662948 328.711176C347.145529 330.383164 352.112751 330.592163 353.871975 330.592163L363.185516 329.338171 359.4601 341.878084 338.556375 341.878084C336.900635 341.878084 335.65883 341.669086 333.796122 341.251089 332.036897 340.833091 331.209027 339.997097 330.48464 338.847605 329.760254 337.593614 328.518449 336.65312 329.346319 333.936139L335.348378 313.872279 325 313.872279 328.414965 302.377358 338.763343 302.377358 341.557405 293.076923 331.209027 293.076923 334.520508 282.104499 334.31354 282zM365.700875 262.165457L384.327956 262.165457 380.912991 273.555878 355.455981 273.555878 352.661919 275.959361C351.420113 277.108853 351.109662 276.690856 349.557405 277.526851 348.108632 278.258345 345.107603 279.721335 341.175219 279.721335L333 279.721335 336.311481 268.748911 338.795092 268.748911C340.864767 268.748911 342.31354 268.539913 343.037927 268.121916 343.865797 267.599419 344.797151 266.449927 345.728505 264.56894L350.385275 256 368.908872 256 365.700875 262.269956 365.700875 262.165457zM400.808726 280.975327C400.808726 280.975327 405.879431 276.272859 414.572069 274.809869 416.538261 274.391872 428.956314 274.600871 428.956314 274.600871L430.819023 268.330914 404.637626 268.330914 400.808726 281.079826 400.808726 280.975327zM425.437866 285.782293L425.437866 285.782293 399.463436 285.782293 397.91118 291.111756 420.470644 291.111756C423.161223 290.798258 423.678642 291.216255 423.885609 291.007257L425.54135 285.782293 425.437866 285.782293zM391.702153 256.104499L391.702153 256.104499 407.535171 256.104499 405.258528 264.150943C405.258528 264.150943 410.22575 260.075472 413.744198 258.612482 417.262647 257.358491 425.127414 256.104499 425.127414 256.104499L450.791393 256 441.995271 285.468795C440.546498 290.484761 438.787274 293.724238 437.752436 295.291727 436.821082 296.754717 435.68276 298.113208 433.406117 299.367199 431.232958 300.516691 429.266766 301.248186 427.404058 301.352685 425.748317 301.457184 423.057739 301.561684 419.53929 301.561684L394.806666 301.561684 387.873253 324.865022C387.25235 327.164006 386.941899 328.313498 387.355834 328.940493 387.666285 329.46299 388.597639 330.089985 389.735961 330.089985L400.601758 329.044993 396.876342 341.793904 384.665256 341.793904C380.732872 341.793904 377.93881 341.689405 375.972618 341.584906 374.10991 341.375907 372.143718 341.584906 370.798429 340.539913 369.660107 339.49492 367.900883 338.13643 368.004367 336.777939 368.10785 335.523948 368.625269 333.433962 369.45314 330.507983L391.702153 256.104499 391.702153 256.104499z"/> <path fill="#FEFEFE" d="M437.840227 303L436.391454 310.105951C435.770551 312.300435 435.253132 313.972424 433.597391 315.435414 431.838167 316.898403 429.871975 318.465893 425.111721 318.465893L416.3156 318.88389 416.212116 326.825835C416.108632 329.020319 416.729535 328.811321 417.039986 329.229318 417.453921 329.647315 417.764373 329.751814 418.178308 329.960813L420.97237 329.751814 429.354556 329.333817 425.836108 341.037736 416.212116 341.037736C409.48567 341.037736 404.414965 340.828737 402.862708 339.574746 401.206968 338.529753 401 337.275762 401 334.976778L401.620903 303.835994 417.039986 303.835994 416.833019 310.21045 420.558435 310.21045C421.80024 310.21045 422.731594 310.105951 423.249013 309.792453 423.766432 309.478955 424.076883 308.956459 424.283851 308.224964L425.836108 303.208999 437.94371 303.208999 437.840227 303zM218.470396 147C217.952978 149.507983 208.018534 195.592163 208.018534 195.592163 205.845375 204.892598 204.293118 211.580552 199.118929 215.865022 196.117899 218.373004 192.599451 219.522496 188.563583 219.522496 182.044105 219.522496 178.318689 216.283019 177.697786 210.117562L177.594302 208.027576C177.594302 208.027576 179.560494 195.592163 179.560494 195.487663 179.560494 195.487663 189.908872 153.478955 191.771581 147.940493 191.875064 147.626996 191.875064 147.417997 191.875064 147.313498 171.695727 147.522496 168.073794 147.313498 167.866827 147 167.763343 147.417997 167.245924 150.030479 167.245924 150.030479L156.690578 197.36865 155.759224 201.339623 154 214.506531C154 218.373004 154.724386 221.612482 156.276643 224.224964 161.140381 232.793904 174.903724 234.047896 182.665008 234.047896 192.702935 234.047896 202.119959 231.853411 208.43247 227.986938 219.505234 221.403483 222.40278 211.058055 224.886391 201.966618L226.128196 197.264151C226.128196 197.264151 236.787026 153.687954 238.649734 148.044993 238.753218 147.731495 238.753218 147.522496 238.856702 147.417997 224.162004 147.522496 219.919169 147.417997 218.470396 147.104499L218.470396 147zM277.499056 233.622642C270.358675 233.518142 267.771581 233.518142 259.389394 233.936139L259.078943 233.309144C259.803329 230.069666 260.6312 226.934688 261.252102 223.69521L262.28694 219.306241C263.839197 212.513788 265.28797 204.467344 265.494937 202.063861 265.701905 200.600871 266.11584 196.943396 261.976489 196.943396 260.217264 196.943396 258.45804 197.77939 256.595332 198.615385 255.560494 202.272859 253.594302 212.513788 252.559465 217.111756 250.489789 226.934688 250.386305 228.08418 249.454951 232.891147L248.834048 233.518142C241.4867 233.413643 238.899605 233.413643 230.413935 233.83164L230 233.100145C231.448773 227.248186 232.794062 221.396226 234.139351 215.544267 237.6578 199.764877 238.589154 193.703919 239.520508 185.657475L240.244894 185.239478C248.523597 184.089985 250.489789 183.776488 259.492878 182L260.217264 182.835994 258.871975 187.851959C260.424232 186.911466 261.873005 185.970972 263.425262 185.239478 267.668097 183.149492 272.324867 182.522496 274.911962 182.522496 278.844345 182.522496 283.190664 183.671988 284.949888 188.269956 286.605629 192.345428 285.570791 197.361393 283.294148 207.288824L282.155826 212.30479C279.879183 223.381713 279.465248 225.367199 278.223443 232.891147L277.395572 233.518142 277.499056 233.622642zM306.558435 233.650218C302.212116 233.650218 299.418054 233.545718 296.727476 233.650218 294.036897 233.650218 291.449803 233.859216 287.413935 233.963716L287.206968 233.650218 287 233.232221C288.138322 229.05225 288.655741 227.58926 289.276643 226.12627 289.794062 224.66328 290.311481 223.20029 291.346319 218.91582 292.588124 213.377358 293.415995 209.510885 293.933413 206.062409 294.554316 202.822932 294.864767 200.001451 295.278703 196.761974L295.589154 196.552975 295.899605 196.239478C300.245924 195.612482 302.936502 195.194485 305.730565 194.776488 308.524627 194.358491 311.422173 193.835994 315.871975 193L316.078943 193.417997 316.182427 193.835994C315.354556 197.28447 314.526686 200.732946 313.698816 204.181422 312.870946 207.629898 312.043075 211.078374 311.318689 214.526851 309.766432 221.8418 309.042046 224.558781 308.731594 226.544267 308.317659 228.425254 308.214175 229.365747 307.593273 233.127721L307.179338 233.441219 306.765402 233.754717 306.558435 233.650218zM352.499319 207.975327C352.188868 209.856313 350.533127 216.857765 348.359968 219.783745 346.807711 221.978229 345.048487 223.33672 342.978811 223.33672 342.357909 223.33672 338.83946 223.33672 338.735976 218.007257 338.735976 215.394775 339.253395 212.677794 339.874298 209.751814 341.737006 201.287373 344.013649 194.285922 349.705257 194.285922 354.15506 194.285922 354.465511 199.510885 352.499319 207.975327L352.499319 207.975327zM371.229884 208.811321L371.229884 208.811321C373.713495 197.734398 371.747303 192.509434 369.367176 189.374456 365.64176 184.567489 359.018798 183 352.188868 183 348.049517 183 338.322041 183.417997 330.664241 190.523948 325.179601 195.644412 322.592506 202.645864 321.143733 209.333817 319.591476 216.12627 317.832252 228.352685 329.008501 232.950653 332.423466 234.413643 337.390687 234.83164 340.598684 234.83164 348.773903 234.83164 357.156089 232.532656 363.4686 225.844702 368.332338 220.41074 370.505497 212.259797 371.333368 208.811321L371.229884 208.811321zM545.661919 234.891147C536.969281 234.786647 534.48567 234.786647 526.517419 235.204644L526 234.577649C528.173159 226.322206 530.346319 217.962264 532.312511 209.602322 534.796122 198.734398 535.417024 194.13643 536.244894 187.761974L536.865797 187.239478C545.454951 185.985486 547.835078 185.671988 556.838167 184L557.045135 184.731495C555.389394 191.628447 553.837137 198.4209 552.181397 205.213353 548.869916 219.529753 547.731594 226.844702 546.489789 234.36865L545.661919 234.995646 545.661919 234.891147z"/> <path fill="#FEFEFE" d="M533.159909 209.373777C532.745974 211.150265 531.090233 218.256216 528.917074 221.182195 527.468301 223.272181 523.949852 224.630672 521.983661 224.630672 521.362758 224.630672 517.947793 224.630672 517.740826 219.405708 517.740826 216.793226 518.258244 214.076245 518.879147 211.150265 520.741855 202.894822 523.018498 195.893371 528.710106 195.893371 533.159909 195.893371 535.126101 201.013836 533.159909 209.478277L533.159909 209.373777zM550.234733 210.209772L550.234733 210.209772C552.718344 199.132849 542.576933 209.269278 541.024677 205.611804 538.541066 199.864344 540.093322 188.369423 530.158879 184.50295 526.329979 182.935461 517.32689 184.920947 509.66909 192.026898 504.287934 197.042863 501.597355 204.044315 500.148582 210.732268 498.596326 217.420222 496.837101 229.751136 507.909866 234.035606 511.428315 235.603095 514.636312 236.021092 517.844309 235.812094 529.020558 235.185098 537.506228 218.151717 543.818739 211.463763 548.682476 206.1343 549.510347 213.449249 550.234733 210.209772L550.234733 210.209772zM420.292089 233.622642C413.151708 233.518142 410.668097 233.518142 402.28591 233.936139L401.975459 233.309144C402.699846 230.069666 403.527716 226.934688 404.252102 223.69521L405.183456 219.306241C406.735713 212.513788 408.28797 204.467344 408.391454 202.063861 408.598421 200.600871 409.012356 196.943396 404.976489 196.943396 403.217264 196.943396 401.354556 197.77939 399.595332 198.615385 398.663978 202.272859 396.594302 212.513788 395.559465 217.111756 393.593273 226.934688 393.386305 228.08418 392.454951 232.891147L391.834048 233.518142C384.4867 233.413643 381.899605 233.413643 373.413935 233.83164L373 233.100145C374.448773 227.248186 375.794062 221.396226 377.139351 215.544267 380.6578 199.764877 381.48567 193.703919 382.520508 185.657475L383.141411 185.239478C391.420113 184.089985 393.489789 183.776488 402.389394 182L403.113781 182.835994 401.871975 187.851959C403.320748 186.911466 404.873005 185.970972 406.321778 185.239478 410.564613 183.149492 415.221383 182.522496 417.808478 182.522496 421.740862 182.522496 425.983697 183.671988 427.846405 188.269956 429.502145 192.345428 428.363824 197.361393 426.08718 207.288824L424.948859 212.30479C422.568732 223.381713 422.25828 225.367199 421.016475 232.891147L420.188605 233.518142 420.292089 233.622642zM482.293118 147.104499L476.291059 147.208999C460.768492 147.417997 454.559465 147.313498 452.075854 147 451.868886 148.149492 451.454951 150.134978 451.454951 150.134978 451.454951 150.134978 445.866827 176.050798 445.866827 176.155298 445.866827 176.155298 432.620903 231.330914 432 233.943396 445.556375 233.734398 451.041016 233.734398 453.421143 234.047896 453.938562 231.435414 457.043075 216.07402 457.146559 216.07402 457.146559 216.07402 459.837137 204.788099 459.940621 204.370102 459.940621 204.370102 460.768492 203.22061 461.596362 202.698113L462.838167 202.698113C474.531835 202.698113 487.674275 202.698113 498.022653 195.069666 505.05955 189.844702 509.819804 182.007257 511.992964 172.602322 512.510383 170.303338 512.924318 167.586357 512.924318 164.764877 512.924318 161.107402 512.199931 157.554427 510.130256 154.732946 504.852583 147.313498 494.400721 147.208999 482.293118 147.104499L482.293118 147.104499zM490.054402 174.169811L490.054402 174.169811C488.812597 179.917271 485.08718 184.828737 480.326926 187.127721 476.394543 189.113208 471.634289 189.322206 466.667067 189.322206L463.45907 189.322206 463.666037 188.068215C463.666037 188.068215 469.564613 162.152395 469.564613 162.256894L469.771581 160.898403 469.875064 159.853411 472.255191 160.062409C472.255191 160.062409 484.466278 161.107402 484.673245 161.107402 489.433499 162.988389 491.503175 167.795356 490.054402 174.169811L490.054402 174.169811zM617.261369 182.835994L616.536983 182C607.740862 183.776488 606.085121 184.089985 598.013386 185.239478L597.392483 185.866473C597.392483 185.970972 597.288999 186.075472 597.288999 186.28447L597.288999 186.179971C591.28694 200.287373 591.390424 197.256894 586.526686 208.333817 586.526686 207.811321 586.526686 207.497823 586.423202 206.975327L585.181397 182.940493 584.45701 182.104499C575.14347 183.880987 574.936502 184.194485 566.450832 185.343977L565.82993 185.970972C565.726446 186.28447 565.726446 186.597968 565.726446 186.911466L565.82993 187.015965C566.864767 192.554427 566.6578 191.300435 567.692638 199.973875 568.210057 204.258345 568.830959 208.542816 569.348378 212.722787 570.176248 219.828737 570.693667 223.277213 571.728505 234.040639 565.933413 243.654572 564.588124 247.312046 559 255.776488L559.310451 256.612482C567.692638 256.298984 569.555346 256.298984 575.764373 256.298984L577.109662 254.731495C581.766432 244.595065 617.364853 182.940493 617.364853 182.940493L617.261369 182.835994zM314.543608 189.75837C319.303862 186.414394 319.924765 181.816425 315.888897 179.412942 311.85303 177.009459 304.712649 177.740954 299.952395 181.084931 295.192141 184.324408 294.674722 188.922376 298.71059 191.430359 302.642973 193.729343 309.783354 193.102347 314.543608 189.75837L314.543608 189.75837z"/> <path fill="#FEFEFE" d="M575.734683,256.104499 L568.80127,268.121916 C566.628111,272.197388 562.488759,275.332366 556.072765,275.332366 L545,275.123367 L548.207997,264.255443 L550.381157,264.255443 C551.519478,264.255443 552.347349,264.150943 552.968251,263.837446 C553.589154,263.628447 553.899605,263.21045 554.417024,262.583454 L558.556375,256 L575.838167,256 L575.734683,256.104499 Z"/> </g></svg>`;

// //define the color swap function
// const swapColor = function (basecolor) {
//     document.querySelectorAll('.lightcolor')
//         .forEach(function (input) {
//             input.setAttribute('class', '');
//             input.setAttribute('class', 'lightcolor ' + basecolor);
//         });
//     document.querySelectorAll('.darkcolor')
//         .forEach(function (input) {
//             input.setAttribute('class', '');
//             input.setAttribute('class', 'darkcolor ' + basecolor + 'dark');
//         });
// };


// //pop in the appropriate card icon when detected
// cardnumber_mask.on("accept", function () {
//     console.log(cardnumber_mask.masked.currentMask.cardtype);
//     switch (cardnumber_mask.masked.currentMask.cardtype) {
//         case 'american express':
//             ccicon.innerHTML = amex;
//             ccsingle.innerHTML = amex_single;
//             swapColor('green');
//             break;
//         case 'visa':
//             ccicon.innerHTML = visa;
//             ccsingle.innerHTML = visa_single;
//             swapColor('lime');
//             break;
//         case 'diners':
//             ccicon.innerHTML = diners;
//             ccsingle.innerHTML = diners_single;
//             swapColor('orange');
//             break;
//         case 'discover':
//             ccicon.innerHTML = discover;
//             ccsingle.innerHTML = discover_single;
//             swapColor('purple');
//             break;
//         case ('jcb' || 'jcb15'):
//             ccicon.innerHTML = jcb;
//             ccsingle.innerHTML = jcb_single;
//             swapColor('red');
//             break;
//         case 'maestro':
//             ccicon.innerHTML = maestro;
//             ccsingle.innerHTML = maestro_single;
//             swapColor('yellow');
//             break;
//         case 'mastercard':
//             ccicon.innerHTML = mastercard;
//             ccsingle.innerHTML = mastercard_single;
//             swapColor('lightblue');

//             break;
//         case 'unionpay':
//             ccicon.innerHTML = unionpay;
//             ccsingle.innerHTML = unionpay_single;
//             swapColor('cyan');
//             break;
//         default:
//             ccicon.innerHTML = '';
//             ccsingle.innerHTML = '';
//             swapColor('grey');
//             break;
//     }

// });



// //Generate random card number from list of known test numbers
// const randomCard = function () {
//     let testCards = [
//         '4000056655665556',
//         '5200828282828210',
//         '371449635398431',
//         '6011000990139424',
//         '30569309025904',
//         '3566002020360505',
//         '6200000000000005',
//         '6759649826438453',
//     ];
//     let randomNumber = Math.floor(Math.random() * testCards.length);
//     cardnumber_mask.unmaskedValue = testCards[randomNumber];
// }
// generatecard.addEventListener('click', function () {
//     randomCard();
// });


// // CREDIT CARD IMAGE JS
//  document.querySelector('.preload').classList.remove('preload');
// document.querySelector('.creditcard').addEventListener('click', function () {
//     if (this.classList.contains('flipped')) {
//         this.classList.remove('flipped');
//     } else {
//         this.classList.add('flipped');
//     }
// })

// //On Input Change Events
// name.addEventListener('input', function () {
//     if (name.value.length == 0) {
//         document.getElementById('svgname').innerHTML = 'John Doe';
//         document.getElementById('svgnameback').innerHTML = 'John Doe';
//     } else {
//         document.getElementById('svgname').innerHTML = this.value;
//         document.getElementById('svgnameback').innerHTML = this.value;
//     }
// });

// cardnumber_mask.on('accept', function () {
//     if (cardnumber_mask.value.length == 0) {
//         document.getElementById('svgnumber').innerHTML = '0123 4567 8910 1112';
//     } else {
//         document.getElementById('svgnumber').innerHTML = cardnumber_mask.value;
//     }
// });

// expirationdate_mask.on('accept', function () {
//     if (expirationdate_mask.value.length == 0) {
//         document.getElementById('svgexpire').innerHTML = '01/23';
//     } else {
//         document.getElementById('svgexpire').innerHTML = expirationdate_mask.value;
//     }
// });

// securitycode_mask.on('accept', function () {
//     if (securitycode_mask.value.length == 0) {
//         document.getElementById('svgsecurity').innerHTML = '985';
//     } else {
//         document.getElementById('svgsecurity').innerHTML = securitycode_mask.value;
//     }
// });

// //On Focus Events
// name.addEventListener('focus', function () {
//     document.querySelector('.creditcard').classList.remove('flipped');
// });

// cardnumber.addEventListener('focus', function () {
//     document.querySelector('.creditcard').classList.remove('flipped');
// });

// expirationdate.addEventListener('focus', function () {
//     document.querySelector('.creditcard').classList.remove('flipped');
// });

// securitycode.addEventListener('focus', function () {
//     document.querySelector('.creditcard').classList.add('flipped');
// });
// };



</script>

<!-- dashboard -->
<!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->
<link rel="styleSheet" href="{{URL::asset('/azia-admin-master/lib/fontawesome-free/css/all.min.css') }}" type="text/css">
<link rel="styleSheet" href="{{URL::asset('/azia-admin-master/lib/ionicons/css/ionicons.min.css') }}" type="text/css">
<link rel="styleSheet" href="{{URL::asset('/azia-admin-master/lib/typicons.font/typicons.css') }}" type="text/css">
<link rel="styleSheet" href="{{URL::asset('/azia-admin-master/lib/flag-icon-css/css/flag-icon.min.css') }}" type="text/css">
<link rel="styleSheet" href="{{URL::asset('/azia-admin-master/css/azia.css') }}" type="text/css">
{{-- <link rel="styleSheet" href="{{URL::asset('/azia-admin-master/lib/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/css"> --}}
<link rel="styleSheet" href="{{URL::asset('/azia-admin-master/lib/ionicons/ionicons.js') }}" type="text/css">
{{-- <link rel="styleSheet" href="{{URL::asset('/azia-admin-master/lib/peity/jquery.peity.min.js') }}" type="text/css"> --}}
<link rel="styleSheet" href="{{URL::asset('/azia-admin-master/js/azia.js') }}" type="text/css">
<link rel="styleSheet" href="{{URL::asset('') }}" type="text/css">
<!-- vendor css -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- azia CSS -->
<!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="../public/azia-admin-master/lib/jquery/jquery.min.js"></script> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="{{URL::asset('/js/dashboard.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js" type="text/javascript"></script>


<!-- </div> -->
</body>
</html>

