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

    <link rel="icon" href="./image/title_yellowpress.png" type="image/x-icon">
    <link rel="shortcut icon" href="./image/title_yellowpress.png" type="image/x-icon">
</head>
<body onload="initPage()" style="display:none">
<!-- <div id="container"> -->
<div class="homepage" id="homepage_div_id" style="display:block">
    <!-- header -->
    <div class="header_background" id="header_id" style="box-shadow: 0px 1px 8px 2px #eee!important;">
    <div class="header" id="header_id">
        <div class="companyLogo" id="companyLogo_id">
            <img src="{{URL::asset('/image/yellowstar-logo.png') }} " width=200px height=96% style="margin-left: 10px;">
        </div>
        <div class="home clickOn" id="home_id" onclick="clickHeader(0)">
            <p>home</p>
        </div>
        <div class="product" id="product_id">
            <p>product</p>
            <ul id="product_ul">
                <li class="product0" onclick="clickProduct(0)" id="product0_id">&nbsp;&nbsp;&nbsp;<a>Booklets</a></li>
                <li class="product1" onclick="clickProduct(1)" id="product1_id">&nbsp;&nbsp;&nbsp;<a>Brochures</a></li>
                <li class="product2" onclick="clickProduct(2)" id="product2_id">&nbsp;&nbsp;&nbsp;<a>Business Cards</a></li>
                <li class="product3" onclick="clickProduct(3)" id="product3_id">&nbsp;&nbsp;&nbsp;<a>Deskpads / Notepads</a>
                </li>
                <li class="product4" onclick="clickProduct(4)" id="product4_id">&nbsp;&nbsp;&nbsp;<a>Direct Marketing</a></li>
                <li class="product5" onclick="clickProduct(5)" id="product5_id">&nbsp;&nbsp;&nbsp;<a>Docket Books</a></li>
                <li class="product6" onclick="clickProduct(6)" id="product6_id">&nbsp;&nbsp;&nbsp;<a>Envelopes</a></li>
                <li class="product7" onclick="clickProduct(7)" id="product7_id">&nbsp;&nbsp;&nbsp;<a>Express Printing</a></li>
                <li class="product8" onclick="clickProduct(8)" id="product8_id">&nbsp;&nbsp;&nbsp;<a>Flyers</a></li>
                <li class="product9" onclick="clickProduct(9)" id="product9_id">&nbsp;&nbsp;&nbsp;<a>Fridge Magnets</a></li>
                <li class="product10" onclick="clickProduct(10)" id="product10_id">&nbsp;&nbsp;&nbsp;<a>Letterheads</a></li>
                <li class="product11" onclick="clickProduct(11)" id="product11_id">&nbsp;&nbsp;&nbsp;<a>Postcards</a></li>
                <li class="product12" onclick="clickProduct(12)" id="product12_id">&nbsp;&nbsp;&nbsp;<a>Posters</a></li>
                <li class="product13" onclick="clickProduct(13)" id="product13_id">&nbsp;&nbsp;&nbsp;<a>Presentation Folders</a></li>
                <li class="product14" onclick="clickProduct(14)" id="product14_id">&nbsp;&nbsp;&nbsp;<a>With Compliments</a></li>
                <li class="product15" onclick="clickProduct(15)" id="product15_id">&nbsp;&nbsp;&nbsp;<a>Website Design</a></li>
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
                <li class="support1" onclick="clickHeader(15)" id="support1_id">&nbsp;&nbsp;&nbsp;<a>Delivery</a></li>
                <li class="support2" onclick="clickHeader(16)" id="support2_id">&nbsp;&nbsp;&nbsp;<a>File Guidelines</a></li>
                <li class="support3" onclick="clickHeader(13)" id="support3_id">&nbsp;&nbsp;&nbsp;<a>Sample Pack</a></li>
                <li class="support4" onclick="clickHeader(4)" id="support4_id">&nbsp;&nbsp;&nbsp;<a>FAQ</a></li>
                <li class="support5" onclick="clickHeader(17)" id="support5_id">&nbsp;&nbsp;&nbsp;<a>Pre-flight Checks</a></li>
                <li class="support6" onclick="clickHeader(18)" id="support6_id">&nbsp;&nbsp;&nbsp;<a>Colour Critical</a></li>
            </ul>
        </div>
        <div class="aboutUs" id="aboutUs_id" onclick="clickHeader(5)"><p>about us</p></div>
        <div class="contact" id="contact_id" onclick="clickHeader(6)"><p>contact</p></div>
        <div class="cart" id="cart_id" onclick="clickHeader(7)"><p>cart</p></div>
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
                <div class="carousel-item active" onclick="window.open('test');" style="cursor: pointer;">
                <a herf="#" onclick="clickHeader(9)">
                    <img src="{{URL::asset('/image/1.jpg') }}" alt="Los Angeles" style="width:100%;"></a>
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

                <div class="carousel-item"  onclick="window.open('test');" style="cursor: pointer;">
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
                    <img src="{{URL::asset('/image/gallery/s1.jpeg') }}" alt="New york" style="width:100%;">
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
                <a  href="javascript:void(0);" onclick="clickProduct(0)" title="Online Booklet Printing Services">
                    <div class="home_panel_img booklets_img"></div>
                    Booklets
                </a>
            </div>

            <div class="brochures_holder home_menu">
                <a href="javascript:void(0);" onclick="clickProduct(1)" title="Online Brochure Printing Services">
                    <div class="home_panel_img brochures_img"></div>
                    Brochures
                </a>
            </div>

            <div class="business_cards_holder home_menu">
                <a href="javascript:void(0);" onclick="clickProduct(2)" title="Online Business Card Printing Services">
                    <div class="home_panel_img business_cards_img"></div>
                    Business Cards
                </a>
            </div>

            <div class="notepads_holder home_menu">
                <a href="javascript:void(0);" onclick="clickProduct(3)" title="Online Notepad Printing Services">
                    <div class="home_panel_img notepads_img"></div>
                    Deskpads / Notepads
                </a>
            </div>

            <div class="docketbooks_holder home_menu">
                <a href="javascript:void(0);" onclick="clickProduct(5)" title="Online Docket Book Printing Services">
                    <div class="home_panel_img docketbooks_img"></div>
                    Docket Books
                </a>
            </div>

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
            <div class="magnets_holder home_menu">
                <a href="javascript:void(0);" onclick="clickProduct(9)" title="Buy Fridge Magnets Online">
                    <div class="home_panel_img magnets_img"></div>
                    Fridge Magnets
                </a>
            </div>
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
            <div class="presentation_folders_holder home_menu">
                <a href="javascript:void(0);" onclick="clickProduct(13)" title="Online Presentation Folder">
                    <div class="home_panel_img presentation_folders_img"></div>
                    Presentation Folders
                </a>
            </div>
            <div class="with_comps_holder home_menu">
                <a href="javascript:void(0);" onclick="clickProduct(14)">
                    <div class="home_panel_img with_comps_img"></div>
                    With Compliments
                </a>
            </div>
            <div class="web_design_holder home_menu">
                <a href="javascript:void(0);" onclick="clickProduct(15)">
                    <div class="home_panel_img web_design_img"></div>
                    Website Design
                </a>
            </div>

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
                <div class="blog_article">
                    <div class="blog_post_container">
                        <div class="blog_post_title"><a
                                href="">5
                                Kinds of Office Stationary That Will Always be Relevant </a></div>
                        <div class="blog_post_content"><p>It’s often been speculated that eventually, computers will
                                replace the functions of paper stationary in the office. Whilst this prediction has
                                ce...</p></div>
                        <div class="blog_post_view"><a
                                href="">view
                                post</a></div>
                    </div>
                    <div class="blog_post_container">
                        <div class="blog_post_title"><a
                                href="">Business
                                Card Etiquette: When And How To Hand Them Out</a></div>
                        <div class="blog_post_content"><p>For those who have had business cards for a while, the concept
                                of networking and distributing them is a no-brainer. But for those who are new to
                                th...</p></div>
                        <div class="blog_post_view"><a
                                href="">view
                                post</a></div>
                    </div>
                    <div class="blog_post_container">
                        <div class="blog_post_title"><a
                                href="">2018
                                Business Card Trends </a></div>
                        <div class="blog_post_content"><p>Looking to upgrade your business cards to something cutting
                                edge? Is it your first time printing business cards and your feeling a little lost
                                when...</p></div>
                        <div class="blog_post_view"><a
                                href="">view
                                post</a></div>
                    </div>
                    <div class="clear: both;"></div>
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
                <div class="home_panel2">
                    <a href="javascript:void(0);" onclick="clickHeader(15)">
                        <div class="home_panel2_img">
                        </div>
                        <h4>Free Delivery</h4>
                        <p>Free delivery Australia wide for all products.</p>
                        <a class="blue_link" href="javascript:void(0);"
                        onclick="clickHeader(15)">read
                            more+</a>
                    </a>
                </div>
                <div class="home_panel3">
                    <a href="javascript:void(0);" onclick="clickHeader(4)">
                        <div class="home_panel3_img">
                        </div>
                        <h4>Need Help?</h4>
                        <p>Our friendly team is ready to offer you industry help or advice.</p>
                        <a class="blue_link" href="javascript:void(0);"
                        onclick="clickHeader(4)">read
                            more+</a>
                    </a>
                </div>
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
                        <h1>Online Booklet Printing</h1>
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
                            <div class="option_holder colour_option">
                                <div class="option_icon_holder"></div>
                                <div class="option_text_holder">
                                    <div class="option_heading">Colour Options</div>
                                    <ul>
                                        <li>Printed from one to full colour</li>
                                        <li>Pantone or metallic ink</li>
                                        <li>Gloss or satin Machine varnish available</li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="option_holder bind_option">
                                <div class="option_icon_holder"></div>
                                <div class="option_text_holder">
                                    <div class="option_heading">Binding Options</div>
                                    <ul>
                                        <li>Saddlestitch - Stapled at the spine</li>
                                        <li>Perfect Bound with a flat edged spine</li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="option_holder effect_option">
                                <div class="option_icon_holder"></div>
                                <div class="option_text_holder">
                                    <div class="option_heading">Special Effect Printing</div>
                                    <ul>
                                        <li>Embossing</li>
                                        <li>Foil Stamping</li>
                                        <li>Spot UV</li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>

                        </div>


                        <h3 class="padding_top">Machine varnish for a superior finish (offset only)</h3>
                        <p>
                            Machine vanishing ensures a silky smooth finish. We use this finish on booklets that have
                            large areas of ink coverage to protect the product and reduce finger marking and scuffing or
                            simply to enhance the look and feel of the finished product.
                            <br/><a
                                href="/contact"
                                class="black_link_underline">Contact us for more information</a>
                        </p>
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
                    <div class="product_info_design">
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
                    <div class="product_info_guidelines">
                        <a href="/fileGuidelines">
                            <div class="product_info_guidelines_img">
                            </div>
                            <h4>File Guidelines</h4>
                            <p>Print specifications to achieve best printing results</p>
                            <a class="blue_link"
                               href="/fileGuidelines">read
                                more+</a>
                        </a>
                    </div>
                    <div class="product_info_templates">
                        <a href="/contact">
                            <div class="product_info_templates_img">
                            </div>
                            <h4>Artwork Templates</h4>
                            <p>Need artwork setup? Our team of experienced designers can help</p>
                            <a class="blue_link"
                               href="/contact">read
                                more+</a>
                        </a>
                    </div>
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
                        <h1>Online Brochure Printing</h1>
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
                                    <a href="/product/brochures/a4-dl"
                                       class="bro_link">
                                    </a>
                                    <div class="bro_sizing">DL</div>
                                    <div class="bro_title">4 Pages</div>
                                    <div class="bro_sizing_sml">99 x 210m(folded)</div>
                                    <div class="bro_dl"><a href="/templates/1print_brochure_4pgdl_198x210mm.pdf"
                                                           target="_blank">Download Template</a></div>
                                </div>
                                <div class="bro_setup">
                                    <a href="/product/brochures/a4-a5"
                                       class="bro_link">
                                    </a>
                                    <div class="bro_sizing">A5</div>
                                    <div class="bro_title">4 Pages</div>
                                    <div class="bro_sizing_sml">148 x 210m(folded)</div>
                                    <div class="bro_dl"><a href="templates/1print_brochure_4pga5_296x210mm.pdf"
                                                           target="_blank">Download Template</a></div>
                                </div>
                                <div class="bro_setup">
                                    <a href="#"
                                       class="bro_link">
                                    </a>
                                    <div class="bro_sizing">A4</div>
                                    <div class="bro_title">4 Pages</div>
                                    <div class="bro_sizing_sml">210 x 297mm (folded)</div>
                                    <div class="bro_dl"><a href="templates/1print_brochure_4pga4_420x297mm.pdf"
                                                           target="_blank">Download Template</a></div>
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
                                    <a href="/product/brochures/a4-dl" target="_blank"
                                       class="bro_link">
                                    </a>
                                    <div class="bro_sizing">DL</div>
                                    <div class="bro_title">4 Page Landscape</div>
                                    <div class="bro_sizing_sml">99 x 420m(folded)</div>
                                    <div class="bro_dl"><a href="templates/1print_brochure_4pgdl_198x210mm.pdf"
                                                           target="_blank">Download Template</a></div>
                                </div>
                                <div class="bro_setup">
                                    <a href="/product/brochures/a4-a5" target="_blank"
                                       class="bro_link">
                                    </a>
                                    <div class="bro_sizing">A5</div>
                                    <div class="bro_title">4 Page Landscape</div>
                                    <div class="bro_sizing_sml">148 x 420m(folded)</div>
                                    <div class="bro_dl"><a
                                            href="templates/1print_brochure_4pga5_296x210mm.pdf"
                                            target="_blank">Download Template</a></div>
                                </div>
                                <div class="bro_setup">
                                    <a href="/product/brochures/a3-a4" target="_blank"
                                       class="bro_link">
                                    </a>
                                    <div class="bro_sizing">A4</div>
                                    <div class="bro_title">4 Page Landscape</div>
                                    <div class="bro_sizing_sml">210 x 594mm (folded)</div>
                                    <div class="bro_dl"><a href="templates/1print_brochure_4pga4_420x297mm.pdf"
                                                           target="_blank">Download Template</a></div>
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
                                    <a href="/product/brochures/a4-dl"
                                       class="bro_link">
                                    </a>
                                    <div class="bro_sizing">DL</div>
                                    <div class="bro_title">6 Pages</div>
                                    <div class="bro_sizing_sml">99 x 210m(folded)</div>
                                    <div class="bro_dl"><a href="templates/1print_brochure_6pgdl_210x297mm.pdf"
                                                           target="_blank">Download Template</a></div>
                                </div>
                                <div class="bro_setup">
                                    <a href="/product/brochures/a4-a5"
                                       class="bro_link">
                                    </a>
                                    <div class="bro_sizing">A5</div>
                                    <div class="bro_title">6 Pages</div>
                                    <div class="bro_sizing_sml">148 x 210m(folded)</div>
                                    <div class="bro_dl"><a href="templates/1print_brochure_6pga5_296x210mm.pdf"
                                                           target="_blank">Download Template</a></div>
                                </div>
                                <div class="bro_setup">
                                    <a href="/product/brochures/a3-a4"
                                       class="bro_link">
                                    </a>
                                    <div class="bro_sizing">A4</div>
                                    <div class="bro_title">6 Pages</div>
                                    <div class="bro_sizing_sml">210 x 297mm (folded)</div>
                                    <div class="bro_dl"><a href="templates/1print_brochure_6pga4_627x297mm.pdf"
                                                           target="_blank">Download Template</a></div>
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
                                    <a href="/product/brochures/a4-dl"
                                       class="bro_link">
                                    </a>
                                    <div class="bro_sizing">DL</div>
                                    <div class="bro_title">6 Pages</div>
                                    <div class="bro_sizing_sml">99 x 210m(folded)</div>
                                    <div class="bro_dl"><a href="templates/1print_brochure_6pgdl_210x297mm.pdf"
                                                           target="_blank">Download Template</a></div>
                                </div>
                                <div class="bro_setup">
                                    <a href="/product/brochures/a4-a5"
                                       class="bro_link">
                                    </a>
                                    <div class="bro_sizing">A5</div>
                                    <div class="bro_title">6 Pages</div>
                                    <div class="bro_sizing_sml">148 x 210m(folded)</div>
                                    <div class="bro_dl"><a href="templates/1print_brochure_6pga5_296x210mm.pdf"
                                                           target="_blank">Download Template</a></div>
                                </div>
                                <div class="bro_setup">
                                    <a href="/product/brochures/a3-a4"
                                       class="bro_link">
                                    </a>
                                    <div class="bro_sizing">A4</div>
                                    <div class="bro_title">6 Pages</div>
                                    <div class="bro_sizing_sml">210 x 297mm (folded)</div>
                                    <div class="bro_dl"><a href="templates/1print_brochure_6pga4_627x297mm.pdf"
                                                           target="_blank">Download Template</a></div>
                                </div>
                                <div class="clear"></div>
                                <div style="clear: both;"></div>
                            </div>


                            


                            

                        </div>

                    </div>
                    <div class="main_left_right">
                        <div class="panel_pricing">
                            <h4>Pricing includes</h4>
                            <span class="option_indent"><a
                                    href="/pre-flight-checks">Free Flight Check</a></span>
                            <span class="option_indent"><a
                                    href="/pre-flight-checks">PDF Proof for your approval*</a></span>
                            <span class="option_indent"><a
                                    href="/pre-flight-checks">Free Job Tracking</a></span>
                            <span class="option_indent"><a
                                    href="/delivery">Free Delivery</a></span>
                            <p>&nbsp;</p>
                            <p class="small">* Limited to one PDF proof per print job.
                                Additional proofs will incur extra charges.</p>
                        </div>
                        <div class="panel_extras">
                            <h4 class="padding_top">Optional Extras</h4>
                            <p class="black">These options can be selected once your items have been added to your
                                shopping cart</p>
                            <p>&nbsp;</p>
                            <span class="option_indent"><a
                                    href="/support">Machine Varnish - Gloss or Matt</a></span>
                            <span class="option_indent"><a
                                    href="/pre-flight-checks">Convert your files to a print ready format</a></span>
                            <span class="option_indent"><a
                                    href="/design">Graphic Design Services</a></span>
                            <span class="option_indent"><a
                                    href="/pre-flight-checks">Hard Copy Proofs</a></span>
                            <p>&nbsp;</p>
                        </div>
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

                        <a href="/product/businessCards">
                            <div class="bcards500 notop"></div>
                        </a>

                    </div>

                    <div class="clear"></div>
                    <div style="clear: both;"></div>


                    <div class="main_left_bottom1">

                        <div class="product_info_express no_margin">
                            <a href="javascript:void(0);" onclick="clickProduct(7)">
                                <div class="product_info_express_img">
                                </div>
                                <h4>Express Printing</h4>
                                <p>For a guaranteed 48 hour despatch after your order is placed</p>
                                <a class="blue_link" href="javascript:void(0);"
                                    onclick="clickProduct(7)">read
                                    more+</a>
                            </a>
                        </div>

                        <div class="product_info_design margin_left20">
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
                        <div class="product_info_guidelines">
                            <a href="javascript:void(0);" onclick="clickHeader(16)">
                                <div class="product_info_guidelines_img">
                                </div>
                                <h4>File Guidelines</h4>
                                <p>Print specifications to achieve best printing results</p>
                                <a class="blue_link"
                                   href="javascript:void(0);" onclick="clickHeader(16)">read
                                    more+</a>
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
                                                        <option value="A5">A5</option>
                                                        <option value="A4">A4</option>
                                                        <option value="A3">A3</option>
                                                    </select></td>
                                            </tr>
                                            <tr id="brochure_page2" style="display: none;">
                                                <td id="brouchernopagesupdate" class="content_left"><select
                                                        name="productpagelist2" id="brochure_page"
                                                        style="width: 225px; font-size: 12px;"
                                                        onchange="UpdateProductPriceBrochure('size')">
                                                        <option value="A4">A4</option>

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
                                                        <option value="250GSM Gloss or Matt">250GSM Gloss or Matt
                                                        </option>
                                                    </select></td>
                                            </tr>
                                            <tr id="brochure_page4" style="display: none;">
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
                                                    </select></td>
                                            </tr>



                                            <tr style="display:none; ">
                                                <td class="content_left"><select name="productqtylist"
                                                                                 id="productqtylist"
                                                                                 style="width: 225px; font-size: 12px;"
                                                                                 onchange="UpdateProductPrice(57)">
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                        <option value="150">150</option>
                                                        <option value="200">200</option>
                                                        <option value="250">250</option>
                                                        <option value="500">500</option>
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
                                                                <center><span style="font-weight: bold;">Total Price: AUD <p id="brochure_totalPrice">0.00</p></span>
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
                                                                        <td><input type="text" class="add_to_cart"
                                                                        onclick="addToCart('brochure')"></td>
                                                                    </tr>
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
                    <div class="panel_pricing">
                        <h4>Pricing includes</h4>
                        <span class="option_indent"><a
                                href="/contact">Free Flight Check</a></span>
                        <span class="option_indent"><a
                                href="/contact">Free Job Tracking</a></span>
                        <span class="option_indent"><a
                                href="/delivery">Free Delivery</a></span>

                    </div>
                    <div class="panel_extras">
                        <h4 class="padding_top">Optional Extras</h4>
                        <p class="black">These options can be selected once your items have been added to your shopping
                            cart</p>
                        <p>&nbsp;</p>
                        <span class="option_indent"><a
                                href="/fileGuidelines">Convert your file to a print ready format including basic artwork changes</a></span>
                        <span class="option_indent"><a
                                href="/design">Graphic Design Services</a></span>
                        <span class="option_indent"><a
                                href="/delivery">PDF Proof</a></span>
                        <span class="option_indent black">Priority Delivery</span>
                        <p>&nbsp;</p>
                    </div>
                    <div class="clear"></div>

                    <a href="/product/businessCards">
                        <div class="bcards500"></div>
                    </a>
                </div>
                <div class="clear"></div>
                <div style="clear: both;"></div>
                <div class="main_left_bottom1">
                    <div class="product_info_express no_margin">
                        <a href="/product/expressPrinting">
                            <div class="product_info_express_img">
                            </div>
                            <h4>Express Printing</h4>
                            <p>For a guaranteed 48 hour despatch after your order is placed</p>
                        </a><a class="blue_link"
                               href="/product/expressPrinting">read
                            more+</a>
                    </div>


                    <div class="product_info_design margin_left20">
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
                    <div class="product_info_templates">
                        <a href="/templates/sample-buisness-card-templates.pdf" target="_blank">
                            <div class="product_info_templates_img">
                            </div>
                            <h4>Artwork Templates</h4>
                            <p>Need artwork setup? Our team of experienced designers can help</p>
                        </a><a class="blue_link" href="/templates/sample-buisness-card-templates.pdf" target="_blank">read
                            more+</a>

                    </div>
                    <div class="product_info_guidelines">
                        <a href="javascript:void(0);" onclick="clickHeader(16)">
                            <div class="product_info_guidelines_img">
                            </div>
                            <h4>File Guidelines</h4>
                            <p>Print specifications to achieve best printing results</p>
                        </a><a class="blue_link"
                        href="javascript:void(0);" onclick="clickHeader(16)">read
                            more+</a><br/>
                        <br/>

                    </div>

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
                                                            <center><span style="font-weight: bold;">Total Price: AUD <p id="bcard_totalPrice">0.00</p></span>
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
                                                                    <td><input type="text" class="add_to_cart"
                                                                            onclick="addToCart('bcard')"></td>
                                                                </tr>
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
                    <a href="/product/businessCards">
                        <div class="bcards500"></div>
                    </a>
                </div>
                <div class="clear"></div>
                <div style="clear: both;"></div>


                <div class="notepad_template_list">

                    <div class="bro_setup" style="margin-left: 0rem">
                        <a href="/product/brochures/a4-dl"
                           class="bro_link">
                        </a>
                        <div class="bro_sizing">DL</div>
                        <div class="bro_title">Notepad</div>
                        <div class="bro_sizing_sml">99 x 210m<br/>(50 pages per pad)</div>
                        <div class="bro_dl"><a href="templates/1print_brochure_4pgdl_198x210mm.pdf" target="_blank">Download
                                Template</a></div>
                    </div>
                    <div class="bro_setup">
                        <a href="/product/brochures/a4-dl"
                           class="bro_link">
                        </a>
                        <div class="bro_sizing">A6</div>
                        <div class="bro_title">Notepad</div>
                        <div class="bro_sizing_sml">105 x 148mm<br/>(50 pages per pad)</div>
                        <div class="bro_dl"><a href="templates/1print_brochure_4pgdl_198x210mm.pdf" target="_blank">Download
                                Template</a></div>
                    </div>
                    <div class="bro_setup">
                        <a href="/product/brochures/a4-dl"
                           class="bro_link">
                        </a>
                        <div class="bro_sizing">A5</div>
                        <div class="bro_title">Notepad</div>
                        <div class="bro_sizing_sml">148 x 210mm<br/>(50 pages per pad)</div>
                        <div class="bro_dl"><a href="templates/1print_brochure_4pgdl_198x210mm.pdf" target="_blank">Download
                                Template</a></div>
                    </div>
                    <div class="bro_setup">
                        <a href="/product/brochures/a4-dl"
                           class="bro_link">
                        </a>
                        <div class="bro_sizing">A4</div>
                        <div class="bro_title">Notepad</div>
                        <div class="bro_sizing_sml">210 x 297mm<br/>(50 pages per pad)</div>
                        <div class="bro_dl"><a href="templates/1print_brochure_4pgdl_198x210mm.pdf" target="_blank">Download
                                Template</a></div>
                    </div>
                    <div class="bro_setup">
                        <a href="/product/brochures/a4-dl"
                           class="bro_link">
                        </a>
                        <div class="bro_sizing">A3</div>
                        <div class="bro_title">Deskpad</div>
                        <div class="bro_sizing_sml">297 x 420mm<br/>(25 pages per pad)</div>
                        <div class="bro_dl"><a href="templates/1print_brochure_4pgdl_198x210mm.pdf" target="_blank">Download
                                Template</a></div>
                    </div>
                    <div class="bro_setup">
                        <a href="/product/brochures/a4-dl"
                           class="bro_link">
                        </a>
                        <div class="bro_sizing">A2</div>
                        <div class="bro_title">Deskpad</div>
                        <div class="bro_sizing_sml">420 x 594mm<br/>(25 pages per pad)</div>
                        <div class="bro_dl"><a href="templates/1print_brochure_4pgdl_198x210mm.pdf" target="_blank">Download
                                Template</a></div>
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
                    <div class="product_info_guidelines">
                        <a href="javascript:void(0);" onclick="clickHeader(16)">
                            <div class="product_info_guidelines_img">
                            </div>
                            <h4>File Guidelines</h4>
                            <p>Print specifications to achieve best printing results</p>
                        </a><a class="blue_link"
                               href="javascript:void(0);" onclick="clickHeader(16)">read
                            more+</a>

                    </div>

                    <div class="product_info_delivery">
                        <a href="javascript:void(0);" onclick="clickHeader(15)">
                            <div class="product_info_delivery_img">
                            </div>
                            <h4>Free Delivery</h4>
                            <p>Free delivery Australia wide for all products</p>
                        </a><a class="blue_link"
                        href="javascript:void(0);" onclick="clickHeader(15)">read
                            more+</a>

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
                                                            <center><span style="font-weight: bold;">Total Price: AUD 0.00</span>
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
                                                                    <td><input type="submit" class="add_to_cart"
                                                                               onclick="addToCard(dn)"></td>
                                                                </tr>
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
                        For more information <b>Call</b> (03) 9584 4708 or <b>email</b> <a
                            href="mailto:gerard@yellowstarpress.com.au"
                            class="black_link">gerard@yellowstarpress.com.au</a>
                    </p>
                </div>
                <div class="container_right">
                    <h2>Data Solutions</h2>
                    <p>Choose the target audience for your business and your direct marketing campaigns. We have an
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
                            DocketBooks Printing
                            </a>
            </div>

            <div class="main_left">
                <div class="main_left_left">
                    <h1>Online Docket Book Printing</h1>
                    <h3>Brand your invoice books, docket books or receipt books with your company logo and custom
                        design.</h3>
                    <p>Docket booklets are typically used for receipt forms and invoices, with perforated pages that are
                        easy to remove. A copy of the form can be easily torn from the booklet and given to the
                        customer, while a copy can be left in the booklet for the business. A sturdy cover wrap
                        maintains the booklet's integrity and can be inserted between forms to prevent transfer when
                        completing the form.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        Purchase your order, docket, receipt or invoice books, which can all be designed and printed
                        with numbering, perforated pages and colour coding if required.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        If you'd like YellowStar Press to setup your artwork this option can be added into your shopping cart.
                    </p>


                    <div class="option_size_list docket_templates">

                        <div class="bro_setup">
                            <a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf" target="_blank"
                               class="bro_link">
                            </a>
                            <div class="bro_sizing">A5</div>
                            <div class="bro_title" style="color:#959595;">Docket Book</div>
                            <div class="bro_sizing_sml">148 x 210mm</div>
                            <div class="bro_dl"><a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf"
                                                   target="_blank">Download Template</a></div>
                        </div>
                        <div class="bro_setup">
                            <a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf" target="_blank"
                               class="bro_link">
                            </a>
                            <div class="bro_sizing">A4</div>
                            <div class="bro_title" style="color:#959595;">Docket Book</div>
                            <div class="bro_sizing_sml">210 x 297m</div>
                            <div class="bro_dl"><a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf"
                                                   target="_blank">Download Template</a></div>
                        </div>


                        <div class="clear"></div>

                    </div>


                </div>
                <div class="main_left_right">

                    <div class="panel_pricing">
                        <h4>Pricing includes</h4>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Free Flight Check</a></span>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">PDF Proof for your approval*</a></span>
                        <span class="option_indent"><a
                                href="/delivery">Free Delivery</a></span>
                        <p>&nbsp;</p>
                        <p class="small">* Limited to one PDF proof per print job.
                            Additional proofs will incur extra charges.</p>
                    </div>


                    <div class="panel_extras">
                        <h4 class="padding_top">Optional Extras</h4>
                        <p class="black">These options can be selected once your items have been added to your shopping
                            cart</p>
                        <p>&nbsp;</p>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Convert your files to a print ready format</a></span>
                        <span class="option_indent"><a
                        href="/design">Graphic Design Services</a></span>

                        <p>&nbsp;</p>
                    </div>
                    <div class="clear"></div>
                    <div class="bx-up" style="margin-top:25%">
                        <div class="bcards500 notop">
                            <a href="/businessCards"
                               class="bcards500link"></a>
                        </div>

                    </div>

                </div>
                <div style="clear: both;"></div>
                <div class="clear"></div>


                <div class="main_left_bottom1">


                    <div class="product_info_express no_margin" style="margin-left: 0rem">
                        <a href="javascript:void(0);" onclick="clickProduct(7)">
                            <div class="product_info_express_img">
                            </div>
                            <h4>Express Printing</h4>
                            <p>For a guaranteed 48 hour despatch after your order is placed</p>
                            <a class="blue_link"
                               href="javascript:void(0);" onclick="clickProduct(7)">read
                                more+</a>
                        </a>
                    </div>


                    <div class="product_info_design margin_left20">
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
                    <div class="product_info_guidelines">
                        <a href="javascript:void(0);" onclick="clickHeader(16)">
                            <div class="product_info_guidelines_img">
                            </div>
                            <h4>File Guidelines</h4>
                            <p>Print specifications to achieve best printing results</p>
                            <a class="blue_link"
                            href="javascript:void(0);" onclick="clickHeader(16)">read
                                more+</a>
                        </a>
                    </div>


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
                                                            <center><span style="font-weight: bold;">Total Price: AUD <p id="signage_totalPrice">0.00</p></span>
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
                                                                        <input type="text" class="add_to_cart" onclick="addToCart('signage')">
                                                                    </td>
                                                                </tr>
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
                    <div class="panel_pricing">
                        <h4>Pricing includes</h4>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Free Flight Check</a></span>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">PDF Proof for your approval*</a></span>
                        <span class="option_indent"><a
                                href="/support">Free Job Tracking</a></span>
                        <span class="option_indent"><a
                                href="/delivery">Free Delivery</a></span>
                        <p>&nbsp;</p>
                        <p class="small">* Limited to one PDF proof per print job.
                            Additional proofs will incur extra charges.</p>
                    </div>

                    <div class="clear"></div>
                    <br style="">
                    <div class="bcards500 notop">
                        <a href="/businessCards"
                           class="bcards500link"></a>
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
                            <a href="/product/brochures/a4-dl"
                               class="bro_link">
                            </a>
                            <div class="bro_sizing">DL</div>
                            <div class="bro_title">Envelope</div>
                            <div class="bro_sizing_sml">99 x 210m(folded)</div>
                            <div class="bro_dl"><a href="templates/1print_brochure_4pgdl_198x210mm.pdf" target="_blank">Download
                                    Template</a></div>
                        </div>
                        <div class="bro_setup">
                            <a href="javascript:void(0);"
                               class="bro_link">
                            </a>
                            <div class="bro_sizing">DLX</div>
                            <div class="bro_title">Envelope</div>
                            <div class="bro_sizing_sml">148 x 210m(folded)</div>
                            <div class="bro_dl"><a href="templates/1print_brochure_4pga5_296x210mm.pdf" target="_blank">Download
                                    Template</a></div>
                        </div>
                        <div class="bro_setup">
                            <a href="/product/brochures/a4-dl"
                               class="bro_link">
                            </a>
                            <div class="bro_sizing">C5</div>
                            <div class="bro_title">Envelope</div>
                            <div class="bro_sizing_sml">210 x 297mm (folded)</div>
                            <div class="bro_dl"><a href="templates/1print_brochure_4pga4_420x297mm.pdf" target="_blank">Download
                                    Template</a></div>
                        </div>
                        <div class="bro_setup">
                            <a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf" target="_blank"
                               class="bro_link">
                            </a>
                            <div class="bro_sizing">C4</div>
                            <div class="bro_title">Envelope</div>
                            <div class="bro_sizing_sml">148 x 420m(folded)</div>
                            <div class="bro_dl"><a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf"
                                                   target="_blank">Download Template</a></div>
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
                    <div class="product_info_guidelines">
                        <a href="javascript:void(0);" onclick="clickHeader(16)">
                            <div class="product_info_guidelines_img">
                            </div>
                            <h4>File Guidelines</h4>
                            <p>Print specifications to achieve best printing results</p>
                            <a class="blue_link"
                            href="javascript:void(0);" onclick="clickHeader(16)">read
                                more+</a>
                        </a>
                    </div>
                    <div class="product_info_delivery">
                        <a href="javascript:void(0);" onclick="clickHeader(15)">
                            <div class="product_info_delivery_img">
                            </div>
                            <h4>Free Delivery</h4>
                            <p>Free delivery Australia wide for all products</p>
                            <a class="blue_link"
                            href="javascript:void(0);" onclick="clickHeader(15)">read
                                more+</a>
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
                                            <td class="pulldown"><strong>Envelope Type:&nbsp;</strong><br style="">White
                                                100gsm, peel 'n' seal or self seal,<br style="">30% ink coverage
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_left"><select name="productenvlist" id="env_type"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateEnvProductPrice(type)">
                                                    <option value="DL PLAIN">DL PLAIN 110 x 220mm</option>
                                                    <option value="DL WINDOW">DL WINDOW 110 x 220mm</option>
                                                    <option value="DLX PLAIN">DLX PLAIN 120 x 235mm</option>
                                                    <option value="DLX WINDOW">DLX WINDOW 120 x 235mm</option>
                                                    <option value="C5 PLAIN">C5 PLAIN 162 x 229mm</option>
                                                    <option value="C5 WINDOW">C5 WINDOW 162 x 229mm</option>
                                                    <option value="C4 PLAIN">C4 PLAIN 229 x 324mm</option>
                                                    <option value="C4 WINDOW">C4 WINDOW 229 x 324mm</option>
                                                </select></td>
                                        </tr>


                                        <tr>
                                            <td class="pulldown"><strong>Colour:</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="content_left" id="envcolor"><select name="productcolorlist"
                                                                                           id="env_colour"
                                                                                           style="width: 225px; font-size: 12px;"
                                                                                           onchange="UpdateEnvProductPrice(colour)">
                                                    <option value="FULL COLOUR">FULL COLOUR</option>
                                                    <option value="2 PMS COLOURS">2 PMS COLOURS</option>
                                                    <option value="1 PMS COLOUR">1 PMS COLOUR</option>
                                                </select></td>
                                        </tr>
                                        <tr style="display: none;">
                                            <td id="envcolorupdate" class="content_left"><select name="productcolorlist"
                                                                                                 id="env_colour"
                                                                                                 style="width: 225px; font-size: 12px;"
                                                                                                 onchange="UpdateEnvProductPrice(colour)">
                                                    <option value="FULL COLOUR">FULL COLOUR</option>
                                                    <option value="2 PMS COLOURS">2 PMS COLOURS</option>
                                                    <option value="1 PMS COLOUR">1 PMS COLOUR</option>
                                                </select></td>
                                        </tr>
                                        <tr style="display: none;">
                                            <td id="envcolorupdate1" class="content_left"><select
                                                    name="productcolorlist" id="env_colour"
                                                    style="width: 225px; font-size: 12px;"
                                                    onchange="UpdateEnvProductPrice(colour)">
                                                    <option value="1 PMS COLOUR">1 PMS COLOUR</option>
                                                    <option value="2 PMS COLOURS">2 PMS COLOURS</option>
                                                </select></td>
                                        </tr>

                                        <tr style="display:none; ">
                                            <td class="content_left"><select name="productqtylist" id="productqtylist"
                                                                             style="width: 225px; font-size: 12px;"
                                                                             onchange="UpdateProductPrice(62)">
                                                    <option value="500">500</option>
                                                    <option value="1000">1000</option>
                                                    <option value="2000">2000</option>
                                                    <option value="3000">3000</option>
                                                    <option value="4000">4000</option>
                                                    <option value="5000">5000</option>
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
                                                                                       name="usersetqty_500-productid_62"
                                                                                       id="usersetqty_500-productid_62"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductEnv(&quot;usersetqty_500-productid_62&quot;, &quot;FULL COLOUR&quot;, &quot;DL PLAIN&quot;, &quot;500&quot;, &quot;62&quot;, &quot;120.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice500" width="50px">
                                                            $120.00<input type="hidden"
                                                                          name="updateselectedproductprice500"
                                                                          id="updateselectedproductprice500"
                                                                          value="120.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_500-productid_62-price_120.00"
                                                                   onclick="AddEnvProduct(this.value, &quot;usersetqty_500-productid_62&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">1000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_1000-productid_62"
                                                                                       id="usersetqty_1000-productid_62"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductEnv(&quot;usersetqty_1000-productid_62&quot;, &quot;FULL COLOUR&quot;, &quot;DL PLAIN&quot;, &quot;1000&quot;, &quot;62&quot;, &quot;160.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice1000" width="50px">
                                                            $160.00<input type="hidden"
                                                                          name="updateselectedproductprice1000"
                                                                          id="updateselectedproductprice1000"
                                                                          value="160.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_1000-productid_62-price_160.00"
                                                                   onclick="AddEnvProduct(this.value, &quot;usersetqty_1000-productid_62&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">2000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_2000-productid_62"
                                                                                       id="usersetqty_2000-productid_62"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductEnv(&quot;usersetqty_2000-productid_62&quot;, &quot;FULL COLOUR&quot;, &quot;DL PLAIN&quot;, &quot;2000&quot;, &quot;62&quot;, &quot;225.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice2000" width="50px">
                                                            $225.00<input type="hidden"
                                                                          name="updateselectedproductprice2000"
                                                                          id="updateselectedproductprice2000"
                                                                          value="225.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_2000-productid_62-price_225.00"
                                                                   onclick="AddEnvProduct(this.value, &quot;usersetqty_2000-productid_62&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">3000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_3000-productid_62"
                                                                                       id="usersetqty_3000-productid_62"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductEnv(&quot;usersetqty_3000-productid_62&quot;, &quot;FULL COLOUR&quot;, &quot;DL PLAIN&quot;, &quot;3000&quot;, &quot;62&quot;, &quot;305.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice3000" width="50px">
                                                            $305.00<input type="hidden"
                                                                          name="updateselectedproductprice3000"
                                                                          id="updateselectedproductprice3000"
                                                                          value="305.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_3000-productid_62-price_305.00"
                                                                   onclick="AddEnvProduct(this.value, &quot;usersetqty_3000-productid_62&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">4000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_4000-productid_62"
                                                                                       id="usersetqty_4000-productid_62"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductEnv(&quot;usersetqty_4000-productid_62&quot;, &quot;FULL COLOUR&quot;, &quot;DL PLAIN&quot;, &quot;4000&quot;, &quot;62&quot;, &quot;380.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice4000" width="50px">
                                                            $380.00<input type="hidden"
                                                                          name="updateselectedproductprice4000"
                                                                          id="updateselectedproductprice4000"
                                                                          value="380.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_4000-productid_62-price_380.00"
                                                                   onclick="AddEnvProduct(this.value, &quot;usersetqty_4000-productid_62&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">5000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_5000-productid_62"
                                                                                       id="usersetqty_5000-productid_62"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductEnv(&quot;usersetqty_5000-productid_62&quot;, &quot;FULL COLOUR&quot;, &quot;DL PLAIN&quot;, &quot;5000&quot;, &quot;62&quot;, &quot;499.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice5000" width="50px">
                                                            $499.00<input type="hidden"
                                                                          name="updateselectedproductprice5000"
                                                                          id="updateselectedproductprice5000"
                                                                          value="499.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_5000-productid_62-price_499.00"
                                                                   onclick="AddEnvProduct(this.value, &quot;usersetqty_5000-productid_62&quot;)">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="qty_left">10000</td>
                                                        <td class="kinds_input"><input type="text"
                                                                                       name="usersetqty_10000-productid_62"
                                                                                       id="usersetqty_10000-productid_62"
                                                                                       value="1" maxlength="2"
                                                                                       style="width:30px"
                                                                                       onkeyup="UpdateSelectedProductEnv(&quot;usersetqty_10000-productid_62&quot;, &quot;FULL COLOUR&quot;, &quot;DL PLAIN&quot;, &quot;10000&quot;, &quot;62&quot;, &quot;950.00&quot;)">&nbsp;
                                                        </td>
                                                        <td id="updateselectedproductprice10000" width="50px">
                                                            $950.00<input type="hidden"
                                                                          name="updateselectedproductprice10000"
                                                                          id="updateselectedproductprice10000"
                                                                          value="950.00"></td>
                                                        <td><input type="checkbox" id="selectproduct[]"
                                                                   name="selectproduct[]"
                                                                   value="usersetqty_10000-productid_62-price_950.00"
                                                                   onclick="AddEnvProduct(this.value, &quot;usersetqty_10000-productid_62&quot;)">
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
                                                            <center><span style="font-weight: bold;">Total Price: AUD 0.00</span>
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
                                                                           onclick="ClearEnvCache(&quot;FULL COLOUR&quot;, &quot;DL PLAIN&quot;, &quot;500&quot;, &quot;62&quot;, &quot;0&quot;);"></a>
                                                                    </td>
                                                                    <td><input type="submit" class="add_to_cart"
                                                                               onclick="addToCard(envelope)"></td>
                                                                </tr>
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

<!-- Banner -->
    <div class="product_div" id="product_div_id_8" style="display:none">
        <div class="text_holder">
        <div class="main_product_container express_holder">

            <div id="breadcrumbs">
                    You are here:
                        <a href="/home" >YellowStar Press</a>
                        »
                            <a href="/product/expressPrinting" >   
                            Express Printing
                            </a>
            </div>
            <div class="main_left">
                <div class="main_left_left">
                    <h1>Express Printing</h1>
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
                    <div class="panel_pricing">
                        <h4>Pricing includes</h4>
                        <span class="option_indent"><a
                        href="/pre-flight-checks">Free Flight Check</a></span>
                        <span class="option_indent"><a
                                href="/support">Free Job Tracking</a></span>
                        <span class="option_indent"><a
                                href="/delivery">Free Delivery</a></span>
                        <p>&nbsp;</p>
                    </div>
                    <div class="panel_extras">
                        <h4 class="padding_top">Can't find the product?</h4>
                        <p class="black"> If you need a job printed urgently and can't find it on this page - contact us
                            through our <a class="blue_link"
                                           href="/contact">custom
                                quote form</a> or call us</p>
                    </div>
                    <div class="clear"></div>
                    <br style="">
                    <div class="bcards500 notop">
                        <a href="/businessCards"
                           class="bcards500link"></a>
                    </div>


                </div>
                <div class="clear"></div>
                <div style="clear: both;"></div>

                <div class="option_size_list express_templates" style="padding-top: 2rem">
                    <div class="bro_setup" style="height:7rem;margin-left:0rem">
                        <a href="templates/1print_brochure_landscape_4pp_dl_420x99.pdf" target="_blank"
                           class="bro_link" style="height:7rem">
                        </a>
                        <div class="bro_sizing">DL</div>
                        <div class="bro_sizing_sml">99 x 210mm</div>
                        <div class="bro_dl"><a href="templates/1print_brochure_landscape_4pp_dl_420x99.pdf"
                                               target="_blank">Download Template</a></div>
                    </div>
                    <div class="bro_setup" style="height:7rem">
                        <a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf" target="_blank"
                           class="bro_link" style="height:7rem">
                        </a>
                        <div class="bro_sizing">A6</div>
                        <div class="bro_sizing_sml">105 x 148mm</div>
                        <div class="bro_dl"><a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf"
                                               target="_blank">Download Template</a></div>
                    </div>
                    <div class="bro_setup" style="height:7rem">
                        <a href="templates/1print_brochure_landscape_4pp_a4_594x210.pdf" target="_blank"
                           class="bro_link" style="height:7rem">
                        </a>
                        <div class="bro_sizing">A5</div>
                        <div class="bro_sizing_sml">148 x 210mm</div>
                        <div class="bro_dl"><a href="templates/1print_brochure_landscape_4pp_a4_594x210.pdf"
                                               target="_blank">Download Template</a></div>
                    </div>
                    <div class="bro_setup" style="height:7rem">
                        <a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf" target="_blank"
                           class="bro_link" style="height:7rem">
                        </a>
                        <div class="bro_sizing">A4</div>
                        <div class="bro_sizing_sml">210 x 297mm</div>
                        <div class="bro_dl"><a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf"
                                               target="_blank">Download Template</a></div>
                    </div>
                    <div class="bro_setup" style="height:7rem">
                        <a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf" target="_blank"
                           class="bro_link" style="height:7rem">
                        </a>
                        <div class="bro_sizing">A3</div>
                        <div class="bro_sizing_sml">297 x 420mm</div>
                        <div class="bro_dl"><a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf"
                                               target="_blank">Download Template</a></div>
                    </div>
                    <div class="bro_setup" style="height:7rem">
                        <a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf" target="_blank"
                           class="bro_link" style="height:7rem">
                        </a>
                        <div class="bro_sizing" style="font-size: 2rem;line-height: 2rem;color: #7F7F7F">Business<br/>Cards
                        </div>
                        <div class="bro_sizing_sml">90 x 55mm</div>
                        <div class="bro_dl"><a href="templates/1print_brochure_landscape_4pp_a5_420x148.5.pdf"
                                               target="_blank">Download Template</a></div>
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
                    <div class="product_info_guidelines">
                        <a href="javascript:void(0);" onclick="clickHeader(16)">
                            <div class="product_info_guidelines_img">
                            </div>
                            <h4>File Guidelines</h4>
                            <p>Print specifications to achieve best printing results</p>
                            <a class="blue_link"
                            href="javascript:void(0);" onclick="clickHeader(16)">read
                                more+</a>
                        </a>
                    </div>
                    <div class="product_info_delivery">
                        <a href="javascript:void(0);" onclick="clickHeader(15)">
                            <div class="product_info_delivery_img">
                            </div>
                            <h4>Free Delivery</h4>
                            <p>Free delivery Australia wide for all products</p>
                            <a class="blue_link"
                            href="javascript:void(0);" onclick="clickHeader(15)">read
                                more+</a>
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
                                                    <option value="1800mm">1800mm</option>
                                                    <option value="2400mm">2400mm</option>

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
                                                            <center><span style="font-weight: bold;">Total Price: AUD <p id="banner_totalPrice"></span>
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
                                                                        <input type="text" class="add_to_cart" onclick="addToCart('banner')">
                                                                    </td>
                                                                </tr>
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

                        <div class="option_size_list flyer_templates" style="display:inline-flex">
                            <div class="bro_setup" style="height:7rem;margin:0rem">
                                <a href="/product/flyers/learnmore"
                                   class="bro_link" style="height:7rem">
                                </a>
                                <div class="bro_sizing">DLX</div>
                                <div class="bro_sizing_sml">99 x 210mm</div>
                                <div class="bro_dl"><a href="templates/1print_flyer_dl_210x99mm.pdf"
                                                       target="_blank">Download
                                        Template</a></div>
                            </div>
                            <div class="bro_setup" style="height:7rem">
                                <a href="/product/flyers/learnmore"
                                   class="bro_link" style="height:7rem">
                                </a>
                                <div class="bro_sizing">A6</div>
                                <div class="bro_sizing_sml">105 x 148mm</div>
                                <div class="bro_dl"><a href="templates/1print_flyer_a6_105x148mm.pdf"
                                                       target="_blank">Download
                                        Template</a></div>
                            </div>
                            <div class="bro_setup" style="height:7rem">
                                <a href="/product/flyers/learnmore"
                                   class="bro_link" style="height:7rem">
                                </a>
                                <div class="bro_sizing">A5</div>
                                <div class="bro_sizing_sml">148 x 210mm</div>
                                <div class="bro_dl"><a href="templates/1print_flyer_a5_148x210mm.pdf"
                                                       target="_blank">Download
                                        Template</a></div>
                            </div>
                            <div class="bro_setup" style="height:7rem">
                                <a href="/product/flyers/learnmore"
                                   class="bro_link" style="height:7rem">
                                </a>
                                <div class="bro_sizing">A4</div>
                                <div class="bro_sizing_sml">210 x 297mm</div>
                                <div class="bro_dl"><a href="templates/1print_flyer_a5_148x210mm.pdf"
                                                       target="_blank">Download
                                        Template</a></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                </div>
                <div class="main_left_right">
                    <div class="panel_pricing">
                        <h4>Pricing includes</h4>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Free Flight Check</a></span>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">PDF Proof for your approval*</a></span>
                        <span class="option_indent"><a
                                href="/delivery">Free Delivery</a></span>
                        <p>&nbsp;</p>
                        <p class="small">* Limited to one PDF proof per print job.
                            Additional proofs will incur extra charges.</p>
                    </div>
                    <div class="panel_extras">
                        <h4 class="padding_top">Optional Extras</h4>
                        <p class="black">These options can be selected once your items have been added to your shopping
                            cart</p>
                        <p>&nbsp;</p>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Convert your files to a print ready format</a></span>
                        <span class="option_indent"><a
                        href="javascript:void(0);" onclick="clickHeader(2)">Graphic Design Services</a></span>
                        <span class="option_indent"><a
                        href="/pre-flight-checks">Hard Copy Proofs</a></span>
                        <p>&nbsp;</p>
                    </div>
                    <div class="clear"></div>
                    <div class="bcards500 notop">
                        <a href="/businessCards"
                           class="bcards500link"></a>
                    </div>


                </div>
                <div class="clear"></div>
                <div style="clear: both;"></div>


                <div class="main_left_bottom1">


                    <div class="product_info_express no_margin">
                        <a href="javascript:void(0);" onclick="clickProduct(7)">
                            <div class="product_info_express_img">
                            </div>
                            <h4>Express Printing</h4>
                            <p>For a guaranteed 48 hour despatch after your order is placed</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickProduct(7)">read more+</a>
                        </a>
                    </div>



                    <div class="product_info_design margin_left20">
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
                    <div class="product_info_guidelines">
                        <a href="javascript:void(0);" onclick="clickHeader(16)">
                            <div class="product_info_guidelines_img">
                            </div>
                            <h4>File Guidelines</h4>
                            <p>Print specifications to achieve best printing results</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(16)">read more+</a>
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
                                                        <center><span style="font-weight: bold;">Total Price: AUD <p id="flyer_totalPrice">0.00</p></span>
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
                                                                    <input type="text" class="add_to_cart" onclick="addToCart('flyer')">
                                                                </td>
                                                                </tr>
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
                    <div class="panel_pricing">
                        <h4>Pricing includes</h4>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Free Flight Check</a></span>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">PDF Proof for your approval*</a></span>
                        <span class="option_indent"><a
                                href="/support">Free Job Tracking</a></span>
                        <span class="option_indent"><a
                                href="/delivery">Free Delivery</a></span>
                        <p>&nbsp;</p>
                        <p class="small">* Limited to one PDF proof per print job.
                            Additional proofs will incur extra charges.</p>
                    </div>
                    <div class="panel_extras">
                        <h4 class="padding_top">Optional Extras</h4>
                        <p class="black">These options can be selected once your items have been added to your shopping
                            cart</p>
                        <p>&nbsp;</p>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Convert your files to a print ready format</a></span>
                        <span class="option_indent"><a
                                href="/design">Graphic Design Services</a></span>
                        <span class="option_indent"><a
                                href="/colour-critical">Hard Copy Proofs</a></span>
                        <p>&nbsp;</p>
                    </div>
                    <div class="clear"></div>

                    <div class="bcards500 notop">
                        <a href="/businessCards"
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
                    <div class="product_info_guidelines">
                        <a href="javascript:void(0);" onclick="clickHeader(16)">
                            <div class="product_info_guidelines_img">
                            </div>
                            <h4>File Guidelines</h4>
                            <p>Print specifications to achieve best printing results</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(16)">read more+</a>
                        </a>
                    </div>
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
                                                                    <td><input type="text" class="add_to_cart"
                                                                               onclick="addToCart('fridge')"></td>
                                                                </tr>
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
                            <a href="templates/1print_letterhead_a4_210x297mm.pdf"
                               class="bro_link" style="height:7rem">
                            </a>
                            <div class="bro_sizing">A4</div>
                            <div class="bro_sizing_sml">210 x 297mm</div>
                            <div class="bro_dl"><a href="templates/1print_letterhead_a4_210x297mm.pdf" target="_blank">Download
                                    Template</a></div>
                        </div>

                    </div>


                </div>
                <div class="main_left_right">
                    <div class="panel_pricing">
                        <h4>Pricing includes</h4>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Free Flight Check</a></span>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">PDF Proof for your approval*</a></span>
                        <span class="option_indent"><a
                                href="/support">Free Job Tracking</a></span>
                        <span class="option_indent"><a
                                href="/delivery">Free Delivery</a></span>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Free text corrections to your supplied file (if requested)</a></span>

                        <p>&nbsp;</p>
                        <p class="small">* Limited to one PDF proof per print job.
                            Additional proofs will incur extra charges.</p>
                    </div>
                    <div class="panel_extras">
                        <h4 class="padding_top">Optional Extras</h4>
                        <p class="black">These options can be selected once your items have been added to your shopping
                            cart</p>
                        <p>&nbsp;</p>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Convert your files to a print ready format</a></span>
                        <span class="option_indent"><a
                                href="/design">Graphic Design Services</a></span>
                        <span class="option_indent"><a
                                href="/colour-critical">Hard Copy Proofs</a></span>
                        <p>&nbsp;</p>
                    </div>
                    <div class="clear"></div>
                    <div class="bcards500 notop">
                        <a href="/businessCards" class="bcards500link"></a>
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
                    <div class="product_info_guidelines">
                        <a href="javascript:void(0);" onclick="clickHeader(16)">
                            <div class="product_info_guidelines_img">
                            </div>
                            <h4>File Guidelines</h4>
                            <p>Print specifications to achieve best printing results</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(16)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_delivery">
                        <a href="javascript:void(0);" onclick="clickHeader(15)">
                            <div class="product_info_delivery_img">
                            </div>
                            <h4>Free Delivery</h4>
                            <p>Free delivery Australia wide for all products</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(15)">read more+</a>
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
                                                            <center><span style="font-weight: bold;">Total Price: AUD <p id="lw_totalPrice">0.00</p></span>
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
                                                                    <input type="text" class="add_to_cart" onclick="addToCart('lw')">
                                                                </td>
                                                                </tr>
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
                            <a href="/product/postcards/learnmore"
                               class="bro_link" style="height:7rem">
                            </a>
                            <div class="bro_sizing">DL</div>
                            <div class="bro_sizing_sml">99 x 210mm</div>
                            <div class="bro_dl"><a href="templates/1print_postcard_dl_99x210mm.pdf" target="_blank">Download
                                    Template</a></div>
                        </div>
                        <div class="bro_setup" style="height:7rem;">
                            <a href="/product/postcards/learnmore"
                               class="bro_link" style="height:7rem">
                            </a>
                            <div class="bro_sizing">A6</div>
                            <div class="bro_sizing_sml">105 x 148mm</div>
                            <div class="bro_dl"><a href="templates/1print_postcard_a6_105x148mm.pdf" target="_blank">Download
                                    Template</a></div>
                        </div>
                        <div class="bro_setup" style="height:7rem;">
                            <a href="/product/postcards/learnmore"
                               class="bro_link" style="height:7rem">
                            </a>
                            <div class="bro_sizing">A5</div>
                            <div class="bro_sizing_sml">148 x 210mm</div>
                            <div class="bro_dl"><a href="templates/1print_postcard_a5_148x210mm.pdf" target="_blank">Download
                                    Template</a></div>
                        </div>
                        <div class="bro_setup" style="height:7rem;">
                            <a href="/product/postcards/learnmore"
                               class="bro_link" style="height:7rem">
                            </a>
                            <div class="bro_sizing">2DL</div>
                            <div class="bro_title" style="line-height:0.1rem;height:0.2rem">Envelope</div>
                            <div class="bro_sizing_sml" style="line-height:2rem;height:2.1rem">198 x 210mm</div>
                            <div class="bro_dl"><a href="templates/1print_brochure_4pga5_296x210mm.pdf" target="_blank">Download
                                    Template</a></div>
                        </div>
                    </div>


                </div>
                <div class="main_left_right">
                    <div class="panel_pricing">
                        <h4>Pricing includes</h4>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Free Flight Check</a></span>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">PDF Proof for your approval*</a></span>
                        <span class="option_indent"><a
                                href="/support">Free Job Tracking</a></span>
                        <span class="option_indent"><a
                                href="/delivery">Free Delivery</a></span>
                        <p>&nbsp;</p>
                        <p class="small">* Limited to one PDF proof per print job.
                            Additional proofs will incur extra charges.</p>
                    </div>
                    <div class="panel_extras">
                        <h4 class="padding_top">Optional Extras</h4>
                        <p class="black">These options can be selected once your items have been added to your shopping
                            cart</p>
                        <p>&nbsp;</p>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Convert your files to a print ready format</a></span>
                        <span class="option_indent"><a
                                href="/design">Graphic Design Services</a></span>
                        <span class="option_indent"><a
                                href="/colour-critical">Hard Copy Proofs</a></span>
                        <p>&nbsp;</p>
                    </div>

                    <div class="panel_marketing">
                        <h4 class="padding_top">Personalised Printing and Mailing</h4>
                        <p class="black">We can also personalise each postcard with unique printing options as well as
                            oversee your mail marketing campaigns. <a
                                href="/directMarketing"
                                class="blue_link">Click here</a></p>
                        <p>&nbsp;</p>
                    </div>
                    <div class="clear"></div>
                    <div class="bcards500 notop">
                        <a href="/businessCards" class="bcards500link"></a>
                    </div>

                </div>
                <div class="clear"></div>

                <div style="clear: both;"></div>

                <div class="main_left_bottom1">


                    <div class="product_info_express no_margin">
                        <a href="javascript:void(0);" onclick="clickProduct(7)">
                            <div class="product_info_express_img">
                            </div>
                            <h4>Express Printing</h4>
                            <p>For a guaranteed 48 hour despatch after your order is placed</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickProduct(7)">read more+</a>
                        </a>
                    </div>



                    <div class="product_info_design margin_left20">
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
                    <div class="product_info_guidelines">
                        <a type="button" onclick="clickHeader(16)">
                            <div class="product_info_guidelines_img">
                            </div>
                            <h4>File Guidelines</h4>
                            <p>Print specifications to achieve best printing results</p>
                            <a class="blue_link" type="button" onclick="clickHeader(16)">read more+</a>
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
                                                        <option value="250GSM Gloss or Matt">250GSM Gloss or Matt
                                                        </option>
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
                                                            <center><span style="font-weight: bold;">Total Price: AUD  <p id="post_totalPrice">0.00</p></span>
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
                                                                    <input type="text" class="add_to_cart" onclick="addToCart('post')">
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
                    <div class="panel_pricing">
                        <h4>Pricing includes</h4>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Free Flight Check</a></span>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">PDF Proof for your approval*</a></span>
                        <span class="option_indent"><a
                                href="/support">Free Job Tracking</a></span>
                        <span class="option_indent"><a
                                href="/delivery">Free Delivery</a></span>
                        <p>&nbsp;</p>
                        <p class="small">* Limited to one PDF proof per print job.
                            Additional proofs will incur extra charges.</p>
                    </div>
                    <div class="panel_extras">
                        <h4 class="padding_top">Optional Extras</h4>
                        <p class="black">These options can be selected once your items have been added to your shopping
                            cart</p>
                        <p>&nbsp;</p>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Convert your files to a print ready format</a></span>
                        <span class="option_indent"><a
                                href="/design">Graphic Design Services</a></span>
                        <span class="option_indent"><a
                                href="/colour-critical">Hard Copy Proofs</a></span>
                        <p>&nbsp;</p>
                    </div>
                    <div class="clear"></div>
                    <div class="bcards500 notop">
                        <a href="/businessCards"
                           class="bcards500link"></a>
                    </div>


                </div>
                <div class="clear"></div>

                <div style="clear: both;"></div>
                <div class="option_size_list poster_templates">
                    <div class="bro_setup" style="height:7rem;margin-left:0rem">
                        <a href="/product/posters/learnmore"
                           class="bro_link" style="height:7rem">
                        </a>
                        <div class="bro_sizing">A3</div>
                        <div class="bro_sizing_sml">297 x 420mm</div>
                        <div class="bro_dl"><a href="templates/1print_poster_a3_420x297mm.pdf" target="_blank">Download
                                Template</a></div>
                    </div>
                    <div class="bro_setup" style="height:7rem">
                        <a href="/product/posters/learnmore"
                           class="bro_link" style="height:7rem">
                        </a>
                        <div class="bro_sizing">A2</div>
                        <div class="bro_sizing_sml">420 x 594mm</div>
                        <div class="bro_dl"><a href="templates/1print_poster_a2_420x594mm.pdf" target="_blank">Download
                                Template</a></div>
                    </div>
                    <div class="bro_setup" style="height:7rem">
                        <a href="/product/posters/learnmore"
                           class="bro_link" style="height:7rem">
                        </a>
                        <div class="bro_sizing">A1</div>
                        <div class="bro_sizing_sml">594 x 841mm</div>
                        <div class="bro_dl"><a href="templates/1print_poster_a1_840x594mm.pdf" target="_blank">Download
                                Template</a></div>
                    </div>
                    <div class="bro_setup" style="height:7rem">
                        <a href="/product/posters/learnmore"
                           class="bro_link" style="height:7rem">
                        </a>
                        <div class="bro_sizing">A0*</div>
                        <div class="bro_sizing_sml">841 x 1189mm</div>
                        <div class="bro_dl"><a href="templates/1print_brochure_4pga5_296x210mm.pdf" target="_blank">Download
                                Template</a></div>
                    </div>
                    <div class="bro_setup" style="height:7rem">
                        <a href="/product/posters/learnmore"
                           class="bro_link" style="height:7rem">
                        </a>
                        <div class="bro_sizing">B0*</div>
                        <div class="bro_sizing_sml">1000 x 1414mm</div>
                        <div class="bro_dl"><a href="templates/1print_brochure_4pga5_296x210mm.pdf" target="_blank">Download
                                Template</a></div>
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
                    <div class="product_info_guidelines">
                        <a type="button" onclick="clickHeader(16)">
                            <div class="product_info_guidelines_img">
                            </div>
                            <h4>File Guidelines</h4>
                            <p>Print specifications to achieve best printing results</p>
                            <a class="blue_link" type="button" onclick="clickHeader(16)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_delivery">
                        <a href="javascript:void(0);" onclick="clickHeader(15)">
                            <div class="product_info_delivery_img">
                            </div>
                            <h4>Free Delivery</h4>
                            <p>Free delivery Australia wide for all products</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(15)">read more+</a>
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
                                                            <center><span style="font-weight: bold;">Total Price: AUD <p id="poster_totalPrice">0.00</p></span>
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
                                                                    <input type="text" class="add_to_cart" onclick="addToCart('poster')">
                                                                </td>
                                                                </tr>
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
                    <div class="panel_pricing">
                        <h4>Pricing includes</h4>
                        <span class="option_indent"><a href="javascript:void(0)">Free folder setup included. Maximum of 2 copy changes</a></span>
                        <span class="option_indent"><a
                                href="/support">Free Machine Varnish</a></span>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Free Flight Check</a></span>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Make your file press ready (if required)</a></span>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">PDF Proof for your approval*</a></span>
                        <span class="option_indent"><a
                                href="/support">Free Job Tracking</a></span>
                        <span class="option_indent"><a
                                href="/delivery">Free Delivery</a></span>
                        <p>&nbsp;</p>
                        <p class="small">* Limited to one PDF proof per print job.
                            Additional proofs will incur extra charges.</p>
                    </div>
                    <div class="panel_extras">
                        <h4 class="padding_top">Optional Extras</h4>
                        <p class="black">These options can be selected once your items have been added to your shopping
                            cart</p>
                        <p>&nbsp;</p>

                        <span class="option_indent"><a
                                href="/pre-flight-checks">Convert your files to a print ready format</a></span>
                        <span class="option_indent"><a
                                href="/design">Graphic Design Services</a></span>
                        <span class="option_indent"><a
                                href="/colour-critical">Hard Copy Proofs</a></span>
                        <p>&nbsp;</p>
                    </div>
                    <div class="clear"></div>
                    <div class="bcards500 notop">
                        <a href="/businessCards"
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
                    <div class="product_info_guidelines">
                        <a type="button" onclick="clickHeader(16)">
                            <div class="product_info_guidelines_img">
                            </div>
                            <h4>File Guidelines</h4>
                            <p>Print specifications to achieve best printing results</p>
                            <a class="blue_link" type="button" onclick="clickHeader(16)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_delivery">
                        <a href="javascript:void(0);" onclick="clickHeader(15)">
                            <div class="product_info_delivery_img">
                            </div>
                            <h4>Free Delivery</h4>
                            <p>Free delivery Australia wide for all products</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(15)">read more+</a>
                        </a>
                    </div>
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
                                                            <center><span style="font-weight: bold;">Total Price: AUD 0.00</span>
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
                                                                    <td><input type="submit" class="add_to_cart"
                                                                               onclick="addToCard(presentation)"></td>
                                                                </tr>
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
                            <a href="javascript:void(0);"
                               class="bro_link"style="height:7rem">
                            </a>
                            <div class="bro_sizing">DL</div>
                            <div class="bro_sizing_sml">99 x 210mm</div>
                            <div class="bro_dl"><a href="templates/1print_brochure_4pga5_296x210mm.pdf" target="_blank">Download
                                    Template</a></div>
                        </div>

                    </div>


                </div>
                <div class="main_left_right">
                    <div class="panel_pricing">
                        <h4>Pricing includes</h4>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Free Flight Check</a></span>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">PDF Proof for your approval*</a></span>
                        <span class="option_indent"><a
                                href="/support">Free Job Tracking</a></span>
                        <span class="option_indent"><a
                                href="/delivery">Free Delivery</a></span>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Free text corrections to your supplied file (if requested)</a></span>
                        <p>&nbsp;</p>
                        <p class="small">* Limited to one PDF proof per print job.
                            Additional proofs will incur extra charges.</p>
                    </div>
                    <div class="panel_extras">
                        <h4 class="padding_top">Optional Extras</h4>
                        <p class="black">These options can be selected once your items have been added to your shopping
                            cart</p>
                        <p>&nbsp;</p>
                        <span class="option_indent"><a
                                href="/pre-flight-checks">Convert your files to a print ready format</a></span>
                        <span class="option_indent"><a
                                href="/design">Graphic Design Services</a></span>
                        <span class="option_indent"><a
                                href="/colour-critical">Hard Copy Proofs</a></span>
                        <p>&nbsp;</p>
                    </div>
                    <div class="clear"></div>
                    <div class="bcards500 notop">
                        <a href="/businessCards" class="bcards500link"></a>
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
                    <div class="product_info_guidelines">
                        <a href="javascript:void(0);" onclick="clickHeader(16)">
                            <div class="product_info_guidelines_img">
                            </div>
                            <h4>File Guidelines</h4>
                            <p>Print specifications to achieve best printing results</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(16)">read more+</a>
                        </a>
                    </div>
                    <div class="product_info_delivery">
                        <a href="javascript:void(0);" onclick="clickHeader(15)">
                            <div class="product_info_delivery_img">
                            </div>
                            <h4>Free Delivery</h4>
                            <p>Free delivery Australia wide for all products</p>
                            <a class="blue_link" href="javascript:void(0);" onclick="clickHeader(15)">read more+</a>
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
                                                            <center><span style="font-weight: bold;">Total Price: AUD <p id="comps_totalPrice">0.00</p></span>
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
                                                                    <input type="text" class="add_to_cart" onclick="addToCart('comps')">
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
                        Call (03) 9584 4708 or email <a href="mailto:gerard@yellowstarpress.com.au" class="black_link">gerard@yellowstarpress.com.au</a> for more information and prices.
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
                <button class="gallery_span" type="button" onclick="show_hidden()"></button>
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
                            <div class="mask1"><p>postercards</p></div>
                            </a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="size_rowfor3">
                        <div class="gallery_info_for15_7 no_margin">
                            <a href="javascript:void(0);" onclick="clickGallery(7)">
                            <div class="mask1"><p>envelopers</p></div>
                            </a>
                        </div>
                        <div class="gallery_info_for15_8 margin_left20">
                            <a href="javascript:void(0);" onclick="clickGallery(8)">
                            <div class="mask1"><p>flyers</p></div>
                            </a>
                        </div>
                        <div class="gallery_info_for15_9 margin_left20">
                            <a href="javascript:void(0);" onclick="clickGallery(9)">
                            <div class="mask1"><p>letterhead</p></div>
                            </a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="size_rowfor3">
                        <div class="gallery_info_for15_10 no_margin">
                            <a href="javascript:void(0);" onclick="clickGallery(10)">
                            <div class="mask1"><p>signage</p></div>
                            </a>
                        </div>
                        <div class="gallery_info_for15_11 margin_left20">
                            <a href="javascript:void(0);" onclick="clickGallery(1)">
                            <div class="mask1"><p>Coming Soon</p></div>
                            </a>
                        </div>
                        <div class="gallery_info_for15_12 margin_left20">
                            <a href="javascript:void(0);" onclick="clickGallery(1)">
                            <div class="mask1"><p>Coming Soon</p></div>
                            </a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="size_rowfor3">
                        <div class="gallery_info_for15_13 no_margin">
                            <a href="javascript:void(0);" onclick="clickGallery(1)">
                            <div class="mask1"><p>Coming Soon</p></div>
                            </a>
                        </div>
                        <div class="gallery_info_for15_14 margin_left20">
                            <a href="javascript:void(0);" onclick="clickGallery(1)">
                            <div class="mask1"><p>Coming Soon</p></div>
                            </a>
                        </div>
                        <div class="gallery_info_for15_15 margin_left20">
                            <a href="javascript:void(0);" onclick="clickGallery(1)">
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
                Product directions1
                </p></div>
                    <button type="button" class="gallery_page_next" onclick="clickProduct(1)"><a href="/product/brochures"></a><i class="fas fa-chevron-right"></i></button>
                </div>
                <div class="mySlides" ><div class="gallery_info_for6-2"  id="gallery_info_for6-2_id"></div><div class="gallery_silde_note"><p id ="gallery_silde_note_id2">
                Product directions2
                </p></div>
            <button type="button" class="gallery_page_next" ><i class="fas fa-chevron-right"></i></button></div>
                <div class="mySlides" ><div class="gallery_info_for6-3"  id="gallery_info_for6-3_id"></div><div class="gallery_silde_note"><p id ="gallery_silde_note_id3">
                Product directions3
                </p></div>
            <button type="button" class="gallery_page_next" ><i class="fas fa-chevron-right"></i></button></div>
                <div class="mySlides" ><div class="gallery_info_for6-4"  id="gallery_info_for6-4_id"></div><div class="gallery_silde_note" ><p id ="gallery_silde_note_id4">
                Product directions4
                </p></div>
            <button type="button" class="gallery_page_next" ><i class="fas fa-chevron-right"></i></button></div>
                <div class="mySlides" ><div class="gallery_info_for6-5" id="gallery_info_for6-5_id"></div><div class="gallery_silde_note"><p id ="gallery_silde_note_id5">
                Product directions5
                </p></div>
            <button type="button" class="gallery_page_next" ><i class="fas fa-chevron-right"></i></button></div>
                <div class="mySlides" ><div class="gallery_info_for6-6" id="gallery_info_for6-6_id"></div><div class="gallery_silde_note" ><p id ="gallery_silde_note_id6">
                Product directions6
                </p></div>
            <button type="button" class="gallery_page_next" ><i class="fas fa-chevron-right"></i></button></div>
            </div>
            <div class="slider-controls1">
                <button type="button" class="gallery_next" onclick="plusDivs(-1)"><i class="fas fa-chevron-right"></i></button>
                <button type="button" class="gallery_previous" onclick="plusDivs(1)"><i class="fas fa-chevron-left"></i></button>
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
                    <li><a class="click_a" href="">Envelopes</a></li>
                    <li><a class="click_a" href="">Folders</a></li>
                    <li>Labels</li>
                    <li>Manuals</li>
                    <li>NCR Books</li>
                    <li><a class="click_a" href="">Posters</a></li>
                    <li><a class="click_a" href="">Postcards</a></li>
                </ul>
            </div>
            <div class="about_col2">
                <ul class="black_bullets">
                    <li><a class="click_a" href="">Pads</a></li>
                    <li><a class="click_a" href="">Presentation Folders</a></li>
                    <li><a class="click_a" href="">Booklets</a></li>
                    <li><a class="click_a" href="">Books</a></li>
                    <li>Calendars</li>
                    <li><a class="click_a" href="">Catalogues</a></li>
                    <li><a class="click_a" href="">Desk Pads</a></li>
                    <li><a class="click_a" href="">Flyers</a></li>
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
                        <!-- <span class="black_bold ">Call</span>--> <span class="phone_lg">(03) 9584 4708</span>
                    </div>
                    <div class="contact_fax">
                        <span class="black_bold">Fax</span> (03) 9584 4708
                    </div>


                    <div class="contact_email">
                        <span class="contact-align-left">Quotes</span>
                        <span class="contact-align"><a
                                href="mailto:gerard@yellowstarpress.com.au"
                                class="black_link">gerard@yellowstarpress.com.au</a></span>
                    </div>
                    <div class="contact_email">
                        <span class="contact-align-left">Orders</span>
                        <span class="contact-align"><a
                        href="mailto:gerard@yellowstarpress.com.au"
                                class="black_link">gerard@yellowstarpress.com.au</a></span>
                    </div>
                    <div class="contact_email_last">
                        <span class="contact-align-left">Accounts</span>
                        <span class="contact-align"><a
                        href="mailto:gerard@yellowstarpress.com.au"
                                class="black_link">gerard@yellowstarpress.com.au</a></span>
                    </div>
                    <p class="black_heading">You can visit us at:</p>
                    <p style="color: #323232;"> 26 Metropolitan Av, Nunawarding 3131 Australia</p>
                    <img src="{{URL::asset('/image/Contact.jpg') }}" width=90% height=80%>
                </div>
                <div class="contact_right_quote">
                    <div class="contact_form_left">
                    <h2>Request a</h2>
                    <h2> quote</h2>
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
                        <td><input type="file" name="file1" id="contact_file1" accept=".docx,"></td>
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
                        <div class="subscribe_holder">
                        <input class="newsletter_subscribe" type="checkbox" name="sigin_in_newsletter" id="contact_subscribe" value="yes" checked="">
                        </div>
                        <div class="subscribe_text">
                        Subscribe to our newsletter for special offers
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















                {{--<div class="design_div_rightContainer">
                    <!-- Feedback Form Starts Here -->
                    <div id="feedback">
                        <!-- Heading Of The Form -->
                        <div class="head">
                            <h3 class="contact_title" align="center">FeedBack Form</h3>
                            <p>This is feedback form. Send us your feedback !</p>
                        </div>
                        <!-- Feedback Form -->
                        <form action="mailto:sy135673@gmail.com" id="form" method="post" name="form"
                              enctype="text/plain">
                            <input class="contact_div_vname" id="contact_div_vname" placeholder="Your Name" type="text"
                                   name="Name" align="center">
                            <input class="contact_div_vemail" id="contact_div_vemail" placeholder="Your Email"
                                   type="text" name="Email" align="center">
                            <input class="contact_div_sub" id="contact_div_sub" placeholder="Subject" type="text"
                                   name="Subject" align="center">
                            <p>Your Suggestion/Feedback</p>
                            <textarea class="contact_div_msg" id="contact_div_msg" placeholder="Type your text here..."
                                      name="Message"></textarea>
                            <p></p>
                            <input class="contact_div_send" id="contact_div_send" type="submit" value="Send Feedback">
                        </form>
                    </div>
                    <!-- Feedback Form Ends Here -->
                </div>--}}

                <div style="clear: both;"></div>

                <h3 align="center">Address</h3>
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
                    </div>
                    <div class = "cart_next" onclick = "cartProcess('confirm')">Next</div>
                    <div class = "cart_back" onclick = "cartProcess('myCart')">Back</div>
                </div>

                <div id="cart_confirm" style="display: none;">
                    <h1>Confirm your Order</h1>
                    <div id="cart_confirmOrder">

                    </div>
                    <div class = "cart_next" onclick = "cartProcess('upload')">Next</div>
                    <div class = "cart_back" onclick = "cartProcess('delivery')">Back</div>
                </div>

                <div id="cart_upload" style="display: none;">
                    <h1>Upload your Files</h1>
                    <div class = "cart_next" onclick = "cartProcess('payment')">Next</div>
                    <div class = "cart_back" onclick = "cartProcess('confirm')">Back</div>
                </div>

                <div id="cart_payment" style="display: none;">
                    <h1>Payment</h1>
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
            <button class="login_div_submit" align="center">Send</button>

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
                        href="mailto:gerard@yellowstarpress.com.au" class="blue_link">gerard@yellowstarpress.com.au</a>
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
                    To change your account details simply email gerard@yellowstarpress.com.au with your new details. To cancel your
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
                        class="black_bold">email</b> gerard@yellowstarpress.com.au
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
            <p>YellowStar Press makes every effort to be flexible and make it as easy as possible to do business with us. Choose your preferred ordering method from the options below. If you require any further assistance please email <a class="black_link" href="mailto:gerard@yellowstarpress.com.au">gerard@yellowstarpress.com.au</a> or call us <span class="black">(03) 9584 4708</span>.</p>
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
            <p>If you'd prefer to email your order, or simply choose not to use your credit card when ordering, send an email to <a class="black_link" href="mailto:gerard@yellowstarpress.com.au">gerard@yellowstarpress.com.au</a>, detailing what you require along with the attached print ready file.</p>
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
            Please email <a class="black_link" href="mailto:gerard@yellowstarpress.com.au">gerard@yellowstarpress.com.au</a> or call us <span class="black">(03) 9584 4708</span>.
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
        <p class="black_bold">Terms &amp; Conditions</p>
        <p>YellowStar Press go to great measures to ensure your files are print ready - however, it is ultimately the responsibility of the person supplying the files to ensure they are in accordance with <a href="/fileGuidelines" class="blue_link">YellowStar Press file guidelines</a>. YellowStar Press does not accept responsibility if a job is printed faulty due to supplied files setup incorrectly. Pre-flight does not include checking / correcting spelling errors.
        </p>








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
        Free setup does not include creating new logo's or creating complex imagery. If you are unsure of what you require falls under our free setup terms, please call or email us at <a href="mailto:gerard@yellowstarpress.com.au" class="blue_link">gerard@yellowstarpress.com.au</a>
        </p>
        
        <h3 class="pre_flight_title">converting files to a press ready format</h3>
        <p>We understand that not everyone can supply 100% press ready artwork, <a href="/fileGuidelines" class="blue_link">see YellowStar Press file guidelines</a>. If required, YellowStar Press can convert your supplied files for a small fee. On selected products we offer this service free of charge.
        </p>
        <p>&nbsp;</p>
        <p>
        For more information <span class="black_bold">Call</span> (03) 9584 4708 or <span class="black_bold">email</span> gerard@yellowstarpress.com.au
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
            </p><p>&nbsp;</p><p>
            If you want to ensure your job will print accurately, please refer to our <a href="/fileGuidelines" class="black_link">file guidelines</a> for tips and print specifications.
            </p>
                
                    </div>
                <div class="container_right">
                <h2 class="large">How to order a proof</h2>
                <p>
                To order your hard copy proof, add your chosen product to your shopping cart. Once you are in your shopping cart, you can then select a High resolution hard copy proof. Alternatively, you can order your hard copy proof by emailing us at <a href="mailto:gerard@yellowstarpress.com.au" class="black_link">gerard@yellowstarpress.com.au</a>.
            </p><p>&nbsp;</p><p> 
            We will send your proof to you in the mail and wait for your confirmation before we proceed with the final product.
            </p><p>&nbsp;</p><p> 
            For more information <b class="black">Call</b> (03) 9584 4708 or <b class="black">email</b> gerard@yellowstarpress.com.au
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
                    <img src="image/tel.png" alt="Call 03 9878 6999" href="tel:0398786999" class="footer_phone_number">
                    <a href="tel:0398786999"><h1>03 9878 6999<h></a>
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
                        <li><a onclick="clickProduct(3)">Notepad/Desk Pad Printing</a></li>
                        <li><a onclick="clickProduct(11)">Postcard Printing</a></li>
                        <li><a onclick="clickProduct(12)">Posters Printing</a></li>
                        <li><a onclick="clickProduct(13)">Presentation Folder Printing</a></li>
                        <li><a onclick="clickProduct(7)">Express Printing</a></li>
                        <li><a onclick="clickHeader(6)">Custom Quotes</a></li>
                        <li><a onclick="clickProduct(15)">Website Design</a></li>
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
                        <li><a onclick="clickHeader(15)">Delivery</a></li>
                        <li><a onclick="clickHeader(16)">File Guidelines</a></li>
                        <!-- <li><a>FTP Accounts</a></li>
                        <li><a>Colour Critical</a></li> -->
                        <li><a onclick="clickHeader(13)">Sample Pack</a></li>
                        <li><a onclick="clickHeader(4)">FAQ</a></li>
                        <li><a onclick="clickHeader(17)">Pre-flight Checks</a></li>
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
                <a href="index.html" class="az-logo"><span></span> YELLOWSTAR</a>
                <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
            </div><!-- az-header-left -->
            <div class="az-header-menu">
                <div class="az-header-menu-header">
                    <a href="index.html" class="az-logo"><span></span> YELLOWSTAR</a>
                    <a href="" class="close">×</a>
                </div><!-- az-header-menu-header -->
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
                <a href="index.html" class="az-logo"><span></span> YELLOWSTAR</a>
                <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
            </div><!-- az-header-left -->
            <div class="az-header-menu">
                <div class="az-header-menu-header">
                    <a href="index.html" class="az-logo"><span></span> YELLOWSTAR</a>
                    <a href="" class="close">×</a>
                </div><!-- az-header-menu-header -->
                <ul class="nav">
                    <li class="nav-item" id="nav-dashboard_id" onclick="onclickHeader(4)">
                        <a class="nav-link" type="button"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>
                    </li>

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

